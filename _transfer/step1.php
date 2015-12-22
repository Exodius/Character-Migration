<?php
include_once("t_dbfunctions.php");
include_once("t_functions.php");
include_once("t_config.php");
include_once("f_switch.php");
require_once("item_list.php");
require_once("definitions.php");

if (isset($_POST['Account']) && !empty($_POST['Account']) && isset($_POST['Password']) && !empty($_POST['Password']) && isset($_POST['ServerUrl']) && !empty($_POST['ServerUrl']) && isset($_POST['RealmlistList']) && !empty($_POST['RealmlistList'])) {
    $o_Account = trim($_POST['Account']);
    $o_Password = trim($_POST['Password']);
    $o_URL = trim($_POST['ServerUrl']);

    $file = $_FILES['file']['tmp_name'];
    $fileopen = fopen($file, 'r');
    $buffer = '';
    $reason = '';

    while (!feof($fileopen)) {
        $buffer2 = fgets($fileopen);
        $buffer .= $buffer2;
    }

    fclose($fileopen);
    unlink($file);
    $part = explode('"', $buffer);
    if (isset($part[1])) {
        $DUMP = $part[1];
        $arrDump = parse_ini_string($buffer);

        $VER = isset($arrDump["CHDMP_VER"]) ? $arrDump["CHDMP_VER"] : "Unknown";

        if (!in_array($VER, $addonVers) /* && (!isset($_POST["obsolete"]) || $_POST["obsolete"] != "enable") */) {
            ?>
            <script>
                alert("!!ATTENZIONE!!\n\nLa versione dell'addon con cui è stato estratto questo chardump è obsoleta:<?= $VER ?>\n\n Scarica la nuova versione e riesegui il dump!");
                window.location.href = "playerside.php";
            </script>
            <?php
            die();
        }

        $REALM_NAME = $_POST['RealmlistList'];
        $DECODED_DUMP = _DECRYPT($DUMP);
        $CHAR_REALM = GetRealmID($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $REALM_NAME);
        $CHAR_ACCOUNT_ID = _GetCharacterAccountID();
        $PLAYER_TRANSFER_STACKS = CanOrNoTransferServer($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $CHAR_REALM, $AllowedGMLevels, _CharacterDBSwitch($CHAR_REALM));
        $json = json_decode(stripslashes($DECODED_DUMP), true);
        $CHAR_NAME = mb_convert_case(mb_strtolower($json['uinf']['name'], 'UTF-8'), MB_CASE_TITLE, 'UTF-8');
        $O_GUID = $json['uinf']['guid'];
        $O_REALMLIST = $json['ginf']['realmlist'];
        $O_REALM = $json['ginf']['realm'];
        $RaceID = _GetRaceID(strtoupper($json['uinf']['race']));
        $ClassID = _GetClassID(strtoupper($json['uinf']['class']));
        $CharLevel = _MaxValue($json['uinf']['level'], $MaxCL);
        $pType = $_POST["PortingType"];
        $client = $json['ginf']['clientbuild'];

        // options
        $changefr = isset($_POST["changefr"]) && $_POST["changefr"] == "enable";

        $atLogin = $changefr ? "0x192" : "0x180";

        $connection = mysql_connect($AccountDBHost, $DBUser, $DBPassword);
        _SelectDB($AccountDB, $connection);
        $result = mysql_query("SELECT `address`,`port` FROM `realmlist` WHERE `id` = " . $CHAR_REALM . ";", $connection) or die(mysql_error());
        $row = mysql_fetch_array($result);
        $SPT = $row['port'];
        $SIP = $row['address'];
        mysql_close($connection);

        $AchievementsCount = 0;
        $ACHMINTime = 0;
        $ACHMAXTime = 0;
        foreach ($json['achiev'] as $key => $value) {
            if ($ACHMINTime == 0)
                $ACHMINTime = $value['D'];
            if ($ACHMINTime > $value['D'])
                $ACHMINTime = $value['D'];
            if ($ACHMAXTime < $value['D'])
                $ACHMAXTime = $value['D'];
            ++$AchievementsCount;
        }

        $delay = checkDelay();

        $limit = checkLimit($AccountDBHost, $DBUser, $DBPassword, $AccountDB, _CharacterDBSwitch($CHAR_REALM), $pType);

        if ($limit == 0) {
            $reason = "Questa tipologia di porting non è disponibile per il tuo account!";
        } else if (CheckGameBuild($client, $GAMEBUILD)) {
            $reason = _RT($write[50] . " " . implode(",", $GAMEBUILD));
        } else if (((ceil($CharLevel / 10) > $AchievementsCount) || ($AchievementsCount < $AchievementsMinCount)) && $AchievementsCheck == 1) {
            $reason = _RT("Seems bad characters, not enought achievements!");
        } else if (CHECKDAY($ACHMAXTime, $ACHMINTime) < $PLAYTIME) {
            $reason = _RT("Small playtime!");
        } else if (_CheckBlackList($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $O_REALMLIST, $O_REALM, $o_URL)) {
            $reason = _RT($write[57] . " [ realm: " . (empty($O_REALMLIST) ? "No realmlist" : $O_REALMLIST) . " --- " . (empty($O_REALM) ? "No realmn name" : $O_REALM) . " ]");
        } else if (CanOrNoTransferPlayer(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM), $AccountDB, $CHAR_ACCOUNT_ID)) {
            $reason = _RT($write[52] . " " . $REALM_NAME . ". " . $write[53]);
        } else if ($PLAYER_TRANSFER_STACKS < 0) {
            $reason = _RT($write[54] . " " . $REALM_NAME . ". " . $write[55]);
        } else if (strlen($o_Account) > 32) {
            $reason = _RT($write[99]);
        } else if (!_ServerOn($SOAPUser, $SOAPPassword, _SOAPPSwitch($CHAR_REALM), _SOAPHSwitch($CHAR_REALM), _SOAPURISwitch($CHAR_REALM))) {
            $reason = _RT("Realm: \"" . $REALM_NAME . "\" <u>OFFLINE!</u>");
        } else if (checkDuplicate($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $CHAR_NAME, $O_GUID, $O_REALM, $O_REALMLIST)) {
            $reason = _RT("Questo personaggio è già stato importato!");
        } else if ($delay < 0) {
            $reason = _RT("Un altro porting è in corso, riprovare tra " . abs($delay) . " secondi");
        } else if ($client != WOTLK_BUILD && $pType > 0) {
            $reason = _RT("La tipologia di porting scelto (" . $transferType[$pType]['Type'] . ") non è disponibile per le versioni di gioco diverse dalla WOTLK");
        }

        $GUID = CheckCharacterGuid($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $CHAR_REALM, GetCharacterGuid(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM)));

        if (empty($reason)) {
            $ID = 0;
            $ID = WriteDumpFromFileInDB($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $DUMP, $CHAR_NAME, $CHAR_ACCOUNT_ID, $CHAR_REALM, $o_Account, $o_Password, $O_REALMLIST, $O_REALM, $o_URL, $ID, $VER, $O_GUID, $GUID, $PLAYER_TRANSFER_STACKS, $pType, $write[20]);
        }
    } else if (!isset($part[1]))
        $reason = _RT($write[51]);

    if (!empty($reason)) {
        Step1Form($AccountDB, $AccountDBHost, $DBUser, $DBPassword, $write[70], $write[71], $write[72], $write[79], $write[74], $write[76], $write[63], $write[77], $reason);
    } else {
        $_SESSION['STEP2'] = "NO";
        $bonus_money = $CharLevel * ($CharLevel / 10);
        $char_money = _MaxValue($json['uinf']['money'], $MaxMoney) + $bonus_money;
        $char_speccount = $json['uinf']['specs'];
        $char_gender = $json['uinf']['gender'] - 2 == 1 ? 1 : 0;
        $char_totalkills = $json['uinf']['kills'];
        $char_arenapoints = _MaxValue($json['uinf']['arenapoints'], $MaxAP);
        $char_honorpoints = _MaxValue($json['uinf']['honor'], $MaxHP);
        $INVrow = "";
        $GEMrow = "";
        $CURrow = "";
        $row = "";
        $QUERYFOREXECUTE = "";

        $connection = mysql_connect(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword);

        _SelectDB(_CharacterDBSwitch($CHAR_REALM), $connection);
        // Note , we're storing it temporary in storage account with dumpid as char name
        // it will be updated after
        mysql_query("
        INSERT INTO `characters`(`guid`,`name`,`level`,`gender`,`totalHonorPoints`,`arenaPoints`,`totalKills`,`money`,`class`,`race`,`at_login`,`account`,`deleteInfos_Account`,`deleteInfos_Name`,`taximask`, `talentGroupsCount`, `online`) VALUES (
        " . $GUID . ",\"" . $ID . "\"," . (int) $CharLevel . "," . (int) $char_gender . "," . (int) $char_honorpoints . "," . (int) $char_arenapoints . ",
        " . (int) $char_totalkills . "," . (int) $char_money . "," . $ClassID . "," . $RaceID . ", $atLogin, $STORAGE, $CHAR_ACCOUNT_ID, \"" . _X($CHAR_NAME) . "\", \"0 0 0 0 0 0 0 0 0 0 0 0 0 0\"," . (int) $char_speccount . ", 0);", $connection);
        $QUERYFOREXECUTE = $QUERYFOREXECUTE . "
        INSERT INTO `character_transfer` VALUES (" . $GUID . "," . $CHAR_ACCOUNT_ID . "," . $PLAYER_TRANSFER_STACKS . "," . $ID . ");

        UPDATE `characters` SET
        `position_x`    = 5741.36,
        `position_y`    = 626.982,
        `position_z`    = 648.354,
        `map`           = 571,
        `health`        = 100,
        `zone`          = 4395,
        `cinematic`     = 1
            WHERE `guid` = " . $GUID . ";";

        if ($char_speccount == 2) {
            LearnSeparateSpell(63644, $GUID, $connection);
            LearnSeparateSpell(63645, $GUID, $connection);
        }

        if ($ClassID == 6)
            $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n " . DeathKnightTransfer($GUID);

        foreach ($json['glyphs'] as $key => $value) {
            $GlyphID1 = _GetGlyphID($value[0][0]);
            $GlyphID2 = _GetGlyphID($value[0][1]);
            $GlyphID3 = _GetGlyphID($value[0][2]);
            $GlyphID4 = _GetGlyphID($value[1][0]);
            $GlyphID5 = _GetGlyphID($value[1][1]);
            $GlyphID6 = _GetGlyphID($value[1][2]);
            $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* GLYPHS */ INTO `character_glyphs` VALUES (" . $GUID . "," . (int) $key . ",
            " . (int) $GlyphID1 . "," . (int) $GlyphID4 . "," . (int) $GlyphID5 . "," . (int) $GlyphID2 . "," . (int) $GlyphID6 . "," . (int) $GlyphID3 . ");";
        }

        foreach ($json['achiev'] as $key => $value) {
            $achievement = $value['I'];
            $date = $value['D'];
            if (_CheckWrongOrNoAchievement($achievement))
                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* ACHIEVEMENT */ INTO `character_achievement` VALUES (" . $GUID . ", " . (int) $achievement . ", " . (int) $date . ");";
        }

        $locale = trim(strtoupper($json['ginf']['locale']));
        foreach ($json['rep'] as $key => $value) {
            $reputation = $value['V'];
            $faction = GetFactionID(mb_strtoupper($value['N'], 'UTF-8'), $locale);
            if ($faction < 1 || $reputation < 1)
                continue;
            $flag = $value['F'] + 1;

            // give ALL Sons of Hodir chain quests only when honored ( top of friendly )
            if ($faction == 1119 && $reputation >= 9000)
                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n " . SonsOfHordirTransfer($GUID);

            // give ALL Ebon Blade chain quests only when honored ( top of friendly )
            if ($faction == 1098 && $reputation >= 1600)
                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n " . EbonBladeTransfer($GUID, getFactionByRace($RaceID));

            $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* REPUTATION */ INTO `character_reputation` VALUES (" . $GUID . ", " . $faction . ", " . (int) $reputation . "," . (int) $flag . ");";
        }

        $mSkills = $json['skills'];
        if (count($json['skilllink']) > 0)
            $mSkills = array_merge($json['skills'], $json['skilllink']);

        $primaryCnt = 0;
        foreach ($mSkills as $key => $value) {
            $SkillName = mb_strtoupper($value['N'], 'UTF-8');

            if (_CheckRiding($SkillName, $value['C'], $connection, $GUID, $CharLevel))
                continue;

            $SkillID = GetSkillID($SkillName, $locale);
            if ($SkillID < 1)
                continue;

            if ($value['M'] != 0 and $value['M'] != 1 and strpos($value['N'], "Language") === false) {

                $isPrimary = false;
                if (isPrimaryProf($SkillID)) {
                    $primaryCnt++;
                    $isPrimary = true;
                }

                if ($isPrimary && $primaryCnt > $maxPrimaryProf) {
                    continue;
                }

                $max = _MaxValue(RemoveRaceBonus($RaceID, $SkillID, $value['M']), 450);
                $cur = _MaxValue(RemoveRaceBonus($RaceID, $SkillID, $value['C']), 450);
                $SpellID = GetSpellIDForSkill($SkillID, $max);

                if (CheckExtraSpell($SkillID))
                    LearnSeparateSpell(GetExtraSpellForSkill($SkillID, $cur, $GUID, $connection), $GUID, $connection);

                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* SKILL */ INTO `character_skills` VALUES (" . $GUID . ", " . (int) $SkillID . "," . (int) $cur . "," . (int) $max . ");";
                if ($SpellID < 3)
                    continue;

                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* SPELL FOR SKILL */ INTO `character_spell` VALUES (" . $GUID . ", " . (int) $SpellID . ", 1, 0);";
            }
        }

        foreach ($json['spells'] as $SpellID => $value) {
            if (_isSpellValid($SpellID, $ClassID))
                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* NOT MOUNT OR CRITTER */ INTO `character_spell` VALUES (" . $GUID . ", " . (int) $SpellID . ", 1, 0);";
        }

        foreach ($json['recipes'] as $SpellID) {
            if (_isProfessionSpell($SpellID))
                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* NOT MOUNT OR CRITTER */ INTO `character_spell` VALUES (" . $GUID . ", " . (int) $SpellID . ", 1, 0);";
        }


        foreach ($json['creature'] as $key => $SpellID) {
            $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* MOUNT OR CRITTER */ INTO `character_spell` VALUES (" . $GUID . ", " . (int) $SpellID . ", 1, 0);";
        }

        mysql_close($connection);
        foreach ($json['currency'] as $key => $value) {
            $CurrencyID = $value['I'];
            $COUNT = $value['C'];
            if ($COUNT < 1)
                continue;

            if (_CheckCurrency($CurrencyID))
                $CURrow .= $CurrencyID . ":" . $COUNT . " ";
        }

        foreach ($json['inventory'] as $key => $value) {
            $item = _itemCheck($CHAR_REALM, $value['I'], $pType);
            $count = CheckItemCount($value['C']);

            $INVrow .= $item . ":" . $count . " ";
            $GEM1 = _GetGemID($value['G1']);
            $GEM2 = _GetGemID($value['G2']);
            $GEM3 = _GetGemID($value['G3']);
            if ($GEM1 > 1)
                $GEMrow .= $GEM1 . ":1 ";
            if ($GEM2 > 1)
                $GEMrow .= $GEM2 . ":1 ";
            if ($GEM3 > 1)
                $GEMrow .= $GEM3 . ":1 ";
        }

        $QUERYFOREXECUTE_CON = new mysqli(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM));
        mysqli_multi_query($QUERYFOREXECUTE_CON, $QUERYFOREXECUTE) or die(mysql_error());

        $row = trim($INVrow . $GEMrow . $CURrow);
        UpdateDumpITEMROW($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ID, $row);
        if (_CheckCharacterName(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM), $CHAR_NAME) > 0) {
            $_SESSION['guid'] = $GUID;
            $_SESSION['realm'] = $CHAR_REALM;
            $_SESSION['dumpID'] = $ID;
            $_SESSION['oRealm'] = $O_REALM;
            $_SESSION['oRealmList'] = $O_REALMLIST;
            $_SESSION['STEP2'] = "YES";
            include("step2.php");
        } else {
            saveLastPortingTime();

            UpdateDumpStatus($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ID, 0);
            UpdateCharacterName(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM), $CHAR_NAME, $GUID);
            _PreparateMails($row, $CHAR_NAME, $TransferLetterTitle, $TransferLetterMessage, $SOAPUser, $SOAPPassword, _SOAPPSwitch($CHAR_REALM), _SOAPHSwitch($CHAR_REALM), _SOAPURISwitch($CHAR_REALM));
            _TalentsReset(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM), $GUID);
            MoveToGMAccount(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM), $GUID);
            echo "<font color = \"green\">" . $write[91] . "</font>";
        }
    }
} else {
    if ($disableTransfer) {
        ?>
        <script type="text/javascript">
            alert("I porting sono disabilitati");
            window.location.href = "playerside.php";
        </script>
        <?php
        die();
    }


    $delay = checkDelay();

    if ($delay < 0) {
        ?>
        <script type="text/javascript">
            alert("Un altro porting è in corso, Riprovare tra <?= abs($delay) ?> secondi");
            window.location.href = "playerside.php";
        </script>
        <?php
        die();
    }

    $CHAR_REALM = GetRealmID($AccountDBHost, $DBUser, $DBPassword, $AccountDB, REALM_NAME);
    if (CanOrNoTransferServer($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $CHAR_REALM, $AllowedGMLevels, _CharacterDBSwitch($CHAR_REALM)) < 0) {
        ?>
        <script type="text/javascript">
            alert("Attenzione tutte le code sono piene! Premi OK per tornare alla pagina precedente e riprovare più tardi");
            window.location.href = "playerside.php";
        </script>
        <?php
        die();
    }

    Step1Form($AccountDB, $AccountDBHost, $DBUser, $DBPassword, $write[70], $write[71], $write[72], $write[79], $write[74], $write[76], $write[63], $write[77]);
}

