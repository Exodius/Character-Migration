﻿<?php
require_once("item_list.php");
require_once("definitions.php");

function _ServerOn($SOAPUser, $SOAPPassword, $SOAPPort, $SOAPHost, $URI) {
    try {
        $SOAP = new SOAP(array("soap_user" => "" . $SOAPUser . "", "soap_pass" => "" . $SOAPPassword . "", "soap_port" => "" . $SOAPPort . "", "addr" => "" . $SOAPHost . "", "uri" => "" . $URI . ""));
    } catch (Exception $e) {
        return false;
    }

    return true;
}

/**
 * 
 * @param type $DBuild
 * @param type $DServer
 * @return boolean true if error, false if not
 */
function CheckGameBuild($DBuild, $DServer) {
    return !in_array($DBuild, $DServer);
}

function _CheckCurrency($ID) {
    switch ($ID) {
        case 43307:     // ARENA POINTS
        case 43308:     // HONOR POINTS
            return false;
        default: return true;
    }
}

function CHECKDAY($TIME1, $TIME2) {
    $DIFF = floor(($TIME1 - $TIME2) / 86400);
    return $DIFF;
}

function CheckItemCount($count) {
    $count = $count < 1 ? 1 : $count;
    $count = $count > 1000 ? 1000 : $count;
    return $count;
}

function checkDelay() {
    $delay = DELAY_TIME;

    $timeFile = "./storage/lastporting.txt";
    $handle = fopen($timeFile, 'r');

    if (!$handle)
        return true;

    if (!feof($handle)) {
        $timestamp = (int) fgets($handle);
    }

    if (!$timestamp)
        return true;

    fclose($handle);

    $diff = time() - $timestamp;
    //echo ($diff);
    if (!$timestamp || $diff > $delay) {
        return true;
    }

    $remain = -1 * abs($delay - $diff);

    return $remain;
}

function saveLastPortingTime() {
    // save time before starting process 
    $handle = fopen("./storage/lastporting.txt", "wa+") or die("Unable to open lastporting file!");
    fwrite($handle, time());
    fclose($handle);
}

function _PreparateMails($row, $PlayerName, $TransferLetterTitle, $TransferLetterMessage, $SOAPUser, $SOAPPassword, $SOAPPort, $SOAPHost, $URI) {
    $item_array = explode(" ", trim($row));
    $by10 = 1;
    $toSend = "";
    $needSend = count($item_array);
    $skip = false;
    for ($i = 0; $i < count($item_array); $i++) {
        $item = explode(":", $item_array[$i]);
        if ($item[0] < 0) {
            //echo "Questo item non esiste o non è consentito sul nostro server e pertanto non può essere importato: " . abs($id) . "<br>\n";
            $needSend--;
            $skip = true;
        } else {
            $toSend .= $item_array[$i];
            $toSend .= " ";
            $skip = false;
        }

        usleep(100000); // slow down process to avoid world freeze

        if ($by10 == 10) {
            RemoteCommandWithSOAP($SOAPUser, $SOAPPassword, $SOAPPort, $SOAPHost, $URI, trim(".send items " . $PlayerName . " \"" . $TransferLetterTitle . "\" \"" . $TransferLetterMessage . "\" " . $toSend));
            $needSend = $needSend - $by10;
            $by10 = 1;
            $toSend = "";
        } else if ($needSend && (($needSend - $by10) == 0)) {
            RemoteCommandWithSOAP($SOAPUser, $SOAPPassword, $SOAPPort, $SOAPHost, $URI, trim(".send items " . $PlayerName . " \"" . $TransferLetterTitle . "\" \"" . $TransferLetterMessage . "\" " . $toSend));
            $toSend = "";
        } else if (!$skip)
            $by10++;
    }
}

function RemoveRaceBonus($RaceID, $SkillID, $value) {
    switch ($RaceID) {
        case 6:         // Tauren
            switch ($SkillID) {
                case 182:
                    $value = $value - 5;
                    return $value;
                default: return $value;
            }
            break;
        case 7:         // Gnome
            switch ($SkillID) {
                case 202:
                    $value = $value - 15;
                    return $value;
                default: return $value;
            }
            break;
        case 10:        // Blood Elf
            switch ($SkillID) {
                case 333:
                    $value = $value - 10;
                    return $value;
                default: return $value;
            }
            break;
        case 11:        // Draenei
            switch ($SkillID) {
                case 755:
                    $value = $value - 5;
                    return $value;
                default: return $value;
            }
            break;
        default: return $value;
    }
}

function CheckExtraSpell($skill) {
    switch ($skill) {
        case 393: // Skinning
        case 182: // Herbalism
        case 185: // Cooking
        case 186: // Mining
        case 333: // Enchanting
        case 755: // Jewelcrafting
        case 773: // Inscription
            return true;
        default: return false;
    }
}

function GetExtraSpellForSkill($skill, $cur, $char_guid, $connection) {
    switch ($skill) {
        case 393: // Skinning
            switch (_CheckSkillLevel($cur)) {
                case 75: return 53125;
                case 150: return 53662;
                case 225: return 53663;
                case 300: return 53664;
                case 375: return 53665;
                case 450: return 53666;
                default: return -1;
            }
        case 182: // Herbalism
            LearnSeparateSpell(2383, $char_guid, $connection);
            switch (_CheckSkillLevel($cur)) {
                case 75: return 55428;
                case 150: return 55480;
                case 225: return 55500;
                case 300: return 55501;
                case 375: return 55502;
                case 450: return 55503;
                default: return -1;
            }
        case 186: // Mining
            LearnSeparateSpell(2656, $char_guid, $connection);
            LearnSeparateSpell(2580, $char_guid, $connection);
            switch (_CheckSkillLevel($cur)) {
                case 75: return 53120;
                case 150: return 53121;
                case 225: return 53122;
                case 300: return 53123;
                case 375: return 53124;
                case 450: return 53040;
                default: return -1;
            }
        case 185: // Cooking
            return 818;
        case 333: // Enchanting
            return 13262;
        case 755: // Jewelcrafting
            return 31252;
        case 773: // Inscription
            return 51005;
    }

    return -1;
}

function _GetCharacterAccountID() {
    return $_SESSION["id"];
}

function _CheckSkillLevel($cur) {
    if ($cur >= 1 && 74 >= $cur)
        return 0;
    else if ($cur >= 75 && 149 >= $cur)
        return 75;
    else if ($cur >= 150 && 224 >= $cur)
        return 150;
    else if ($cur >= 225 && 299 >= $cur)
        return 225;
    else if ($cur >= 300 && 374 >= $cur)
        return 300;
    else if ($cur >= 375 && 449 >= $cur)
        return 375;
    else if ($cur == 450)
        return 450;
}

function _MaxValue($VALUE1, $VALUE2) {
    return $VALUE1 > $VALUE2 ? $VALUE2 : $VALUE1;
}

function _Y($A) {
    $A = str_replace(" ", "", $A);
    $A = str_replace("\t", "", $A);
    $A = str_replace("\n", "", $A);
    $A = str_replace("\r", "", $A);
    $A = str_replace("\x0B", "", $A);
    $A = str_replace("\x00", "", $A);
    return $A;
}

function _DECRYPT($STRING) {
    return strrev(base64_decode(strrev(strrev(base64_decode(strrev($STRING))))));
}

function _RT($TEXT) {
    return "<font color=#CC0000><b>" . $TEXT . "</b></font><br>";
}
