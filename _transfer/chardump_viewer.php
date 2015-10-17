<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once("t_dbfunctions.php");
include_once("t_functions.php");
include_once("t_config.php");
include_once("f_switch.php");
require_once("item_list.php");
require_once("definitions.php");

if (isset($_POST["PortingType"]))
{
    //    $o_Account = trim($_POST['Account']);
    //    $o_Password = trim($_POST['Password']);
    //    $o_URL = trim($_POST['ServerUrl']);

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
        $arrDump=parse_ini_string ( $buffer  );

        $VER = isset($arrDump["CHDMP_VER"]) ? $arrDump["CHDMP_VER"] : "<335.700";
        /*
    if ($VER!=ADDON_VER)
      echo "<h2>!!ATTENZIONE!!</h2> <br><br> La versione dell'addon con cui è stato estratto questo chardump è obsoleta: $VER <br> La nuova versione è la: <?=ADDON_VER?><br><br>Potresti avere problemi al termine del porting!<br>Se vuoi comunque proseguire, premi su ok ed abilita il caricamento dei chardump obsoleti nella pagina precedente!";
*/
        $REALM_NAME = REALM_NAME;
        $DECODED_DUMP = _DECRYPT($DUMP);
        $CHAR_REALM = GetRealmID($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $REALM_NAME);
        $CHAR_ACCOUNT_ID = _GetCharacterAccountID();

        $json = json_decode(stripslashes($DECODED_DUMP), true);
        $CHAR_NAME = mb_convert_case(mb_strtolower($json['uinf']['name'], 'UTF-8'), MB_CASE_TITLE, 'UTF-8');
        $O_REALMLIST = $json['ginf']['realmlist'];
        $O_REALM = $json['ginf']['realm'];
        $RaceID = _GetRaceID(strtoupper($json['uinf']['race']));
        $ClassID = _GetClassID(strtoupper($json['uinf']['class']));
        $CharLevel = _MaxValue($json['uinf']['level'], $MaxCL);
        $pType = $_POST["PortingType"];

        /*
        $connection = mysql_connect($AccountDBHost, $DBUser, $DBPassword);
        _SelectDB($AccountDB, $connection);
        $result = mysql_query("SELECT `address`,`port` FROM `realmlist` WHERE `id` = " . $CHAR_REALM . ";", $connection) or die(mysql_error());
        $row = mysql_fetch_array($result);
        $SPT = $row['port'];
        $SIP = $row['address'];
        mysql_close($connection);
        */

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
        if (CheckGameBuild($json['ginf']['clientbuild'], $GAMEBUILD)) {
            $reason = _RT($write[50] . " " . $GAMEBUILD);
        } else if (((10 + $CharLevel > $AchievementsCount) || ($AchievementsCount > $AchievementsMinCount)) && $AchievementsCheck == 1) {
            $reason = _RT("Seems bad characters, not enought achievements!");
        }/*
    else if (CHECKDAY($ACHMAXTime, $ACHMINTime) < $PLAYTIME) {
      $reason = _RT("Small playtime!");
    }
    else if (_CheckBlackList($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $O_REALMLIST, $O_REALM, $o_URL)) {
      $reason = _RT($write[57]);
    }
*/

        $GUID = CheckCharacterGuid($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $CHAR_REALM, GetCharacterGuid(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM)));

    } else if (!isset($part[1]))
        $reason = _RT($write[51]);

        if (!empty($reason)) {
        viewerForm($reason);
    } else {
        $_SESSION['STEP2'] = "NO";
        $char_money = _MaxValue($json['uinf']['money'], $MaxMoney);
        $char_speccount = $json['uinf']['specs'];
        $char_gender = $json['uinf']['gender'] - 2 == 1 ? 1 : 0;
        $char_totalkills = $json['uinf']['kills'];
        $char_arenapoints = _MaxValue($json['uinf']['arenapoints'], $MaxAP);
        $char_honorpoints = _MaxValue($json['uinf']['honor'], $MaxHP);
        $INVrow = "";
        $GEMrow = "";
        $CURrow = "";
        $row = "";
        /*
        $connection = mysql_connect(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword);

        _SelectDB(_CharacterDBSwitch($CHAR_REALM), $connection);

        // Note , we're storing it temporary in storage account with dumpid as char name
        // it will be updated after
        mysql_query("
        INSERT INTO `characters`(`guid`,`name`,`level`,`gender`,`totalHonorPoints`,`arenaPoints`,`totalKills`,`money`,`class`,`race`,`at_login`,`account`,`deleteInfos_Account`,`deleteInfos_Name`,`taximask`, `talentGroupsCount`, `online`) VALUES (
        " . $GUID . ",\"".$ID."\"," . (int) $CharLevel . "," . (int) $char_gender . "," . (int) $char_honorpoints . "," . (int) $char_arenapoints . ",
        " . (int) $char_totalkills . "," . (int) $char_money . "," . $ClassID . "," . $RaceID . ", 0x180, $STORAGE, $CHAR_ACCOUNT_ID, \"" . _X($CHAR_NAME) . "\", \"0 0 0 0 0 0 0 0 0 0 0 0 0 0\"," . (int) $char_speccount . ", 0);", $connection);
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
*/
        if ($ClassID == 6)
            $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n " . DeathKnightTransfer($GUID);

        // Copia $json
        $json_w = $json;

        // inizio decodifica/correzione del file json
        foreach ($json['glyphs'] as $key => $value) {
            $GlyphID1 = _GetGlyphID($value[0][0]);
            $GlyphID2 = _GetGlyphID($value[0][1]);
            $GlyphID3 = _GetGlyphID($value[0][2]);
            $GlyphID4 = _GetGlyphID($value[1][0]);
            $GlyphID5 = _GetGlyphID($value[1][1]);
            $GlyphID6 = _GetGlyphID($value[1][2]);
            /*
            $json_w['glyphs'][0][0] = _GetGlyphID($value[0][0]);
            $json_w['glyphs'][0][1] = _GetGlyphID($value[0][1]);
            $json_w['glyphs'][0][2] = _GetGlyphID($value[0][2]);
            $json_w['glyphs'][1][0] = _GetGlyphID($value[1][0]);
            $json_w['glyphs'][1][1] = _GetGlyphID($value[1][1]);
            $json_w['glyphs'][1][2] = _GetGlyphID($value[1][2]);
  */          
            //$QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* GLYPHS */ INTO `character_glyphs` VALUES (" . $GUID . "," . (int) $key . ",
            //" . (int) $GlyphID1 . "," . (int) $GlyphID4 . "," . (int) $GlyphID5 . "," . (int) $GlyphID2 . "," . (int) $GlyphID6 . "," . (int) $GlyphID3 . ");";
        }

        foreach ($json['achiev'] as $key => $value) {
            $achievement = $value['I'];
            $date = $value['D'];
            if (_CheckWrongOrNoAchievement($achievement))
                echo "<br>hai degli achievements non validi";
            //$QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* ACHIEVEMENT */ INTO `character_achievement` VALUES (" . $GUID . ", " . (int) $achievement . ", " . (int) $date . ");";
        }

        $locale = trim(strtoupper($json['ginf']['locale']));
        foreach ($json['rep'] as $key => $value) {
            $reputation = $value['V'];
            $faction = GetFactionID(mb_strtoupper($value['N'], 'UTF-8'), $locale);
            if ($faction < 1 || $reputation < 1)
                continue;
            $flag = $value['F'] + 1;
            // in questa fase vengono inserite le reputazioni
            // ma prima vengono aggiunte le quest della Sons of hodir se 
            // il pg ha la reputazione (questo check deve essere fixato in futuro perchè non dovrebbe essere
            // aggiunte le quest a reputazione > 1 ma almeno > revered o simili )
            // possiamo comunque stampare insieme alle reputazioni che avrà, anche le quest che gli andremo ad aggiungere
            if ($faction == 1119 && $reputation > 1)
                $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n " . SonsOfHordirTransfer($GUID);
            $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* REPUTATION */ INTO `character_reputation` VALUES (" . $GUID . ", " . $faction . ", " . (int) $reputation . "," . (int) $flag . ");";
        }
/*
        foreach ($json['skills'] as $key => $value)
        {
            $SkillName = mb_strtoupper($value['N'], 'UTF-8');

            if (_CheckRiding($SkillName, $value['C'], $connection, $GUID, $CharLevel))
                continue;

            $SkillID = GetSkillID($SkillName, $locale);
            if ($SkillID < 1)
                continue;

            $max = _MaxValue(RemoveRaceBonus($RaceID, $SkillID, $value['M']), 450);
            $cur = _MaxValue(RemoveRaceBonus($RaceID, $SkillID, $value['C']), 450);
            $SpellID = GetSpellIDForSkill($SkillID, $max);

            if (CheckExtraSpell($SkillID))
                LearnSeparateSpell(GetExtraSpellForSkill($SkillID, $cur, $GUID, $connection), $GUID, $connection);
*/
  //          $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* SKILL */ INTO `character_skills` VALUES (" . $GUID . ", " . (int) $SkillID . "," . (int) $cur . "," . (int) $max . ");";
/*
            if ($SpellID < 3)
                continue;
*/
    //        $QUERYFOREXECUTE = $QUERYFOREXECUTE . "\n INSERT IGNORE /* SPELL FOR SKILL */ INTO `character_spell` VALUES (" . $GUID . ", " . (int) $SpellID . ", 1, 0);";

  //      }


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

        //    mysql_close($connection);

        foreach ($json['currency'] as $key => $value) {
            $CurrencyID = $value['I'];
            $COUNT = $value['C'];
            if ($COUNT < 1)
                continue;

            // questi dovrebbero essere tutti i token / emblemi del player
            // l'unico filtro che fa è sugli arena / honor points che vengono aggiunti già prima
            if (_CheckCurrency($CurrencyID))
                $CURrow .= $CurrencyID . ":" . $COUNT . " ";
        }

        foreach ($json['inventory'] as $key => $value) {
            // qui vengono eseguiti tutti i check e i downgrade degli items
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

        if (_CheckCharacterName(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM), $CHAR_NAME) > 0) {
            // UN AVVISO (character con lo stesso nome)
        }

//        print_r($json);

        // il risultato sarà stampato qui
        // le chiavi da estrarre sono:


    }
} else {
    viewerForm();
    echo '
  <h1>Visualizzatore Chardump</h1>
  <form action="" method="POST" enctype="multipart/form-data">
<div>
  <b>Tipologia di porting: </b><br><input name="PortingType" value="0" required type="radio">
  <b><span class="porting-type">Free</span></b>
  <b><input name="PortingType" value="1" required type="radio"> <b><span class="porting-type">Basic</span></b>
  <b><input name="PortingType" value="2" required type="radio"> <b><span class="porting-type">Full</span></b>
</div>

<div class="MythInput">
    <style =="" "font-size:14px"="">File selezionato:</style>
      <input name="file" id="file" accept=".lua" type="file">
      <input name="load" value="Visualizza chardump" type="submit">
</div>
</form>
';
}

function viewerForm($err="") {
    echo "$err";
}