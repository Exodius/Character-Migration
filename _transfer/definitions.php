<?php

define("PFREE",0);
define("PBASIC",1);
define("PFULL",2);

$portingType = array();
// FREE
$portingType[PFREE]["Quantity"] = 0; //-1;
$portingType[PFREE]["Type"] = "Free [Diponibile a breve!]";
$portingType[PFREE]["Descr"] = "Downgrading items lvl maggiore al 271 e rimozione ShadowMourne e ShadowEdge";
// BASIC
$portingType[PBASIC]["Quantity"] = 2;
$portingType[PBASIC]["Type"] = "Basic";
$portingType[PBASIC]["Descr"] = "Downgrade item lvl 284 e rimozione ShadowMourne e ShadowEdge";
// FULL
$portingType[PFULL]["Quantity"] = 0;
$portingType[PFULL]["Type"] = "Full";
$portingType[PFULL]["Descr"] = "Tutto ciò che il sistema è in grado di importare sarà importato!";
