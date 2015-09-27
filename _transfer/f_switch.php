<?php

function GetSkillID($skill, $locale) {
    switch ($locale) {
        case "FRFR": {
                switch ($skill) {
                    case "EPÉES": return 43;
                    case "HACHES": return 44;
                    case "ARCS": return 45;
                    case "ARMES À FEU": return 46;
                    case "MASSE": return 54;
                    case "EPÉES À DEUX MAINS": return 55;
                    case "DÉFENSE": return 95;
                    case "SECOURISME": return 129;
                    case "BÂTONS": return 136;
                    case "MASSES À DEUX MAINS": return 160;
                    case "MAINS NUES": return 162;
                    case "FORGE": return 164;
                    case "TRAVAIL DU CUIR": return 165;
                    case "ALCHIMIE": return 171;
                    case "HACHES À DEUX MAINS": return 172;
                    case "DAGUES": return 173;
                    case "ARMES DE JET": return 176;
                    case "HERBORISTERIE": return 182;
                    case "CUISINE": return 185;
                    case "MINAGE": return 186;
                    case "COUTURE": return 197;
                    case "INGÉNIERIE": return 202;
                    case "ARBALÈTES": return 226;
                    case "BAGUETTES": return 228;
                    case "ARMES D'HAST": return 229;
                    case "ARMURE EN PLAQUES": return 293;
                    case "ENCHANTEMENT": return 333;
                    case "PÊCHE": return 356;
                    case "DÉPEÇAGE": return 393;
                    case "MAILLES": return 413;
                    case "CUIR": return 414;
                    case "TISSU": return 415;
                    case "BOUCLIER": return 433;
                    case "ARMES DE PUGILAT": return 473;
                    case "CROCHETAGE": return 633;
                    case "JOAILLERIE": return 755;
                    case "CALLIGRAPHIE": return 773;
                    case "RUNEFORGER": return 776;
                    default: return -1;
                }
            }
        case "DEDE": {
                switch ($skill) {
                    case "SCHWERTER": return 43;
                    case "AXTE": return 44;
                    case "BOGEN": return 45;
                    case "SCHUSSWAFFEN": return 46;
                    case "STREITKOLBEN": return 54;
                    case "ZWEIHANDSCHWERTER": return 55;
                    case "VERTEIDIGUNG": return 95;
                    case "ERSTE HILFE": return 129;
                    case "STABE": return 136;
                    case "ZWEIHANDSTREITKOLBEN":return 160;
                    case "UNBEWAFFNET": return 162;
                    case "SCHMIEDEKUNST": return 164;
                    case "LEDERVERARBEITUNG": return 165;
                    case "ALCHEMIE": return 171;
                    case "ZWEIHANDAXTE": return 172;
                    case "DOLCHE": return 173;
                    case "WURFWAFFEN": return 176;
                    case "KRAUTERKUNDE": return 182;
                    case "KOCHKUNST": return 185;
                    case "BERGBAU": return 186;
                    case "SCHNEIDEREI": return 197;
                    case "INGENIEURSKUNST": return 202;
                    case "ARMBRUSTE": return 226;
                    case "ZAUBERSTABE": return 228;
                    case "STANGENWAFFEN": return 229;
                    case "PLATTENPANZER": return 293;
                    case "VERZAUBERKUNST": return 333;
                    case "ANGELN": return 356;
                    case "KURSCHNEREI": return 393;
                    case "SCHWERE RUSTUNG": return 413;
                    case "LEDER": return 414;
                    case "STOFF": return 415;
                    case "SCHILD": return 433;
                    case "FAUSTWAFFEN": return 473;
                    case "SCHLOSSKNACKEN": return 633;
                    case "JUWELENSCHLEIFEN": return 755;
                    case "INSCHRIFTENKUNDE": return 773;
                    case "RUNEN SCHMIEDEN": return 776;
                    default: return -1;
                }
            }
        case "RURU": {
                switch ($skill) {
                    case "МЕЧИ": return 43;
                    case "ТОПОРЫ": return 44;
                    case "ЛУКИ": return 45;
                    case "ОГНЕСТРЕЛЬНОЕ ОРУЖИЕ": return 46;
                    case "ДРОБЯЩЕЕ ОРУЖИЕ": return 54;
                    case "ДВУРУЧНЫЕ МЕЧИ": return 55;
                    case "ЗАЩИТА": return 95;
                    case "ПЕРВАЯ ПОМОЩЬ": return 129;
                    case "ПОСОХИ": return 136;
                    case "ДВУРУЧНОЕ ДРОБЯЩЕЕ ОРУЖИЕ": return 160;
                    case "РУКОПАШНЫЙ БОЙ": return 162;
                    case "КУЗНЕЧНОЕ ДЕЛО": return 164;
                    case "КОЖЕВНИЧЕСТВО": return 165;
                    case "АЛХИМИЯ": return 171;
                    case "ДВУРУЧНЫЕ ТОПОРЫ": return 172;
                    case "КИНЖАЛЫ": return 173;
                    case "МЕТАТЕЛЬНОЕ ОРУЖИЕ": return 176;
                    case "ТРАВНИЧЕСТВО": return 182;
                    case "КУЛИНАРИЯ": return 185;
                    case "ГОРНОЕ ДЕЛО": return 186;
                    case "ПОРТНЯЖНОЕ ДЕЛО": return 197;
                    case "ИНЖЕНЕРНОЕ ДЕЛО": return 202;
                    case "АРБАЛЕТЫ": return 226;
                    case "ЖЕЗЛЫ": return 228;
                    case "ДРЕВКОВОЕ ОРУЖИЕ": return 229;
                    case "ЛАТЫ": return 293;
                    case "НАЛОЖЕНИЕ ЧАР": return 333;
                    case "РЫБНАЯ ЛОВЛЯ": return 356;
                    case "СНЯТИЕ ШКУР": return 393;
                    case "КОЛЬЧУЖНЫЕ ДОСПЕХИ": return 413;
                    case "КОЖАНЫЕ ДОСПЕХИ": return 414;
                    case "ТКАНЕВЫЕ ДОСПЕХИ": return 415;
                    case "ЩИТ": return 433;
                    case "КИСТЕВОЕ ОРУЖИЕ": return 473;
                    case "ВЗЛОМ": return 633;
                    case "ЮВЕЛИРНОЕ ДЕЛО": return 755;
                    case "НАЧЕРТАНИЕ": return 773;
                    case "КОВКА РУН": return 776;
                    default: return -1;
                }
            }
        case "ESES": {
                switch ($skill) {
                    case "ESPADAS": return 43;
                    case "HACHAS": return 44;
                    case "ARCOS": return 45;
                    case "ARMAS DE FUEGO": return 46;
                    case "MAZAS": return 54;
                    case "ESPADAS DE DOS MANOS":return 55;
                    case "DEFENSA": return 95;
                    case "PRIMEROS AUXILIOS": return 129;
                    case "BASTONES": return 136;
                    case "MAZAS DE DOS MANOS": return 160;
                    case "SIN ARMAS": return 162;
                    case "HERRERÍA": return 164;
                    case "PELETERÍA": return 165;
                    case "ALQUIMIA": return 171;
                    case "HACHAS DE DOS MANOS": return 172;
                    case "DAGAS": return 173;
                    case "ARMAS ARROJADIZAS": return 176;
                    case "HERBORISTERÍA": return 182;
                    case "COCINA": return 185;
                    case "MINERÍA": return 186;
                    case "SASTRERÍA": return 197;
                    case "INGENIERÍA": return 202;
                    case "BALLESTAS": return 226;
                    case "VARITAS": return 228;
                    case "ARMAS DE ASTA": return 229;
                    case "MALLA DE PLACAS": return 293;
                    case "ENCANTAMIENTO": return 333;
                    case "PESCA": return 356;
                    case "DESOLLAR": return 393;
                    case "MALLA": return 413;
                    case "CUERO": return 414;
                    case "TELA": return 415;
                    case "ESCUDO": return 433;
                    case "ARMAS DE PUÑO": return 473;
                    case "GANZÚA": return 633;
                    case "JOYERÍA": return 755;
                    case "INSCRIPCIÓN": return 773;
                    case "FORJA DE RUNAS": return 776;
                    default: return -1;
                }
            }
        case "ENUS":
        case "ENGB": {
                switch ($skill) {
                    case "SWORDS": return 43;
                    case "AXES": return 44;
                    case "BOWS": return 45;
                    case "GUNS": return 46;
                    case "MACES": return 54;
                    case "TWO-HANDED SWORDS": return 55;
                    case "DEFENSE": return 95;
                    case "FIRST AID": return 129;
                    case "STAVES": return 136;
                    case "TWO-HANDED MACES": return 160;
                    case "UNARMED": return 162;
                    case "BLACKSMITHING": return 164;
                    case "LEATHERWORKING": return 165;
                    case "ALCHEMY": return 171;
                    case "TWO-HANDED AXES": return 172;
                    case "DAGGERS": return 173;
                    case "THROWN": return 176;
                    case "HERBALISM": return 182;
                    case "COOKING": return 185;
                    case "MINING": return 186;
                    case "TAILORING": return 197;
                    case "ENGINEERING": return 202;
                    case "CROSSBOWS": return 226;
                    case "WANDS": return 228;
                    case "POLEARMS": return 229;
                    case "PLATE MAIL": return 293;
                    case "ENCHANTING": return 333;
                    case "FISHING": return 356;
                    case "SKINNING": return 393;
                    case "MAIL": return 413;
                    case "LEATHER": return 414;
                    case "CLOTH": return 415;
                    case "SHIELD": return 433;
                    case "FIST WEAPONS": return 473;
                    case "LOCKPICKING": return 633;
                    case "JEWELCRAFTING": return 755;
                    case "INSCRIPTION": return 773;
                    case "RUNEFORGING": return 776;
                    default: return -1;
                }
            }
    }
}

function _GetGlyphID($GlyphID) {
    switch ($GlyphID) {
        case 52084: return 2;
        case 12320: return 21;
        case 12297: return 22;
        case 46831: return 61;
        case 52084: return 81;
        case 52085: return 82;
        case 46487: return 121;
        case 54292: return 141;
        case 54810: return 161;
        case 54811: return 162;
        case 54812: return 163;
        case 54813: return 164;
        case 54815: return 165;
        case 54818: return 166;
        case 54821: return 167;
        case 54824: return 168;
        case 54832: return 169;
        case 54733: return 170;
        case 54743: return 171;
        case 54754: return 172;
        case 54825: return 173;
        case 54826: return 174;
        case 54845: return 175;
        case 54830: return 176;
        case 54831: return 177;
        case 54828: return 178;
        case 54756: return 179;
        case 54829: return 180;
        case 54760: return 181;
        case 54912: return 182;
        case 54922: return 183;
        case 54925: return 184;
        case 54923: return 185;
        case 54924: return 186;
        case 54926: return 187;
        case 54927: return 188;
        case 54928: return 189;
        case 54929: return 190;
        case 54930: return 191;
        case 54931: return 192;
        case 54934: return 193;
        case 54935: return 194;
        case 54936: return 195;
        case 54937: return 196;
        case 54938: return 197;
        case 54939: return 198;
        case 54940: return 199;
        case 54943: return 200;
        case 55436: return 211;
        case 55437: return 212;
        case 55449: return 213;
        case 55454: return 214;
        case 55442: return 215;
        case 55439: return 216;
        case 55455: return 217;
        case 55450: return 218;
        case 55447: return 219;
        case 55451: return 220;
        case 55443: return 221;
        case 55456: return 222;
        case 55440: return 223;
        case 55438: return 224;
        case 55448: return 225;
        case 55453: return 226;
        case 55441: return 227;
        case 55446: return 228;
        case 55444: return 229;
        case 55452: return 230;
        case 55445: return 231;
        case 55675: return 251;
        case 55677: return 252;
        case 55684: return 253;
        case 55678: return 254;
        case 55679: return 255;
        case 55683: return 256;
        case 55686: return 257;
        case 55673: return 258;
        case 55691: return 259;
        case 55688: return 260;
        case 55681: return 261;
        case 55689: return 262;
        case 55672: return 263;
        case 55680: return 264;
        case 55676: return 265;
        case 55674: return 266;
        case 55690: return 267;
        case 55682: return 268;
        case 55687: return 269;
        case 55692: return 270;
        case 55685: return 271;
        case 56242: return 272;
        case 56235: return 273;
        case 56218: return 274;
        case 56241: return 275;
        case 56232: return 276;
        case 56244: return 277;
        case 56246: return 278;
        case 56249: return 279;
        case 56238: return 280;
        case 56224: return 281;
        case 56217: return 282;
        case 56228: return 283;
        case 56248: return 284;
        case 56226: return 285;
        case 56240: return 286;
        case 56229: return 287;
        case 56216: return 288;
        case 56231: return 289;
        case 56250: return 290;
        case 56233: return 291;
        case 56247: return 292;
        case 56360: return 311;
        case 56363: return 312;
        case 56381: return 313;
        case 56365: return 314;
        case 56380: return 315;
        case 56368: return 316;
        case 56369: return 317;
        case 56376: return 318;
        case 56370: return 319;
        case 56384: return 320;
        case 56372: return 321;
        case 56377: return 322;
        case 56374: return 323;
        case 56371: return 324;
        case 56366: return 325;
        case 56383: return 326;
        case 56367: return 327;
        case 56382: return 328;
        case 56375: return 329;
        case 56364: return 330;
        case 56373: return 331;
        case 56824: return 351;
        case 56841: return 352;
        case 56857: return 353;
        case 56833: return 354;
        case 56851: return 355;
        case 56830: return 356;
        case 56850: return 357;
        case 56844: return 358;
        case 56845: return 359;
        case 56847: return 360;
        case 56829: return 361;
        case 56846: return 362;
        case 56856: return 363;
        case 56836: return 364;
        case 56828: return 365;
        case 56832: return 366;
        case 56849: return 367;
        case 56826: return 368;
        case 56842: return 369;
        case 56838: return 370;
        case 56848: return 371;
        case 56808: return 391;
        case 56813: return 392;
        case 56800: return 393;
        case 56818: return 394;
        case 56820: return 395;
        case 56806: return 396;
        case 56799: return 397;
        case 56802: return 398;
        case 56803: return 399;
        case 56804: return 400;
        case 56812: return 401;
        case 56814: return 402;
        case 56809: return 403;
        case 56807: return 404;
        case 56819: return 405;
        case 56801: return 406;
        case 56798: return 407;
        case 56805: return 408;
        case 56821: return 409;
        case 56810: return 410;
        case 56811: return 411;
        case 57856: return 431;
        case 57858: return 432;
        case 57855: return 433;
        case 57857: return 434;
        case 57862: return 435;
        case 58133: return 436;
        case 58132: return 438;
        case 57866: return 439;
        case 57870: return 440;
        case 57903: return 441;
        case 57902: return 442;
        case 57904: return 443;
        case 57900: return 444;
        case 57924: return 445;
        case 57926: return 446;
        case 57927: return 447;
        case 57928: return 448;
        case 58136: return 449;
        case 52648: return 450;
        case 57925: return 451;
        case 57937: return 452;
        case 57958: return 453;
        case 57979: return 454;
        case 57955: return 455;
        case 57947: return 456;
        case 57954: return 457;
        case 57985: return 458;
        case 57987: return 459;
        case 58009: return 460;
        case 57986: return 461;
        case 58015: return 462;
        case 58228: return 463;
        case 58032: return 464;
        case 58027: return 465;
        case 58017: return 466;
        case 58033: return 467;
        case 58039: return 468;
        case 58038: return 469;
        case 58058: return 470;
        case 58135: return 471;
        case 58134: return 472;
        case 58059: return 473;
        case 58055: return 474;
        case 58063: return 475;
        case 58057: return 476;
        case 58079: return 477;
        case 58070: return 478;
        case 58081: return 479;
        case 58080: return 480;
        case 58107: return 481;
        case 58094: return 482;
        case 58095: return 483;
        case 58096: return 484;
        case 58097: return 485;
        case 58099: return 486;
        case 58098: return 487;
        case 58104: return 488;
        case 58368: return 489;
        case 58369: return 490;
        case 58355: return 491;
        case 58366: return 492;
        case 58388: return 493;
        case 58367: return 494;
        case 58372: return 495;
        case 58357: return 496;
        case 58377: return 497;
        case 58365: return 498;
        case 58386: return 499;
        case 58385: return 500;
        case 58364: return 501;
        case 58375: return 502;
        case 58376: return 503;
        case 58387: return 504;
        case 58384: return 505;
        case 58353: return 506;
        case 58356: return 507;
        case 58382: return 508;
        case 58370: return 509;
        case 58613: return 511;
        case 58623: return 512;
        case 58616: return 513;
        case 58640: return 514;
        case 58673: return 515;
        case 58620: return 516;
        case 58677: return 518;
        case 62259: return 519;
        case 58629: return 520;
        case 58647: return 521;
        case 58680: return 522;
        case 58625: return 523;
        case 58631: return 524;
        case 58671: return 525;
        case 58657: return 526;
        case 58686: return 527;
        case 58669: return 528;
        case 58642: return 529;
        case 58618: return 530;
        case 58635: return 531;
        case 58676: return 532;
        case 59219: return 551;
        case 59289: return 552;
        case 59309: return 553;
        case 59307: return 554;
        case 60200: return 555;
        case 59327: return 556;
        case 59332: return 557;
        case 59336: return 558;
        case 56420: return 559;
        case 56414: return 560;
        case 56416: return 561;
        case 60200: return 571;
        case 61205: return 591;
        case 62126: return 611;
        case 62132: return 612;
        case 62135: return 613;
        case 62080: return 631;
        case 62210: return 651;
        case 62969: return 671;
        case 62970: return 672;
        case 62971: return 673;
        case 63055: return 674;
        case 63056: return 675;
        case 63057: return 676;
        case 63065: return 677;
        case 63066: return 691;
        case 63067: return 692;
        case 63068: return 693;
        case 63069: return 694;
        case 63086: return 695;
        case 63090: return 696;
        case 63091: return 697;
        case 63092: return 698;
        case 63093: return 699;
        case 63095: return 700;
        case 63218: return 701;
        case 63219: return 702;
        case 63220: return 703;
        case 63222: return 704;
        case 63223: return 705;
        case 63224: return 706;
        case 63225: return 707;
        case 63229: return 708;
        case 63231: return 709;
        case 63235: return 710;
        case 63237: return 711;
        case 63246: return 712;
        case 63248: return 713;
        case 63249: return 714;
        case 63252: return 715;
        case 63253: return 716;
        case 63254: return 731;
        case 63256: return 732;
        case 63268: return 733;
        case 63269: return 734;
        case 63270: return 735;
        case 63271: return 736;
        case 63273: return 737;
        case 63279: return 751;
        case 63280: return 752;
        case 63291: return 753;
        case 63298: return 754;
        case 63302: return 755;
        case 63303: return 756;
        case 63304: return 757;
        case 63309: return 758;
        case 63310: return 759;
        case 63320: return 760;
        case 63312: return 761;
        case 63324: return 762;
        case 63325: return 763;
        case 63326: return 764;
        case 63327: return 765;
        case 63328: return 766;
        case 63329: return 767;
        case 63330: return 768;
        case 63331: return 769;
        case 63332: return 770;
        case 63333: return 771;
        case 63334: return 772;
        case 63335: return 773;
        case 64199: return 791;
        case 65243: return 811;
        case 67598: return 831;
        case 68164: return 851;
        case 70937: return 871;
        case 71013: return 891;
        case 70947: return 911;
        default:
            return 0;
    }
}

function _GetGemID($Gem) {
    switch ($Gem) {
        case 3121: return 32199;
        case 3110: return 31866;
        case 2967: return 28469;
        case 2962: return 28464;
        case 2959: return 28461;
        case 2942: return 28290;
        case 2699: return 23119;
        case 2697: return 23116;
        case 2762: return 23103;
        case 2755: return 23100;
        case 2752: return 23098;
        case 2690: return 23094;
        case 2705: return 23099;
        case 2709: return 23109;
        case 2701: return 23121;
        case 2757: return 23104;
        case 2921: return 27809;
        case 2924: return 27812;
        case 2923: return 27820;
        case 2944: return 28361;
        case 2961: return 28463;
        case 2965: return 28467;
        case 2968: return 28470;
        case 2963: return 28465;
        case 2964: return 28466;
        case 2958: return 28460;
        case 2960: return 28462;
        case 2966: return 28468;
        case 2956: return 28458;
        case 2957: return 28459;
        case 2691: return 23095;
        case 2692: return 23096;
        case 2706: return 23105;
        case 2708: return 23108;
        case 2711: return 23111;
        case 2694: return 23113;
        case 2698: return 23118;
        case 2700: return 23120;
        case 2725: return 24027;
        case 2763: return 24066;
        case 2971: return 28595;
        case 2827: return 25890;
        case 2828: return 25893;
        case 2829: return 25894;
        case 2830: return 25895;
        case 2833: return 25898;
        case 2834: return 25899;
        case 2835: return 25901;
        case 2891: return 27679;
        case 2896: return 27777;
        case 2898: return 27785;
        case 2899: return 27786;
        case 2912: return 28118;
        case 2913: return 28119;
        case 2914: return 28120;
        case 2916: return 28123;
        case 2943: return 28360;
        case 2945: return 28362;
        case 2946: return 28363;
        case 2969: return 28556;
        case 2970: return 28557;
        case 3054: return 30555;
        case 3055: return 30556;
        case 3056: return 30558;
        case 3057: return 30559;
        case 3060: return 30563;
        case 3065: return 30571;
        case 3075: return 30587;
        case 3077: return 30589;
        case 3079: return 30591;
        case 3080: return 30592;
        case 3103: return 30598;
        case 2948: return 22459;
        case 2947: return 22460;
        case 2693: return 23097;
        case 2760: return 23101;
        case 2707: return 23106;
        case 2710: return 23110;
        case 2695: return 23114;
        case 2696: return 23115;
        case 2753: return 24058;
        case 2735: return 24048;
        case 2727: return 24029;
        case 3087: return 30604;
        case 2743: return 24062;
        case 2742: return 24060;
        case 2744: return 24065;
        case 2734: return 24047;
        case 2758: return 24067;
        case 2741: return 24057;
        case 2738: return 24054;
        case 2737: return 24052;
        case 2733: return 24037;
        case 2754: return 24036;
        case 2731: return 24033;
        case 2728: return 24030;
        case 2726: return 24028;
        case 3088: return 30605;
        case 3082: return 30594;
        case 3061: return 30564;
        case 2736: return 24050;
        case 2732: return 24035;
        case 2729: return 24031;
        case 2756: return 24061;
        case 2761: return 24059;
        case 2740: return 24056;
        case 2739: return 24055;
        case 2730: return 24032;
        case 2831: return 25896;
        case 2765: return 24039;
        case 2764: return 24051;
        case 2832: return 25897;
        case 3045: return 30546;
        case 3046: return 30547;
        case 3047: return 30548;
        case 3048: return 30549;
        case 3049: return 30550;
        case 3050: return 30551;
        case 3051: return 30552;
        case 3052: return 30553;
        case 3053: return 30554;
        case 3058: return 30560;
        case 3062: return 30565;
        case 3063: return 30566;
        case 3064: return 30572;
        case 3066: return 30573;
        case 3067: return 30574;
        case 3068: return 30575;
        case 3069: return 30581;
        case 3070: return 30582;
        case 3071: return 30583;
        case 3072: return 30584;
        case 3073: return 30585;
        case 3074: return 30586;
        case 3076: return 30588;
        case 3078: return 30590;
        case 3081: return 30593;
        case 3083: return 30600;
        case 3084: return 30601;
        case 3085: return 30602;
        case 3086: return 30603;
        case 3089: return 30606;
        case 3090: return 30607;
        case 3091: return 30608;
        case 3099: return 31116;
        case 3100: return 31117;
        case 3101: return 31118;
        case 3197: return 32735;
        case 3113: return 31869;
        case 2759: return 24053;
        case 3202: return 32836;
        case 3117: return 32195;
        case 3138: return 32216;
        case 3126: return 32204;
        case 3124: return 32202;
        case 3118: return 32196;
        case 3145: return 32223;
        case 3104: return 31860;
        case 3105: return 31861;
        case 3106: return 31862;
        case 3107: return 31863;
        case 3108: return 31864;
        case 3109: return 31865;
        case 3111: return 31867;
        case 3112: return 31868;
        case 3115: return 32193;
        case 3116: return 32194;
        case 3119: return 32197;
        case 3120: return 32198;
        case 3122: return 32200;
        case 3123: return 32201;
        case 3125: return 32203;
        case 3127: return 32205;
        case 3128: return 32206;
        case 3129: return 32207;
        case 3130: return 32208;
        case 3131: return 32209;
        case 3132: return 32210;
        case 3133: return 32211;
        case 3134: return 32212;
        case 3135: return 32213;
        case 3136: return 32214;
        case 3137: return 32215;
        case 3140: return 32218;
        case 3141: return 32219;
        case 3142: return 32220;
        case 3144: return 32222;
        case 3146: return 32224;
        case 3147: return 32225;
        case 3148: return 32226;
        case 3154: return 32409;
        case 3155: return 32410;
        case 3156: return 32634;
        case 3157: return 32635;
        case 3158: return 32636;
        case 3159: return 32637;
        case 3160: return 32638;
        case 3161: return 32639;
        case 3162: return 32640;
        case 3163: return 32641;
        case 3201: return 32833;
        case 3139: return 32217;
        case 3143: return 32221;
        case 3206: return 33060;
        case 3208: return 33131;
        case 3209: return 33132;
        case 3210: return 33133;
        case 3211: return 33134;
        case 3212: return 33135;
        case 3214: return 33137;
        case 3215: return 33138;
        case 3216: return 33139;
        case 3217: return 33140;
        case 3218: return 33141;
        case 3219: return 33142;
        case 3220: return 33143;
        case 3221: return 33144;
        case 3226: return 33782;
        case 3261: return 34220;
        case 3262: return 34256;
        case 3287: return 35761;
        case 3286: return 35760;
        case 3285: return 35759;
        case 3284: return 35758;
        case 3280: return 35707;
        case 3275: return 35503;
        case 3274: return 35501;
        case 3283: return 35489;
        case 3282: return 35488;
        case 3281: return 35487;
        case 3268: return 34831;
        case 3271: return 35316;
        case 3270: return 35315;
        case 3272: return 35318;
        case 3318: return 37503;
        case 3335: return 38545;
        case 3336: return 38546;
        case 3337: return 38547;
        case 3338: return 38548;
        case 3339: return 38549;
        case 3340: return 38550;
        case 3242: return 34142;
        case 3254: return 34143;
        case 3264: return 34627;
        case 3292: return 36766;
        case 3293: return 36767;
        case 3317: return 37430;
        case 3321: return 38292;
        case 3333: return 38498;
        case 3334: return 38538;
        case 3371: return 39900;
        case 3374: return 39905;
        case 3375: return 39906;
        case 3376: return 39907;
        case 3377: return 39908;
        case 3378: return 39909;
        case 3379: return 39910;
        case 3380: return 39911;
        case 3381: return 39912;
        case 3382: return 39914;
        case 3383: return 39915;
        case 3384: return 39916;
        case 3385: return 39917;
        case 3386: return 39918;
        case 3387: return 39919;
        case 3388: return 39920;
        case 3389: return 39927;
        case 3390: return 39932;
        case 3391: return 39933;
        case 3392: return 39934;
        case 3393: return 39935;
        case 3394: return 39936;
        case 3395: return 39937;
        case 3396: return 39938;
        case 3397: return 39939;
        case 3398: return 39940;
        case 3399: return 39941;
        case 3400: return 39942;
        case 3401: return 39943;
        case 3402: return 39944;
        case 3403: return 39945;
        case 3404: return 39946;
        case 3405: return 39947;
        case 3411: return 39948;
        case 3407: return 39949;
        case 3408: return 39950;
        case 3409: return 39951;
        case 3410: return 39952;
        case 3406: return 39953;
        case 3412: return 39954;
        case 3413: return 39955;
        case 3414: return 39956;
        case 3415: return 39957;
        case 3416: return 39958;
        case 3417: return 39959;
        case 3422: return 39960;
        case 3423: return 39961;
        case 3424: return 39962;
        case 3426: return 39963;
        case 3418: return 39964;
        case 3419: return 39965;
        case 3420: return 39966;
        case 3421: return 39967;
        case 3427: return 39968;
        case 3428: return 39974;
        case 3429: return 39975;
        case 3430: return 39976;
        case 3431: return 39977;
        case 3432: return 39978;
        case 3433: return 39979;
        case 3434: return 39980;
        case 3435: return 39981;
        case 3436: return 39982;
        case 3437: return 39983;
        case 3438: return 39984;
        case 3439: return 39985;
        case 3440: return 39986;
        case 3441: return 39988;
        case 3442: return 39989;
        case 3443: return 39990;
        case 3444: return 39991;
        case 3445: return 39992;
        case 3446: return 39996;
        case 3447: return 39997;
        case 3448: return 39998;
        case 3449: return 39999;
        case 3450: return 40000;
        case 3451: return 40001;
        case 3452: return 40002;
        case 3453: return 40003;
        case 3454: return 40008;
        case 3455: return 40009;
        case 3456: return 40010;
        case 3457: return 40011;
        case 3458: return 40012;
        case 3459: return 40013;
        case 3460: return 40014;
        case 3461: return 40015;
        case 3462: return 40016;
        case 3463: return 40017;
        case 3464: return 40022;
        case 3465: return 40023;
        case 3474: return 40024;
        case 3466: return 40025;
        case 3472: return 40026;
        case 3473: return 40027;
        case 3476: return 40028;
        case 3467: return 40029;
        case 3475: return 40030;
        case 3468: return 40031;
        case 3469: return 40032;
        case 3470: return 40033;
        case 3471: return 40034;
        case 3477: return 40037;
        case 3478: return 40038;
        case 3479: return 40039;
        case 3480: return 40040;
        case 3481: return 40041;
        case 3482: return 40043;
        case 3483: return 40044;
        case 3484: return 40045;
        case 3485: return 40046;
        case 3486: return 40047;
        case 3487: return 40048;
        case 3488: return 40049;
        case 3489: return 40050;
        case 3490: return 40051;
        case 3491: return 40052;
        case 3492: return 40053;
        case 3493: return 40054;
        case 3494: return 40055;
        case 3495: return 40056;
        case 3496: return 40057;
        case 3497: return 40058;
        case 3498: return 40059;
        case 3499: return 40085;
        case 3500: return 40086;
        case 3501: return 40088;
        case 3502: return 40089;
        case 3503: return 40090;
        case 3504: return 40091;
        case 3505: return 40092;
        case 3510: return 40094;
        case 3506: return 40095;
        case 3511: return 40096;
        case 3515: return 40098;
        case 3507: return 40099;
        case 3512: return 40100;
        case 3516: return 40101;
        case 3508: return 40102;
        case 3513: return 40103;
        case 3509: return 40104;
        case 3514: return 40105;
        case 3517: return 40106;
        case 3518: return 40111;
        case 3519: return 40112;
        case 3520: return 40113;
        case 3521: return 40114;
        case 3522: return 40115;
        case 3523: return 40116;
        case 3525: return 40117;
        case 3524: return 40118;
        case 3532: return 40119;
        case 3533: return 40120;
        case 3534: return 40121;
        case 3535: return 40122;
        case 3526: return 40123;
        case 3527: return 40124;
        case 3528: return 40125;
        case 3529: return 40126;
        case 3530: return 40127;
        case 3531: return 40128;
        case 3536: return 40129;
        case 3537: return 40130;
        case 3544: return 40131;
        case 3538: return 40132;
        case 3545: return 40133;
        case 3546: return 40134;
        case 3548: return 40135;
        case 3539: return 40136;
        case 3547: return 40137;
        case 3540: return 40138;
        case 3541: return 40139;
        case 3543: return 40140;
        case 3542: return 40141;
        case 3549: return 40142;
        case 3550: return 40143;
        case 3551: return 40144;
        case 3552: return 40145;
        case 3553: return 40146;
        case 3554: return 40147;
        case 3555: return 40148;
        case 3556: return 40149;
        case 3557: return 40150;
        case 3558: return 40151;
        case 3559: return 40152;
        case 3560: return 40153;
        case 3561: return 40154;
        case 3563: return 40155;
        case 3564: return 40156;
        case 3565: return 40157;
        case 3566: return 40158;
        case 3567: return 40159;
        case 3568: return 40160;
        case 3569: return 40161;
        case 3570: return 40162;
        case 3571: return 40163;
        case 3572: return 40164;
        case 3573: return 40165;
        case 3574: return 40166;
        case 3575: return 40167;
        case 3576: return 40168;
        case 3577: return 40169;
        case 3578: return 40170;
        case 3579: return 40171;
        case 3580: return 40172;
        case 3581: return 40173;
        case 3582: return 40174;
        case 3583: return 40175;
        case 3584: return 40176;
        case 3585: return 40177;
        case 3586: return 40178;
        case 3587: return 40179;
        case 3588: return 40180;
        case 3589: return 40181;
        case 3590: return 40182;
        case 3591: return 40232;
        case 3621: return 41285;
        case 3622: return 41307;
        case 3623: return 41333;
        case 3624: return 41335;
        case 3625: return 41339;
        case 3632: return 41375;
        case 3633: return 41376;
        case 3634: return 41377;
        case 3635: return 41378;
        case 3636: return 41379;
        case 3637: return 41380;
        case 3638: return 41381;
        case 3639: return 41382;
        case 3640: return 41385;
        case 3641: return 41389;
        case 3626: return 41395;
        case 3631: return 41396;
        case 3642: return 41397;
        case 3628: return 41398;
        case 3643: return 41400;
        case 3627: return 41401;
        case 3767: return 41429;
        case 3649: return 41432;
        case 3651: return 41433;
        case 3644: return 41434;
        case 3648: return 41435;
        case 3652: return 41436;
        case 3647: return 41437;
        case 3650: return 41438;
        case 3646: return 41439;
        case 3654: return 41440;
        case 3655: return 41441;
        case 3653: return 41442;
        case 3656: return 41443;
        case 3661: return 41444;
        case 3662: return 41445;
        case 3659: return 41446;
        case 3660: return 41447;
        case 3657: return 41448;
        case 3658: return 41449;
        case 3664: return 41450;
        case 3670: return 41451;
        case 3675: return 41452;
        case 3669: return 41453;
        case 3663: return 41454;
        case 3674: return 41455;
        case 3665: return 41456;
        case 3673: return 41457;
        case 3668: return 41458;
        case 3672: return 41459;
        case 3667: return 41460;
        case 3671: return 41461;
        case 3666: return 41462;
        case 3711: return 41463;
        case 3700: return 41464;
        case 3714: return 41465;
        case 3702: return 41466;
        case 3701: return 41467;
        case 3699: return 41468;
        case 3712: return 41469;
        case 3698: return 41470;
        case 3713: return 41471;
        case 3709: return 41472;
        case 3705: return 41473;
        case 3716: return 41474;
        case 3703: return 41475;
        case 3708: return 41476;
        case 3710: return 41477;
        case 3715: return 41478;
        case 3706: return 41479;
        case 3707: return 41480;
        case 3704: return 41481;
        case 3696: return 41482;
        case 3683: return 41483;
        case 3686: return 41484;
        case 3677: return 41485;
        case 3692: return 41486;
        case 3680: return 41487;
        case 3682: return 41488;
        case 3685: return 41489;
        case 3695: return 41490;
        case 3687: return 41491;
        case 3681: return 41492;
        case 3688: return 41493;
        case 3689: return 41494;
        case 3690: return 41495;
        case 3679: return 41496;
        case 3693: return 41497;
        case 3697: return 41498;
        case 3684: return 41499;
        case 3694: return 41500;
        case 3678: return 41501;
        case 3691: return 41502;
        case 3732: return 42142;
        case 3733: return 42143;
        case 3734: return 42144;
        case 3735: return 42145;
        case 3736: return 42146;
        case 3737: return 42148;
        case 3738: return 42149;
        case 3739: return 42150;
        case 3740: return 42151;
        case 3741: return 42152;
        case 3745: return 42153;
        case 3746: return 42154;
        case 3747: return 42155;
        case 3742: return 42156;
        case 3743: return 42157;
        case 3744: return 42158;
        case 3749: return 42701;
        case 3750: return 42702;
        case 3792: return 44066;
        case 3798: return 44076;
        case 3799: return 44078;
        case 3801: return 44081;
        case 3800: return 44082;
        case 3802: return 44084;
        case 3803: return 44087;
        case 3804: return 44088;
        case 3805: return 44089;
        case 3861: return 45862;
        case 3862: return 45879;
        case 3863: return 45880;
        case 3864: return 45881;
        case 3865: return 45882;
        case 3866: return 45883;
        case 3867: return 45987;
        case 3879: return 49110;
        default: return -1;
    }
}

