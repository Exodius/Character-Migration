<?php

define("PFREE",0);
define("PBASIC",1);
define("PFULL",2);

define("ADDON_VER","335.701");

$transferType = array();
// FREE
$transferType[PFREE]["Quantity"] = -1; //-1;
$transferType[PFREE]["Type"] = "Free";
$transferType[PFREE]["Descr"] = "<ul>"
        . "<li>Downgrading items lvl <b>284</b> -> <b>271</b></li>"
        . "<li>Downgrading items lvl <b>277</b> -> <b>264</b></li>"
        . "<li>Cambio <b>Shadow's Edge</b> -> <b>Cryptmaker</b></li>"
        . "<li>Cambio <b>Val'anyr, Hammer of Ancient Kings</b> -> <b>Trauma</b></li>"
        . "<li>Cambio <b>Shoulders/Head Wrathful</b> -> <b>Shoulders/Head Relentless</b></li>"
        . "</ul>";
// BASIC
$transferType[PBASIC]["Quantity"] = 2;
$transferType[PBASIC]["Type"] = "Basic";
$transferType[PBASIC]["Descr"] = "<ul>"
        . "<li>Downgrading items lvl <b>284</b> -> <b>271</b></li>"
        . "<li>Cambio <b>Shadow's Edge</b> -> <b>Cryptmaker</b></li>"
        . "<li>Cambio <b>Val'anyr, Hammer of Ancient Kings</b> -> <b>Trauma</b></li>"
        . "</ul>";
// FULL
$transferType[PFULL]["Quantity"] = 0;
$transferType[PFULL]["Type"] = "Full";
$transferType[PFULL]["Descr"] = "Tutto ciò che il sistema è in grado di importare sarà importato!";

