<?php
    function GetSkillID($skill, $locale) {
        switch($locale) {
            case "FRFR": {
                switch($skill) {
                    case "EPÉES":               return 43;
                    case "HACHES":              return 44;
                    case "ARCS":                return 45;
                    case "ARMES À FEU":         return 46;
                    case "MASSE":               return 54;
                    case "EPÉES À DEUX MAINS":  return 55;
                    case "DÉFENSE":             return 95;
                    case "SECOURISME":          return 129;
                    case "BÂTONS":              return 136;
                    case "MASSES À DEUX MAINS": return 160;
                    case "MAINS NUES":          return 162;
                    case "FORGE":               return 164;
                    case "TRAVAIL DU CUIR":     return 165;
                    case "ALCHIMIE":            return 171;
                    case "HACHES À DEUX MAINS": return 172;
                    case "DAGUES":              return 173;
                    case "ARMES DE JET":        return 176;
                    case "HERBORISTERIE":       return 182;
                    case "CUISINE":             return 185;
                    case "MINAGE":              return 186;
                    case "COUTURE":             return 197;
                    case "INGÉNIERIE":          return 202;
                    case "ARBALÈTES":           return 226;
                    case "BAGUETTES":           return 228;
                    case "ARMES D'HAST":        return 229;
                    case "ARMURE EN PLAQUES":   return 293;
                    case "ENCHANTEMENT":        return 333;
                    case "PÊCHE":               return 356;
                    case "DÉPEÇAGE":            return 393;
                    case "MAILLES":             return 413;
                    case "CUIR":                return 414;
                    case "TISSU":               return 415;
                    case "BOUCLIER":            return 433;
                    case "ARMES DE PUGILAT":    return 473;
                    case "CROCHETAGE":          return 633;
                    case "JOAILLERIE":          return 755;
                    case "CALLIGRAPHIE":        return 773;
                    case "RUNEFORGER":          return 776;
                    default: return -1;
                }
            }
            case "DEDE": {
                switch($skill) {
                    case "SCHWERTER":           return 43;
                    case "AXTE":                return 44;
                    case "BOGEN":               return 45;
                    case "SCHUSSWAFFEN":        return 46;
                    case "STREITKOLBEN":        return 54;
                    case "ZWEIHANDSCHWERTER":   return 55;
                    case "VERTEIDIGUNG":        return 95;
                    case "ERSTE HILFE":         return 129;
                    case "STABE":               return 136;
                    case "ZWEIHANDSTREITKOLBEN":return 160;
                    case "UNBEWAFFNET":         return 162;
                    case "SCHMIEDEKUNST":       return 164;
                    case "LEDERVERARBEITUNG":   return 165;
                    case "ALCHEMIE":            return 171;
                    case "ZWEIHANDAXTE":        return 172;
                    case "DOLCHE":              return 173;
                    case "WURFWAFFEN":          return 176;
                    case "KRAUTERKUNDE":        return 182;
                    case "KOCHKUNST":           return 185;
                    case "BERGBAU":             return 186;
                    case "SCHNEIDEREI":         return 197;
                    case "INGENIEURSKUNST":     return 202;
                    case "ARMBRUSTE":           return 226;
                    case "ZAUBERSTABE":         return 228;
                    case "STANGENWAFFEN":       return 229;
                    case "PLATTENPANZER":       return 293;
                    case "VERZAUBERKUNST":      return 333;
                    case "ANGELN":              return 356;
                    case "KURSCHNEREI":         return 393;
                    case "SCHWERE RUSTUNG":     return 413;
                    case "LEDER":               return 414;
                    case "STOFF":               return 415;
                    case "SCHILD":              return 433;
                    case "FAUSTWAFFEN":         return 473;
                    case "SCHLOSSKNACKEN":      return 633;
                    case "JUWELENSCHLEIFEN":    return 755;
                    case "INSCHRIFTENKUNDE":    return 773;
                    case "RUNEN SCHMIEDEN":     return 776;
                    default: return -1;
                }
            }
            case "RURU": {
                switch($skill) {
                    case "МЕЧИ":                        return 43;
                    case "ТОПОРЫ":                      return 44;
                    case "ЛУКИ":                        return 45;
                    case "ОГНЕСТРЕЛЬНОЕ ОРУЖИЕ":        return 46;
                    case "ДРОБЯЩЕЕ ОРУЖИЕ":             return 54;
                    case "ДВУРУЧНЫЕ МЕЧИ":              return 55;
                    case "ЗАЩИТА":                      return 95;
                    case "ПЕРВАЯ ПОМОЩЬ":               return 129;
                    case "ПОСОХИ":                      return 136;
                    case "ДВУРУЧНОЕ ДРОБЯЩЕЕ ОРУЖИЕ":   return 160;
                    case "РУКОПАШНЫЙ БОЙ":              return 162;
                    case "КУЗНЕЧНОЕ ДЕЛО":              return 164;
                    case "КОЖЕВНИЧЕСТВО":               return 165;
                    case "АЛХИМИЯ":                     return 171;
                    case "ДВУРУЧНЫЕ ТОПОРЫ":            return 172;
                    case "КИНЖАЛЫ":                     return 173;
                    case "МЕТАТЕЛЬНОЕ ОРУЖИЕ":          return 176;
                    case "ТРАВНИЧЕСТВО":                return 182;
                    case "КУЛИНАРИЯ":                   return 185;
                    case "ГОРНОЕ ДЕЛО":                 return 186;
                    case "ПОРТНЯЖНОЕ ДЕЛО":             return 197;
                    case "ИНЖЕНЕРНОЕ ДЕЛО":             return 202;
                    case "АРБАЛЕТЫ":                    return 226;
                    case "ЖЕЗЛЫ":                       return 228;
                    case "ДРЕВКОВОЕ ОРУЖИЕ":            return 229;
                    case "ЛАТЫ":                        return 293;
                    case "НАЛОЖЕНИЕ ЧАР":               return 333;
                    case "РЫБНАЯ ЛОВЛЯ":                return 356;
                    case "СНЯТИЕ ШКУР":                 return 393;
                    case "КОЛЬЧУЖНЫЕ ДОСПЕХИ":          return 413;
                    case "КОЖАНЫЕ ДОСПЕХИ":             return 414;
                    case "ТКАНЕВЫЕ ДОСПЕХИ":            return 415;
                    case "ЩИТ":                         return 433;
                    case "КИСТЕВОЕ ОРУЖИЕ":             return 473;
                    case "ВЗЛОМ":                       return 633;
                    case "ЮВЕЛИРНОЕ ДЕЛО":              return 755;
                    case "НАЧЕРТАНИЕ":                  return 773;
                    case "КОВКА РУН":                   return 776;
                    default: return -1;
                }
            }
            case "ESES": {
                switch($skill) {
                    case "ESPADAS":             return 43;
                    case "HACHAS":              return 44;
                    case "ARCOS":               return 45;
                    case "ARMAS DE FUEGO":      return 46;
                    case "MAZAS":               return 54;
                    case "ESPADAS DE DOS MANOS":return 55;
                    case "DEFENSA":             return 95;
                    case "PRIMEROS AUXILIOS":   return 129;
                    case "BASTONES":            return 136;
                    case "MAZAS DE DOS MANOS":  return 160;
                    case "SIN ARMAS":           return 162;
                    case "HERRERÍA":            return 164;
                    case "PELETERÍA":           return 165;
                    case "ALQUIMIA":            return 171;
                    case "HACHAS DE DOS MANOS": return 172;
                    case "DAGAS":               return 173;
                    case "ARMAS ARROJADIZAS":   return 176;
                    case "HERBORISTERÍA":       return 182;
                    case "COCINA":              return 185;
                    case "MINERÍA":             return 186;
                    case "SASTRERÍA":           return 197;
                    case "INGENIERÍA":          return 202;
                    case "BALLESTAS":           return 226;
                    case "VARITAS":             return 228;
                    case "ARMAS DE ASTA":       return 229;
                    case "MALLA DE PLACAS":     return 293;
                    case "ENCANTAMIENTO":       return 333;
                    case "PESCA":               return 356;
                    case "DESOLLAR":            return 393;
                    case "MALLA":               return 413;
                    case "CUERO":               return 414;
                    case "TELA":                return 415;
                    case "ESCUDO":              return 433;
                    case "ARMAS DE PUÑO":       return 473;
                    case "GANZÚA":              return 633;
                    case "JOYERÍA":             return 755;
                    case "INSCRIPCIÓN":         return 773;
                    case "FORJA DE RUNAS":      return 776;
                    default: return -1;
                }
            }
            case "ENUS":
            case "ENGB": {
                switch($skill) {
                    case "SWORDS":              return 43;
                    case "AXES":                return 44;
                    case "BOWS":                return 45;
                    case "GUNS":                return 46;
                    case "MACES":               return 54;
                    case "TWO-HANDED SWORDS":   return 55;
                    case "DEFENSE":             return 95;
                    case "FIRST AID":           return 129;
                    case "STAVES":              return 136;
                    case "TWO-HANDED MACES":    return 160;
                    case "UNARMED":             return 162;
                    case "BLACKSMITHING":       return 164;
                    case "LEATHERWORKING":      return 165;
                    case "ALCHEMY":             return 171;
                    case "TWO-HANDED AXES":     return 172;
                    case "DAGGERS":             return 173;
                    case "THROWN":              return 176;
                    case "HERBALISM":           return 182;
                    case "COOKING":             return 185;
                    case "MINING":              return 186;
                    case "TAILORING":           return 197;
                    case "ENGINEERING":         return 202;
                    case "CROSSBOWS":           return 226;
                    case "WANDS":               return 228;
                    case "POLEARMS":            return 229;
                    case "PLATE MAIL":          return 293;
                    case "ENCHANTING":          return 333;
                    case "FISHING":             return 356;
                    case "SKINNING":            return 393;
                    case "MAIL":                return 413;
                    case "LEATHER":             return 414;
                    case "CLOTH":               return 415;
                    case "SHIELD":              return 433;
                    case "FIST WEAPONS":        return 473;
                    case "LOCKPICKING":         return 633;
                    case "JEWELCRAFTING":       return 755;
                    case "INSCRIPTION":         return 773;
                    case "RUNEFORGING":         return 776;
                    default: return -1;
                }
            }
        }
    }

    function _GetGlyphID($GlyphID) {
        switch($GlyphID) {
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
        switch($Gem){
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
        switch($SkillID) {
            case 43:    return 201;
            case 44:    return 196;
            case 45:    return 264;
            case 46:    return 266;
            case 54:    return 198;
            case 55:    return 202;
            case 118:   return 674;
            case 95:    return 204;
            case 226:   return 5011;
            case 228:   return 5009;
            case 229:   return 200;
            case 293:   return 750;
            case 413:   return 8737;
            case 414:   return 9077;
            case 415:   return 9078;
            case 433:   return 9116;
            case 473:   return 15590;
            case 633:   return 1804;
            case 172:   return 197;
            case 173:   return 1180;
            case 176:   return 2567;
            case 136:   return 227;
            case 160:   return 199;
            case 162:   return 203;
            case 776:   return 53428;
            case 129: // First Aid
                switch($max) {
                    case 75:    return 3273;
                    case 150:   return 3274;
                    case 225:   return 7924;
                    case 300:   return 10846;
                    case 375:   return 27028;
                    case 450:   return 45542;
                }
                break;
            case 164: // Blacksmithing
                switch($max) {
                    case 75:    return 2018;
                    case 150:   return 3100;
                    case 225:   return 3538;
                    case 300:   return 9785;
                    case 375:   return 29844;
                    case 450:   return 51300;
                }
                break;
            case 165: // Leatherworking
                switch($max) {
                    case 75:    return 2108;
                    case 150:   return 3104;
                    case 225:   return 3811;
                    case 300:   return 10662;
                    case 375:   return 32549;
                    case 450:   return 51302;
                }
                break;
            case 171: // Alchemy
                switch($max) {
                    case 75:    return 2259;
                    case 150:   return 3101;
                    case 225:   return 3464;
                    case 300:   return 11611;
                    case 375:   return 28596;
                    case 450:   return 51304;
                }
                break;
            case 182: // Herbalism
                switch($max) {
                    case 75:    return 2366;
                    case 150:   return 2368;
                    case 225:   return 3570;
                    case 300:   return 11993;
                    case 375:   return 28695;
                    case 450:   return 50300;
                }
                break;
            case 185: // Cooking
                switch($max) {
                    case 75:    return 2550;
                    case 150:   return 3102;
                    case 225:   return 3413;
                    case 300:   return 18260;
                    case 375:   return 33359;
                    case 450:   return 51296;
                }
                break;
            case 186: // Mining
                switch($max) {
                    case 75:    return 2575;
                    case 150:   return 2576;
                    case 225:   return 3564;
                    case 300:   return 10248;
                    case 375:   return 29354;
                    case 450:   return 50310;
                }
                break;
            case 197: // Tailoring
                switch($max) {
                    case 75:    return 3908;
                    case 150:   return 3909;
                    case 225:   return 3910;
                    case 300:   return 12180;
                    case 375:   return 26790;
                    case 450:   return 51309;
                }
                break;
            case 202: // Engineering
                switch($max) {
                    case 75:    return 4036;
                    case 150:   return 4037;
                    case 225:   return 4038;
                    case 300:   return 12656;
                    case 375:   return 30350;
                    case 450:   return 51306;
                }
                break;
            case 333: // Enchanting
                switch($max) {
                    case 75:    return 7411;
                    case 150:   return 7412;
                    case 225:   return 7413;
                    case 300:   return 13920;
                    case 375:   return 28029;
                    case 450:   return 51313;
                }
                break;
            case 356: // Finishing
                switch($max) {
                    case 75:    return 7620;
                    case 150:   return 7731;
                    case 225:   return 7732;
                    case 300:   return 18248;
                    case 375:   return 33095;
                    case 450:   return 51294;
                }
                break;
            case 393: // Skinning
                switch($max) {
                    case 75:    return 8613;
                    case 150:   return 8617;
                    case 225:   return 8618;
                    case 300:   return 10768;
                    case 375:   return 32678;
                    case 450:   return 50305;
                }
                break;
            case 755: // Jewelcrafting
                switch($max) {
                    case 75:    return 25229;
                    case 150:   return 25230;
                    case 225:   return 28894;
                    case 300:   return 28895;
                    case 375:   return 28897;
                    case 450:   return 51311;
                }
                break;
            case 773:  // Inscription
                switch($max) {
                    case 75:    return 45357;
                    case 150:   return 45358;
                    case 225:   return 45359;
                    case 300:   return 45360;
                    case 375:   return 45361;
                    case 450:   return 45363;
                }
                break;
            default:
                return -1;
        }
    }
     
    function GetFactionID($faction, $locale) {
        switch($locale) {
            case "FRFR": {
                switch($faction) {
                    case "BAIE-DU-BUTIN":           return 21;
                    case "FORGEFER":                return 47;
                    case "EXILÉS DE GNOMEREGAN":    return 54;
                    case "CONFRÉRIE DU THORIUM":    return 59;
                    case "FOSSOYEUSE":              return 68;
                    case "DARNASSUS":               return 69;
                    case "SYNDICAT":                return 70;
                    case "HURLEVENT":               return 72;
                    case "ORGRIMMAR":               return 76;
                    case "LES PITONS DU TONNERRE":  return 81;
                    case "LA VOILE SANGLANTE":      return 87;
                    case "CENTAURES (GELKIS)":      return 92;
                    case "CENTAURES (MAGRAM)":      return 93;
                    case "TRIBU ZANDALAR":          return 270;
                    case "RAVENHOLDT":              return 349;
                    case "GADGETZAN":               return 369;
                    case "CABESTAN":                return 470;
                    case "LA LIGUE D'ARATHOR":      return 509;
                    case "LES PROFANATEURS":        return 510;
                    case "AUBE D'ARGENT":           return 529;
                    case "LES GRUMEGUEULES":        return 576;
                    case "LONG-GUET":               return 577;
                    case "ÉLEVEURS DE SABRES-D'HIVER": return 589;
                    case "CERCLE CÉNARIEN":         return 609;
                    case "CLAN LOUP-DE-GIVRE":      return 729;
                    case "GARDE FOUDREPIQUE":       return 730;
                    case "LES HYDRAXIENS":          return 749;
                    case "SHEN'DRALAR":             return 809;
                    case "SENTINELLES D'AILE-ARGENT": return 890;
                    case "FOIRE DE SOMBRELUNE":     return 909;
                    case "PROGÉNITURE DE NOZDORMU": return 910;
                    case "LUNE-D'ARGENT":           return 911;
                    case "TRANQUILLIEN":            return 922;
                    case "EXODAR":                  return 930;
                    case "L'ALDOR":                 return 932;
                    case "LE CONSORTIUM":           return 933;
                    case "LES CLAIRVOYANTS":        return 934;
                    case "LES SHA'TAR":             return 935;
                    case "SHATTRATH":               return 936;
                    case "MAG'HAR":                 return 941;
                    case "EXPÉDITION CÉNARIENNE":   return 942;
                    case "BASTION DE L'HONNEUR":    return 946;
                    case "THRALLMAR":               return 947;
                    case "L'ŒIL POURPRE":           return 967;
                    case "SPOREGGAR":               return 970;
                    case "KURENAÏ":                 return 978;
                    case "GARDIENS DU TEMPS":       return 989;
                    case "LA BALANCE DES SABLES":   return 990;
                    case "VILLE BASSE":             return 1011;
                    case "LIGEMORT CENDRELANGUE":   return 1012;
                    case "AILE-DU-NÉANT":           return 1015;
                    case "GARDE-CIEL SHA'TARI":     return 1031;
                    case "AVANT-GARDE DE L'ALLIANCE": return 1037;
                    case "OGRI'LA":                 return 1038;
                    case "EXPÉDITION DE LA BRAVOURE": return 1050;
                    case "EXPÉDITION DE LA HORDE":  return 1052;
                    case "LES TAUNKAS":             return 1064;
                    case "LA MAIN DE LA VENGEANCE": return 1067;
                    case "LIGUE DES EXPLORATEURS":  return 1068;
                    case "LES KALU'AKS":            return 1073;
                    case "OPÉRATION SOLEIL BRISÉ":  return 1077;
                    case "OFFENSIVE CHANTEGUERRE":  return 1085;
                    case "KIRIN TOR":               return 1090;
                    case "L'ACCORD DU REPOS DU VER": return 1091;
                    case "LE CONCORDAT ARGENTÉ":    return 1094;
                    case "CHEVALIERS DE LA LAME D'ÉBÈNE": return 1098;
                    case "TRIBU FRÉNÉCŒUR":         return 1104;
                    case "LES ORACLES":             return 1105;
                    case "LA CROISADE D'ARGENT":    return 1106;
                    case "LES FILS DE HODIR":       return 1119;
                    case "LES SACCAGE-SOLEIL":      return 1124;
                    case "LES GIVRE-NÉS":           return 1126;
                    case "HAIT TOUT ET TOUT LE MONDE": return 1145;
                    case "LE VERDICT DES CENDRES": return 1156;
                    default: return -1;
                }
            }
            case "DEDE": {
                switch($faction) {
                    case "BEUTEBUCHT":              return 21;
                    case "EISENSCHMIEDE":           return 47;
                    case "GNOMEREGANGNOME":         return 54;
                    case "THORIUMBRUDERSCHAFT":     return 59;
                    case "UNTERSTADT":              return 68;
                    case "DARNASSUS":               return 69;
                    case "SYNDIKAT":                return 70;
                    case "STURMWIND":               return 72;
                    case "ORGRIMMAR":               return 76;
                    case "DONNERFELS":              return 81;
                    case "BLUTSEGELBUKANIERE":      return 87;
                    case "GELKISKLAN":              return 92;
                    case "MAGRAMKLAN":              return 93;
                    case "STAMM DER ZANDALARI":     return 270;
                    case "RABENHOLDT":              return 349;
                    case "GADGETZAN":               return 369;
                    case "RATSCHET":                return 470;
                    case "DER BUND VON ARATHOR":    return 509;
                    case "DIE ENTWEIHTEN":          return 510;
                    case "ARGENTUMDÄMMERUNG":       return 529;
                    case "HOLZSCHLUNDFESTE":        return 576;
                    case "EWIGE WARTE":             return 577;
                    case "WINTERSÄBLERAUSBILDER":   return 589;
                    case "ZIRKEL DES CENARIUS":     return 609;
                    case "FROSTWOLFKLAN":           return 729;
                    case "STURMLANZENGARDE":        return 730;
                    case "HYDRAXIANER":             return 749;
                    case "SHEN'DRALAR":             return 809;
                    case "SILBERSCHWINGEN":         return 890;
                    case "DUNKELMOND-JAHRMARKT":    return 909;
                    case "BRUT NOZDORMUS":          return 910;
                    case "SILBERMOND":              return 911;
                    case "TRISTESSA":               return 922;
                    case "DIE EXODAR":              return 930;
                    case "DIE ALDOR":               return 932;
                    case "DAS KONSORTIUM":          return 933;
                    case "DIE SEHER":               return 934;
                    case "DIE SHA'TAR":             return 935;
                    case "SHATTRATH":               return 936;
                    case "DIE MAG'HAR":             return 941;
                    case "EXPEDITION DES CENARIUS": return 942;
                    case "EHRENFESTE":              return 946;
                    case "THRALLMAR":               return 947;
                    case "DAS VIOLETTE AUGE":       return 967;
                    case "SPOREGGAR":               return 970;
                    case "KURENAI":                 return 978;
                    case "HÜTER DER ZEIT":          return 989;
                    case "DIE WÄCHTER DER SANDE":   return 990;
                    case "UNTERES VIERTEL":         return 1011;
                    case "DIE TODESHÖRIGEN":        return 1012;
                    case "NETHERSCHWINGEN":         return 1015;
                    case "HIMMELSWACHE DER SHA'TARI": return 1031;
                    case "VORPOSTEN DER ALLIANZ":   return 1037;
                    case "OGRI'LA":                 return 1038;
                    case "EXPEDITION VALIANZ":      return 1050;
                    case "EXPEDITION DER HORDE":    return 1052;
                    case "DIE TAUNKA":              return 1064;
                    case "DIE HAND DER RACHE":      return 1067;
                    case "FORSCHERLIGA":            return 1068;
                    case "DIE KALU'AK":             return 1073;
                    case "OFFENSIVE DER ZERSCHMETTERTEN SONNE": return 1077;
                    case "KRIEGSHYMNENOFFENSIVE":   return 1085;
                    case "KIRIN TOR":               return 1090;
                    case "DER WYRMRUHPAKT":         return 1091;
                    case "DER SILBERBUND":          return 1094;
                    case "RITTER DER SCHWARZEN KLINGE": return 1098;
                    case "STAMM DER WILDHERZEN":    return 1104;
                    case "DIE ORAKEL":              return 1105;
                    case "ARGENTUMKREUZZUG":        return 1106;
                    case "DIE SÖHNE HODIRS":        return 1119;
                    case "DIE SONNENHÄSCHER":       return 1124;
                    case "DIE FROSTERBEN":          return 1126;
                    case "HASST ALLES":             return 1145;
                    case "DAS ÄSCHERNE VERDIKT":    return 1156;
                    default: return -1;
                }
            }
            case "ESES": {
                switch($faction) {
                    case "BAHÍA DEL BOTÍN":     return 21;
                    case "FORJAZ":              return 47;
                    case "EXILIADOS DE GNOMEREGAN": return 54;
                    case "HERMANDAD DEL TORIO": return 59;
                    case "ENTRAÑAS":            return 68;
                    case "DARNASSUS":           return 69;
                    case "LA HERMANDAD":        return 70;
                    case "VENTORMENTA":         return 72;
                    case "ORGRIMMAR":           return 76;
                    case "CIMA DEL TRUENO":     return 81;
                    case "BUCANEROS VELASANGRE": return 87;
                    case "CENTAUROS DEL CLAN GELKIS": return 92;
                    case "CENTAUROS DEL CLAN MAGRAM": return 93;
                    case "TRIBU ZANDALAR":      return 270;
                    case "RAVENHOLDT":          return 349;
                    case "TRINQUETE":           return 470;
                    case "LIGA DE ARATHOR":     return 509;
                    case "LOS RAPIÑADORES":     return 510;
                    case "EL ALBA ARGENTA":     return 529;
                    case "TROLS LANZA NEGRA":   return 530;
                    case "BASTIÓN FAUCES DE MADERA": return 576;
                    case "VISTA ETERNA":        return 577;
                    case "INSTRUCTORES DE SABLEINVERNALES": return 589;
                    case "CÍRCULO CENARION":    return 609;
                    case "CLAN LOBO GÉLIDO":    return 729;
                    case "GUARDIA PICO TORMENTA": return 730;
                    case "SRS. DEL AGUA DE HYDRAXIS": return 749;
                    case "SEÑORES DEL FUEGO DE SULFURON": return 750;
                    case "SHEN'DRALAR":         return 809;
                    case "CENTINELAS ALA DE PLATA": return 890;
                    case "FERIA DE LA LUNA NEGRA": return 909;
                    case "LINAJE DE NOZDORMU": return 910;
                    case "CIUDAD DE LUNARGENTA": return 911;
                    case "TRANQUILLIEN":        return 922;
                    case "EL EXODAR":           return 930;
                    case "LOS ALDOR":           return 932;
                    case "EL CONSORCIO":        return 933;
                    case "LOS ARÚSPICES":       return 934;
                    case "LOS SHA'TAR":         return 935;
                    case "CIUDAD DE SHATTRATH": return 936;
                    case "LOS MAG'HAR":         return 941;
                    case "EXPEDICIÓN CENARION": return 942;
                    case "BASTIÓN DEL HONOR":   return 946;
                    case "THRALLMAR":           return 947;
                    case "EL OJO VIOLETA":      return 967;
                    case "ESPORAGGAR":          return 970;
                    case "KURENAI":             return 978;
                    case "VIGILANTES DEL TIEMPO": return 989;
                    case "LA ESCAMA DE LAS ARENAS": return 990;
                    case "BAJO ARRABAL":        return 1011;
                    case "JURAMORTE LENGUA DE CENIZA": return 1012;
                    case "ALA ABISAL":          return 1015;
                    case "GUARDIA DEL CIELO SHA'TARI": return 1031;
                    case "VANGUARDIA DE LA ALIANZA": return 1037;
                    case "OGRI'LA":             return 1038;
                    case "EXPEDICIÓN DE DENUEDO": return 1050;
                    case "EXPEDICIÓN DE LA HORDA": return 1052;
                    case "LOS TAUNKA":          return 1064;
                    case "LA MANO DE LA VENGANZA": return 1067;
                    case "LIGA DE EXPEDICIONARIOS": return 1068;
                    case "LOS KALU'AK":         return 1073;
                    case "OFENSIVA SOL DEVASTADO": return 1077;
                    case "OFENSIVA GRITO DE GUERRA": return 1085;
                    case "KIRIN TOR":           return 1090;
                    case "EL ACUERDO DEL REPOSO DEL DRAGÓN": return 1091;
                    case "EL PACTO DE PLATA":   return 1094;
                    case "CABALLEROS DE LA ESPADA DE ÉBANO": return 1098;
                    case "TRIBU CORAZÓN FRENÉTICO": return 1104;
                    case "LOS ORÁCULOS":        return 1105;
                    case "CRUZADA ARGENTA":     return 1106;
                    case "LOS HIJOS DE HODIR":  return 1119;
                    case "LOS ATRACASOL":       return 1124;
                    case "LOS NATOESCARCHA":    return 1126;
                    case "ODIA TODO":           return 1145;
                    case "EL VEREDICTO CINÉREO": return 1156;
                    default: return -1;
                }
            }
            case "RURU": {
                switch($faction) {
                    case "ПИРАТСКАЯ БУХТА":         return 21;
                    case "СТАЛЬГОРН":               return 47;
                    case "ИЗГНАННИКИ ГНОМРЕГАНА":   return 54;
                    case "БРАТСТВО ТОРИЯ":          return 59;
                    case "ПОДГОРОД":                return 68;
                    case "ДАРНАС":                  return 69;
                    case "СИНДИКАТ":                return 70;
                    case "ШТОРМГРАД":               return 72;
                    case "ОРГРИММАР":               return 76;
                    case "ГРОМОВОЙ УТЕС":           return 81;
                    case "ПИРАТЫ КРОВАВОГО ПАРУСА": return 87;
                    case "КЕНТАВРЫ ИЗ ПЛЕМЕНИ ГЕЛКИС": return 92;
                    case "КЕНТАВРЫ ИЗ ПЛЕМЕНИ МАГРАМ": return 93;
                    case "ПЛЕМЯ ЗАНДАЛАР":          return 270;
                    case "ЧЕРНЫЙ ВОРОН":            return 349;
                    case "ПРИБАМБАССК":             return 369;
                    case "КАБЕСТАН":                return 470;
                    case "ЛИГА АРАТОРА":            return 509;
                    case "ОСКВЕРНИТЕЛИ":            return 510;
                    case "СЕРЕБРЯНЫЙ РАССВЕТ":      return 529;
                    case "ТРОЛЛИ ЧЕРНОГО КОПЬЯ":    return 530;
                    case "ДРЕВОБРЮХИ":              return 576;
                    case "КРУГОВЗОР":               return 577;
                    case "УКРОТИТЕЛИ ЛЕДОПАРДОВ":   return 589;
                    case "КРУГ КЕНАРИЯ":            return 609;
                    case "КЛАН СЕВЕРНОГО ВОЛКА":    return 729;
                    case "СТРАЖА ГРОЗОВОЙ ВЕРШИНЫ": return 730;
                    case "ГИДРАКСИАНСКИЕ ПОВЕЛИТЕЛИ ВОД": return 749;
                    case "ШЕН'ДРАЛАР":              return 809;
                    case "СРЕБРОКРЫЛЫЕ ЧАСОВЫЕ":    return 890;
                    case "ЯРМАРКА НОВОЛУНИЯ":       return 909;
                    case "РОД НОЗДОРМУ":            return 910;
                    case "ЛУНОСВЕТ":                return 911;
                    case "ТРАНКВИЛЛИОН":            return 922;
                    case "ЭКЗОДАР":                 return 930;
                    case "АЛДОРЫ":                  return 932;
                    case "КОНСОРЦИУМ":              return 933;
                    case "ПРОВИДЦЫ":                return 934;
                    case "ША'ТАР":                  return 935;
                    case "ГОРОД ШАТТРАТ":           return 936;
                    case "МАГ'ХАРЫ":                return 941;
                    case "КЕНАРИЙСКАЯ ЭКСПЕДИЦИЯ":  return 942;
                    case "ОПЛОТ ЧЕСТИ":             return 946;
                    case "ТРАЛЛМАР":                return 947;
                    case "АМЕТИСТОВОЕ ОКО":         return 967;
                    case "СПОРЕГГАР":               return 970;
                    case "КУРЕНАЙ":                 return 978;
                    case "ХРАНИТЕЛИ ВРЕМЕНИ":       return 989;
                    case "ПЕСЧАНАЯ ЧЕШУЯ":          return 990;
                    case "НИЖНИЙ ГОРОД":            return 1011;
                    case "ПЕПЛОУСТЫ-СЛУЖИТЕЛИ":     return 1012;
                    case "КРЫЛЬЯ ПУСТОТЫ":          return 1015;
                    case "СТРАЖИ НЕБЕС ША'ТАР":     return 1031;
                    case "АВАНГАРД АЛЬЯНСА":        return 1037;
                    case "ОГРИ'ЛА":                 return 1038;
                    case "ЭКСПЕДИЦИЯ ОТВАЖНЫХ":     return 1050;
                    case "ЭКСПЕДИЦИЯ ОРДЫ":         return 1052;
                    case "ТАУНКА":                  return 1064;
                    case "КАРАЮЩАЯ ДЛАНЬ":          return 1067;
                    case "ЛИГА ИССЛЕДОВАТЕЛЕЙ":     return 1068;
                    case "КАЛУ'АК":                 return 1073;
                    case "АРМИЯ РАСКОЛОТОГО СОЛНЦА": return 1077;
                    case "АРМИЯ ПЕСНИ ВОЙНЫ":       return 1085;
                    case "КИРИН-ТОР":               return 1090;
                    case "ДРАКОНИЙ СОЮЗ":           return 1091;
                    case "СЕРЕБРЯНЫЙ СОЮЗ":         return 1094;
                    case "РЫЦАРИ ЧЕРНОГО КЛИНКА":   return 1098;
                    case "ПЛЕМЯ БЕШЕНОГО СЕРДЦА":   return 1104;
                    case "ОРАКУЛЫ":                 return 1105;
                    case "СЕРЕБРЯНЫЙ АВАНГАРД":     return 1106;
                    case "СЫНЫ ХОДИРА":             return 1119;
                    case "ПОХИТИТЕЛИ СОЛНЦА":       return 1124;
                    case "ЗИМОРОЖДЕННЫЕ":           return 1126;
                    case "НЕНАВИДИТ ВСЕ":           return 1145;
                    case "ПЕПЕЛЬНЫЙ СОЮЗ":          return 1156;
                    default: return -1;
                }
            }
            case "ENUS":
            case "ENGB":
                switch($faction) {
                    case "BOOTY BAY":           return 21;
                    case "IRONFORGE":           return 47;
                    case "GNOMEREGAN EXILES":   return 54;
                    case "THORIUM BROTHERHOOD": return 59;
                    case "UNDERCITY":           return 68;
                    case "DARNASSUS":           return 69;
                    case "SYNDICATE":           return 70;
                    case "STORMWIND":           return 72;
                    case "ORGRIMMAR":           return 76;
                    case "THUNDER BLUFF":       return 81;
                    case "BLOODSAIL BUCCANEERS": return 87;
                    case "GELKIS CLAN CENTAUR": return 92;
                    case "MAGRAM CLAN CENTAUR": return 93;
                    case "ZANDALAR TRIBE":      return 270;
                    case "RAVENHOLDT":          return 349;
                    case "GADGETZAN":           return 369;
                    case "RATCHET":             return 470;
                    case "THE LEAGUE OF ARATHOR": return 509;
                    case "THE DEFILERS":        return 510;
                    case "ARGENT DAWN":         return 529;
                    case "DARKSPEAR TROLLS":    return 530;
                    case "TIMBERMAW HOLD":      return 576;
                    case "WINTERSABER TRAINERS": return 589;
                    case "CENARION CIRCLE":     return 609;
                    case "FROSTWOLF CLAN":      return 729;
                    case "STORMPIKE GUARD":     return 730;
                    case "HYDRAXIAN WATERLORDS": return 749;
                    case "SHEN'DRALAR":         return 809;
                    case "SILVERWING SENTINELS": return 890;
                    case "DARKMOON FAIRE":      return 909;
                    case "BROOD OF NOZDORMU":   return 910;
                    case "SILVERMOON CITY":     return 911;
                    case "TRANQUILLIEN":        return 922;
                    case "EXODAR":              return 930;
                    case "THE ALDOR":           return 932;
                    case "THE CONSORTIUM":      return 933;
                    case "THE SCRYERS":         return 934;
                    case "THE SHA'TAR":         return 935;
                    case "SHATTRATH CITY":      return 936;
                    case "THE MAG'HAR":         return 941;
                    case "CENARION EXPEDITION": return 942;
                    case "THE VIOLET EYE":      return 967;
                    case "SPOREGGAR":           return 970;
                    case "KURENAI":             return 978;
                    case "KEEPERS OF TIME":     return 989;
                    case "THE SCALE OF THE SANDS": return 990;
                    case "LOWER CITY":          return 1011;
                    case "ASHTONGUE DEATHSWORN": return 1012;
                    case "NETHERWING":          return 1015;
                    case "SHA'TARI SKYGUARD":   return 1031;
                    case "ALLIANCE VANGUARD":   return 1037;
                    case "OGRI'LA":             return 1038;
                    case "VALIANCE EXPEDITION": return 1050;
                    case "HORDE EXPEDITION":    return 1052;
                    case "THE TAUNKA":          return 1064;
                    case "THE HAND OF VENGEANCE": return 1067;
                    case "EXPLORERS' LEAGUE":   return 1068;
                    case "THE KALU'AK":         return 1073;
                    case "SHATTERED SUN OFFENSIVE": return 1077;
                    case "WARSONG OFFENSIVE":   return 1085;
                    case "KIRIN TOR":           return 1090;
                    case "THE WYRMREST ACCORD": return 1091;
                    case "THE SILVER COVENANT": return 1094;
                    case "KNIGHTS OF THE EBON BLADE": return 1098;
                    case "FRENZYHEART TRIBE":   return 1104;
                    case "THE ORACLES":         return 1105;
                    case "ARGENT CRUSADE":      return 1106;
                    case "THE SONS OF HODIR":   return 1119;
                    case "THE SUNREAVERS":      return 1124;
                    case "THE FROSTBORN":       return 1126;
                    case "HATES EVERYTHING":    return 1145;
                    case "THE ASHEN VERDICT":   return 1156;
                    default: return -1;
                }
        }
    }

    function _isClassSpellValid($SpellID, $ClassID) {
        switch($ClassID) {
            case 1: { // Warrior
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
                switch($SpellID) {
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
        switch($class) {
            case "WARRIOR":     return 1;
            case "PALADIN":     return 2;
            case "HUNTER":      return 3;
            case "ROGUE":       return 4;
            case "PRIEST":      return 5;
            case "DEATHKNIGHT": return 6;
            case "SHAMAN":      return 7;
            case "MAGE":        return 8;
            case "WARLOCK":     return 9;
            case "DRUID":       return 11;
            default: die ("<br>YOUR CHARACTER CLASS IS NOT BLIZZLIKE FOR 3.3.5a<br>");
        }
    }

    function _GetRaceID($race) {
        switch($race) {
            case "HUMAN":               return 1;
            case "ORC":                 return 2;
            case "DWARF":               return 3;
            case "NIGHTELF":            return 4;
            case "SCOURGE":             return 5; // INSTEAD UNDEAD
            case "TAUREN":              return 6;
            case "GNOME":               return 7;
            case "TROLL":               return 8;
            case "BLOODELF":            return 10;
            case "DRAENEI":             return 11;
            default: die ("<br>YOUR CHARACTER RACE IS NOT BLIZZLIKE FOR 3.3.5a<br>");
        }
    }

    function _isProfessionSpell($SpellID) {
        global $ProfessionSpells;
		return !empty($ProfessionSpells);
    }

    function _isSpellValid($SpellID, $ClassID)
    {
        if(_isClassSpellValid($SpellID, $ClassID))
            return true;
        elseif(_isProfessionSpell($SpellID))
            return true;
        return false;
    }
	
$ProfessionSpells = array (
  2153 => 'Handstitched Leather Pants',
  2158 => 'Fine Leather Boots',
  2159 => 'Fine Leather Cloak',
  2160 => 'Embossed Leather Vest',
  2161 => 'Embossed Leather Boots',
  2162 => 'Embossed Leather Cloak',
  2163 => 'White Leather Jerkin',
  2164 => 'Fine Leather Gloves',
  2165 => 'Medium Armor Kit',
  2166 => 'Toughened Leather Armor',
  2167 => 'Dark Leather Boots',
  2168 => 'Dark Leather Cloak',
  2169 => 'Dark Leather Tunic',
  2331 => 'Minor Mana Potion',
  2332 => 'Minor Rejuvenation Potion',
  2333 => 'Elixir of Lesser Agility',
  2334 => 'Elixir of Minor Fortitude',
  2335 => 'Swiftness Potion',
  2336 => 'Elixir of Tongues',
  2337 => 'Lesser Healing Potion',
  2385 => 'Brown Linen Vest',
  2386 => 'Linen Boots',
  2389 => 'Red Linen Robe',
  2392 => 'Red Linen Shirt',
  2393 => 'White Linen Shirt',
  2394 => 'Blue Linen Shirt',
  2395 => 'Barbaric Linen Vest',
  2396 => 'Green Linen Shirt',
  2397 => 'Reinforced Linen Cape',
  2399 => 'Green Woolen Vest',
  2401 => 'Woolen Boots',
  2402 => 'Woolen Cape',
  2403 => 'Gray Woolen Robe',
  2406 => 'Gray Woolen Shirt',
  2539 => 'Spiced Wolf Meat',
  2541 => 'Coyote Steak',
  2542 => 'Goretusk Liver Pie',
  2543 => 'Westfall Stew',
  2544 => 'Crab Cake',
  2545 => 'Cooked Crab Claw',
  2546 => 'Dry Pork Ribs',
  2547 => 'Redridge Goulash',
  2548 => 'Succulent Pork Ribs',
  2549 => 'Seasoned Wolf Kabob',
  2661 => 'Copper Chain Belt',
  2662 => 'Copper Chain Pants',
  2664 => 'Runed Copper Bracers',
  2665 => 'Coarse Sharpening Stone',
  2666 => 'Runed Copper Belt',
  2667 => 'Runed Copper Breastplate',
  2668 => 'Rough Bronze Leggings',
  2670 => 'Rough Bronze Cuirass',
  2671 => 'Rough Bronze Bracers',
  2672 => 'Patterned Bronze Bracers',
  2673 => 'Silvered Bronze Breastplate',
  2674 => 'Heavy Sharpening Stone',
  2675 => 'Shining Silver Breastplate',
  2737 => 'Copper Mace',
  2738 => 'Copper Axe',
  2739 => 'Copper Shortsword',
  2740 => 'Bronze Mace',
  2741 => 'Bronze Axe',
  2742 => 'Bronze Shortsword',
  2795 => 'Beer Basted Boar Ribs',
  2964 => 'Bolt of Woolen Cloth',
  3116 => 'Coarse Weightstone',
  3117 => 'Heavy Weightstone',
  3170 => 'Weak Troll\'s Blood Elixir',
  3171 => 'Elixir of Wisdom',
  3172 => 'Minor Magic Resistance Potion',
  3173 => 'Lesser Mana Potion',
  3174 => 'Potion of Curing',
  3175 => 'Limited Invulnerability Potion',
  3176 => 'Strong Troll\'s Blood Elixir',
  3177 => 'Elixir of Defense',
  3188 => 'Elixir of Ogre\'s Strength',
  3230 => 'Elixir of Minor Agility',
  3276 => 'Heavy Linen Bandage',
  3277 => 'Wool Bandage',
  3278 => 'Heavy Wool Bandage',
  3292 => 'Heavy Copper Broadsword',
  3293 => 'Copper Battle Axe',
  3294 => 'Thick War Axe',
  3295 => 'Deadly Bronze Poniard',
  3296 => 'Heavy Bronze Mace',
  3297 => 'Mighty Iron Hammer',
  3319 => 'Copper Chain Boots',
  3320 => 'Rough Grinding Stone',
  3321 => 'Copper Chain Vest',
  3323 => 'Runed Copper Gauntlets',
  3324 => 'Runed Copper Pants',
  3325 => 'Gemmed Copper Gauntlets',
  3326 => 'Coarse Grinding Stone',
  3328 => 'Rough Bronze Shoulders',
  3330 => 'Silvered Bronze Shoulders',
  3331 => 'Silvered Bronze Boots',
  3333 => 'Silvered Bronze Gauntlets',
  3334 => 'Green Iron Boots',
  3336 => 'Green Iron Gauntlets',
  3337 => 'Heavy Grinding Stone',
  3370 => 'Crocolisk Steak',
  3371 => 'Blood Sausage',
  3372 => 'Murloc Fin Soup',
  3373 => 'Crocolisk Gumbo',
  3376 => 'Curiously Tasty Omelet',
  3377 => 'Gooey Spider Cake',
  3397 => 'Big Bear Steak',
  3398 => 'Hot Lion Chops',
  3399 => 'Tasty Lion Steak',
  3400 => 'Soothing Turtle Bisque',
  3447 => 'Healing Potion',
  3448 => 'Lesser Invisibility Potion',
  3449 => 'Shadow Oil',
  3450 => 'Elixir of Fortitude',
  3451 => 'Major Troll\'s Blood Elixir',
  3452 => 'Mana Potion',
  3453 => 'Elixir of Detect Lesser Invisibility',
  3454 => 'Frost Oil',
  3491 => 'Big Bronze Knife',
  3492 => 'Hardened Iron Shortsword',
  3493 => 'Jade Serpentblade',
  3494 => 'Solid Iron Maul',
  3495 => 'Golden Iron Destroyer',
  3496 => 'Moonsteel Broadsword',
  3497 => 'Frost Tiger Blade',
  3498 => 'Massive Iron Axe',
  3500 => 'Shadow Crescent Axe',
  3501 => 'Green Iron Bracers',
  3502 => 'Green Iron Helm',
  3503 => 'Golden Scale Coif',
  3504 => 'Green Iron Shoulders',
  3505 => 'Golden Scale Shoulders',
  3506 => 'Green Iron Leggings',
  3507 => 'Golden Scale Leggings',
  3508 => 'Green Iron Hauberk',
  3511 => 'Golden Scale Cuirass',
  3513 => 'Polished Steel Boots',
  3515 => 'Golden Scale Boots',
  3753 => 'Handstitched Leather Belt',
  3755 => 'Linen Bag',
  3756 => 'Embossed Leather Gloves',
  3757 => 'Woolen Bag',
  3758 => 'Green Woolen Bag',
  3759 => 'Embossed Leather Pants',
  3760 => 'Hillman\'s Cloak',
  3761 => 'Fine Leather Tunic',
  3762 => 'Hillman\'s Leather Vest',
  3763 => 'Fine Leather Belt',
  3764 => 'Hillman\'s Leather Gloves',
  3765 => 'Dark Leather Gloves',
  3766 => 'Dark Leather Belt',
  3767 => 'Hillman\'s Belt',
  3768 => 'Hillman\'s Shoulders',
  3769 => 'Dark Leather Shoulders',
  3770 => 'Toughened Leather Gloves',
  3771 => 'Barbaric Gloves',
  3772 => 'Green Leather Armor',
  3773 => 'Guardian Armor',
  3774 => 'Green Leather Belt',
  3775 => 'Guardian Belt',
  3776 => 'Green Leather Bracers',
  3777 => 'Guardian Leather Bracers',
  3778 => 'Gem-studded Leather Belt',
  3779 => 'Barbaric Belt',
  3780 => 'Heavy Armor Kit',
  3813 => 'Small Silk Pack',
  3816 => 'Cured Light Hide',
  3817 => 'Cured Medium Hide',
  3818 => 'Cured Heavy Hide',
  3839 => 'Bolt of Silk Cloth',
  3840 => 'Heavy Linen Gloves',
  3841 => 'Green Linen Bracers',
  3842 => 'Handstitched Linen Britches',
  3843 => 'Heavy Woolen Gloves',
  3844 => 'Heavy Woolen Cloak',
  3845 => 'Soft-soled Linen Boots',
  3847 => 'Red Woolen Boots',
  3848 => 'Double-stitched Woolen Shoulders',
  3849 => 'Reinforced Woolen Shoulders',
  3850 => 'Heavy Woolen Pants',
  3851 => 'Phoenix Pants',
  3852 => 'Gloves of Meditation',
  3854 => 'Azure Silk Gloves',
  3855 => 'Spidersilk Boots',
  3856 => 'Spider Silk Slippers',
  3857 => 'Enchanter\'s Cowl',
  3858 => 'Shadow Hood',
  3859 => 'Azure Silk Vest',
  3860 => 'Boots of the Enchanter',
  3861 => 'Long Silken Cloak',
  3862 => 'Icy Cloak',
  3863 => 'Spider Belt',
  3864 => 'Star Belt',
  3865 => 'Bolt of Mageweave',
  3866 => 'Stylish Red Shirt',
  3868 => 'Phoenix Gloves',
  3869 => 'Bright Yellow Shirt',
  3870 => 'Dark Silk Shirt',
  3871 => 'Formal White Shirt',
  3872 => 'Rich Purple Silk Shirt',
  3873 => 'Black Swashbuckler\'s Shirt',
  3914 => 'Brown Linen Pants',
  3922 => 'Handful of Copper Bolts',
  3923 => 'Rough Copper Bomb',
  3924 => 'Copper Tube',
  3925 => 'Rough Boomstick',
  3926 => 'Copper Modulator',
  3928 => 'Mechanical Squirrel Box',
  3929 => 'Coarse Blasting Powder',
  3930 => 'Crafted Heavy Shot',
  3931 => 'Coarse Dynamite',
  3932 => 'Target Dummy',
  3933 => 'Small Seaforium Charge',
  3934 => 'Flying Tiger Goggles',
  3936 => 'Deadly Blunderbuss',
  3937 => 'Large Copper Bomb',
  3938 => 'Bronze Tube',
  3939 => 'Lovingly Crafted Boomstick',
  3940 => 'Shadow Goggles',
  3941 => 'Small Bronze Bomb',
  3942 => 'Whirring Bronze Gizmo',
  3944 => 'Flame Deflector',
  3945 => 'Heavy Blasting Powder',
  3946 => 'Heavy Dynamite',
  3947 => 'Crafted Solid Shot',
  3949 => 'Silver-plated Shotgun',
  3950 => 'Big Bronze Bomb',
  3952 => 'Minor Recombobulator',
  3953 => 'Bronze Framework',
  3954 => 'Moonsight Rifle',
  3955 => 'Explosive Sheep',
  3956 => 'Green Tinted Goggles',
  3957 => 'Ice Deflector',
  3958 => 'Iron Strut',
  3959 => 'Discombobulator Ray',
  3960 => 'Portable Bronze Mortar',
  3961 => 'Gyrochronatom',
  3962 => 'Iron Grenade',
  3963 => 'Compact Harvest Reaper Kit',
  3965 => 'Advanced Target Dummy',
  3966 => 'Craftsman\'s Monocle',
  3967 => 'Big Iron Bomb',
  3968 => 'Goblin Land Mine',
  3969 => 'Mechanical Dragonling',
  3971 => 'Gnomish Cloaking Device',
  3972 => 'Large Seaforium Charge',
  3973 => 'Silver Contact',
  3977 => 'Crude Scope',
  3978 => 'Standard Scope',
  3979 => 'Accurate Scope',
  4094 => 'Barbecued Buzzard Wing',
  4096 => 'Raptor Hide Harness',
  4097 => 'Raptor Hide Belt',
  4508 => 'Discolored Healing Potion',
  4942 => 'Lesser Stoneshield Potion',
  5244 => 'Kodo Hide Bag',
  6412 => 'Kaldorei Spider Kabob',
  6413 => 'Scorpid Surprise',
  6414 => 'Roasted Kodo Meat',
  6415 => 'Fillet of Frenzy',
  6416 => 'Strider Stew',
  6417 => 'Dig Rat Stew',
  6418 => 'Crispy Lizard Tail',
  6419 => 'Lean Venison',
  6458 => 'Ornate Spyglass',
  6499 => 'Boiled Clams',
  6500 => 'Goblin Deviled Clams',
  6501 => 'Clam Chowder',
  6517 => 'Pearl-handled Dagger',
  6518 => 'Iridescent Hammer',
  6521 => 'Pearl-clasped Cloak',
  6617 => 'Rage Potion',
  6618 => 'Great Rage Potion',
  6624 => 'Free Action Potion',
  6661 => 'Barbaric Harness',
  6686 => 'Red Linen Bag',
  6688 => 'Red Woolen Bag',
  6690 => 'Lesser Wizard\'s Robe',
  6692 => 'Robes of Arcana',
  6693 => 'Green Silk Pack',
  6695 => 'Black Silk Pack',
  6702 => 'Murloc Scale Belt',
  6703 => 'Murloc Scale Breastplate',
  6704 => 'Thick Murloc Armor',
  6705 => 'Murloc Scale Bracers',
  7133 => 'Fine Leather Pants',
  7135 => 'Dark Leather Pants',
  7147 => 'Guardian Pants',
  7149 => 'Barbaric Leggings',
  7151 => 'Barbaric Shoulders',
  7153 => 'Guardian Cloak',
  7156 => 'Guardian Gloves',
  7179 => 'Elixir of Water Breathing',
  7181 => 'Greater Healing Potion',
  7213 => 'Giant Clam Scorcho',
  7221 => 'Iron Shield Spike',
  7222 => 'Iron Counterweight',
  7223 => 'Golden Scale Bracers',
  7224 => 'Steel Weapon Chain',
  7255 => 'Holy Protection Potion',
  7256 => 'Shadow Protection Potion',
  7257 => 'Fire Protection Potion',
  7258 => 'Frost Protection Potion',
  7259 => 'Nature Protection Potion',
  7408 => 'Heavy Copper Maul',
  7420 => 'Enchant Chest - Minor Health',
  7426 => 'Enchant Chest - Minor Absorption',
  7430 => 'Arclight Spanner',
  7443 => 'Enchant Chest - Minor Mana',
  7454 => 'Enchant Cloak - Minor Resistance',
  7457 => 'Enchant Bracer - Minor Stamina',
  7623 => 'Brown Linen Robe',
  7624 => 'White Linen Robe',
  7629 => 'Red Linen Vest',
  7630 => 'Blue Linen Vest',
  7633 => 'Blue Linen Robe',
  7636 => 'Green Woolen Robe',
  7639 => 'Blue Overalls',
  7643 => 'Greater Adept\'s Robe',
  7745 => 'Enchant 2H Weapon - Minor Impact',
  7748 => 'Enchant Chest - Lesser Health',
  7751 => 'Brilliant Smallfish',
  7752 => 'Slitherskin Mackerel',
  7753 => 'Longjaw Mud Snapper',
  7754 => 'Loch Frenzy Delight',
  7755 => 'Bristle Whisker Catfish',
  7766 => 'Enchant Bracer - Minor Spirit',
  7771 => 'Enchant Cloak - Minor Protection',
  7776 => 'Enchant Chest - Lesser Mana',
  7779 => 'Enchant Bracer - Minor Agility',
  7782 => 'Enchant Bracer - Minor Strength',
  7786 => 'Enchant Weapon - Minor Beastslayer',
  7788 => 'Enchant Weapon - Minor Striking',
  7793 => 'Enchant 2H Weapon - Lesser Intellect',
  7795 => 'Runed Silver Rod',
  7817 => 'Rough Bronze Boots',
  7818 => 'Silver Rod',
  7827 => 'Rainbow Fin Albacore',
  7828 => 'Rockscale Cod',
  7836 => 'Blackmouth Oil',
  7837 => 'Fire Oil',
  7841 => 'Swim Speed Potion',
  7845 => 'Elixir of Firepower',
  7857 => 'Enchant Chest - Health',
  7859 => 'Enchant Bracer - Lesser Spirit',
  7861 => 'Enchant Cloak - Lesser Fire Resistance',
  7863 => 'Enchant Boots - Minor Stamina',
  7867 => 'Enchant Boots - Minor Agility',
  7892 => 'Stylish Blue Shirt',
  7893 => 'Stylish Green Shirt',
  7928 => 'Silk Bandage',
  7929 => 'Heavy Silk Bandage',
  7934 => 'Anti-Venom',
  7935 => 'Strong Anti-Venom',
  7953 => 'Deviate Scale Cloak',
  7954 => 'Deviate Scale Gloves',
  7955 => 'Deviate Scale Belt',
  8238 => 'Savory Deviate Delight',
  8240 => 'Elixir of Giant Growth',
  8243 => 'Flash Bomb',
  8322 => 'Moonglow Vest',
  8334 => 'Practice Lock',
  8339 => 'EZ-Thro Dynamite',
  8366 => 'Ironforge Chain',
  8367 => 'Ironforge Breastplate',
  8368 => 'Ironforge Gauntlets',
  8465 => 'Simple Dress',
  8467 => 'White Woolen Dress',
  8483 => 'White Swashbuckler\'s Shirt',
  8489 => 'Red Swashbuckler\'s Shirt',
  8607 => 'Smoked Bear Meat',
  8758 => 'Azure Silk Pants',
  8760 => 'Azure Silk Hood',
  8762 => 'Silk Headband',
  8764 => 'Earthen Vest',
  8766 => 'Azure Silk Belt',
  8768 => 'Iron Buckle',
  8770 => 'Robe of Power',
  8772 => 'Crimson Silk Belt',
  8774 => 'Green Silken Shoulders',
  8776 => 'Linen Belt',
  8778 => 'Boots of Darkness',
  8780 => 'Hands of Darkness',
  8782 => 'Truefaith Gloves',
  8784 => 'Green Silk Armor',
  8786 => 'Azure Silk Cloak',
  8789 => 'Crimson Silk Cloak',
  8791 => 'Crimson Silk Vest',
  8793 => 'Crimson Silk Shoulders',
  8795 => 'Azure Shoulders',
  8797 => 'Earthen Silk Belt',
  8799 => 'Crimson Silk Pantaloons',
  8802 => 'Crimson Silk Robe',
  8804 => 'Crimson Silk Gloves',
  8880 => 'Copper Dagger',
  8895 => 'Goblin Rocket Boots',
  9060 => 'Light Leather Quiver',
  9062 => 'Small Leather Ammo Pouch',
  9064 => 'Rugged Leather Pants',
  9065 => 'Light Leather Bracers',
  9068 => 'Light Leather Pants',
  9070 => 'Black Whelp Cloak',
  9072 => 'Red Whelp Gloves',
  9074 => 'Nimble Leather Gloves',
  9145 => 'Fletcher\'s Gloves',
  9146 => 'Herbalist\'s Gloves',
  9147 => 'Earthen Leather Shoulders',
  9148 => 'Pilferer\'s Gloves',
  9149 => 'Heavy Earthen Gloves',
  9193 => 'Heavy Quiver',
  9194 => 'Heavy Leather Ammo Pouch',
  9195 => 'Dusky Leather Leggings',
  9196 => 'Dusky Leather Armor',
  9197 => 'Green Whelp Armor',
  9198 => 'Frost Leather Cloak',
  9201 => 'Dusky Bracers',
  9202 => 'Green Whelp Bracers',
  9206 => 'Dusky Belt',
  9207 => 'Dusky Boots',
  9208 => 'Swift Boots',
  9269 => 'Gnomish Universal Remote',
  9271 => 'Aquadynamic Fish Attractor',
  9273 => 'Goblin Jumper Cables',
  9513 => 'Thistle Tea',
  9787 => true,
  9788 => true,
  9811 => 'Barbaric Iron Shoulders',
  9813 => 'Barbaric Iron Breastplate',
  9814 => 'Barbaric Iron Helm',
  9818 => 'Barbaric Iron Boots',
  9820 => 'Barbaric Iron Gloves',
  9916 => 'Steel Breastplate',
  9918 => 'Solid Sharpening Stone',
  9920 => 'Solid Grinding Stone',
  9921 => 'Solid Weightstone',
  9926 => 'Heavy Mithril Shoulder',
  9928 => 'Heavy Mithril Gauntlet',
  9931 => 'Mithril Scale Pants',
  9933 => 'Heavy Mithril Pants',
  9935 => 'Steel Plate Helm',
  9937 => 'Mithril Scale Bracers',
  9939 => 'Mithril Shield Spike',
  9942 => 'Mithril Scale Gloves',
  9945 => 'Ornate Mithril Pants',
  9950 => 'Ornate Mithril Gloves',
  9952 => 'Ornate Mithril Shoulder',
  9954 => 'Truesilver Gauntlets',
  9957 => 'Orcish War Leggings',
  9959 => 'Heavy Mithril Breastplate',
  9961 => 'Mithril Coif',
  9964 => 'Mithril Spurs',
  9966 => 'Mithril Scale Shoulders',
  9968 => 'Heavy Mithril Boots',
  9970 => 'Heavy Mithril Helm',
  9972 => 'Ornate Mithril Breastplate',
  9974 => 'Truesilver Breastplate',
  9979 => 'Ornate Mithril Boots',
  9980 => 'Ornate Mithril Helm',
  9983 => 'Copper Claymore',
  9985 => 'Bronze Warhammer',
  9986 => 'Bronze Greatsword',
  9987 => 'Bronze Battle Axe',
  9993 => 'Heavy Mithril Axe',
  9995 => 'Blue Glittering Axe',
  9997 => 'Wicked Mithril Blade',
  10001 => 'Big Black Mace',
  10003 => 'The Shatterer',
  10005 => 'Dazzling Mithril Rapier',
  10007 => 'Phantom Blade',
  10009 => 'Runed Mithril Hammer',
  10011 => 'Blight',
  10013 => 'Ebon Shiv',
  10015 => 'Truesilver Champion',
  10482 => 'Cured Thick Hide',
  10487 => 'Thick Armor Kit',
  10490 => 'Comfortable Leather Hat',
  10499 => 'Nightscape Tunic',
  10507 => 'Nightscape Headband',
  10509 => 'Turtle Scale Gloves',
  10511 => 'Turtle Scale Breastplate',
  10516 => 'Nightscape Shoulders',
  10518 => 'Turtle Scale Bracers',
  10520 => 'Big Voodoo Robe',
  10525 => 'Tough Scorpid Breastplate',
  10529 => 'Wild Leather Shoulders',
  10531 => 'Big Voodoo Mask',
  10533 => 'Tough Scorpid Bracers',
  10542 => 'Tough Scorpid Gloves',
  10544 => 'Wild Leather Vest',
  10546 => 'Wild Leather Helmet',
  10548 => 'Nightscape Pants',
  10550 => 'Nightscape Cloak',
  10552 => 'Turtle Scale Helm',
  10554 => 'Tough Scorpid Boots',
  10556 => 'Turtle Scale Leggings',
  10558 => 'Nightscape Boots',
  10560 => 'Big Voodoo Pants',
  10562 => 'Big Voodoo Cloak',
  10564 => 'Tough Scorpid Shoulders',
  10566 => 'Wild Leather Boots',
  10568 => 'Tough Scorpid Leggings',
  10570 => 'Tough Scorpid Helm',
  10572 => 'Wild Leather Leggings',
  10574 => 'Wild Leather Cloak',
  10619 => 'Dragonscale Gauntlets',
  10621 => 'Wolfshead Helm',
  10630 => 'Gauntlets of the Sea',
  10632 => 'Helm of Fire',
  10647 => 'Feathered Breastplate',
  10650 => 'Dragonscale Breastplate',
  10656 => true,
  10658 => true,
  10660 => true,
  10840 => 'Mageweave Bandage',
  10841 => 'Heavy Mageweave Bandage',
  11448 => 'Greater Mana Potion',
  11449 => 'Elixir of Agility',
  11450 => 'Elixir of Greater Defense',
  11451 => 'Oil of Immolation',
  11452 => 'Restorative Potion',
  11453 => 'Magic Resistance Potion',
  11454 => 'Inlaid Mithril Cylinder',
  11456 => 'Goblin Rocket Fuel',
  11457 => 'Superior Healing Potion',
  11458 => 'Wildvine Potion',
  11459 => 'Philosopher\'s Stone',
  11460 => 'Elixir of Detect Undead',
  11461 => 'Arcane Elixir',
  11464 => 'Invisibility Potion',
  11465 => 'Elixir of Greater Intellect',
  11466 => 'Gift of Arthas',
  11467 => 'Elixir of Greater Agility',
  11468 => 'Elixir of Dream Vision',
  11472 => 'Elixir of Giants',
  11473 => 'Ghost Dye',
  11476 => 'Elixir of Shadow Power',
  11477 => 'Elixir of Demonslaying',
  11478 => 'Elixir of Detect Demon',
  11479 => 'Transmute: Iron to Gold',
  11480 => 'Transmute: Mithril to Truesilver',
  11643 => 'Golden Scale Gauntlets',
  12045 => 'Simple Linen Boots',
  12046 => 'Simple Kilt',
  12047 => 'Colorful Kilt',
  12048 => 'Black Mageweave Vest',
  12049 => 'Black Mageweave Leggings',
  12050 => 'Black Mageweave Robe',
  12052 => 'Shadoweave Pants',
  12053 => 'Black Mageweave Gloves',
  12055 => 'Shadoweave Robe',
  12056 => 'Red Mageweave Vest',
  12059 => 'White Bandit Mask',
  12060 => 'Red Mageweave Pants',
  12061 => 'Orange Mageweave Shirt',
  12062 => 'Stormcloth Pants',
  12063 => 'Stormcloth Gloves',
  12064 => 'Orange Martial Shirt',
  12065 => 'Mageweave Bag',
  12066 => 'Red Mageweave Gloves',
  12067 => 'Dreamweave Gloves',
  12068 => 'Stormcloth Vest',
  12069 => 'Cindercloth Robe',
  12070 => 'Dreamweave Vest',
  12071 => 'Shadoweave Gloves',
  12072 => 'Black Mageweave Headband',
  12073 => 'Black Mageweave Boots',
  12074 => 'Black Mageweave Shoulders',
  12075 => 'Lavender Mageweave Shirt',
  12076 => 'Shadoweave Shoulders',
  12077 => 'Simple Black Dress',
  12078 => 'Red Mageweave Shoulders',
  12079 => 'Red Mageweave Bag',
  12080 => 'Pink Mageweave Shirt',
  12081 => 'Admiral\'s Hat',
  12082 => 'Shadoweave Boots',
  12083 => 'Stormcloth Headband',
  12084 => 'Red Mageweave Headband',
  12085 => 'Tuxedo Shirt',
  12086 => 'Shadoweave Mask',
  12087 => 'Stormcloth Shoulders',
  12088 => 'Cindercloth Boots',
  12089 => 'Tuxedo Pants',
  12090 => 'Stormcloth Boots',
  12091 => 'White Wedding Dress',
  12092 => 'Dreamweave Circlet',
  12093 => 'Tuxedo Jacket',
  12259 => 'Silvered Bronze Leggings',
  12584 => 'Gold Power Core',
  12585 => 'Solid Blasting Powder',
  12586 => 'Solid Dynamite',
  12587 => 'Bright-Eye Goggles',
  12589 => 'Mithril Tube',
  12590 => 'Gyromatic Micro-Adjustor',
  12591 => 'Unstable Trigger',
  12594 => 'Fire Goggles',
  12595 => 'Mithril Blunderbuss',
  12596 => 'Hi-Impact Mithril Slugs',
  12597 => 'Deadly Scope',
  12599 => 'Mithril Casing',
  12603 => 'Mithril Frag Bomb',
  12607 => 'Catseye Ultra Goggles',
  12609 => 'Catseye Elixir',
  12614 => 'Mithril Heavy-bore Rifle',
  12615 => 'Spellpower Goggles Xtreme',
  12616 => 'Parachute Cloak',
  12617 => 'Deepdive Helmet',
  12618 => 'Rose Colored Goggles',
  12619 => 'Hi-Explosive Bomb',
  12620 => 'Sniper Scope',
  12621 => 'Mithril Gyro-Shot',
  12622 => 'Green Lens',
  12624 => 'Mithril Mechanical Dragonling',
  12715 => 'Goblin Rocket Fuel Recipe',
  12716 => 'Goblin Mortar',
  12717 => 'Goblin Mining Helmet',
  12718 => 'Goblin Construction Helmet',
  12720 => 'Goblin "Boom" Box',
  12722 => 'Goblin Radio',
  12754 => 'The Big One',
  12755 => 'Goblin Bomb Dispenser',
  12758 => 'Goblin Rocket Helmet',
  12759 => 'Gnomish Death Ray',
  12760 => 'Goblin Sapper Charge',
  12895 => 'Inlaid Mithril Cylinder Plans',
  12897 => 'Gnomish Goggles',
  12899 => 'Gnomish Shrink Ray',
  12900 => 'Mobile Alarm',
  12902 => 'Gnomish Net-o-Matic Projector',
  12903 => 'Gnomish Harm Prevention Belt',
  12904 => 'Gnomish Ham Radio',
  12905 => 'Gnomish Rocket Boots',
  12906 => 'Gnomish Battle Chicken',
  12907 => 'Gnomish Mind Control Cap',
  12908 => 'Goblin Dragon Gun',
  13028 => 'Goldthorn Tea',
  13240 => 'The Mortar: Reloaded',
  13378 => 'Enchant Shield - Minor Stamina',
  13380 => 'Enchant 2H Weapon - Lesser Spirit',
  13419 => 'Enchant Cloak - Minor Agility',
  13421 => 'Enchant Cloak - Lesser Protection',
  13464 => 'Enchant Shield - Lesser Protection',
  13485 => 'Enchant Shield - Lesser Spirit',
  13501 => 'Enchant Bracer - Lesser Stamina',
  13503 => 'Enchant Weapon - Lesser Striking',
  13522 => 'Enchant Cloak - Lesser Shadow Resistance',
  13529 => 'Enchant 2H Weapon - Lesser Impact',
  13536 => 'Enchant Bracer - Lesser Strength',
  13538 => 'Enchant Chest - Lesser Absorption',
  13607 => 'Enchant Chest - Mana',
  13612 => 'Enchant Gloves - Mining',
  13617 => 'Enchant Gloves - Herbalism',
  13620 => 'Enchant Gloves - Fishing',
  13622 => 'Enchant Bracer - Lesser Intellect',
  13626 => 'Enchant Chest - Minor Stats',
  13628 => 'Runed Golden Rod',
  13631 => 'Enchant Shield - Lesser Stamina',
  13635 => 'Enchant Cloak - Defense',
  13637 => 'Enchant Boots - Lesser Agility',
  13640 => 'Enchant Chest - Greater Health',
  13642 => 'Enchant Bracer - Spirit',
  13644 => 'Enchant Boots - Lesser Stamina',
  13646 => 'Enchant Bracer - Lesser Deflection',
  13648 => 'Enchant Bracer - Stamina',
  13653 => 'Enchant Weapon - Lesser Beastslayer',
  13655 => 'Enchant Weapon - Lesser Elemental Slayer',
  13657 => 'Enchant Cloak - Fire Resistance',
  13659 => 'Enchant Shield - Spirit',
  13661 => 'Enchant Bracer - Strength',
  13663 => 'Enchant Chest - Greater Mana',
  13687 => 'Enchant Boots - Lesser Spirit',
  13689 => 'Enchant Shield - Lesser Block',
  13693 => 'Enchant Weapon - Striking',
  13695 => 'Enchant 2H Weapon - Impact',
  13698 => 'Enchant Gloves - Skinning',
  13700 => 'Enchant Chest - Lesser Stats',
  13702 => 'Runed Truesilver Rod',
  13746 => 'Enchant Cloak - Greater Defense',
  13794 => 'Enchant Cloak - Resistance',
  13815 => 'Enchant Gloves - Agility',
  13817 => 'Enchant Shield - Stamina',
  13822 => 'Enchant Bracer - Intellect',
  13836 => 'Enchant Boots - Stamina',
  13841 => 'Enchant Gloves - Advanced Mining',
  13846 => 'Enchant Bracer - Greater Spirit',
  13858 => 'Enchant Chest - Superior Health',
  13868 => 'Enchant Gloves - Advanced Herbalism',
  13882 => 'Enchant Cloak - Lesser Agility',
  13887 => 'Enchant Gloves - Strength',
  13890 => 'Enchant Boots - Minor Speed',
  13898 => 'Enchant Weapon - Fiery Weapon',
  13905 => 'Enchant Shield - Greater Spirit',
  13915 => 'Enchant Weapon - Demonslaying',
  13917 => 'Enchant Chest - Superior Mana',
  13931 => 'Enchant Bracer - Deflection',
  13933 => 'Enchant Shield - Frost Resistance',
  13935 => 'Enchant Boots - Agility',
  13937 => 'Enchant 2H Weapon - Greater Impact',
  13939 => 'Enchant Bracer - Greater Strength',
  13941 => 'Enchant Chest - Stats',
  13943 => 'Enchant Weapon - Greater Striking',
  13945 => 'Enchant Bracer - Greater Stamina',
  13947 => 'Enchant Gloves - Riding Skill',
  13948 => 'Enchant Gloves - Minor Haste',
  14293 => 'Lesser Magic Wand',
  14379 => 'Golden Rod',
  14380 => 'Truesilver Rod',
  14807 => 'Greater Magic Wand',
  14809 => 'Lesser Mystic Wand',
  14810 => 'Greater Mystic Wand',
  14930 => 'Quickdraw Quiver',
  14932 => 'Thick Leather Ammo Pouch',
  15255 => 'Mechanical Repair Kit',
  15292 => 'Dark Iron Pulverizer',
  15293 => 'Dark Iron Mail',
  15294 => 'Dark Iron Sunderer',
  15295 => 'Dark Iron Shoulders',
  15296 => 'Dark Iron Plate',
  15596 => 'Smoking Heart of the Mountain',
  15628 => 'Pet Bombling',
  15633 => 'Lil\' Smoky',
  15833 => 'Dreamless Sleep Potion',
  15853 => 'Lean Wolf Steak',
  15855 => 'Roast Raptor',
  15856 => 'Hot Wolf Ribs',
  15861 => 'Jungle Stew',
  15863 => 'Carrion Surprise',
  15865 => 'Mystery Stew',
  15906 => 'Dragonbreath Chili',
  15910 => 'Heavy Kodo Stew',
  15915 => 'Spiced Chili Crab',
  15933 => 'Monster Omelet',
  15935 => 'Crispy Bat Wing',
  15972 => 'Glinting Steel Dagger',
  15973 => 'Searing Golden Blade',
  16639 => 'Dense Grinding Stone',
  16640 => 'Dense Weightstone',
  16641 => 'Dense Sharpening Stone',
  16642 => 'Thorium Armor',
  16643 => 'Thorium Belt',
  16644 => 'Thorium Bracers',
  16645 => 'Radiant Belt',
  16646 => 'Imperial Plate Shoulders',
  16647 => 'Imperial Plate Belt',
  16648 => 'Radiant Breastplate',
  16649 => 'Imperial Plate Bracers',
  16650 => 'Wildthorn Mail',
  16651 => 'Thorium Shield Spike',
  16652 => 'Thorium Boots',
  16653 => 'Thorium Helm',
  16654 => 'Radiant Gloves',
  16655 => 'Fiery Plate Gauntlets',
  16656 => 'Radiant Boots',
  16657 => 'Imperial Plate Boots',
  16658 => 'Imperial Plate Helm',
  16659 => 'Radiant Circlet',
  16660 => 'Dawnbringer Shoulders',
  16661 => 'Storm Gauntlets',
  16662 => 'Thorium Leggings',
  16663 => 'Imperial Plate Chest',
  16664 => 'Runic Plate Shoulders',
  16665 => 'Runic Plate Boots',
  16667 => 'Demon Forged Breastplate',
  16724 => 'Whitesoul Helm',
  16725 => 'Radiant Leggings',
  16726 => 'Runic Plate Helm',
  16728 => 'Helm of the Great Chief',
  16729 => 'Lionheart Helm',
  16730 => 'Imperial Plate Leggings',
  16731 => 'Runic Breastplate',
  16732 => 'Runic Plate Leggings',
  16741 => 'Stronghold Gauntlets',
  16742 => 'Enchanted Thorium Helm',
  16744 => 'Enchanted Thorium Leggings',
  16745 => 'Enchanted Thorium Breastplate',
  16746 => 'Invulnerable Mail',
  16960 => 'Thorium Greatsword',
  16965 => 'Bleakwood Hew',
  16967 => 'Inlaid Thorium Hammer',
  16969 => 'Ornate Thorium Handaxe',
  16970 => 'Dawn\'s Edge',
  16971 => 'Huge Thorium Battleaxe',
  16973 => 'Enchanted Battlehammer',
  16978 => 'Blazing Rapier',
  16980 => 'Rune Edge',
  16983 => 'Serenity',
  16984 => 'Volcanic Hammer',
  16985 => 'Corruption',
  16986 => 'Blood Talon',
  16987 => 'Darkspear',
  16988 => 'Hammer of the Titans',
  16990 => 'Arcanite Champion',
  16991 => 'Annihilator',
  16992 => 'Frostguard',
  16993 => 'Masterwork Stormhammer',
  16994 => 'Arcanite Reaper',
  16995 => 'Heartseeker',
  17039 => true,
  17040 => true,
  17041 => true,
  17180 => 'Enchanted Thorium',
  17181 => 'Enchanted Leather',
  17187 => 'Transmute: Arcanite',
  17551 => 'Stonescale Oil',
  17552 => 'Mighty Rage Potion',
  17553 => 'Superior Mana Potion',
  17554 => 'Elixir of Superior Defense',
  17555 => 'Elixir of the Sages',
  17556 => 'Major Healing Potion',
  17557 => 'Elixir of Brute Force',
  17559 => 'Transmute: Air to Fire',
  17560 => 'Transmute: Fire to Earth',
  17561 => 'Transmute: Earth to Water',
  17562 => 'Transmute: Water to Air',
  17563 => 'Transmute: Undeath to Water',
  17564 => 'Transmute: Water to Undeath',
  17565 => 'Transmute: Life to Earth',
  17566 => 'Transmute: Earth to Life',
  17570 => 'Greater Stoneshield Potion',
  17571 => 'Elixir of the Mongoose',
  17572 => 'Purification Potion',
  17573 => 'Greater Arcane Elixir',
  17574 => 'Greater Fire Protection Potion',
  17575 => 'Greater Frost Protection Potion',
  17576 => 'Greater Nature Protection Potion',
  17577 => 'Greater Arcane Protection Potion',
  17578 => 'Greater Shadow Protection Potion',
  17579 => 'Greater Holy Protection Potion',
  17580 => 'Major Mana Potion',
  17632 => 'Alchemist\'s Stone',
  17634 => 'Potion of Petrification',
  17635 => 'Flask of the Titans',
  17636 => 'Flask of Distilled Wisdom',
  17637 => 'Flask of Supreme Power',
  17638 => 'Flask of Chromatic Resistance',
  18238 => 'Spotted Yellowtail',
  18239 => 'Cooked Glossy Mightfish',
  18240 => 'Grilled Squid',
  18241 => 'Filet of Redgill',
  18242 => 'Hot Smoked Bass',
  18243 => 'Nightfin Soup',
  18244 => 'Poached Sunscale Salmon',
  18245 => 'Lobster Stew',
  18246 => 'Mightfish Steak',
  18247 => 'Baked Salmon',
  18401 => 'Bolt of Runecloth',
  18402 => 'Runecloth Belt',
  18403 => 'Frostweave Tunic',
  18404 => 'Frostweave Robe',
  18405 => 'Runecloth Bag',
  18406 => 'Runecloth Robe',
  18407 => 'Runecloth Tunic',
  18408 => 'Cindercloth Vest',
  18409 => 'Runecloth Cloak',
  18410 => 'Ghostweave Belt',
  18411 => 'Frostweave Gloves',
  18412 => 'Cindercloth Gloves',
  18413 => 'Ghostweave Gloves',
  18414 => 'Brightcloth Robe',
  18415 => 'Brightcloth Gloves',
  18416 => 'Ghostweave Vest',
  18417 => 'Runecloth Gloves',
  18418 => 'Cindercloth Cloak',
  18419 => 'Felcloth Pants',
  18420 => 'Brightcloth Cloak',
  18421 => 'Wizardweave Leggings',
  18422 => 'Cloak of Fire',
  18423 => 'Runecloth Boots',
  18424 => 'Frostweave Pants',
  18434 => 'Cindercloth Pants',
  18436 => 'Robe of Winter Night',
  18437 => 'Felcloth Boots',
  18438 => 'Runecloth Pants',
  18439 => 'Brightcloth Pants',
  18440 => 'Mooncloth Leggings',
  18441 => 'Ghostweave Pants',
  18442 => 'Felcloth Hood',
  18444 => 'Runecloth Headband',
  18445 => 'Mooncloth Bag',
  18446 => 'Wizardweave Robe',
  18447 => 'Mooncloth Vest',
  18448 => 'Mooncloth Shoulders',
  18449 => 'Runecloth Shoulders',
  18450 => 'Wizardweave Turban',
  18451 => 'Felcloth Robe',
  18452 => 'Mooncloth Circlet',
  18453 => 'Felcloth Shoulders',
  18454 => 'Gloves of Spell Mastery',
  18455 => 'Bottomless Bag',
  18456 => 'Truefaith Vestments',
  18457 => 'Robe of the Archmage',
  18458 => 'Robe of the Void',
  18560 => 'Mooncloth',
  18629 => 'Runecloth Bandage',
  18630 => 'Heavy Runecloth Bandage',
  19047 => 'Cured Rugged Hide',
  19048 => 'Heavy Scorpid Bracers',
  19049 => 'Wicked Leather Gauntlets',
  19050 => 'Green Dragonscale Breastplate',
  19051 => 'Heavy Scorpid Vest',
  19052 => 'Wicked Leather Bracers',
  19053 => 'Chimeric Gloves',
  19054 => 'Red Dragonscale Breastplate',
  19055 => 'Runic Leather Gauntlets',
  19058 => 'Rugged Armor Kit',
  19059 => 'Volcanic Leggings',
  19060 => 'Green Dragonscale Leggings',
  19061 => 'Living Shoulders',
  19062 => 'Ironfeather Shoulders',
  19063 => 'Chimeric Boots',
  19064 => 'Heavy Scorpid Gauntlets',
  19065 => 'Runic Leather Bracers',
  19066 => 'Frostsaber Boots',
  19067 => 'Stormshroud Pants',
  19068 => 'Warbear Harness',
  19070 => 'Heavy Scorpid Belt',
  19071 => 'Wicked Leather Headband',
  19072 => 'Runic Leather Belt',
  19073 => 'Chimeric Leggings',
  19074 => 'Frostsaber Leggings',
  19075 => 'Heavy Scorpid Leggings',
  19076 => 'Volcanic Breastplate',
  19077 => 'Blue Dragonscale Breastplate',
  19078 => 'Living Leggings',
  19079 => 'Stormshroud Armor',
  19080 => 'Warbear Woolies',
  19081 => 'Chimeric Vest',
  19082 => 'Runic Leather Headband',
  19083 => 'Wicked Leather Pants',
  19084 => 'Devilsaur Gauntlets',
  19085 => 'Black Dragonscale Breastplate',
  19086 => 'Ironfeather Breastplate',
  19087 => 'Frostsaber Gloves',
  19088 => 'Heavy Scorpid Helm',
  19089 => 'Blue Dragonscale Shoulders',
  19090 => 'Stormshroud Shoulders',
  19091 => 'Runic Leather Pants',
  19092 => 'Wicked Leather Belt',
  19093 => 'Onyxia Scale Cloak',
  19094 => 'Black Dragonscale Shoulders',
  19095 => 'Living Breastplate',
  19097 => 'Devilsaur Leggings',
  19098 => 'Wicked Leather Armor',
  19100 => 'Heavy Scorpid Shoulders',
  19101 => 'Volcanic Shoulders',
  19102 => 'Runic Leather Armor',
  19103 => 'Runic Leather Shoulders',
  19104 => 'Frostsaber Tunic',
  19106 => 'Onyxia Scale Breastplate',
  19107 => 'Black Dragonscale Leggings',
  19435 => 'Mooncloth Boots',
  19567 => 'Salt Shaker',
  19666 => 'Silver Skeleton Key',
  19667 => 'Golden Skeleton Key',
  19668 => 'Truesilver Skeleton Key',
  19669 => 'Arcanite Skeleton Key',
  19788 => 'Dense Blasting Powder',
  19790 => 'Thorium Grenade',
  19791 => 'Thorium Widget',
  19792 => 'Thorium Rifle',
  19793 => 'Lifelike Mechanical Toad',
  19794 => 'Spellpower Goggles Xtreme Plus',
  19795 => 'Thorium Tube',
  19796 => 'Dark Iron Rifle',
  19799 => 'Dark Iron Bomb',
  19800 => 'Thorium Shells',
  19814 => 'Masterwork Target Dummy',
  19815 => 'Delicate Arcanite Converter',
  19819 => 'Voice Amplification Modulator',
  19825 => 'Master Engineer\'s Goggles',
  19830 => 'Arcanite Dragonling',
  19831 => 'Arcane Bomb',
  19833 => 'Flawless Arcanite Rifle',
  20008 => 'Enchant Bracer - Greater Intellect',
  20009 => 'Enchant Bracer - Superior Spirit',
  20010 => 'Enchant Bracer - Superior Strength',
  20011 => 'Enchant Bracer - Superior Stamina',
  20012 => 'Enchant Gloves - Greater Agility',
  20013 => 'Enchant Gloves - Greater Strength',
  20014 => 'Enchant Cloak - Greater Resistance',
  20015 => 'Enchant Cloak - Superior Defense',
  20016 => 'Enchant Shield - Vitality',
  20017 => 'Enchant Shield - Greater Stamina',
  20020 => 'Enchant Boots - Greater Stamina',
  20023 => 'Enchant Boots - Greater Agility',
  20024 => 'Enchant Boots - Spirit',
  20025 => 'Enchant Chest - Greater Stats',
  20026 => 'Enchant Chest - Major Health',
  20028 => 'Enchant Chest - Major Mana',
  20029 => 'Enchant Weapon - Icy Chill',
  20030 => 'Enchant 2H Weapon - Superior Impact',
  20031 => 'Enchant Weapon - Superior Striking',
  20032 => 'Enchant Weapon - Lifestealing',
  20033 => 'Enchant Weapon - Unholy Weapon',
  20034 => 'Enchant Weapon - Crusader',
  20035 => 'Enchant 2H Weapon - Major Spirit',
  20036 => 'Enchant 2H Weapon - Major Intellect',
  20051 => 'Runed Arcanite Rod',
  20201 => 'Arcanite Rod',
  20219 => true,
  20222 => true,
  20626 => 'Undermine Clam Chowder',
  20648 => 'Medium Leather',
  20649 => 'Heavy Leather',
  20650 => 'Thick Leather',
  20848 => 'Flarecore Mantle',
  20849 => 'Flarecore Gloves',
  20853 => 'Corehound Boots',
  20854 => 'Molten Helm',
  20855 => 'Black Dragonscale Boots',
  20872 => 'Fiery Chain Girdle',
  20873 => 'Fiery Chain Shoulders',
  20874 => 'Dark Iron Bracers',
  20876 => 'Dark Iron Leggings',
  20890 => 'Dark Iron Reaver',
  20897 => 'Dark Iron Destroyer',
  20916 => 'Mithril Head Trout',
  21143 => 'Gingerbread Cookie',
  21144 => 'Egg Nog',
  21161 => 'Sulfuron Hammer',
  21175 => 'Spider Sausage',
  21913 => 'Edge of Winter',
  21923 => 'Elixir of Frost Power',
  21931 => 'Enchant Weapon - Winter\'s Might',
  21940 => 'Snowmaster 9000',
  21943 => 'Gloves of the Greatfather',
  21945 => 'Green Holiday Shirt',
  22331 => 'Rugged Leather',
  22480 => 'Tender Wolf Steak',
  22704 => 'Field Repair Bot 74A',
  22711 => 'Shadowskin Gloves',
  22727 => 'Core Armor Kit',
  22732 => 'Major Rejuvenation Potion',
  22749 => 'Enchant Weapon - Spellpower',
  22750 => 'Enchant Weapon - Healing Power',
  22757 => 'Elemental Sharpening Stone',
  22759 => 'Flarecore Wraps',
  22761 => 'Runn Tum Tuber Surprise',
  22793 => 'Biznicks 247x128 Accurascope',
  22795 => 'Core Marksman Rifle',
  22797 => 'Force Reactive Disk',
  22808 => 'Elixir of Greater Water Breathing',
  22813 => 'Gordok Ogre Suit',
  22815 => 'Gordok Ogre Suit',
  22866 => 'Belt of the Archmage',
  22867 => 'Felcloth Gloves',
  22868 => 'Inferno Gloves',
  22869 => 'Mooncloth Gloves',
  22870 => 'Cloak of Warding',
  22902 => 'Mooncloth Robe',
  22921 => 'Girdle of Insight',
  22922 => 'Mongoose Boots',
  22923 => 'Swift Flight Bracers',
  22926 => 'Chromatic Cloak',
  22927 => 'Hide of the Wild',
  22928 => 'Shifting Cloak',
  23066 => 'Red Firework',
  23067 => 'Blue Firework',
  23068 => 'Green Firework',
  23069 => 'EZ-Thro Dynamite II',
  23070 => 'Dense Dynamite',
  23071 => 'Truesilver Transformer',
  23077 => 'Gyrofreeze Ice Reflector',
  23078 => 'Goblin Jumper Cables XL',
  23079 => 'Major Recombobulator',
  23080 => 'Powerful Seaforium Charge',
  23081 => 'Hyper-Radiant Flame Reflector',
  23082 => 'Ultra-Flash Shadow Reflector',
  23096 => 'Gnomish Alarm-o-Bot',
  23129 => 'World Enlarger',
  23190 => 'Heavy Leather Ball',
  23399 => 'Barbaric Bracers',
  23486 => 'Dimensional Ripper - Everlook',
  23489 => 'Ultrasafe Transporter - Gadgetzan',
  23507 => 'Snake Burst Firework',
  23628 => 'Heavy Timbermaw Belt',
  23629 => 'Heavy Timbermaw Boots',
  23632 => 'Girdle of the Dawn',
  23633 => 'Gloves of the Dawn',
  23636 => 'Dark Iron Helm',
  23637 => 'Dark Iron Gauntlets',
  23638 => 'Black Amnesty',
  23639 => 'Blackfury',
  23650 => 'Ebon Hand',
  23652 => 'Blackguard',
  23653 => 'Nightfall',
  23662 => 'Wisdom of the Timbermaw',
  23663 => 'Mantle of the Timbermaw',
  23664 => 'Argent Boots',
  23665 => 'Argent Shoulders',
  23666 => 'Flarecore Robe',
  23667 => 'Flarecore Leggings',
  23703 => 'Might of the Timbermaw',
  23704 => 'Timbermaw Brawlers',
  23705 => 'Dawn Treaders',
  23706 => 'Golden Mantle of the Dawn',
  23707 => 'Lava Belt',
  23708 => 'Chromatic Gauntlets',
  23709 => 'Corehound Belt',
  23710 => 'Molten Belt',
  23787 => 'Powerful Anti-Venom',
  23799 => 'Enchant Weapon - Strength',
  23800 => 'Enchant Weapon - Agility',
  23801 => 'Enchant Bracer - Mana Regeneration',
  23802 => 'Enchant Bracer - Healing Power',
  23803 => 'Enchant Weapon - Mighty Spirit',
  23804 => 'Enchant Weapon - Mighty Intellect',
  24091 => 'Bloodvine Vest',
  24092 => 'Bloodvine Leggings',
  24093 => 'Bloodvine Boots',
  24121 => 'Primal Batskin Jerkin',
  24122 => 'Primal Batskin Gloves',
  24123 => 'Primal Batskin Bracers',
  24124 => 'Blood Tiger Breastplate',
  24125 => 'Blood Tiger Shoulders',
  24136 => 'Bloodsoul Breastplate',
  24137 => 'Bloodsoul Shoulders',
  24138 => 'Bloodsoul Gauntlets',
  24139 => 'Darksoul Breastplate',
  24140 => 'Darksoul Leggings',
  24141 => 'Darksoul Shoulders',
  24266 => 'Gurubashi Mojo Madness',
  24356 => 'Bloodvine Goggles',
  24357 => 'Bloodvine Lens',
  24365 => 'Mageblood Elixir',
  24366 => 'Greater Dreamless Sleep Potion',
  24367 => 'Living Action Potion',
  24368 => 'Mighty Troll\'s Blood Elixir',
  24399 => 'Dark Iron Boots',
  24418 => 'Heavy Crocolisk Stew',
  24654 => 'Blue Dragonscale Leggings',
  24655 => 'Green Dragonscale Gauntlets',
  24703 => 'Dreamscale Breastplate',
  24801 => 'Smoked Desert Dumplings',
  24846 => 'Spitfire Bracers',
  24847 => 'Spitfire Gauntlets',
  24848 => 'Spitfire Breastplate',
  24849 => 'Sandstalker Bracers',
  24850 => 'Sandstalker Gauntlets',
  24851 => 'Sandstalker Breastplate',
  24901 => 'Runed Stygian Leggings',
  24902 => 'Runed Stygian Belt',
  24903 => 'Runed Stygian Boots',
  24912 => 'Darkrune Gauntlets',
  24913 => 'Darkrune Helm',
  24914 => 'Darkrune Breastplate',
  24940 => 'Black Whelp Tunic',
  25072 => 'Enchant Gloves - Threat',
  25073 => 'Enchant Gloves - Shadow Power',
  25074 => 'Enchant Gloves - Frost Power',
  25078 => 'Enchant Gloves - Fire Power',
  25079 => 'Enchant Gloves - Healing Power',
  25080 => 'Enchant Gloves - Superior Agility',
  25081 => 'Enchant Cloak - Greater Fire Resistance',
  25082 => 'Enchant Cloak - Greater Nature Resistance',
  25083 => 'Enchant Cloak - Stealth',
  25084 => 'Enchant Cloak - Subtlety',
  25086 => 'Enchant Cloak - Dodge',
  25124 => 'Minor Wizard Oil',
  25125 => 'Minor Mana Oil',
  25126 => 'Lesser Wizard Oil',
  25127 => 'Lesser Mana Oil',
  25128 => 'Wizard Oil',
  25129 => 'Brilliant Wizard Oil',
  25130 => 'Brilliant Mana Oil',
  25146 => 'Transmute: Elemental Fire',
  25278 => 'Bronze Setting',
  25280 => 'Elegant Silver Ring',
  25283 => 'Inlaid Malachite Ring',
  25284 => 'Simple Pearl Ring',
  25287 => 'Gloom Band',
  25305 => 'Heavy Silver Ring',
  25317 => 'Ring of Silver Might',
  25318 => 'Ring of Twilight Shadows',
  25320 => 'Heavy Golden Necklace of Battle',
  25321 => 'Moonsoul Crown',
  25323 => 'Wicked Moonstone Ring',
  25339 => 'Amulet of the Moon',
  25490 => 'Solid Bronze Ring',
  25498 => 'Barbaric Iron Collar',
  25610 => 'Pendant of the Agate Shield',
  25612 => 'Heavy Iron Knuckles',
  25613 => 'Golden Dragon Ring',
  25614 => 'Silver Rose Pendant',
  25615 => 'Mithril Filigree',
  25617 => 'Blazing Citrine Ring',
  25618 => 'Jade Pendant of Blasting',
  25619 => 'The Jade Eye',
  25620 => 'Engraved Truesilver Ring',
  25621 => 'Citrine Ring of Rapid Healing',
  25622 => 'Citrine Pendant of Golden Healing',
  25659 => 'Dirge\'s Kickin\' Chimaerok Chops',
  25704 => 'Smoked Sagefish',
  25954 => 'Sagefish Delight',
  26011 => 'Tranquil Mechanical Yeti',
  26085 => 'Soul Pouch',
  26086 => 'Felcloth Bag',
  26087 => 'Core Felcloth Bag',
  26277 => 'Elixir of Greater Firepower',
  26279 => 'Stormshroud Gloves',
  26403 => 'Festival Dress',
  26407 => 'Festive Red Pant Suit',
  26416 => 'Small Blue Rocket',
  26417 => 'Small Green Rocket',
  26418 => 'Small Red Rocket',
  26420 => 'Large Blue Rocket',
  26421 => 'Large Green Rocket',
  26422 => 'Large Red Rocket',
  26423 => 'Blue Rocket Cluster',
  26424 => 'Green Rocket Cluster',
  26425 => 'Red Rocket Cluster',
  26426 => 'Large Blue Rocket Cluster',
  26427 => 'Large Green Rocket Cluster',
  26428 => 'Large Red Rocket Cluster',
  26442 => 'Firework Launcher',
  26443 => 'Firework Cluster Launcher',
  26745 => 'Bolt of Netherweave',
  26746 => 'Netherweave Bag',
  26747 => 'Bolt of Imbued Netherweave',
  26749 => 'Imbued Netherweave Bag',
  26750 => 'Bolt of Soulcloth',
  26751 => true,
  26752 => true,
  26753 => true,
  26754 => true,
  26755 => true,
  26756 => true,
  26757 => true,
  26758 => true,
  26759 => true,
  26760 => true,
  26761 => true,
  26762 => true,
  26763 => true,
  26764 => 'Netherweave Bracers',
  26765 => 'Netherweave Belt',
  26770 => 'Netherweave Gloves',
  26771 => 'Netherweave Pants',
  26772 => 'Netherweave Boots',
  26773 => 'Netherweave Robe',
  26774 => 'Netherweave Tunic',
  26775 => 'Imbued Netherweave Pants',
  26776 => 'Imbued Netherweave Boots',
  26777 => 'Imbued Netherweave Robe',
  26778 => 'Imbued Netherweave Tunic',
  26779 => 'Soulcloth Gloves',
  26780 => 'Soulcloth Shoulders',
  26781 => 'Soulcloth Vest',
  26782 => 'Arcanoweave Bracers',
  26783 => 'Arcanoweave Boots',
  26784 => 'Arcanoweave Robe',
  26797 => true,
  26798 => true,
  26801 => true,
  26872 => 'Figurine - Jade Owl',
  26873 => 'Figurine - Golden Hare',
  26874 => 'Aquamarine Signet',
  26875 => 'Figurine - Black Pearl Panther',
  26876 => 'Aquamarine Pendant of the Warrior',
  26878 => 'Ruby Crown of Restoration',
  26880 => 'Thorium Setting',
  26881 => 'Figurine - Truesilver Crab',
  26882 => 'Figurine - Truesilver Boar',
  26883 => 'Ruby Pendant of Fire',
  26885 => 'Truesilver Healing Ring',
  26887 => 'The Aquamarine Ward',
  26896 => 'Gem Studded Band',
  26897 => 'Opal Necklace of Impact',
  26900 => 'Figurine - Ruby Serpent',
  26902 => 'Simple Opal Ring',
  26903 => 'Sapphire Signet',
  26906 => 'Emerald Crown of Destruction',
  26907 => 'Onslaught Ring',
  26908 => 'Sapphire Pendant of Winter Night',
  26909 => 'Figurine - Emerald Owl',
  26910 => 'Ring of Bitter Shadows',
  26911 => 'Living Emerald Pendant',
  26912 => 'Figurine - Black Diamond Crab',
  26914 => 'Figurine - Dark Iron Scorpid',
  26915 => 'Necklace of the Diamond Tower',
  26916 => 'Band of Natural Fire',
  26918 => 'Arcanite Sword Pendant',
  26920 => 'Blood Crown',
  26926 => 'Heavy Copper Ring',
  26927 => 'Thick Bronze Necklace',
  26928 => 'Ornate Tigerseye Necklace',
  27032 => 'Netherweave Bandage',
  27033 => 'Heavy Netherweave Bandage',
  27585 => 'Heavy Obsidian Belt',
  27586 => 'Jagged Obsidian Shield',
  27587 => 'Thick Obsidian Breastplate',
  27588 => 'Light Obsidian Belt',
  27589 => 'Black Grasp of the Destroyer',
  27590 => 'Obsidian Mail Tunic',
  27658 => 'Enchanted Mageweave Pouch',
  27659 => 'Enchanted Runecloth Bag',
  27660 => 'Big Bag of Enchantment',
  27724 => 'Cenarion Herb Bag',
  27725 => 'Satchel of Cenarius',
  27829 => 'Titanic Leggings',
  27830 => 'Persuader',
  27832 => 'Sageblade',
  27837 => 'Enchant 2H Weapon - Agility',
  27899 => 'Enchant Bracer - Brawn',
  27905 => 'Enchant Bracer - Stats',
  27906 => 'Enchant Bracer - Major Defense',
  27911 => 'Enchant Bracer - Superior Healing',
  27913 => 'Enchant Bracer - Restore Mana Prime',
  27914 => 'Enchant Bracer - Fortitude',
  27917 => 'Enchant Bracer - Spellpower',
  27920 => 'Enchant Ring - Striking',
  27924 => 'Enchant Ring - Spellpower',
  27926 => 'Enchant Ring - Healing Power',
  27927 => 'Enchant Ring - Stats',
  27944 => 'Enchant Shield - Tough Shield',
  27945 => 'Enchant Shield - Intellect',
  27946 => 'Enchant Shield - Shield Block',
  27947 => 'Enchant Shield - Resistance',
  27948 => 'Enchant Boots - Vitality',
  27950 => 'Enchant Boots - Fortitude',
  27951 => 'Enchant Boots - Dexterity',
  27954 => 'Enchant Boots - Surefooted',
  27957 => 'Enchant Chest - Exceptional Health',
  27958 => 'Enchant Chest - Exceptional Mana',
  27960 => 'Enchant Chest - Exceptional Stats',
  27961 => 'Enchant Cloak - Major Armor',
  27962 => 'Enchant Cloak - Major Resistance',
  27967 => 'Enchant Weapon - Major Striking',
  27968 => 'Enchant Weapon - Major Intellect',
  27971 => 'Enchant 2H Weapon - Savagery',
  27972 => 'Enchant Weapon - Potency',
  27975 => 'Enchant Weapon - Major Spellpower',
  27977 => 'Enchant 2H Weapon - Major Agility',
  27981 => 'Enchant Weapon - Sunfire',
  27982 => 'Enchant Weapon - Soulfrost',
  27984 => 'Enchant Weapon - Mongoose',
  28003 => 'Enchant Weapon - Spellsurge',
  28004 => 'Enchant Weapon - Battlemaster',
  28016 => 'Superior Mana Oil',
  28019 => 'Superior Wizard Oil',
  28021 => 'Arcane Dust',
  28022 => 'Large Prismatic Shard',
  28027 => 'Prismatic Sphere',
  28028 => 'Void Sphere',
  28205 => 'Glacial Gloves',
  28207 => 'Glacial Vest',
  28208 => 'Glacial Cloak',
  28209 => 'Glacial Wrists',
  28210 => 'Gaea\'s Embrace',
  28219 => 'Polar Tunic',
  28220 => 'Polar Gloves',
  28221 => 'Polar Bracers',
  28222 => 'Icy Scale Breastplate',
  28223 => 'Icy Scale Gauntlets',
  28224 => 'Icy Scale Bracers',
  28242 => 'Icebane Breastplate',
  28243 => 'Icebane Gauntlets',
  28244 => 'Icebane Bracers',
  28267 => 'Crunchy Spider Surprise',
  28327 => 'Steam Tonk Controller',
  28461 => 'Ironvine Breastplate',
  28462 => 'Ironvine Gloves',
  28463 => 'Ironvine Belt',
  28472 => 'Bramblewood Helm',
  28473 => 'Bramblewood Boots',
  28474 => 'Bramblewood Belt',
  28480 => 'Sylvan Vest',
  28481 => 'Sylvan Crown',
  28482 => 'Sylvan Shoulders',
  28543 => 'Elixir of Camouflage',
  28544 => 'Elixir of Major Strength',
  28545 => 'Elixir of Healing Power',
  28546 => 'Sneaking Potion',
  28549 => 'Elixir of Major Frost Power',
  28550 => 'Insane Strength Potion',
  28551 => 'Super Healing Potion',
  28552 => 'Elixir of the Searching Eye',
  28553 => 'Elixir of Major Agility',
  28554 => 'Shrouding Potion',
  28555 => 'Super Mana Potion',
  28556 => 'Elixir of Major Firepower',
  28557 => 'Elixir of Major Defense',
  28558 => 'Elixir of Major Shadow Power',
  28562 => 'Major Dreamless Sleep Potion',
  28563 => 'Heroic Potion',
  28564 => 'Haste Potion',
  28565 => 'Destruction Potion',
  28566 => 'Transmute: Primal Air to Fire',
  28567 => 'Transmute: Primal Earth to Water',
  28568 => 'Transmute: Primal Fire to Earth',
  28569 => 'Transmute: Primal Water to Air',
  28570 => 'Elixir of Major Mageblood',
  28571 => 'Major Fire Protection Potion',
  28572 => 'Major Frost Protection Potion',
  28573 => 'Major Nature Protection Potion',
  28575 => 'Major Arcane Protection Potion',
  28576 => 'Major Shadow Protection Potion',
  28577 => 'Major Holy Protection Potion',
  28578 => 'Elixir of Empowerment',
  28579 => 'Ironshield Potion',
  28580 => 'Transmute: Primal Shadow to Water',
  28581 => 'Transmute: Primal Water to Shadow',
  28582 => 'Transmute: Primal Mana to Fire',
  28583 => 'Transmute: Primal Fire to Mana',
  28584 => 'Transmute: Primal Life to Earth',
  28585 => 'Transmute: Primal Earth to Life',
  28586 => 'Super Rejuvenation Potion',
  28587 => 'Flask of Fortification',
  28588 => 'Flask of Mighty Restoration',
  28589 => 'Flask of Relentless Assault',
  28590 => 'Flask of Blinding Light',
  28591 => 'Flask of Pure Death',
  28672 => true,
  28675 => true,
  28677 => true,
  28903 => 'Teardrop Blood Garnet',
  28905 => 'Bold Blood Garnet',
  28906 => 'Runed Blood Garnet',
  28907 => 'Delicate Blood Garnet',
  28910 => 'Inscribed Flame Spessarite',
  28912 => 'Luminous Flame Spessarite',
  28914 => 'Glinting Flame Spessarite',
  28915 => 'Potent Flame Spessarite',
  28916 => 'Radiant Deep Peridot',
  28917 => 'Jagged Deep Peridot',
  28918 => 'Enduring Deep Peridot',
  28924 => 'Dazzling Deep Peridot',
  28925 => 'Glowing Shadow Draenite',
  28927 => 'Royal Shadow Draenite',
  28933 => 'Shifting Shadow Draenite',
  28936 => 'Sovereign Shadow Draenite',
  28938 => 'Brilliant Golden Draenite',
  28944 => 'Gleaming Golden Draenite',
  28947 => 'Thick Golden Draenite',
  28948 => 'Rigid Golden Draenite',
  28950 => 'Solid Azure Moonstone',
  28953 => 'Sparkling Azure Moonstone',
  28955 => 'Stormy Azure Moonstone',
  28957 => 'Lustrous Azure Moonstone',
  29545 => 'Fel Iron Plate Gloves',
  29547 => 'Fel Iron Plate Belt',
  29548 => 'Fel Iron Plate Boots',
  29549 => 'Fel Iron Plate Pants',
  29550 => 'Fel Iron Breastplate',
  29551 => 'Fel Iron Chain Coif',
  29552 => 'Fel Iron Chain Gloves',
  29553 => 'Fel Iron Chain Bracers',
  29556 => 'Fel Iron Chain Tunic',
  29557 => 'Fel Iron Hatchet',
  29558 => 'Fel Iron Hammer',
  29565 => 'Fel Iron Greatsword',
  29566 => 'Adamantite Maul',
  29568 => 'Adamantite Cleaver',
  29569 => 'Adamantite Dagger',
  29571 => 'Adamantite Rapier',
  29603 => 'Adamantite Plate Bracers',
  29605 => 'Adamantite Plate Gloves',
  29606 => 'Adamantite Breastplate',
  29608 => 'Enchanted Adamantite Belt',
  29610 => 'Enchanted Adamantite Breastplate',
  29611 => 'Enchanted Adamantite Boots',
  29613 => 'Enchanted Adamantite Leggings',
  29614 => 'Flamebane Bracers',
  29615 => 'Flamebane Helm',
  29616 => 'Flamebane Gloves',
  29617 => 'Flamebane Breastplate',
  29619 => 'Felsteel Gloves',
  29620 => 'Felsteel Leggings',
  29621 => 'Felsteel Helm',
  29622 => 'Gauntlets of the Iron Tower',
  29628 => 'Khorium Belt',
  29629 => 'Khorium Pants',
  29630 => 'Khorium Boots',
  29642 => 'Ragesteel Gloves',
  29643 => 'Ragesteel Helm',
  29645 => 'Ragesteel Breastplate',
  29648 => 'Swiftsteel Gloves',
  29649 => 'Earthpeace Breastplate',
  29654 => 'Fel Sharpening Stone',
  29656 => 'Adamantite Sharpening Stone',
  29657 => 'Felsteel Shield Spike',
  29658 => 'Felfury Gauntlets',
  29662 => 'Steelgrip Gauntlets',
  29663 => 'Storm Helm',
  29664 => 'Helm of the Stalwart Defender',
  29668 => 'Oathkeeper\'s Helm',
  29669 => 'Black Felsteel Bracers',
  29671 => 'Bracers of the Green Fortress',
  29672 => 'Blessed Bracers',
  29688 => 'Transmute: Primal Might',
  29692 => 'Felsteel Longblade',
  29693 => 'Khorium Champion',
  29694 => 'Fel Edged Battleaxe',
  29695 => 'Felsteel Reaper',
  29696 => 'Runic Hammer',
  29697 => 'Fel Hardened Maul',
  29698 => 'Eternium Runed Blade',
  29699 => 'Dirge',
  29700 => 'Hand of Eternity',
  29728 => true,
  29729 => true,
  30303 => true,
  30304 => true,
  30305 => true,
  30306 => true,
  30307 => true,
  30308 => true,
  30309 => true,
  30310 => true,
  30311 => true,
  30312 => true,
  30313 => true,
  30314 => true,
  30315 => true,
  30316 => true,
  30317 => true,
  30318 => true,
  30325 => true,
  30329 => true,
  30332 => true,
  30334 => 'Stabilized Eternium Scope',
  30337 => 'Crashin\' Thrashin\' Robot',
  30341 => 'White Smoke Flare',
  30342 => 'Red Smoke Flare',
  30343 => 'Blue Smoke Flare',
  30344 => 'Green Smoke Flare',
  30346 => 'Fel Iron Shells',
  30347 => 'Adamantite Shell Machine',
  30348 => 'Fel Iron Toolbox',
  30349 => 'Titanium Toolbox',
  30547 => 'Elemental Seaforium Charge',
  30548 => 'Zapthrottle Mote Extractor',
  30549 => 'Critter Enlarger',
  30551 => 'Healing Potion Injector',
  30552 => 'Mana Potion Injector',
  30556 => 'Rocket Boots Xtreme',
  30558 => 'The Bigger One',
  30560 => 'Super Sapper Charge',
  30561 => 'Goblin Tonk Controller',
  30563 => 'Goblin Rocket Launcher',
  30565 => 'Foreman\'s Enchanted Helmet',
  30566 => 'Foreman\'s Reinforced Helmet',
  30568 => 'Gnomish Flame Turret',
  30569 => 'Gnomish Poultryizer',
  30570 => 'Nigh-Invulnerability Belt',
  30573 => 'Gnomish Tonk Controller',
  30574 => 'Gnomish Power Goggles',
  30575 => 'Gnomish Battle Goggles',
  31048 => 'Fel Iron Blood Ring',
  31049 => 'Golden Draenite Ring',
  31050 => 'Azure Moonstone Ring',
  31051 => 'Thick Adamantite Necklace',
  31052 => 'Heavy Adamantite Ring',
  31053 => 'Khorium Band of Shadows',
  31054 => 'Khorium Band of Frost',
  31055 => 'Khorium Inferno Band',
  31056 => 'Khorium Band of Leaves',
  31057 => 'Arcane Khorium Band',
  31058 => 'Heavy Felsteel Ring',
  31060 => 'Delicate Eternium Ring',
  31061 => 'Blazing Eternium Band',
  31062 => 'Pendant of Frozen Flame',
  31063 => 'Pendant of Thawing',
  31064 => 'Pendant of Withering',
  31065 => 'Pendant of Shadow\'s End',
  31066 => 'Pendant of the Null Rune',
  31067 => 'Thick Felsteel Necklace',
  31068 => 'Living Ruby Pendant',
  31070 => 'Braided Eternium Chain',
  31071 => 'Eye of the Night',
  31072 => 'Embrace of the Dawn',
  31076 => 'Chain of the Twilight Owl',
  31077 => 'Coronet of Verdant Flame',
  31078 => 'Circlet of Arcane Might',
  31079 => 'Figurine - Felsteel Boar',
  31080 => 'Figurine - Dawnstone Crab',
  31081 => 'Figurine - Living Ruby Serpent',
  31082 => 'Figurine - Talasite Owl',
  31083 => 'Figurine - Nightseye Panther',
  31084 => 'Bold Living Ruby',
  31085 => 'Delicate Living Ruby',
  31087 => 'Teardrop Living Ruby',
  31088 => 'Runed Living Ruby',
  31089 => 'Bright Living Ruby',
  31090 => 'Subtle Living Ruby',
  31091 => 'Flashing Living Ruby',
  31092 => 'Solid Star of Elune',
  31094 => 'Lustrous Star of Elune',
  31095 => 'Stormy Star of Elune',
  31096 => 'Brilliant Dawnstone',
  31097 => 'Smooth Dawnstone',
  31098 => 'Rigid Dawnstone',
  31099 => 'Gleaming Dawnstone',
  31100 => 'Thick Dawnstone',
  31101 => 'Mystic Dawnstone',
  31102 => 'Sovereign Nightseye',
  31103 => 'Shifting Nightseye',
  31104 => 'Glowing Nightseye',
  31105 => 'Royal Nightseye',
  31106 => 'Inscribed Noble Topaz',
  31107 => 'Potent Noble Topaz',
  31108 => 'Luminous Noble Topaz',
  31109 => 'Glinting Noble Topaz',
  31110 => 'Enduring Talasite',
  31111 => 'Radiant Talasite',
  31112 => 'Dazzling Talasite',
  31113 => 'Jagged Talasite',
  31149 => 'Sparkling Star of Elune',
  31252 => true,
  31373 => true,
  31430 => 'Mystic Spellthread',
  31431 => 'Silver Spellthread',
  31432 => 'Runic Spellthread',
  31433 => 'Golden Spellthread',
  31434 => 'Unyielding Bracers',
  31435 => 'Bracers of Havok',
  31437 => 'Blackstrike Bracers',
  31438 => 'Cloak of the Black Void',
  31440 => 'Cloak of Eternity',
  31441 => 'White Remedy Cape',
  31442 => 'Unyielding Girdle',
  31443 => 'Girdle of Ruination',
  31444 => 'Black Belt of Knowledge',
  31448 => 'Resolute Cape',
  31449 => 'Vengeance Wrap',
  31450 => 'Manaweave Cloak',
  31451 => 'Whitemend Pants',
  31452 => 'Spellstrike Pants',
  31453 => 'Battlecast Pants',
  31454 => 'Whitemend Hood',
  31455 => 'Spellstrike Hood',
  31456 => 'Battlecast Hood',
  31459 => 'Bag of Jewels',
  31460 => 'Netherweave Net',
  31461 => 'Heavy Netherweave Net',
  32178 => 'Malachite Pendant',
  32179 => 'Tigerseye Band',
  32284 => 'Lesser Rune of Warding',
  32285 => 'Greater Rune of Warding',
  32454 => 'Knothide Leather',
  32455 => 'Heavy Knothide Leather',
  32456 => 'Knothide Armor Kit',
  32457 => 'Vindicator\'s Armor Kit',
  32458 => 'Magister\'s Armor Kit',
  32461 => 'Riding Crop',
  32462 => 'Felscale Gloves',
  32463 => 'Felscale Boots',
  32464 => 'Felscale Pants',
  32465 => 'Felscale Breastplate',
  32466 => 'Scaled Draenic Pants',
  32467 => 'Scaled Draenic Gloves',
  32468 => 'Scaled Draenic Vest',
  32469 => 'Scaled Draenic Boots',
  32470 => 'Thick Draenic Gloves',
  32471 => 'Thick Draenic Pants',
  32472 => 'Thick Draenic Boots',
  32473 => 'Thick Draenic Vest',
  32478 => 'Wild Draenish Boots',
  32479 => 'Wild Draenish Gloves',
  32480 => 'Wild Draenish Leggings',
  32481 => 'Wild Draenish Vest',
  32482 => 'Comfortable Insoles',
  32485 => 'Stylin\' Purple Hat',
  32487 => 'Stylin\' Adventure Hat',
  32488 => 'Stylin\' Crimson Hat',
  32489 => 'Stylin\' Jungle Hat',
  32490 => 'Fel Leather Gloves',
  32493 => 'Fel Leather Boots',
  32494 => 'Fel Leather Leggings',
  32495 => 'Heavy Clefthoof Vest',
  32496 => 'Heavy Clefthoof Leggings',
  32497 => 'Heavy Clefthoof Boots',
  32498 => 'Felstalker Belt',
  32499 => 'Felstalker Bracer',
  32500 => 'Felstalker Breastplate',
  32501 => 'Netherfury Belt',
  32502 => 'Netherfury Leggings',
  32503 => 'Netherfury Boots',
  32655 => 'Fel Iron Rod',
  32656 => 'Adamantite Rod',
  32657 => 'Eternium Rod',
  32664 => 'Runed Fel Iron Rod',
  32665 => 'Runed Adamantite Rod',
  32667 => 'Runed Eternium Rod',
  32765 => 'Transmute: Earthstorm Diamond',
  32766 => 'Transmute: Skyfire Diamond',
  32801 => 'Coarse Stone Statue',
  32807 => 'Heavy Stone Statue',
  32808 => 'Solid Stone Statue',
  32809 => 'Dense Stone Statue',
  32810 => 'Primal Stone Statue',
  32814 => 'Purple Smoke Flare',
  32866 => 'Powerful Earthstorm Diamond',
  32867 => 'Bracing Earthstorm Diamond',
  32868 => 'Tenacious Earthstorm Diamond',
  32869 => 'Brutal Earthstorm Diamond',
  32870 => 'Insightful Earthstorm Diamond',
  32871 => 'Destructive Skyfire Diamond',
  32872 => 'Mystical Skyfire Diamond',
  32873 => 'Swift Skyfire Diamond',
  32874 => 'Enigmatic Skyfire Diamond',
  33276 => 'Lynx Steak',
  33277 => 'Roasted Moongraze Tenderloin',
  33278 => 'Bat Bites',
  33279 => 'Buzzard Bites',
  33284 => 'Ravager Dog',
  33285 => 'Sporeling Snack',
  33286 => 'Blackened Basilisk',
  33287 => 'Roasted Clefthoof',
  33288 => 'Warp Burger',
  33289 => 'Talbuk Steak',
  33290 => 'Blackened Trout',
  33291 => 'Feltail Delight',
  33292 => 'Blackened Sporefish',
  33293 => 'Grilled Mudfish',
  33294 => 'Poached Bluefish',
  33295 => 'Golden Fish Sticks',
  33296 => 'Spicy Crawdad',
  33732 => 'Volatile Healing Potion',
  33733 => 'Unstable Mana Potion',
  33738 => 'Onslaught Elixir',
  33740 => 'Adept\'s Elixir',
  33741 => 'Elixir of Mastery',
  33990 => 'Enchant Chest - Major Spirit',
  33991 => 'Enchant Chest - Restore Mana Prime',
  33992 => 'Enchant Chest - Major Resilience',
  33993 => 'Enchant Gloves - Blasting',
  33994 => 'Enchant Gloves - Precise Strikes',
  33995 => 'Enchant Gloves - Major Strength',
  33996 => 'Enchant Gloves - Assault',
  33997 => 'Enchant Gloves - Major Spellpower',
  33999 => 'Enchant Gloves - Major Healing',
  34001 => 'Enchant Bracer - Major Intellect',
  34002 => 'Enchant Bracer - Assault',
  34003 => 'Enchant Cloak - Spell Penetration',
  34004 => 'Enchant Cloak - Greater Agility',
  34005 => 'Enchant Cloak - Greater Arcane Resistance',
  34006 => 'Enchant Cloak - Greater Shadow Resistance',
  34007 => 'Enchant Boots - Cat\'s Swiftness',
  34008 => 'Enchant Boots - Boar\'s Speed',
  34009 => 'Enchant Shield - Major Stamina',
  34010 => 'Enchant Weapon - Major Healing',
  34069 => 'Smooth Golden Draenite',
  34529 => 'Nether Chain Shirt',
  34530 => 'Twisting Nether Chain Shirt',
  34533 => 'Breastplate of Kings',
  34534 => 'Bulwark of Kings',
  34535 => 'Fireguard',
  34537 => 'Blazeguard',
  34538 => 'Lionheart Blade',
  34540 => 'Lionheart Champion',
  34541 => 'The Planar Edge',
  34542 => 'Black Planar Edge',
  34543 => 'Lunar Crescent',
  34544 => 'Mooncleaver',
  34545 => 'Drakefist Hammer',
  34546 => 'Dragonmaw',
  34547 => 'Thunder',
  34548 => 'Deep Thunder',
  34590 => 'Bright Blood Garnet',
  34607 => 'Fel Weightstone',
  34608 => 'Adamantite Weightstone',
  34955 => 'Golden Ring of Power',
  34959 => 'Truesilver Commander\'s Ring',
  34960 => 'Glowing Thorium Band',
  34961 => 'Emerald Lion Ring',
  34979 => 'Thick Bronze Darts',
  34981 => 'Whirling Steel Axes',
  34982 => 'Enchanted Thorium Blades',
  34983 => 'Felsteel Whisper Knives',
  35520 => 'Shadow Armor Kit',
  35521 => 'Flame Armor Kit',
  35522 => 'Frost Armor Kit',
  35523 => 'Nature Armor Kit',
  35524 => 'Arcane Armor Kit',
  35525 => 'Enchanted Felscale Leggings',
  35526 => 'Enchanted Felscale Gloves',
  35527 => 'Enchanted Felscale Boots',
  35528 => 'Flamescale Boots',
  35529 => 'Flamescale Leggings',
  35530 => 'Reinforced Mining Bag',
  35531 => 'Flamescale Belt',
  35532 => 'Enchanted Clefthoof Leggings',
  35533 => 'Enchanted Clefthoof Gloves',
  35534 => 'Enchanted Clefthoof Boots',
  35535 => 'Blastguard Pants',
  35536 => 'Blastguard Boots',
  35537 => 'Blastguard Belt',
  35538 => 'Drums of Panic',
  35539 => 'Drums of Restoration',
  35540 => 'Drums of War',
  35543 => 'Drums of Battle',
  35544 => 'Drums of Speed',
  35549 => 'Cobrahide Leg Armor',
  35554 => 'Nethercobra Leg Armor',
  35555 => 'Clefthide Leg Armor',
  35557 => 'Nethercleft Leg Armor',
  35558 => 'Cobrascale Hood',
  35559 => 'Cobrascale Gloves',
  35560 => 'Windscale Hood',
  35561 => 'Hood of Primal Life',
  35562 => 'Gloves of the Living Touch',
  35563 => 'Windslayer Wraps',
  35564 => 'Living Dragonscale Helm',
  35567 => 'Earthen Netherscale Boots',
  35568 => 'Windstrike Gloves',
  35572 => 'Netherdrake Helm',
  35573 => 'Netherdrake Gloves',
  35574 => 'Thick Netherscale Breastplate',
  35575 => 'Ebon Netherscale Breastplate',
  35576 => 'Ebon Netherscale Belt',
  35577 => 'Ebon Netherscale Bracers',
  35580 => 'Netherstrike Breastplate',
  35582 => 'Netherstrike Belt',
  35584 => 'Netherstrike Bracers',
  35585 => 'Windhawk Hauberk',
  35587 => 'Windhawk Belt',
  35588 => 'Windhawk Bracers',
  35589 => 'Primalstrike Vest',
  35590 => 'Primalstrike Belt',
  35591 => 'Primalstrike Bracers',
  36074 => 'Blackstorm Leggings',
  36075 => 'Wildfeather Leggings',
  36076 => 'Dragonstrike Leggings',
  36077 => 'Primalstorm Breastplate',
  36078 => 'Living Crystal Breastplate',
  36079 => 'Golden Dragonstrike Breastplate',
  36122 => 'Earthforged Leggings',
  36124 => 'Windforged Leggings',
  36125 => 'Light Earthforged Blade',
  36126 => 'Light Skyforged Axe',
  36128 => 'Light Emberforged Hammer',
  36129 => 'Heavy Earthforged Breastplate',
  36130 => 'Stormforged Hauberk',
  36131 => 'Windforged Rapier',
  36133 => 'Stoneforged Claymore',
  36134 => 'Stormforged Axe',
  36135 => 'Skyforged Great Axe',
  36136 => 'Lavaforged Warhammer',
  36137 => 'Great Earthforged Hammer',
  36210 => 'Clam Bar',
  36256 => 'Embrace of the Twisting Nether',
  36257 => 'Bulwark of the Ancient Kings',
  36258 => 'Blazefury',
  36259 => 'Lionheart Executioner',
  36260 => 'Wicked Edge of the Planes',
  36261 => 'Bloodmoon',
  36262 => 'Dragonstrike',
  36263 => 'Stormherald',
  36315 => 'Belt of Blasting',
  36316 => 'Belt of the Long Road',
  36317 => 'Boots of Blasting',
  36318 => 'Boots of the Long Road',
  36349 => 'Belt of Natural Power',
  36351 => 'Belt of Deep Shadow',
  36352 => 'Belt of the Black Eagle',
  36353 => 'Monsoon Belt',
  36355 => 'Boots of Natural Grace',
  36357 => 'Boots of Utter Darkness',
  36358 => 'Boots of the Crimson Hawk',
  36359 => 'Hurricane Boots',
  36389 => 'Belt of the Guardian',
  36390 => 'Red Belt of Battle',
  36391 => 'Boots of the Protector',
  36392 => 'Red Havoc Boots',
  36523 => 'Brilliant Necklace',
  36524 => 'Heavy Jade Ring',
  36525 => 'Red Ring of Destruction',
  36526 => 'Diamond Focus Ring',
  36665 => 'Netherflame Robe',
  36667 => 'Netherflame Belt',
  36668 => 'Netherflame Boots',
  36669 => 'Lifeblood Leggings',
  36670 => 'Lifeblood Belt',
  36672 => 'Lifeblood Bracers',
  36686 => true,
  36954 => 'Dimensional Ripper - Area 52',
  36955 => 'Ultrasafe Transporter - Toshley\'s Station',
  37818 => 'Bronze Band of Force',
  37836 => 'Spice Bread',
  37855 => 'Ring of Arcane Shielding',
  37873 => 'Cloak of Arcane Evasion',
  37882 => 'Flameheart Bracers',
  37883 => 'Flameheart Gloves',
  37884 => 'Flameheart Vest',
  38068 => 'Mercurial Adamantite',
  38070 => 'Mercurial Stone',
  38175 => 'Bronze Torc',
  38473 => 'Wildguard Breastplate',
  38475 => 'Wildguard Leggings',
  38476 => 'Wildguard Helm',
  38477 => 'Iceguard Breastplate',
  38478 => 'Iceguard Leggings',
  38479 => 'Iceguard Helm',
  38503 => 'The Frozen Eye',
  38504 => 'The Natural Ward',
  38867 => 'Mok\'Nathal Shortribs',
  38868 => 'Crunchy Serpent',
  38960 => 'Fel Strength Elixir',
  38961 => 'Fel Mana Potion',
  38962 => 'Fel Regeneration Potion',
  39451 => 'Great Golden Draenite',
  39452 => 'Great Dawnstone',
  39455 => 'Balanced Shadow Draenite',
  39458 => 'Infused Shadow Draenite',
  39462 => 'Infused Nightseye',
  39463 => 'Balanced Nightseye',
  39466 => 'Veiled Flame Spessarite',
  39467 => 'Wicked Flame Spessarite',
  39470 => 'Veiled Noble Topaz',
  39471 => 'Wicked Noble Topaz',
  39636 => 'Elixir of Major Fortitude',
  39637 => 'Earthen Elixir',
  39638 => 'Elixir of Draenic Wisdom',
  39639 => 'Elixir of Ironskin',
  39705 => 'Bold Crimson Spinel',
  39706 => 'Delicate Crimson Spinel',
  39710 => 'Teardrop Crimson Spinel',
  39711 => 'Runed Crimson Spinel',
  39712 => 'Bright Crimson Spinel',
  39713 => 'Subtle Crimson Spinel',
  39714 => 'Flashing Crimson Spinel',
  39715 => 'Solid Empyrean Sapphire',
  39716 => 'Sparkling Empyrean Sapphire',
  39717 => 'Lustrous Empyrean Sapphire',
  39718 => 'Stormy Empyrean Sapphire',
  39719 => 'Brilliant Lionseye',
  39720 => 'Smooth Lionseye',
  39721 => 'Rigid Lionseye',
  39722 => 'Gleaming Lionseye',
  39723 => 'Thick Lionseye',
  39724 => 'Mystic Lionseye',
  39725 => 'Great Lionseye',
  39727 => 'Sovereign Shadowsong Amethyst',
  39728 => 'Shifting Shadowsong Amethyst',
  39729 => 'Balanced Shadowsong Amethyst',
  39730 => 'Infused Shadowsong Amethyst',
  39731 => 'Glowing Shadowsong Amethyst',
  39732 => 'Royal Shadowsong Amethyst',
  39733 => 'Inscribed Pyrestone',
  39734 => 'Potent Pyrestone',
  39735 => 'Luminous Pyrestone',
  39736 => 'Glinting Pyrestone',
  39737 => 'Veiled Pyrestone',
  39738 => 'Wicked Pyrestone',
  39739 => 'Enduring Seaspray Emerald',
  39740 => 'Radiant Seaspray Emerald',
  39741 => 'Dazzling Seaspray Emerald',
  39742 => 'Jagged Seaspray Emerald',
  39895 => true,
  39961 => 'Relentless Earthstorm Diamond',
  39963 => 'Thundering Skyfire Diamond',
  39971 => 'Icy Blasting Primers',
  39973 => 'Frost Grenades',
  39997 => 'Boots of Shackled Souls',
  40001 => 'Greaves of Shackled Souls',
  40002 => 'Waistguard of Shackled Souls',
  40003 => 'Redeemed Soul Moccasins',
  40004 => 'Redeemed Soul Wristguards',
  40005 => 'Redeemed Soul Legguards',
  40006 => 'Redeemed Soul Cinch',
  40020 => 'Soulguard Slippers',
  40021 => 'Soulguard Bracers',
  40023 => 'Soulguard Leggings',
  40024 => 'Soulguard Girdle',
  40033 => 'Shadesteel Sabots',
  40034 => 'Shadesteel Bracers',
  40035 => 'Shadesteel Greaves',
  40036 => 'Shadesteel Girdle',
  40060 => 'Night\'s End',
  40514 => 'Necklace of the Deep',
  41132 => 'Swiftsteel Bracers',
  41133 => 'Swiftsteel Shoulders',
  41134 => 'Dawnsteel Bracers',
  41135 => 'Dawnsteel Shoulders',
  41156 => 'Bracers of Renewed Life',
  41157 => 'Shoulderpads of Renewed Life',
  41158 => 'Swiftstrike Bracers',
  41160 => 'Swiftstrike Shoulders',
  41161 => 'Bindings of Lightning Reflexes',
  41162 => 'Shoulders of Lightning Reflexes',
  41163 => 'Living Earth Bindings',
  41164 => 'Living Earth Shoulders',
  41205 => 'Bracers of Nimble Thought',
  41206 => 'Mantle of Nimble Thought',
  41207 => 'Swiftheal Wraps',
  41208 => 'Swiftheal Mantle',
  41307 => 'Gyro-balanced Khorium Destroyer',
  41314 => 'Surestrike Goggles v2.0',
  41414 => 'Brilliant Pearl Band',
  41415 => 'The Black Pearl',
  41418 => 'Crown of the Sea Witch',
  41420 => 'Purified Jaggal Pearl',
  41429 => 'Purified Shadow Pearl',
  41458 => 'Cauldron of Major Arcane Protection',
  41500 => 'Cauldron of Major Fire Protection',
  41501 => 'Cauldron of Major Frost Protection',
  41502 => 'Cauldron of Major Nature Protection',
  41503 => 'Cauldron of Major Shadow Protection',
  42296 => 'Stewed Trout',
  42302 => 'Fisherman\'s Feast',
  42305 => 'Hot Buttered Trout',
  42546 => 'Cloak of Darkness',
  42558 => 'Don Julio\'s Heart',
  42588 => 'Kailee\'s Rose',
  42589 => 'Crimson Sun',
  42590 => 'Falling Star',
  42591 => 'Stone of Blades',
  42592 => 'Blood of Amber',
  42593 => 'Facet of Eternity',
  42613 => 'Nexus Transformation',
  42615 => 'Small Prismatic Shard',
  42620 => 'Enchant Weapon - Greater Agility',
  42662 => 'Ragesteel Shoulders',
  42688 => 'Adamantite Weapon Chain',
  42731 => 'Shadowprowler\'s Chestguard',
  42736 => 'Flask of Chromatic Wonder',
  42974 => 'Enchant Weapon - Executioner',
  43493 => 'Steady Talasite',
  43549 => 'Heavy Copper Longsword',
  43676 => 'Adamantite Arrow Maker',
  43707 => 'Skullfish Soup',
  43758 => 'Stormchops',
  43761 => 'Broiled Bloodfin',
  43765 => 'Spicy Hot Talbuk',
  43772 => 'Kibler\'s Bits',
  43779 => 'Delicious Chocolate Cake',
  43846 => 'Hammer of Righteous Might',
  44155 => 'Flying Machine',
  44157 => 'Turbo-Charged Flying Machine',
  44343 => 'Knothide Ammo Pouch',
  44344 => 'Knothide Quiver',
  44359 => 'Quiver of a Thousand Feathers',
  44383 => 'Enchant Shield - Resilience',
  44391 => 'Field Repair Bot 110G',
  44483 => 'Enchant Cloak - Superior Frost Resistance',
  44484 => 'Enchant Gloves - Expertise',
  44488 => 'Enchant Gloves - Precision',
  44489 => 'Enchant Shield - Defense',
  44492 => 'Enchant Chest - Mighty Health',
  44494 => 'Enchant Cloak - Superior Nature Resistance',
  44500 => 'Enchant Cloak - Superior Agility',
  44506 => 'Enchant Gloves - Gatherer',
  44508 => 'Enchant Boots - Greater Spirit',
  44509 => 'Enchant Chest - Greater Mana Restoration',
  44510 => 'Enchant Weapon - Exceptional Spirit',
  44513 => 'Enchant Gloves - Greater Assault',
  44524 => 'Enchant Weapon - Icebreaker',
  44528 => 'Enchant Boots - Greater Fortitude',
  44529 => 'Enchant Gloves - Major Agility',
  44555 => 'Enchant Bracers - Exceptional Intellect',
  44556 => 'Enchant Cloak - Superior Fire Resistance',
  44575 => 'Enchant Bracers - Greater Assault',
  44576 => 'Enchant Weapon - Lifeward',
  44582 => 'Enchant Cloak - Spell Piercing',
  44584 => 'Enchant Boots - Greater Vitality',
  44588 => 'Enchant Chest - Exceptional Resilience',
  44589 => 'Enchant Boots - Superior Agility',
  44590 => 'Enchant Cloak - Superior Shadow Resistance',
  44591 => 'Enchant Cloak - Titanweave',
  44592 => 'Enchant Gloves - Exceptional Spellpower',
  44593 => 'Enchant Bracers - Major Spirit',
  44595 => 'Enchant 2H Weapon - Scourgebane',
  44596 => 'Enchant Cloak - Superior Arcane Resistance',
  44598 => 'Enchant Bracers - Expertise',
  44612 => 'Enchant Gloves - Greater Blasting',
  44616 => 'Enchant Bracers - Greater Stats',
  44621 => 'Enchant Weapon - Giant Slayer',
  44623 => 'Enchant Chest - Super Stats',
  44625 => 'Enchant Gloves - Armsman',
  44629 => 'Enchant Weapon - Exceptional Spellpower',
  44630 => 'Enchant 2H Weapon - Greater Savagery',
  44631 => 'Enchant Cloak - Shadow Armor',
  44633 => 'Enchant Weapon - Exceptional Agility',
  44635 => 'Enchant Bracers - Greater Spellpower',
  44636 => 'Enchant Ring - Greater Spellpower',
  44645 => 'Enchant Ring - Assault',
  44768 => 'Netherscale Ammo Pouch',
  44770 => 'Glove Reinforcements',
  44794 => 'Chaotic Skyfire Diamond',
  44950 => 'Green Winter Clothes',
  44953 => 'Winter Boots',
  44958 => 'Red Winter Clothes',
  44970 => 'Heavy Knothide Armor Kit',
  45022 => 'Hot Apple Cider',
  45061 => 'Mad Alchemist\'s Potion',
  45100 => 'Leatherworker\'s Satchel',
  45117 => 'Bag of Many Hides',
  45363 => true,
  45542 => true,
  45545 => 'Frostweave Bandage',
  45546 => 'Heavy Frostweave Bandage',
  45549 => 'Mammoth Meal',
  45550 => 'Shoveltusk Steak',
  45551 => 'Worm Delight',
  45552 => 'Roasted Worg',
  45553 => 'Rhino Dogs',
  45554 => 'Great Feast',
  45555 => 'Mega Mammoth Meal',
  45556 => 'Tender Shoveltusk Steak',
  45557 => 'Spiced Worm Burger',
  45558 => 'Very Burnt Worg',
  45559 => 'Mighty Rhino Dogs',
  45560 => 'Smoked Rockfin',
  45561 => 'Grilled Bonescale',
  45562 => 'Sauteed Goby',
  45563 => 'Grilled Sculpin',
  45564 => 'Smoked Salmon',
  45565 => 'Poached Nettlefish',
  45566 => 'Pickled Fangtooth',
  45567 => 'Poached Northern Sculpin',
  45568 => 'Firecracker Salmon',
  45569 => 'Baked Manta Ray',
  45570 => 'Imperial Manta Steak',
  45571 => 'Spicy Blue Nettlefish',
  45695 => true,
  45765 => 'Void Shatter',
  46113 => 'Surestrike Goggles v3.0',
  46122 => 'Loop of Forged Power',
  46123 => 'Ring of Flowing Life',
  46124 => 'Hard Khorium Band',
  46125 => 'Pendant of Sunfire',
  46126 => 'Amulet of Flowing Life',
  46127 => 'Hard Khorium Choker',
  46128 => 'Sunfire Handwraps',
  46129 => 'Hands of Eternal Light',
  46130 => 'Sunfire Robe',
  46131 => 'Robe of Eternal Light',
  46132 => 'Leather Gauntlets of the Sun',
  46133 => 'Fletcher\'s Gloves of the Phoenix',
  46134 => 'Gloves of Immortal Dusk',
  46135 => 'Sun-Drenched Scale Gloves',
  46136 => 'Leather Chestguard of the Sun',
  46137 => 'Embrace of the Phoenix',
  46138 => 'Carapace of Sun and Shadow',
  46139 => 'Sun-Drenched Scale Chestguard',
  46140 => 'Sunblessed Gauntlets',
  46141 => 'Hard Khorium Battlefists',
  46142 => 'Sunblessed Breastplate',
  46144 => 'Hard Khorium Battleplate',
  46403 => 'Quick Dawnstone',
  46404 => 'Reckless Noble Topaz',
  46405 => 'Forceful Talasite',
  46578 => 'Enchant Weapon - Deathfrost',
  46594 => 'Enchant Chest - Defense',
  46597 => 'Eternal Earthstorm Diamond',
  46601 => 'Ember Skyfire Diamond',
  46684 => 'Charred Bear Kabobs',
  46688 => 'Juicy Bear Burger',
  46697 => 'Rocket Boots Xtreme Lite',
  46775 => 'Figurine - Empyrean Tortoise',
  46776 => 'Figurine - Khorium Boar',
  46777 => 'Figurine - Crimson Serpent',
  46778 => 'Figurine - Shadowsong Panther',
  46779 => 'Figurine - Seaspray Albatross',
  46803 => 'Regal Nightseye',
  47046 => 'Guardian\'s Alchemist Stone',
  47048 => 'Sorcerer\'s Alchemist Stone',
  47049 => 'Redeemer\'s Alchemist Stone',
  47050 => 'Assassin\'s Alchemist Stone',
  47051 => 'Enchant Cloak - Steelweave',
  47053 => 'Forceful Seaspray Emerald',
  47054 => 'Steady Seaspray Emerald',
  47055 => 'Reckless Pyrestone',
  47056 => 'Quick Lionseye',
  47280 => 'Brilliant Glass',
  47672 => 'Enchant Cloak - Mighty Armor',
  47766 => 'Enchant Chest - Greater Defense',
  47898 => 'Enchant Cloak - Greater Speed',
  47899 => 'Enchant Cloak - Wisdom',
  47900 => 'Enchant Chest - Super Health',
  47901 => 'Enchant Boots - Tuskarr\'s Vitality',
  48121 => 'Glyph of Entangling Roots',
  48247 => 'Mysterious Tarot',
  48248 => 'Scroll of Recall',
  48789 => 'Purified Shadowsong Amethyst',
  49677 => 'Dress Shoes',
  50194 => 'Mycah\'s Botanical Bag',
  50598 => 'Scroll of Intellect II',
  50599 => 'Scroll of Intellect III',
  50600 => 'Scroll of Intellect IV',
  50601 => 'Scroll of Intellect V',
  50602 => 'Scroll of Intellect VI',
  50603 => 'Scroll of Intellect VII',
  50604 => 'Scroll of Intellect VIII',
  50605 => 'Scroll of Spirit II',
  50606 => 'Scroll of Spirit III',
  50607 => 'Scroll of Spirit IV',
  50608 => 'Scroll of Spirit V',
  50609 => 'Scroll of Spirit VI',
  50610 => 'Scroll of Spirit VII',
  50611 => 'Scroll of Spirit VIII',
  50612 => 'Scroll of Stamina II',
  50614 => 'Scroll of Stamina III',
  50616 => 'Scroll of Stamina IV',
  50617 => 'Scroll of Stamina V',
  50618 => 'Scroll of Stamina VI',
  50619 => 'Scroll of Stamina VII',
  50620 => 'Scroll of Stamina VIII',
  50644 => 'Haliscan Jacket',
  50647 => 'Haliscan Pantaloons',
  50936 => 'Heavy Borean Leather',
  50938 => 'Iceborne Chestguard',
  50939 => 'Iceborne Leggings',
  50940 => 'Iceborne Shoulderpads',
  50941 => 'Iceborne Gloves',
  50942 => 'Iceborne Boots',
  50943 => 'Iceborne Belt',
  50944 => 'Arctic Chestpiece',
  50945 => 'Arctic Leggings',
  50946 => 'Arctic Shoulderpads',
  50947 => 'Arctic Gloves',
  50948 => 'Arctic Boots',
  50949 => 'Arctic Belt',
  50950 => 'Frostscale Chestguard',
  50951 => 'Frostscale Leggings',
  50952 => 'Frostscale Shoulders',
  50953 => 'Frostscale Gloves',
  50954 => 'Frostscale Boots',
  50955 => 'Frostscale Belt',
  50956 => 'Nerubian Chestguard',
  50957 => 'Nerubian Legguards',
  50958 => 'Nerubian Shoulders',
  50959 => 'Nerubian Gloves',
  50960 => 'Nerubian Boots',
  50961 => 'Nerubian Belt',
  50962 => 'Borean Armor Kit',
  50963 => 'Heavy Borean Armor Kit',
  50964 => 'Jormungar Leg Armor',
  50965 => 'Frosthide Leg Armor',
  50966 => 'Nerubian Leg Armor',
  50967 => 'Icescale Leg Armor',
  50970 => 'Trapper\'s Traveling Pack',
  50971 => 'Mammoth Mining Bag',
  51296 => true,
  51300 => true,
  51302 => true,
  51304 => true,
  51306 => true,
  51309 => true,
  51311 => true,
  51313 => true,
  51568 => 'Black Chitinguard Boots',
  51569 => 'Dark Arctic Leggings',
  51570 => 'Dark Arctic Chestpiece',
  51571 => 'Arctic Wristguards',
  51572 => 'Arctic Helm',
  52175 => true,
  52567 => 'Cobalt Legplates',
  52568 => 'Cobalt Belt',
  52569 => 'Cobalt Boots',
  52570 => 'Cobalt Chestpiece',
  52571 => 'Cobalt Helm',
  52572 => 'Cobalt Shoulders',
  52733 => 'Bracers of Shackled Souls',
  52739 => 'Armor Vellum',
  52840 => 'Weapon Vellum',
  52843 => 'Moonglow Ink',
  53042 => true,
  53056 => 'Kungaloosh',
  53281 => 'Volatile Blasting Trigger',
  53462 => 'Midnight Ink',
  53771 => 'Transmute: Eternal Life to Shadow',
  53773 => 'Transmute: Eternal Life to Fire',
  53774 => 'Transmute: Eternal Fire to Water',
  53775 => 'Transmute: Eternal Fire to Life',
  53776 => 'Transmute: Eternal Air to Water',
  53777 => 'Transmute: Eternal Air to Earth',
  53779 => 'Transmute: Eternal Shadow to Earth',
  53780 => 'Transmute: Eternal Shadow to Life',
  53781 => 'Transmute: Eternal Earth to Air',
  53782 => 'Transmute: Eternal Earth to Shadow',
  53783 => 'Transmute: Eternal Water to Air',
  53784 => 'Transmute: Eternal Water to Fire',
  53812 => 'Pygmy Oil',
  53830 => 'Bold Scarlet Ruby',
  53831 => 'Bold Bloodstone',
  53832 => 'Delicate Bloodstone',
  53834 => 'Runed Bloodstone',
  53835 => 'Bright Bloodstone',
  53836 => 'Runic Healing Potion',
  53837 => 'Runic Mana Potion',
  53838 => 'Resurgent Healing Potion',
  53839 => 'Icy Mana Potion',
  53840 => 'Elixir of Mighty Agility',
  53841 => 'Wrath Elixir',
  53842 => 'Spellpower Elixir',
  53843 => 'Subtle Bloodstone',
  53844 => 'Flashing Bloodstone',
  53845 => 'Fractured Bloodstone',
  53847 => 'Elixir of Spirit',
  53848 => 'Guru\'s Elixir',
  53852 => 'Brilliant Sun Crystal',
  53853 => 'Smooth Sun Crystal',
  53854 => 'Rigid Sun Crystal',
  53855 => 'Thick Sun Crystal',
  53856 => 'Quick Sun Crystal',
  53857 => 'Mystic Sun Crystal',
  53859 => 'Sovereign Shadow Crystal',
  53860 => 'Shifting Shadow Crystal',
  53861 => 'Tenuous Shadow Crystal',
  53862 => 'Glowing Shadow Crystal',
  53863 => 'Purified Shadow Crystal',
  53864 => 'Royal Shadow Crystal',
  53865 => 'Mysterious Shadow Crystal',
  53866 => 'Balanced Shadow Crystal',
  53867 => 'Infused Shadow Crystal',
  53868 => 'Regal Shadow Crystal',
  53869 => 'Defender\'s Shadow Crystal',
  53870 => 'Puissant Shadow Crystal',
  53871 => 'Guardian\'s Shadow Crystal',
  53872 => 'Inscribed Huge Citrine',
  53873 => 'Etched Huge Citrine',
  53874 => 'Champion\'s Huge Citrine',
  53875 => 'Resplendent Huge Citrine',
  53876 => 'Fierce Huge Citrine',
  53877 => 'Deadly Huge Citrine',
  53878 => 'Glinting Huge Citrine',
  53879 => 'Lucent Huge Citrine',
  53880 => 'Deft Huge Citrine',
  53881 => 'Luminous Huge Citrine',
  53882 => 'Potent Huge Citrine',
  53883 => 'Veiled Huge Citrine',
  53884 => 'Durable Huge Citrine',
  53885 => 'Reckless Huge Citrine',
  53886 => 'Wicked Huge Citrine',
  53887 => 'Pristine Huge Citrine',
  53888 => 'Empowered Huge Citrine',
  53889 => 'Stark Huge Citrine',
  53890 => 'Stalwart Huge Citrine',
  53891 => 'Glimmering Huge Citrine',
  53892 => 'Accurate Huge Citrine',
  53893 => 'Resolute Huge Citrine',
  53894 => 'Timeless Dark Jade',
  53895 => 'Crazy Alchemist\'s Potion',
  53898 => 'Elixir of Mighty Fortitude',
  53899 => 'Lesser Flask of Toughness',
  53900 => 'Potion of Nightmares',
  53901 => 'Flask of the Frost Wyrm',
  53902 => 'Flask of Stoneblood',
  53903 => 'Flask of Endless Rage',
  53904 => 'Powerful Rejuvenation Potion',
  53905 => 'Indestructible Potion',
  53916 => 'Jagged Dark Jade',
  53917 => 'Vivid Dark Jade',
  53918 => 'Enduring Dark Jade',
  53919 => 'Steady Dark Jade',
  53920 => 'Forceful Dark Jade',
  53921 => 'Seer\'s Dark Jade',
  53922 => 'Misty Dark Jade',
  53923 => 'Shining Dark Jade',
  53924 => 'Turbid Dark Jade',
  53925 => 'Intricate Dark Jade',
  53926 => 'Dazzling Dark Jade',
  53927 => 'Sundered Dark Jade',
  53928 => 'Lambent Dark Jade',
  53929 => 'Opaque Dark Jade',
  53930 => 'Energized Dark Jade',
  53931 => 'Radiant Dark Jade',
  53932 => 'Tense Dark Jade',
  53933 => 'Shattered Dark Jade',
  53934 => 'Solid Chalcedony',
  53936 => 'Mighty Arcane Protection Potion',
  53937 => 'Mighty Frost Protection Potion',
  53938 => 'Mighty Shadow Protection Potion',
  53939 => 'Mighty Fire Protection Potion',
  53940 => 'Sparkling Chalcedony',
  53941 => 'Lustrous Chalcedony',
  53942 => 'Mighty Nature Protection Potion',
  53943 => 'Stormy Chalcedony',
  53945 => 'Delicate Scarlet Ruby',
  53946 => 'Runed Scarlet Ruby',
  53947 => 'Bright Scarlet Ruby',
  53948 => 'Subtle Scarlet Ruby',
  53949 => 'Flashing Scarlet Ruby',
  53950 => 'Fractured Scarlet Ruby',
  53951 => 'Precise Scarlet Ruby',
  53952 => 'Solid Sky Sapphire',
  53953 => 'Sparkling Sky Sapphire',
  53954 => 'Lustrous Sky Sapphire',
  53955 => 'Stormy Sky Sapphire',
  53956 => 'Brilliant Autumn\'s Glow',
  53957 => 'Smooth Autumn\'s Glow',
  53958 => 'Rigid Autumn\'s Glow',
  53959 => 'Thick Autumn\'s Glow',
  53960 => 'Mystic Autumn\'s Glow',
  53961 => 'Quick Autumn\'s Glow',
  53962 => 'Sovereign Twilight Opal',
  53963 => 'Shifting Twilight Opal',
  53964 => 'Tenuous Twilight Opal',
  53965 => 'Glowing Twilight Opal',
  53966 => 'Purified Twilight Opal',
  53967 => 'Royal Twilight Opal',
  53968 => 'Mysterious Twilight Opal',
  53969 => 'Balanced Twilight Opal',
  53970 => 'Infused Twilight Opal',
  53971 => 'Regal Twilight Opal',
  53972 => 'Defender\'s Twilight Opal',
  53973 => 'Puissant Twilight Opal',
  53974 => 'Guardian\'s Twilight Opal',
  53975 => 'Inscribed Monarch Topaz',
  53976 => 'Etched Monarch Topaz',
  53977 => 'Champion\'s Monarch Topaz',
  53978 => 'Resplendent Monarch Topaz',
  53979 => 'Deadly Monarch Topaz',
  53980 => 'Glinting Monarch Topaz',
  53981 => 'Lucent Monarch Topaz',
  53982 => 'Deft Monarch Topaz',
  53983 => 'Luminous Monarch Topaz',
  53984 => 'Potent Monarch Topaz',
  53985 => 'Veiled Monarch Topaz',
  53986 => 'Durable Monarch Topaz',
  53987 => 'Reckless Monarch Topaz',
  53988 => 'Wicked Monarch Topaz',
  53989 => 'Pristine Monarch Topaz',
  53990 => 'Empowered Monarch Topaz',
  53991 => 'Stark Monarch Topaz',
  53992 => 'Stalwart Monarch Topaz',
  53993 => 'Glimmering Monarch Topaz',
  53994 => 'Accurate Monarch Topaz',
  53995 => 'Timeless Forest Emerald',
  53996 => 'Jagged Forest Emerald',
  53997 => 'Vivid Forest Emerald',
  53998 => 'Enduring Forest Emerald',
  54000 => 'Steady Forest Emerald',
  54001 => 'Forceful Forest Emerald',
  54002 => 'Seer\'s Forest Emerald',
  54003 => 'Misty Forest Emerald',
  54004 => 'Shining Forest Emerald',
  54005 => 'Turbid Forest Emerald',
  54006 => 'Intricate Forest Emerald',
  54007 => 'Dazzling Forest Emerald',
  54008 => 'Sundered Forest Emerald',
  54009 => 'Lambent Forest Emerald',
  54010 => 'Opaque Forest Emerald',
  54011 => 'Energized Forest Emerald',
  54012 => 'Radiant Forest Emerald',
  54013 => 'Tense Forest Emerald',
  54014 => 'Shattered Forest Emerald',
  54017 => 'Precise Bloodstone',
  54019 => 'Fierce Monarch Topaz',
  54020 => 'Transmute: Eternal Might',
  54023 => 'Resolute Monarch Topaz',
  54213 => 'Flask of Pure Mojo',
  54218 => 'Elixir of Mighty Strength',
  54220 => 'Elixir of Protection',
  54221 => 'Potion of Speed',
  54222 => 'Potion of Wild Magic',
  54353 => 'Mark "S" Boomstick',
  54550 => 'Cobalt Triangle Shield',
  54551 => 'Tempered Saronite Belt',
  54552 => 'Tempered Saronite Boots',
  54553 => 'Tempered Saronite Breastplate',
  54554 => 'Tempered Saronite Legplates',
  54555 => 'Tempered Saronite Helm',
  54556 => 'Tempered Saronite Shoulders',
  54557 => 'Saronite Defender',
  54736 => 'Personal Electromagnetic Pulse Generator',
  54793 => 'Frag Belt',
  54917 => 'Spiked Cobalt Helm',
  54918 => 'Spiked Cobalt Boots',
  54941 => 'Spiked Cobalt Shoulders',
  54944 => 'Spiked Cobalt Chestpiece',
  54945 => 'Spiked Cobalt Gauntlets',
  54946 => 'Spiked Cobalt Belt',
  54947 => 'Spiked Cobalt Legplates',
  54948 => 'Spiked Cobalt Bracers',
  54949 => 'Horned Cobalt Helm',
  54978 => 'Reinforced Cobalt Shoulders',
  54979 => 'Reinforced Cobalt Helm',
  54980 => 'Reinforced Cobalt Legplates',
  54981 => 'Reinforced Cobalt Chestpiece',
  54998 => 'Hand-Mounted Pyro Rocket',
  54999 => 'Hyperspeed Accelerators',
  55002 => 'Flexweave Underlay',
  55013 => 'Saronite Protector',
  55014 => 'Saronite Bulwark',
  55015 => 'Tempered Saronite Gauntlets',
  55016 => 'Nitro Boosts',
  55017 => 'Tempered Saronite Bracers',
  55055 => 'Brilliant Saronite Legplates',
  55056 => 'Brilliant Saronite Gauntlets',
  55057 => 'Brilliant Saronite Boots',
  55058 => 'Brilliant Saronite Breastplate',
  55174 => 'Honed Cobalt Cleaver',
  55177 => 'Savage Cobalt Slicer',
  55179 => 'Saronite Ambusher',
  55181 => 'Saronite Shiv',
  55182 => 'Furious Saronite Beatstick',
  55183 => 'Corroded Saronite Edge',
  55184 => 'Corroded Saronite Woundbringer',
  55185 => 'Saronite Mindcrusher',
  55186 => 'Chestplate of Conquest',
  55187 => 'Legplates of Conquest',
  55199 => 'Cloak of Tormented Skies',
  55200 => 'Sturdy Cobalt Quickblade',
  55201 => 'Cobalt Tenderizer',
  55202 => 'Sure-fire Shuriken',
  55203 => 'Forged Cobalt Claymore',
  55204 => 'Notched Cobalt War Axe',
  55206 => 'Deadly Saronite Dirk',
  55243 => 'Bracers of Deflection',
  55252 => 'Scrapbot Construction Kit',
  55298 => 'Vengeance Bindings',
  55300 => 'Righteous Gauntlets',
  55301 => 'Daunting Handguards',
  55302 => 'Helm of Command',
  55303 => 'Daunting Legplates',
  55304 => 'Righteous Greaves',
  55305 => 'Savage Saronite Bracers',
  55306 => 'Savage Saronite Pauldrons',
  55307 => 'Savage Saronite Waistguard',
  55308 => 'Savage Saronite Walkers',
  55309 => 'Savage Saronite Gauntlets',
  55310 => 'Savage Saronite Legplates',
  55311 => 'Savage Saronite Hauberk',
  55312 => 'Savage Saronite Skullshield',
  55369 => 'Titansteel Destroyer',
  55370 => 'Titansteel Bonecrusher',
  55371 => 'Titansteel Guardian',
  55372 => 'Spiked Titansteel Helm',
  55373 => 'Tempered Titansteel Helm',
  55374 => 'Brilliant Titansteel Helm',
  55375 => 'Spiked Titansteel Treads',
  55376 => 'Tempered Titansteel Treads',
  55377 => 'Brilliant Titansteel Treads',
  55384 => 'Effulgent Skyflare Diamond',
  55386 => 'Tireless Skyflare Diamond',
  55387 => 'Forlorn Skyflare Diamond',
  55388 => 'Impassive Skyflare Diamond',
  55389 => 'Chaotic Skyflare Diamond',
  55390 => 'Destructive Skyflare Diamond',
  55392 => 'Ember Skyflare Diamond',
  55393 => 'Enigmatic Skyflare Diamond',
  55394 => 'Swift Skyflare Diamond',
  55395 => 'Thundering Skyflare Diamond',
  55396 => 'Insightful Earthsiege Diamond',
  55397 => 'Bracing Earthsiege Diamond',
  55398 => 'Eternal Earthsiege Diamond',
  55399 => 'Powerful Earthsiege Diamond',
  55400 => 'Relentless Earthsiege Diamond',
  55401 => 'Austere Earthsiege Diamond',
  55402 => 'Persistent Earthsiege Diamond',
  55403 => 'Trenchant Earthsiege Diamond',
  55404 => 'Invigorating Earthsiege Diamond',
  55405 => 'Beaming Earthsiege Diamond',
  55407 => 'Revitalizing Skyflare Diamond',
  55534 => true,
  55628 => 'Socket Bracer',
  55641 => 'Socket Gloves',
  55642 => 'Lightweave Embroidery',
  55656 => 'Eternal Belt Buckle',
  55732 => 'Titanium Rod',
  55769 => 'Darkglow Embroidery',
  55777 => 'Swordguard Embroidery',
  55834 => 'Cobalt Bracers',
  55835 => 'Cobalt Gauntlets',
  55839 => 'Titanium Weapon Chain',
  55898 => 'Frostweave Net',
  55899 => 'Bolt of Frostweave',
  55900 => 'Bolt of Imbued Frostweave',
  55901 => 'Duskweave Leggings',
  55902 => 'Frostwoven Shoulders',
  55903 => 'Frostwoven Robe',
  55904 => 'Frostwoven Gloves',
  55906 => 'Frostwoven Boots',
  55907 => 'Frostwoven Cowl',
  55908 => 'Frostwoven Belt',
  55910 => 'Mystic Frostwoven Shoulders',
  55911 => 'Mystic Frostwoven Robe',
  55913 => 'Mystic Frostwoven Wristwraps',
  55914 => 'Duskweave Belt',
  55919 => 'Duskweave Cowl',
  55920 => 'Duskweave Wristwraps',
  55921 => 'Duskweave Robe',
  55922 => 'Duskweave Gloves',
  55923 => 'Duskweave Shoulders',
  55924 => 'Duskweave Boots',
  55925 => 'Black Duskweave Leggings',
  55941 => 'Black Duskweave Robe',
  55943 => 'Black Duskweave Wristwraps',
  55993 => 'Red Lumberjack Shirt',
  55994 => 'Blue Lumberjack Shirt',
  55995 => 'Yellow Lumberjack Shirt',
  55996 => 'Green Lumberjack Shirt',
  55997 => 'Red Workman\'s Shirt',
  55998 => 'Blue Workman\'s Shirt',
  55999 => 'Rustic Workman\'s Shirt',
  56000 => 'Green Workman\'s Shirt',
  56001 => true,
  56002 => true,
  56003 => true,
  56004 => 'Abyssal Bag',
  56005 => 'Glacial Bag',
  56006 => 'Mysterious Bag',
  56007 => 'Frostweave Bag',
  56008 => 'Shining Spellthread',
  56009 => 'Brilliant Spellthread',
  56010 => 'Azure Spellthread',
  56011 => 'Sapphire Spellthread',
  56014 => 'Cloak of the Moon',
  56015 => 'Cloak of Frozen Spirits',
  56016 => 'Wispcloak',
  56017 => 'Deathchill Cloak',
  56018 => 'Hat of Wintry Doom',
  56019 => 'Silky Iceshard Boots',
  56020 => 'Deep Frozen Cord',
  56021 => 'Frostmoon Pants',
  56022 => 'Light Blessed Mittens',
  56023 => 'Aurora Slippers',
  56024 => 'Moonshroud Robe',
  56025 => 'Moonshroud Gloves',
  56026 => 'Ebonweave Robe',
  56027 => 'Ebonweave Gloves',
  56028 => 'Spellweave Robe',
  56029 => 'Spellweave Gloves',
  56030 => 'Frostwoven Leggings',
  56031 => 'Frostwoven Wristwraps',
  56034 => 'Master\'s Spellthread',
  56039 => 'Sanctified Spellthread',
  56048 => 'Duskweave Boots',
  56049 => 'Bold Dragon\'s Eye',
  56052 => 'Delicate Dragon\'s Eye',
  56053 => 'Runed Dragon\'s Eye',
  56054 => 'Bright Dragon\'s Eye',
  56055 => 'Subtle Dragon\'s Eye',
  56056 => 'Flashing Dragon\'s Eye',
  56074 => 'Brilliant Dragon\'s Eye',
  56076 => 'Fractured Dragon\'s Eye',
  56077 => 'Lustrous Dragon\'s Eye',
  56079 => 'Mystic Dragon\'s Eye',
  56081 => 'Precise Dragon\'s Eye',
  56083 => 'Quick Dragon\'s Eye',
  56084 => 'Rigid Dragon\'s Eye',
  56085 => 'Smooth Dragon\'s Eye',
  56086 => 'Solid Dragon\'s Eye',
  56087 => 'Sparkling Dragon\'s Eye',
  56088 => 'Stormy Dragon\'s Eye',
  56089 => 'Thick Dragon\'s Eye',
  56193 => 'Bloodstone Band',
  56194 => 'Sun Rock Ring',
  56195 => 'Jade Dagger Pendant',
  56196 => 'Blood Sun Necklace',
  56197 => 'Dream Signet',
  56199 => 'Ruby Hare',
  56201 => 'Twilight Serpent',
  56202 => 'Sapphire Owl',
  56203 => 'Emerald Boar',
  56205 => 'Dark Jade Focusing Lens',
  56206 => 'Shadow Crystal Focusing Lens',
  56208 => 'Shadow Jade Focusing Lens',
  56234 => 'Titansteel Shanker',
  56273 => true,
  56280 => 'Cudgel of Saronite Justice',
  56349 => 'Handful of Cobalt Bolts',
  56357 => 'Titanium Shield Spike',
  56400 => 'Titansteel Shield Wall',
  56459 => 'Hammer Pick',
  56460 => 'Cobalt Frag Bomb',
  56461 => 'Bladed Pickaxe',
  56462 => 'Gnomish Army Knife',
  56463 => 'Explosive Decoy',
  56464 => 'Overcharged Capacitor',
  56466 => 'Sonic Booster',
  56467 => 'Noise Machine',
  56468 => 'Box of Bombs',
  56469 => 'Gnomish Lightning Generator',
  56470 => 'Sun Scope',
  56471 => 'Froststeel Tube',
  56472 => 'MOLL-E',
  56473 => 'Gnomish X-Ray Specs',
  56474 => 'Mammoth Cutters',
  56475 => 'Saronite Razorheads',
  56476 => 'Healing Injector Kit',
  56477 => 'Mana Injector Kit',
  56478 => 'Heartseeker Scope',
  56479 => 'Armor Plated Combat Shotgun',
  56496 => 'Titanium Impact Band',
  56497 => 'Titanium Earthguard Ring',
  56498 => 'Titanium Spellshock Ring',
  56499 => 'Titanium Impact Choker',
  56500 => 'Titanium Earthguard Chain',
  56501 => 'Titanium Spellshock Necklace',
  56514 => 'Global Thermal Sapper Charge',
  56519 => 'Elixir of Mighty Mageblood',
  56530 => 'Enchanted Pearl',
  56531 => 'Enchanted Tear',
  56549 => 'Ornate Saronite Bracers',
  56550 => 'Ornate Saronite Pauldrons',
  56551 => 'Ornate Saronite Waistguard',
  56552 => 'Ornate Saronite Walkers',
  56553 => 'Ornate Saronite Gauntlets',
  56554 => 'Ornate Saronite Legplates',
  56555 => 'Ornate Saronite Hauberk',
  56556 => 'Ornate Saronite Skullshield',
  56574 => 'Truesight Ice Blinders',
  56943 => 'Glyph of Frenzied Regeneration',
  56944 => 'Glyph of Growl',
  56945 => 'Glyph of Healing Touch',
  56946 => 'Glyph of Hurricane',
  56947 => 'Glyph of Innervate',
  56948 => 'Glyph of Insect Swarm',
  56949 => 'Glyph of Lifebloom',
  56950 => 'Glyph of Mangle',
  56951 => 'Glyph of Moonfire',
  56952 => 'Glyph of Rake',
  56953 => 'Glyph of Rebirth',
  56954 => 'Glyph of Regrowth',
  56955 => 'Glyph of Rejuvenation',
  56956 => 'Glyph of Rip',
  56957 => 'Glyph of Shred',
  56958 => 'Glyph of Starfall',
  56959 => 'Glyph of Starfire',
  56960 => 'Glyph of Swiftmend',
  56961 => 'Glyph of Maul',
  56963 => 'Glyph of Wrath',
  56965 => 'Glyph of Typhoon',
  56968 => 'Glyph of Arcane Explosion',
  56971 => 'Glyph of Arcane Missiles',
  56972 => 'Glyph of Arcane Power',
  56973 => 'Glyph of Blink',
  56974 => 'Glyph of Evocation',
  56975 => 'Glyph of Fireball',
  56976 => 'Glyph of Frost Nova',
  56977 => 'Glyph of Frostbolt',
  56978 => 'Glyph of Ice Armor',
  56979 => 'Glyph of Ice Block',
  56980 => 'Glyph of Ice Lance',
  56981 => 'Glyph of Icy Veins',
  56982 => 'Glyph of Scorch',
  56983 => 'Glyph of Invisibility',
  56984 => 'Glyph of Mage Armor',
  56985 => 'Glyph of Mana Gem',
  56986 => 'Glyph of Molten Armor',
  56987 => 'Glyph of Polymorph',
  56988 => 'Glyph of Remove Curse',
  56989 => 'Glyph of Water Elemental',
  56990 => 'Glyph of Blast Wave',
  56991 => 'Glyph of Arcane Blast',
  56994 => 'Glyph of Aimed Shot',
  56995 => 'Glyph of Arcane Shot',
  56996 => 'Glyph of the Beast',
  56997 => 'Glyph of Mending',
  56998 => 'Glyph of Aspect of the Viper',
  56999 => 'Glyph of Bestial Wrath',
  57000 => 'Glyph of Deterrence',
  57001 => 'Glyph of Disengage',
  57002 => 'Glyph of Freezing Trap',
  57003 => 'Glyph of Frost Trap',
  57004 => 'Glyph of Hunter\'s Mark',
  57005 => 'Glyph of Immolation Trap',
  57006 => 'Glyph of the Hawk',
  57007 => 'Glyph of Multi-Shot',
  57008 => 'Glyph of Rapid Fire',
  57009 => 'Glyph of Serpent Sting',
  57010 => 'Glyph of Snake Trap',
  57011 => 'Glyph of Steady Shot',
  57012 => 'Glyph of Trueshot Aura',
  57013 => 'Glyph of Volley',
  57014 => 'Glyph of Wyvern Sting',
  57019 => 'Glyph of Avenger\'s Shield',
  57020 => 'Glyph of Cleansing',
  57021 => 'Glyph of Avenging Wrath',
  57022 => 'Glyph of Spiritual Attunement',
  57023 => 'Glyph of Consecration',
  57024 => 'Glyph of Crusader Strike',
  57025 => 'Glyph of Exorcism',
  57026 => 'Glyph of Flash of Light',
  57027 => 'Glyph of Hammer of Justice',
  57028 => 'Glyph of Hammer of Wrath',
  57029 => 'Glyph of Holy Light',
  57030 => 'Glyph of Judgement',
  57031 => 'Glyph of Divinity',
  57032 => 'Glyph of Righteous Defense',
  57033 => 'Glyph of Seal of Command',
  57034 => 'Glyph of Seal of Light',
  57035 => 'Glyph of Seal of Wisdom',
  57036 => 'Glyph of Turn Evil',
  57112 => 'Glyph of Adrenaline Rush',
  57113 => 'Glyph of Ambush',
  57114 => 'Glyph of Backstab',
  57115 => 'Glyph of Blade Flurry',
  57116 => 'Glyph of Crippling Poison',
  57117 => 'Glyph of Deadly Throw',
  57119 => 'Glyph of Evasion',
  57120 => 'Glyph of Eviscerate',
  57121 => 'Glyph of Expose Armor',
  57122 => 'Glyph of Feint',
  57123 => 'Glyph of Garrote',
  57124 => 'Glyph of Ghostly Strike',
  57125 => 'Glyph of Gouge',
  57126 => 'Glyph of Hemorrhage',
  57127 => 'Glyph of Preparation',
  57128 => 'Glyph of Rupture',
  57129 => 'Glyph of Sap',
  57130 => 'Glyph of Vigor',
  57131 => 'Glyph of Sinister Strike',
  57132 => 'Glyph of Slice and Dice',
  57133 => 'Glyph of Sprint',
  57151 => 'Glyph of Barbaric Insults',
  57152 => 'Glyph of Blocking',
  57153 => 'Glyph of Bloodthirst',
  57154 => 'Glyph of Cleaving',
  57155 => 'Glyph of Devastate',
  57156 => 'Glyph of Execution',
  57157 => 'Glyph of Hamstring',
  57158 => 'Glyph of Heroic Strike',
  57159 => 'Glyph of Intervene',
  57160 => 'Glyph of Mortal Strike',
  57161 => 'Glyph of Overpower',
  57162 => 'Glyph of Rapid Charge',
  57163 => 'Glyph of Rending',
  57164 => 'Glyph of Resonating Power',
  57165 => 'Glyph of Revenge',
  57166 => 'Glyph of Last Stand',
  57167 => 'Glyph of Sunder Armor',
  57168 => 'Glyph of Sweeping Strikes',
  57169 => 'Glyph of Taunt',
  57170 => 'Glyph of Victory Rush',
  57172 => 'Glyph of Whirlwind',
  57181 => 'Glyph of Circle of Healing',
  57183 => 'Glyph of Dispel Magic',
  57184 => 'Glyph of Fade',
  57185 => 'Glyph of Fear Ward',
  57186 => 'Glyph of Flash Heal',
  57187 => 'Glyph of Holy Nova',
  57188 => 'Glyph of Inner Fire',
  57189 => 'Glyph of Lightwell',
  57190 => 'Glyph of Mass Dispel',
  57191 => 'Glyph of Mind Control',
  57192 => 'Glyph of Shadow Word: Pain',
  57193 => 'Glyph of Shadow',
  57194 => 'Glyph of Power Word: Shield',
  57195 => 'Glyph of Prayer of Healing',
  57196 => 'Glyph of Psychic Scream',
  57197 => 'Glyph of Renew',
  57198 => 'Glyph of Scourge Imprisonment',
  57199 => 'Glyph of Shadow Word: Death',
  57200 => 'Glyph of Mind Flay',
  57201 => 'Glyph of Smite',
  57202 => 'Glyph of Spirit of Redemption',
  57207 => 'Glyph of Anti-Magic Shell',
  57208 => 'Glyph of Heart Strike',
  57209 => 'Glyph of Blood Tap',
  57210 => 'Glyph of Bone Shield',
  57211 => 'Glyph of Chains of Ice',
  57212 => 'Glyph of Dark Command',
  57213 => 'Glyph of Death Grip',
  57214 => 'Glyph of Death and Decay',
  57215 => 'Glyph of Death\'s Embrace',
  57216 => 'Glyph of Frost Strike',
  57217 => 'Glyph of Horn of Winter',
  57218 => 'Glyph of Icebound Fortitude',
  57219 => 'Glyph of Icy Touch',
  57220 => 'Glyph of Obliterate',
  57221 => 'Glyph of Plague Strike',
  57222 => 'Glyph of the Ghoul',
  57223 => 'Glyph of Rune Strike',
  57224 => 'Glyph of Scourge Strike',
  57225 => 'Glyph of Strangulate',
  57226 => 'Glyph of Unbreakable Armor',
  57227 => 'Glyph of Vampiric Blood',
  57228 => 'Glyph of Raise Dead',
  57229 => 'Glyph of Corpse Explosion',
  57230 => 'Glyph of Pestilence',
  57231 => 'Death Knight Glyph 25',
  57232 => 'Glyph of Chain Heal',
  57233 => 'Glyph of Chain Lightning',
  57234 => 'Glyph of Lava',
  57235 => 'Glyph of Shocking',
  57236 => 'Glyph of Earthliving Weapon',
  57237 => 'Glyph of Fire Elemental Totem',
  57238 => 'Glyph of Fire Nova',
  57239 => 'Glyph of Flame Shock',
  57240 => 'Glyph of Flametongue Weapon',
  57241 => 'Glyph of Frost Shock',
  57242 => 'Glyph of Healing Stream Totem',
  57243 => 'Glyph of Healing Wave',
  57244 => 'Glyph of Lesser Healing Wave',
  57245 => 'Glyph of Lightning Bolt',
  57246 => 'Glyph of Lightning Shield',
  57247 => 'Glyph of Mana Tide Totem',
  57248 => 'Glyph of Stormstrike',
  57249 => 'Glyph of Lava Lash',
  57250 => 'Glyph of Elemental Mastery',
  57251 => 'Glyph of Water Mastery',
  57252 => 'Glyph of Windfury Weapon',
  57253 => 'Glyph of Thunderstorm',
  57257 => 'Glyph of Incinerate',
  57258 => 'Glyph of Conflagrate',
  57259 => 'Glyph of Corruption',
  57260 => 'Glyph of Curse of Agony',
  57261 => 'Glyph of Death Coil',
  57262 => 'Glyph of Fear',
  57263 => 'Glyph of Felguard',
  57264 => 'Glyph of Felhunter',
  57265 => 'Glyph of Health Funnel',
  57266 => 'Glyph of Healthstone',
  57267 => 'Glyph of Howl of Terror',
  57268 => 'Glyph of Immolate',
  57269 => 'Glyph of Imp',
  57270 => 'Glyph of Searing Pain',
  57271 => 'Glyph of Shadow Bolt',
  57272 => 'Glyph of Shadowburn',
  57273 => 'Glyph of Siphon Life',
  57274 => 'Glyph of Soulstone',
  57275 => 'Glyph of Succubus',
  57276 => 'Glyph of Unstable Affliction',
  57277 => 'Glyph of Voidwalker',
  57421 => 'Northern Stew',
  57423 => 'Fish Feast',
  57425 => 'Transmute: Skyflare Diamond',
  57427 => 'Transmute: Earthsiege Diamond',
  57433 => 'Spicy Fried Herring',
  57434 => 'Rhinolicious Wormsteak',
  57435 => 'Critter Bites',
  57436 => 'Hearty Rhino',
  57437 => 'Snapper Extreme',
  57438 => 'Blackened Worg Steak',
  57439 => 'Cuttlesteak',
  57440 => 'Spiced Mammoth Treats',
  57441 => 'Blackened Dragonfin',
  57442 => 'Dragonfin Filet',
  57443 => 'Tracker Snacks',
  57690 => 'Fur Lining - Stamina',
  57691 => 'Fur Lining - Spell Power',
  57692 => 'Fur Lining - Fire Resist',
  57694 => 'Fur Lining - Frost Resist',
  57696 => 'Fur Lining - Shadow Resist',
  57699 => 'Fur Lining - Nature Resist',
  57701 => 'Fur Lining - Arcane Resist',
  57703 => 'Hunter\'s Ink',
  57704 => 'Lion\'s Ink',
  57706 => 'Dawnstar Ink',
  57707 => 'Jadefire Ink',
  57708 => 'Royal Ink',
  57709 => 'Celestial Ink',
  57710 => 'Fiery Ink',
  57711 => 'Shimmering Ink',
  57712 => 'Ink of the Sky',
  57713 => 'Ethereal Ink',
  57714 => 'Darkflame Ink',
  57715 => 'Ink of the Sea',
  57716 => 'Snowfall Ink',
  57719 => 'Glyph of Fire Blast',
  58065 => 'Dalaran Clam Chowder',
  58141 => 'Crystal Citrine Necklace',
  58142 => 'Crystal Chalcedony Amulet',
  58143 => 'Earthshadow Ring',
  58144 => 'Jade Ring of Slaying',
  58145 => 'Stoneguard Band',
  58146 => 'Shadowmight Ring',
  58147 => 'Ring of Earthen Might',
  58148 => 'Ring of Scarlet Shadows',
  58149 => 'Windfire Band',
  58150 => 'Ring of Northern Tears',
  58286 => 'Glyph of Aquatic Form',
  58287 => 'Glyph of Challenging Roar',
  58288 => 'Glyph of Unburdened Rebirth',
  58289 => 'Glyph of Thorns',
  58296 => 'Glyph of the Wild',
  58297 => 'Glyph of the Pack',
  58298 => 'Glyph of Scare Beast',
  58299 => 'Glyph of Revive Pet',
  58300 => 'Glyph of Possessed Strength',
  58301 => 'Glyph of Mend Pet',
  58302 => 'Glyph of Feign Death',
  58303 => 'Glyph of Arcane Intellect',
  58305 => 'Glyph of Fire Ward',
  58306 => 'Glyph of Frost Armor',
  58307 => 'Glyph of Frost Ward',
  58308 => 'Glyph of Slow Fall',
  58310 => 'Glyph of the Penguin',
  58311 => 'Glyph of Blessing of Kings',
  58312 => 'Glyph of Blessing of Wisdom',
  58313 => 'Glyph of Lay on Hands',
  58314 => 'Glyph of Blessing of Might',
  58315 => 'Glyph of Sense Undead',
  58316 => 'Glyph of the Wise',
  58317 => 'Glyph of Fading',
  58318 => 'Glyph of Fortitude',
  58319 => 'Glyph of Levitate',
  58320 => 'Glyph of Shackle Undead',
  58321 => 'Glyph of Shadow Protection',
  58322 => 'Glyph of Shadowfiend',
  58323 => 'Glyph of Blurred Speed',
  58324 => 'Glyph of Distract',
  58325 => 'Glyph of Pick Lock',
  58326 => 'Glyph of Pick Pocket',
  58327 => 'Glyph of Safe Fall',
  58328 => 'Glyph of Vanish',
  58329 => 'Glyph of Astral Recall',
  58330 => 'Glyph of Renewed Life',
  58331 => 'Glyph of Water Breathing',
  58332 => 'Glyph of Water Shield',
  58333 => 'Glyph of Water Walking',
  58336 => 'Glyph of Unending Breath',
  58337 => 'Glyph of Drain Soul',
  58338 => 'Glyph of Curse of Exhaustion',
  58339 => 'Glyph of Enslave Demon',
  58340 => 'Glyph of Kilrogg',
  58341 => 'Glyph of Souls',
  58342 => 'Glyph of Battle',
  58343 => 'Glyph of Bloodrage',
  58344 => 'Glyph of Charge',
  58345 => 'Glyph of Mocking Blow',
  58346 => 'Glyph of Thunder Clap',
  58347 => 'Glyph of Enduring Victory',
  58472 => 'Scroll of Agility',
  58473 => 'Scroll of Agility II',
  58476 => 'Scroll of Agility III',
  58478 => 'Scroll of Agility IV',
  58480 => 'Scroll of Agility V',
  58481 => 'Scroll of Agility VI',
  58482 => 'Scroll of Agility VII',
  58483 => 'Scroll of Agility VIII',
  58484 => 'Scroll of Strength',
  58485 => 'Scroll of Strength II',
  58486 => 'Scroll of Strength III',
  58487 => 'Scroll of Strength IV',
  58488 => 'Scroll of Strength V',
  58489 => 'Scroll of Strength VI',
  58490 => 'Scroll of Strength VII',
  58491 => 'Scroll of Strength VIII',
  58492 => 'Savage Titanium Ring',
  58507 => 'Savage Titanium Band',
  58512 => 'Tasty Cupcake',
  58521 => 'Last Week\'s Mammoth',
  58523 => 'Bad Clams',
  58525 => 'Haunted Herring',
  58527 => 'Gigantic Feast',
  58528 => 'Small Feast',
  58565 => 'Mystic Tome',
  58868 => 'Endless Mana Potion',
  58871 => 'Endless Healing Potion',
  58954 => 'Titanium Frostguard Ring',
  59315 => 'Glyph of Dash',
  59326 => 'Glyph of Ghost Wolf',
  59338 => 'Glyph of Rune Tap',
  59339 => 'Glyph of Blood Strike',
  59340 => 'Glyph of Death Strike',
  59387 => 'Certificate of Ownership',
  59390 => true,
  59405 => 'Cobalt Skeleton Key',
  59406 => 'Titanium Skeleton Key',
  59436 => 'Brilliant Saronite Belt',
  59438 => 'Brilliant Saronite Bracers',
  59440 => 'Brilliant Saronite Pauldrons',
  59441 => 'Brilliant Saronite Helm',
  59442 => 'Saronite Spellblade',
  59475 => 'Tome of the Dawn',
  59478 => 'Book of Survival',
  59480 => 'Strange Tarot',
  59484 => 'Tome of Kings',
  59486 => 'Royal Guide of Escape Routes',
  59487 => 'Arcane Tarot',
  59488 => 'Weapon Vellum II',
  59489 => 'Fire Eater\'s Guide',
  59490 => 'Book of Stars',
  59491 => 'Shadowy Tarot',
  59493 => 'Stormbound Tome',
  59494 => 'Manual of Clouds',
  59495 => 'Hellfire Tome',
  59496 => 'Book of Clever Tricks',
  59497 => 'Iron-bound Tome',
  59498 => 'Faces of Doom',
  59499 => 'Armor Vellum II',
  59500 => 'Armor Vellum III',
  59501 => 'Weapon Vellum III',
  59502 => 'Darkmoon Card',
  59503 => 'Greater Darkmoon Card',
  59504 => 'Darkmoon Card of the North',
  59559 => 'Glyph of Holy Wrath',
  59560 => 'Glyph of Seal of Righteousness',
  59561 => 'Glyph of Seal of Vengeance',
  59582 => 'Frostsavage Belt',
  59583 => 'Frostsavage Bracers',
  59584 => 'Frostsavage Shoulders',
  59585 => 'Frostsavage Boots',
  59586 => 'Frostsavage Gloves',
  59587 => 'Frostsavage Robe',
  59588 => 'Frostsavage Leggings',
  59589 => 'Frostsavage Cowl',
  59619 => 'Enchant Weapon - Accuracy',
  59621 => 'Enchant Weapon - Berserking',
  59625 => 'Enchant Weapon - Black Magic',
  59636 => 'Enchant Ring - Stamina',
  59759 => 'Monarch Crab',
  60336 => 'Scroll of Recall II',
  60337 => 'Scroll of Recall III',
  60350 => 'Transmute: Titanium',
  60354 => 'Elixir of Accuracy',
  60355 => 'Elixir of Deadly Strikes',
  60356 => 'Elixir of Mighty Defense',
  60357 => 'Elixir of Expertise',
  60365 => 'Elixir of Armor Piercing',
  60366 => 'Elixir of Lightning Speed',
  60367 => 'Elixir of Mighty Thoughts',
  60396 => 'Mercurial Alchemist Stone',
  60403 => 'Indestructible Alchemist Stone',
  60405 => 'Mighty Alchemist Stone',
  60583 => 'Jormungar Leg Reinforcements',
  60584 => 'Nerubian Leg Reinforcements',
  60599 => 'Frostscale Bracers',
  60600 => 'Frostscale Helm',
  60601 => 'Dark Frostscale Leggings',
  60604 => 'Dark Frostscale Breastplate',
  60605 => 'Dragonstompers',
  60606 => 'Enchant Boots - Assault',
  60607 => 'Iceborne Wristguards',
  60608 => 'Iceborne Helm',
  60609 => 'Enchant Cloak - Speed',
  60611 => 'Dark Iceborne Leggings',
  60613 => 'Dark Iceborne Chestguard',
  60616 => 'Enchant Bracers - Striking',
  60619 => 'Runed Titanium Rod',
  60620 => 'Bugsquashers',
  60621 => 'Enchant Weapon - Greater Potency',
  60622 => 'Nerubian Bracers',
  60623 => 'Enchant Boots - Icewalker',
  60624 => 'Nerubian Helm',
  60627 => 'Dark Nerubian Leggings',
  60629 => 'Dark Nerubian Chestpiece',
  60630 => 'Scaled Icewalkers',
  60631 => 'Cloak of Harsh Winds',
  60637 => 'Ice Striker\'s Cloak',
  60640 => 'Durable Nerubhide Cape',
  60643 => 'Pack of Endless Pockets',
  60645 => 'Dragonscale Ammo Pouch',
  60647 => 'Nerubian Reinforced Quiver',
  60649 => 'Razorstrike Breastplate',
  60651 => 'Virulent Spaulders',
  60652 => 'Eaglebane Bracers',
  60653 => 'Enchant Shield - Greater Intellect',
  60655 => 'Nightshock Hood',
  60658 => 'Nightshock Girdle',
  60660 => 'Leggings of Visceral Strikes',
  60663 => 'Enchant Cloak - Major Agility',
  60665 => 'Seafoam Gauntlets',
  60666 => 'Jormscale Footpads',
  60668 => 'Enchant Gloves - Crusher',
  60669 => 'Wildscale Breastplate',
  60671 => 'Purehorn Spaulders',
  60691 => 'Enchant 2H Weapon - Massacre',
  60692 => 'Enchant Chest - Powerful Stats',
  60697 => 'Eviscerator\'s Facemask',
  60702 => 'Eviscerator\'s Shoulderpads',
  60703 => 'Eviscerator\'s Chestguard',
  60704 => 'Eviscerator\'s Bindings',
  60705 => 'Eviscerator\'s Gauntlets',
  60706 => 'Eviscerator\'s Waistguard',
  60707 => 'Enchant Weapon - Superior Potency',
  60711 => 'Eviscerator\'s Legguards',
  60712 => 'Eviscerator\'s Treads',
  60714 => 'Enchant Weapon - Mighty Spellpower',
  60715 => 'Overcast Headguard',
  60716 => 'Overcast Spaulders',
  60718 => 'Overcast Chestguard',
  60720 => 'Overcast Bracers',
  60721 => 'Overcast Handwraps',
  60723 => 'Overcast Belt',
  60725 => 'Overcast Leggings',
  60727 => 'Overcast Boots',
  60728 => 'Swiftarrow Helm',
  60729 => 'Swiftarrow Shoulderguards',
  60730 => 'Swiftarrow Hauberk',
  60731 => 'Swiftarrow Bracers',
  60732 => 'Swiftarrow Gauntlets',
  60734 => 'Swiftarrow Belt',
  60735 => 'Swiftarrow Leggings',
  60737 => 'Swiftarrow Boots',
  60743 => 'Stormhide Crown',
  60746 => 'Stormhide Shoulders',
  60747 => 'Stormhide Hauberk',
  60748 => 'Stormhide Wristguards',
  60749 => 'Stormhide Grips',
  60750 => 'Stormhide Belt',
  60751 => 'Stormhide Legguards',
  60752 => 'Stormhide Stompers',
  60754 => 'Giantmaim Legguards',
  60755 => 'Giantmaim Bracers',
  60756 => 'Revenant\'s Breastplate',
  60757 => 'Revenant\'s Treads',
  60758 => 'Trollwoven Spaulders',
  60759 => 'Trollwoven Girdle',
  60760 => 'Earthgiving Legguards',
  60761 => 'Earthgiving Boots',
  60763 => 'Enchant Boots - Greater Assault',
  60767 => 'Enchant Bracers - Superior Spellpower',
  60874 => 'Nesingwary 4000',
  60893 => 'Northrend Alchemy Research',
  60969 => 'Flying Carpet',
  60971 => 'Magnificent Flying Carpet',
  60990 => 'Glacial Waistband',
  60993 => 'Glacial Robe',
  60994 => 'Glacial Slippers',
  60996 => 'Polar Vest',
  60997 => 'Polar Cord',
  60998 => 'Polar Boots',
  60999 => 'Icy Scale Chestguard',
  61000 => 'Icy Scale Belt',
  61002 => 'Icy Scale Boots',
  61008 => 'Icebane Chestguard',
  61009 => 'Icebane Girdle',
  61010 => 'Icebane Treads',
  61117 => true,
  61118 => true,
  61119 => true,
  61120 => true,
  61177 => 'Northrend Inscription Research',
  61288 => 'Minor Inscription Research',
  61471 => 'Diamond-cut Refractor Scope',
  61482 => 'Mechanized Snow Goggles',
  61677 => 'Glyph of Frostfire',
  62044 => 'Pumpkin Pie',
  62045 => 'Slow-Roasted Turkey',
  62049 => 'Cranberry Chutney',
  62050 => 'Spice Bread Stuffing',
  62051 => 'Candied Sweet Potato',
  62162 => 'Glyph of Focus',
  62176 => 'Windripper Boots',
  62177 => 'Windripper Leggings',
  62202 => 'Titanium Plating',
  62213 => 'Lesser Flask of Resistance',
  62242 => 'Icy Prism',
  62256 => 'Enchant Bracers - Major Stamina',
  62257 => 'Enchant Weapon - Titanguard',
  62350 => 'Worg Tartare',
  62409 => 'Ethereal Oil',
  62410 => 'Elixir of Water Walking',
  62448 => 'Earthen Leg Armor',
  62941 => 'Prismatic Black Diamond',
  62948 => 'Enchant Staff - Greater Spellpower',
  62959 => 'Enchant Staff - Spellpower',
  63182 => 'Titansteel Spellblade',
  63187 => 'Belt of the Titans',
  63188 => 'Battlelord\'s Plate Boots',
  63189 => 'Plate Girdle of Righteousness',
  63190 => 'Treads of Destiny',
  63191 => 'Indestructible Plate Girdle',
  63192 => 'Spiked Deathdealers',
  63194 => 'Belt of Dragons',
  63195 => 'Boots of Living Scale',
  63196 => 'Blue Belt of Chaos',
  63197 => 'Lightning Grounded Boots',
  63198 => 'Death-warmed Belt',
  63199 => 'Footpads of Silence',
  63200 => 'Belt of Arctic Life',
  63201 => 'Boots of Wintry Endurance',
  63203 => 'Sash of Ancient Power',
  63204 => 'Spellslinger\'s Slippers',
  63205 => 'Cord of the White Dawn',
  63206 => 'Savior\'s Slippers',
  63732 => 'Elixir of Minor Accuracy',
  63742 => 'Spidersilk Drape',
  63743 => 'Amulet of Truesight',
  63746 => 'Enchant Boots - Lesser Accuracy',
  63750 => 'High-powered Flashlight',
  63765 => 'Springy Arachnoweave',
  63770 => 'Reticulated Armor Webbing',
  63924 => 'Emerald Bag',
  64051 => 'Rituals of the New Moon',
  64053 => 'Twilight Tome',
  64054 => 'Clamlette Magnifique',
  64246 => 'Glyph of Raptor Strike',
  64247 => 'Glyph of Stoneclaw Totem',
  64248 => 'Glyph of Life Tap',
  64249 => 'Glyph of Scatter Shot',
  64250 => 'Glyph of Soul Link',
  64251 => 'Glyph of Salvation',
  64252 => 'Glyph of Shield Wall',
  64253 => 'Glyph of Explosive Trap',
  64254 => 'Glyph of Holy Shock',
  64255 => 'Glyph of Vigilance',
  64256 => 'Glyph of Barkskin',
  64257 => 'Glyph of Ice Barrier',
  64258 => 'Glyph of Monsoon',
  64259 => 'Glyph of Pain Suppression',
  64260 => 'Glyph of Mutilate',
  64261 => 'Glyph of Earth Shield',
  64262 => 'Glyph of Totem of Wrath',
  64266 => 'Glyph of Dark Death',
  64267 => 'Glyph of Disease',
  64268 => 'Glyph of Berserk',
  64270 => 'Glyph of Wild Growth',
  64271 => 'Glyph of Chimera Shot',
  64273 => 'Glyph of Explosive Shot',
  64274 => 'Glyph of Deep Freeze',
  64275 => 'Glyph of Living Bomb',
  64276 => 'Glyph of Arcane Barrage',
  64277 => 'Glyph of Beacon of Light',
  64278 => 'Glyph of Hammer of the Righteous',
  64279 => 'Glyph of Divine Storm',
  64280 => 'Glyph of Dispersion',
  64281 => 'Glyph of Guardian Spirit',
  64282 => 'Glyph of Penance',
  64283 => 'Glyph of Hymn of Hope',
  64284 => 'Glyph of Hunger for Blood',
  64285 => 'Glyph of Killing Spree',
  64286 => 'Glyph of Shadow Dance',
  64287 => 'Glyph of Thunder',
  64288 => 'Glyph of Feral Spirit',
  64289 => 'Glyph of Riptide',
  64291 => 'Glyph of Haunt',
  64294 => 'Glyph of Chaos Bolt',
  64295 => 'Glyph of Bladestorm',
  64296 => 'Glyph of Shockwave',
  64297 => 'Glyph of Dancing Rune Weapon',
  64298 => 'Glyph of Hungering Cold',
  64299 => 'Glyph of Unholy Blight',
  64300 => 'Glyph of Howling Blast',
  64302 => 'Glyph of Spell Reflection',
  64303 => 'Glyph of Cloak of Shadows',
  64304 => 'Glyph of Kill Shot',
  64305 => 'Glyph of Divine Plea',
  64307 => 'Glyph of Savage Roar',
  64308 => 'Glyph of Shield of Righteousness',
  64309 => 'Glyph of Mind Sear',
  64310 => 'Glyph of Tricks of the Trade',
  64311 => 'Glyph of Shadowflame',
  64312 => 'Glyph of Enraged Regeneration',
  64313 => 'Glyph of Nourish',
  64314 => 'Glyph of Mirror Image',
  64315 => 'Glyph of Fan of Knives',
  64316 => 'Glyph of Hex',
  64317 => 'Glyph of Demonic Circle',
  64318 => 'Glyph of Metamorphosis',
  64358 => 'Black Jelly',
  64441 => 'Enchant Weapon - Blade Ward',
  64579 => 'Enchant Weapon - Blood Draining',
  64661 => 'Borean Leather',
  64725 => 'Emerald Choker',
  64726 => 'Sky Sapphire Amulet',
  64727 => 'Runed Mana Band',
  64728 => 'Scarlet Signet',
  64729 => 'Frostguard Drape',
  64730 => 'Cloak of Crimson Snow',
  65245 => 'Glyph of Survival Instincts',
  65454 => 'Bread of the Dead',
  66034 => 'Candied Sweet Potato',
  66035 => 'Cranberry Chutney',
  66036 => 'Pumpkin Pie',
  66037 => 'Slow-Roasted Turkey',
  66038 => 'Spice Bread Stuffing',
  66338 => 'Enduring Eye of Zul',
  66428 => 'Steady Eye of Zul',
  66429 => 'Vivid Eye of Zul',
  66430 => 'Dazzling Eye of Zul',
  66431 => 'Jagged Eye of Zul',
  66432 => 'Timeless Eye of Zul',
  66433 => 'Seer\'s Eye of Zul',
  66434 => 'Forceful Eye of Zul',
  66435 => 'Misty Eye of Zul',
  66436 => 'Sundered Eye of Zul',
  66437 => 'Shining Eye of Zul',
  66438 => 'Tense Eye of Zul',
  66439 => 'Lambent Eye of Zul',
  66440 => 'Intricate Eye of Zul',
  66441 => 'Radiant Eye of Zul',
  66442 => 'Energized Eye of Zul',
  66443 => 'Shattered Eye of Zul',
  66444 => 'Opaque Eye of Zul',
  66445 => 'Turbid Eye of Zul',
  66446 => 'Runed Cardinal Ruby',
  66447 => 'Bold Cardinal Ruby',
  66448 => 'Delicate Cardinal Ruby',
  66449 => 'Bright Cardinal Ruby',
  66450 => 'Precise Cardinal Ruby',
  66451 => 'Fractured Cardinal Ruby',
  66452 => 'Subtle Cardinal Ruby',
  66453 => 'Flashing Cardinal Ruby',
  66497 => 'Solid Majestic Zircon',
  66498 => 'Sparkling Majestic Zircon',
  66499 => 'Stormy Majestic Zircon',
  66500 => 'Lustrous Majestic Zircon',
  66501 => 'Rigid King\'s Amber',
  66502 => 'Smooth King\'s Amber',
  66503 => 'Brilliant King\'s Amber',
  66504 => 'Thick King\'s Amber',
  66505 => 'Mystic King\'s Amber',
  66506 => 'Quick King\'s Amber',
  66553 => 'Balanced Dreadstone',
  66554 => 'Sovereign Dreadstone',
  66555 => 'Glowing Dreadstone',
  66556 => 'Purified Dreadstone',
  66557 => 'Shifting Dreadstone',
  66558 => 'Royal Dreadstone',
  66559 => 'Regal Dreadstone',
  66560 => 'Defender\'s Dreadstone',
  66561 => 'Guardian\'s Dreadstone',
  66562 => 'Mysterious Dreadstone',
  66563 => 'Puissant Dreadstone',
  66564 => 'Infused Dreadstone',
  66565 => 'Tenuous Dreadstone',
  66566 => 'Luminous Ametrine',
  66567 => 'Inscribed Ametrine',
  66568 => 'Deadly Ametrine',
  66569 => 'Potent Ametrine',
  66570 => 'Veiled Ametrine',
  66571 => 'Durable Ametrine',
  66572 => 'Etched Ametrine',
  66573 => 'Pristine Ametrine',
  66574 => 'Reckless Ametrine',
  66575 => 'Glinting Ametrine',
  66576 => 'Accurate Ametrine',
  66577 => 'Wicked Ametrine',
  66578 => 'Glimmering Ametrine',
  66579 => 'Champion\'s Ametrine',
  66580 => 'Empowered Ametrine',
  66581 => 'Stalwart Ametrine',
  66582 => 'Resplendent Ametrine',
  66583 => 'Fierce Ametrine',
  66584 => 'Deft Ametrine',
  66585 => 'Lucent Ametrine',
  66586 => 'Resolute Ametrine',
  66587 => 'Stark Ametrine',
  66658 => 'Transmute: Ametrine',
  66659 => 'Transmute: Cardinal Ruby',
  66660 => 'Transmute: King\'s Amber',
  66662 => 'Transmute: Dreadstone',
  66663 => 'Transmute: Majestic Zircon',
  66664 => 'Transmute: Eye of Zul',
  67025 => 'Flask of the North',
  67064 => 'Royal Moonshroud Robe',
  67065 => 'Royal Moonshroud Bracers',
  67066 => 'Merlin\'s Robe',
  67079 => 'Bejeweled Wizard\'s Bracers',
  67080 => 'Ensorcelled Nerubian Breastplate',
  67081 => 'Black Chitin Bracers',
  67082 => 'Crusader\'s Dragonscale Breastplate',
  67083 => 'Crusader\'s Dragonscale Bracers',
  67084 => 'Lunar Eclipse Robes',
  67085 => 'Moonshadow Armguards',
  67086 => 'Knightbane Carapace',
  67087 => 'Bracers of Swift Death',
  67091 => 'Breastplate of the White Knight',
  67092 => 'Saronite Swordbreakers',
  67093 => 'Titanium Razorplate',
  67094 => 'Titanium Spikeguards',
  67095 => 'Sunforged Breastplate',
  67096 => 'Sunforged Bracers',
  67130 => 'Breastplate of the White Knight',
  67131 => 'Saronite Swordbreakers',
  67132 => 'Titanium Razorplate',
  67133 => 'Titanium Spikeguards',
  67134 => 'Sunforged Breastplate',
  67135 => 'Sunforged Bracers',
  67136 => 'Ensorcelled Nerubian Breastplate',
  67137 => 'Black Chitin Bracers',
  67138 => 'Crusader\'s Dragonscale Breastplate',
  67139 => 'Bracers of Swift Death',
  67140 => 'Lunar Eclipse Robes',
  67141 => 'Moonshadow Armguards',
  67142 => 'Knightbane Carapace',
  67143 => 'Crusader\'s Dragonscale Bracers',
  67144 => 'Royal Moonshroud Robe',
  67145 => 'Bejeweled Wizard\'s Bracers',
  67146 => 'Merlin\'s Robe',
  67147 => 'Royal Moonshroud Bracers',
  67326 => 'Goblin Beam Welder',
  67600 => 'Glyph of Claw',
  67790 => 'Dimensional Folder: K3',
  67839 => 'Mind Amplification Dish',
  67920 => 'Wormhole Generator: Northrend',
  68067 => 'Jeeves',
  68166 => 'Glyph of Command',
  68253 => 'Nightmare Tear',
  69385 => 'Runescroll of Fortitude',
  69386 => 'Drums of Forgotten Kings',
  69388 => 'Drums of the Wild',
  69412 => 'Abyssal Shatter',
  70550 => 'Leggings of Woven Death',
  70551 => 'Deathfrost Boots',
  70552 => 'Lightweave Leggings',
  70553 => 'Sandals of Consecration',
  70554 => 'Legwraps of Unleashed Nature',
  70555 => 'Blessed Cenarion Boots',
  70556 => 'Bladeborn Leggings',
  70557 => 'Footpads of Impending Death',
  70558 => 'Lightning-Infused Leggings',
  70559 => 'Earthsoul Boots',
  70560 => 'Draconic Bonesplinter Legguards',
  70561 => 'Rock-Steady Treads',
  70562 => 'Puresteel Legplates',
  70563 => 'Protectors of Life',
  70565 => 'Legplates of Painful Death',
  70566 => 'Hellfrozen Bonegrinders',
  70567 => 'Pillars of Might',
  70568 => 'Boots of Kingly Upheaval',
  71015 => 'Glyph of Rapid Rejuvenation',
  71101 => 'Glyph of Eternal Water',
  71102 => 'Glyph of Quick Decay',
  71692 => 'Enchant Gloves - Angler',
  72952 => 'Shatter Rounds',
  72953 => 'Iceblade Arrow',
  75597 => 'Frosty Flying Carpet',
  587 => 'Conjure Food',
  597 => 'Conjure Food',
  990 => 'Conjure Food',
  2149 => 'Handstitched Leather Boots',
  2152 => 'Light Armor Kit',
  2156 => 'Light Winter Cloak',
  2157 => 'Light Winter Boots',
  2329 => 'Elixir of Lion\'s Strength',
  2330 => 'Minor Healing Potion',
  2387 => 'Linen Cloak',
  2538 => 'Charred Wolf Meat',
  2540 => 'Roasted Boar Meat',
  2660 => 'Rough Sharpening Stone',
  2663 => 'Copper Bracers',
  2881 => 'Light Leather',
  2963 => 'Bolt of Linen Cloth',
  3115 => 'Rough Weightstone',
  3231 => 'QAEnchant Cloak +3 Agility',
  3275 => 'Linen Bandage',
  3915 => 'Brown Linen Shirt',
  3918 => 'Rough Blasting Powder',
  3919 => 'Rough Dynamite',
  3920 => 'Crafted Light Shot',
  6129 => 'Conjure Food',
  6476 => 'QAEnchant Cloak +10 Shadow Resistance',
  7126 => 'Handstitched Leather Vest',
  7183 => 'Elixir of Minor Defense',
  7418 => 'Enchant Bracer - Minor Health',
  7421 => 'Runed Copper Rod',
  7428 => 'Enchant Bracer - Minor Deflection',
  7920 => 'Mebok Smart Drink',
  7960 => 'Scry on Azrethoc',
  8087 => 'Shiny Bauble',
  8088 => 'Nightcrawlers',
  8089 => 'Aquadynamic Fish Attractor',
  8090 => 'Bright Baubles',
  8375 => 'QAEnchant Gloves +5 Mining',
  8532 => 'Aquadynamic Fish Lens',
  8604 => 'Herb Baked Egg',
  8736 => 'Conjure Food',
  9058 => 'Handstitched Leather Cloak',
  9059 => 'Handstitched Leather Bracers',
  9092 => 'Flesh Eating Worm',
  9199 => 'Attack Power %',
  9200 => 'Create Sapta',
  10144 => 'Conjure Food',
  10145 => 'Conjure Food',
  11209 => 'Summon Smithing Hammer',
  11438 => 'Join Map Fragments',
  11759 => 'Basilisk Sample',
  11760 => 'Hyena Sample',
  11761 => 'Scorpid Sample',
  11923 => 'Repair the Blade of Heroes',
  12044 => 'Simple Linen Pants',
  12260 => 'Rough Copper Vest',
  12719 => 'Explosive Arrow',
  13714 => 'Create Samophlange Manual',
  14199 => 'Create Samophlange Manual',
  14847 => 'Test Enchant Fire Weapon',
  15303 => 'DEBUG Create Samophlange Manual',
  15304 => 'DEBUG Create Samophlange Manual',
  17133 => 'Create Pamela\'s Doll',
  17527 => 'Mighty Rage Potion',
  18831 => 'Conjure Lily Root',
  18887 => 'Create Nimboya\'s Laden Pike',
  19566 => 'Salt Shaker',
  19927 => 'Test Enchant Weapon Flame',
  19932 => 'QAEnchant Cloak +7 Fire Resistance',
  21160 => 'Eye of Sulfuras',
  21935 => 'Snowmaster 9000',
  22051 => 'QAEnchant Bracer +9 Strength',
  22052 => 'QAEnchant Bracer +9 Stamina',
  22053 => 'QAEnchant Bracer +9 Spirit',
  22054 => 'QAEnchant Bracer +7 Intellect',
  22089 => 'QAEnchant Chest +100 Health',
  22090 => 'QAEnchant Chest +100 Mana',
  22091 => 'QAEnchant Cloak +5 Resistances',
  22092 => 'QAEnchant Cloak +70 Armor',
  22094 => 'QAEnchant 2H Weapon +9 Damage',
  22095 => 'QAEnchant Weapon +5 Damage',
  22098 => 'QAEnchant Shield +7 Stamina',
  22099 => 'QAEnchant Shield +8 Frost Resistance',
  22100 => 'QAEnchant Shield +9 Spirit',
  22101 => 'QAEnchant Boots +7 Agility',
  22102 => 'QAEnchant Boots +5 Spirit',
  22103 => 'QAEnchant Boots +7 Stamina',
  22104 => 'QAEnchant Gloves +7 Strength',
  22105 => 'QAEnchant Gloves +7 Agility',
  22106 => 'QAEnchant Gloves +1% Haste',
  22593 => 'Flame Mantle of the Dawn',
  22594 => 'Frost Mantle of the Dawn',
  22596 => 'Shadow Mantle of the Dawn',
  22597 => 'Nature Mantle of the Dawn',
  22598 => 'Arcane Mantle of the Dawn',
  22599 => 'Chromatic Mantle of the Dawn',
  23141 => 'QAEnchant Weapon Crusader',
  23142 => 'QAEnchant Weapon Icy Chill',
  23143 => 'QAEnchant Weapon Spell Power',
  23144 => 'QAEnchant Weapon Healing Power',
  23677 => 'Beasts Deck',
  23678 => 'Warlord Deck',
  23679 => 'Elementals Deck',
  23680 => 'Portals Deck',
  24006 => 'Bounty of the Harvest',
  24420 => 'Zandalar Signet of Serenity',
  24421 => 'Zandalar Signet of Mojo',
  24422 => 'Zandalar Signet of Might',
  24874 => 'Create Crest of Beckoning: Fire',
  24885 => 'Create Crest of Beckoning: Air',
  24887 => 'Create Crest of Beckoning: Earth',
  24888 => 'Create Crest of Beckoning: Water',
  24889 => 'Create Signet of Beckoning: Fire',
  24890 => 'Create Signet of Beckoning: Air',
  24891 => 'Create Signet of Beckoning: Earth',
  24892 => 'Create Signet of Beckoning: Water',
  25117 => 'Minor Wizard Oil',
  25118 => 'Minor Mana Oil',
  25119 => 'Lesser Wizard Oil',
  25120 => 'Lesser Mana Oil',
  25121 => 'Wizard Oil',
  25122 => 'Brilliant Wizard Oil',
  25123 => 'Brilliant Mana Oil',
  25255 => 'Delicate Copper Wire',
  25301 => 'Angry Turkey',
  25493 => 'Braided Copper Ring',
  25853 => 'Empty Festive Mug',
  26019 => 'QAEnchant Boots +8% Speed',
  26020 => 'QAEnchant Gloves +5 Herbalism',
  26298 => 'Create Firework Rocket Launcher',
  26299 => 'Create Cluster Rocket Launcher',
  26743 => 'QAEnchant Weapon +20 Spirit',
  26792 => 'QAEnchant Weapon +15 Agility',
  26793 => 'QAEnchant Weapon +22 Intellect',
  26904 => 'Cut Emerald',
  26905 => 'Cut Azerothian Diamond',
  26925 => 'Woven Copper Ring',
  27057 => 'Test Black Diamond',
  27058 => 'Test Black Diamond AGAIN',
  27059 => 'Test Black Diamond Debug',
  27093 => 'QAEnchant Weapon +15 Strength',
  27102 => 'QAEnchant Weapon Unholy',
  27104 => 'QAEnchant Weapon Lifestealing',
  27107 => 'QAEnchant Chest +4 Stats',
  27108 => 'QAEnchant Gloves +20 Frost Damage',
  27109 => 'QAEnchant Gloves +20 Fire Damage',
  27110 => 'QAEnchant Gloves +20 Shadow Damage',
  27111 => 'QAEnchant Gloves +30 Healing',
  27112 => 'QAEnchant Gloves +15 Agility',
  27113 => 'QAEnchant Gloves +2% Threat',
  27114 => 'QAEnchant Gloves +5 Skinning',
  27115 => 'QAEnchant Bracer +4 Mana5',
  27116 => 'QAEnchant Bracer +24 Healing',
  27117 => 'QAEnchant Shield +2% Block Chance',
  27118 => 'QAEnchant Cloak +15 Fire Resistance',
  27119 => 'QAEnchant Cloak +15 Nature Resistance',
  27120 => 'QAEnchant Cloak +8 Stealth',
  27121 => 'QAEnchant Cloak -2% Threat',
  27122 => 'QAEnchant Cloak +1% Dodge',
  27964 => 'Enchant Weapon - Major Spirit',
  28013 => 'Superior Mana Oil',
  28017 => 'Superior Wizard Oil',
  28612 => 'Conjure Food',
  29467 => 'Power of the Scourge',
  29475 => 'Resilience of the Scourge',
  29480 => 'Fortitude of the Scourge',
  29483 => 'Might of the Scourge',
  30183 => 'QAEnchant Weapon - Fiery Weapon',
  30187 => 'QAEnchant Gloves +5 Fishing',
  30190 => 'QAEnchant Gloves - Riding Skill',
  30229 => 'QAEnchant 2H Weapon +25 Agility',
  30524 => 'Remote Mail Terminal',
  30526 => 'Flame Turret',
  30555 => 'Remote Mail Terminal',
  30602 => 'Create Monument Rubbing',
  31369 => 'Silver Spellthread',
  31370 => 'Golden Spellthread',
  31371 => 'Mystic Spellthread',
  31372 => 'Runic Spellthread',
  31497 => 'Douse Eternal Flame',
  32259 => 'Rough Stone Statue',
  32990 => 'Enchanting Cast Visual',
  33717 => 'Conjure Food',
  33770 => 'Everlasting Underspore Fronds',
  35441 => 'Inscription of Endurance',
  35488 => 'Cobrahide Leg Armor',
  35489 => 'Clefthide Leg Armor',
  35490 => 'Nethercobra Leg Armor',
  35495 => 'Nethercleft Leg Armor',
  35791 => 'QAEnchant Weapon +81 Healing',
  35792 => 'QAEnchant Weapon Battlemaster',
  35793 => 'QAEnchant Weapon Mongoose',
  35794 => 'QAEnchant Weapon Soulfrost',
  35795 => 'QAEnchant Weapon Sunfire',
  35796 => 'QAEnchant Weapon +40 Spell Damage',
  35797 => 'QAEnchant Weapon +30 Intellect',
  35798 => 'QAEnchant Weapon +7 Damage',
  35799 => 'QAEnchant Weapon +20 Strength',
  35800 => 'QAEnchant 2H Weapon +35 Agility',
  35801 => 'QAEnchant 2H Weapon +70 Attack Power',
  35802 => 'QAEnchant Shield +5 Resistances',
  35803 => 'QAEnchant Shield +18 Stamina',
  35804 => 'QAEnchant Shield +12 Intellect',
  35805 => 'QAEnchant Shield +15 Block Value',
  35806 => 'QAEnchant Boots +9 Stamina & +8% Speed',
  35807 => 'QAEnchant Boots +6 Agility & +8% Speed',
  35808 => 'QAEnchant Boots +5 Snare Resist & +10 Hit Rating',
  35809 => 'QAEnchant Boots +12 Agility',
  35810 => 'QAEnchant Boots +12 Stamina',
  35811 => 'QAEnchant Cloak +15 Shadow Resistance',
  35812 => 'QAEnchant Cloak +15 Arcane Resistance',
  35813 => 'QAEnchant Cloak +12 Agility',
  35814 => 'QAEnchant Cloak +20 Spell Penetration',
  35815 => 'QAEnchant Gloves +35 Healing',
  35816 => 'QAEnchant Gloves +20 Spell Damage',
  35817 => 'QAEnchant Gloves +15 Spell Hit Rating',
  35818 => 'QAEnchant Gloves +10 Spell Crit Rating',
  35819 => 'QAEnchant Gloves +15 Strength',
  35820 => 'QAEnchant Gloves +26 Attack Power',
  35821 => 'QAEnchant Chest +15 Resilience',
  35822 => 'QAEnchant Chest +6 Mana5',
  35823 => 'QAEnchant Chest +15 Spirit',
  35824 => 'QAEnchant Chest +6 Stats',
  35825 => 'QAEnchant Chest +150 Mana',
  35826 => 'QAEnchant Chest +150 Health',
  36281 => 'QAEnchant Ring +2 Weapon Damage',
  36282 => 'QAEnchant Ring +12 Spell Damage',
  36283 => 'QAEnchant Ring +20 Healing',
  36284 => 'QAEnchant Ring +4 Stats',
  36285 => 'QAEnchant Cloak +7 Resistances',
  36286 => 'QAEnchant Boots +4 Health & Mana5',
  36503 => 'Enchant Shield',
  39403 => 'QAEnchant Bracer +12 Intellect',
  39404 => 'QAEnchant Bracer +24 Attack Power',
  39405 => 'QAEnchant Bracer +30 Healing',
  39406 => 'QAEnchant Bracer +15 Spell Damage',
  39407 => 'QAEnchant Bracer +12 Defense',
  39408 => 'QAEnchant Bracer +12 Stamina',
  39409 => 'QAEnchant Bracer +6 Mana5 Sec',
  39410 => 'QAEnchant Bracer +4 All Stats',
  39411 => 'QAEnchant Bracer +12 Strength',
  39480 => 'Blessings Deck',
  39481 => 'Storms Deck',
  39483 => 'Furies Deck',
  39484 => 'Lunacy Deck',
  39871 => 'Rizzle\'s Escape',
  39907 => 'Summon Rizzle\'s Depth Charge',
  40000 => 'Bracers of Shackled Souls',
  40274 => 'Furious Gizmatic Goggles',
  40744 => 'Apexis Crystal Infusion',
  40747 => 'Apexis Crystal Infusion',
  40748 => 'Apexis Crystal Infusion',
  40749 => 'Apexis Crystal Infusion',
  40752 => 'Apexis Crystal Infusion',
  40753 => 'Apexis Crystal Infusion',
  40754 => 'Apexis Crystal Infusion',
  40755 => 'Apexis Crystal Infusion',
  40756 => 'Apexis Crystal Infusion',
  40757 => 'Apexis Crystal Infusion',
  40764 => 'Stitch Scales',
  40765 => 'Stitch Scales',
  40766 => 'Stitch Scales',
  40767 => 'Stitch Scales',
  41311 => 'Justicebringer 2000 Specs',
  41312 => 'Tankatronic Goggles',
  41315 => 'Gadgetstorm Goggles',
  41316 => 'Living Replicator Specs',
  41317 => 'Deathblow X11 Goggles',
  41318 => 'Wonderheal XT40 Shades',
  41319 => 'Magnified Moon Specs',
  41320 => 'Destruction Holo-gogs',
  41321 => 'Powerheal 4000 Lens',
  42012 => 'QAEnchant Weapon Spellsurge',
  42955 => 'Conjure Refreshment',
  42956 => 'Conjure Refreshment',
  43005 => 'QAEnchant Weapon Executioner',
  43209 => 'Place Ram Meat',
  43214 => 'Combine Ram Meat',
  43373 => 'Filling Flask',
  43374 => 'Mixing Blood',
  43375 => 'Mixing Vrykul Blood',
  43376 => 'Failed Mix',
  43377 => 'Successful Mix',
  43378 => 'Failed Mix',
  43699 => 'Fishing Hat Lure',
  43718 => 'Kaliri Stew',
  43723 => 'Demon Broiled Surprise',
  43724 => 'Spiritual Soup',
  43753 => 'Demon-Broiled Surprise',
  43972 => 'Mixing Blood',
  43973 => 'Filling Flask',
  43988 => 'Conjure Refreshment',
  44119 => 'Enchant Bracer - Template',
  44438 => 'Shoveltusk Soup',
  45028 => 'QAEnchant Cloak +120 Armor',
  45149 => 'Cleanse Ata\'mal Armament',
  45381 => 'Silver Quill',
  45382 => 'Scroll of Stamina',
  45395 => 'Blessed Weapon Coating',
  45397 => 'Righteous Weapon Coating',
  45547 => 'Succulent Orca Stew',
  45643 => 'Cosmetic - Create Engineering Item',
  45731 => 'Sharpened Fish Hook',
  46106 => 'Wonderheal XT68 Shades',
  46107 => 'Justicebringer 3000 Specs',
  46108 => 'Powerheal 9000 Lens',
  46109 => 'Hyper-Magnified Moon Specs',
  46110 => 'Primal-Attuned Goggles',
  46111 => 'Annihilator Holo-Gogs',
  46112 => 'Lightning Etched Specs',
  46114 => 'Mayhem Projection Goggles',
  46115 => 'Hard Khorium Goggles',
  46116 => 'Quad Deathblow X44 Goggles',
  46353 => 'Smelt Hardened Khorium',
  46770 => 'Liquid Fire of Elune',
  47103 => 'Riding Crop',
  47715 => 'Enchant Template',
  47904 => 'Exceptional Mana Oil',
  47906 => 'Exceptional Wizard Oil',
  48036 => 'Enchant Chest - TEST',
  48114 => 'Scroll of Intellect',
  48116 => 'Scroll of Spirit',
  48221 => 'Rogues Deck',
  48234 => 'Rogues Deck',
  48235 => 'Rogues Deck',
  48236 => 'Rogues Deck',
  48238 => 'Rogues Deck',
  48239 => 'Swords Deck',
  48240 => 'Swords Deck',
  48242 => 'Swords Deck',
  48244 => 'Swords Deck',
  48401 => 'Carrot on a Stick',
  48534 => 'Carrot on a Stick',
  48555 => 'Skybreaker Whip',
  48556 => 'Carrot on a Stick',
  48557 => 'Riding Crop',
  48807 => 'Runic Healing Injector',
  49383 => 'Engineering',
  50465 => 'Socket One-Handed Weapon',
  50901 => 'Jormungar Leg Armor',
  50902 => 'Nerubian Leg Armor',
  50903 => 'Jormungar Leg Reinforcements',
  50904 => 'Nerubian Leg Reinforcements',
  50911 => 'Dragonscale Leg Armor',
  50913 => 'Wyrmscale Leg Armor',
  50968 => 'Dragonscale Leg Armor',
  50969 => 'Protoscale Leg Armor',
  50972 => 'Grizzled Hat',
  50973 => 'Cap of the North',
  50974 => 'Comfy Raccoonskin Hat',
  50975 => 'The Rugged Marksman',
  51320 => 'Riding Crop (Test Version)',
  51364 => 'Copy of Discombobulator Ray',
  52639 => 'Spring Loaded Cloak Expander',
  52738 => 'Ivory Ink',
  53416 => 'Energize Polished Crystal',
  53686 => 'Verdant Tundra Belt',
  53687 => 'Verdant Tundra Cap',
  53688 => 'Verdant Tundra Boots',
  53689 => 'Verdant Tundra Bracers',
  53690 => 'Verdant Tundra Shoulderpads',
  53849 => 'Copy of Brilliant Golden Draenite',
  54721 => 'Master Firestone',
  54730 => 'Spellstone',
  54995 => 'Delicious Roasted Boar',
  55152 => 'Lesser Firestone',
  55153 => 'Firestone',
  55154 => 'Greater Firestone',
  55155 => 'Major Firestone',
  55156 => 'Fel Firestone',
  55158 => 'Grand Firestone',
  55165 => 'Combine Disk Fragments',
  55171 => 'Spellstone',
  55175 => 'Greater Spellstone',
  55178 => 'Major Spellstone',
  55188 => 'Master Spellstone',
  55190 => 'Demonic Spellstone',
  55194 => 'Grand Spellstone',
  55630 => 'Shining Spellthread',
  55631 => 'Brilliant Spellthread',
  55632 => 'Azure Spellthread',
  55634 => 'Sapphire Spellthread',
  55730 => 'Cobalt Rod',
  55938 => 'Hungry Penguins',
  56307 => 'Saronite Sharpening Stone',
  56403 => 'Runic Mana Injector',
  56465 => 'Mechanized Snow Goggles',
  56480 => 'Armored Titanium Goggles',
  56481 => 'Weakness Spectralizers',
  56483 => 'Charged Titanium Specs',
  56484 => 'Visage Liquification Goggles',
  56486 => 'Greensight Gogs',
  56487 => 'Electroflux Sight Enhancers',
  56964 => 'Glyph of the Red Lynx',
  56967 => 'Glyph of the White Bear',
  56992 => 'Unused',
  56993 => 'Unused',
  57015 => 'Unused',
  57016 => 'Unused',
  57017 => 'Unused',
  57018 => 'Unused',
  57037 => 'Unused',
  57038 => 'Unused',
  57039 => 'Unused',
  57040 => 'Unused',
  57041 => 'Unused',
  57043 => 'Unused',
  57044 => 'Unused',
  57045 => 'Unused',
  57134 => 'Unused',
  57135 => 'Unused',
  57136 => 'Unused',
  57137 => 'Unused',
  57173 => 'Warrior Glyph 21',
  57174 => 'Warrior Glyph 22',
  57175 => 'Warrior Glyph 23',
  57176 => 'Warrior Glyph 25',
  57177 => 'Unused',
  57178 => 'Unused',
  57179 => 'Unused',
  57180 => 'Warrior Glyph 24',
  57203 => 'Unused',
  57204 => 'Unused',
  57205 => 'Unused',
  57206 => 'Unused',
  57254 => 'Unused',
  57255 => 'Unused',
  57256 => 'Unused',
  57278 => 'Unused',
  57279 => 'Unused',
  57280 => 'Unused',
  57281 => 'Unused',
  57310 => 'Lords Deck',
  57311 => 'Lords Deck',
  57312 => 'Lords Deck',
  57313 => 'Lords Deck',
  57314 => 'Lords Deck',
  57315 => 'Lords Deck',
  57316 => 'Lords Deck',
  57317 => 'Lords Deck',
  57683 => 'Fur Lining - Attack Power',
  57686 => 'Infused Mushroom Meatloaf',
  57729 => 'Wine and Cheese Platter',
  57760 => 'Mustard Dog Basket',
  57768 => 'Vegetable Stew',
  58069 => 'Blood Jade Amulet',
  58073 => 'Glowing Ivory Figurine',
  58074 => 'Wicked Sun Brooch',
  58075 => 'Intricate Bone Figurine',
  58076 => 'Bright Armor Relic',
  58077 => 'Shifting Sun Curio',
  58115 => 'Beautiful Chalcedony Necklace',
  58290 => 'Glyph of the Black Bear',
  58293 => 'Glyph of the Forest Lynx',
  58294 => 'Glyph of the Red Lynx',
  58295 => 'Glyph of the White Bear',
  58309 => 'Glyph of the Bear Cub',
  58334 => 'Glyph of the Arctic Wolf',
  58335 => 'Glyph of the Black Wolf',
  58660 => 'Conjure Refreshment',
  59042 => 'Broken Wrath Elixir',
  59066 => 'Broken Spellpower Elixir',
  59070 => 'Broken Noggenfogger Elixir',
  59385 => 'Certificate of Ownership',
  59953 => 'Mages Deck',
  59956 => 'Mages Deck',
  59957 => 'Mages Deck',
  59958 => 'Mages Deck',
  59959 => 'Mages Deck',
  59962 => 'Demons Deck',
  59964 => 'Demons Deck',
  59966 => 'Demons Deck',
  59967 => 'Demons Deck',
  59968 => 'Demons Deck',
  60245 => 'Prisms Deck',
  60246 => 'Prisms Deck',
  60247 => 'Prisms Deck',
  60248 => 'Prisms Deck',
  60249 => 'Prisms Deck',
  60250 => 'Prisms Deck',
  60251 => 'Prisms Deck',
  60252 => 'Prisms Deck',
  60255 => 'Nobles Deck',
  60256 => 'Collect Sample',
  60257 => 'Nobles Deck',
  60259 => 'Nobles Deck',
  60260 => 'Nobles Deck',
  60261 => 'Nobles Deck',
  60262 => 'Nobles Deck',
  60263 => 'Nobles Deck',
  60264 => 'Nobles Deck',
  60265 => 'Chaos Deck',
  60268 => 'Chaos Deck',
  60269 => 'Chaos Deck',
  60270 => 'Chaos Deck',
  60271 => 'Chaos Deck',
  60272 => 'Chaos Deck',
  60273 => 'Chaos Deck',
  60274 => 'Chaos Deck',
  60276 => 'Undeath Deck',
  60277 => 'Undeath Deck',
  60278 => 'Undeath Deck',
  60279 => 'Undeath Deck',
  60280 => 'Undeath Deck',
  60281 => 'Undeath Deck',
  60282 => 'Undeath Deck',
  60283 => 'Undeath Deck',
  60358 => 'Beasts Deck',
  60359 => 'Beasts Deck',
  60360 => 'Beasts Deck',
  60361 => 'Beasts Deck',
  60362 => 'Beasts Deck',
  60363 => 'Beasts Deck',
  60364 => 'Beasts Deck',
  60368 => 'Elementals Deck',
  60369 => 'Elementals Deck',
  60370 => 'Elementals Deck',
  60371 => 'Elementals Deck',
  60372 => 'Elementals Deck',
  60373 => 'Elementals Deck',
  60374 => 'Elementals Deck',
  60375 => 'Portals Deck',
  60376 => 'Portals Deck',
  60377 => 'Portals Deck',
  60378 => 'Portals Deck',
  60379 => 'Portals Deck',
  60380 => 'Portals Deck',
  60381 => 'Portals Deck',
  60382 => 'Warlord Deck',
  60383 => 'Warlord Deck',
  60384 => 'Warlord Deck',
  60385 => 'Warlord Deck',
  60386 => 'Warlord Deck',
  60387 => 'Warlord Deck',
  60388 => 'Warlord Deck',
  60389 => 'Blessings Deck',
  60390 => 'Blessings Deck',
  60391 => 'Blessings Deck',
  60392 => 'Blessings Deck',
  60393 => 'Blessings Deck',
  60394 => 'Blessings Deck',
  60395 => 'Blessings Deck',
  60397 => 'Furies Deck',
  60398 => 'Furies Deck',
  60399 => 'Furies Deck',
  60400 => 'Furies Deck',
  60401 => 'Furies Deck',
  60402 => 'Furies Deck',
  60404 => 'Furies Deck',
  60408 => 'Lunacy Deck',
  60409 => 'Lunacy Deck',
  60410 => 'Lunacy Deck',
  60411 => 'Lunacy Deck',
  60412 => 'Lunacy Deck',
  60413 => 'Lunacy Deck',
  60414 => 'Lunacy Deck',
  60415 => 'Storms Deck',
  60416 => 'Storms Deck',
  60417 => 'Storms Deck',
  60418 => 'Storms Deck',
  60419 => 'Storms Deck',
  60420 => 'Storms Deck',
  60421 => 'Storms Deck',
  60581 => 'Frosthide Leg Armor',
  60582 => 'Icescale Leg Armor',
  60618 => 'Runed Cobalt Rod',
  60866 => 'Mechano-hog',
  60867 => 'Mekgineer\'s Chopper',
  60888 => 'Cosmetic Enchant Cast',
  60974 => 'Swift Mooncloth Carpet',
  60975 => 'Swift Ebonweave Carpet',
  60976 => 'Swift Spellfire Carpet',
  61481 => 'Mechanized Snow Goggles',
  61483 => 'Mechanized Snow Goggles',
  61756 => 'Northrend Inscription Research (FAST QA VERSION)',
  62271 => 'Unbreakable Healing Amplifiers',
  62447 => 'Earthen Leg Armor',
  64301 => 'Glyph of Envenom',
  64323 => 'Book of Glyph Mastery',
  64347 => 'Combined Efforts',
  64401 => 'Glow Worm',
  66486 => 'Bountiful Feast',
  67824 => 'Gnomish Thinking Cap',
  69996 => 'Runescroll of Brilliance',
  70524 => 'Enchanted Thorium',
);
?>