function GetSpellIDForSkill($SkillID, $max) {
    switch ($SkillID) {
        case 43: return 201;
        case 44: return 196;
        case 45: return 264;
        case 46: return 266;
        case 54: return 198;
        case 55: return 202;
        case 118: return 674;
        case 95: return 204;
        case 226: return 5011;
        case 228: return 5009;
        case 229: return 200;
        case 293: return 750;
        case 413: return 8737;
        case 414: return 9077;
        case 415: return 9078;
        case 433: return 9116;
        case 473: return 15590;
        case 633: return 1804;
        case 172: return 197;
        case 173: return 1180;
        case 176: return 2567;
        case 136: return 227;
        case 160: return 199;
        case 162: return 203;
        case 776: return 53428;
        case 129: // First Aid
            switch ($max) {
                case 75: return 3273;
                case 150: return 3274;
                case 225: return 7924;
                case 300: return 10846;
                case 375: return 27028;
                case 450: return 45542;
            }
            break;
        case 164: // Blacksmithing
            switch ($max) {
                case 75: return 2018;
                case 150: return 3100;
                case 225: return 3538;
                case 300: return 9785;
                case 375: return 29844;
                case 450: return 51300;
            }
            break;
        case 165: // Leatherworking
            switch ($max) {
                case 75: return 2108;
                case 150: return 3104;
                case 225: return 3811;
                case 300: return 10662;
                case 375: return 32549;
                case 450: return 51302;
            }
            break;
        case 171: // Alchemy
            switch ($max) {
                case 75: return 2259;
                case 150: return 3101;
                case 225: return 3464;
                case 300: return 11611;
                case 375: return 28596;
                case 450: return 51304;
            }
            break;
        case 182: // Herbalism
            switch ($max) {
                case 75: return 2366;
                case 150: return 2368;
                case 225: return 3570;
                case 300: return 11993;
                case 375: return 28695;
                case 450: return 50300;
            }
            break;
        case 185: // Cooking
            switch ($max) {
                case 75: return 2550;
                case 150: return 3102;
                case 225: return 3413;
                case 300: return 18260;
                case 375: return 33359;
                case 450: return 51296;
            }
            break;
        case 186: // Mining
            switch ($max) {
                case 75: return 2575;
                case 150: return 2576;
                case 225: return 3564;
                case 300: return 10248;
                case 375: return 29354;
                case 450: return 50310;
            }
            break;
        case 197: // Tailoring
            switch ($max) {
                case 75: return 3908;
                case 150: return 3909;
                case 225: return 3910;
                case 300: return 12180;
                case 375: return 26790;
                case 450: return 51309;
            }
            break;
        case 202: // Engineering
            switch ($max) {
                case 75: return 4036;
                case 150: return 4037;
                case 225: return 4038;
                case 300: return 12656;
                case 375: return 30350;
                case 450: return 51306;
            }
            break;
        case 333: // Enchanting
            switch ($max) {
                case 75: return 7411;
                case 150: return 7412;
                case 225: return 7413;
                case 300: return 13920;
                case 375: return 28029;
                case 450: return 51313;
            }
            break;
        case 356: // Finishing
            switch ($max) {
                case 75: return 7620;
                case 150: return 7731;
                case 225: return 7732;
                case 300: return 18248;
                case 375: return 33095;
                case 450: return 51294;
            }
            break;
        case 393: // Skinning
            switch ($max) {
                case 75: return 8613;
                case 150: return 8617;
                case 225: return 8618;
                case 300: return 10768;
                case 375: return 32678;
                case 450: return 50305;
            }
            break;
        case 755: // Jewelcrafting
            switch ($max) {
                case 75: return 25229;
                case 150: return 25230;
                case 225: return 28894;
                case 300: return 28895;
                case 375: return 28897;
                case 450: return 51311;
            }
            break;
        case 773:  // Inscription
            switch ($max) {
                case 75: return 45357;
                case 150: return 45358;
                case 225: return 45359;
                case 300: return 45360;
                case 375: return 45361;
                case 450: return 45363;
            }
            break;
        default:
            return -1;
    }
}

function GetFactionID($faction, $locale) {
    switch ($locale) {
        case "FRFR": {
                switch ($faction) {
                    case "BAIE-DU-BUTIN": return 21;
                    case "FORGEFER": return 47;
                    case "EXILÉS DE GNOMEREGAN": return 54;
                    case "CONFRÉRIE DU THORIUM": return 59;
                    case "FOSSOYEUSE": return 68;
                    case "DARNASSUS": return 69;
                    case "SYNDICAT": return 70;
                    case "HURLEVENT": return 72;
                    case "ORGRIMMAR": return 76;
                    case "LES PITONS DU TONNERRE": return 81;
                    case "LA VOILE SANGLANTE": return 87;
                    case "CENTAURES (GELKIS)": return 92;
                    case "CENTAURES (MAGRAM)": return 93;
                    case "TRIBU ZANDALAR": return 270;
                    case "RAVENHOLDT": return 349;
                    case "GADGETZAN": return 369;
                    case "CABESTAN": return 470;
                    case "LA LIGUE D'ARATHOR": return 509;
                    case "LES PROFANATEURS": return 510;
                    case "AUBE D'ARGENT": return 529;
                    case "LES GRUMEGUEULES": return 576;
                    case "LONG-GUET": return 577;
                    case "ÉLEVEURS DE SABRES-D'HIVER": return 589;
                    case "CERCLE CÉNARIEN": return 609;
                    case "CLAN LOUP-DE-GIVRE": return 729;
                    case "GARDE FOUDREPIQUE": return 730;
                    case "LES HYDRAXIENS": return 749;
                    case "SHEN'DRALAR": return 809;
                    case "SENTINELLES D'AILE-ARGENT": return 890;
                    case "FOIRE DE SOMBRELUNE": return 909;
                    case "PROGÉNITURE DE NOZDORMU": return 910;
                    case "LUNE-D'ARGENT": return 911;
                    case "TRANQUILLIEN": return 922;
                    case "EXODAR": return 930;
                    case "L'ALDOR": return 932;
                    case "LE CONSORTIUM": return 933;
                    case "LES CLAIRVOYANTS": return 934;
                    case "LES SHA'TAR": return 935;
                    case "SHATTRATH": return 936;
                    case "MAG'HAR": return 941;
                    case "EXPÉDITION CÉNARIENNE": return 942;
                    case "BASTION DE L'HONNEUR": return 946;
                    case "THRALLMAR": return 947;
                    case "L'ŒIL POURPRE": return 967;
                    case "SPOREGGAR": return 970;
                    case "KURENAÏ": return 978;
                    case "GARDIENS DU TEMPS": return 989;
                    case "LA BALANCE DES SABLES": return 990;
                    case "VILLE BASSE": return 1011;
                    case "LIGEMORT CENDRELANGUE": return 1012;
                    case "AILE-DU-NÉANT": return 1015;
                    case "GARDE-CIEL SHA'TARI": return 1031;
                    case "AVANT-GARDE DE L'ALLIANCE": return 1037;
                    case "OGRI'LA": return 1038;
                    case "EXPÉDITION DE LA BRAVOURE": return 1050;
                    case "EXPÉDITION DE LA HORDE": return 1052;
                    case "LES TAUNKAS": return 1064;
                    case "LA MAIN DE LA VENGEANCE": return 1067;
                    case "LIGUE DES EXPLORATEURS": return 1068;
                    case "LES KALU'AKS": return 1073;
                    case "OPÉRATION SOLEIL BRISÉ": return 1077;
                    case "OFFENSIVE CHANTEGUERRE": return 1085;
                    case "KIRIN TOR": return 1090;
                    case "L'ACCORD DU REPOS DU VER": return 1091;
                    case "LE CONCORDAT ARGENTÉ": return 1094;
                    case "CHEVALIERS DE LA LAME D'ÉBÈNE": return 1098;
                    case "TRIBU FRÉNÉCŒUR": return 1104;
                    case "LES ORACLES": return 1105;
                    case "LA CROISADE D'ARGENT": return 1106;
                    case "LES FILS DE HODIR": return 1119;
                    case "LES SACCAGE-SOLEIL": return 1124;
                    case "LES GIVRE-NÉS": return 1126;
                    case "HAIT TOUT ET TOUT LE MONDE": return 1145;
                    case "LE VERDICT DES CENDRES": return 1156;
                    default: return -1;
                }
            }
        case "DEDE": {
                switch ($faction) {
                    case "BEUTEBUCHT": return 21;
                    case "EISENSCHMIEDE": return 47;
                    case "GNOMEREGANGNOME": return 54;
                    case "THORIUMBRUDERSCHAFT": return 59;
                    case "UNTERSTADT": return 68;
                    case "DARNASSUS": return 69;
                    case "SYNDIKAT": return 70;
                    case "STURMWIND": return 72;
                    case "ORGRIMMAR": return 76;
                    case "DONNERFELS": return 81;
                    case "BLUTSEGELBUKANIERE": return 87;
                    case "GELKISKLAN": return 92;
                    case "MAGRAMKLAN": return 93;
                    case "STAMM DER ZANDALARI": return 270;
                    case "RABENHOLDT": return 349;
                    case "GADGETZAN": return 369;
                    case "RATSCHET": return 470;
                    case "DER BUND VON ARATHOR": return 509;
                    case "DIE ENTWEIHTEN": return 510;
                    case "ARGENTUMDÄMMERUNG": return 529;
                    case "HOLZSCHLUNDFESTE": return 576;
                    case "EWIGE WARTE": return 577;
                    case "WINTERSÄBLERAUSBILDER": return 589;
                    case "ZIRKEL DES CENARIUS": return 609;
                    case "FROSTWOLFKLAN": return 729;
                    case "STURMLANZENGARDE": return 730;
                    case "HYDRAXIANER": return 749;
                    case "SHEN'DRALAR": return 809;
                    case "SILBERSCHWINGEN": return 890;
                    case "DUNKELMOND-JAHRMARKT": return 909;
                    case "BRUT NOZDORMUS": return 910;
                    case "SILBERMOND": return 911;
                    case "TRISTESSA": return 922;
                    case "DIE EXODAR": return 930;
                    case "DIE ALDOR": return 932;
                    case "DAS KONSORTIUM": return 933;
                    case "DIE SEHER": return 934;
                    case "DIE SHA'TAR": return 935;
                    case "SHATTRATH": return 936;
                    case "DIE MAG'HAR": return 941;
                    case "EXPEDITION DES CENARIUS": return 942;
                    case "EHRENFESTE": return 946;
                    case "THRALLMAR": return 947;
                    case "DAS VIOLETTE AUGE": return 967;
                    case "SPOREGGAR": return 970;
                    case "KURENAI": return 978;
                    case "HÜTER DER ZEIT": return 989;
                    case "DIE WÄCHTER DER SANDE": return 990;
                    case "UNTERES VIERTEL": return 1011;
                    case "DIE TODESHÖRIGEN": return 1012;
                    case "NETHERSCHWINGEN": return 1015;
                    case "HIMMELSWACHE DER SHA'TARI": return 1031;
                    case "VORPOSTEN DER ALLIANZ": return 1037;
                    case "OGRI'LA": return 1038;
                    case "EXPEDITION VALIANZ": return 1050;
                    case "EXPEDITION DER HORDE": return 1052;
                    case "DIE TAUNKA": return 1064;
                    case "DIE HAND DER RACHE": return 1067;
                    case "FORSCHERLIGA": return 1068;
                    case "DIE KALU'AK": return 1073;
                    case "OFFENSIVE DER ZERSCHMETTERTEN SONNE": return 1077;
                    case "KRIEGSHYMNENOFFENSIVE": return 1085;
                    case "KIRIN TOR": return 1090;
                    case "DER WYRMRUHPAKT": return 1091;
                    case "DER SILBERBUND": return 1094;
                    case "RITTER DER SCHWARZEN KLINGE": return 1098;
                    case "STAMM DER WILDHERZEN": return 1104;
                    case "DIE ORAKEL": return 1105;
                    case "ARGENTUMKREUZZUG": return 1106;
                    case "DIE SÖHNE HODIRS": return 1119;
                    case "DIE SONNENHÄSCHER": return 1124;
                    case "DIE FROSTERBEN": return 1126;
                    case "HASST ALLES": return 1145;
                    case "DAS ÄSCHERNE VERDIKT": return 1156;
                    default: return -1;
                }
            }
        case "ESES": {
                switch ($faction) {
                    case "BAHÍA DEL BOTÍN": return 21;
                    case "FORJAZ": return 47;
                    case "EXILIADOS DE GNOMEREGAN": return 54;
                    case "HERMANDAD DEL TORIO": return 59;
                    case "ENTRAÑAS": return 68;
                    case "DARNASSUS": return 69;
                    case "LA HERMANDAD": return 70;
                    case "VENTORMENTA": return 72;
                    case "ORGRIMMAR": return 76;
                    case "CIMA DEL TRUENO": return 81;
                    case "BUCANEROS VELASANGRE": return 87;
                    case "CENTAUROS DEL CLAN GELKIS": return 92;
                    case "CENTAUROS DEL CLAN MAGRAM": return 93;
                    case "TRIBU ZANDALAR": return 270;
                    case "RAVENHOLDT": return 349;
                    case "TRINQUETE": return 470;
                    case "LIGA DE ARATHOR": return 509;
                    case "LOS RAPIÑADORES": return 510;
                    case "EL ALBA ARGENTA": return 529;
                    case "TROLS LANZA NEGRA": return 530;
                    case "BASTIÓN FAUCES DE MADERA": return 576;
                    case "VISTA ETERNA": return 577;
                    case "INSTRUCTORES DE SABLEINVERNALES": return 589;
                    case "CÍRCULO CENARION": return 609;
                    case "CLAN LOBO GÉLIDO": return 729;
                    case "GUARDIA PICO TORMENTA": return 730;
                    case "SRS. DEL AGUA DE HYDRAXIS": return 749;
                    case "SEÑORES DEL FUEGO DE SULFURON": return 750;
                    case "SHEN'DRALAR": return 809;
                    case "CENTINELAS ALA DE PLATA": return 890;
                    case "FERIA DE LA LUNA NEGRA": return 909;
                    case "LINAJE DE NOZDORMU": return 910;
                    case "CIUDAD DE LUNARGENTA": return 911;
                    case "TRANQUILLIEN": return 922;
                    case "EL EXODAR": return 930;
                    case "LOS ALDOR": return 932;
                    case "EL CONSORCIO": return 933;
                    case "LOS ARÚSPICES": return 934;
                    case "LOS SHA'TAR": return 935;
                    case "CIUDAD DE SHATTRATH": return 936;
                    case "LOS MAG'HAR": return 941;
                    case "EXPEDICIÓN CENARION": return 942;
                    case "BASTIÓN DEL HONOR": return 946;
                    case "THRALLMAR": return 947;
                    case "EL OJO VIOLETA": return 967;
                    case "ESPORAGGAR": return 970;
                    case "KURENAI": return 978;
                    case "VIGILANTES DEL TIEMPO": return 989;
                    case "LA ESCAMA DE LAS ARENAS": return 990;
                    case "BAJO ARRABAL": return 1011;
                    case "JURAMORTE LENGUA DE CENIZA": return 1012;
                    case "ALA ABISAL": return 1015;
                    case "GUARDIA DEL CIELO SHA'TARI": return 1031;
                    case "VANGUARDIA DE LA ALIANZA": return 1037;
                    case "OGRI'LA": return 1038;
                    case "EXPEDICIÓN DE DENUEDO": return 1050;
                    case "EXPEDICIÓN DE LA HORDA": return 1052;
                    case "LOS TAUNKA": return 1064;
                    case "LA MANO DE LA VENGANZA": return 1067;
                    case "LIGA DE EXPEDICIONARIOS": return 1068;
                    case "LOS KALU'AK": return 1073;
                    case "OFENSIVA SOL DEVASTADO": return 1077;
                    case "OFENSIVA GRITO DE GUERRA": return 1085;
                    case "KIRIN TOR": return 1090;
                    case "EL ACUERDO DEL REPOSO DEL DRAGÓN": return 1091;
                    case "EL PACTO DE PLATA": return 1094;
                    case "CABALLEROS DE LA ESPADA DE ÉBANO": return 1098;
                    case "TRIBU CORAZÓN FRENÉTICO": return 1104;
                    case "LOS ORÁCULOS": return 1105;
                    case "CRUZADA ARGENTA": return 1106;
                    case "LOS HIJOS DE HODIR": return 1119;
                    case "LOS ATRACASOL": return 1124;
                    case "LOS NATOESCARCHA": return 1126;
                    case "ODIA TODO": return 1145;
                    case "EL VEREDICTO CINÉREO": return 1156;
                    default: return -1;
                }
            }
        case "RURU": {
                switch ($faction) {
                    case "ПИРАТСКАЯ БУХТА": return 21;
                    case "СТАЛЬГОРН": return 47;
                    case "ИЗГНАННИКИ ГНОМРЕГАНА": return 54;
                    case "БРАТСТВО ТОРИЯ": return 59;
                    case "ПОДГОРОД": return 68;
                    case "ДАРНАС": return 69;
                    case "СИНДИКАТ": return 70;
                    case "ШТОРМГРАД": return 72;
                    case "ОРГРИММАР": return 76;
                    case "ГРОМОВОЙ УТЕС": return 81;
                    case "ПИРАТЫ КРОВАВОГО ПАРУСА": return 87;
                    case "КЕНТАВРЫ ИЗ ПЛЕМЕНИ ГЕЛКИС": return 92;
                    case "КЕНТАВРЫ ИЗ ПЛЕМЕНИ МАГРАМ": return 93;
                    case "ПЛЕМЯ ЗАНДАЛАР": return 270;
                    case "ЧЕРНЫЙ ВОРОН": return 349;
                    case "ПРИБАМБАССК": return 369;
                    case "КАБЕСТАН": return 470;
                    case "ЛИГА АРАТОРА": return 509;
                    case "ОСКВЕРНИТЕЛИ": return 510;
                    case "СЕРЕБРЯНЫЙ РАССВЕТ": return 529;
                    case "ТРОЛЛИ ЧЕРНОГО КОПЬЯ": return 530;
                    case "ДРЕВОБРЮХИ": return 576;
                    case "КРУГОВЗОР": return 577;
                    case "УКРОТИТЕЛИ ЛЕДОПАРДОВ": return 589;
                    case "КРУГ КЕНАРИЯ": return 609;
                    case "КЛАН СЕВЕРНОГО ВОЛКА": return 729;
                    case "СТРАЖА ГРОЗОВОЙ ВЕРШИНЫ": return 730;
                    case "ГИДРАКСИАНСКИЕ ПОВЕЛИТЕЛИ ВОД": return 749;
                    case "ШЕН'ДРАЛАР": return 809;
                    case "СРЕБРОКРЫЛЫЕ ЧАСОВЫЕ": return 890;
                    case "ЯРМАРКА НОВОЛУНИЯ": return 909;
                    case "РОД НОЗДОРМУ": return 910;
                    case "ЛУНОСВЕТ": return 911;
                    case "ТРАНКВИЛЛИОН": return 922;
                    case "ЭКЗОДАР": return 930;
                    case "АЛДОРЫ": return 932;
                    case "КОНСОРЦИУМ": return 933;
                    case "ПРОВИДЦЫ": return 934;
                    case "ША'ТАР": return 935;
                    case "ГОРОД ШАТТРАТ": return 936;
                    case "МАГ'ХАРЫ": return 941;
                    case "КЕНАРИЙСКАЯ ЭКСПЕДИЦИЯ": return 942;
                    case "ОПЛОТ ЧЕСТИ": return 946;
                    case "ТРАЛЛМАР": return 947;
                    case "АМЕТИСТОВОЕ ОКО": return 967;
                    case "СПОРЕГГАР": return 970;
                    case "КУРЕНАЙ": return 978;
                    case "ХРАНИТЕЛИ ВРЕМЕНИ": return 989;
                    case "ПЕСЧАНАЯ ЧЕШУЯ": return 990;
                    case "НИЖНИЙ ГОРОД": return 1011;
                    case "ПЕПЛОУСТЫ-СЛУЖИТЕЛИ": return 1012;
                    case "КРЫЛЬЯ ПУСТОТЫ": return 1015;
                    case "СТРАЖИ НЕБЕС ША'ТАР": return 1031;
                    case "АВАНГАРД АЛЬЯНСА": return 1037;
                    case "ОГРИ'ЛА": return 1038;
                    case "ЭКСПЕДИЦИЯ ОТВАЖНЫХ": return 1050;
                    case "ЭКСПЕДИЦИЯ ОРДЫ": return 1052;
                    case "ТАУНКА": return 1064;
                    case "КАРАЮЩАЯ ДЛАНЬ": return 1067;
                    case "ЛИГА ИССЛЕДОВАТЕЛЕЙ": return 1068;
                    case "КАЛУ'АК": return 1073;
                    case "АРМИЯ РАСКОЛОТОГО СОЛНЦА": return 1077;
                    case "АРМИЯ ПЕСНИ ВОЙНЫ": return 1085;
                    case "КИРИН-ТОР": return 1090;
                    case "ДРАКОНИЙ СОЮЗ": return 1091;
                    case "СЕРЕБРЯНЫЙ СОЮЗ": return 1094;
                    case "РЫЦАРИ ЧЕРНОГО КЛИНКА": return 1098;
                    case "ПЛЕМЯ БЕШЕНОГО СЕРДЦА": return 1104;
                    case "ОРАКУЛЫ": return 1105;
                    case "СЕРЕБРЯНЫЙ АВАНГАРД": return 1106;
                    case "СЫНЫ ХОДИРА": return 1119;
                    case "ПОХИТИТЕЛИ СОЛНЦА": return 1124;
                    case "ЗИМОРОЖДЕННЫЕ": return 1126;
                    case "НЕНАВИДИТ ВСЕ": return 1145;
                    case "ПЕПЕЛЬНЫЙ СОЮЗ": return 1156;
                    default: return -1;
                }
            }
        case "ENUS":
        case "ENGB":
            switch ($faction) {
                case "BOOTY BAY": return 21;
                case "IRONFORGE": return 47;
                case "GNOMEREGAN EXILES": return 54;
                case "THORIUM BROTHERHOOD": return 59;
                case "UNDERCITY": return 68;
                case "DARNASSUS": return 69;
                case "SYNDICATE": return 70;
                case "STORMWIND": return 72;
                case "ORGRIMMAR": return 76;
                case "THUNDER BLUFF": return 81;
                case "BLOODSAIL BUCCANEERS": return 87;
                case "GELKIS CLAN CENTAUR": return 92;
                case "MAGRAM CLAN CENTAUR": return 93;
                case "ZANDALAR TRIBE": return 270;
                case "RAVENHOLDT": return 349;
                case "GADGETZAN": return 369;
                case "RATCHET": return 470;
                case "THE LEAGUE OF ARATHOR": return 509;
                case "THE DEFILERS": return 510;
                case "ARGENT DAWN": return 529;
                case "DARKSPEAR TROLLS": return 530;
                case "TIMBERMAW HOLD": return 576;
                case "WINTERSABER TRAINERS": return 589;
                case "CENARION CIRCLE": return 609;
                case "FROSTWOLF CLAN": return 729;
                case "STORMPIKE GUARD": return 730;
                case "HYDRAXIAN WATERLORDS": return 749;
                case "SHEN'DRALAR": return 809;
                case "SILVERWING SENTINELS": return 890;
                case "DARKMOON FAIRE": return 909;
                case "BROOD OF NOZDORMU": return 910;
                case "SILVERMOON CITY": return 911;
                case "TRANQUILLIEN": return 922;
                case "EXODAR": return 930;
                case "THE ALDOR": return 932;
                case "THE CONSORTIUM": return 933;
                case "THE SCRYERS": return 934;
                case "THE SHA'TAR": return 935;
                case "SHATTRATH CITY": return 936;
                case "THE MAG'HAR": return 941;
                case "CENARION EXPEDITION": return 942;
                case "THE VIOLET EYE": return 967;
                case "SPOREGGAR": return 970;
                case "KURENAI": return 978;
                case "KEEPERS OF TIME": return 989;
                case "THE SCALE OF THE SANDS": return 990;
                case "LOWER CITY": return 1011;
                case "ASHTONGUE DEATHSWORN": return 1012;
                case "NETHERWING": return 1015;
                case "SHA'TARI SKYGUARD": return 1031;
                case "ALLIANCE VANGUARD": return 1037;
                case "OGRI'LA": return 1038;
                case "VALIANCE EXPEDITION": return 1050;
                case "HORDE EXPEDITION": return 1052;
                case "THE TAUNKA": return 1064;
                case "THE HAND OF VENGEANCE": return 1067;
                case "EXPLORERS' LEAGUE": return 1068;
                case "THE KALU'AK": return 1073;
                case "SHATTERED SUN OFFENSIVE": return 1077;
                case "WARSONG OFFENSIVE": return 1085;
                case "KIRIN TOR": return 1090;
                case "THE WYRMREST ACCORD": return 1091;
                case "THE SILVER COVENANT": return 1094;
                case "KNIGHTS OF THE EBON BLADE": return 1098;
                case "FRENZYHEART TRIBE": return 1104;
                case "THE ORACLES": return 1105;
                case "ARGENT CRUSADE": return 1106;
                case "THE SONS OF HODIR": return 1119;
                case "THE SUNREAVERS": return 1124;
                case "THE FROSTBORN": return 1126;
                case "HATES EVERYTHING": return 1145;
                case "THE ASHEN VERDICT": return 1156;
                default: return -1;
            }
    }
}