function Step1Form($AccountDB, $AccountDBHost, $DBUser, $DBPassword, $TEXT1, $TEXT2, $TEXT3, $TEXT4, $TEXT5, $TEXT6, $TEXT7, $TEXT8, $REASON = "") {
    echo $REASON . "<div align = center class = \"MythTable\">" . $TEXT1 . "</div>
        <br>
        <form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"post\" enctype=\"multipart/form-data\">
            <table width=\"100%\">
            <tr><td><div align = right class = \"MythTable\">" . $TEXT2 . "</div></td></tr>
            <tr><td><b>Account: </b><input required name=\"Account\" type=\"text\" size=\"32\" style = \"float: right;\"></td></tr>
            <tr><td><div align = right class = \"MythTable\">" . $TEXT3 . "</div></td></tr>
            <tr><td><b>Password: </b><input required name=\"Password\" type=\"password\" size=\"32\" style = \"float: right;\"></tr>
            <tr><td><br></td></tr>
            <tr><td><div align = right class = \"MythTable\">" . $TEXT4 . "</div></td></tr>
            <tr><td><b>Voglio trasferirlo al realm: </b><select name=\"RealmlistList\">";
    $connection = mysql_connect($AccountDBHost, $DBUser, $DBPassword);
    _SelectDB($AccountDB, $connection);
    $result = mysql_query("SELECT `id`,`name` FROM `realmlist` WHERE `TransferAvailable` = 1;");
    mysql_close($connection);
    while ($row = mysql_fetch_array($result))
        echo "<option name=\"" . $row['id'] . "\">" . $row['name'] . "</option>";
    echo "</select><tr><td>
                <br><br>
                <tr><td><br><br><div align = left class = \"MythTable\">" . $TEXT5 . "</div></td></tr>
                <tr><td><b>Server URL ( Sito ): </b><input required name=\"ServerUrl\" type=\"text\" size=\"60\" style = \"float: right;\"></td></tr>
                <tr><td><br><br><div align = left class = \"MythTable\">Opzioni:</div></td></tr>
                <!--<tr><td><b>Abilita chardump obsoleti:</b> <input type='checkbox' name='obsolete' value='enable'/></tr></td>-->
                <tr><td><b>Attiva cambio fazione e razza:</b> <input type='checkbox' name='changefr' value='enable' checked/></tr></td>
                <tr><td><div align = left class = \"MythTable\"> Scegli la tipologia di porting da effettuare:</div></td></tr>
                <tr><td><b>Tipologia di porting: </b>" . HtmlPortingChoice($AccountDB, $AccountDBHost, $DBUser, $DBPassword) . "</td></tr>
            <tr><td><div align = right class = \"MythTable\">" . $TEXT6 . "</div></td></tr>
            </table>
                <div class = \"MythInput\">
                    <style = \"font-size:14px\">" . $TEXT7 . "</style>
                    <input type=\"file\" name=\"file\" id=\"file\" accept='.lua'/>
                    <input type=\"submit\" name=\"load\" value=\"" . $TEXT8 . "\" />
                </div>
        </form>";
}

function HtmlPortingChoice($AccountDB, $AccountDBHost, $DBUser, $DBPassword) {
    global $transferType;
    $output = "<br>";
    $dCnt = 0;

    for ($i = 0; $i < count($transferType); $i++) {
        $CHAR_REALM = GetRealmID($AccountDBHost, $DBUser, $DBPassword, $AccountDB, REALM_NAME);
        $limit = checkLimit($AccountDBHost, $DBUser, $DBPassword, $AccountDB, _CharacterDBSwitch($CHAR_REALM), $i);
        $isDisabled = $limit == 0 ? "disabled" : "";
        if ($limit == 0)
            $dCnt++;

        $output .= "<input type='radio' name='PortingType' value='$i' $isDisabled required/> <b><span class='porting-type'>" . $transferType[$i]['Type'] . "</span></b> ( Slot disponibili: " . ($limit < 0 ? "∞" : $limit) . ")<br>";
        $output .= $transferType[$i]['Descr'] . "<br><br>";
    }

    if ($dCnt == count($transferType)) {
        $output .= "<br> <b style='color:red'>ATTENZIONE!! QUESTO ACCOUNT NON HA PIU' SLOT DISPONIBILI PER IL TRANSFER!</b>";
    }

    return $output;
}
