<?php
//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);
//error_reporting(E_ALL);

ob_start();
session_start();

if (isset($_POST['load']))
    $step = 1;
else if (isset($_POST['rename']))
    $step = 2;
else if (isset($_POST['viewer']))
    $step = 5;
else
    $step = 3;


if (!isset($_SESSION['loged']))
    Header('Location: index.php');

include('template/t_header.php');
include('_transfer/language.php');
include_once("_transfer/t_dbfunctions.php");
include_once("_transfer/definitions.php");
include_once("_transfer/t_config.php");

$ID = $_SESSION['id'];

/* //maintenance advice
  echo "
  <h1>IL TOOL DEL PORTING ATTUALMENTE IN MANUTENZIONE, NON UTILIZZARLO!</h1>
  <h2>Torna più tardi</h2>";
 */
?>

<table width = "800" align = "center" cellpadding = "0" cellspacing = "0">
    <tr><td align = "right"><?php echo $write[5] . "<strong> " . mb_strtoupper($_SESSION['user'], 'UTF-8') . "</strong>! || <a href=\"playerside.php\" class='generallink'>$write[6]</a> || <a href=\"logout.php\" class='generallink'>$write[7]</a>"; ?></td></tr>
</table><br>
<script type = "text/javascript" src = "template/jquery-1.7.2.min.js"></script>
<script type = "text/javascript">
<?php
if (!_CheckGMAccess($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ID, $AllowedGMLevels)) {
    ?>
        function DoCancel (id, Realm, Guid) {
            $.ajax({
                type: 'POST',
                url: '_transfer/b_cancel.php',
                data: {
                    cancel: id,
                    RealmlistList: Realm,
                    GUID: Guid
                },
                success: function (data) {
                    $('#' + id).hide( );
                    location.reload(true);
                    alert(data);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(textStatus + " -- " + errorThrown);
                }
            });
        }
    <?php
} else {
    ?>
        function DoApprove (id, Realm, Guid) {
            $.ajax({
                type: 'POST',
                url: '_transfer/b_approve.php',
                data: {
                    Approve: id,
                    RealmlistList: Realm,
                    GUID: Guid
                },
                success: function (data) {
                    $('#' + id).hide( );
                    location.reload(true);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(textStatus + " -- " + errorThrown);
                }
            });
        }

        function DoApproveAll (ids, Realms, Guids) {
            $.ajax({
                type: 'POST',
                url: '_transfer/b_approve_all.php',
                timeout: 0,
                data: {
                    Approve: JSON.stringify(ids),
                    RealmlistList: JSON.stringify(Realms),
                    GUID: JSON.stringify(Guids)
                },
                success: function (data) {
                    location.reload(true);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(textStatus + " -- " + errorThrown);
                }
            });
        }

        function DoDeny (id, Realm, Guid) {
            var Reason = prompt("Reason:", "");
            $.ajax({
                type: 'POST',
                url: '_transfer/b_deny.php',
                data: {
                    Deny: id,
                    RealmlistList: Realm,
                    GUID: Guid,
                    REALSON: Reason,
                },
                success: function (data) {
                    $('#' + id).hide( );
                    location.reload(true);

                    alert(data);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(textStatus + " -- " + errorThrown);
                }
            });
        }

        function DoResend (id, Realm, Guid) {
            $.ajax({
                type: 'POST',
                url: '_transfer/b_resend.php',
                data: {
                    Resend: id,
                    RealmlistList: Realm,
                    GUID: Guid,
                },
                success: function (data) {
                    $('#' + id).hide( );
                    location.reload(true);
                    alert(data);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert(textStatus + " -- " + errorThrown);
                }
            });
        }

        function popUp (content) {
            var win = window.open("", "Items", "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=780, height=200, top=" + (screen.height - 400) + ", left=" + (screen.width - 840));
            win.document.body.innerHTML = "<span style='word-wrap: break-word;'>" + content + "</span>";
        }

        function viewDump ($dump, $type) {
            $("#chardump").val($dump);
            $("#PortingType").val($type);
            $("#viewer_form").submit();
        }

    <?php
}
?>
</script>
<table width = "850" cellpadding = "0" cellspacing = "0" border = "0" rules = "none" align = "center">
    <tr><td align = "center">
            <table align = "center">
                <tr><td align = "left">
                        <?php
                        switch ($step) {
                            case 1: include("_transfer/step1.php");
                                break;
                            case 2: include("_transfer/step2.php");
                                break;
                            case 5: header("Location: _transfer/chardump_viewer.php");
                                break;
                            case 3: FlushStatisticTable($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ID, $AllowedGMLevels, $write[78], $write[75], $write[60], $write[65], $write[61], $write[85], $write[86], $write[30], $write[31], $write[32], $write[33], $write[34], $write[84]);
                                break;
                        }
                        ?>
                    </td></tr>
            </table>
        </td></tr>
</table>
<?php
include ('template/t_footer.php');
ob_end_flush();