function _isClassSpellValid($SpellID, $ClassID) {
    switch ($ClassID) {
        case 1: { // Warrior
                switch ($SpellID) {
                    case 768:
                    case 770:
                    case 783:
                    case 1066:
                    case 2782:
                    case 2893:
                    case 5209:
                    case 5215:
                    case 5225:
                    case 5229:
                    case 6795:
                    case 8983:
                    case 16081:
                    case 16835:
                    case 16857:
                    case 16860:
                    case 16864:
                    case 16931:
                    case 16935:
                    case 16941:
                    case 16944:
                    case 16949:
                    case 16975:
                    case 16979:
                    case 17007:
                    case 17051:
                    case 17061:
                    case 17070:
                    case 18658:
                    case 18990:
                    case 20719:
                    case 22812:
                    case 22842:
                    case 24242:
                    case 24866:
                    case 24894:
                    case 25953:
                    case 26054:
                    case 26055:
                    case 26056:
                    case 26995:
                    case 27004:
                    case 27006:
                    case 29166:
                    case 33357:
                    case 33786:
                    case 33867:
                    case 33873:
                    case 33878:
                    case 33917:
                    case 33943:
                    case 33957:
                    case 33982:
                    case 34300:
                    case 48378:
                    case 48412:
                    case 48441:
                    case 48443:
                    case 48447:
                    case 48451:
                    case 48461:
                    case 48463:
                    case 48465:
                    case 48467:
                    case 48469:
                    case 48470:
                    case 48477:
                    case 48479:
                    case 48491:
                    case 48495:
                    case 48559:
                    case 48561:
                    case 48567:
                    case 48570:
                    case 48571:
                    case 48573:
                    case 48576:
                    case 48578:
                    case 49376:
                    case 49377:
                    case 49799:
                    case 49802:
                    case 50212:
                    case 50334:
                    case 50464:
                    case 50763:
                    case 51269:
                    case 51412:
                    case 52610:
                    case 53307:
                    case 53308:
                    case 53312:
                    case 54753:
                    case 57881:
                    case 60119:
                    case 61336:
                    case 61467:
                    case 62078:
                    case 62600:
                    case 63503:
                    case 71:
                    case 72:
                    case 197:
                    case 200:
                    case 201:
                    case 202:
                    case 227:
                    case 264:
                    case 266:
                    case 355:
                    case 674:
                    case 676:
                    case 694:
                    case 750:
                    case 871:
                    case 1161:
                    case 1180:
                    case 1680:
                    case 1715:
                    case 1719:
                    case 2458:
                    case 2565:
                    case 2567:
                    case 2687:
                    case 3127:
                    case 3411:
                    case 5011:
                    case 5246:
                    case 6552:
                    case 7384:
                    case 7386:
                    case 7420:
                    case 7426:
                    case 7454:
                    case 7457:
                    case 7745:
                    case 7748:
                    case 7771:
                    case 7779:
                    case 7788:
                    case 7795:
                    case 7857:
                    case 7861:
                    case 7863:
                    case 11578:
                    case 12292:
                    case 12658:
                    case 12664:
                    case 12666:
                    case 12678:
                    case 12727:
                    case 12753:
                    case 12764:
                    case 12803:
                    case 12809:
                    case 12818:
                    case 12835:
                    case 12856:
                    case 12861:
                    case 12958:
                    case 12960:
                    case 12974:
                    case 12975:
                    case 13002:
                    case 13048:
                    case 13378:
                    case 13421:
                    case 13485:
                    case 13501:
                    case 13503:
                    case 13529:
                    case 13538:
                    case 13607:
                    case 13622:
                    case 13626:
                    case 13628:
                    case 13631:
                    case 13635:
                    case 13637:
                    case 13640:
                    case 13642:
                    case 13644:
                    case 13648:
                    case 13657:
                    case 13659:
                    case 13661:
                    case 13663:
                    case 13693:
                    case 13695:
                    case 13700:
                    case 13702:
                    case 13746:
                    case 13794:
                    case 13815:
                    case 13822:
                    case 13836:
                    case 13858:
                    case 13887:
                    case 13890:
                    case 13905:
                    case 13917:
                    case 13935:
                    case 13937:
                    case 13939:
                    case 13941:
                    case 13943:
                    case 13948:
                    case 14293:
                    case 14807:
                    case 14809:
                    case 14810:
                    case 15590:
                    case 16463:
                    case 16492:
                    case 16542:
                    case 17180:
                    case 17181:
                    case 18499:
                    case 20008:
                    case 20012:
                    case 20013:
                    case 20014:
                    case 20016:
                    case 20023:
                    case 20028:
                    case 20230:
                    case 20252:
                    case 23588:
                    case 23881:
                    case 23920:
                    case 27899:
                    case 27905:
                    case 27944:
                    case 27947:
                    case 27957:
                    case 27958:
                    case 27961:
                    case 28027:
                    case 28028:
                    case 29144:
                    case 29592:
                    case 29594:
                    case 29599:
                    case 29763:
                    case 29792:
                    case 29801:
                    case 29889:
                    case 32664:
                    case 32667:
                    case 33990:
                    case 33991:
                    case 33993:
                    case 33995:
                    case 33996:
                    case 34001:
                    case 34002:
                    case 34004:
                    case 34090:
                    case 34428:
                    case 42613:
                    case 42615:
                    case 44383:
                    case 44484:
                    case 44488:
                    case 44489:
                    case 44492:
                    case 44500:
                    case 44506:
                    case 44508:
                    case 44509:
                    case 44510:
                    case 44513:
                    case 44528:
                    case 44529:
                    case 44555:
                    case 44582:
                    case 44584:
                    case 44589:
                    case 44592:
                    case 44593:
                    case 44598:
                    case 44616:
                    case 44623:
                    case 44629:
                    case 44630:
                    case 44633:
                    case 44635:
                    case 44636:
                    case 44645:
                    case 46917:
                    case 46949:
                    case 46953:
                    case 46968:
                    case 47296:
                    case 47436:
                    case 47437:
                    case 47440:
                    case 47450:
                    case 47465:
                    case 47471:
                    case 47475:
                    case 47488:
                    case 47498:
                    case 47502:
                    case 47520:
                    case 47766:
                    case 47900:
                    case 50720:
                    case 51313:
                    case 54197:
                    case 55531:
                    case 55694:
                    case 56924:
                    case 56932:
                    case 57499:
                    case 57755:
                    case 57823:
                    case 58874:
                    case 59089:
                    case 59636:
                    case 60606:
                    case 60609:
                    case 60616:
                    case 60619:
                    case 60621:
                    case 60623:
                    case 60653:
                    case 60663:
                    case 60668:
                    case 60767:
                    case 60970:
                    case 61222:
                    case 62959:
                    case 63644:
                    case 63645:
                    case 63746:
                    case 64382:
                        return true;
                    default:
                        return false;
                }
            }
        case 2: { // Paladin
                switch ($SpellID) {
                    case 196:
                    case 197:
                    case 200:
                    case 201:
                    case 202:
                    case 498:
                    case 642:
                    case 750:
                    case 1038:
                    case 1044:
                    case 1152:
                    case 3127:
                    case 4987:
                    case 5502:
                    case 6940:
                    case 10278:
                    case 10308:
                    case 10326:
                    case 13819:
                    case 19746:
                    case 19752:
                    case 20045:
                    case 20057:
                    case 20100:
                    case 20105:
                    case 20113:
                    case 20121:
                    case 20146:
                    case 20164:
                    case 20165:
                    case 20166:
                    case 20217:
                    case 20266:
                    case 20271:
                    case 20332:
                    case 20337:
                    case 20375:
                    case 23214:
                    case 25780:
                    case 25898:
                    case 25957:
                    case 26016:
                    case 31789:
                    case 31801:
                    case 31868:
                    case 31872:
                    case 31878:
                    case 31884:
                    case 32223:
                    case 34091:
                    case 35395:
                    case 35397:
                    case 48782:
                    case 48785:
                    case 48788:
                    case 48801:
                    case 48806:
                    case 48817:
                    case 48819:
                    case 48932:
                    case 48934:
                    case 48936:
                    case 48938:
                    case 48942:
                    case 48943:
                    case 48945:
                    case 48947:
                    case 48950:
                    case 53376:
                    case 53382:
                    case 53385:
                    case 53407:
                    case 53408:
                    case 53488:
                    case 53503:
                    case 53601:
                    case 53648:
                    case 54043:
                    case 54197:
                    case 54428:
                    case 59571:
                    case 61411:
                    case 62124:
                    case 34767:
                    case 34769:
                    case 53736:
                        return true;
                    default:
                        return false;
                }
            }
        case 3: { // Hunter
                switch ($SpellID) {
                    case 674:
                    case 781:
                    case 883:
                    case 982:
                    case 1002:
                    case 1462:
                    case 1494:
                    case 1515:
                    case 1543:
                    case 2641:
                    case 2974:
                    case 3034:
                    case 3043:
                    case 3045:
                    case 3127:
                    case 5116:
                    case 5118:
                    case 5149:
                    case 5384:
                    case 6197:
                    case 6991:
                    case 8737:
                    case 13159:
                    case 13161:
                    case 13163:
                    case 13809:
                    case 14311:
                    case 14327:
                    case 19263:
                    case 19801:
                    case 19878:
                    case 19879:
                    case 19880:
                    case 19882:
                    case 19883:
                    case 19884:
                    case 19885:
                    case 20736:
                    case 27044:
                    case 34026:
                    case 34074:
                    case 34477:
                    case 34600:
                    case 48990:
                    case 48996:
                    case 49001:
                    case 49045:
                    case 49048:
                    case 49052:
                    case 49056:
                    case 49067:
                    case 49071:
                    case 53271:
                    case 53338:
                    case 53339:
                    case 58434:
                    case 60192:
                    case 61006:
                    case 61847:
                        return true;
                    default:
                        return false;
                }
            }
        case 4: { // Rogue
                switch ($SpellID) {
                    case 921:
                    case 1725:
                    case 1766:
                    case 1776:
                    case 1784:
                    case 1804:
                    case 1833:
                    case 1842:
                    case 1860:
                    case 2094:
                    case 2836:
                    case 2842:
                    case 3127:
                    case 5938:
                    case 6774:
                    case 8643:
                    case 8647:
                    case 11305:
                    case 26669:
                    case 26889:
                    case 31224:
                    case 48638:
                    case 48657:
                    case 48659:
                    case 48668:
                    case 48672:
                    case 48674:
                    case 48676:
                    case 48691:
                    case 51722:
                    case 51723:
                    case 51724:
                    case 57934:
                    case 57993:
                        return true;
                    default:
                        return false;
                }
            }
        case 5: { // Priest
                switch ($SpellID) {
                    case 453:
                    case 528:
                    case 552:
                    case 586:
                    case 605:
                    case 988:
                    case 1180:
                    case 1706:
                    case 2053:
                    case 6064:
                    case 6346:
                    case 8129:
                    case 10890:
                    case 10909:
                    case 10955:
                    case 14767:
                    case 14791:
                    case 15012:
                    case 15286:
                    case 15310:
                    case 15316:
                    case 15317:
                    case 15328:
                    case 15332:
                    case 15448:
                    case 15473:
                    case 15487:
                    case 17191:
                    case 17323:
                    case 27840:
                    case 27901:
                    case 32375:
                    case 33193:
                    case 33215:
                    case 33225:
                    case 33371:
                    case 34433:
                    case 47570:
                    case 47582:
                    case 47585:
                    case 48063:
                    case 48066:
                    case 48068:
                    case 48071:
                    case 48072:
                    case 48073:
                    case 48074:
                    case 48078:
                    case 48113:
                    case 48120:
                    case 48123:
                    case 48125:
                    case 48127:
                    case 48135:
                    case 48156:
                    case 48158:
                    case 48160:
                    case 48161:
                    case 48162:
                    case 48168:
                    case 48169:
                    case 48170:
                    case 48171:
                    case 48300:
                    case 51167:
                    case 53023:
                    case 63627:
                    case 64044:
                    case 64843:
                    case 64901:
                        return true;
                    default:
                        return false;
                }
            }
        case 6: { // Death Knight
                switch ($SpellID) {
                    case 198:
                    case 199:
                    case 3714:
                    case 34091:
                    case 42650:
                    case 45524:
                    case 45529:
                    case 46584:
                    case 46628:
                    case 47476:
                    case 47528:
                    case 47568:
                    case 48263:
                    case 48265:
                    case 48707:
                    case 48743:
                    case 48778:
                    case 48792:
                    case 48982:
                    case 49005:
                    case 49016:
                    case 49028:
                    case 49393:
                    case 49395:
                    case 49480:
                    case 49489:
                    case 49491:
                    case 49501:
                    case 49504:
                    case 49509:
                    case 49530:
                    case 49534:
                    case 49543:
                    case 49562:
                    case 49568:
                    case 49589:
                    case 49895:
                    case 49909:
                    case 49921:
                    case 49924:
                    case 49930:
                    case 49938:
                    case 49941:
                    case 50029:
                    case 50034:
                    case 50111:
                    case 50150:
                    case 50371:
                    case 50842:
                    case 51425:
                    case 51456:
                    case 51746:
                    case 52286:
                    case 53138:
                    case 53323:
                    case 53331:
                    case 53341:
                    case 53342:
                    case 53343:
                    case 53344:
                    case 54197:
                    case 54446:
                    case 54447:
                    case 55108:
                    case 55133:
                    case 55233:
                    case 55262:
                    case 56222:
                    case 56815:
                    case 57623:
                    case 59568:
                    case 61158:
                    case 61278:
                    case 61999:
                    case 62158:
                    case 62908:
                    case 63644:
                    case 63645:
                    case 66:
                    case 130:
                    case 201:
                    case 475:
                    case 1180:
                    case 1953:
                    case 2139:
                    case 3563:
                    case 3566:
                    case 3567:
                    case 7301:
                    case 11417:
                    case 11418:
                    case 11420:
                    case 12051:
                    case 12826:
                    case 26054:
                    case 27090:
                    case 28272:
                    case 30449:
                    case 32267:
                    case 32272:
                    case 33717:
                    case 35715:
                    case 35717:
                    case 41513:
                    case 42833:
                    case 42842:
                    case 42846:
                    case 42859:
                    case 42873:
                    case 42897:
                    case 42914:
                    case 42917:
                    case 42921:
                    case 42926:
                    case 42931:
                    case 42940:
                    case 42956:
                    case 42985:
                    case 42995:
                    case 43002:
                    case 43008:
                    case 43010:
                    case 43012:
                    case 43015:
                    case 43017:
                    case 43020:
                    case 43024:
                    case 43046:
                    case 45438:
                    case 47610:
                    case 49358:
                    case 49361:
                    case 51412:
                    case 53140:
                    case 53142:
                    case 55342:
                    case 58659:
                    case 50977:
                    case 53428:
                        return true;
                    default:
                        return false;
                }
            }
        case 7: { // Shaman
                switch ($SpellID) {
                    case 131:
                    case 196:
                    case 197:
                    case 199:
                    case 526:
                    case 546:
                    case 556:
                    case 1180:
                    case 2062:
                    case 2484:
                    case 2645:
                    case 2825:
                    case 2894:
                    case 3738:
                    case 6196:
                    case 6495:
                    case 8012:
                    case 8143:
                    case 8170:
                    case 8177:
                    case 8512:
                    case 8737:
                    case 10399:
                    case 15590:
                    case 16041:
                    case 16108:
                    case 16109:
                    case 16116:
                    case 16161:
                    case 16164:
                    case 16166:
                    case 16305:
                    case 16582:
                    case 17489:
                    case 20608:
                    case 24242:
                    case 29065:
                    case 30666:
                    case 30674:
                    case 30679:
                    case 34091:
                    case 36936:
                    case 43338:
                    case 49231:
                    case 49233:
                    case 49236:
                    case 49238:
                    case 49271:
                    case 49273:
                    case 49276:
                    case 49277:
                    case 49281:
                    case 51470:
                    case 51482:
                    case 51486:
                    case 51514:
                    case 51881:
                    case 51994:
                    case 54197:
                    case 55459:
                    case 57722:
                    case 57960:
                    case 57994:
                    case 58582:
                    case 58643:
                    case 58656:
                    case 58704:
                    case 58734:
                    case 58739:
                    case 58745:
                    case 58749:
                    case 58753:
                    case 58757:
                    case 58774:
                    case 58790:
                    case 58796:
                    case 58804:
                    case 59159:
                    case 59568:
                    case 60043:
                    case 60188:
                    case 61657:
                    case 62101:
                    case 63372:
                    case 63644:
                    case 63645:
                    case 66842:
                    case 66843:
                    case 66844:
                    case 32182:
                        return true;
                    default:
                        return false;
                }
            }
        case 8: { // Mage
                switch ($SpellID) {
                    case 66:
                    case 130:
                    case 201:
                    case 475:
                    case 1180:
                    case 1953:
                    case 2139:
                    case 3563:
                    case 3566:
                    case 3567:
                    case 7301:
                    case 11080:
                    case 11417:
                    case 11418:
                    case 11420:
                    case 11958:
                    case 12042:
                    case 12043:
                    case 12051:
                    case 12469:
                    case 12472:
                    case 12490:
                    case 12497:
                    case 12503:
                    case 12519:
                    case 12571:
                    case 12577:
                    case 12592:
                    case 12598:
                    case 12605:
                    case 12606:
                    case 12826:
                    case 12840:
                    case 12847:
                    case 12953:
                    case 12983:
                    case 15047:
                    case 15060:
                    case 16758:
                    case 16766:
                    case 16770:
                    case 18464:
                    case 27090:
                    case 28272:
                    case 29440:
                    case 29444:
                    case 30449:
                    case 31570:
                    case 31571:
                    case 31583:
                    case 31588:
                    case 31589:
                    case 31678:
                    case 31683:
                    case 31687:
                    case 32267:
                    case 32272:
                    case 33717:
                    case 34091:
                    case 35581:
                    case 35715:
                    case 35717:
                    case 42833:
                    case 42842:
                    case 42846:
                    case 42859:
                    case 42873:
                    case 42897:
                    case 42914:
                    case 42917:
                    case 42921:
                    case 42926:
                    case 42931:
                    case 42940:
                    case 42956:
                    case 42985:
                    case 42995:
                    case 43002:
                    case 43008:
                    case 43010:
                    case 43012:
                    case 43015:
                    case 43017:
                    case 43020:
                    case 43024:
                    case 43039:
                    case 43046:
                    case 44379:
                    case 44396:
                    case 44403:
                    case 44545:
                    case 44549:
                    case 44561:
                    case 44571:
                    case 44572:
                    case 44781:
                    case 45438:
                    case 47610:
                    case 49358:
                    case 49361:
                    case 51412:
                    case 53140:
                    case 53142:
                    case 54197:
                    case 54354:
                    case 54490:
                    case 54646:
                    case 54659:
                    case 54734:
                    case 54749:
                    case 54787:
                    case 55092:
                    case 55094:
                    case 55340:
                    case 55342:
                    case 58659:
                    case 59568:
                    case 63644:
                    case 63645:
                    case 3561:
                    case 3562:
                    case 3565:
                    case 10059:
                    case 11416:
                    case 11419:
                    case 12952:
                    case 16765:
                    case 16769:
                    case 24242:
                    case 28332:
                    case 28593:
                    case 32266:
                    case 32271:
                    case 33690:
                    case 33691:
                    case 44557:
                    case 49359:
                    case 49360:
                    case 59571:
                        return true;
                    default:
                        return false;
                }
            }
        case 9: { // Warlock
                switch ($SpellID) {
                    case 126:
                    case 132:
                    case 201:
                    case 688:
                    case 691:
                    case 696:
                    case 697:
                    case 698:
                    case 712:
                    case 1122:
                    case 2331:
                    case 2332:
                    case 2334:
                    case 2337:
                    case 3170:
                    case 3171:
                    case 3173:
                    case 3176:
                    case 3177:
                    case 3447:
                    case 3448:
                    case 3450:
                    case 3452:
                    case 5138:
                    case 5500:
                    case 5697:
                    case 5784:
                    case 6215:
                    case 7179:
                    case 7181:
                    case 7836:
                    case 7837:
                    case 7841:
                    case 7845:
                    case 11448:
                    case 11449:
                    case 11450:
                    case 11451:
                    case 11457:
                    case 11460:
                    case 11461:
                    case 11465:
                    case 11467:
                    case 11478:
                    case 11719:
                    case 12609:
                    case 15833:
                    case 17551:
                    case 17552:
                    case 17553:
                    case 17555:
                    case 17556:
                    case 17557:
                    case 17572:
                    case 17573:
                    case 17780:
                    case 17785:
                    case 17792:
                    case 17805:
                    case 17814:
                    case 17834:
                    case 17918:
                    case 17928:
                    case 17958:
                    case 17962:
                    case 18095:
                    case 18120:
                    case 18130:
                    case 18136:
                    case 18174:
                    case 18183:
                    case 18219:
                    case 18275:
                    case 18540:
                    case 18647:
                    case 18693:
                    case 18695:
                    case 18699:
                    case 18704:
                    case 18708:
                    case 18710:
                    case 18744:
                    case 18768:
                    case 18773:
                    case 18829:
                    case 19028:
                    case 22808:
                    case 23161:
                    case 23825:
                    case 25953:
                    case 26055:
                    case 26056:
                    case 28581:
                    case 28582:
                    case 28584:
                    case 28585:
                    case 28586:
                    case 28587:
                    case 28588:
                    case 28589:
                    case 28590:
                    case 28591:
                    case 29858:
                    case 30064:
                    case 30145:
                    case 30146:
                    case 30248:
                    case 30292:
                    case 30296:
                    case 30302:
                    case 32295:
                    case 32383:
                    case 32394:
                    case 32484:
                    case 33732:
                    case 33738:
                    case 33740:
                    case 34091:
                    case 34939:
                    case 35693:
                    case 44744:
                    case 46628:
                    case 47193:
                    case 47195:
                    case 47200:
                    case 47202:
                    case 47231:
                    case 47240:
                    case 47241:
                    case 47247:
                    case 47260:
                    case 47270:
                    case 47809:
                    case 47811:
                    case 47813:
                    case 47815:
                    case 47820:
                    case 47823:
                    case 47825:
                    case 47827:
                    case 47836:
                    case 47838:
                    case 47843:
                    case 47847:
                    case 47855:
                    case 47856:
                    case 47857:
                    case 47860:
                    case 47864:
                    case 47865:
                    case 47867:
                    case 47878:
                    case 47884:
                    case 47888:
                    case 47889:
                    case 47891:
                    case 47893:
                    case 48018:
                    case 48020:
                    case 50511:
                    case 50581:
                    case 51304:
                    case 51309:
                    case 53042:
                    case 53812:
                    case 53836:
                    case 53837:
                    case 53838:
                    case 53839:
                    case 53841:
                    case 53842:
                    case 53848:
                    case 53899:
                    case 53900:
                    case 53901:
                    case 53902:
                    case 53903:
                    case 54197:
                    case 54213:
                    case 55642:
                    case 56007:
                    case 57946:
                    case 58435:
                    case 58887:
                    case 59164:
                    case 59172:
                    case 59571:
                    case 59672:
                    case 59673:
                    case 59741:
                    case 60220:
                    case 60893:
                    case 60990:
                    case 60993:
                    case 60994:
                    case 61191:
                    case 61290:
                    case 61294:
                    case 62409:
                    case 63108:
                    case 63123:
                    case 63158:
                    case 63245:
                    case 63351:
                    case 63644:
                    case 63645:
                    case 63732:
                    case 64731:
                    case 6213:
                    case 11672:
                    case 11675:
                    case 11688:
                    case 11700:
                    case 11708:
                    case 11712:
                    case 11721:
                    case 17925:
                    case 18709:
                    case 50589:
                    case 54785:
                    case 59671:
                    case 17803:
                    case 18697:
                    case 54118:
                    case 196:
                    case 200:
                    case 202:
                    case 227:
                    case 266:
                    case 674:
                    case 781:
                    case 883:
                    case 982:
                    case 1002:
                    case 1462:
                    case 1494:
                    case 1515:
                    case 1543:
                    case 2567:
                    case 2641:
                    case 2974:
                    case 3034:
                    case 3043:
                    case 3045:
                    case 3127:
                    case 5011:
                    case 5116:
                    case 5118:
                    case 5384:
                    case 6197:
                    case 6991:
                    case 8737:
                    case 13159:
                    case 13161:
                    case 13163:
                    case 13809:
                    case 14311:
                    case 14327:
                    case 15590:
                    case 19184:
                    case 19259:
                    case 19263:
                    case 19373:
                    case 19431:
                    case 19490:
                    case 19500:
                    case 19503:
                    case 19801:
                    case 19878:
                    case 19879:
                    case 19880:
                    case 19882:
                    case 19883:
                    case 19884:
                    case 19885:
                    case 20736:
                    case 24283:
                    case 24297:
                    case 27044:
                    case 34026:
                    case 34074:
                    case 34477:
                    case 34484:
                    case 34493:
                    case 34496:
                    case 34499:
                    case 34503:
                    case 34600:
                    case 34839:
                    case 48990:
                    case 48996:
                    case 49001:
                    case 49012:
                    case 49045:
                    case 49048:
                    case 49050:
                    case 49052:
                    case 49056:
                    case 49067:
                    case 49071:
                    case 52785:
                    case 53271:
                    case 53292:
                    case 53338:
                    case 53339:
                    case 56337:
                    case 56341:
                    case 56344:
                    case 58434:
                    case 60053:
                    case 60118:
                    case 60192:
                    case 61006:
                    case 61847:
                    case 63458:
                    case 63672:
                    case 18176:
                    case 18223:
                    case 18288:
                    case 30057:
                    case 47197:
                    case 47199:
                    case 47205:
                    case 53754:
                    case 34090:
                    case 54753:
                    case 693:
                    case 17877:
                    case 17930:
                    case 18127:
                    case 18135:
                    case 30283:
                    case 30291:
                    case 30295:
                    case 47223:
                    case 50796:
                    case 59739:
                    case 63350:
                        return true;
                    default:
                        return false;
                }
            }
        case 11: {// Druid
                switch ($SpellID) {
                    case 768:
                    case 770:
                    case 783:
                    case 1066:
                    case 2782:
                    case 2893:
                    case 5209:
                    case 5215:
                    case 5225:
                    case 5229:
                    case 5420:
                    case 6795:
                    case 8983:
                    case 16081:
                    case 16835:
                    case 16857:
                    case 16864:
                    case 17051:
                    case 17061:
                    case 17066:
                    case 17073:
                    case 17078:
                    case 17108:
                    case 17113:
                    case 17116:
                    case 17120:
                    case 17124:
                    case 18562:
                    case 18658:
                    case 20719:
                    case 22812:
                    case 22842:
                    case 24242:
                    case 24946:
                    case 24972:
                    case 26995:
                    case 29166:
                    case 33357:
                    case 33786:
                    case 33880:
                    case 33883:
                    case 33890:
                    case 33891:
                    case 34091:
                    case 34153:
                    case 40120:
                    case 48378:
                    case 48412:
                    case 48441:
                    case 48443:
                    case 48447:
                    case 48451:
                    case 48461:
                    case 48463:
                    case 48465:
                    case 48467:
                    case 48469:
                    case 48470:
                    case 48477:
                    case 48480:
                    case 48500:
                    case 48545:
                    case 48560:
                    case 48562:
                    case 48568:
                    case 48570:
                    case 48572:
                    case 48574:
                    case 48575:
                    case 48577:
                    case 48579:
                    case 49800:
                    case 49802:
                    case 49803:
                    case 50213:
                    case 50464:
                    case 50763:
                    case 52610:
                    case 53251:
                    case 53307:
                    case 53308:
                    case 53312:
                    case 54197:
                    case 59571:
                    case 59793:
                    case 61467:
                    case 62078:
                    case 62600:
                    case 63410:
                    case 63680:
                    case 65139:
                    case 9634:
                    case 24858:
                    case 33876:
                    case 33878:
                        return true;
                    default:
                        return false;
                }
            }
    }
}

function _GetClassID($class) {
    switch ($class) {
        case "WARRIOR": return 1;
        case "PALADIN": return 2;
        case "HUNTER": return 3;
        case "ROGUE": return 4;
        case "PRIEST": return 5;
        case "DEATHKNIGHT": return 6;
        case "SHAMAN": return 7;
        case "MAGE": return 8;
        case "WARLOCK": return 9;
        case "DRUID": return 11;
        default: die("<br>YOUR CHARACTER CLASS IS NOT BLIZZLIKE FOR 3.3.5a<br>");
    }
}

function _GetRaceID($race) {
    switch ($race) {
        case "HUMAN": return 1;
        case "ORC": return 2;
        case "DWARF": return 3;
        case "NIGHTELF": return 4;
        case "SCOURGE": return 5; // INSTEAD UNDEAD
        case "TAUREN": return 6;
        case "GNOME": return 7;
        case "TROLL": return 8;
        case "BLOODELF": return 10;
        case "DRAENEI": return 11;
        default: die("<br>YOUR CHARACTER RACE IS NOT BLIZZLIKE FOR 3.3.5a<br>");
    }
}

function _isProfessionSpell($SpellID) {
    global $ProfessionSpells;
    return !empty($ProfessionSpells) && array_key_exists($SpellID, $ProfessionSpells);
}

function _isSpellValid($SpellID, $ClassID) {
    if (_isClassSpellValid($SpellID, $ClassID))
        return true;
    elseif (_isProfessionSpell($SpellID))
        return true;
    return false;
}

