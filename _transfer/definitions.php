<?php

define("BASE_URL",'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));

define("PFREE", 0);
define("PBASIC", 1);
define("PFULL", 2);

$status=array(
    "PENDING"=>0,
    "ACCEPTED"=>1,
    "DENIED"=>2,
    "CANCELLED"=>3,
    "REPORT"=>4,
    "ERROR"=>5
);

DEFINE("CLASS_WARRIOR",1);
DEFINE("CLASS_PALADIN",2);
DEFINE("CLASS_HUNTER",3);
DEFINE("CLASS_ROGUE",4);
DEFINE("CLASS_PRIEST",5);
DEFINE("CLASS_DEATHKNIGHT",6);
DEFINE("CLASS_SHAMAN",7);
DEFINE("CLASS_MAGE",8);
DEFINE("CLASS_WARLOCK",9);
DEFINE("CLASS_DRUID",11);

$addonVers = array(
    "335.707",
    "434.703"
);

define("WOTLK_BUILD",12340);
define("CATA_BUILD",15595);

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
$transferType[PBASIC]["Type"] = "Basic - Solo WOTLK";
$transferType[PBASIC]["Descr"] = "<ul>"
        . "<li>Downgrading items lvl <b>284</b> -> <b>271</b></li>"
        . "<li>Cambio <b>Shadow's Edge</b> -> <b>Cryptmaker</b></li>"
        . "<li>Cambio <b>Val'anyr, Hammer of Ancient Kings</b> -> <b>Trauma</b></li>"
        . "</ul>";
// FULL
$transferType[PFULL]["Quantity"] = 0;
$transferType[PFULL]["Type"] = "Full - Solo WOTLK";
$transferType[PFULL]["Descr"] = "Tutto ciò che il sistema è in grado di importare sarà importato!";

