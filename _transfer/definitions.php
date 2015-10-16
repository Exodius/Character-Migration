<?php

define("PFREE",0);
define("PBASIC",1);
define("PFULL",2);
define("PINSTANT80",3);

define("ADDON_VER","335.701");

$transferType = array();
// FREE
$transferType[PFREE]["Quantity"] = -1; //-1;
$transferType[PFREE]["Type"] = "Free";
$transferType[PFREE]["isPorting"] = true;
$transferType[PFREE]["Descr"] = "<ul>"
        . "<li>Downgrading items lvl <b>284</b> -> <b>271</b></li>"
        . "<li>Downgrading items lvl <b>277</b> -> <b>264</b></li>"
        . "<li>Cambio <b>Shadow's Edge</b> -> <b>Cryptmaker</b></li>"
        . "<li>Cambio <b>Val'anyr, Hammer of Ancient Kings</b> -> <b>Trauma</b></li>"
        . "</ul>";
// BASIC
$transferType[PBASIC]["Quantity"] = 2;
$transferType[PBASIC]["Type"] = "Basic";
$transferType[PBASIC]["isPorting"] = true;
$transferType[PBASIC]["Descr"] = "<ul>"
        . "<li>Downgrading items lvl <b>284</b> -> <b>271</b></li>"
        . "<li>Cambio <b>Shadow's Edge</b> -> <b>Cryptmaker</b></li>"
        . "<li>Cambio <b>Val'anyr, Hammer of Ancient Kings</b> -> <b>Trauma</b></li>"
        . "</ul>";
// FULL
$transferType[PFULL]["Quantity"] = 0;
$transferType[PFULL]["Type"] = "Full";
$transferType[PFULL]["isPorting"] = true;
$transferType[PFULL]["Descr"] = "Tutto ciò che il sistema è in grado di importare sarà importato!";

// INSTANT80
$transferType[PINSTANT80]["Quantity"] = 0;
$transferType[PINSTANT80]["Type"] = "Instant80";
$transferType[PINSTANT80]["isPorting"] = false;
$transferType[PINSTANT80]["Descr"] = "Il tuo pg livello 80 pronto in un instante!";