$ProfessionSpells = array(
    201 => 43, //One-Handed Swords
    196 => 44, //One-Handed Axes
    264 => 45, //Bows
    266 => 46, //Guns
    3018 => 46, //Shoot
    198 => 54, //One-Handed Maces
    202 => 55, //Two-Handed Swords
    668 => 98, //Language Common
    669 => 109, //Language Orcish
    672 => 111, //Language Dwarven
    671 => 113, //Language Darnassian
    670 => 115, //Language Taurahe
    3273 => 129, //First Aid
    3274 => 129, //First Aid
    3275 => 129, //Linen Bandage
    3276 => 129, //Heavy Linen Bandage
    3277 => 129, //Wool Bandage
    3278 => 129, //Heavy Wool Bandage
    7928 => 129, //Silk Bandage
    7929 => 129, //Heavy Silk Bandage
    7924 => 129, //First Aid
    7934 => 129, //Anti-Venom
    7935 => 129, //Strong Anti-Venom
    10846 => 129, //First Aid
    10840 => 129, //Mageweave Bandage
    10841 => 129, //Heavy Mageweave Bandage
    18629 => 129, //Runecloth Bandage
    18630 => 129, //Heavy Runecloth Bandage
    23787 => 129, //Powerful Anti-Venom
    27028 => 129, //First Aid
    27032 => 129, //Netherweave Bandage
    27033 => 129, //Heavy Netherweave Bandage
    45545 => 129, //Frostweave Bandage
    45546 => 129, //Heavy Frostweave Bandage
    45542 => 129, //First Aid
    227 => 136, //Staves
    813 => 137, //Language Thalassian
    199 => 160, //Two-Handed Maces
    2018 => 164, //Blacksmithing
    2660 => 164, //Rough Sharpening Stone
    2661 => 164, //Copper Chain Belt
    2662 => 164, //Copper Chain Pants
    2663 => 164, //Copper Bracers
    2664 => 164, //Runed Copper Bracers
    2665 => 164, //Coarse Sharpening Stone
    2666 => 164, //Runed Copper Belt
    2667 => 164, //Runed Copper Breastplate
    2668 => 164, //Rough Bronze Leggings
    2670 => 164, //Rough Bronze Cuirass
    2672 => 164, //Patterned Bronze Bracers
    2674 => 164, //Heavy Sharpening Stone
    2675 => 164, //Shining Silver Breastplate
    2737 => 164, //Copper Mace
    2740 => 164, //Bronze Mace
    2741 => 164, //Bronze Axe
    2738 => 164, //Copper Axe
    2739 => 164, //Copper Shortsword
    2742 => 164, //Bronze Shortsword
    3100 => 164, //Blacksmithing
    3115 => 164, //Rough Weightstone
    3117 => 164, //Heavy Weightstone
    3116 => 164, //Coarse Weightstone
    3292 => 164, //Heavy Copper Broadsword
    3293 => 164, //Copper Battle Axe
    3294 => 164, //Thick War Axe
    3295 => 164, //Deadly Bronze Poniard
    3296 => 164, //Heavy Bronze Mace
    3297 => 164, //Mighty Iron Hammer
    3319 => 164, //Copper Chain Boots
    3320 => 164, //Rough Grinding Stone
    3321 => 164, //Copper Chain Vest
    3323 => 164, //Runed Copper Gauntlets
    3324 => 164, //Runed Copper Pants
    3325 => 164, //Gemmed Copper Gauntlets
    3326 => 164, //Coarse Grinding Stone
    3328 => 164, //Rough Bronze Shoulders
    3330 => 164, //Silvered Bronze Shoulders
    3331 => 164, //Silvered Bronze Boots
    3333 => 164, //Silvered Bronze Gauntlets
    3334 => 164, //Green Iron Boots
    3336 => 164, //Green Iron Gauntlets
    3337 => 164, //Heavy Grinding Stone
    3491 => 164, //Big Bronze Knife
    3492 => 164, //Hardened Iron Shortsword
    3493 => 164, //Jade Serpentblade
    3494 => 164, //Solid Iron Maul
    3495 => 164, //Golden Iron Destroyer
    3496 => 164, //Moonsteel Broadsword
    3497 => 164, //Frost Tiger Blade
    3498 => 164, //Massive Iron Axe
    3500 => 164, //Shadow Crescent Axe
    3501 => 164, //Green Iron Bracers
    3502 => 164, //Green Iron Helm
    3503 => 164, //Golden Scale Coif
    3504 => 164, //Green Iron Shoulders
    3505 => 164, //Golden Scale Shoulders
    3506 => 164, //Green Iron Leggings
    3507 => 164, //Golden Scale Leggings
    3508 => 164, //Green Iron Hauberk
    3511 => 164, //Golden Scale Cuirass
    3513 => 164, //Polished Steel Boots
    3515 => 164, //Golden Scale Boots
    3538 => 164, //Blacksmithing
    6518 => 164, //Iridescent Hammer
    6517 => 164, //Pearl-handled Dagger
    2671 => 164, //Rough Bronze Bracers
    2673 => 164, //Silvered Bronze Breastplate
    7224 => 164, //Steel Weapon Chain
    7223 => 164, //Golden Scale Bracers
    7221 => 164, //Iron Shield Spike
    7222 => 164, //Iron Counterweight
    7408 => 164, //Heavy Copper Maul
    7817 => 164, //Rough Bronze Boots
    7818 => 164, //Silver Rod
    8366 => 164, //Ironforge Chain
    8367 => 164, //Ironforge Breastplate
    8368 => 164, //Ironforge Gauntlets
    8768 => 164, //Iron Buckle
    8880 => 164, //Copper Dagger
    9785 => 164, //Blacksmithing
    9788 => 164, //Armorsmith
    9787 => 164, //Weaponsmith
    9811 => 164, //Barbaric Iron Shoulders
    9813 => 164, //Barbaric Iron Breastplate
    9814 => 164, //Barbaric Iron Helm
    9818 => 164, //Barbaric Iron Boots
    9820 => 164, //Barbaric Iron Gloves
    9916 => 164, //Steel Breastplate
    9918 => 164, //Solid Sharpening Stone
    9921 => 164, //Solid Weightstone
    9920 => 164, //Solid Grinding Stone
    9926 => 164, //Heavy Mithril Shoulder
    9928 => 164, //Heavy Mithril Gauntlet
    9931 => 164, //Mithril Scale Pants
    9933 => 164, //Heavy Mithril Pants
    9935 => 164, //Steel Plate Helm
    9937 => 164, //Mithril Scale Bracers
    9939 => 164, //Mithril Shield Spike
    9942 => 164, //Mithril Scale Gloves
    9945 => 164, //Ornate Mithril Pants
    9950 => 164, //Ornate Mithril Gloves
    9952 => 164, //Ornate Mithril Shoulder
    9954 => 164, //Truesilver Gauntlets
    9957 => 164, //Orcish War Leggings
    9959 => 164, //Heavy Mithril Breastplate
    9961 => 164, //Mithril Coif
    9964 => 164, //Mithril Spurs
    9966 => 164, //Mithril Scale Shoulders
    9968 => 164, //Heavy Mithril Boots
    9970 => 164, //Heavy Mithril Helm
    9972 => 164, //Ornate Mithril Breastplate
    9974 => 164, //Truesilver Breastplate
    9979 => 164, //Ornate Mithril Boots
    9980 => 164, //Ornate Mithril Helm
    9983 => 164, //Copper Claymore
    9985 => 164, //Bronze Warhammer
    9986 => 164, //Bronze Greatsword
    9987 => 164, //Bronze Battle Axe
    9993 => 164, //Heavy Mithril Axe
    9995 => 164, //Blue Glittering Axe
    9997 => 164, //Wicked Mithril Blade
    10001 => 164, //Big Black Mace
    10003 => 164, //The Shatterer
    10005 => 164, //Dazzling Mithril Rapier
    10007 => 164, //Phantom Blade
    10009 => 164, //Runed Mithril Hammer
    10011 => 164, //Blight
    10013 => 164, //Ebon Shiv
    10015 => 164, //Truesilver Champion
    11643 => 164, //Golden Scale Gauntlets
    12260 => 164, //Rough Copper Vest
    12259 => 164, //Silvered Bronze Leggings
    11454 => 164, //Inlaid Mithril Cylinder
    14379 => 164, //Golden Rod
    14380 => 164, //Truesilver Rod
    15296 => 164, //Dark Iron Plate
    15293 => 164, //Dark Iron Mail
    15292 => 164, //Dark Iron Pulverizer
    15294 => 164, //Dark Iron Sunderer
    15295 => 164, //Dark Iron Shoulders
    15972 => 164, //Glinting Steel Dagger
    15973 => 164, //Searing Golden Blade
    16641 => 164, //Dense Sharpening Stone
    16640 => 164, //Dense Weightstone
    16639 => 164, //Dense Grinding Stone
    16642 => 164, //Thorium Armor
    16643 => 164, //Thorium Belt
    16644 => 164, //Thorium Bracers
    16645 => 164, //Radiant Belt
    16646 => 164, //Imperial Plate Shoulders
    16647 => 164, //Imperial Plate Belt
    16648 => 164, //Radiant Breastplate
    16649 => 164, //Imperial Plate Bracers
    16650 => 164, //Wildthorn Mail
    16651 => 164, //Thorium Shield Spike
    16652 => 164, //Thorium Boots
    16653 => 164, //Thorium Helm
    16654 => 164, //Radiant Gloves
    16667 => 164, //Demon Forged Breastplate
    16656 => 164, //Radiant Boots
    16660 => 164, //Dawnbringer Shoulders
    16655 => 164, //Fiery Plate Gauntlets
    16657 => 164, //Imperial Plate Boots
    16658 => 164, //Imperial Plate Helm
    16659 => 164, //Radiant Circlet
    16662 => 164, //Thorium Leggings
    16663 => 164, //Imperial Plate Chest
    16664 => 164, //Runic Plate Shoulders
    16665 => 164, //Runic Plate Boots
    16724 => 164, //Whitesoul Helm
    16725 => 164, //Radiant Leggings
    16726 => 164, //Runic Plate Helm
    16730 => 164, //Imperial Plate Leggings
    16728 => 164, //Helm of the Great Chief
    16729 => 164, //Lionheart Helm
    16731 => 164, //Runic Breastplate
    16732 => 164, //Runic Plate Leggings
    16741 => 164, //Stronghold Gauntlets
    16742 => 164, //Enchanted Thorium Helm
    16744 => 164, //Enchanted Thorium Leggings
    16745 => 164, //Enchanted Thorium Breastplate
    16746 => 164, //Invulnerable Mail
    16960 => 164, //Thorium Greatsword
    16965 => 164, //Bleakwood Hew
    16967 => 164, //Inlaid Thorium Hammer
    16969 => 164, //Ornate Thorium Handaxe
    16970 => 164, //Dawn's Edge
    16971 => 164, //Huge Thorium Battleaxe
    16973 => 164, //Enchanted Battlehammer
    16978 => 164, //Blazing Rapier
    16980 => 164, //Rune Edge
    16983 => 164, //Serenity
    16984 => 164, //Volcanic Hammer
    16985 => 164, //Corruption
    16986 => 164, //Blood Talon
    16987 => 164, //Darkspear
    16988 => 164, //Hammer of the Titans
    16990 => 164, //Arcanite Champion
    16991 => 164, //Annihilator
    16992 => 164, //Frostguard
    16993 => 164, //Masterwork Stormhammer
    16994 => 164, //Arcanite Reaper
    16995 => 164, //Heartseeker
    17039 => 164, //Master Swordsmith
    17040 => 164, //Master Hammersmith
    17041 => 164, //Master Axesmith
    16661 => 164, //Storm Gauntlets
    19666 => 164, //Silver Skeleton Key
    19667 => 164, //Golden Skeleton Key
    19668 => 164, //Truesilver Skeleton Key
    19669 => 164, //Arcanite Skeleton Key
    20201 => 164, //Arcanite Rod
    20874 => 164, //Dark Iron Bracers
    20872 => 164, //Fiery Chain Girdle
    20876 => 164, //Dark Iron Leggings
    20873 => 164, //Fiery Chain Shoulders
    20897 => 164, //Dark Iron Destroyer
    20890 => 164, //Dark Iron Reaver
    21161 => 164, //Sulfuron Hammer
    21913 => 164, //Edge of Winter
    22757 => 164, //Elemental Sharpening Stone
    23628 => 164, //Heavy Timbermaw Belt
    23629 => 164, //Heavy Timbermaw Boots
    23632 => 164, //Girdle of the Dawn
    23633 => 164, //Gloves of the Dawn
    23636 => 164, //Dark Iron Helm
    23637 => 164, //Dark Iron Gauntlets
    23638 => 164, //Black Amnesty
    23639 => 164, //Blackfury
    23650 => 164, //Ebon Hand
    23652 => 164, //Blackguard
    23653 => 164, //Nightfall
    24136 => 164, //Bloodsoul Breastplate
    24138 => 164, //Bloodsoul Gauntlets
    24137 => 164, //Bloodsoul Shoulders
    24139 => 164, //Darksoul Breastplate
    24140 => 164, //Darksoul Leggings
    24141 => 164, //Darksoul Shoulders
    24399 => 164, //Dark Iron Boots
    24914 => 164, //Darkrune Breastplate
    24912 => 164, //Darkrune Gauntlets
    24913 => 164, //Darkrune Helm
    27585 => 164, //Heavy Obsidian Belt
    27588 => 164, //Light Obsidian Belt
    27586 => 164, //Jagged Obsidian Shield
    27589 => 164, //Black Grasp of the Destroyer
    27590 => 164, //Obsidian Mail Tunic
    27587 => 164, //Thick Obsidian Breastplate
    27830 => 164, //Persuader
    27829 => 164, //Titanic Leggings
    27832 => 164, //Sageblade
    28244 => 164, //Icebane Bracers
    28242 => 164, //Icebane Breastplate
    28243 => 164, //Icebane Gauntlets
    28461 => 164, //Ironvine Breastplate
    28462 => 164, //Ironvine Gloves
    28463 => 164, //Ironvine Belt
    29545 => 164, //Fel Iron Plate Gloves
    29547 => 164, //Fel Iron Plate Belt
    29548 => 164, //Fel Iron Plate Boots
    29549 => 164, //Fel Iron Plate Pants
    29550 => 164, //Fel Iron Breastplate
    29551 => 164, //Fel Iron Chain Coif
    29552 => 164, //Fel Iron Chain Gloves
    29553 => 164, //Fel Iron Chain Bracers
    29556 => 164, //Fel Iron Chain Tunic
    29557 => 164, //Fel Iron Hatchet
    29558 => 164, //Fel Iron Hammer
    29565 => 164, //Fel Iron Greatsword
    29566 => 164, //Adamantite Maul
    29568 => 164, //Adamantite Cleaver
    29569 => 164, //Adamantite Dagger
    29571 => 164, //Adamantite Rapier
    29603 => 164, //Adamantite Plate Bracers
    29605 => 164, //Adamantite Plate Gloves
    29606 => 164, //Adamantite Breastplate
    29608 => 164, //Enchanted Adamantite Belt
    29611 => 164, //Enchanted Adamantite Boots
    29610 => 164, //Enchanted Adamantite Breastplate
    29613 => 164, //Enchanted Adamantite Leggings
    29614 => 164, //Flamebane Bracers
    29615 => 164, //Flamebane Helm
    29616 => 164, //Flamebane Gloves
    29617 => 164, //Flamebane Breastplate
    29619 => 164, //Felsteel Gloves
    29620 => 164, //Felsteel Leggings
    29621 => 164, //Felsteel Helm
    29628 => 164, //Khorium Belt
    29629 => 164, //Khorium Pants
    29630 => 164, //Khorium Boots
    29642 => 164, //Ragesteel Gloves
    29643 => 164, //Ragesteel Helm
    29645 => 164, //Ragesteel Breastplate
    29648 => 164, //Swiftsteel Gloves
    29649 => 164, //Earthpeace Breastplate
    29654 => 164, //Fel Sharpening Stone
    29656 => 164, //Adamantite Sharpening Stone
    29657 => 164, //Felsteel Shield Spike
    29658 => 164, //Felfury Gauntlets
    29622 => 164, //Gauntlets of the Iron Tower
    29662 => 164, //Steelgrip Gauntlets
    29663 => 164, //Storm Helm
    29664 => 164, //Helm of the Stalwart Defender
    29668 => 164, //Oathkeeper's Helm
    29669 => 164, //Black Felsteel Bracers
    29671 => 164, //Bracers of the Green Fortress
    29672 => 164, //Blessed Bracers
    29692 => 164, //Felsteel Longblade
    29693 => 164, //Khorium Champion
    29694 => 164, //Fel Edged Battleaxe
    29695 => 164, //Felsteel Reaper
    29696 => 164, //Runic Hammer
    29697 => 164, //Fel Hardened Maul
    29698 => 164, //Eternium Runed Blade
    29699 => 164, //Dirge
    29700 => 164, //Hand of Eternity
    29728 => 164, //Lesser Ward of Shielding
    29729 => 164, //Greater Ward of Shielding
    29844 => 164, //Blacksmithing
    32284 => 164, //Lesser Rune of Warding
    32285 => 164, //Greater Rune of Warding
    32655 => 164, //Fel Iron Rod
    32656 => 164, //Adamantite Rod
    32657 => 164, //Eternium Rod
    34533 => 164, //Breastplate of Kings
    34545 => 164, //Drakefist Hammer
    34538 => 164, //Lionheart Blade
    34529 => 164, //Nether Chain Shirt
    34535 => 164, //Fireguard
    34541 => 164, //The Planar Edge
    34547 => 164, //Thunder
    34543 => 164, //Lunar Crescent
    34542 => 164, //Black Planar Edge
    34534 => 164, //Bulwark of Kings
    34548 => 164, //Deep Thunder
    34546 => 164, //Dragonmaw
    34540 => 164, //Lionheart Champion
    34544 => 164, //Mooncleaver
    34537 => 164, //Blazeguard
    34530 => 164, //Twisting Nether Chain Shirt
    34607 => 164, //Fel Weightstone
    34608 => 164, //Adamantite Weightstone
    34979 => 164, //Thick Bronze Darts
    34981 => 164, //Whirling Steel Axes
    34982 => 164, //Enchanted Thorium Blades
    34983 => 164, //Felsteel Whisper Knives
    36122 => 164, //Earthforged Leggings
    36125 => 164, //Light Earthforged Blade
    36128 => 164, //Light Emberforged Hammer
    36126 => 164, //Light Skyforged Axe
    36124 => 164, //Windforged Leggings
    36137 => 164, //Great Earthforged Hammer
    36129 => 164, //Heavy Earthforged Breastplate
    36136 => 164, //Lavaforged Warhammer
    36135 => 164, //Skyforged Great Axe
    36133 => 164, //Stoneforged Claymore
    36134 => 164, //Stormforged Axe
    36130 => 164, //Stormforged Hauberk
    36131 => 164, //Windforged Rapier
    36256 => 164, //Embrace of the Twisting Nether
    36257 => 164, //Bulwark of the Ancient Kings
    36258 => 164, //Blazefury
    36259 => 164, //Lionheart Executioner
    36260 => 164, //Wicked Edge of the Planes
    36261 => 164, //Bloodmoon
    36262 => 164, //Dragonstrike
    36263 => 164, //Stormherald
    36389 => 164, //Belt of the Guardian
    36390 => 164, //Red Belt of Battle
    36391 => 164, //Boots of the Protector
    36392 => 164, //Red Havoc Boots
    38473 => 164, //Wildguard Breastplate
    38475 => 164, //Wildguard Leggings
    38476 => 164, //Wildguard Helm
    38477 => 164, //Iceguard Breastplate
    38478 => 164, //Iceguard Leggings
    38479 => 164, //Iceguard Helm
    40034 => 164, //Shadesteel Bracers
    40036 => 164, //Shadesteel Girdle
    40035 => 164, //Shadesteel Greaves
    40033 => 164, //Shadesteel Sabots
    41132 => 164, //Swiftsteel Bracers
    41133 => 164, //Swiftsteel Shoulders
    41135 => 164, //Dawnsteel Shoulders
    41134 => 164, //Dawnsteel Bracers
    42662 => 164, //Ragesteel Shoulders
    42688 => 164, //Adamantite Weapon Chain
    43549 => 164, //Heavy Copper Longsword
    43846 => 164, //Hammer of Righteous Might
    46141 => 164, //Hard Khorium Battlefists
    46144 => 164, //Hard Khorium Battleplate
    46142 => 164, //Sunblessed Breastplate
    46140 => 164, //Sunblessed Gauntlets
    51300 => 164, //Blacksmithing
    52568 => 164, //Cobalt Belt
    52569 => 164, //Cobalt Boots
    52570 => 164, //Cobalt Chestpiece
    52567 => 164, //Cobalt Legplates
    52571 => 164, //Cobalt Helm
    52572 => 164, //Cobalt Shoulders
    54550 => 164, //Cobalt Triangle Shield
    54551 => 164, //Tempered Saronite Belt
    54552 => 164, //Tempered Saronite Boots
    54553 => 164, //Tempered Saronite Breastplate
    54554 => 164, //Tempered Saronite Legplates
    54555 => 164, //Tempered Saronite Helm
    54556 => 164, //Tempered Saronite Shoulders
    54557 => 164, //Saronite Defender
    54917 => 164, //Spiked Cobalt Helm
    54918 => 164, //Spiked Cobalt Boots
    54941 => 164, //Spiked Cobalt Shoulders
    54944 => 164, //Spiked Cobalt Chestpiece
    54945 => 164, //Spiked Cobalt Gauntlets
    54946 => 164, //Spiked Cobalt Belt
    54947 => 164, //Spiked Cobalt Legplates
    54948 => 164, //Spiked Cobalt Bracers
    54949 => 164, //Horned Cobalt Helm
    54978 => 164, //Reinforced Cobalt Shoulders
    54979 => 164, //Reinforced Cobalt Helm
    54980 => 164, //Reinforced Cobalt Legplates
    54981 => 164, //Reinforced Cobalt Chestpiece
    55013 => 164, //Saronite Protector
    55017 => 164, //Tempered Saronite Bracers
    55014 => 164, //Saronite Bulwark
    55015 => 164, //Tempered Saronite Gauntlets
    55055 => 164, //Brilliant Saronite Legplates
    55056 => 164, //Brilliant Saronite Gauntlets
    55057 => 164, //Brilliant Saronite Boots
    55058 => 164, //Brilliant Saronite Breastplate
    55174 => 164, //Honed Cobalt Cleaver
    55177 => 164, //Savage Cobalt Slicer
    55179 => 164, //Saronite Ambusher
    55181 => 164, //Saronite Shiv
    55182 => 164, //Furious Saronite Beatstick
    55183 => 164, //Corroded Saronite Edge
    55184 => 164, //Corroded Saronite Woundbringer
    55185 => 164, //Saronite Mindcrusher
    55186 => 164, //Chestplate of Conquest
    55187 => 164, //Legplates of Conquest
    55200 => 164, //Sturdy Cobalt Quickblade
    55201 => 164, //Cobalt Tenderizer
    55203 => 164, //Forged Cobalt Claymore
    55204 => 164, //Notched Cobalt War Axe
    55202 => 164, //Sure-fire Shuriken
    55206 => 164, //Deadly Saronite Dirk
    55298 => 164, //Vengeance Bindings
    55300 => 164, //Righteous Gauntlets
    55301 => 164, //Daunting Handguards
    55302 => 164, //Helm of Command
    55303 => 164, //Daunting Legplates
    55304 => 164, //Righteous Greaves
    55305 => 164, //Savage Saronite Bracers
    55306 => 164, //Savage Saronite Pauldrons
    55307 => 164, //Savage Saronite Waistguard
    55308 => 164, //Savage Saronite Walkers
    55309 => 164, //Savage Saronite Gauntlets
    55311 => 164, //Savage Saronite Hauberk
    55310 => 164, //Savage Saronite Legplates
    55312 => 164, //Savage Saronite Skullshield
    55371 => 164, //Titansteel Guardian
    55372 => 164, //Spiked Titansteel Helm
    55373 => 164, //Tempered Titansteel Helm
    55374 => 164, //Brilliant Titansteel Helm
    55375 => 164, //Spiked Titansteel Treads
    55376 => 164, //Tempered Titansteel Treads
    55369 => 164, //Titansteel Destroyer
    55370 => 164, //Titansteel Bonecrusher
    55377 => 164, //Brilliant Titansteel Treads
    55628 => 164, //Socket Bracer
    55641 => 164, //Socket Gloves
    55656 => 164, //Eternal Belt Buckle
    55732 => 164, //Titanium Rod
    55834 => 164, //Cobalt Bracers
    55835 => 164, //Cobalt Gauntlets
    55839 => 164, //Titanium Weapon Chain
    56234 => 164, //Titansteel Shanker
    56280 => 164, //Cudgel of Saronite Justice
    56357 => 164, //Titanium Shield Spike
    56400 => 164, //Titansteel Shield Wall
    56549 => 164, //Ornate Saronite Bracers
    56550 => 164, //Ornate Saronite Pauldrons
    56551 => 164, //Ornate Saronite Waistguard
    56552 => 164, //Ornate Saronite Walkers
    56553 => 164, //Ornate Saronite Gauntlets
    56554 => 164, //Ornate Saronite Legplates
    56555 => 164, //Ornate Saronite Hauberk
    56556 => 164, //Ornate Saronite Skullshield
    59405 => 164, //Cobalt Skeleton Key
    59406 => 164, //Titanium Skeleton Key
    59436 => 164, //Brilliant Saronite Belt
    59438 => 164, //Brilliant Saronite Bracers
    59440 => 164, //Brilliant Saronite Pauldrons
    59441 => 164, //Brilliant Saronite Helm
    59442 => 164, //Saronite Spellblade
    61008 => 164, //Icebane Chestguard
    61009 => 164, //Icebane Girdle
    61010 => 164, //Icebane Treads
    62202 => 164, //Titanium Plating
    63182 => 164, //Titansteel Spellblade
    63190 => 164, //Treads of Destiny
    63191 => 164, //Indestructible Plate Girdle
    63189 => 164, //Plate Girdle of Righteousness
    63187 => 164, //Belt of the Titans
    63188 => 164, //Battlelord's Plate Boots
    63192 => 164, //Spiked Deathdealers
    67091 => 164, //Breastplate of the White Knight
    67092 => 164, //Saronite Swordbreakers
    67093 => 164, //Titanium Razorplate
    67094 => 164, //Titanium Spikeguards
    67095 => 164, //Sunforged Breastplate
    67096 => 164, //Sunforged Bracers
    67131 => 164, //Saronite Swordbreakers
    67132 => 164, //Titanium Razorplate
    67133 => 164, //Titanium Spikeguards
    67134 => 164, //Sunforged Breastplate
    67135 => 164, //Sunforged Bracers
    67130 => 164, //Breastplate of the White Knight
    70562 => 164, //Puresteel Legplates
    70563 => 164, //Protectors of Life
    70565 => 164, //Legplates of Painful Death
    70567 => 164, //Pillars of Might
    70568 => 164, //Boots of Kingly Upheaval
    70566 => 164, //Hellfrozen Bonegrinders
    2108 => 165, //Leatherworking
    2149 => 165, //Handstitched Leather Boots
    2153 => 165, //Handstitched Leather Pants
    2152 => 165, //Light Armor Kit
    2158 => 165, //Fine Leather Boots
    2159 => 165, //Fine Leather Cloak
    2160 => 165, //Embossed Leather Vest
    2161 => 165, //Embossed Leather Boots
    2162 => 165, //Embossed Leather Cloak
    2163 => 165, //White Leather Jerkin
    2164 => 165, //Fine Leather Gloves
    2165 => 165, //Medium Armor Kit
    2166 => 165, //Toughened Leather Armor
    2167 => 165, //Dark Leather Boots
    2168 => 165, //Dark Leather Cloak
    2169 => 165, //Dark Leather Tunic
    2881 => 165, //Light Leather
    3104 => 165, //Leatherworking
    3811 => 165, //Leatherworking
    3753 => 165, //Handstitched Leather Belt
    3756 => 165, //Embossed Leather Gloves
    3759 => 165, //Embossed Leather Pants
    3760 => 165, //Hillman's Cloak
    3761 => 165, //Fine Leather Tunic
    3762 => 165, //Hillman's Leather Vest
    3763 => 165, //Fine Leather Belt
    3764 => 165, //Hillman's Leather Gloves
    3765 => 165, //Dark Leather Gloves
    3766 => 165, //Dark Leather Belt
    3767 => 165, //Hillman's Belt
    3768 => 165, //Hillman's Shoulders
    3769 => 165, //Dark Leather Shoulders
    3770 => 165, //Toughened Leather Gloves
    3771 => 165, //Barbaric Gloves
    3772 => 165, //Green Leather Armor
    3773 => 165, //Guardian Armor
    3774 => 165, //Green Leather Belt
    3775 => 165, //Guardian Belt
    3776 => 165, //Green Leather Bracers
    3777 => 165, //Guardian Leather Bracers
    3778 => 165, //Gem-studded Leather Belt
    3779 => 165, //Barbaric Belt
    3816 => 165, //Cured Light Hide
    3817 => 165, //Cured Medium Hide
    3818 => 165, //Cured Heavy Hide
    3780 => 165, //Heavy Armor Kit
    4097 => 165, //Raptor Hide Belt
    4096 => 165, //Raptor Hide Harness
    5244 => 165, //Kodo Hide Bag
    6661 => 165, //Barbaric Harness
    6702 => 165, //Murloc Scale Belt
    6705 => 165, //Murloc Scale Bracers
    6703 => 165, //Murloc Scale Breastplate
    6704 => 165, //Thick Murloc Armor
    7126 => 165, //Handstitched Leather Vest
    7133 => 165, //Fine Leather Pants
    7135 => 165, //Dark Leather Pants
    7147 => 165, //Guardian Pants
    7149 => 165, //Barbaric Leggings
    7151 => 165, //Barbaric Shoulders
    7153 => 165, //Guardian Cloak
    7156 => 165, //Guardian Gloves
    7955 => 165, //Deviate Scale Belt
    7953 => 165, //Deviate Scale Cloak
    7954 => 165, //Deviate Scale Gloves
    8322 => 165, //Moonglow Vest
    9058 => 165, //Handstitched Leather Cloak
    9059 => 165, //Handstitched Leather Bracers
    9060 => 165, //Light Leather Quiver
    9062 => 165, //Small Leather Ammo Pouch
    9064 => 165, //Rugged Leather Pants
    9065 => 165, //Light Leather Bracers
    9068 => 165, //Light Leather Pants
    9070 => 165, //Black Whelp Cloak
    9072 => 165, //Red Whelp Gloves
    9074 => 165, //Nimble Leather Gloves
    9145 => 165, //Fletcher's Gloves
    9146 => 165, //Herbalist's Gloves
    9147 => 165, //Earthen Leather Shoulders
    9148 => 165, //Pilferer's Gloves
    9149 => 165, //Heavy Earthen Gloves
    9193 => 165, //Heavy Quiver
    9194 => 165, //Heavy Leather Ammo Pouch
    9195 => 165, //Dusky Leather Leggings
    9196 => 165, //Dusky Leather Armor
    9197 => 165, //Green Whelp Armor
    9198 => 165, //Frost Leather Cloak
    9201 => 165, //Dusky Bracers
    9202 => 165, //Green Whelp Bracers
    9206 => 165, //Dusky Belt
    9207 => 165, //Dusky Boots
    9208 => 165, //Swift Boots
    10482 => 165, //Cured Thick Hide
    10487 => 165, //Thick Armor Kit
    10490 => 165, //Comfortable Leather Hat
    10499 => 165, //Nightscape Tunic
    10507 => 165, //Nightscape Headband
    10509 => 165, //Turtle Scale Gloves
    10511 => 165, //Turtle Scale Breastplate
    10516 => 165, //Nightscape Shoulders
    10518 => 165, //Turtle Scale Bracers
    10520 => 165, //Big Voodoo Robe
    10525 => 165, //Tough Scorpid Breastplate
    10529 => 165, //Wild Leather Shoulders
    10531 => 165, //Big Voodoo Mask
    10533 => 165, //Tough Scorpid Bracers
    10542 => 165, //Tough Scorpid Gloves
    10544 => 165, //Wild Leather Vest
    10546 => 165, //Wild Leather Helmet
    10619 => 165, //Dragonscale Gauntlets
    10621 => 165, //Wolfshead Helm
    10548 => 165, //Nightscape Pants
    10550 => 165, //Nightscape Cloak
    10552 => 165, //Turtle Scale Helm
    10630 => 165, //Gauntlets of the Sea
    10554 => 165, //Tough Scorpid Boots
    10556 => 165, //Turtle Scale Leggings
    10558 => 165, //Nightscape Boots
    10560 => 165, //Big Voodoo Pants
    10562 => 165, //Big Voodoo Cloak
    10564 => 165, //Tough Scorpid Shoulders
    10566 => 165, //Wild Leather Boots
    10568 => 165, //Tough Scorpid Leggings
    10570 => 165, //Tough Scorpid Helm
    10572 => 165, //Wild Leather Leggings
    10574 => 165, //Wild Leather Cloak
    10632 => 165, //Helm of Fire
    10647 => 165, //Feathered Breastplate
    10650 => 165, //Dragonscale Breastplate
    10656 => 165, //Dragonscale Leatherworking
    10660 => 165, //Tribal Leatherworking
    10658 => 165, //Elemental Leatherworking
    10662 => 165, //Leatherworking
    14930 => 165, //Quickdraw Quiver
    14932 => 165, //Thick Leather Ammo Pouch
    19047 => 165, //Cured Rugged Hide
    19058 => 165, //Rugged Armor Kit
    19048 => 165, //Heavy Scorpid Bracers
    19049 => 165, //Wicked Leather Gauntlets
    19050 => 165, //Green Dragonscale Breastplate
    19051 => 165, //Heavy Scorpid Vest
    19052 => 165, //Wicked Leather Bracers
    19053 => 165, //Chimeric Gloves
    19054 => 165, //Red Dragonscale Breastplate
    19055 => 165, //Runic Leather Gauntlets
    19059 => 165, //Volcanic Leggings
    19060 => 165, //Green Dragonscale Leggings
    19061 => 165, //Living Shoulders
    19062 => 165, //Ironfeather Shoulders
    19063 => 165, //Chimeric Boots
    19064 => 165, //Heavy Scorpid Gauntlets
    19065 => 165, //Runic Leather Bracers
    19066 => 165, //Frostsaber Boots
    19067 => 165, //Stormshroud Pants
    19068 => 165, //Warbear Harness
    19070 => 165, //Heavy Scorpid Belt
    19071 => 165, //Wicked Leather Headband
    19072 => 165, //Runic Leather Belt
    19073 => 165, //Chimeric Leggings
    19074 => 165, //Frostsaber Leggings
    19075 => 165, //Heavy Scorpid Leggings
    19076 => 165, //Volcanic Breastplate
    19077 => 165, //Blue Dragonscale Breastplate
    19078 => 165, //Living Leggings
    19079 => 165, //Stormshroud Armor
    19080 => 165, //Warbear Woolies
    19081 => 165, //Chimeric Vest
    19085 => 165, //Black Dragonscale Breastplate
    19084 => 165, //Devilsaur Gauntlets
    19086 => 165, //Ironfeather Breastplate
    19082 => 165, //Runic Leather Headband
    19083 => 165, //Wicked Leather Pants
    19089 => 165, //Blue Dragonscale Shoulders
    19087 => 165, //Frostsaber Gloves
    19088 => 165, //Heavy Scorpid Helm
    19090 => 165, //Stormshroud Shoulders
    19094 => 165, //Black Dragonscale Shoulders
    19097 => 165, //Devilsaur Leggings
    19095 => 165, //Living Breastplate
    19093 => 165, //Onyxia Scale Cloak
    19091 => 165, //Runic Leather Pants
    19092 => 165, //Wicked Leather Belt
    19100 => 165, //Heavy Scorpid Shoulders
    19102 => 165, //Runic Leather Armor
    19101 => 165, //Volcanic Shoulders
    19098 => 165, //Wicked Leather Armor
    19107 => 165, //Black Dragonscale Leggings
    19104 => 165, //Frostsaber Tunic
    19106 => 165, //Onyxia Scale Breastplate
    19103 => 165, //Runic Leather Shoulders
    20648 => 165, //Medium Leather
    20649 => 165, //Heavy Leather
    20650 => 165, //Thick Leather
    20853 => 165, //Corehound Boots
    20854 => 165, //Molten Helm
    20855 => 165, //Black Dragonscale Boots
    21943 => 165, //Gloves of the Greatfather
    22331 => 165, //Rugged Leather
    22711 => 165, //Shadowskin Gloves
    22727 => 165, //Core Armor Kit
    22815 => 165, //Gordok Ogre Suit
    22921 => 165, //Girdle of Insight
    22922 => 165, //Mongoose Boots
    22923 => 165, //Swift Flight Bracers
    22926 => 165, //Chromatic Cloak
    22927 => 165, //Hide of the Wild
    22928 => 165, //Shifting Cloak
    23190 => 165, //Heavy Leather Ball
    23399 => 165, //Barbaric Bracers
    23703 => 165, //Might of the Timbermaw
    23705 => 165, //Dawn Treaders
    23704 => 165, //Timbermaw Brawlers
    23706 => 165, //Golden Mantle of the Dawn
    23707 => 165, //Lava Belt
    23708 => 165, //Chromatic Gauntlets
    23709 => 165, //Corehound Belt
    23710 => 165, //Molten Belt
    24124 => 165, //Blood Tiger Breastplate
    24125 => 165, //Blood Tiger Shoulders
    24123 => 165, //Primal Batskin Bracers
    24122 => 165, //Primal Batskin Gloves
    24121 => 165, //Primal Batskin Jerkin
    24655 => 165, //Green Dragonscale Gauntlets
    24654 => 165, //Blue Dragonscale Leggings
    24846 => 165, //Spitfire Bracers
    24847 => 165, //Spitfire Gauntlets
    24848 => 165, //Spitfire Breastplate
    24849 => 165, //Sandstalker Bracers
    24850 => 165, //Sandstalker Gauntlets
    24851 => 165, //Sandstalker Breastplate
    24940 => 165, //Black Whelp Tunic
    24703 => 165, //Dreamscale Breastplate
    26279 => 165, //Stormshroud Gloves
    28224 => 165, //Icy Scale Bracers
    28222 => 165, //Icy Scale Breastplate
    28223 => 165, //Icy Scale Gauntlets
    28221 => 165, //Polar Bracers
    28220 => 165, //Polar Gloves
    28219 => 165, //Polar Tunic
    28474 => 165, //Bramblewood Belt
    28473 => 165, //Bramblewood Boots
    28472 => 165, //Bramblewood Helm
    32454 => 165, //Knothide Leather
    32455 => 165, //Heavy Knothide Leather
    32456 => 165, //Knothide Armor Kit
    32457 => 165, //Vindicator's Armor Kit
    32458 => 165, //Magister's Armor Kit
    32461 => 165, //Riding Crop
    32462 => 165, //Felscale Gloves
    32463 => 165, //Felscale Boots
    32464 => 165, //Felscale Pants
    32465 => 165, //Felscale Breastplate
    32466 => 165, //Scaled Draenic Pants
    32467 => 165, //Scaled Draenic Gloves
    32468 => 165, //Scaled Draenic Vest
    32469 => 165, //Scaled Draenic Boots
    32470 => 165, //Thick Draenic Gloves
    32471 => 165, //Thick Draenic Pants
    32472 => 165, //Thick Draenic Boots
    32473 => 165, //Thick Draenic Vest
    32478 => 165, //Wild Draenish Boots
    32479 => 165, //Wild Draenish Gloves
    32480 => 165, //Wild Draenish Leggings
    32481 => 165, //Wild Draenish Vest
    32482 => 165, //Comfortable Insoles
    32485 => 165, //Stylin' Purple Hat
    32487 => 165, //Stylin' Adventure Hat
    32489 => 165, //Stylin' Jungle Hat
    32488 => 165, //Stylin' Crimson Hat
    32490 => 165, //Fel Leather Gloves
    32493 => 165, //Fel Leather Boots
    32494 => 165, //Fel Leather Leggings
    32495 => 165, //Heavy Clefthoof Vest
    32496 => 165, //Heavy Clefthoof Leggings
    32497 => 165, //Heavy Clefthoof Boots
    32498 => 165, //Felstalker Belt
    32499 => 165, //Felstalker Bracer
    32500 => 165, //Felstalker Breastplate
    32501 => 165, //Netherfury Belt
    32502 => 165, //Netherfury Leggings
    32503 => 165, //Netherfury Boots
    32549 => 165, //Leatherworking
    35530 => 165, //Reinforced Mining Bag
    35520 => 165, //Shadow Armor Kit
    35521 => 165, //Flame Armor Kit
    35522 => 165, //Frost Armor Kit
    35523 => 165, //Nature Armor Kit
    35524 => 165, //Arcane Armor Kit
    35527 => 165, //Enchanted Felscale Boots
    35526 => 165, //Enchanted Felscale Gloves
    35525 => 165, //Enchanted Felscale Leggings
    35531 => 165, //Flamescale Belt
    35528 => 165, //Flamescale Boots
    35529 => 165, //Flamescale Leggings
    35534 => 165, //Enchanted Clefthoof Boots
    35533 => 165, //Enchanted Clefthoof Gloves
    35532 => 165, //Enchanted Clefthoof Leggings
    35537 => 165, //Blastguard Belt
    35536 => 165, //Blastguard Boots
    35535 => 165, //Blastguard Pants
    35538 => 165, //Drums of Panic
    35539 => 165, //Drums of Restoration
    35540 => 165, //Drums of War
    35543 => 165, //Drums of Battle
    35544 => 165, //Drums of Speed
    35549 => 165, //Cobrahide Leg Armor
    35555 => 165, //Clefthide Leg Armor
    35554 => 165, //Nethercobra Leg Armor
    35557 => 165, //Nethercleft Leg Armor
    35559 => 165, //Cobrascale Gloves
    35558 => 165, //Cobrascale Hood
    35567 => 165, //Earthen Netherscale Boots
    35562 => 165, //Gloves of the Living Touch
    35561 => 165, //Hood of Primal Life
    35564 => 165, //Living Dragonscale Helm
    35573 => 165, //Netherdrake Gloves
    35572 => 165, //Netherdrake Helm
    35574 => 165, //Thick Netherscale Breastplate
    35563 => 165, //Windslayer Wraps
    35560 => 165, //Windscale Hood
    35568 => 165, //Windstrike Gloves
    35576 => 165, //Ebon Netherscale Belt
    35577 => 165, //Ebon Netherscale Bracers
    35575 => 165, //Ebon Netherscale Breastplate
    35582 => 165, //Netherstrike Belt
    35584 => 165, //Netherstrike Bracers
    35580 => 165, //Netherstrike Breastplate
    35590 => 165, //Primalstrike Belt
    35591 => 165, //Primalstrike Bracers
    35589 => 165, //Primalstrike Vest
    35587 => 165, //Windhawk Belt
    35588 => 165, //Windhawk Bracers
    35585 => 165, //Windhawk Hauberk
    36074 => 165, //Blackstorm Leggings
    36076 => 165, //Dragonstrike Leggings
    36075 => 165, //Wildfeather Leggings
    36079 => 165, //Golden Dragonstrike Breastplate
    36078 => 165, //Living Crystal Breastplate
    36077 => 165, //Primalstorm Breastplate
    36349 => 165, //Belt of Natural Power
    36351 => 165, //Belt of Deep Shadow
    36352 => 165, //Belt of the Black Eagle
    36353 => 165, //Monsoon Belt
    36355 => 165, //Boots of Natural Grace
    36357 => 165, //Boots of Utter Darkness
    36358 => 165, //Boots of the Crimson Hawk
    36359 => 165, //Hurricane Boots
    39997 => 165, //Boots of Shackled Souls
    40001 => 165, //Greaves of Shackled Souls
    40002 => 165, //Waistguard of Shackled Souls
    40006 => 165, //Redeemed Soul Cinch
    40005 => 165, //Redeemed Soul Legguards
    40003 => 165, //Redeemed Soul Moccasins
    40004 => 165, //Redeemed Soul Wristguards
    41161 => 165, //Bindings of Lightning Reflexes
    41156 => 165, //Bracers of Renewed Life
    41163 => 165, //Living Earth Bindings
    41164 => 165, //Living Earth Shoulders
    41157 => 165, //Shoulderpads of Renewed Life
    41162 => 165, //Shoulders of Lightning Reflexes
    41158 => 165, //Swiftstrike Bracers
    41160 => 165, //Swiftstrike Shoulders
    42546 => 165, //Cloak of Darkness
    42731 => 165, //Shadowprowler's Chestguard
    44344 => 165, //Knothide Quiver
    44343 => 165, //Knothide Ammo Pouch
    44359 => 165, //Quiver of a Thousand Feathers
    44768 => 165, //Netherscale Ammo Pouch
    44770 => 165, //Glove Reinforcements
    44970 => 165, //Heavy Knothide Armor Kit
    44953 => 165, //Winter Boots
    45100 => 165, //Leatherworker's Satchel
    45117 => 165, //Bag of Many Hides
    46137 => 165, //Embrace of the Phoenix
    46138 => 165, //Carapace of Sun and Shadow
    46133 => 165, //Fletcher's Gloves of the Phoenix
    46134 => 165, //Gloves of Immortal Dusk
    46135 => 165, //Sun-Drenched Scale Gloves
    46139 => 165, //Sun-Drenched Scale Chestguard
    46136 => 165, //Leather Chestguard of the Sun
    46132 => 165, //Leather Gauntlets of the Sun
    50936 => 165, //Heavy Borean Leather
    50962 => 165, //Borean Armor Kit
    50949 => 165, //Arctic Belt
    50955 => 165, //Frostscale Belt
    50943 => 165, //Iceborne Belt
    51302 => 165, //Leatherworking
    50963 => 165, //Heavy Borean Armor Kit
    50948 => 165, //Arctic Boots
    50944 => 165, //Arctic Chestpiece
    50945 => 165, //Arctic Leggings
    50947 => 165, //Arctic Gloves
    50946 => 165, //Arctic Shoulderpads
    51571 => 165, //Arctic Wristguards
    52733 => 165, //Bracers of Shackled Souls
    55199 => 165, //Cloak of Tormented Skies
    55243 => 165, //Bracers of Deflection
    57683 => 165, //Fur Lining - Attack Power
    57699 => 165, //Fur Lining - Nature Resist
    57691 => 165, //Fur Lining - Spell Power
    57694 => 165, //Fur Lining - Frost Resist
    57692 => 165, //Fur Lining - Fire Resist
    57690 => 165, //Fur Lining - Stamina
    57701 => 165, //Fur Lining - Arcane Resist
    57696 => 165, //Fur Lining - Shadow Resist
    60583 => 165, //Jormungar Leg Reinforcements
    60584 => 165, //Nerubian Leg Reinforcements
    50967 => 165, //Icescale Leg Armor
    50965 => 165, //Frosthide Leg Armor
    51572 => 165, //Arctic Helm
    51570 => 165, //Dark Arctic Chestpiece
    51569 => 165, //Dark Arctic Leggings
    51568 => 165, //Black Chitinguard Boots
    50951 => 165, //Frostscale Leggings
    50950 => 165, //Frostscale Chestguard
    50952 => 165, //Frostscale Shoulders
    50953 => 165, //Frostscale Gloves
    50954 => 165, //Frostscale Boots
    60599 => 165, //Frostscale Bracers
    60600 => 165, //Frostscale Helm
    60601 => 165, //Dark Frostscale Leggings
    60604 => 165, //Dark Frostscale Breastplate
    60605 => 165, //Dragonstompers
    50941 => 165, //Iceborne Gloves
    50939 => 165, //Iceborne Leggings
    50938 => 165, //Iceborne Chestguard
    50942 => 165, //Iceborne Boots
    50940 => 165, //Iceborne Shoulderpads
    60607 => 165, //Iceborne Wristguards
    60608 => 165, //Iceborne Helm
    60611 => 165, //Dark Iceborne Leggings
    60613 => 165, //Dark Iceborne Chestguard
    60620 => 165, //Bugsquashers
    50957 => 165, //Nerubian Legguards
    50959 => 165, //Nerubian Gloves
    50956 => 165, //Nerubian Chestguard
    50961 => 165, //Nerubian Belt
    50960 => 165, //Nerubian Boots
    50958 => 165, //Nerubian Shoulders
    60622 => 165, //Nerubian Bracers
    60624 => 165, //Nerubian Helm
    60627 => 165, //Dark Nerubian Leggings
    60629 => 165, //Dark Nerubian Chestpiece
    60630 => 165, //Scaled Icewalkers
    60631 => 165, //Cloak of Harsh Winds
    60637 => 165, //Ice Striker's Cloak
    60640 => 165, //Durable Nerubhide Cape
    50966 => 165, //Nerubian Leg Armor
    50964 => 165, //Jormungar Leg Armor
    50970 => 165, //Trapper's Traveling Pack
    50971 => 165, //Mammoth Mining Bag
    60643 => 165, //Pack of Endless Pockets
    60645 => 165, //Dragonscale Ammo Pouch
    60647 => 165, //Nerubian Reinforced Quiver
    60649 => 165, //Razorstrike Breastplate
    60651 => 165, //Virulent Spaulders
    60652 => 165, //Eaglebane Bracers
    60655 => 165, //Nightshock Hood
    60658 => 165, //Nightshock Girdle
    60660 => 165, //Leggings of Visceral Strikes
    60665 => 165, //Seafoam Gauntlets
    60666 => 165, //Jormscale Footpads
    60669 => 165, //Wildscale Breastplate
    60671 => 165, //Purehorn Spaulders
    60697 => 165, //Eviscerator's Facemask
    60702 => 165, //Eviscerator's Shoulderpads
    60703 => 165, //Eviscerator's Chestguard
    60704 => 165, //Eviscerator's Bindings
    60705 => 165, //Eviscerator's Gauntlets
    60706 => 165, //Eviscerator's Waistguard
    60711 => 165, //Eviscerator's Legguards
    60712 => 165, //Eviscerator's Treads
    60715 => 165, //Overcast Headguard
    60716 => 165, //Overcast Spaulders
    60718 => 165, //Overcast Chestguard
    60720 => 165, //Overcast Bracers
    60721 => 165, //Overcast Handwraps
    60723 => 165, //Overcast Belt
    60725 => 165, //Overcast Leggings
    60727 => 165, //Overcast Boots
    60728 => 165, //Swiftarrow Helm
    60729 => 165, //Swiftarrow Shoulderguards
    60730 => 165, //Swiftarrow Hauberk
    60731 => 165, //Swiftarrow Bracers
    60732 => 165, //Swiftarrow Gauntlets
    60734 => 165, //Swiftarrow Belt
    60735 => 165, //Swiftarrow Leggings
    60737 => 165, //Swiftarrow Boots
    60743 => 165, //Stormhide Crown
    60746 => 165, //Stormhide Shoulders
    60747 => 165, //Stormhide Hauberk
    60748 => 165, //Stormhide Wristguards
    60749 => 165, //Stormhide Grips
    60750 => 165, //Stormhide Belt
    60751 => 165, //Stormhide Legguards
    60752 => 165, //Stormhide Stompers
    60754 => 165, //Giantmaim Legguards
    60755 => 165, //Giantmaim Bracers
    60756 => 165, //Revenant's Breastplate
    60757 => 165, //Revenant's Treads
    60758 => 165, //Trollwoven Spaulders
    60759 => 165, //Trollwoven Girdle
    60761 => 165, //Earthgiving Boots
    60760 => 165, //Earthgiving Legguards
    60998 => 165, //Polar Boots
    60997 => 165, //Polar Cord
    60996 => 165, //Polar Vest
    61000 => 165, //Icy Scale Belt
    61002 => 165, //Icy Scale Boots
    60999 => 165, //Icy Scale Chestguard
    62176 => 165, //Windripper Boots
    62177 => 165, //Windripper Leggings
    62448 => 165, //Earthen Leg Armor
    63194 => 165, //Belt of Dragons
    63195 => 165, //Boots of Living Scale
    63196 => 165, //Blue Belt of Chaos
    63201 => 165, //Boots of Wintry Endurance
    63198 => 165, //Death-warmed Belt
    63199 => 165, //Footpads of Silence
    63200 => 165, //Belt of Arctic Life
    63197 => 165, //Lightning Grounded Boots
    64661 => 165, //Borean Leather
    67080 => 165, //Ensorcelled Nerubian Breastplate
    67081 => 165, //Black Chitin Bracers
    67087 => 165, //Bracers of Swift Death
    67086 => 165, //Knightbane Carapace
    67085 => 165, //Moonshadow Armguards
    67084 => 165, //Lunar Eclipse Robes
    67083 => 165, //Crusader's Dragonscale Bracers
    67082 => 165, //Crusader's Dragonscale Breastplate
    67136 => 165, //Ensorcelled Nerubian Breastplate
    67142 => 165, //Knightbane Carapace
    67141 => 165, //Moonshadow Armguards
    67140 => 165, //Lunar Eclipse Robes
    67139 => 165, //Bracers of Swift Death
    67138 => 165, //Crusader's Dragonscale Breastplate
    67137 => 165, //Black Chitin Bracers
    67143 => 165, //Crusader's Dragonscale Bracers
    69386 => 165, //Drums of Forgotten Kings
    69388 => 165, //Drums of the Wild
    70554 => 165, //Legwraps of Unleashed Nature
    70555 => 165, //Blessed Cenarion Boots
    70556 => 165, //Bladeborn Leggings
    70557 => 165, //Footpads of Impending Death
    70558 => 165, //Lightning-Infused Leggings
    70559 => 165, //Earthsoul Boots
    70560 => 165, //Draconic Bonesplinter Legguards
    70561 => 165, //Rock-Steady Treads
    2259 => 171, //Alchemy
    2330 => 171, //Minor Healing Potion
    2329 => 171, //Elixir of Lion's Strength
    2331 => 171, //Minor Mana Potion
    2332 => 171, //Minor Rejuvenation Potion
    2334 => 171, //Elixir of Minor Fortitude
    2335 => 171, //Swiftness Potion
    2336 => 171, //Elixir of Tongues
    2337 => 171, //Lesser Healing Potion
    3101 => 171, //Alchemy
    3171 => 171, //Elixir of Wisdom
    3172 => 171, //Minor Magic Resistance Potion
    3173 => 171, //Lesser Mana Potion
    3174 => 171, //Potion of Curing
    3176 => 171, //Strong Troll's Blood Elixir
    3177 => 171, //Elixir of Defense
    2333 => 171, //Elixir of Lesser Agility
    3188 => 171, //Elixir of Ogre's Strength
    3170 => 171, //Weak Troll's Blood Elixir
    3230 => 171, //Elixir of Minor Agility
    3447 => 171, //Healing Potion
    3448 => 171, //Lesser Invisibility Potion
    3449 => 171, //Shadow Oil
    3450 => 171, //Elixir of Fortitude
    3451 => 171, //Major Troll's Blood Elixir
    3452 => 171, //Mana Potion
    3453 => 171, //Elixir of Detect Lesser Invisibility
    3454 => 171, //Frost Oil
    3464 => 171, //Alchemy
    4508 => 171, //Discolored Healing Potion
    4942 => 171, //Lesser Stoneshield Potion
    6624 => 171, //Free Action Potion
    6618 => 171, //Great Rage Potion
    6617 => 171, //Rage Potion
    7179 => 171, //Elixir of Water Breathing
    7181 => 171, //Greater Healing Potion
    7183 => 171, //Elixir of Minor Defense
    7257 => 171, //Fire Protection Potion
    7258 => 171, //Frost Protection Potion
    7255 => 171, //Holy Protection Potion
    7259 => 171, //Nature Protection Potion
    7256 => 171, //Shadow Protection Potion
    7836 => 171, //Blackmouth Oil
    7837 => 171, //Fire Oil
    7841 => 171, //Swim Speed Potion
    7845 => 171, //Elixir of Firepower
    8240 => 171, //Elixir of Giant Growth
    11449 => 171, //Elixir of Agility
    11450 => 171, //Elixir of Greater Defense
    11451 => 171, //Oil of Immolation
    11448 => 171, //Greater Mana Potion
    11452 => 171, //Restorative Potion
    11453 => 171, //Magic Resistance Potion
    11456 => 171, //Goblin Rocket Fuel
    11457 => 171, //Superior Healing Potion
    11458 => 171, //Wildvine Potion
    11459 => 171, //Philosopher's Stone
    11460 => 171, //Elixir of Detect Undead
    11461 => 171, //Arcane Elixir
    11464 => 171, //Invisibility Potion
    11465 => 171, //Elixir of Greater Intellect
    11466 => 171, //Gift of Arthas
    11467 => 171, //Elixir of Greater Agility
    11468 => 171, //Elixir of Dream Vision
    11472 => 171, //Elixir of Giants
    11473 => 171, //Ghost Dye
    11476 => 171, //Elixir of Shadow Power
    11477 => 171, //Elixir of Demonslaying
    11478 => 171, //Elixir of Detect Demon
    11479 => 171, //Transmute: Iron to Gold
    11480 => 171, //Transmute: Mithril to Truesilver
    11611 => 171, //Alchemy
    12609 => 171, //Catseye Elixir
    15833 => 171, //Dreamless Sleep Potion
    17187 => 171, //Transmute: Arcanite
    17551 => 171, //Stonescale Oil
    17552 => 171, //Mighty Rage Potion
    17553 => 171, //Superior Mana Potion
    17554 => 171, //Elixir of Superior Defense
    17555 => 171, //Elixir of the Sages
    17556 => 171, //Major Healing Potion
    17557 => 171, //Elixir of Brute Force
    17559 => 171, //Transmute: Air to Fire
    17561 => 171, //Transmute: Earth to Water
    17566 => 171, //Transmute: Earth to Life
    17560 => 171, //Transmute: Fire to Earth
    17563 => 171, //Transmute: Undeath to Water
    17562 => 171, //Transmute: Water to Air
    17564 => 171, //Transmute: Water to Undeath
    17565 => 171, //Transmute: Life to Earth
    17570 => 171, //Greater Stoneshield Potion
    17571 => 171, //Elixir of the Mongoose
    17572 => 171, //Purification Potion
    17573 => 171, //Greater Arcane Elixir
    17574 => 171, //Greater Fire Protection Potion
    17575 => 171, //Greater Frost Protection Potion
    17576 => 171, //Greater Nature Protection Potion
    17577 => 171, //Greater Arcane Protection Potion
    17578 => 171, //Greater Shadow Protection Potion
    17579 => 171, //Greater Holy Protection Potion
    17580 => 171, //Major Mana Potion
    17632 => 171, //Alchemist's Stone
    17634 => 171, //Potion of Petrification
    17635 => 171, //Flask of the Titans
    17636 => 171, //Flask of Distilled Wisdom
    17637 => 171, //Flask of Supreme Power
    17638 => 171, //Flask of Chromatic Resistance
    3175 => 171, //Limited Invulnerability Potion
    21923 => 171, //Elixir of Frost Power
    22732 => 171, //Major Rejuvenation Potion
    22808 => 171, //Elixir of Greater Water Breathing
    24266 => 171, //Gurubashi Mojo Madness
    24365 => 171, //Mageblood Elixir
    24366 => 171, //Greater Dreamless Sleep Potion
    24367 => 171, //Living Action Potion
    24368 => 171, //Mighty Troll's Blood Elixir
    25146 => 171, //Transmute: Elemental Fire
    26277 => 171, //Elixir of Greater Firepower
    28596 => 171, //Alchemy
    28543 => 171, //Elixir of Camouflage
    28544 => 171, //Elixir of Major Strength
    28545 => 171, //Elixir of Healing Power
    28546 => 171, //Sneaking Potion
    28549 => 171, //Elixir of Major Frost Power
    28550 => 171, //Insane Strength Potion
    28552 => 171, //Elixir of the Searching Eye
    28551 => 171, //Super Healing Potion
    28553 => 171, //Elixir of Major Agility
    28554 => 171, //Shrouding Potion
    28555 => 171, //Super Mana Potion
    28556 => 171, //Elixir of Major Firepower
    28557 => 171, //Elixir of Major Defense
    28558 => 171, //Elixir of Major Shadow Power
    28562 => 171, //Major Dreamless Sleep Potion
    28563 => 171, //Heroic Potion
    28564 => 171, //Haste Potion
    28565 => 171, //Destruction Potion
    28566 => 171, //Transmute: Primal Air to Fire
    28567 => 171, //Transmute: Primal Earth to Water
    28568 => 171, //Transmute: Primal Fire to Earth
    28569 => 171, //Transmute: Primal Water to Air
    28570 => 171, //Elixir of Major Mageblood
    28575 => 171, //Major Arcane Protection Potion
    28571 => 171, //Major Fire Protection Potion
    28572 => 171, //Major Frost Protection Potion
    28577 => 171, //Major Holy Protection Potion
    28573 => 171, //Major Nature Protection Potion
    28576 => 171, //Major Shadow Protection Potion
    28578 => 171, //Elixir of Empowerment
    28579 => 171, //Ironshield Potion
    28585 => 171, //Transmute: Primal Earth to Life
    28583 => 171, //Transmute: Primal Fire to Mana
    28584 => 171, //Transmute: Primal Life to Earth
    28582 => 171, //Transmute: Primal Mana to Fire
    28580 => 171, //Transmute: Primal Shadow to Water
    28581 => 171, //Transmute: Primal Water to Shadow
    28586 => 171, //Super Rejuvenation Potion
    28590 => 171, //Flask of Blinding Light
    28587 => 171, //Flask of Fortification
    28588 => 171, //Flask of Mighty Restoration
    28589 => 171, //Flask of Relentless Assault
    28591 => 171, //Flask of Pure Death
    28677 => 171, //Elixir Master
    28675 => 171, //Potion Master
    28672 => 171, //Transmutation Master
    29688 => 171, //Transmute: Primal Might
    32765 => 171, //Transmute: Earthstorm Diamond
    32766 => 171, //Transmute: Skyfire Diamond
    33732 => 171, //Volatile Healing Potion
    33738 => 171, //Onslaught Elixir
    33740 => 171, //Adept's Elixir
    33733 => 171, //Unstable Mana Potion
    33741 => 171, //Elixir of Mastery
    38070 => 171, //Mercurial Stone
    38960 => 171, //Fel Strength Elixir
    38962 => 171, //Fel Regeneration Potion
    38961 => 171, //Fel Mana Potion
    39636 => 171, //Elixir of Major Fortitude
    39637 => 171, //Earthen Elixir
    39638 => 171, //Elixir of Draenic Wisdom
    39639 => 171, //Elixir of Ironskin
    41458 => 171, //Cauldron of Major Arcane Protection
    41500 => 171, //Cauldron of Major Fire Protection
    41501 => 171, //Cauldron of Major Frost Protection
    41502 => 171, //Cauldron of Major Nature Protection
    41503 => 171, //Cauldron of Major Shadow Protection
    42736 => 171, //Flask of Chromatic Wonder
    45061 => 171, //Mad Alchemist's Potion
    47050 => 171, //Assassin's Alchemist Stone
    47046 => 171, //Guardian's Alchemist Stone
    47049 => 171, //Redeemer's Alchemist Stone
    47048 => 171, //Sorcerer's Alchemist Stone
    51304 => 171, //Alchemy
    53812 => 171, //Pygmy Oil
    53836 => 171, //Runic Healing Potion
    53837 => 171, //Runic Mana Potion
    53838 => 171, //Resurgent Healing Potion
    53840 => 171, //Elixir of Mighty Agility
    53842 => 171, //Spellpower Elixir
    53847 => 171, //Elixir of Spirit
    53895 => 171, //Crazy Alchemist's Potion
    53898 => 171, //Elixir of Mighty Fortitude
    53900 => 171, //Potion of Nightmares
    53905 => 171, //Indestructible Potion
    53904 => 171, //Powerful Rejuvenation Potion
    53903 => 171, //Flask of Endless Rage
    53902 => 171, //Flask of Stoneblood
    53901 => 171, //Flask of the Frost Wyrm
    53899 => 171, //Lesser Flask of Toughness
    53848 => 171, //Guru's Elixir
    53841 => 171, //Wrath Elixir
    53839 => 171, //Icy Mana Potion
    53777 => 171, //Transmute: Eternal Air to Earth
    53776 => 171, //Transmute: Eternal Air to Water
    53781 => 171, //Transmute: Eternal Earth to Air
    53782 => 171, //Transmute: Eternal Earth to Shadow
    53775 => 171, //Transmute: Eternal Fire to Life
    53774 => 171, //Transmute: Eternal Fire to Water
    53773 => 171, //Transmute: Eternal Life to Fire
    53771 => 171, //Transmute: Eternal Life to Shadow
    53779 => 171, //Transmute: Eternal Shadow to Earth
    53780 => 171, //Transmute: Eternal Shadow to Life
    53783 => 171, //Transmute: Eternal Water to Air
    53784 => 171, //Transmute: Eternal Water to Fire
    53942 => 171, //Mighty Nature Protection Potion
    53936 => 171, //Mighty Arcane Protection Potion
    53937 => 171, //Mighty Frost Protection Potion
    53938 => 171, //Mighty Shadow Protection Potion
    53939 => 171, //Mighty Fire Protection Potion
    54020 => 171, //Transmute: Eternal Might
    54213 => 171, //Flask of Pure Mojo
    54218 => 171, //Elixir of Mighty Strength
    54220 => 171, //Elixir of Protection
    54221 => 171, //Potion of Speed
    54222 => 171, //Potion of Wild Magic
    53042 => 171, //Mixology
    56519 => 171, //Elixir of Mighty Mageblood
    57425 => 171, //Transmute: Skyflare Diamond
    57427 => 171, //Transmute: Earthsiege Diamond
    58868 => 171, //Endless Mana Potion
    58871 => 171, //Endless Healing Potion
    60403 => 171, //Indestructible Alchemist Stone
    60396 => 171, //Mercurial Alchemist Stone
    60405 => 171, //Mighty Alchemist Stone
    60354 => 171, //Elixir of Accuracy
    60355 => 171, //Elixir of Deadly Strikes
    60356 => 171, //Elixir of Mighty Defense
    60357 => 171, //Elixir of Expertise
    60365 => 171, //Elixir of Armor Piercing
    60366 => 171, //Elixir of Lightning Speed
    60367 => 171, //Elixir of Mighty Thoughts
    60350 => 171, //Transmute: Titanium
    60893 => 171, //Northrend Alchemy Research
    62213 => 171, //Lesser Flask of Resistance
    62409 => 171, //Ethereal Oil
    62410 => 171, //Elixir of Water Walking
    63732 => 171, //Elixir of Minor Accuracy
    66664 => 171, //Transmute: Eye of Zul
    66658 => 171, //Transmute: Ametrine
    66659 => 171, //Transmute: Cardinal Ruby
    66660 => 171, //Transmute: King's Amber
    66662 => 171, //Transmute: Dreadstone
    66663 => 171, //Transmute: Majestic Zircon
    67025 => 171, //Flask of the North
    197 => 172, //Two-Handed Axes
    1180 => 173, //Daggers
    2366 => 182, //Herb Gathering
    2368 => 182, //Herb Gathering
    2383 => 182, //Find Herbs
    2369 => 182, //Herb Gathering
    2371 => 182, //Herb Gathering
    3570 => 182, //Herb Gathering
    8387 => 182, //Find Herbs
    11993 => 182, //Herb Gathering
    28695 => 182, //Herb Gathering
    32605 => 182, //Herb Gathering
    50300 => 182, //Herb Gathering
    55428 => 182, //Lifeblood
    55480 => 182, //Lifeblood
    55500 => 182, //Lifeblood
    55501 => 182, //Lifeblood
    55502 => 182, //Lifeblood
    55503 => 182, //Lifeblood
    2550 => 185, //Cooking
    2538 => 185, //Charred Wolf Meat
    2539 => 185, //Spiced Wolf Meat
    2540 => 185, //Roasted Boar Meat
    2541 => 185, //Coyote Steak
    2542 => 185, //Goretusk Liver Pie
    2543 => 185, //Westfall Stew
    2544 => 185, //Crab Cake
    2545 => 185, //Cooked Crab Claw
    2546 => 185, //Dry Pork Ribs
    2547 => 185, //Redridge Goulash
    2548 => 185, //Succulent Pork Ribs
    2549 => 185, //Seasoned Wolf Kabob
    2795 => 185, //Beer Basted Boar Ribs
    3102 => 185, //Cooking
    3370 => 185, //Crocolisk Steak
    3371 => 185, //Blood Sausage
    3372 => 185, //Murloc Fin Soup
    3373 => 185, //Crocolisk Gumbo
    3376 => 185, //Curiously Tasty Omelet
    3377 => 185, //Gooey Spider Cake
    3397 => 185, //Big Bear Steak
    3398 => 185, //Hot Lion Chops
    3399 => 185, //Tasty Lion Steak
    3400 => 185, //Soothing Turtle Bisque
    3413 => 185, //Cooking
    4094 => 185, //Barbecued Buzzard Wing
    6412 => 185, //Kaldorei Spider Kabob
    6413 => 185, //Scorpid Surprise
    6414 => 185, //Roasted Kodo Meat
    6415 => 185, //Fillet of Frenzy
    6416 => 185, //Strider Stew
    6417 => 185, //Dig Rat Stew
    6418 => 185, //Crispy Lizard Tail
    6419 => 185, //Lean Venison
    6501 => 185, //Clam Chowder
    6500 => 185, //Goblin Deviled Clams
    6499 => 185, //Boiled Clams
    7213 => 185, //Giant Clam Scorcho
    7751 => 185, //Brilliant Smallfish
    7752 => 185, //Slitherskin Mackerel
    7753 => 185, //Longjaw Mud Snapper
    7754 => 185, //Loch Frenzy Delight
    7755 => 185, //Bristle Whisker Catfish
    7827 => 185, //Rainbow Fin Albacore
    7828 => 185, //Rockscale Cod
    8238 => 185, //Savory Deviate Delight
    8604 => 185, //Herb Baked Egg
    8607 => 185, //Smoked Bear Meat
    9513 => 185, //Thistle Tea
    15935 => 185, //Crispy Bat Wing
    15853 => 185, //Lean Wolf Steak
    15855 => 185, //Roast Raptor
    15856 => 185, //Hot Wolf Ribs
    15861 => 185, //Jungle Stew
    15863 => 185, //Carrion Surprise
    15865 => 185, //Mystery Stew
    15906 => 185, //Dragonbreath Chili
    15910 => 185, //Heavy Kodo Stew
    15915 => 185, //Spiced Chili Crab
    15933 => 185, //Monster Omelet
    818 => 185, //Basic Campfire
    18239 => 185, //Cooked Glossy Mightfish
    18238 => 185, //Spotted Yellowtail
    18241 => 185, //Filet of Redgill
    18240 => 185, //Grilled Squid
    18242 => 185, //Hot Smoked Bass
    18243 => 185, //Nightfin Soup
    18244 => 185, //Poached Sunscale Salmon
    18245 => 185, //Lobster Stew
    18246 => 185, //Mightfish Steak
    18247 => 185, //Baked Salmon
    18260 => 185, //Cooking
    20626 => 185, //Undermine Clam Chowder
    20916 => 185, //Mithril Head Trout
    21144 => 185, //Egg Nog
    21143 => 185, //Gingerbread Cookie
    21175 => 185, //Spider Sausage
    22480 => 185, //Tender Wolf Steak
    22761 => 185, //Runn Tum Tuber Surprise
    24418 => 185, //Heavy Crocolisk Stew
    24801 => 185, //Smoked Desert Dumplings
    25659 => 185, //Dirge's Kickin' Chimaerok Chops
    25704 => 185, //Smoked Sagefish
    25954 => 185, //Sagefish Delight
    28267 => 185, //Crunchy Spider Surprise
    33276 => 185, //Lynx Steak
    33277 => 185, //Roasted Moongraze Tenderloin
    33278 => 185, //Bat Bites
    33279 => 185, //Buzzard Bites
    33284 => 185, //Ravager Dog
    33285 => 185, //Sporeling Snack
    33286 => 185, //Blackened Basilisk
    33287 => 185, //Roasted Clefthoof
    33288 => 185, //Warp Burger
    33289 => 185, //Talbuk Steak
    33290 => 185, //Blackened Trout
    33291 => 185, //Feltail Delight
    33292 => 185, //Blackened Sporefish
    33293 => 185, //Grilled Mudfish
    33294 => 185, //Poached Bluefish
    33295 => 185, //Golden Fish Sticks
    33296 => 185, //Spicy Crawdad
    33359 => 185, //Cooking
    36210 => 185, //Clam Bar
    37836 => 185, //Spice Bread
    38868 => 185, //Crunchy Serpent
    38867 => 185, //Mok'Nathal Shortribs
    42296 => 185, //Stewed Trout
    42302 => 185, //Fisherman's Feast
    42305 => 185, //Hot Buttered Trout
    43707 => 185, //Skullfish Soup
    43758 => 185, //Stormchops
    43761 => 185, //Broiled Bloodfin
    43765 => 185, //Spicy Hot Talbuk
    43779 => 185, //Delicious Chocolate Cake
    45022 => 185, //Hot Apple Cider
    43772 => 185, //Kibler's Bits
    13028 => 185, //Goldthorn Tea
    45695 => 185, //Captain Rumsey's Lager
    46684 => 185, //Charred Bear Kabobs
    46688 => 185, //Juicy Bear Burger
    51296 => 185, //Cooking
    53056 => 185, //Kungaloosh
    45560 => 185, //Smoked Rockfin
    45561 => 185, //Grilled Bonescale
    45562 => 185, //Sauteed Goby
    45563 => 185, //Grilled Sculpin
    45564 => 185, //Smoked Salmon
    45565 => 185, //Poached Nettlefish
    45569 => 185, //Baked Manta Ray
    45566 => 185, //Pickled Fangtooth
    57421 => 185, //Northern Stew
    45549 => 185, //Mammoth Meal
    45550 => 185, //Shoveltusk Steak
    45551 => 185, //Worm Delight
    45552 => 185, //Roasted Worg
    45553 => 185, //Rhino Dogs
    45554 => 185, //Great Feast
    57423 => 185, //Fish Feast
    45555 => 185, //Mega Mammoth Meal
    45556 => 185, //Tender Shoveltusk Steak
    45557 => 185, //Spiced Worm Burger
    45558 => 185, //Very Burnt Worg
    45559 => 185, //Mighty Rhino Dogs
    45567 => 185, //Poached Northern Sculpin
    45568 => 185, //Firecracker Salmon
    45571 => 185, //Spicy Blue Nettlefish
    45570 => 185, //Imperial Manta Steak
    57433 => 185, //Spicy Fried Herring
    57434 => 185, //Rhinolicious Wormsteak
    57435 => 185, //Critter Bites
    57436 => 185, //Hearty Rhino
    57437 => 185, //Snapper Extreme
    57438 => 185, //Blackened Worg Steak
    57439 => 185, //Cuttlesteak
    57440 => 185, //Spiced Mammoth Treats
    57441 => 185, //Blackened Dragonfin
    57442 => 185, //Dragonfin Filet
    57443 => 185, //Tracker Snacks
    58065 => 185, //Dalaran Clam Chowder
    58512 => 185, //Tasty Cupcake
    58521 => 185, //Last Week's Mammoth
    58523 => 185, //Bad Clams
    58525 => 185, //Haunted Herring
    58527 => 185, //Gigantic Feast
    58528 => 185, //Small Feast
    62045 => 185, //Slow-Roasted Turkey
    62044 => 185, //Pumpkin Pie
    62051 => 185, //Candied Sweet Potato
    62050 => 185, //Spice Bread Stuffing
    62049 => 185, //Cranberry Chutney
    62350 => 185, //Worg Tartare
    64054 => 185, //Clamlette Magnifique
    64358 => 185, //Black Jelly
    65454 => 185, //Bread of the Dead
    66034 => 185, //Candied Sweet Potato
    66035 => 185, //Cranberry Chutney
    66036 => 185, //Pumpkin Pie
    66037 => 185, //Slow-Roasted Turkey
    66038 => 185, //Spice Bread Stuffing
    2580 => 186, //Find Minerals
    2575 => 186, //Mining
    2576 => 186, //Mining
    2656 => 186, //Smelting
    2658 => 186, //Smelt Silver
    2659 => 186, //Smelt Bronze
    3308 => 186, //Smelt Gold
    3307 => 186, //Smelt Iron
    3304 => 186, //Smelt Tin
    3564 => 186, //Mining
    3569 => 186, //Smelt Steel
    2657 => 186, //Smelt Copper
    8388 => 186, //Find Minerals
    10098 => 186, //Smelt Truesilver
    10097 => 186, //Smelt Mithril
    10248 => 186, //Mining
    14891 => 186, //Smelt Dark Iron
    16153 => 186, //Smelt Thorium
    29354 => 186, //Mining
    29356 => 186, //Smelt Fel Iron
    29358 => 186, //Smelt Adamantite
    29359 => 186, //Smelt Eternium
    29360 => 186, //Smelt Felsteel
    29361 => 186, //Smelt Khorium
    29686 => 186, //Smelt Hardened Adamantite
    32606 => 186, //Mining
    35750 => 186, //Earth Shatter
    35751 => 186, //Fire Sunder
    46353 => 186, //Smelt Hardened Khorium
    49252 => 186, //Smelt Cobalt
    49258 => 186, //Smelt Saronite
    50310 => 186, //Mining
    53040 => 186, //Toughness
    53120 => 186, //Toughness
    53121 => 186, //Toughness
    53122 => 186, //Toughness
    53123 => 186, //Toughness
    53124 => 186, //Toughness
    55208 => 186, //Smelt Titansteel
    55211 => 186, //Smelt Titanium
    22967 => 186, //Smelt Elementium
    70524 => 186, //Enchanted Thorium
    3908 => 197, //Tailoring
    3909 => 197, //Tailoring
    3910 => 197, //Tailoring
    2963 => 197, //Bolt of Linen Cloth
    2387 => 197, //Linen Cloak
    2385 => 197, //Brown Linen Vest
    2389 => 197, //Red Linen Robe
    2386 => 197, //Linen Boots
    2392 => 197, //Red Linen Shirt
    2393 => 197, //White Linen Shirt
    2394 => 197, //Blue Linen Shirt
    2397 => 197, //Reinforced Linen Cape
    2395 => 197, //Barbaric Linen Vest
    2396 => 197, //Green Linen Shirt
    2964 => 197, //Bolt of Woolen Cloth
    2402 => 197, //Woolen Cape
    2399 => 197, //Green Woolen Vest
    2401 => 197, //Woolen Boots
    2403 => 197, //Gray Woolen Robe
    2406 => 197, //Gray Woolen Shirt
    3839 => 197, //Bolt of Silk Cloth
    3865 => 197, //Bolt of Mageweave
    3840 => 197, //Heavy Linen Gloves
    3841 => 197, //Green Linen Bracers
    3842 => 197, //Handstitched Linen Britches
    3843 => 197, //Heavy Woolen Gloves
    3844 => 197, //Heavy Woolen Cloak
    3845 => 197, //Soft-soled Linen Boots
    3847 => 197, //Red Woolen Boots
    3848 => 197, //Double-stitched Woolen Shoulders
    3849 => 197, //Reinforced Woolen Shoulders
    3850 => 197, //Heavy Woolen Pants
    3851 => 197, //Phoenix Pants
    3852 => 197, //Gloves of Meditation
    3854 => 197, //Azure Silk Gloves
    3855 => 197, //Spidersilk Boots
    3856 => 197, //Spider Silk Slippers
    3857 => 197, //Enchanter's Cowl
    3858 => 197, //Shadow Hood
    3859 => 197, //Azure Silk Vest
    3860 => 197, //Boots of the Enchanter
    3861 => 197, //Long Silken Cloak
    3862 => 197, //Icy Cloak
    3863 => 197, //Spider Belt
    3864 => 197, //Star Belt
    3866 => 197, //Stylish Red Shirt
    3868 => 197, //Phoenix Gloves
    3869 => 197, //Bright Yellow Shirt
    3870 => 197, //Dark Silk Shirt
    3871 => 197, //Formal White Shirt
    3872 => 197, //Rich Purple Silk Shirt
    3873 => 197, //Black Swashbuckler's Shirt
    3914 => 197, //Brown Linen Pants
    3915 => 197, //Brown Linen Shirt
    6521 => 197, //Pearl-clasped Cloak
    3758 => 197, //Green Woolen Bag
    3755 => 197, //Linen Bag
    3757 => 197, //Woolen Bag
    3813 => 197, //Small Silk Pack
    6686 => 197, //Red Linen Bag
    6688 => 197, //Red Woolen Bag
    6690 => 197, //Lesser Wizard's Robe
    6692 => 197, //Robes of Arcana
    6693 => 197, //Green Silk Pack
    6695 => 197, //Black Silk Pack
    7623 => 197, //Brown Linen Robe
    7624 => 197, //White Linen Robe
    7630 => 197, //Blue Linen Vest
    7629 => 197, //Red Linen Vest
    7633 => 197, //Blue Linen Robe
    7636 => 197, //Green Woolen Robe
    7639 => 197, //Blue Overalls
    7643 => 197, //Greater Adept's Robe
    7892 => 197, //Stylish Blue Shirt
    7893 => 197, //Stylish Green Shirt
    8465 => 197, //Simple Dress
    8467 => 197, //White Woolen Dress
    8489 => 197, //Red Swashbuckler's Shirt
    8483 => 197, //White Swashbuckler's Shirt
    8776 => 197, //Linen Belt
    8758 => 197, //Azure Silk Pants
    8760 => 197, //Azure Silk Hood
    8762 => 197, //Silk Headband
    8764 => 197, //Earthen Vest
    8766 => 197, //Azure Silk Belt
    8770 => 197, //Robe of Power
    8772 => 197, //Crimson Silk Belt
    8774 => 197, //Green Silken Shoulders
    8778 => 197, //Boots of Darkness
    8780 => 197, //Hands of Darkness
    8782 => 197, //Truefaith Gloves
    8784 => 197, //Green Silk Armor
    8786 => 197, //Azure Silk Cloak
    8789 => 197, //Crimson Silk Cloak
    8791 => 197, //Crimson Silk Vest
    8793 => 197, //Crimson Silk Shoulders
    8795 => 197, //Azure Shoulders
    8797 => 197, //Earthen Silk Belt
    8799 => 197, //Crimson Silk Pantaloons
    8802 => 197, //Crimson Silk Robe
    8804 => 197, //Crimson Silk Gloves
    12044 => 197, //Simple Linen Pants
    12045 => 197, //Simple Linen Boots
    12046 => 197, //Simple Kilt
    12047 => 197, //Colorful Kilt
    12048 => 197, //Black Mageweave Vest
    12049 => 197, //Black Mageweave Leggings
    12050 => 197, //Black Mageweave Robe
    12052 => 197, //Shadoweave Pants
    12053 => 197, //Black Mageweave Gloves
    12055 => 197, //Shadoweave Robe
    12056 => 197, //Red Mageweave Vest
    12059 => 197, //White Bandit Mask
    12060 => 197, //Red Mageweave Pants
    12061 => 197, //Orange Mageweave Shirt
    12062 => 197, //Stormcloth Pants
    12063 => 197, //Stormcloth Gloves
    12064 => 197, //Orange Martial Shirt
    12065 => 197, //Mageweave Bag
    12066 => 197, //Red Mageweave Gloves
    12067 => 197, //Dreamweave Gloves
    12068 => 197, //Stormcloth Vest
    12069 => 197, //Cindercloth Robe
    12070 => 197, //Dreamweave Vest
    12071 => 197, //Shadoweave Gloves
    12072 => 197, //Black Mageweave Headband
    12073 => 197, //Black Mageweave Boots
    12074 => 197, //Black Mageweave Shoulders
    12075 => 197, //Lavender Mageweave Shirt
    12076 => 197, //Shadoweave Shoulders
    12077 => 197, //Simple Black Dress
    12078 => 197, //Red Mageweave Shoulders
    12079 => 197, //Red Mageweave Bag
    12080 => 197, //Pink Mageweave Shirt
    12081 => 197, //Admiral's Hat
    12082 => 197, //Shadoweave Boots
    12083 => 197, //Stormcloth Headband
    12084 => 197, //Red Mageweave Headband
    12085 => 197, //Tuxedo Shirt
    12086 => 197, //Shadoweave Mask
    12087 => 197, //Stormcloth Shoulders
    12088 => 197, //Cindercloth Boots
    12089 => 197, //Tuxedo Pants
    12090 => 197, //Stormcloth Boots
    12091 => 197, //White Wedding Dress
    12092 => 197, //Dreamweave Circlet
    12093 => 197, //Tuxedo Jacket
    12180 => 197, //Tailoring
    18401 => 197, //Bolt of Runecloth
    18402 => 197, //Runecloth Belt
    18403 => 197, //Frostweave Tunic
    18404 => 197, //Frostweave Robe
    18406 => 197, //Runecloth Robe
    18405 => 197, //Runecloth Bag
    18407 => 197, //Runecloth Tunic
    18408 => 197, //Cindercloth Vest
    18409 => 197, //Runecloth Cloak
    18410 => 197, //Ghostweave Belt
    18411 => 197, //Frostweave Gloves
    18412 => 197, //Cindercloth Gloves
    18415 => 197, //Brightcloth Gloves
    18413 => 197, //Ghostweave Gloves
    18414 => 197, //Brightcloth Robe
    18416 => 197, //Ghostweave Vest
    18417 => 197, //Runecloth Gloves
    18418 => 197, //Cindercloth Cloak
    18419 => 197, //Felcloth Pants
    18420 => 197, //Brightcloth Cloak
    18421 => 197, //Wizardweave Leggings
    18422 => 197, //Cloak of Fire
    18423 => 197, //Runecloth Boots
    18424 => 197, //Frostweave Pants
    18434 => 197, //Cindercloth Pants
    18436 => 197, //Robe of Winter Night
    18437 => 197, //Felcloth Boots
    18438 => 197, //Runecloth Pants
    18439 => 197, //Brightcloth Pants
    18440 => 197, //Mooncloth Leggings
    18441 => 197, //Ghostweave Pants
    18442 => 197, //Felcloth Hood
    18444 => 197, //Runecloth Headband
    18445 => 197, //Mooncloth Bag
    18446 => 197, //Wizardweave Robe
    18447 => 197, //Mooncloth Vest
    18448 => 197, //Mooncloth Shoulders
    18449 => 197, //Runecloth Shoulders
    18450 => 197, //Wizardweave Turban
    18451 => 197, //Felcloth Robe
    18452 => 197, //Mooncloth Circlet
    18453 => 197, //Felcloth Shoulders
    18454 => 197, //Gloves of Spell Mastery
    18455 => 197, //Bottomless Bag
    18456 => 197, //Truefaith Vestments
    18457 => 197, //Robe of the Archmage
    18458 => 197, //Robe of the Void
    18560 => 197, //Mooncloth
    19435 => 197, //Mooncloth Boots
    20848 => 197, //Flarecore Mantle
    20849 => 197, //Flarecore Gloves
    21945 => 197, //Green Holiday Shirt
    22759 => 197, //Flarecore Wraps
    22813 => 197, //Gordok Ogre Suit
    22866 => 197, //Belt of the Archmage
    22867 => 197, //Felcloth Gloves
    22868 => 197, //Inferno Gloves
    22869 => 197, //Mooncloth Gloves
    22870 => 197, //Cloak of Warding
    22902 => 197, //Mooncloth Robe
    23662 => 197, //Wisdom of the Timbermaw
    23664 => 197, //Argent Boots
    23663 => 197, //Mantle of the Timbermaw
    23665 => 197, //Argent Shoulders
    23666 => 197, //Flarecore Robe
    23667 => 197, //Flarecore Leggings
    24093 => 197, //Bloodvine Boots
    24092 => 197, //Bloodvine Leggings
    24091 => 197, //Bloodvine Vest
    24902 => 197, //Runed Stygian Belt
    24903 => 197, //Runed Stygian Boots
    24901 => 197, //Runed Stygian Leggings
    26085 => 197, //Soul Pouch
    26086 => 197, //Felcloth Bag
    26087 => 197, //Core Felcloth Bag
    26403 => 197, //Festival Dress
    26407 => 197, //Festive Red Pant Suit
    26745 => 197, //Bolt of Netherweave
    26746 => 197, //Netherweave Bag
    26747 => 197, //Bolt of Imbued Netherweave
    26749 => 197, //Imbued Netherweave Bag
    26750 => 197, //Bolt of Soulcloth
    26751 => 197, //Primal Mooncloth
    26752 => 197, //Spellfire Belt
    26753 => 197, //Spellfire Gloves
    26754 => 197, //Spellfire Robe
    26755 => 197, //Spellfire Bag
    26756 => 197, //Frozen Shadoweave Shoulders
    26757 => 197, //Frozen Shadoweave Boots
    26758 => 197, //Frozen Shadoweave Robe
    26759 => 197, //Ebon Shadowbag
    26760 => 197, //Primal Mooncloth Belt
    26761 => 197, //Primal Mooncloth Shoulders
    26762 => 197, //Primal Mooncloth Robe
    26763 => 197, //Primal Mooncloth Bag
    26764 => 197, //Netherweave Bracers
    26765 => 197, //Netherweave Belt
    26770 => 197, //Netherweave Gloves
    26771 => 197, //Netherweave Pants
    26772 => 197, //Netherweave Boots
    26773 => 197, //Netherweave Robe
    26774 => 197, //Netherweave Tunic
    26775 => 197, //Imbued Netherweave Pants
    26776 => 197, //Imbued Netherweave Boots
    26777 => 197, //Imbued Netherweave Robe
    26778 => 197, //Imbued Netherweave Tunic
    26779 => 197, //Soulcloth Gloves
    26780 => 197, //Soulcloth Shoulders
    26781 => 197, //Soulcloth Vest
    26782 => 197, //Arcanoweave Bracers
    26783 => 197, //Arcanoweave Boots
    26784 => 197, //Arcanoweave Robe
    26801 => 197, //Shadoweave Tailoring
    26798 => 197, //Mooncloth Tailoring
    26797 => 197, //Spellfire Tailoring
    26790 => 197, //Tailoring
    27658 => 197, //Enchanted Mageweave Pouch
    27659 => 197, //Enchanted Runecloth Bag
    27660 => 197, //Big Bag of Enchantment
    27724 => 197, //Cenarion Herb Bag
    27725 => 197, //Satchel of Cenarius
    28210 => 197, //Gaea's Embrace
    28208 => 197, //Glacial Cloak
    28205 => 197, //Glacial Gloves
    28207 => 197, //Glacial Vest
    28209 => 197, //Glacial Wrists
    28481 => 197, //Sylvan Crown
    28482 => 197, //Sylvan Shoulders
    28480 => 197, //Sylvan Vest
    31430 => 197, //Mystic Spellthread
    31431 => 197, //Silver Spellthread
    31432 => 197, //Runic Spellthread
    31433 => 197, //Golden Spellthread
    31434 => 197, //Unyielding Bracers
    31435 => 197, //Bracers of Havok
    31437 => 197, //Blackstrike Bracers
    31438 => 197, //Cloak of the Black Void
    31440 => 197, //Cloak of Eternity
    31441 => 197, //White Remedy Cape
    31442 => 197, //Unyielding Girdle
    31443 => 197, //Girdle of Ruination
    31444 => 197, //Black Belt of Knowledge
    31448 => 197, //Resolute Cape
    31449 => 197, //Vengeance Wrap
    31450 => 197, //Manaweave Cloak
    31451 => 197, //Whitemend Pants
    31452 => 197, //Spellstrike Pants
    31453 => 197, //Battlecast Pants
    31454 => 197, //Whitemend Hood
    31455 => 197, //Spellstrike Hood
    31456 => 197, //Battlecast Hood
    31459 => 197, //Bag of Jewels
    31460 => 197, //Netherweave Net
    31461 => 197, //Heavy Netherweave Net
    31373 => 197, //Spellcloth
    36315 => 197, //Belt of Blasting
    36317 => 197, //Boots of Blasting
    36316 => 197, //Belt of the Long Road
    36318 => 197, //Boots of the Long Road
    36670 => 197, //Lifeblood Belt
    36672 => 197, //Lifeblood Bracers
    36669 => 197, //Lifeblood Leggings
    36667 => 197, //Netherflame Belt
    36668 => 197, //Netherflame Boots
    36665 => 197, //Netherflame Robe
    36686 => 197, //Shadowcloth
    37873 => 197, //Cloak of Arcane Evasion
    37882 => 197, //Flameheart Bracers
    37883 => 197, //Flameheart Gloves
    37884 => 197, //Flameheart Vest
    40021 => 197, //Soulguard Bracers
    40024 => 197, //Soulguard Girdle
    40023 => 197, //Soulguard Leggings
    40020 => 197, //Soulguard Slippers
    40060 => 197, //Night's End
    41207 => 197, //Swiftheal Wraps
    41208 => 197, //Swiftheal Mantle
    41205 => 197, //Bracers of Nimble Thought
    41206 => 197, //Mantle of Nimble Thought
    44958 => 197, //Red Winter Clothes
    44950 => 197, //Green Winter Clothes
    46129 => 197, //Hands of Eternal Light
    46131 => 197, //Robe of Eternal Light
    46128 => 197, //Sunfire Handwraps
    46130 => 197, //Sunfire Robe
    49677 => 197, //Dress Shoes
    50194 => 197, //Mycah's Botanical Bag
    50644 => 197, //Haliscan Jacket
    50647 => 197, //Haliscan Pantaloons
    51309 => 197, //Tailoring
    55642 => 197, //Lightweave Embroidery
    55769 => 197, //Darkglow Embroidery
    55777 => 197, //Swordguard Embroidery
    55898 => 197, //Frostweave Net
    55899 => 197, //Bolt of Frostweave
    55900 => 197, //Bolt of Imbued Frostweave
    55902 => 197, //Frostwoven Shoulders
    55903 => 197, //Frostwoven Robe
    55904 => 197, //Frostwoven Gloves
    56030 => 197, //Frostwoven Leggings
    55906 => 197, //Frostwoven Boots
    55907 => 197, //Frostwoven Cowl
    55908 => 197, //Frostwoven Belt
    55910 => 197, //Mystic Frostwoven Shoulders
    55911 => 197, //Mystic Frostwoven Robe
    55913 => 197, //Mystic Frostwoven Wristwraps
    55901 => 197, //Duskweave Leggings
    55914 => 197, //Duskweave Belt
    55921 => 197, //Duskweave Robe
    55922 => 197, //Duskweave Gloves
    55919 => 197, //Duskweave Cowl
    55924 => 197, //Duskweave Boots
    55925 => 197, //Black Duskweave Leggings
    55920 => 197, //Duskweave Wristwraps
    55923 => 197, //Duskweave Shoulders
    55941 => 197, //Black Duskweave Robe
    55943 => 197, //Black Duskweave Wristwraps
    55993 => 197, //Red Lumberjack Shirt
    55994 => 197, //Blue Lumberjack Shirt
    55995 => 197, //Yellow Lumberjack Shirt
    55996 => 197, //Green Lumberjack Shirt
    55997 => 197, //Red Workman's Shirt
    55998 => 197, //Blue Workman's Shirt
    55999 => 197, //Rustic Workman's Shirt
    56000 => 197, //Green Workman's Shirt
    56002 => 197, //Ebonweave
    56001 => 197, //Moonshroud
    56003 => 197, //Spellweave
    56004 => 197, //Abyssal Bag
    56005 => 197, //Glacial Bag
    56006 => 197, //Mysterious Bag
    56007 => 197, //Frostweave Bag
    56008 => 197, //Shining Spellthread
    56009 => 197, //Brilliant Spellthread
    56010 => 197, //Azure Spellthread
    56011 => 197, //Sapphire Spellthread
    56014 => 197, //Cloak of the Moon
    56015 => 197, //Cloak of Frozen Spirits
    56017 => 197, //Deathchill Cloak
    56016 => 197, //Wispcloak
    56018 => 197, //Hat of Wintry Doom
    56019 => 197, //Silky Iceshard Boots
    56020 => 197, //Deep Frozen Cord
    56021 => 197, //Frostmoon Pants
    56022 => 197, //Light Blessed Mittens
    56023 => 197, //Aurora Slippers
    56024 => 197, //Moonshroud Robe
    56025 => 197, //Moonshroud Gloves
    56026 => 197, //Ebonweave Robe
    56027 => 197, //Ebonweave Gloves
    56028 => 197, //Spellweave Robe
    56029 => 197, //Spellweave Gloves
    56031 => 197, //Frostwoven Wristwraps
    56034 => 197, //Master's Spellthread
    56039 => 197, //Sanctified Spellthread
    56048 => 197, //Duskweave Boots
    59390 => 197, //Northern Cloth Scavenging
    59582 => 197, //Frostsavage Belt
    59583 => 197, //Frostsavage Bracers
    59584 => 197, //Frostsavage Shoulders
    59585 => 197, //Frostsavage Boots
    59586 => 197, //Frostsavage Gloves
    59587 => 197, //Frostsavage Robe
    59588 => 197, //Frostsavage Leggings
    59589 => 197, //Frostsavage Cowl
    60969 => 197, //Flying Carpet
    60971 => 197, //Magnificent Flying Carpet
    60993 => 197, //Glacial Robe
    60994 => 197, //Glacial Slippers
    60990 => 197, //Glacial Waistband
    63742 => 197, //Spidersilk Drape
    63924 => 197, //Emerald Bag
    63206 => 197, //Savior's Slippers
    63205 => 197, //Cord of the White Dawn
    63204 => 197, //Spellslinger's Slippers
    63203 => 197, //Sash of Ancient Power
    64729 => 197, //Frostguard Drape
    64730 => 197, //Cloak of Crimson Snow
    67064 => 197, //Royal Moonshroud Robe
    67065 => 197, //Royal Moonshroud Bracers
    67066 => 197, //Merlin's Robe
    67079 => 197, //Bejeweled Wizard's Bracers
    67144 => 197, //Royal Moonshroud Robe
    67145 => 197, //Bejeweled Wizard's Bracers
    67146 => 197, //Merlin's Robe
    67147 => 197, //Royal Moonshroud Bracers
    70550 => 197, //Leggings of Woven Death
    70551 => 197, //Deathfrost Boots
    70552 => 197, //Lightweave Leggings
    70553 => 197, //Sandals of Consecration
    75597 => 197, //Frosty Flying Carpet
    4036 => 202, //Engineering
    4037 => 202, //Engineering
    4038 => 202, //Engineering
    3918 => 202, //Rough Blasting Powder
    3919 => 202, //Rough Dynamite
    3920 => 202, //Crafted Light Shot
    3922 => 202, //Handful of Copper Bolts
    3923 => 202, //Rough Copper Bomb
    3924 => 202, //Copper Tube
    3925 => 202, //Rough Boomstick
    3977 => 202, //Crude Scope
    3973 => 202, //Silver Contact
    3926 => 202, //Copper Modulator
    3928 => 202, //Mechanical Squirrel Box
    3929 => 202, //Coarse Blasting Powder
    3930 => 202, //Crafted Heavy Shot
    3931 => 202, //Coarse Dynamite
    3932 => 202, //Target Dummy
    3933 => 202, //Small Seaforium Charge
    3934 => 202, //Flying Tiger Goggles
    3936 => 202, //Deadly Blunderbuss
    3937 => 202, //Large Copper Bomb
    3938 => 202, //Bronze Tube
    3978 => 202, //Standard Scope
    3939 => 202, //Lovingly Crafted Boomstick
    3940 => 202, //Shadow Goggles
    3941 => 202, //Small Bronze Bomb
    3942 => 202, //Whirring Bronze Gizmo
    3944 => 202, //Flame Deflector
    3945 => 202, //Heavy Blasting Powder
    3946 => 202, //Heavy Dynamite
    3947 => 202, //Crafted Solid Shot
    3949 => 202, //Silver-plated Shotgun
    3950 => 202, //Big Bronze Bomb
    3952 => 202, //Minor Recombobulator
    3953 => 202, //Bronze Framework
    3954 => 202, //Moonsight Rifle
    3955 => 202, //Explosive Sheep
    3956 => 202, //Green Tinted Goggles
    3957 => 202, //Ice Deflector
    3958 => 202, //Iron Strut
    3959 => 202, //Discombobulator Ray
    3960 => 202, //Portable Bronze Mortar
    3961 => 202, //Gyrochronatom
    3962 => 202, //Iron Grenade
    3963 => 202, //Compact Harvest Reaper Kit
    3979 => 202, //Accurate Scope
    3965 => 202, //Advanced Target Dummy
    3966 => 202, //Craftsman's Monocle
    3967 => 202, //Big Iron Bomb
    3968 => 202, //Goblin Land Mine
    3969 => 202, //Mechanical Dragonling
    3971 => 202, //Gnomish Cloaking Device
    3972 => 202, //Large Seaforium Charge
    6458 => 202, //Ornate Spyglass
    7430 => 202, //Arclight Spanner
    8243 => 202, //Flash Bomb
    8334 => 202, //Practice Lock
    8339 => 202, //EZ-Thro Dynamite
    8895 => 202, //Goblin Rocket Boots
    9269 => 202, //Gnomish Universal Remote
    9271 => 202, //Aquadynamic Fish Attractor
    9273 => 202, //Goblin Jumper Cables
    12584 => 202, //Gold Power Core
    12585 => 202, //Solid Blasting Powder
    12586 => 202, //Solid Dynamite
    12587 => 202, //Bright-Eye Goggles
    12590 => 202, //Gyromatic Micro-Adjustor
    12589 => 202, //Mithril Tube
    12591 => 202, //Unstable Trigger
    12594 => 202, //Fire Goggles
    12595 => 202, //Mithril Blunderbuss
    12596 => 202, //Hi-Impact Mithril Slugs
    12597 => 202, //Deadly Scope
    12599 => 202, //Mithril Casing
    12603 => 202, //Mithril Frag Bomb
    12607 => 202, //Catseye Ultra Goggles
    12614 => 202, //Mithril Heavy-bore Rifle
    12615 => 202, //Spellpower Goggles Xtreme
    12616 => 202, //Parachute Cloak
    12617 => 202, //Deepdive Helmet
    12618 => 202, //Rose Colored Goggles
    12619 => 202, //Hi-Explosive Bomb
    12620 => 202, //Sniper Scope
    12621 => 202, //Mithril Gyro-Shot
    12622 => 202, //Green Lens
    12624 => 202, //Mithril Mechanical Dragonling
    12656 => 202, //Engineering
    12715 => 202, //Goblin Rocket Fuel Recipe
    12716 => 202, //Goblin Mortar
    12717 => 202, //Goblin Mining Helmet
    12718 => 202, //Goblin Construction Helmet
    12760 => 202, //Goblin Sapper Charge
    12720 => 202, //Goblin "Boom" Box
    12722 => 202, //Goblin Radio
    12755 => 202, //Goblin Bomb Dispenser
    12754 => 202, //The Big One
    12759 => 202, //Gnomish Death Ray
    12758 => 202, //Goblin Rocket Helmet
    12895 => 202, //Inlaid Mithril Cylinder Plans
    12897 => 202, //Gnomish Goggles
    12899 => 202, //Gnomish Shrink Ray
    12900 => 202, //Mobile Alarm
    12902 => 202, //Gnomish Net-o-Matic Projector
    12903 => 202, //Gnomish Harm Prevention Belt
    12904 => 202, //Gnomish Ham Radio
    12905 => 202, //Gnomish Rocket Boots
    12906 => 202, //Gnomish Battle Chicken
    12907 => 202, //Gnomish Mind Control Cap
    12908 => 202, //Goblin Dragon Gun
    13240 => 202, //The Mortar: Reloaded
    15255 => 202, //Mechanical Repair Kit
    15633 => 202, //Lil' Smoky
    15628 => 202, //Pet Bombling
    19567 => 202, //Salt Shaker
    19788 => 202, //Dense Blasting Powder
    19790 => 202, //Thorium Grenade
    19792 => 202, //Thorium Rifle
    19791 => 202, //Thorium Widget
    19793 => 202, //Lifelike Mechanical Toad
    19794 => 202, //Spellpower Goggles Xtreme Plus
    19796 => 202, //Dark Iron Rifle
    19814 => 202, //Masterwork Target Dummy
    19795 => 202, //Thorium Tube
    19815 => 202, //Delicate Arcanite Converter
    19799 => 202, //Dark Iron Bomb
    19800 => 202, //Thorium Shells
    19819 => 202, //Voice Amplification Modulator
    19831 => 202, //Arcane Bomb
    19830 => 202, //Arcanite Dragonling
    19825 => 202, //Master Engineer's Goggles
    19833 => 202, //Flawless Arcanite Rifle
    20222 => 202, //Goblin Engineer
    20219 => 202, //Gnomish Engineer
    21940 => 202, //Snowmaster 9000
    22704 => 202, //Field Repair Bot 74A
    22793 => 202, //Biznicks 247x128 Accurascope
    22795 => 202, //Core Marksman Rifle
    22797 => 202, //Force Reactive Disk
    4073 => 202, //Mechanical Dragonling
    12749 => 202, //Mithril Mechanical Dragonling
    19804 => 202, //Arcanite Dragonling
    23066 => 202, //Red Firework
    23068 => 202, //Green Firework
    23067 => 202, //Blue Firework
    23069 => 202, //EZ-Thro Dynamite II
    23070 => 202, //Dense Dynamite
    23071 => 202, //Truesilver Transformer
    23077 => 202, //Gyrofreeze Ice Reflector
    23078 => 202, //Goblin Jumper Cables XL
    23079 => 202, //Major Recombobulator
    23080 => 202, //Powerful Seaforium Charge
    23081 => 202, //Hyper-Radiant Flame Reflector
    23082 => 202, //Ultra-Flash Shadow Reflector
    23096 => 202, //Gnomish Alarm-o-Bot
    23129 => 202, //World Enlarger
    13166 => 202, //Battle Chicken
    13258 => 202, //Summon Goblin Bomb
    23489 => 202, //Ultrasafe Transporter - Gadgetzan
    23486 => 202, //Dimensional Ripper - Everlook
    23507 => 202, //Snake Burst Firework
    24356 => 202, //Bloodvine Goggles
    24357 => 202, //Bloodvine Lens
    26011 => 202, //Tranquil Mechanical Yeti
    26416 => 202, //Small Blue Rocket
    26417 => 202, //Small Green Rocket
    26418 => 202, //Small Red Rocket
    26420 => 202, //Large Blue Rocket
    26421 => 202, //Large Green Rocket
    26422 => 202, //Large Red Rocket
    26423 => 202, //Blue Rocket Cluster
    26424 => 202, //Green Rocket Cluster
    26425 => 202, //Red Rocket Cluster
    26426 => 202, //Large Blue Rocket Cluster
    26427 => 202, //Large Green Rocket Cluster
    26428 => 202, //Large Red Rocket Cluster
    26442 => 202, //Firework Launcher
    26443 => 202, //Firework Cluster Launcher
    28327 => 202, //Steam Tonk Controller
    30350 => 202, //Engineering
    30334 => 202, //Stabilized Eternium Scope
    30337 => 202, //Crashin' Thrashin' Robot
    30341 => 202, //White Smoke Flare
    30342 => 202, //Red Smoke Flare
    30343 => 202, //Blue Smoke Flare
    30344 => 202, //Green Smoke Flare
    30346 => 202, //Fel Iron Shells
    30347 => 202, //Adamantite Shell Machine
    30348 => 202, //Fel Iron Toolbox
    30349 => 202, //Titanium Toolbox
    30547 => 202, //Elemental Seaforium Charge
    30548 => 202, //Zapthrottle Mote Extractor
    30549 => 202, //Critter Enlarger
    30551 => 202, //Healing Potion Injector
    30552 => 202, //Mana Potion Injector
    30556 => 202, //Rocket Boots Xtreme
    30558 => 202, //The Bigger One
    30560 => 202, //Super Sapper Charge
    30561 => 202, //Goblin Tonk Controller
    30563 => 202, //Goblin Rocket Launcher
    30565 => 202, //Foreman's Enchanted Helmet
    30566 => 202, //Foreman's Reinforced Helmet
    30568 => 202, //Gnomish Flame Turret
    30569 => 202, //Gnomish Poultryizer
    30570 => 202, //Nigh-Invulnerability Belt
    30573 => 202, //Gnomish Tonk Controller
    30574 => 202, //Gnomish Power Goggles
    30575 => 202, //Gnomish Battle Goggles
    32814 => 202, //Purple Smoke Flare
    36954 => 202, //Dimensional Ripper - Area 52
    36955 => 202, //Ultrasafe Transporter - Toshley's Station
    39895 => 202, //Fused Wiring
    39971 => 202, //Icy Blasting Primers
    39973 => 202, //Frost Grenades
    40274 => 202, //Furious Gizmatic Goggles
    41307 => 202, //Gyro-balanced Khorium Destroyer
    41311 => 202, //Justicebringer 2000 Specs
    41312 => 202, //Tankatronic Goggles
    41314 => 202, //Surestrike Goggles v2.0
    41315 => 202, //Gadgetstorm Goggles
    41316 => 202, //Living Replicator Specs
    41317 => 202, //Deathblow X11 Goggles
    41318 => 202, //Wonderheal XT40 Shades
    41319 => 202, //Magnified Moon Specs
    41320 => 202, //Destruction Holo-gogs
    41321 => 202, //Powerheal 4000 Lens
    43676 => 202, //Adamantite Arrow Maker
    44155 => 202, //Flying Machine
    44157 => 202, //Turbo-Charged Flying Machine
    44391 => 202, //Field Repair Bot 110G
    46111 => 202, //Annihilator Holo-Gogs
    46115 => 202, //Hard Khorium Goggles
    46109 => 202, //Hyper-Magnified Moon Specs
    46107 => 202, //Justicebringer 3000 Specs
    46112 => 202, //Lightning Etched Specs
    46114 => 202, //Mayhem Projection Goggles
    46108 => 202, //Powerheal 9000 Lens
    46110 => 202, //Primal-Attuned Goggles
    46116 => 202, //Quad Deathblow X44 Goggles
    46113 => 202, //Surestrike Goggles v3.0
    46106 => 202, //Wonderheal XT68 Shades
    46697 => 202, //Rocket Boots Xtreme Lite
    49383 => 202, //Engineering
    51306 => 202, //Engineering
    53281 => 202, //Volatile Blasting Trigger
    54353 => 202, //Mark "S" Boomstick
    55252 => 202, //Scrapbot Construction Kit
    56273 => 202, //Wormhole: Gadgetzan
    56349 => 202, //Handful of Cobalt Bolts
    54736 => 202, //Personal Electromagnetic Pulse Generator
    54998 => 202, //Hand-Mounted Pyro Rocket
    54999 => 202, //Hyperspeed Accelerators
    55002 => 202, //Flexweave Underlay
    54793 => 202, //Frag Belt
    55016 => 202, //Nitro Boosts
    56460 => 202, //Cobalt Frag Bomb
    56459 => 202, //Hammer Pick
    56461 => 202, //Bladed Pickaxe
    56464 => 202, //Overcharged Capacitor
    56463 => 202, //Explosive Decoy
    56465 => 202, //Mechanized Snow Goggles
    56471 => 202, //Froststeel Tube
    56466 => 202, //Sonic Booster
    56467 => 202, //Noise Machine
    56468 => 202, //Box of Bombs
    56470 => 202, //Sun Scope
    56472 => 202, //MOLL-E
    56514 => 202, //Global Thermal Sapper Charge
    56473 => 202, //Gnomish X-Ray Specs
    56474 => 202, //Mammoth Cutters
    56475 => 202, //Saronite Razorheads
    56462 => 202, //Gnomish Army Knife
    56476 => 202, //Healing Injector Kit
    56477 => 202, //Mana Injector Kit
    56469 => 202, //Gnomish Lightning Generator
    56478 => 202, //Heartseeker Scope
    56479 => 202, //Armor Plated Combat Shotgun
    56480 => 202, //Armored Titanium Goggles
    56481 => 202, //Weakness Spectralizers
    56574 => 202, //Truesight Ice Blinders
    56483 => 202, //Charged Titanium Specs
    56484 => 202, //Visage Liquification Goggles
    56486 => 202, //Greensight Gogs
    56487 => 202, //Electroflux Sight Enhancers
    60867 => 202, //Mekgineer's Chopper
    60866 => 202, //Mechano-hog
    60874 => 202, //Nesingwary 4000
    61471 => 202, //Diamond-cut Refractor Scope
    61481 => 202, //Mechanized Snow Goggles
    61482 => 202, //Mechanized Snow Goggles
    61483 => 202, //Mechanized Snow Goggles
    62271 => 202, //Unbreakable Healing Amplifiers
    63750 => 202, //High-powered Flashlight
    63765 => 202, //Springy Arachnoweave
    63770 => 202, //Reticulated Armor Webbing
    67326 => 202, //Goblin Beam Welder
    67790 => 202, //Dimensional Folder: K3
    67920 => 202, //Wormhole Generator: Northrend
    68067 => 202, //Jeeves
    67839 => 202, //Mind Amplification Dish
    72952 => 202, //Shatter Rounds
    72953 => 202, //Iceblade Arrow
    5011 => 226, //Crossbows
    5009 => 228, //Wands
    5019 => 228, //Shoot
    200 => 229, //Polearms
    750 => 293, //Plate Mail
    7340 => 313, //Language Gnomish
    7341 => 315, //Language Troll
    7411 => 333, //Enchanting
    7412 => 333, //Enchanting
    7413 => 333, //Enchanting
    7418 => 333, //Enchant Bracer - Minor Health
    7420 => 333, //Enchant Chest - Minor Health
    7421 => 333, //Runed Copper Rod
    7426 => 333, //Enchant Chest - Minor Absorption
    7428 => 333, //Enchant Bracer - Minor Deflection
    7443 => 333, //Enchant Chest - Minor Mana
    7454 => 333, //Enchant Cloak - Minor Resistance
    7457 => 333, //Enchant Bracer - Minor Stamina
    7748 => 333, //Enchant Chest - Lesser Health
    7766 => 333, //Enchant Bracer - Minor Spirit
    7771 => 333, //Enchant Cloak - Minor Protection
    7776 => 333, //Enchant Chest - Lesser Mana
    7779 => 333, //Enchant Bracer - Minor Agility
    7782 => 333, //Enchant Bracer - Minor Strength
    7786 => 333, //Enchant Weapon - Minor Beastslayer
    7788 => 333, //Enchant Weapon - Minor Striking
    7745 => 333, //Enchant 2H Weapon - Minor Impact
    7793 => 333, //Enchant 2H Weapon - Lesser Intellect
    7795 => 333, //Runed Silver Rod
    7857 => 333, //Enchant Chest - Health
    7859 => 333, //Enchant Bracer - Lesser Spirit
    7861 => 333, //Enchant Cloak - Lesser Fire Resistance
    7863 => 333, //Enchant Boots - Minor Stamina
    7867 => 333, //Enchant Boots - Minor Agility
    13262 => 333, //Disenchant
    13378 => 333, //Enchant Shield - Minor Stamina
    13380 => 333, //Enchant 2H Weapon - Lesser Spirit
    13419 => 333, //Enchant Cloak - Minor Agility
    13421 => 333, //Enchant Cloak - Lesser Protection
    13464 => 333, //Enchant Shield - Lesser Protection
    13485 => 333, //Enchant Shield - Lesser Spirit
    13501 => 333, //Enchant Bracer - Lesser Stamina
    13503 => 333, //Enchant Weapon - Lesser Striking
    13522 => 333, //Enchant Cloak - Lesser Shadow Resistance
    13529 => 333, //Enchant 2H Weapon - Lesser Impact
    13536 => 333, //Enchant Bracer - Lesser Strength
    13538 => 333, //Enchant Chest - Lesser Absorption
    13607 => 333, //Enchant Chest - Mana
    13612 => 333, //Enchant Gloves - Mining
    13617 => 333, //Enchant Gloves - Herbalism
    13620 => 333, //Enchant Gloves - Fishing
    13622 => 333, //Enchant Bracer - Lesser Intellect
    13626 => 333, //Enchant Chest - Minor Stats
    13628 => 333, //Runed Golden Rod
    13631 => 333, //Enchant Shield - Lesser Stamina
    13635 => 333, //Enchant Cloak - Defense
    13637 => 333, //Enchant Boots - Lesser Agility
    13640 => 333, //Enchant Chest - Greater Health
    13642 => 333, //Enchant Bracer - Spirit
    13644 => 333, //Enchant Boots - Lesser Stamina
    13646 => 333, //Enchant Bracer - Lesser Deflection
    13648 => 333, //Enchant Bracer - Stamina
    13653 => 333, //Enchant Weapon - Lesser Beastslayer
    13655 => 333, //Enchant Weapon - Lesser Elemental Slayer
    13657 => 333, //Enchant Cloak - Fire Resistance
    13659 => 333, //Enchant Shield - Spirit
    13661 => 333, //Enchant Bracer - Strength
    13663 => 333, //Enchant Chest - Greater Mana
    13687 => 333, //Enchant Boots - Lesser Spirit
    13689 => 333, //Enchant Shield - Lesser Block
    13693 => 333, //Enchant Weapon - Striking
    13695 => 333, //Enchant 2H Weapon - Impact
    13698 => 333, //Enchant Gloves - Skinning
    13700 => 333, //Enchant Chest - Lesser Stats
    13702 => 333, //Runed Truesilver Rod
    13920 => 333, //Enchanting
    13746 => 333, //Enchant Cloak - Greater Defense
    13794 => 333, //Enchant Cloak - Resistance
    13815 => 333, //Enchant Gloves - Agility
    13817 => 333, //Enchant Shield - Stamina
    13822 => 333, //Enchant Bracer - Intellect
    13836 => 333, //Enchant Boots - Stamina
    13841 => 333, //Enchant Gloves - Advanced Mining
    13846 => 333, //Enchant Bracer - Greater Spirit
    13858 => 333, //Enchant Chest - Superior Health
    13868 => 333, //Enchant Gloves - Advanced Herbalism
    13882 => 333, //Enchant Cloak - Lesser Agility
    13887 => 333, //Enchant Gloves - Strength
    13890 => 333, //Enchant Boots - Minor Speed
    13898 => 333, //Enchant Weapon - Fiery Weapon
    13905 => 333, //Enchant Shield - Greater Spirit
    13915 => 333, //Enchant Weapon - Demonslaying
    13917 => 333, //Enchant Chest - Superior Mana
    13931 => 333, //Enchant Bracer - Deflection
    13933 => 333, //Enchant Shield - Frost Resistance
    13935 => 333, //Enchant Boots - Agility
    13937 => 333, //Enchant 2H Weapon - Greater Impact
    13939 => 333, //Enchant Bracer - Greater Strength
    13941 => 333, //Enchant Chest - Stats
    13943 => 333, //Enchant Weapon - Greater Striking
    13945 => 333, //Enchant Bracer - Greater Stamina
    13947 => 333, //Enchant Gloves - Riding Skill
    13948 => 333, //Enchant Gloves - Minor Haste
    14293 => 333, //Lesser Magic Wand
    14807 => 333, //Greater Magic Wand
    14809 => 333, //Lesser Mystic Wand
    14810 => 333, //Greater Mystic Wand
    15596 => 333, //Smoking Heart of the Mountain
    17181 => 333, //Enchanted Leather
    17180 => 333, //Enchanted Thorium
    20008 => 333, //Enchant Bracer - Greater Intellect
    20020 => 333, //Enchant Boots - Greater Stamina
    20014 => 333, //Enchant Cloak - Greater Resistance
    20017 => 333, //Enchant Shield - Greater Stamina
    20009 => 333, //Enchant Bracer - Superior Spirit
    20012 => 333, //Enchant Gloves - Greater Agility
    20024 => 333, //Enchant Boots - Spirit
    20026 => 333, //Enchant Chest - Major Health
    20016 => 333, //Enchant Shield - Vitality
    20029 => 333, //Enchant Weapon - Icy Chill
    20015 => 333, //Enchant Cloak - Superior Defense
    20028 => 333, //Enchant Chest - Major Mana
    20051 => 333, //Runed Arcanite Rod
    20013 => 333, //Enchant Gloves - Greater Strength
    20023 => 333, //Enchant Boots - Greater Agility
    20010 => 333, //Enchant Bracer - Superior Strength
    20030 => 333, //Enchant 2H Weapon - Superior Impact
    20033 => 333, //Enchant Weapon - Unholy Weapon
    20036 => 333, //Enchant 2H Weapon - Major Intellect
    20031 => 333, //Enchant Weapon - Superior Striking
    20011 => 333, //Enchant Bracer - Superior Stamina
    20034 => 333, //Enchant Weapon - Crusader
    20025 => 333, //Enchant Chest - Greater Stats
    20032 => 333, //Enchant Weapon - Lifestealing
    20035 => 333, //Enchant 2H Weapon - Major Spirit
    21931 => 333, //Enchant Weapon - Winter's Might
    22749 => 333, //Enchant Weapon - Spellpower
    22750 => 333, //Enchant Weapon - Healing Power
    23799 => 333, //Enchant Weapon - Strength
    23800 => 333, //Enchant Weapon - Agility
    23801 => 333, //Enchant Bracer - Mana Regeneration
    23802 => 333, //Enchant Bracer - Healing Power
    23803 => 333, //Enchant Weapon - Mighty Spirit
    23804 => 333, //Enchant Weapon - Mighty Intellect
    25072 => 333, //Enchant Gloves - Threat
    25073 => 333, //Enchant Gloves - Shadow Power
    25074 => 333, //Enchant Gloves - Frost Power
    25078 => 333, //Enchant Gloves - Fire Power
    25079 => 333, //Enchant Gloves - Healing Power
    25080 => 333, //Enchant Gloves - Superior Agility
    25081 => 333, //Enchant Cloak - Greater Fire Resistance
    25082 => 333, //Enchant Cloak - Greater Nature Resistance
    25083 => 333, //Enchant Cloak - Stealth
    25084 => 333, //Enchant Cloak - Subtlety
    25086 => 333, //Enchant Cloak - Dodge
    25124 => 333, //Minor Wizard Oil
    25125 => 333, //Minor Mana Oil
    25126 => 333, //Lesser Wizard Oil
    25127 => 333, //Lesser Mana Oil
    25128 => 333, //Wizard Oil
    25129 => 333, //Brilliant Wizard Oil
    25130 => 333, //Brilliant Mana Oil
    27837 => 333, //Enchant 2H Weapon - Agility
    28029 => 333, //Enchanting
    27899 => 333, //Enchant Bracer - Brawn
    27905 => 333, //Enchant Bracer - Stats
    27906 => 333, //Enchant Bracer - Major Defense
    27911 => 333, //Enchant Bracer - Superior Healing
    27913 => 333, //Enchant Bracer - Restore Mana Prime
    27914 => 333, //Enchant Bracer - Fortitude
    27917 => 333, //Enchant Bracer - Spellpower
    27920 => 333, //Enchant Ring - Striking
    27924 => 333, //Enchant Ring - Spellpower
    27926 => 333, //Enchant Ring - Healing Power
    27927 => 333, //Enchant Ring - Stats
    27944 => 333, //Enchant Shield - Tough Shield
    27945 => 333, //Enchant Shield - Intellect
    27946 => 333, //Enchant Shield - Shield Block
    27947 => 333, //Enchant Shield - Resistance
    27948 => 333, //Enchant Boots - Vitality
    27950 => 333, //Enchant Boots - Fortitude
    27951 => 333, //Enchant Boots - Dexterity
    27954 => 333, //Enchant Boots - Surefooted
    27957 => 333, //Enchant Chest - Exceptional Health
    27958 => 333, //Enchant Chest - Exceptional Mana
    27960 => 333, //Enchant Chest - Exceptional Stats
    27961 => 333, //Enchant Cloak - Major Armor
    27962 => 333, //Enchant Cloak - Major Resistance
    27967 => 333, //Enchant Weapon - Major Striking
    27968 => 333, //Enchant Weapon - Major Intellect
    27972 => 333, //Enchant Weapon - Potency
    27971 => 333, //Enchant 2H Weapon - Savagery
    27975 => 333, //Enchant Weapon - Major Spellpower
    27977 => 333, //Enchant 2H Weapon - Major Agility
    28004 => 333, //Enchant Weapon - Battlemaster
    28003 => 333, //Enchant Weapon - Spellsurge
    27984 => 333, //Enchant Weapon - Mongoose
    27981 => 333, //Enchant Weapon - Sunfire
    27982 => 333, //Enchant Weapon - Soulfrost
    28016 => 333, //Superior Mana Oil
    28019 => 333, //Superior Wizard Oil
    28021 => 333, //Arcane Dust
    28022 => 333, //Large Prismatic Shard
    32664 => 333, //Runed Fel Iron Rod
    32665 => 333, //Runed Adamantite Rod
    32667 => 333, //Runed Eternium Rod
    33990 => 333, //Enchant Chest - Major Spirit
    33991 => 333, //Enchant Chest - Restore Mana Prime
    33992 => 333, //Enchant Chest - Major Resilience
    33993 => 333, //Enchant Gloves - Blasting
    33994 => 333, //Enchant Gloves - Precise Strikes
    33995 => 333, //Enchant Gloves - Major Strength
    33996 => 333, //Enchant Gloves - Assault
    33997 => 333, //Enchant Gloves - Major Spellpower
    33999 => 333, //Enchant Gloves - Major Healing
    34001 => 333, //Enchant Bracer - Major Intellect
    34002 => 333, //Enchant Bracer - Assault
    34003 => 333, //Enchant Cloak - Spell Penetration
    34004 => 333, //Enchant Cloak - Greater Agility
    34005 => 333, //Enchant Cloak - Greater Arcane Resistance
    34006 => 333, //Enchant Cloak - Greater Shadow Resistance
    34007 => 333, //Enchant Boots - Cat's Swiftness
    34008 => 333, //Enchant Boots - Boar's Speed
    34009 => 333, //Enchant Shield - Major Stamina
    34010 => 333, //Enchant Weapon - Major Healing
    28027 => 333, //Prismatic Sphere
    28028 => 333, //Void Sphere
    42613 => 333, //Nexus Transformation
    42615 => 333, //Small Prismatic Shard
    42620 => 333, //Enchant Weapon - Greater Agility
    42974 => 333, //Enchant Weapon - Executioner
    44383 => 333, //Enchant Shield - Resilience
    44483 => 333, //Enchant Cloak - Superior Frost Resistance
    44484 => 333, //Enchant Gloves - Expertise
    44488 => 333, //Enchant Gloves - Precision
    44489 => 333, //Enchant Shield - Defense
    44492 => 333, //Enchant Chest - Mighty Health
    44494 => 333, //Enchant Cloak - Superior Nature Resistance
    44508 => 333, //Enchant Boots - Greater Spirit
    44500 => 333, //Enchant Cloak - Superior Agility
    44506 => 333, //Enchant Gloves - Gatherer
    44509 => 333, //Enchant Chest - Greater Mana Restoration
    44510 => 333, //Enchant Weapon - Exceptional Spirit
    44528 => 333, //Enchant Boots - Greater Fortitude
    44513 => 333, //Enchant Gloves - Greater Assault
    44524 => 333, //Enchant Weapon - Icebreaker
    44555 => 333, //Enchant Bracers - Exceptional Intellect
    44556 => 333, //Enchant Cloak - Superior Fire Resistance
    44529 => 333, //Enchant Gloves - Major Agility
    44575 => 333, //Enchant Bracers - Greater Assault
    44576 => 333, //Enchant Weapon - Lifeward
    44584 => 333, //Enchant Boots - Greater Vitality
    44582 => 333, //Enchant Cloak - Spell Piercing
    44589 => 333, //Enchant Boots - Superior Agility
    44588 => 333, //Enchant Chest - Exceptional Resilience
    44590 => 333, //Enchant Cloak - Superior Shadow Resistance
    44593 => 333, //Enchant Bracers - Major Spirit
    44591 => 333, //Enchant Cloak - Titanweave
    44612 => 333, //Enchant Gloves - Greater Blasting
    44592 => 333, //Enchant Gloves - Exceptional Spellpower
    44595 => 333, //Enchant 2H Weapon - Scourgebane
    44598 => 333, //Enchant Bracers - Expertise
    44596 => 333, //Enchant Cloak - Superior Arcane Resistance
    44616 => 333, //Enchant Bracers - Greater Stats
    44621 => 333, //Enchant Weapon - Giant Slayer
    44623 => 333, //Enchant Chest - Super Stats
    44625 => 333, //Enchant Gloves - Armsman
    44630 => 333, //Enchant 2H Weapon - Greater Savagery
    44629 => 333, //Enchant Weapon - Exceptional Spellpower
    44631 => 333, //Enchant Cloak - Shadow Armor
    44633 => 333, //Enchant Weapon - Exceptional Agility
    44635 => 333, //Enchant Bracers - Greater Spellpower
    44645 => 333, //Enchant Ring - Assault
    44636 => 333, //Enchant Ring - Greater Spellpower
    45765 => 333, //Void Shatter
    46578 => 333, //Enchant Weapon - Deathfrost
    46594 => 333, //Enchant Chest - Defense
    47051 => 333, //Enchant Cloak - Steelweave
    47672 => 333, //Enchant Cloak - Mighty Armor
    47898 => 333, //Enchant Cloak - Greater Speed
    47899 => 333, //Enchant Cloak - Wisdom
    47901 => 333, //Enchant Boots - Tuskarr's Vitality
    51313 => 333, //Enchanting
    47766 => 333, //Enchant Chest - Greater Defense
    60609 => 333, //Enchant Cloak - Speed
    60616 => 333, //Enchant Bracers - Striking
    60606 => 333, //Enchant Boots - Assault
    60621 => 333, //Enchant Weapon - Greater Potency
    60623 => 333, //Enchant Boots - Icewalker
    60653 => 333, //Enchant Shield - Greater Intellect
    59636 => 333, //Enchant Ring - Stamina
    60663 => 333, //Enchant Cloak - Major Agility
    47900 => 333, //Enchant Chest - Super Health
    60668 => 333, //Enchant Gloves - Crusher
    60619 => 333, //Runed Titanium Rod
    60691 => 333, //Enchant 2H Weapon - Massacre
    60707 => 333, //Enchant Weapon - Superior Potency
    60714 => 333, //Enchant Weapon - Mighty Spellpower
    60692 => 333, //Enchant Chest - Powerful Stats
    60763 => 333, //Enchant Boots - Greater Assault
    59621 => 333, //Enchant Weapon - Berserking
    59625 => 333, //Enchant Weapon - Black Magic
    59619 => 333, //Enchant Weapon - Accuracy
    60767 => 333, //Enchant Bracers - Superior Spellpower
    62256 => 333, //Enchant Bracers - Major Stamina
    62257 => 333, //Enchant Weapon - Titanguard
    62948 => 333, //Enchant Staff - Greater Spellpower
    62959 => 333, //Enchant Staff - Spellpower
    63746 => 333, //Enchant Boots - Lesser Accuracy
    64441 => 333, //Enchant Weapon - Blade Ward
    64579 => 333, //Enchant Weapon - Blood Draining
    69412 => 333, //Abyssal Shatter
    71692 => 333, //Enchant Gloves - Angler
    7620 => 356, //Fishing
    7731 => 356, //Fishing
    7732 => 356, //Fishing
    7738 => 356, //Fishing Poles
    18248 => 356, //Fishing
    33095 => 356, //Fishing
    43308 => 356, //Find Fish
    51294 => 356, //Fishing
    62734 => 356, //Fishing
    8613 => 393, //Skinning
    8617 => 393, //Skinning
    8618 => 393, //Skinning
    10768 => 393, //Skinning
    32678 => 393, //Skinning
    50305 => 393, //Skinning
    53125 => 393, //Master of Anatomy
    53662 => 393, //Master of Anatomy
    53663 => 393, //Master of Anatomy
    53664 => 393, //Master of Anatomy
    53665 => 393, //Master of Anatomy
    53666 => 393, //Master of Anatomy
    8737 => 413, //Mail
    9077 => 414, //Leather
    9078 => 415, //Cloth
    9116 => 433, //Shield
    15590 => 473, //Fist Weapons
    17737 => 673, //Language Gutterspeak
    25229 => 755, //Jewelcrafting
    25230 => 755, //Jewelcrafting
    25278 => 755, //Bronze Setting
    25255 => 755, //Delicate Copper Wire
    25280 => 755, //Elegant Silver Ring
    25283 => 755, //Inlaid Malachite Ring
    25284 => 755, //Simple Pearl Ring
    25287 => 755, //Gloom Band
    25305 => 755, //Heavy Silver Ring
    25317 => 755, //Ring of Silver Might
    25318 => 755, //Ring of Twilight Shadows
    25339 => 755, //Amulet of the Moon
    25320 => 755, //Heavy Golden Necklace of Battle
    25321 => 755, //Moonsoul Crown
    25323 => 755, //Wicked Moonstone Ring
    25493 => 755, //Braided Copper Ring
    25490 => 755, //Solid Bronze Ring
    25498 => 755, //Barbaric Iron Collar
    25610 => 755, //Pendant of the Agate Shield
    25612 => 755, //Heavy Iron Knuckles
    25613 => 755, //Golden Dragon Ring
    25614 => 755, //Silver Rose Pendant
    25615 => 755, //Mithril Filigree
    25617 => 755, //Blazing Citrine Ring
    25618 => 755, //Jade Pendant of Blasting
    25619 => 755, //The Jade Eye
    25620 => 755, //Engraved Truesilver Ring
    25621 => 755, //Citrine Ring of Rapid Healing
    25622 => 755, //Citrine Pendant of Golden Healing
    26872 => 755, //Figurine - Jade Owl
    26873 => 755, //Figurine - Golden Hare
    26874 => 755, //Aquamarine Signet
    26875 => 755, //Figurine - Black Pearl Panther
    26876 => 755, //Aquamarine Pendant of the Warrior
    26878 => 755, //Ruby Crown of Restoration
    26880 => 755, //Thorium Setting
    26881 => 755, //Figurine - Truesilver Crab
    26882 => 755, //Figurine - Truesilver Boar
    26883 => 755, //Ruby Pendant of Fire
    26885 => 755, //Truesilver Healing Ring
    26887 => 755, //The Aquamarine Ward
    26896 => 755, //Gem Studded Band
    26897 => 755, //Opal Necklace of Impact
    26900 => 755, //Figurine - Ruby Serpent
    26902 => 755, //Simple Opal Ring
    26903 => 755, //Sapphire Signet
    26906 => 755, //Emerald Crown of Destruction
    26907 => 755, //Onslaught Ring
    26908 => 755, //Sapphire Pendant of Winter Night
    26909 => 755, //Figurine - Emerald Owl
    26910 => 755, //Ring of Bitter Shadows
    26911 => 755, //Living Emerald Pendant
    26912 => 755, //Figurine - Black Diamond Crab
    26914 => 755, //Figurine - Dark Iron Scorpid
    26915 => 755, //Necklace of the Diamond Tower
    26916 => 755, //Band of Natural Fire
    26918 => 755, //Arcanite Sword Pendant
    26920 => 755, //Blood Crown
    26925 => 755, //Woven Copper Ring
    26926 => 755, //Heavy Copper Ring
    26927 => 755, //Thick Bronze Necklace
    26928 => 755, //Ornate Tigerseye Necklace
    28894 => 755, //Jewelcrafting
    28895 => 755, //Jewelcrafting
    28897 => 755, //Jewelcrafting
    28903 => 755, //Teardrop Blood Garnet
    28905 => 755, //Bold Blood Garnet
    28906 => 755, //Runed Blood Garnet
    28907 => 755, //Delicate Blood Garnet
    28910 => 755, //Inscribed Flame Spessarite
    28912 => 755, //Luminous Flame Spessarite
    28914 => 755, //Glinting Flame Spessarite
    28915 => 755, //Potent Flame Spessarite
    28916 => 755, //Radiant Deep Peridot
    28917 => 755, //Jagged Deep Peridot
    28918 => 755, //Enduring Deep Peridot
    28924 => 755, //Dazzling Deep Peridot
    28925 => 755, //Glowing Shadow Draenite
    28927 => 755, //Royal Shadow Draenite
    28933 => 755, //Shifting Shadow Draenite
    28936 => 755, //Sovereign Shadow Draenite
    28938 => 755, //Brilliant Golden Draenite
    28944 => 755, //Gleaming Golden Draenite
    28947 => 755, //Thick Golden Draenite
    28948 => 755, //Rigid Golden Draenite
    28950 => 755, //Solid Azure Moonstone
    28953 => 755, //Sparkling Azure Moonstone
    28955 => 755, //Stormy Azure Moonstone
    28957 => 755, //Lustrous Azure Moonstone
    31089 => 755, //Bright Living Ruby
    31096 => 755, //Brilliant Dawnstone
    31112 => 755, //Dazzling Talasite
    31085 => 755, //Delicate Living Ruby
    31110 => 755, //Enduring Talasite
    31106 => 755, //Inscribed Noble Topaz
    31091 => 755, //Flashing Living Ruby
    31099 => 755, //Gleaming Dawnstone
    31109 => 755, //Glinting Noble Topaz
    31104 => 755, //Glowing Nightseye
    31113 => 755, //Jagged Talasite
    31108 => 755, //Luminous Noble Topaz
    31094 => 755, //Lustrous Star of Elune
    31101 => 755, //Mystic Dawnstone
    31107 => 755, //Potent Noble Topaz
    31111 => 755, //Radiant Talasite
    31098 => 755, //Rigid Dawnstone
    31105 => 755, //Royal Nightseye
    31088 => 755, //Runed Living Ruby
    31103 => 755, //Shifting Nightseye
    31097 => 755, //Smooth Dawnstone
    31102 => 755, //Sovereign Nightseye
    31092 => 755, //Solid Star of Elune
    31149 => 755, //Sparkling Star of Elune
    31095 => 755, //Stormy Star of Elune
    31090 => 755, //Subtle Living Ruby
    31087 => 755, //Teardrop Living Ruby
    31100 => 755, //Thick Dawnstone
    31084 => 755, //Bold Living Ruby
    31048 => 755, //Fel Iron Blood Ring
    31049 => 755, //Golden Draenite Ring
    31050 => 755, //Azure Moonstone Ring
    31051 => 755, //Thick Adamantite Necklace
    31052 => 755, //Heavy Adamantite Ring
    31053 => 755, //Khorium Band of Shadows
    31054 => 755, //Khorium Band of Frost
    31055 => 755, //Khorium Inferno Band
    31056 => 755, //Khorium Band of Leaves
    31057 => 755, //Arcane Khorium Band
    31058 => 755, //Heavy Felsteel Ring
    31060 => 755, //Delicate Eternium Ring
    31061 => 755, //Blazing Eternium Band
    31062 => 755, //Pendant of Frozen Flame
    31063 => 755, //Pendant of Thawing
    31064 => 755, //Pendant of Withering
    31065 => 755, //Pendant of Shadow's End
    31066 => 755, //Pendant of the Null Rune
    31067 => 755, //Thick Felsteel Necklace
    31068 => 755, //Living Ruby Pendant
    31070 => 755, //Braided Eternium Chain
    31071 => 755, //Eye of the Night
    31072 => 755, //Embrace of the Dawn
    31076 => 755, //Chain of the Twilight Owl
    31077 => 755, //Coronet of Verdant Flame
    31078 => 755, //Circlet of Arcane Might
    31079 => 755, //Figurine - Felsteel Boar
    31080 => 755, //Figurine - Dawnstone Crab
    31081 => 755, //Figurine - Living Ruby Serpent
    31082 => 755, //Figurine - Talasite Owl
    31083 => 755, //Figurine - Nightseye Panther
    31252 => 755, //Prospecting
    32178 => 755, //Malachite Pendant
    32179 => 755, //Tigerseye Band
    32259 => 755, //Rough Stone Statue
    32801 => 755, //Coarse Stone Statue
    32807 => 755, //Heavy Stone Statue
    32808 => 755, //Solid Stone Statue
    32809 => 755, //Dense Stone Statue
    32810 => 755, //Primal Stone Statue
    32867 => 755, //Bracing Earthstorm Diamond
    32869 => 755, //Brutal Earthstorm Diamond
    32870 => 755, //Insightful Earthstorm Diamond
    32866 => 755, //Powerful Earthstorm Diamond
    32868 => 755, //Tenacious Earthstorm Diamond
    32871 => 755, //Destructive Skyfire Diamond
    32874 => 755, //Enigmatic Skyfire Diamond
    32872 => 755, //Mystical Skyfire Diamond
    32873 => 755, //Swift Skyfire Diamond
    34069 => 755, //Smooth Golden Draenite
    34590 => 755, //Bright Blood Garnet
    34960 => 755, //Glowing Thorium Band
    34961 => 755, //Emerald Lion Ring
    34955 => 755, //Golden Ring of Power
    34959 => 755, //Truesilver Commander's Ring
    36523 => 755, //Brilliant Necklace
    36524 => 755, //Heavy Jade Ring
    36525 => 755, //Red Ring of Destruction
    36526 => 755, //Diamond Focus Ring
    37818 => 755, //Bronze Band of Force
    37855 => 755, //Ring of Arcane Shielding
    38068 => 755, //Mercurial Adamantite
    38175 => 755, //Bronze Torc
    38503 => 755, //The Frozen Eye
    38504 => 755, //The Natural Ward
    39451 => 755, //Great Golden Draenite
    39452 => 755, //Great Dawnstone
    39455 => 755, //Balanced Shadow Draenite
    39458 => 755, //Infused Shadow Draenite
    39463 => 755, //Balanced Nightseye
    39462 => 755, //Infused Nightseye
    39466 => 755, //Veiled Flame Spessarite
    39467 => 755, //Wicked Flame Spessarite
    39470 => 755, //Veiled Noble Topaz
    39471 => 755, //Wicked Noble Topaz
    39705 => 755, //Bold Crimson Spinel
    39712 => 755, //Bright Crimson Spinel
    39706 => 755, //Delicate Crimson Spinel
    39714 => 755, //Flashing Crimson Spinel
    39711 => 755, //Runed Crimson Spinel
    39713 => 755, //Subtle Crimson Spinel
    39710 => 755, //Teardrop Crimson Spinel
    39717 => 755, //Lustrous Empyrean Sapphire
    39715 => 755, //Solid Empyrean Sapphire
    39716 => 755, //Sparkling Empyrean Sapphire
    39718 => 755, //Stormy Empyrean Sapphire
    39719 => 755, //Brilliant Lionseye
    39722 => 755, //Gleaming Lionseye
    39725 => 755, //Great Lionseye
    39724 => 755, //Mystic Lionseye
    39721 => 755, //Rigid Lionseye
    39720 => 755, //Smooth Lionseye
    39723 => 755, //Thick Lionseye
    39729 => 755, //Balanced Shadowsong Amethyst
    39731 => 755, //Glowing Shadowsong Amethyst
    39730 => 755, //Infused Shadowsong Amethyst
    39732 => 755, //Royal Shadowsong Amethyst
    39728 => 755, //Shifting Shadowsong Amethyst
    39727 => 755, //Sovereign Shadowsong Amethyst
    39736 => 755, //Glinting Pyrestone
    39733 => 755, //Inscribed Pyrestone
    39735 => 755, //Luminous Pyrestone
    39734 => 755, //Potent Pyrestone
    39737 => 755, //Veiled Pyrestone
    39738 => 755, //Wicked Pyrestone
    39741 => 755, //Dazzling Seaspray Emerald
    39739 => 755, //Enduring Seaspray Emerald
    39742 => 755, //Jagged Seaspray Emerald
    39740 => 755, //Radiant Seaspray Emerald
    39963 => 755, //Thundering Skyfire Diamond
    39961 => 755, //Relentless Earthstorm Diamond
    40514 => 755, //Necklace of the Deep
    41418 => 755, //Crown of the Sea Witch
    41414 => 755, //Brilliant Pearl Band
    41415 => 755, //The Black Pearl
    41420 => 755, //Purified Jaggal Pearl
    41429 => 755, //Purified Shadow Pearl
    42558 => 755, //Don Julio's Heart
    42588 => 755, //Kailee's Rose
    42589 => 755, //Crimson Sun
    42590 => 755, //Falling Star
    42593 => 755, //Facet of Eternity
    42591 => 755, //Stone of Blades
    42592 => 755, //Blood of Amber
    43493 => 755, //Steady Talasite
    44794 => 755, //Chaotic Skyfire Diamond
    46126 => 755, //Amulet of Flowing Life
    46124 => 755, //Hard Khorium Band
    46127 => 755, //Hard Khorium Choker
    46122 => 755, //Loop of Forged Power
    46125 => 755, //Pendant of Sunfire
    46123 => 755, //Ring of Flowing Life
    46403 => 755, //Quick Dawnstone
    46404 => 755, //Reckless Noble Topaz
    46405 => 755, //Forceful Talasite
    46597 => 755, //Eternal Earthstorm Diamond
    46601 => 755, //Ember Skyfire Diamond
    46775 => 755, //Figurine - Empyrean Tortoise
    46776 => 755, //Figurine - Khorium Boar
    46777 => 755, //Figurine - Crimson Serpent
    46778 => 755, //Figurine - Shadowsong Panther
    46779 => 755, //Figurine - Seaspray Albatross
    46803 => 755, //Regal Nightseye
    47053 => 755, //Forceful Seaspray Emerald
    47054 => 755, //Steady Seaspray Emerald
    47055 => 755, //Reckless Pyrestone
    47056 => 755, //Quick Lionseye
    47280 => 755, //Brilliant Glass
    48789 => 755, //Purified Shadowsong Amethyst
    51311 => 755, //Jewelcrafting
    53831 => 755, //Bold Bloodstone
    53832 => 755, //Delicate Bloodstone
    53834 => 755, //Runed Bloodstone
    53835 => 755, //Bright Bloodstone
    53843 => 755, //Subtle Bloodstone
    53844 => 755, //Flashing Bloodstone
    53845 => 755, //Fractured Bloodstone
    54017 => 755, //Precise Bloodstone
    53934 => 755, //Solid Chalcedony
    53940 => 755, //Sparkling Chalcedony
    53941 => 755, //Lustrous Chalcedony
    53943 => 755, //Stormy Chalcedony
    53852 => 755, //Brilliant Sun Crystal
    53853 => 755, //Smooth Sun Crystal
    53854 => 755, //Rigid Sun Crystal
    53855 => 755, //Thick Sun Crystal
    53857 => 755, //Mystic Sun Crystal
    53856 => 755, //Quick Sun Crystal
    53859 => 755, //Sovereign Shadow Crystal
    53860 => 755, //Shifting Shadow Crystal
    53861 => 755, //Tenuous Shadow Crystal
    53862 => 755, //Glowing Shadow Crystal
    53863 => 755, //Purified Shadow Crystal
    53864 => 755, //Royal Shadow Crystal
    53865 => 755, //Mysterious Shadow Crystal
    53866 => 755, //Balanced Shadow Crystal
    53867 => 755, //Infused Shadow Crystal
    53868 => 755, //Regal Shadow Crystal
    53869 => 755, //Defender's Shadow Crystal
    53870 => 755, //Puissant Shadow Crystal
    53871 => 755, //Guardian's Shadow Crystal
    53872 => 755, //Inscribed Huge Citrine
    53873 => 755, //Etched Huge Citrine
    53874 => 755, //Champion's Huge Citrine
    53875 => 755, //Resplendent Huge Citrine
    53876 => 755, //Fierce Huge Citrine
    53877 => 755, //Deadly Huge Citrine
    53878 => 755, //Glinting Huge Citrine
    53879 => 755, //Lucent Huge Citrine
    53880 => 755, //Deft Huge Citrine
    53881 => 755, //Luminous Huge Citrine
    53882 => 755, //Potent Huge Citrine
    53883 => 755, //Veiled Huge Citrine
    53884 => 755, //Durable Huge Citrine
    53885 => 755, //Reckless Huge Citrine
    53886 => 755, //Wicked Huge Citrine
    53887 => 755, //Pristine Huge Citrine
    53888 => 755, //Empowered Huge Citrine
    53889 => 755, //Stark Huge Citrine
    53890 => 755, //Stalwart Huge Citrine
    53891 => 755, //Glimmering Huge Citrine
    53892 => 755, //Accurate Huge Citrine
    53893 => 755, //Resolute Huge Citrine
    53894 => 755, //Timeless Dark Jade
    53916 => 755, //Jagged Dark Jade
    53917 => 755, //Vivid Dark Jade
    53918 => 755, //Enduring Dark Jade
    53919 => 755, //Steady Dark Jade
    53920 => 755, //Forceful Dark Jade
    53921 => 755, //Seer's Dark Jade
    53922 => 755, //Misty Dark Jade
    53923 => 755, //Shining Dark Jade
    53924 => 755, //Turbid Dark Jade
    53925 => 755, //Intricate Dark Jade
    53926 => 755, //Dazzling Dark Jade
    53927 => 755, //Sundered Dark Jade
    53928 => 755, //Lambent Dark Jade
    53929 => 755, //Opaque Dark Jade
    53930 => 755, //Energized Dark Jade
    53931 => 755, //Radiant Dark Jade
    53932 => 755, //Tense Dark Jade
    53933 => 755, //Shattered Dark Jade
    53830 => 755, //Bold Scarlet Ruby
    53945 => 755, //Delicate Scarlet Ruby
    53946 => 755, //Runed Scarlet Ruby
    53947 => 755, //Bright Scarlet Ruby
    53948 => 755, //Subtle Scarlet Ruby
    53949 => 755, //Flashing Scarlet Ruby
    53950 => 755, //Fractured Scarlet Ruby
    53951 => 755, //Precise Scarlet Ruby
    53952 => 755, //Solid Sky Sapphire
    53953 => 755, //Sparkling Sky Sapphire
    53954 => 755, //Lustrous Sky Sapphire
    53955 => 755, //Stormy Sky Sapphire
    53956 => 755, //Brilliant Autumn's Glow
    53957 => 755, //Smooth Autumn's Glow
    53958 => 755, //Rigid Autumn's Glow
    53959 => 755, //Thick Autumn's Glow
    53960 => 755, //Mystic Autumn's Glow
    53961 => 755, //Quick Autumn's Glow
    53962 => 755, //Sovereign Twilight Opal
    53963 => 755, //Shifting Twilight Opal
    53964 => 755, //Tenuous Twilight Opal
    53965 => 755, //Glowing Twilight Opal
    53966 => 755, //Purified Twilight Opal
    53967 => 755, //Royal Twilight Opal
    53968 => 755, //Mysterious Twilight Opal
    53969 => 755, //Balanced Twilight Opal
    53970 => 755, //Infused Twilight Opal
    53971 => 755, //Regal Twilight Opal
    53972 => 755, //Defender's Twilight Opal
    53973 => 755, //Puissant Twilight Opal
    53974 => 755, //Guardian's Twilight Opal
    53975 => 755, //Inscribed Monarch Topaz
    53976 => 755, //Etched Monarch Topaz
    53977 => 755, //Champion's Monarch Topaz
    53978 => 755, //Resplendent Monarch Topaz
    53979 => 755, //Deadly Monarch Topaz
    53980 => 755, //Glinting Monarch Topaz
    53981 => 755, //Lucent Monarch Topaz
    53982 => 755, //Deft Monarch Topaz
    53983 => 755, //Luminous Monarch Topaz
    53984 => 755, //Potent Monarch Topaz
    53985 => 755, //Veiled Monarch Topaz
    53986 => 755, //Durable Monarch Topaz
    53987 => 755, //Reckless Monarch Topaz
    53988 => 755, //Wicked Monarch Topaz
    53989 => 755, //Pristine Monarch Topaz
    53990 => 755, //Empowered Monarch Topaz
    53991 => 755, //Stark Monarch Topaz
    53992 => 755, //Stalwart Monarch Topaz
    53993 => 755, //Glimmering Monarch Topaz
    53994 => 755, //Accurate Monarch Topaz
    54019 => 755, //Fierce Monarch Topaz
    54023 => 755, //Resolute Monarch Topaz
    54010 => 755, //Opaque Forest Emerald
    54011 => 755, //Energized Forest Emerald
    54012 => 755, //Radiant Forest Emerald
    54013 => 755, //Tense Forest Emerald
    54014 => 755, //Shattered Forest Emerald
    53995 => 755, //Timeless Forest Emerald
    53996 => 755, //Jagged Forest Emerald
    53997 => 755, //Vivid Forest Emerald
    53998 => 755, //Enduring Forest Emerald
    54000 => 755, //Steady Forest Emerald
    54001 => 755, //Forceful Forest Emerald
    54002 => 755, //Seer's Forest Emerald
    54003 => 755, //Misty Forest Emerald
    54004 => 755, //Shining Forest Emerald
    54005 => 755, //Turbid Forest Emerald
    54006 => 755, //Intricate Forest Emerald
    54007 => 755, //Dazzling Forest Emerald
    54008 => 755, //Sundered Forest Emerald
    54009 => 755, //Lambent Forest Emerald
    55384 => 755, //Effulgent Skyflare Diamond
    55386 => 755, //Tireless Skyflare Diamond
    55387 => 755, //Forlorn Skyflare Diamond
    55388 => 755, //Impassive Skyflare Diamond
    55390 => 755, //Destructive Skyflare Diamond
    55392 => 755, //Ember Skyflare Diamond
    55393 => 755, //Enigmatic Skyflare Diamond
    55394 => 755, //Swift Skyflare Diamond
    55395 => 755, //Thundering Skyflare Diamond
    55407 => 755, //Revitalizing Skyflare Diamond
    55396 => 755, //Insightful Earthsiege Diamond
    55397 => 755, //Bracing Earthsiege Diamond
    55398 => 755, //Eternal Earthsiege Diamond
    55399 => 755, //Powerful Earthsiege Diamond
    55400 => 755, //Relentless Earthsiege Diamond
    55401 => 755, //Austere Earthsiege Diamond
    55402 => 755, //Persistent Earthsiege Diamond
    55403 => 755, //Trenchant Earthsiege Diamond
    55404 => 755, //Invigorating Earthsiege Diamond
    55405 => 755, //Beaming Earthsiege Diamond
    55389 => 755, //Chaotic Skyflare Diamond
    55534 => 755, //Gem Perfection
    56049 => 755, //Bold Dragon's Eye
    56052 => 755, //Delicate Dragon's Eye
    56053 => 755, //Runed Dragon's Eye
    56054 => 755, //Bright Dragon's Eye
    56055 => 755, //Subtle Dragon's Eye
    56056 => 755, //Flashing Dragon's Eye
    56074 => 755, //Brilliant Dragon's Eye
    56076 => 755, //Fractured Dragon's Eye
    56077 => 755, //Lustrous Dragon's Eye
    56079 => 755, //Mystic Dragon's Eye
    56081 => 755, //Precise Dragon's Eye
    56083 => 755, //Quick Dragon's Eye
    56084 => 755, //Rigid Dragon's Eye
    56085 => 755, //Smooth Dragon's Eye
    56087 => 755, //Sparkling Dragon's Eye
    56088 => 755, //Stormy Dragon's Eye
    56089 => 755, //Thick Dragon's Eye
    56086 => 755, //Solid Dragon's Eye
    56193 => 755, //Bloodstone Band
    56194 => 755, //Sun Rock Ring
    56195 => 755, //Jade Dagger Pendant
    56196 => 755, //Blood Sun Necklace
    56197 => 755, //Dream Signet
    56199 => 755, //Ruby Hare
    56201 => 755, //Twilight Serpent
    56202 => 755, //Sapphire Owl
    56203 => 755, //Emerald Boar
    56205 => 755, //Dark Jade Focusing Lens
    56206 => 755, //Shadow Crystal Focusing Lens
    56208 => 755, //Shadow Jade Focusing Lens
    56496 => 755, //Titanium Impact Band
    56497 => 755, //Titanium Earthguard Ring
    56498 => 755, //Titanium Spellshock Ring
    56499 => 755, //Titanium Impact Choker
    56500 => 755, //Titanium Earthguard Chain
    56501 => 755, //Titanium Spellshock Necklace
    56530 => 755, //Enchanted Pearl
    56531 => 755, //Enchanted Tear
    58141 => 755, //Crystal Citrine Necklace
    58142 => 755, //Crystal Chalcedony Amulet
    58143 => 755, //Earthshadow Ring
    58144 => 755, //Jade Ring of Slaying
    58145 => 755, //Stoneguard Band
    58146 => 755, //Shadowmight Ring
    58147 => 755, //Ring of Earthen Might
    58148 => 755, //Ring of Scarlet Shadows
    58149 => 755, //Windfire Band
    58150 => 755, //Ring of Northern Tears
    58507 => 755, //Savage Titanium Band
    58492 => 755, //Savage Titanium Ring
    58954 => 755, //Titanium Frostguard Ring
    59759 => 755, //Monarch Crab
    62242 => 755, //Icy Prism
    62941 => 755, //Prismatic Black Diamond
    63743 => 755, //Amulet of Truesight
    64725 => 755, //Emerald Choker
    64726 => 755, //Sky Sapphire Amulet
    64727 => 755, //Runed Mana Band
    64728 => 755, //Scarlet Signet
    66428 => 755, //Steady Eye of Zul
    66429 => 755, //Vivid Eye of Zul
    66430 => 755, //Dazzling Eye of Zul
    66431 => 755, //Jagged Eye of Zul
    66432 => 755, //Timeless Eye of Zul
    66433 => 755, //Seer's Eye of Zul
    66434 => 755, //Forceful Eye of Zul
    66435 => 755, //Misty Eye of Zul
    66436 => 755, //Sundered Eye of Zul
    66437 => 755, //Shining Eye of Zul
    66438 => 755, //Tense Eye of Zul
    66439 => 755, //Lambent Eye of Zul
    66440 => 755, //Intricate Eye of Zul
    66441 => 755, //Radiant Eye of Zul
    66442 => 755, //Energized Eye of Zul
    66443 => 755, //Shattered Eye of Zul
    66444 => 755, //Opaque Eye of Zul
    66445 => 755, //Turbid Eye of Zul
    66446 => 755, //Runed Cardinal Ruby
    66447 => 755, //Bold Cardinal Ruby
    66448 => 755, //Delicate Cardinal Ruby
    66449 => 755, //Bright Cardinal Ruby
    66450 => 755, //Precise Cardinal Ruby
    66451 => 755, //Fractured Cardinal Ruby
    66452 => 755, //Subtle Cardinal Ruby
    66453 => 755, //Flashing Cardinal Ruby
    66497 => 755, //Solid Majestic Zircon
    66498 => 755, //Sparkling Majestic Zircon
    66499 => 755, //Stormy Majestic Zircon
    66500 => 755, //Lustrous Majestic Zircon
    66501 => 755, //Rigid King's Amber
    66502 => 755, //Smooth King's Amber
    66503 => 755, //Brilliant King's Amber
    66504 => 755, //Thick King's Amber
    66505 => 755, //Mystic King's Amber
    66506 => 755, //Quick King's Amber
    66553 => 755, //Balanced Dreadstone
    66554 => 755, //Sovereign Dreadstone
    66555 => 755, //Glowing Dreadstone
    66556 => 755, //Purified Dreadstone
    66557 => 755, //Shifting Dreadstone
    66558 => 755, //Royal Dreadstone
    66559 => 755, //Regal Dreadstone
    66560 => 755, //Defender's Dreadstone
    66561 => 755, //Guardian's Dreadstone
    66562 => 755, //Mysterious Dreadstone
    66563 => 755, //Puissant Dreadstone
    66564 => 755, //Infused Dreadstone
    66565 => 755, //Tenuous Dreadstone
    66566 => 755, //Luminous Ametrine
    66567 => 755, //Inscribed Ametrine
    66568 => 755, //Deadly Ametrine
    66569 => 755, //Potent Ametrine
    66570 => 755, //Veiled Ametrine
    66571 => 755, //Durable Ametrine
    66572 => 755, //Etched Ametrine
    66573 => 755, //Pristine Ametrine
    66574 => 755, //Reckless Ametrine
    66575 => 755, //Glinting Ametrine
    66576 => 755, //Accurate Ametrine
    66577 => 755, //Wicked Ametrine
    66578 => 755, //Glimmering Ametrine
    66579 => 755, //Champion's Ametrine
    66580 => 755, //Empowered Ametrine
    66581 => 755, //Stalwart Ametrine
    66582 => 755, //Resplendent Ametrine
    66583 => 755, //Fierce Ametrine
    66584 => 755, //Deft Ametrine
    66585 => 755, //Lucent Ametrine
    66586 => 755, //Resolute Ametrine
    66587 => 755, //Stark Ametrine
    66338 => 755, //Enduring Eye of Zul
    68253 => 755, //Nightmare Tear
    29932 => 759, //Language Draenei
    33391 => 762, //Journeyman Riding
    34090 => 762, //Expert Riding
    34091 => 762, //Artisan Riding
    33388 => 762, //Apprentice Riding
    54197 => 762, //Cold Weather Flying
    45357 => 773, //Inscription
    45358 => 773, //Inscription
    45359 => 773, //Inscription
    45360 => 773, //Inscription
    45361 => 773, //Inscription
    45363 => 773, //Inscription
    45382 => 773, //Scroll of Stamina
    48114 => 773, //Scroll of Intellect
    48116 => 773, //Scroll of Spirit
    48247 => 773, //Mysterious Tarot
    50612 => 773, //Scroll of Stamina II
    50614 => 773, //Scroll of Stamina III
    50616 => 773, //Scroll of Stamina IV
    50617 => 773, //Scroll of Stamina V
    50618 => 773, //Scroll of Stamina VI
    50619 => 773, //Scroll of Stamina VII
    50620 => 773, //Scroll of Stamina VIII
    50598 => 773, //Scroll of Intellect II
    50599 => 773, //Scroll of Intellect III
    50600 => 773, //Scroll of Intellect IV
    50601 => 773, //Scroll of Intellect V
    50602 => 773, //Scroll of Intellect VI
    50603 => 773, //Scroll of Intellect VII
    50604 => 773, //Scroll of Intellect VIII
    50605 => 773, //Scroll of Spirit II
    50606 => 773, //Scroll of Spirit III
    50607 => 773, //Scroll of Spirit IV
    50608 => 773, //Scroll of Spirit V
    50609 => 773, //Scroll of Spirit VI
    50610 => 773, //Scroll of Spirit VII
    50611 => 773, //Scroll of Spirit VIII
    51005 => 773, //Milling
    52175 => 773, //Decipher
    52738 => 773, //Ivory Ink
    52739 => 773, //Armor Vellum
    48248 => 773, //Scroll of Recall
    52840 => 773, //Weapon Vellum
    52843 => 773, //Moonglow Ink
    53462 => 773, //Midnight Ink
    57207 => 773, //Glyph of Anti-Magic Shell
    57208 => 773, //Glyph of Heart Strike
    57209 => 773, //Glyph of Blood Tap
    57210 => 773, //Glyph of Bone Shield
    57211 => 773, //Glyph of Chains of Ice
    57212 => 773, //Glyph of Dark Command
    57213 => 773, //Glyph of Death Grip
    57214 => 773, //Glyph of Death and Decay
    57215 => 773, //Glyph of Death's Embrace
    57216 => 773, //Glyph of Frost Strike
    57217 => 773, //Glyph of Horn of Winter
    57218 => 773, //Glyph of Icebound Fortitude
    57219 => 773, //Glyph of Icy Touch
    57220 => 773, //Glyph of Obliterate
    57221 => 773, //Glyph of Plague Strike
    57222 => 773, //Glyph of the Ghoul
    57223 => 773, //Glyph of Rune Strike
    57224 => 773, //Glyph of Scourge Strike
    57225 => 773, //Glyph of Strangulate
    57226 => 773, //Glyph of Unbreakable Armor
    57227 => 773, //Glyph of Vampiric Blood
    57228 => 773, //Glyph of Raise Dead
    57229 => 773, //Glyph of Corpse Explosion
    57230 => 773, //Glyph of Pestilence
    57231 => 773, //Death Knight Glyph 25
    57703 => 773, //Hunter's Ink
    57704 => 773, //Lion's Ink
    57706 => 773, //Dawnstar Ink
    57707 => 773, //Jadefire Ink
    57708 => 773, //Royal Ink
    57709 => 773, //Celestial Ink
    57710 => 773, //Fiery Ink
    57711 => 773, //Shimmering Ink
    57712 => 773, //Ink of the Sky
    57713 => 773, //Ethereal Ink
    57714 => 773, //Darkflame Ink
    57715 => 773, //Ink of the Sea
    57716 => 773, //Snowfall Ink
    56955 => 773, //Glyph of Rejuvenation
    56963 => 773, //Glyph of Wrath
    56961 => 773, //Glyph of Maul
    48121 => 773, //Glyph of Entangling Roots
    56945 => 773, //Glyph of Healing Touch
    56951 => 773, //Glyph of Moonfire
    56948 => 773, //Glyph of Insect Swarm
    56953 => 773, //Glyph of Rebirth
    56956 => 773, //Glyph of Rip
    56959 => 773, //Glyph of Starfire
    56957 => 773, //Glyph of Shred
    56952 => 773, //Glyph of Rake
    56943 => 773, //Glyph of Frenzied Regeneration
    56946 => 773, //Glyph of Hurricane
    56947 => 773, //Glyph of Innervate
    56960 => 773, //Glyph of Swiftmend
    56950 => 773, //Glyph of Mangle
    56944 => 773, //Glyph of Growl
    56954 => 773, //Glyph of Regrowth
    56958 => 773, //Glyph of Starfall
    56949 => 773, //Glyph of Lifebloom
    57004 => 773, //Glyph of Hunter's Mark
    57009 => 773, //Glyph of Serpent Sting
    56995 => 773, //Glyph of Arcane Shot
    56997 => 773, //Glyph of Mending
    57005 => 773, //Glyph of Immolation Trap
    57007 => 773, //Glyph of Multi-Shot
    56994 => 773, //Glyph of Aimed Shot
    57000 => 773, //Glyph of Deterrence
    57001 => 773, //Glyph of Disengage
    57002 => 773, //Glyph of Freezing Trap
    57008 => 773, //Glyph of Rapid Fire
    57003 => 773, //Glyph of Frost Trap
    56996 => 773, //Glyph of the Beast
    56999 => 773, //Glyph of Bestial Wrath
    57012 => 773, //Glyph of Trueshot Aura
    57013 => 773, //Glyph of Volley
    57006 => 773, //Glyph of the Hawk
    57011 => 773, //Glyph of Steady Shot
    56998 => 773, //Glyph of Aspect of the Viper
    57010 => 773, //Glyph of Snake Trap
    56976 => 773, //Glyph of Frost Nova
    56978 => 773, //Glyph of Ice Armor
    56968 => 773, //Glyph of Arcane Explosion
    56971 => 773, //Glyph of Arcane Missiles
    56973 => 773, //Glyph of Blink
    56974 => 773, //Glyph of Evocation
    56981 => 773, //Glyph of Icy Veins
    56982 => 773, //Glyph of Scorch
    56979 => 773, //Glyph of Ice Block
    56985 => 773, //Glyph of Mana Gem
    56984 => 773, //Glyph of Mage Armor
    56972 => 773, //Glyph of Arcane Power
    56989 => 773, //Glyph of Water Elemental
    56986 => 773, //Glyph of Molten Armor
    56980 => 773, //Glyph of Ice Lance
    56983 => 773, //Glyph of Invisibility
    57719 => 773, //Glyph of Fire Blast
    56975 => 773, //Glyph of Fireball
    56977 => 773, //Glyph of Frostbolt
    56987 => 773, //Glyph of Polymorph
    56988 => 773, //Glyph of Remove Curse
    57022 => 773, //Glyph of Spiritual Attunement
    57027 => 773, //Glyph of Hammer of Justice
    57029 => 773, //Glyph of Holy Light
    57030 => 773, //Glyph of Judgement
    57031 => 773, //Glyph of Divinity
    57032 => 773, //Glyph of Righteous Defense
    57020 => 773, //Glyph of Cleansing
    57023 => 773, //Glyph of Consecration
    57024 => 773, //Glyph of Crusader Strike
    57025 => 773, //Glyph of Exorcism
    57026 => 773, //Glyph of Flash of Light
    57033 => 773, //Glyph of Seal of Command
    57036 => 773, //Glyph of Turn Evil
    57034 => 773, //Glyph of Seal of Light
    57035 => 773, //Glyph of Seal of Wisdom
    57021 => 773, //Glyph of Avenging Wrath
    57028 => 773, //Glyph of Hammer of Wrath
    57019 => 773, //Glyph of Avenger's Shield
    57194 => 773, //Glyph of Power Word: Shield
    57196 => 773, //Glyph of Psychic Scream
    57184 => 773, //Glyph of Fade
    57186 => 773, //Glyph of Flash Heal
    57188 => 773, //Glyph of Inner Fire
    57197 => 773, //Glyph of Renew
    57200 => 773, //Glyph of Mind Flay
    57201 => 773, //Glyph of Smite
    57183 => 773, //Glyph of Dispel Magic
    57185 => 773, //Glyph of Fear Ward
    57187 => 773, //Glyph of Holy Nova
    57192 => 773, //Glyph of Shadow Word: Pain
    57193 => 773, //Glyph of Shadow
    57198 => 773, //Glyph of Scourge Imprisonment
    57191 => 773, //Glyph of Mind Control
    57195 => 773, //Glyph of Prayer of Healing
    57202 => 773, //Glyph of Spirit of Redemption
    57189 => 773, //Glyph of Lightwell
    57181 => 773, //Glyph of Circle of Healing
    57199 => 773, //Glyph of Shadow Word: Death
    57190 => 773, //Glyph of Mass Dispel
    57114 => 773, //Glyph of Backstab
    57119 => 773, //Glyph of Evasion
    57120 => 773, //Glyph of Eviscerate
    57121 => 773, //Glyph of Expose Armor
    57123 => 773, //Glyph of Garrote
    57125 => 773, //Glyph of Gouge
    57129 => 773, //Glyph of Sap
    57131 => 773, //Glyph of Sinister Strike
    57132 => 773, //Glyph of Slice and Dice
    57133 => 773, //Glyph of Sprint
    57122 => 773, //Glyph of Feint
    57113 => 773, //Glyph of Ambush
    57116 => 773, //Glyph of Crippling Poison
    57124 => 773, //Glyph of Ghostly Strike
    57128 => 773, //Glyph of Rupture
    57115 => 773, //Glyph of Blade Flurry
    57126 => 773, //Glyph of Hemorrhage
    57127 => 773, //Glyph of Preparation
    57112 => 773, //Glyph of Adrenaline Rush
    57117 => 773, //Glyph of Deadly Throw
    57130 => 773, //Glyph of Vigor
    57239 => 773, //Glyph of Flame Shock
    57246 => 773, //Glyph of Lightning Shield
    57238 => 773, //Glyph of Fire Nova
    57240 => 773, //Glyph of Flametongue Weapon
    57245 => 773, //Glyph of Lightning Bolt
    57249 => 773, //Glyph of Lava Lash
    57241 => 773, //Glyph of Frost Shock
    57242 => 773, //Glyph of Healing Stream Totem
    57244 => 773, //Glyph of Lesser Healing Wave
    57251 => 773, //Glyph of Water Mastery
    57236 => 773, //Glyph of Earthliving Weapon
    57252 => 773, //Glyph of Windfury Weapon
    57233 => 773, //Glyph of Chain Lightning
    57232 => 773, //Glyph of Chain Heal
    57247 => 773, //Glyph of Mana Tide Totem
    57248 => 773, //Glyph of Stormstrike
    57235 => 773, //Glyph of Shocking
    57243 => 773, //Glyph of Healing Wave
    57250 => 773, //Glyph of Elemental Mastery
    57234 => 773, //Glyph of Lava
    57237 => 773, //Glyph of Fire Elemental Totem
    57259 => 773, //Glyph of Corruption
    57266 => 773, //Glyph of Healthstone
    57265 => 773, //Glyph of Health Funnel
    57262 => 773, //Glyph of Fear
    57269 => 773, //Glyph of Imp
    57271 => 773, //Glyph of Shadow Bolt
    57277 => 773, //Glyph of Voidwalker
    57270 => 773, //Glyph of Searing Pain
    57274 => 773, //Glyph of Soulstone
    57272 => 773, //Glyph of Shadowburn
    57275 => 773, //Glyph of Succubus
    57257 => 773, //Glyph of Incinerate
    57264 => 773, //Glyph of Felhunter
    57273 => 773, //Glyph of Siphon Life
    57258 => 773, //Glyph of Conflagrate
    57267 => 773, //Glyph of Howl of Terror
    57260 => 773, //Glyph of Curse of Agony
    57268 => 773, //Glyph of Immolate
    57261 => 773, //Glyph of Death Coil
    57263 => 773, //Glyph of Felguard
    57276 => 773, //Glyph of Unstable Affliction
    58484 => 773, //Scroll of Strength
    58485 => 773, //Scroll of Strength II
    58486 => 773, //Scroll of Strength III
    58487 => 773, //Scroll of Strength IV
    58488 => 773, //Scroll of Strength V
    58489 => 773, //Scroll of Strength VI
    58490 => 773, //Scroll of Strength VII
    58491 => 773, //Scroll of Strength VIII
    58472 => 773, //Scroll of Agility
    58473 => 773, //Scroll of Agility II
    58476 => 773, //Scroll of Agility III
    58478 => 773, //Scroll of Agility IV
    58480 => 773, //Scroll of Agility V
    58481 => 773, //Scroll of Agility VI
    58482 => 773, //Scroll of Agility VII
    58483 => 773, //Scroll of Agility VIII
    58565 => 773, //Mystic Tome
    59480 => 773, //Strange Tarot
    59487 => 773, //Arcane Tarot
    59491 => 773, //Shadowy Tarot
    59502 => 773, //Darkmoon Card
    59503 => 773, //Greater Darkmoon Card
    59504 => 773, //Darkmoon Card of the North
    61117 => 773, //Master's Inscription of the Axe
    61119 => 773, //Master's Inscription of the Pinnacle
    61120 => 773, //Master's Inscription of the Storm
    61118 => 773, //Master's Inscription of the Crag
    61177 => 773, //Northrend Inscription Research
    61288 => 773, //Minor Inscription Research
    58296 => 773, //Glyph of the Wild
    58289 => 773, //Glyph of Thorns
    58299 => 773, //Glyph of Revive Pet
    58301 => 773, //Glyph of Mend Pet
    58298 => 773, //Glyph of Scare Beast
    58300 => 773, //Glyph of Possessed Strength
    58303 => 773, //Glyph of Arcane Intellect
    58306 => 773, //Glyph of Frost Armor
    58310 => 773, //Glyph of the Penguin
    58308 => 773, //Glyph of Slow Fall
    58314 => 773, //Glyph of Blessing of Might
    58313 => 773, //Glyph of Lay on Hands
    58312 => 773, //Glyph of Blessing of Wisdom
    58318 => 773, //Glyph of Fortitude
    58317 => 773, //Glyph of Fading
    58326 => 773, //Glyph of Pick Pocket
    58323 => 773, //Glyph of Blurred Speed
    58337 => 773, //Glyph of Drain Soul
    58342 => 773, //Glyph of Battle
    58344 => 773, //Glyph of Charge
    58346 => 773, //Glyph of Thunder Clap
    58343 => 773, //Glyph of Bloodrage
    58286 => 773, //Glyph of Aquatic Form
    58288 => 773, //Glyph of Unburdened Rebirth
    58305 => 773, //Glyph of Fire Ward
    58311 => 773, //Glyph of Blessing of Kings
    58315 => 773, //Glyph of Sense Undead
    58320 => 773, //Glyph of Shackle Undead
    58325 => 773, //Glyph of Pick Lock
    58332 => 773, //Glyph of Water Shield
    59326 => 773, //Glyph of Ghost Wolf
    58336 => 773, //Glyph of Unending Breath
    58345 => 773, //Glyph of Mocking Blow
    58307 => 773, //Glyph of Frost Ward
    58324 => 773, //Glyph of Distract
    58328 => 773, //Glyph of Vanish
    58331 => 773, //Glyph of Water Breathing
    58340 => 773, //Glyph of Kilrogg
    59315 => 773, //Glyph of Dash
    58287 => 773, //Glyph of Challenging Roar
    58302 => 773, //Glyph of Feign Death
    58316 => 773, //Glyph of the Wise
    58321 => 773, //Glyph of Shadow Protection
    58333 => 773, //Glyph of Water Walking
    58329 => 773, //Glyph of Astral Recall
    58330 => 773, //Glyph of Renewed Life
    58338 => 773, //Glyph of Curse of Exhaustion
    58339 => 773, //Glyph of Enslave Demon
    58319 => 773, //Glyph of Levitate
    58297 => 773, //Glyph of the Pack
    58327 => 773, //Glyph of Safe Fall
    58347 => 773, //Glyph of Enduring Victory
    58322 => 773, //Glyph of Shadowfiend
    58341 => 773, //Glyph of Souls
    57162 => 773, //Glyph of Rapid Charge
    57158 => 773, //Glyph of Heroic Strike
    59475 => 773, //Tome of the Dawn
    59478 => 773, //Book of Survival
    57163 => 773, //Glyph of Rending
    57157 => 773, //Glyph of Hamstring
    57167 => 773, //Glyph of Sunder Armor
    59484 => 773, //Tome of Kings
    59486 => 773, //Royal Guide of Escape Routes
    57161 => 773, //Glyph of Overpower
    57165 => 773, //Glyph of Revenge
    59499 => 773, //Armor Vellum II
    59387 => 773, //Certificate of Ownership
    60336 => 773, //Scroll of Recall II
    59489 => 773, //Fire Eater's Guide
    59490 => 773, //Book of Stars
    59488 => 773, //Weapon Vellum II
    57151 => 773, //Glyph of Barbaric Insults
    57154 => 773, //Glyph of Cleaving
    59493 => 773, //Stormbound Tome
    59494 => 773, //Manual of Clouds
    57156 => 773, //Glyph of Execution
    59495 => 773, //Hellfire Tome
    59496 => 773, //Book of Clever Tricks
    59338 => 773, //Glyph of Rune Tap
    57168 => 773, //Glyph of Sweeping Strikes
    59339 => 773, //Glyph of Blood Strike
    59340 => 773, //Glyph of Death Strike
    57172 => 773, //Glyph of Whirlwind
    60337 => 773, //Scroll of Recall III
    59497 => 773, //Iron-bound Tome
    59498 => 773, //Faces of Doom
    59500 => 773, //Armor Vellum III
    59501 => 773, //Weapon Vellum III
    57159 => 773, //Glyph of Intervene
    57170 => 773, //Glyph of Victory Rush
    57152 => 773, //Glyph of Blocking
    57169 => 773, //Glyph of Taunt
    57160 => 773, //Glyph of Mortal Strike
    57166 => 773, //Glyph of Last Stand
    59559 => 773, //Glyph of Holy Wrath
    57155 => 773, //Glyph of Devastate
    59561 => 773, //Glyph of Seal of Vengeance
    57153 => 773, //Glyph of Bloodthirst
    57164 => 773, //Glyph of Resonating Power
    59560 => 773, //Glyph of Seal of Righteousness
    57014 => 773, //Glyph of Wyvern Sting
    61677 => 773, //Glyph of Frostfire
    56990 => 773, //Glyph of Blast Wave
    57253 => 773, //Glyph of Thunderstorm
    56965 => 773, //Glyph of Typhoon
    62162 => 773, //Glyph of Focus
    56991 => 773, //Glyph of Arcane Blast
    64051 => 773, //Rituals of the New Moon
    64053 => 773, //Twilight Tome
    64248 => 773, //Glyph of Life Tap
    64246 => 773, //Glyph of Raptor Strike
    64247 => 773, //Glyph of Stoneclaw Totem
    64249 => 773, //Glyph of Scatter Shot
    64250 => 773, //Glyph of Soul Link
    64251 => 773, //Glyph of Salvation
    64252 => 773, //Glyph of Shield Wall
    64253 => 773, //Glyph of Explosive Trap
    64254 => 773, //Glyph of Holy Shock
    64255 => 773, //Glyph of Vigilance
    64256 => 773, //Glyph of Barkskin
    64257 => 773, //Glyph of Ice Barrier
    64261 => 773, //Glyph of Earth Shield
    64258 => 773, //Glyph of Monsoon
    64260 => 773, //Glyph of Mutilate
    64259 => 773, //Glyph of Pain Suppression
    64262 => 773, //Glyph of Totem of Wrath
    64266 => 773, //Glyph of Dark Death
    64267 => 773, //Glyph of Disease
    64276 => 773, //Glyph of Arcane Barrage
    64277 => 773, //Glyph of Beacon of Light
    64268 => 773, //Glyph of Berserk
    64295 => 773, //Glyph of Bladestorm
    64294 => 773, //Glyph of Chaos Bolt
    64271 => 773, //Glyph of Chimera Shot
    64297 => 773, //Glyph of Dancing Rune Weapon
    64274 => 773, //Glyph of Deep Freeze
    64280 => 773, //Glyph of Dispersion
    64279 => 773, //Glyph of Divine Storm
    64273 => 773, //Glyph of Explosive Shot
    64288 => 773, //Glyph of Feral Spirit
    64281 => 773, //Glyph of Guardian Spirit
    64278 => 773, //Glyph of Hammer of the Righteous
    64291 => 773, //Glyph of Haunt
    64300 => 773, //Glyph of Howling Blast
    64284 => 773, //Glyph of Hunger for Blood
    64298 => 773, //Glyph of Hungering Cold
    64283 => 773, //Glyph of Hymn of Hope
    64285 => 773, //Glyph of Killing Spree
    64275 => 773, //Glyph of Living Bomb
    64318 => 773, //Glyph of Metamorphosis
    64282 => 773, //Glyph of Penance
    64289 => 773, //Glyph of Riptide
    64286 => 773, //Glyph of Shadow Dance
    64296 => 773, //Glyph of Shockwave
    64287 => 773, //Glyph of Thunder
    64299 => 773, //Glyph of Unholy Blight
    64270 => 773, //Glyph of Wild Growth
    64302 => 773, //Glyph of Spell Reflection
    64303 => 773, //Glyph of Cloak of Shadows
    64305 => 773, //Glyph of Divine Plea
    64304 => 773, //Glyph of Kill Shot
    64312 => 773, //Glyph of Enraged Regeneration
    64309 => 773, //Glyph of Mind Sear
    64307 => 773, //Glyph of Savage Roar
    64311 => 773, //Glyph of Shadowflame
    64308 => 773, //Glyph of Shield of Righteousness
    64310 => 773, //Glyph of Tricks of the Trade
    64317 => 773, //Glyph of Demonic Circle
    64315 => 773, //Glyph of Fan of Knives
    64316 => 773, //Glyph of Hex
    64314 => 773, //Glyph of Mirror Image
    64313 => 773, //Glyph of Nourish
    65245 => 773, //Glyph of Survival Instincts
    67600 => 773, //Glyph of Claw
    68166 => 773, //Glyph of Command
    69385 => 773, //Runescroll of Fortitude
    71101 => 773, //Glyph of Eternal Water
    71102 => 773, //Glyph of Quick Decay
    71015 => 773, //Glyph of Rapid Rejuvenation
);


