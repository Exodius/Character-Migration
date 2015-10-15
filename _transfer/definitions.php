<?php

define("PFREE",0);
define("PBASIC",1);
define("PFULL",2);
define("PINSTANT80",3);
define("PORTING_ACCOUNT",523);
define("DELAY_TIME",120);

define("ADDON_VER","335.701");

$portingType = array();
// FREE
$portingType[PFREE]["Quantity"] = -1; //-1;
$portingType[PFREE]["Type"] = "Free";
$portingType[PFREE]["isPorting"] = true;
$portingType[PFREE]["Descr"] = "<ul>"
        . "<li>Downgrading items lvl <b>284</b> -> <b>271</b></li>"
        . "<li>Downgrading items lvl <b>277</b> -> <b>264</b></li>"
        . "<li>Cambio <b>Shadow's Edge</b> -> <b>Cryptmaker</b></li>"
        . "<li>Cambio <b>Val'anyr, Hammer of Ancient Kings</b> -> <b>Trauma</b></li>"
        . "</ul>";
// BASIC
$portingType[PBASIC]["Quantity"] = 2;
$portingType[PBASIC]["Type"] = "Basic";
$portingType[PBASIC]["isPorting"] = true;
$portingType[PBASIC]["Descr"] = "<ul>"
        . "<li>Downgrading items lvl <b>284</b> -> <b>271</b></li>"
        . "<li>Cambio <b>Shadow's Edge</b> -> <b>Cryptmaker</b></li>"
        . "<li>Cambio <b>Val'anyr, Hammer of Ancient Kings</b> -> <b>Trauma</b></li>"
        . "</ul>";
// FULL
$portingType[PFULL]["Quantity"] = 0;
$portingType[PFULL]["Type"] = "Full";
$portingType[PFULL]["isPorting"] = true;
$portingType[PFULL]["Descr"] = "Tutto ciò che il sistema è in grado di importare sarà importato!";

// INSTANT80
$specialTransfers[PINSTANT80]["Quantity"] = 0;
$specialTransfers[PINSTANT80]["Type"] = "Instant80";
$specialTransfers[PINSTANT80]["Descr"] = "Il tuo pg livello 80 pronto in un instante!";