function FlushStatisticTable($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ACCOUNT_ID, $AllowedGMLevels, $TEXT1, $TEXT2, $TEXT3, $TEXT4, $TEXT5, $TEXT6, $TEXT7, $TEXT8, $TEXT9, $TEXT10, $TEXT11, $TEXT12, $TEXT13) {
    global $transferType;

    $chardump_viewer_url = BASE_URL . "/_transfer/chardump_viewer.php";

    if (_CheckGMAccess($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ACCOUNT_ID, $AllowedGMLevels)) {
        ?>
        <form style="display: hidden" action="<?= $chardump_viewer_url ?>" method="POST" id="viewer_form" target="_blank">
            <input type="hidden" name="gm_skip_check" value="1"/>
            <input type="hidden" id="PortingType" name="PortingType" value="0"/>
            <input type="hidden" id="chardump" name="chardump" value=""/>
        </form>

        <a href='<?= $chardump_viewer_url ?>'>Vai al visualizzatore dei dumps</a>
        <div align = right class = "MythTable" style = "width: 100%; padding-right: 2px;font-family: 'Tahoma';"><?= $TEXT1 ?></div>
        <br>
        <?php
        $connection = mysql_connect($AccountDBHost, $DBUser, $DBPassword);
        _SelectDB($AccountDB, $connection);
        $query = mysql_query("SELECT * FROM `account_transfer` WHERE `gmAccount` = " . $ACCOUNT_ID . " ORDER BY `id` DESC LIMIT 25;", $connection);
        mysql_close($connection);
    } else {
        echo "       
            <center><h1>Porting Standard</h1></center>
            <div align = left style = \"width: 100%; padding-right: 2px;font-family: 'Tahoma'; \">" . $TEXT2 . "</div>
            <br>
            <div style = \"font-size:17px\">" . $TEXT3 . "</div>
            <br>
            <br>
            <center><h1>Visualizzatore Chardump</h1></center>
            <br>
            <div style = \"font-size:17px\"><b>Prima di iniziare, controlla cosa verrà importato utilizzando questo visualizzatore!</b></div>
            <br>
            <br>
            <div class = \"MythInput\">
                <form action=\"" . $_SERVER["SCRIPT_NAME"] . "\" method=\"post\" enctype=\"multipart/form-data\" target='_blank'>
                    <input type='submit' name = 'viewer' value='Avvia Visualizzatore, FASE PRE-PORTING' />
                </form>
                <br>
            </div>            
            <div style = \"font-size:17px\"><b>Dopo aver controllato ed esserti assicurato di ciò che ti verrà importato, sei pronto per proseguire</b></div>
            <br>
            <br>
            <div class = \"MythInput\">
                <form action=\"" . $_SERVER["SCRIPT_NAME"] . "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"submit\" name = \"load\" value=\"" . $TEXT4 . "\"/>
                </form>
                <br>
            </div>

            <div align = right class = \"MythTable\" style = \"width: 100%; padding-right: 2px;font-family: 'Tahoma';\">" . $TEXT5 . "</div>";

        $connection = mysql_connect($AccountDBHost, $DBUser, $DBPassword);
        _SelectDB($AccountDB, $connection);
        $query = mysql_query("SELECT * FROM `account_transfer` WHERE `cAccount` = " . $ACCOUNT_ID . " ORDER BY `id` DESC LIMIT 25;", $connection);
        mysql_close($connection);
    }
    echo "
            <div style = \"white-space: nowrap; border-top-width: 1px; border-top-style: solid; padding-top: 8px; margin-top: 8px;\">
            <table width = 100% align = center class = 'gm-character-list'>
                <tr bgcolor = #FFEAC7>";
    if (_CheckGMAccess($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $ACCOUNT_ID, $AllowedGMLevels)) {
        ?>
        <td>\"OUR\" & <br>\"OLD\" Name: </td>
        <td>\"OUR\" & <br>\"OLD\" Realm:</td>
        <td>Realmlist:              </td>
        <td>Account:                </td>
        <td>Password:               </td>
        <td>Server URL:             </td>
        <td>Type:                   </td>
        <td>Info:                  </td>
        <td>Date:                   </td>
        <td>To Account:                </td>
        <td>Admin Options:          </td>
        </tr>
        <?php
        $ids = array();
        $guids = array();
        $realms = array();

        $count = 0;
        $toApprove = "";
        $prev = "";
        while ($row = mysql_fetch_array($query)) {

            if ($row["cStatus"] == 0) {
                $toApprove.= "
                    <tr bgcolor = #FFFFCC>
                        <td>" . $row["cNameNEW"] . " / <br> " . $row["cNameOLD"] . "</td>
                        <td>" . _CheckRealm($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $row["cRealm"]) . " / " . $row["oRealm"] . "</td>
                        <td>" . $row["oRealmlist"] . "</td>
                        <td>" . $row["oAccount"] . "</td>
                        <td>" . $row["oPassword"] . "</td>
                        <td style='max-width: 40px; word-wrap: break-word'>" . $row["oServer"] . "</td>
                        <td>" . $transferType[$row["tType"]]["Type"] . "</td>
                        <td>Addon Rev: " . ($row["addonVersion"] ? $row["addonVersion"] : "<Empty>") . " <br><br>
                        <button onclick='popUp(\"" . str_replace(' ', "<br>", $row["cItemRow"]) . "\")'>Item List</button><br>
                        <button onclick='viewDump(\"CHDMP_DATA = \\\"" . $row["cDump"] . "\\\" \"," . $row["tType"] . ")'>View Dump</button></td>
                        <td>" . $row["date_created"] . "</td>
                        <td>" . $row["cAccount"] . "</td>
                        <td align = center>
                            <button name = \"Approve\" id = \"" . $row["id"] . "\" onclick = \"javascript:DoApprove('" . $row["id"] . "', '" . $row["cRealm"] . "', '" . $row["GUID"] . "');\" style = \"font-size:10px\"><font color = \"green\">" . $TEXT6 . "</font></button><br>
                            <button name = \"Deny\" id = \"" . $row["id"] . "\" onclick = \"javascript:DoDeny('" . $row["id"] . "', '" . $row["cRealm"] . "', '" . $row["GUID"] . "');\" style = \"font-size:10px\"><font color = \"red\">" . $TEXT7 . "</font></button><br>
                            <button name = \"Resend\" id = \"" . $row["id"] . "\" onclick = \"javascript:DoResend('" . $row["id"] . "', '" . $row["cRealm"] . "', '" . $row["GUID"] . "');\" style = \"font-size:10px\"><font color = \"purple\">Resend</font></button>
                        </td>
                    </tr>";

                array_push($ids, $row["id"]);
                array_push($realms, $row["cRealm"]);
                array_push($guids, $row["GUID"]);
            } else {
                if ($count < 30) {
                    $prev.= "
                    <tr bgcolor = #FFFFCC>
                        <td>" . $row["cNameNEW"] . " / <br> " . $row["cNameOLD"] . "</td>
                        <td>" . _CheckRealm($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $row["cRealm"]) . " / " . $row["oRealm"] . "</td>
                        <td>" . $row["oRealmlist"] . "</td>
                        <td>" . $row["oAccount"] . "</td>
                        <td>" . $row["oPassword"] . "</td>
                        <td style='max-width: 40px; word-wrap: break-word'>" . $row["oServer"] . "</td>
                        <td>" . $transferType[$row["tType"]]["Type"] . "</td>
                        <td>Addon Rev: " . ($row["addonVersion"] ? $row["addonVersion"] : "<Empty>") . " <br><br>
                        <button onclick='popUp(\"" . str_replace(' ', "<br>", $row["cItemRow"]) . "\")'>Item List</button><br>
                        <button onclick='viewDump(\"CHDMP_DATA = \\\"" . $row["cDump"] . "\\\" \"," . $row["tType"] . ")'>View Dump</button></td>
                        <td>" . $row["date_created"] . "</td>
                        <td>" . $row["cAccount"] . "</td>
                        <td bgcolor = #FFEAC7 " . _CheckReason($row["cStatus"], $row["Reason"]) . ">" . _CheckStatus($row["cStatus"], $TEXT8, $TEXT9, $TEXT10, $TEXT11, $TEXT12, $row["Reason"]) . "</td>
                    </tr>";
                }

                $count++;
            }
        }

        echo $toApprove;
        ?>
        <tr>
            <td colspan="11" align = center><h1>Previous portings</h1></td>
        </tr>
        <?php
        echo $prev;

        echo "<button name = \"ApproveAll\" id = \"" . $row["id"] . "\" onclick = 'javascript:DoApproveAll(" . json_encode($ids) . ", " . json_encode($realms) . ", " . json_encode($guids) . ");' style = \"font-size:10px\"><font color = \"green\">Approve All</font></button><br>";
        echo "</table></div>";
    } else {
        echo "
                <td>No.:            </td>
                <td>Character Name: </td>
                <td>Realm:          </td>
                <td>Status:         </td>
                <td>Options:        </td>
            </tr>";
        while ($row = mysql_fetch_array($query)) {
            echo "
                    <tr bgcolor = #FFFFCC>
                        <td align = center bgcolor = #FFEAC7>" . $row["id"] . "</td>
                        <td>" . $row["cNameNEW"] . "</td>
                        <td align = center>" . _CheckRealm($AccountDBHost, $DBUser, $DBPassword, $AccountDB, $row["cRealm"]) . "</td>
                        <td bgcolor = #FFEAC7 " . _CheckReason($row["cStatus"], $row["Reason"]) . ">" . _CheckStatus($row["cStatus"], $TEXT8, $TEXT9, $TEXT10, $TEXT11, $TEXT12, $row["Reason"]) . "</td>
                        <td align = center>";
            if ($row["cStatus"] == 0)
                echo "<button name = \"cancel\" id = \"" . $row["id"] . "\" onclick = \"javascript:DoCancel('" . $row["id"] . "', '" . $row["cRealm"] . "', '" . $row["GUID"] . "');\" style = \"font-size:10px\"><font color = \"purple\">" . $TEXT13 . "</button>";
            echo "  </td>
                    </tr>";
        }
        echo "</table></div>";
    }
}
?>