function itemChange($pType,$ID) {
    switch ($pType) {
        case PBASIC:
            // 284 - 271
            switch ($ID) {
                // RUBY SANCTUM
                case 54583: return 53489;   // Clock of burning Dust
                case 54582: return 53486;   // Bracers of fiery night 
                case 54584: return 53134;   // Phaseshifter's bracers
                case 54580: return 53126;   // Umbrage armbands
                case 54587: return 53488;   // Split shape belt
                case 54577: return 53127;   // Returning Footfalls 
                case 54578: return 53125;   // Apocalypse's advance  
                case 54586: return 53487;   // Foreshadow steps  
                case 54579: return 53129;   // Treads of impeding resurection 
                case 54581: return 53132;   // penumbra pendant
                case 54585: return 53490;   // Ring of phased regeneration
                case 54576: return 53133;   // Sighet of twilight
                case 54588: return 54572;   // Charred twilight scale
                case 54589: return 54573;   // Glowing twilight scale
                case 54591: return 54571;   // Petrifed twilight scale
                case 54590: return 54569;   // Sharpned twilight scale 
                // ICC
                case 50737: return 50012;   // Sharpned twilight scale 
                case 50733: return 49981;   // Fal'inrush, defender of quel'thalas
                case 50730: return 50070;   // Glorenzelg, high-blade of the silver hand
                case 50735: return 50425;   // Oathbrinder, charge of the ranger-general 
                case 50734: return 50428;   // Royal scepter of terenas 
                case 50731: return 50429;   // Archeus,Greatstaff of antonidas 
                case 50732: return 50427;   // Bloodsurge , Kel'thusad's Blade of agony
                case 50736: return 50426;   // Heaven's fall, kryss of a thousend lies
                case 50738: return 49997;   // Mithrios, bronzebeard's legacy 
            }
        break;
    }
    
    return false;
}
