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
?><script type="text/javascript" src="http://cdn.openwow.com/api/tooltip.js"></script><?php
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
    if ($VER!=ADDON_VER)
      echo "<h2>!!ATTENZIONE!!</h2> <br><br> La versione dell'addon con cui è stato estratto questo chardump è obsoleta: $VER <br> La nuova versione è la: <?=ADDON_VER?><br><br>Potresti avere problemi al termine del porting!<br>Se vuoi comunque proseguire, premi su ok ed abilita il caricamento dei chardump obsoleti nella pagina precedente!";

    $REALM_NAME = REALM_NAME;
    $DECODED_DUMP = _DECRYPT($DUMP);
    $CHAR_REALM = GetRealmID($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $REALM_NAME);
    $json = json_decode(stripslashes($DECODED_DUMP), true);
    $CHAR_NAME = mb_convert_case(mb_strtolower($json['uinf']['name'], 'UTF-8'), MB_CASE_TITLE, 'UTF-8');
    $CharLevel = _MaxValue($json['uinf']['level'], $MaxCL);
    $O_REALMLIST = $json['ginf']['realmlist'];
    $O_REALM = $json['ginf']['realm'];
    $pType = $_POST["PortingType"];


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
    $char_money = _MaxValue($json['uinf']['money'], $MaxMoney);
    $char_speccount = $json['uinf']['specs'];
    $char_gender = $json['uinf']['gender'] - 2 == 1 ? 1 : 0;
    $char_totalkills = $json['uinf']['kills'];
    $char_arenapoints = _MaxValue($json['uinf']['arenapoints'], $MaxAP);
    $char_honorpoints = _MaxValue($json['uinf']['honor'], $MaxHP);
    $INVrow = "";
    $GEMrow = "";
    $CURrow = "";

    if (_CheckCharacterName(_HostDBSwitch($CHAR_REALM), $DBUser, $DBPassword, _CharacterDBSwitch($CHAR_REALM), $CHAR_NAME) > 0) {
      // UN AVVISO (character con lo stesso nome)
    }

    /* Server Realm */
    echo "<h3 style=\"display:inline;\">Server info</h3><br>";
    echo "<b>Realm:</b> ".$json['ginf']['realm']."<br>";
    echo "<b>realmlist:</b> ".$json['ginf']['realmlist']."<br>";
    echo "<b>locale:</b> ".$json['ginf']['locale']."<br>";
    echo "<b>clientbuild:</b>".$json['ginf']['clientbuild']."<br><br>";

    /* CHARACTER */
    echo "<b>Character</b><br>";
    echo "<b>Name:</b> ".$json['uinf']['name']."<br>";
    echo "<b>Level:</b> ".$json['uinf']['level']."<br>";
    echo "<b>Race:</b> ".$json['uinf']['race']."<br>";
    echo "<b>Class:</b> ".$json['uinf']['class']."<br>";
    echo "<b>ArenaPoints:</b> ".$json['uinf']['arenapoints']."<br>";
    echo "<b>Honor:</b> ".$json['uinf']['honor']."<br>";
    

    /* ACHIEVEMENTS */
    echo "<br><b>Achievements</b><br>";
    $ach_invalid = "";
    $ach_valid = "";
    foreach ($json['achiev'] as $key => $value)
    {
      $achievement = '<a href="http://wotlk.openwow.com/achievement='.$value['I'].'">'.$value['I'].'</a>';
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
    /* spec 1 */
    $Glyph[0] = $json['glyphs'][0][0][0];
    $Glyph[1] = $json['glyphs'][0][0][1];
    $Glyph[2] = $json['glyphs'][0][0][2];
    $Glyph[3] = $json['glyphs'][0][1][0];
    $Glyph[4] = $json['glyphs'][0][1][1];
    $Glyph[5] = $json['glyphs'][0][1][2];
    echo "<b>Glyphs</b> <br>";
    echo "first spec<br>";
    echo "<b>major</b><br>";
    echo ($Glyph[0] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[0].'">'.$Glyph[0].'</a>' : "Nessun glyph") . "<br>";
    echo ($Glyph[1] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[1].'">'.$Glyph[1].'</a>' : "Nessun glyph") . "<br>";
    echo ($Glyph[2] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[2].'">'.$Glyph[2].'</a>' : "Nessun glyph") . "<br>";
    echo "<b>minor</b><br>";
    echo ($Glyph[3] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[3].'">'.$Glyph[3].'</a>' : "Nessun glyph") . "<br>";
    echo ($Glyph[4] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[4].'">'.$Glyph[4].'</a>' : "Nessun glyph") . "<br>";
    echo ($Glyph[5] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[5].'">'.$Glyph[5].'</a>' : "Nessun glyph") . "<br>";
    /* spec 2 */
    if ($char_speccount == 2)
    {
      $Glyph[6] = $json['glyphs'][1][0][0];
      $Glyph[7] = $json['glyphs'][1][0][1];
      $Glyph[8] = $json['glyphs'][1][0][2];
      $Glyph[9] = $json['glyphs'][1][1][0];
      $Glyph[10] = $json['glyphs'][1][1][1];
      $Glyph[11] = $json['glyphs'][1][1][2];
      echo "<br>second spec<br>";
      echo "<b>major</b><br>";
      echo ($Glyph[6] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[6].'">'.$Glyph[6].'</a>' : "Nessun glyph") . "<br>";
      echo ($Glyph[7] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[7].'">'.$Glyph[7].'</a>' : "Nessun glyph") . "<br>";
      echo ($Glyph[8] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[8].'">'.$Glyph[8].'</a>' : "Nessun glyph") . "<br>";
      echo "<b>minor</b><br>";
      echo ($Glyph[9] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[9].'">'.$Glyph[9].'</a>' : "Nessun glyph") . "<br>";
      echo ($Glyph[10] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[10].'">'.$Glyph[10].'</a>' : "Nessun glyph") . "<br>";
      echo ($Glyph[11] != -1 ? '<a href="http://wotlk.openwow.com/spell='.$Glyph[11].'">'.$Glyph[11].'</a>' : "Nessun glyph") . "<br>";
    }

    /* REPUTATIONS */
    echo "<br><b>Reputazioni</b><br>";
    foreach ($json['rep'] as $key => $value)
      echo ($value['V'] != 0 ? "<i style=\"color: #777;\">".$value['V']."</i> <a href=\"http://wotlk.openwow.com/faction=".$value['V']."\">" . $value['N']."</a><br>" : "");

    /* SKILLS */
    echo "<br><b>Skills</b>";
    foreach ($json['skills'] as $key => $value)
      if ($value['M'] != 0 and $value['M'] != 1 and strpos($value['N'], "Language") === false)
        echo "<br>".$value['N']." ".$value['M']." ".$value['C'];

    /* RECIPES */
    echo "<br><br><b>Recipes<br></b>";
    foreach ($json['recipes'] as $SpellID)
      if (_isProfessionSpell($SpellID))
        echo '<a href="http://wotlk.openwow.com/spell='.$SpellID.'">'.$SpellID.'</a> ';
    echo "<br>";

    /* MOUNTS/COMPANIONS */
    echo "<br><b>Mounts/Companions<br></b>";
    foreach ($json['creature'] as $key => $SpellID)
      echo '<a href="http://wotlk.openwow.com/spell='.$SpellID.'">'.$SpellID.'</a> ';

    /* INVENTORY */
    foreach ($json['inventory'] as $key => $value)
    {
      // qui vengono eseguiti tutti i check e i downgrade degli items
      $item = _itemCheck($CHAR_REALM, $value['I'], $pType);
      $count = CheckItemCount($value['C']);

      $INVrow .= '<a href="http://wotlk.openwow.com/item='.$item.'">'.$item.'</a>' . "x" . $count . " ";
      $GEM1 = _GetGemID($value['G1']);
      $GEM2 = _GetGemID($value['G2']);
      $GEM3 = _GetGemID($value['G3']);
      if ($GEM1 > 1)
        $GEMrow .= '<a href="http://wotlk.openwow.com/item='.$GEM1.'">'.$GEM1.'</a>x1 ';
      if ($GEM2 > 1)
        $GEMrow .= '<a href="http://wotlk.openwow.com/item='.$GEM2.'">'.$GEM2.'</a>x1 ';
      if ($GEM3 > 1)
        $GEMrow .= '<a href="http://wotlk.openwow.com/item='.$GEM3.'">'.$GEM3.'</a>x1 ';
    }
    echo "<br><br><b>Inventory</b><br>".$INVrow."<br><br>";
    echo "<b>Gems</b><br>".$GEMrow."<br><br>";

    /* CURRENCY */
    foreach ($json['currency'] as $key => $value)
    {
      $CurrencyID = $value['I'];
      $COUNT = $value['C'];
      if ($COUNT < 1)
        continue;

      // questi dovrebbero essere tutti i token / emblemi del player
      // l'unico filtro che fa è sugli arena / honor points che vengono aggiunti già prima
      if (_CheckCurrency($CurrencyID))
        $CURrow .= '<a href="http://wotlk.openwow.com/item='.$CurrencyID.'">'.$CurrencyID.'</a>' . "x" . $COUNT . " ";
    }
    echo "<b>Currency</b><br>".$CURrow;

  }
} else {
  viewerForm();
?> 
<form action="" method="POST" enctype="multipart/form-data">
  <h1>Visualizzatore Chardump</h1>
  <div>
    <b>Tipologia di porting: </b><br><input name="PortingType" value="0" required type="radio">
    <b><span class="porting-type">Free</span></b>
    <input name="PortingType" value="1" required type="radio"> <b><span class="porting-type">Basic</span></b>
    <input name="PortingType" value="2" required type="radio"> <b><span class="porting-type">Full</span></b>
  </div>

  <div class="MythInput">
    <input name="file" id="file" accept=".lua" type="file">
    <input name="load" value="Visualizza chardump" type="submit">
  </div>
</form>
<?php
}

function viewerForm($err="") {
  echo "$err";
}
?>


