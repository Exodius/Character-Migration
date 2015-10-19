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
  echo '<script type="text/javascript" src="http://cdn.openwow.com/api/tooltip.js"></script>';
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

    /* Server Realm */
    echo "<h3 style=\"display:inline;\">Server info</h3><br>";
    echo "<b>Realm:</b> ".$json['ginf']['realm']."<br>";
    echo "<b>realmlist:</b> ".$json['ginf']['realmlist']."<br>";
    echo "<b>locale:</b> ".$json['ginf']['locale']."<br>";
    echo "<b>clientbuild:</b>".$json['ginf']['clientbuild']."<br><br>";

    /* ACHIEVEMENTS */
    echo "<b>Achievements:</b><br>";
    $ach_invalid = "";
    $ach_valid = "";
    foreach ($json['achiev'] as $key => $value)
    {
      $achievement = '<a href="http://wotlk.openwow.com/achievement='.$value['I'].'>'.$value['I'].'</a>';
      $date = $value['D'];
      if (_CheckWrongOrNoAchievement($achievement))
        $ach_invalid .= $achievement." ";
      else
        $ach_valid .= $achievement." ";
    }
    echo "$ach_valid <br>";
    if ($ach_invalid != "")
      echo "I seguenti achievements non sono validi: $ach_invalid <br><br>";

    /* GLYPHS */
    echo "<b>Glyphs</b> <br>";
    echo "first spec<br>";
    echo "<b>major</b><br>";
    echo ($json['glyphs'][0][0][0] != -1 ? $json['glyphs'][0][0][0] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][0][0][1] != -1 ? $json['glyphs'][0][0][1] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][0][0][2] != -1 ? $json['glyphs'][0][0][2] : "Nessun glyph") . "<br>";
    echo "<b>minor</b><br>";
    echo ($json['glyphs'][0][1][0] != -1 ? $json['glyphs'][0][1][0] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][0][1][1] != -1 ? $json['glyphs'][0][1][1] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][0][1][2] != -1 ? $json['glyphs'][0][1][2] : "Nessun glyph") . "<br>";
    echo "<br>second spec<br>";
    echo "<b>major</b><br>";
    echo ($json['glyphs'][1][0][0] != -1 ? $json['glyphs'][1][0][0] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][1][0][1] != -1 ? $json['glyphs'][1][0][1] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][1][0][2] != -1 ? $json['glyphs'][1][0][2] : "Nessun glyph") . "<br>";
    echo "<b>minor</b><br>";
    echo ($json['glyphs'][1][1][0] != -1 ? $json['glyphs'][1][1][0] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][1][1][1] != -1 ? $json['glyphs'][1][1][1] : "Nessun glyph") . "<br>";
    echo ($json['glyphs'][1][1][2] != -1 ? $json['glyphs'][1][1][2] : "Nessun glyph") . "<br>";

    /* REPUTATIONS */
    echo "<br><b>Reputazioni</b><br>";
    foreach ($json['rep'] as $key => $value)
      echo ($value['V'] != 0 ? "<i style=\"color: #777;\">".$value['V']."</i> " . $value['N']."<br>" : "");

    /* SKILLS */
    echo "<br><b>Skills</b>";
    foreach ($json['skills'] as $key => $value)
      if ($value['M'] != 0 and $value['M'] != 1 and strpos($value['N'], "Language") === false)
        echo "<br>".$value['N']." ".$value['M']." ".$value['C'];

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
