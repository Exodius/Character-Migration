<?php

include_once("t_dbfunctions.php");
include_once("t_functions.php");
include_once("t_config.php");
require_once("item_list.php");

if (isset($_POST['rename'])) {
    $CHAR_NAME = mb_convert_case(trim($_POST['rename']), MB_CASE_TITLE, 'UTF-8');
    $GUID = $_SESSION['guid'];
    $RealmID = $_SESSION['realm'];
    $ID = $_SESSION['dumpID'];
    $O_REALM = $_SESSION['oRealm'];
    $O_REALMLIST = $_SESSION['oRealmList'];
    $O_GUID = $_SESSION['oGuid'];
    $O_NAME = $_SESSION['oName'];
    $reason = "";
    $log = NULL;

    $connection = mysql_connect($AccountDBHost, $DBUser, $DBPassword);
    _SelectDB($AccountDB, $connection);
    $result = mysql_query("SELECT `name`,`address`,`port` FROM `realmlist` WHERE `id` = " . $RealmID . ";", $connection) or die(mysql_error());
    $row = mysql_fetch_array($result);
    $SPT = $row["port"];
    $SNA = $row["name"];
    $SIP = $row["address"];
    mysql_close($connection);

    $delay = checkDelay();

    if (!isset($_SESSION['guid']) || !isset($_SESSION['realm']) || !isset($_SESSION['dumpID']) || $_SESSION['STEP2'] != "YES") {
        $reason = $write[98];
    } else if (preg_match('/[\'^?$%&*()}{@#~?><>,|=_+¬-]./', $CHAR_NAME)) {
        $reason = $write[92];
    } else if (strstr($CHAR_NAME, " ")) {
        $reason = $write[93];
    } else if (preg_match("/[0-9]/", $CHAR_NAME)) {
        $reason = $write[94];
    } else if (mb_strlen($CHAR_NAME, 'UTF-8') > 16 && mb_strlen($CHAR_NAME, 'UTF-8') > 1) {
        $reason = $write[95];
    } else if (_CheckCharacterName(_HostDBSwitch($RealmID), $DBUser, $DBPassword, _CharacterDBSwitch($RealmID), $CHAR_NAME) > 0) {
        $reason = $write[96] . $CHAR_NAME . $write[97];
    } else if (!_ServerOn($SOAPUser, $SOAPPassword, _SOAPPSwitch($RealmID), _SOAPHSwitch($RealmID), _SOAPURISwitch($RealmID))) {
        $reason = "Realm: \"" . $SNA . "\" <u>OFFLINE!</u>";
    } else if (checkDuplicate($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $O_NAME, $O_GUID, $O_REALM, $O_REALMLIST)) {
        $log = $reason = _RT("Questo personaggio è già stato importato! Un report di abuso è stato inviato all'amministrazione. Contatta lo staff per maggiori info!");
    } else if ($delay < 0) {
        $reason = _RT("Un altro porting è in corso, riprovare tra " . abs($delay) . " secondi");
    }

    if (!empty($reason)) {
        if ($log) {
            UpdateDumpSTATUSandNAME($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ID, $CHAR_NAME, $status["REPORT"], $reason);
        }

        Step2Form($reason, $write[90]);
    } else {
        saveLastPortingTime();

        $_SESSION['STEP2'] = "NO";
        UpdateCharacterName(_HostDBSwitch($RealmID), $DBUser, $DBPassword, _CharacterDBSwitch($RealmID), $CHAR_NAME, $GUID);
        _PreparateMails(LoadItemRoW($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ID), $CHAR_NAME, $TransferLetterTitle, $TransferLetterMessage, $SOAPUser, $SOAPPassword, _SOAPPSwitch($RealmID), _SOAPHSwitch($RealmID), _SOAPURISwitch($RealmID));
        UpdateDumpSTATUSandNAME($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ID, $CHAR_NAME, 0);
        MoveToGMAccount(_HostDBSwitch($RealmID), $DBUser, $DBPassword, _CharacterDBSwitch($RealmID), $GUID);

        echo "<font color = \"green\">" . $write[91] . "</font>";
    }
} else
    Step2Form("Character with same name \"" . $CHAR_NAME . "\" already exists!", $write[90]);

function Step2Form($TEXT1, $TEXT2) {
    echo "<div align = center style = \"padding-right: 2px;font-family: 'Tahoma'; color:#CC0000; font-size:15px;\"><b>" . $TEXT1 . "</b><br></div>
        <form action=\"" . $_SERVER['PHP_SELF'] . "\" method=\"post\" enctype=\"multipart/form-data\">
            <table width=\"650px\">
                <tr><td><div align = right class = \"MythTable\">" . $TEXT2 . "</div></td></tr>
                <tr><td>
                    <div align = center class = \"MythInput\">
                        <input type=\"text\" name=\"rename\" id=\"rename\">
                        <button type=\"submit\" style = \"font-size:10px\">Submit</button>
                    </div>
                </td></tr>
            </table>
        </form>";
}

?>