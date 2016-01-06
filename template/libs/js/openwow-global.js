"undefined" == typeof $oWoW && ($oWoW = {
    cdnUrl: "//cdn.openwow.com",
    expUrl: ".openwow.com"
}), $oWoW.evt = function (a) {
    if (!a) {
        if ("undefined" == typeof event)
            return null;
        a = event
    }
    return a.which ? a._button = a.which : (a._button = a.button, $oWoW.Browser.ie6789 && a._button ? 4 & a._button ? a._button = 2 : 2 & a._button && (a._button = 3) : a._button = a.button + 1), a._target = a.target ? a.target : a.srcElement, a._wheelDelta = a.wheelDelta ? a.wheelDelta : -a.detail, a
}, $oWoW.$A = function (a) {
    for (var b = [], c = 0, d = a.length; d > c; ++c)
        b.push(a[c]);
    return b
}, Function.prototype.bind || (Function.prototype.bind = function () {
    var a = this,
        b = $oWoW.$A(arguments),
        c = b.shift();
    return function () {
        return a.apply(c, b.concat($oWoW.$A(arguments)))
    }
}), $oWoW.bindfunc = function () {
    args = $oWoW.$A(arguments);
    var a = args.shift(),
        b = args.shift();
    return function () {
        return a.apply(b, args.concat($oWoW.$A(arguments)))
    }
}, String.prototype.ltrim || (String.prototype.ltrim = function () {
    return this.replace(/^\s*/, "")
}), String.prototype.rtrim || (String.prototype.rtrim = function () {
    return this.replace(/\s*$/, "")
}), String.prototype.trim || (String.prototype.trim = function () {
    return this.ltrim().rtrim()
}), String.prototype.removeAllWhitespace || (String.prototype.removeAllWhitespace = function () {
    return this.replace("/s+/g", "")
}), $oWoW.strcmp = function (a, b) {
    if (a == b)
        return 0;
    if (null == a)
        return -1;
    if (null == b)
        return 1;
    var c = parseFloat(a),
        d = parseFloat(b);
    return isNaN(c) || isNaN(d) || c == d ? "string" == typeof a && "string" == typeof b ? a.localeCompare(b) : b > a ? -1 : 1 : d > c ? -1 : 1
}, $oWoW.trim = function (a) {
    return a.replace(/(^\s*|\s*$)/g, "")
}, $oWoW.rtrim = function (a, b) {
    for (var c = a.length; --c > 0 && a.charAt(c) == b; )
        ;
    return a = a.substring(0, c + 1), a == b && (a = ""), a
}, $oWoW.sprintf = function (a) {
    var b;
    for (b = 1, len = arguments.length; len > b; ++b)
        a = a.replace("$" + b, arguments[b]);
    return a
}, $oWoW.sprintfa = function (a) {
    var b;
    for (b = 1, len = arguments.length; len > b; ++b)
        a = a.replace(new RegExp("\\$" + b, "g"), arguments[b]);
    return a
}, $oWoW.sprintfo = function (a) {
    if ("object" == typeof a && a.length) {
        var b = a;
        a = b[0];
        var c;
        for (c = 1; c < b.length; ++c)
            a = a.replace("$" + c, b[c]);
        return a
    }
}, $oWoW.str_replace = function (a, b, c) {
    for (; - 1 != a.indexOf(b); )
        a = a.replace(b, c);
    return a
}, $oWoW.urlencode = function (a) {
    return a = encodeURIComponent(a), a = $oWoW.str_replace(a, "+", "%2B")
}, $oWoW.urlencode2 = function (a) {
    return a = encodeURIComponent(a), a = $oWoW.str_replace(a, "%20", "+"), a = $oWoW.str_replace(a, "%3D", "=")
}, $oWoW.number_format = function (a) {
    return x = ("" + parseFloat(a)).split("."), a = x[0], x = x.length > 1 ? "." + x[1] : "", a.length <= 3 ? a + x : $oWoW.number_format(a.substr(0, a.length - 3)) + "," + a.substr(a.length - 3) + x
}, $oWoW.is_array = function (a) {
    return !(!a || a.constructor != Array)
}, $oWoW.in_array = function (a, b, c, d) {
    if (null == a)
        return -1;
    if (c)
        return $oWoW.in_arrayf(a, b, c, d);
    for (var e = d || 0, f = a.length; f > e; ++e)
        if (a[e] == b)
            return e;
    return -1
}, $oWoW.in_arrayf = function (a, b, c, d) {
    for (var e = d || 0, f = a.length; f > e; ++e)
        if (c(a[e]) == b)
            return e;
    return -1
}, $oWoW.rs = function () {
    for (var a = $oWoW.rs.random, b = "", c = 0; 16 > c; c++) {
        var d = Math.floor(Math.random() * a.length);
        0 == c && 11 > d && (d += 10), b += a.substring(d, d + 1)
    }
    return b
}, $oWoW.rs.random = "0123456789abcdefghiklmnopqrstuvwxyz", $oWoW.isset = function (a) {
    return "undefined" != typeof window[a]
}, $oWoW.isset("console") || (console = {
    log: function () {
    }
}), $oWoW.array_walk = function (a, b, c) {
    for (var d, e = 0, f = a.length; f > e; ++e)
        d = b(a[e], c, a, e), null != d && (a[e] = d)
}, $oWoW.array_apply = function (a, b, c) {
    for (var e = 0, f = a.length; f > e; ++e)
        b(a[e], c, a, e)
}, $oWoW.array_filter = function (a, b) {
    for (var c = [], d = 0, e = a.length; e > d; ++d)
        b(a[d]) && c.push(a[d]);
    return c
}, $oWoW.array_index = function (a, b, c, d) {
    if (!$oWoW.is_array(a))
        return !1;
    if (!a.__R || d) {
        a.__R = {}, c || (c = function (a) {
            return a
        });
        for (var e = 0, f = a.length; f > e; ++e)
            a.__R[c(a[e])] = e
    }
    return null == b ? a.__R : !isNaN(a.__R[b])
}, $oWoW.array_compare = function (a, b) {
    if (a.length != b.length)
        return !1;
    for (var c = {}, d = a.length; d >= 0; --d)
        c[a[d]] = !0;
    for (var e = !0, d = b.length; d >= 0; --d)
        void 0 === c[b[d]] && (e = !1);
    return e
}, $oWoW.array_unique = function (a) {
    for (var b = [], c = {}, d = a.length - 1; d >= 0; --d)
        c[a[d]] = 1;
    for (var d in c)
        b.push(d);
    return b
}, $oWoW.ge = function (a) {
    return "string" != typeof a ? a : document.getElementById(a)
}, $oWoW.gE = function (a, b) {
    return a.getElementsByTagName(b)
}, $oWoW.ce = function (a, b, c) {
    var d = document.createElement(a);
    return b && $oWoW.cOr(d, b), c && $oWoW.ae(d, c), d
}, $oWoW.de = function (a) {
    a && a.parentNode && a.parentNode.removeChild(a)
}, $oWoW.ae = function (a, b) {
    return $oWoW.is_array(b) ? ($oWoW.array_apply(b, a.appendChild.bind(a)), b) : a.appendChild(b)
}, $oWoW.aef = function (a, b) {
    return a.insertBefore(b, a.firstChild)
}, $oWoW.ee = function (a, b) {
    for (b || (b = 0); a.childNodes[b]; )
        a.removeChild(a.childNodes[b])
}, $oWoW.ct = function (a) {
    return document.createTextNode(a)
}, $oWoW.st = function (a, b) {
    a.firstChild && 3 == a.firstChild.nodeType ? a.firstChild.nodeValue = b : $oWoW.aef(a, $oWoW.ct(b))
}, $oWoW.nw = function (a) {
    a.style.whiteSpace = "nowrap"
}, $oWoW.rf = function () {
    return !1
}, $oWoW.rf2 = function (a) {
    return a = $oWoW.evt(a), a.ctrlKey || a.shiftKey || a.altKey || a.metaKey ? void 0 : !1
}, $oWoW.tb = function () {
    this.blur()
}, $oWoW.aE = function (a, b, c) {
    a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent && a.attachEvent("on" + b, c)
}, $oWoW.dE = function (a, b, c) {
    a.removeEventListener ? a.removeEventListener(b, c, !1) : a.detachEvent && a.detachEvent("on" + b, c)
}, $oWoW.sp = function (a) {
    a || (a = event), $oWoW.Browser.ie6789 ? a.cancelBubble = !0 : a.stopPropagation()
}, $oWoW.sc = function (a, b, c, d, e) {
    var f = new Date,
        g = a + "=" + escape(c) + "; ";
    f.setDate(f.getDate() + b), g += "expires=" + f.toUTCString() + "; ", d && (g += "path=" + d + "; "), e && (g += "domain=" + e + "; "), document.cookie = g, $oWoW.gc(a), $oWoW.gc.C[a] = c
}, $oWoW.dc = function (a) {
    $oWoW.sc(a, -1), $oWoW.gc.C[a] = null
}, $oWoW.gc = function (a) {
    if (null == $oWoW.gc.I) {
        var b = unescape(document.cookie).split("; ");
        $oWoW.gc.C = {};
        for (var c = 0, d = b.length; d > c; ++c) {
            var f, g, e = b[c].indexOf("=");
            -1 != e ? (f = b[c].substr(0, e), g = b[c].substr(e + 1)) : (f = b[c], g = ""), $oWoW.gc.C[f] = g
        }
        $oWoW.gc.I = 1
    }
    return a ? $oWoW.gc.C[a] : $oWoW.gc.C
}, $oWoW.ns = function (a) {
    $oWoW.Browser.ie6789 && (a.onfocus = $oWoW.tb, a.onmousedown = a.onselectstart = a.ondragstart = $oWoW.rf)
}, $oWoW.eO = function (a) {
    for (var b in a)
        delete a[b]
}, $oWoW.dO = function (a) {
    function b () {
    }
    return b.prototype = a, new b
}, $oWoW.cO = function (a, b) {
    for (var c in b)
        a[c] = null !== b[c] && "object" == typeof b[c] && b[c].length ? b[c].slice(0) : b[c];
    return a
}, $oWoW.cOr = function (a, b) {
    for (var c in b)
        "object" == typeof b[c] ? b[c].length ? a[c] = b[c].slice(0) : (a[c] || (a[c] = {}), $oWoW.cOr(a[c], b[c])) : a[c] = b[c];
    return a
}, $oWoW.Browser = {
    ie: !(!window.attachEvent || window.opera),
    opera: !!window.opera,
    safari: -1 != navigator.userAgent.indexOf("Safari"),
    firefox: -1 != navigator.userAgent.indexOf("Firefox"),
    chrome: -1 != navigator.userAgent.indexOf("Chrome")
}, $oWoW.Browser.ie9 = $oWoW.Browser.ie && -1 != navigator.userAgent.indexOf("MSIE 9.0"), $oWoW.Browser.ie8 = $oWoW.Browser.ie && -1 != navigator.userAgent.indexOf("MSIE 8.0") && !$oWoW.Browser.ie9, $oWoW.Browser.ie7 = $oWoW.Browser.ie && -1 != navigator.userAgent.indexOf("MSIE 7.0") && !$oWoW.Browser.ie8, $oWoW.Browser.ie6 = $oWoW.Browser.ie && -1 != navigator.userAgent.indexOf("MSIE 6.0") && !$oWoW.Browser.ie7, $oWoW.Browser.ie67 = $oWoW.Browser.ie6 || $oWoW.Browser.ie7, $oWoW.Browser.ie678 = $oWoW.Browser.ie67 || $oWoW.Browser.ie8, $oWoW.Browser.ie6789 = $oWoW.Browser.ie678 || $oWoW.Browser.ie9, navigator.userAgent.match(/Gecko\/([0-9]+)/), $oWoW.Browser.geckoVersion = 0 | parseInt(RegExp.$1), $oWoW.OS = {
    windows: -1 != navigator.appVersion.indexOf("Windows"),
    mac: -1 != navigator.appVersion.indexOf("Macintosh"),
    linux: -1 != navigator.appVersion.indexOf("Linux")
}, $oWoW.localStorage = new function () {
    this.isSupported = function () {
        var a;
        try {
            a = "localStorage" in window && null !== window.localStorage
        } catch (b) {
            a = !1
        }
        if (a)
            try {
                localStorage.setItem("test", "123"), a = "123" == localStorage.getItem("test"), localStorage.removeItem("test")
            } catch (b) {
                a = !1
            }
        return $oWoW.localStorage.isSupported = function (a) {
            return a
        }.bind(null, a), a
    }, this.set = function (a, b) {
        $oWoW.localStorage.isSupported() && localStorage.setItem(a, b)
    }, this.get = function (a) {
        return $oWoW.localStorage.isSupported() ? localStorage.getItem(a) : void 0
    }, this.remove = function (a) {
        $oWoW.localStorage.isSupported() && localStorage.removeItem(a)
    }
}, $oWoW.getWindowSize = function () {
    var a = 0,
        b = 0;
    return document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight) ? (a = document.documentElement.clientWidth, b = document.documentElement.clientHeight) : document.body && (document.body.clientWidth || document.body.clientHeight) ? (a = document.body.clientWidth, b = document.body.clientHeight) : "number" == typeof window.innerWidth && (a = window.innerWidth, b = window.innerHeight), {
        w: a,
        h: b
    }
}, $oWoW.getScroll = function () {
    var a = 0,
        b = 0;
    return "number" == typeof window.pageYOffset ? (a = window.pageXOffset, b = window.pageYOffset) : document.body && (document.body.scrollLeft || document.body.scrollTop) ? (a = document.body.scrollLeft, b = document.body.scrollTop) : document.documentElement && (document.documentElement.scrollLeft || document.documentElement.scrollTop) && (a = document.documentElement.scrollLeft, b = document.documentElement.scrollTop), {
        x: a,
        y: b
    }
}, $oWoW.getCursorPos = function (a) {
    var b, c;
    if (window.innerHeight)
        a.pageX && a.pageY ? (b = a.pageX, c = a.pageY) : (b = a.clientX, c = a.clientY);
    else {
        var d = $oWoW.getScroll();
        b = a.clientX + d.x, c = a.clientY + d.y
    }
    return {
        x: b,
        y: c
    }
}, $oWoW.ac = function (a, b) {
    for (var e, c = 0, d = 0; a; ) {
        for (c += a.offsetLeft, d += a.offsetTop, e = a.parentNode; e && e != a.offsetParent && e.offsetParent; ) {
            if (e.scrollLeft || e.scrollTop) {
                c -= 0 | e.scrollLeft, d -= 0 | e.scrollTop;
                break
            }
            e = e.parentNode
        }
        a = a.offsetParent
    }
    if ($oWoW.isset("Lightbox") && Lightbox.isVisible() && (b = !0), b) {
        var f = $oWoW.getScroll();
        c += f.x, d += f.y
    }
    var g = [c, d];
    return g.x = c, g.y = d, g
}, $oWoW.scrollTo = function (a, b) {
    var c, d = $oWoW.getWindowSize(),
        e = $oWoW.getScroll(),
        f = d.w,
        g = d.h,
        h = e.x,
        i = e.y;
    a = $oWoW.ge(a), null == b ? b = [] : "number" == typeof b && (b = [b]), c = b.length, 0 == c ? b[0] = b[1] = b[2] = b[3] = 0 : 1 == c ? b[1] = b[2] = b[3] = b[0] : 2 == c ? (b[2] = b[0], b[3] = b[1]) : 3 == c && (b[3] = b[1]), c = $oWoW.ac(a);
    var j = c[0] - b[3],
        k = c[1] - b[0],
        l = c[0] + a.offsetWidth + b[1],
        m = c[1] + a.offsetHeight + b[2];
    l - j > f || h > j ? h = j : l - f > h && (h = l - f), m - k > g || i > k ? i = k : m - g > i && (i = m - g), scrollTo(h, i)
}, $oWoW.createReverseLookupJson = function (a) {
    var b = {};
    for (var c in a)
        b[a[c]] = c;
    return b
}, $oWoW.getLocaleFromDomain = function (a) {
    var b = $oWoW.getLocaleFromDomain.L;
    if (a) {
        var c = a.indexOf(".");
        -1 != c && (a = a.substring(0, c))
    }
    return b[a] ? b[a] : 0
}, $oWoW.getLocaleFromDomain.L = {
    fr: 2,
    de: 3,
    es: 6,
    ru: 8,
    www: 0
}, $oWoW.getDomainFromLocale = function (a) {
    var b;
    return b = $oWoW.getDomainFromLocale.L ? $oWoW.getDomainFromLocale.L : $oWoW.getDomainFromLocale.L = $oWoW.createReverseLookupJson($oWoW.getLocaleFromDomain.L), b[a] ? b[a] : "www"
}, $oWoW.getExpansionFromDomain = function (a) {
    var b = $oWoW.getExpansionFromDomain.L;
    if (a) {
        var c = a.indexOf(".");
        -1 != c && (a = a.substring(0, c))
    }
    return b[a] ? b[a] : 0
}, $oWoW.getExpansionFromDomain.L = {
    tbc: 1,
    wotlk: 2,
    cata: 3,
    mop: 4,
    wod: 5,
    classic: 0
}, $oWoW.getDomainFromExpansion = function (a) {
    var b = $oWoW.getDomainFromLocale.L = $oWoW.createReverseLookupJson($oWoW.getExpansionFromDomain.L);
    return b[a] ? b[a] : "wotlk"
}, $oWoW.getIdFromTypeName = function (a) {
    var b = $oWoW.getIdFromTypeName.L;
    return b[a] ? b[a] : -1
}, $oWoW.getIdFromTypeName.L = {
    npc: 1,
    object: 2,
    item: 3,
    itemset: 4,
    quest: 5,
    spell: 6,
    zone: 7,
    faction: 8,
    pet: 9,
    achievement: 10,
    title: 11,
    event: 12,
    "class": 13,
    race: 14,
    skill: 15,
    currency: 17
}, $oWoW.ajaxRequest = function (a) {
    var b = document.getElementsByTagName("head")[0],
        c = $oWoW.getGets();
    null != c.refresh && (a += c.refresh.length ? "&refresh=" + c.refresh : "&refresh"), null != c.locale && (a += "&locale=" + c.locale), $oWoW.ae(b, $oWoW.ce("script", {
        type: "text/javascript",
        src: a,
        charset: "utf8"
    }))
}, $oWoW.getGets = function () {
    if (null != $oWoW.getGets.C)
        return $oWoW.getGets.C;
    var a = $oWoW.getQueryString(),
        b = $oWoW.parseQueryString(a);
    return $oWoW.getGets.C = b, b
}, $oWoW.getQueryString = function () {
    var a = "";
    return location.pathname && (a += location.pathname.substr(1)), location.search && (location.pathname && (a += "&"), a += location.search.substr(1)), a
}, $oWoW.parseQueryString = function (a) {
    a = decodeURIComponent(a);
    for (var b = a.split("&"), c = {}, d = 0, e = b.length; e > d; ++d)
        $oWoW.splitQueryParam(b[d], c);
    return c
}, $oWoW.splitQueryParam = function (a, b) {
    var d, e, c = a.indexOf("=");
    -1 != c ? (d = a.substr(0, c), e = a.substr(c + 1)) : (d = a, e = ""), b[d] = e
}, $oWoW.createRectangle = function (a, b, c, d) {
    return {
        l: a,
        t: b,
        r: a + c,
        b: b + d
    }
}, $oWoW.intersectRectangle = function (a, b) {
    return !(a.l >= b.r || b.l >= a.r || a.t >= b.b || b.t >= a.b)
}, $oWoW.convertRatingToPercent = function (a, b, c, d) {
    var e = $oWoW.convertRatingToPercent.RB;
    0 > a ? a = 1 : a > 80 && (a = 80), (14 == b || 12 == b || 15 == b) && 34 > a && (a = 34), 28 != b && 36 != b || 2 != d && 6 != d && 7 != d && 11 != d || (e[b] /= 1.3), 0 > c && (c = 0);
    var f;
    if (e && null != e[b]) {
        var g;
        g = a > 70 ? 82 / 52 * Math.pow(131 / 63, (a - 70) / 10) : a > 60 ? 82 / (262 - 3 * a) : a > 10 ? (a - 8) / 52 : 2 / 52, f = c / e[b] / g
    } else
        f = 0;
    return f
}, $oWoW.statToJson = {
    1: "health",
    2: "mana",
    3: "agi",
    4: "str",
    5: "int",
    6: "spi",
    7: "sta",
    8: "energy",
    9: "rage",
    10: "focus",
    12: "defrtng",
    13: "dodgertng",
    14: "parryrtng",
    15: "blockrtng",
    16: "mlehitrtng",
    17: "rgdhitrtng",
    18: "splhitrtng",
    19: "mlecritstrkrtng",
    20: "rgdcritstrkrtng",
    21: "splcritstrkrtng",
    22: "_mlehitrtng",
    23: "_rgdhitrtng",
    24: "_splhitrtng",
    25: "_mlecritstrkrtng",
    26: "_rgdcritstrkrtng",
    27: "_splcritstrkrtng",
    28: "mlehastertng",
    29: "rgdhastertng",
    30: "splhastertng",
    31: "hitrtng",
    32: "critstrkrtng",
    33: "_hitrtng",
    34: "_critstrkrtng",
    35: "resirtng",
    36: "hastertng",
    37: "exprtng",
    38: "atkpwr",
    39: "rgdatkpwr",
    40: "feratkpwr",
    41: "splheal",
    42: "spldmg",
    43: "manargn",
    44: "armorpenrtng",
    45: "splpwr",
    46: "healthrgn",
    47: "splpen",
    48: "block",
    49: "mastrtng",
    50: "armor",
    51: "firres",
    52: "frores",
    53: "holres",
    54: "shares",
    55: "natres",
    56: "arcres",
    57: "firsplpwr",
    58: "frosplpwr",
    59: "holsplpwr",
    60: "shasplpwr",
    61: "natsplpwr",
    62: "arcsplpwr"
}, $oWoW.jsonToStat = {};
for (var i in $oWoW.statToJson)
    $oWoW.jsonToStat[$oWoW.statToJson[i]] = i;
$oWoW.individualToGlobalStat = {
    16: 31,
    17: 31,
    18: 31,
    19: 32,
    20: 32,
    21: 32,
    22: 33,
    23: 33,
    24: 33,
    25: 34,
    26: 34,
    27: 34,
    28: 36,
    29: 36,
    30: 36
}, $oWoW.convertScalingFactor = function (a, b, c, d, e) {
    var f = $oWoW.convertScalingFactor.SV,
        g = $oWoW.convertScalingFactor.SD;
    if (!f[a])
        return e ? {} : 0;
    var h = {},
        i = f[a],
        j = g[c];
    return j && d >= 0 && 9 >= d ? (h.n = $oWoW.statToJson[j[d]], h.s = j[d], h.v = Math.floor(i[b] * j[d + 10] / 1e4)) : h.v = i[b], e ? h : h.v
}, $oWoW.getDataSource = function () {
    if ($oWoW.isset("pageInfo"))
        switch (pageInfo.type) {
            case 3:
                if ($oWoW.isset("itemData"))
                    return itemData;
            case 6:
                if ($oWoW.isset("spellData"))
                    return spellData
        }
    return []
}, $oWoW.setJsonItemLevel = function (a, b) {
    if (a.scadist && a.scaflags) {
        a.bonuses = a.bonuses || {};
        for (var c = -1, d = -1, e = -1, f = -1, g = 262175, h = 16253408, i = 32256, j = 32768, k = 5120, l = 0; 24 > l; ++l) {
            var m = 1 << l;
            m & a.scaflags && (m & g && 0 > c ? c = l : m & h && 0 > d ? d = l : m & i && 0 > e ? e = l : m & j && 0 > f && (f = l))
        }
        if (c >= 0)
            for (var l = 0; 10 > l; ++l) {
                var n = $oWoW.convertScalingFactor(b, c, a.scadist, l, 1);
                n.n && (a[n.n] = n.v), a.bonuses[n.s] = n.v
            }
        if (d >= 0 && (a.armor = $oWoW.convertScalingFactor(b, d)), e >= 0) {
            var o = a.scaflags & k ? .2 : .3,
                p = a.mledps ? "mle" : "rgd";
            a.dps = a[p + "dps"] = $oWoW.convertScalingFactor(b, e), a.dmgmin = a[p + "dmgmin"] = Math.floor(a.dps * a.speed * (1 - o)), a.dmgmax = a[p + "dmgmax"] = Math.floor(a.dps * a.speed * (1 + o)), a.feratkpwr && (a.feratkpwr = Math.max(0, Math.floor(14 * (a.dps - 54.8))))
        }
        f >= 0 && (a.splpwr = a.bonuses[45] = $oWoW.convertScalingFactor(b, f))
    }
}, $oWoW.setTooltipLevel = function (a, b) {
    var c = typeof a;
    if ("number" == c) {
        var d = $oWoW.getDataSource();
        if (!d[a] || !d[a][(buff ? "buff_" : "tooltip_") + Locale.getName()])
            return a;
        a = d[a][(buff ? "buff_" : "tooltip_") + Locale.getName()]
    } else if ("string" != c)
        return a;
    if (c = a.match(/<!--\?([0-9:]*)-->/), !c)
        return a;
    c = c[1].split(":");
    var b = Math.min(parseInt(c[2]), Math.max(parseInt(c[1]), b)),
        e = parseInt(c[4]) || 0;
    if (e && !a.match(/<!--pts[0-9](:[0-9])?-->/g)) {
        var f = parseInt(c[5]) || 0,
            g = a.match(/<!--spd-->(\d\.\d+)/);
        g && (g = parseFloat(g[1]) || 0);
        var h = {
            scadist: e,
            scaflags: f,
            speed: g
        };
        $oWoW.setJsonItemLevel(h, b), a = a.replace(/(<!--asc(\d+)-->)([^<]+)/, function (a, d, e) {
            return c = e, 40 > b && (3 == e || 4 == e) && --c, d + itemset_types[c]
        }), a = a.replace(/(<!--dmg-->)\d+(\D+)\d+/, function (a, b, c) {
            return b + h.dmgmin + c + h.dmgmax
        }), a = a.replace(/(<!--dps-->\D*?)(\d+\.\d)/, function (a, b) {
            return b + h.dps.toFixed(1)
        }), a = a.replace(/<span class="c11"><!--fap-->(\D*?)(\d+)(\D*?)<\/span>(<br \/>)?/i, function (a, b, c, d, e) {
            var f;
            return c = Math.floor(14 * (h.dps - 54.8)), h.dps > 54.8 && c > 0 ? (f = "", e = e ? "<br />" : "") : (c = 0, f = ' style="display: none"', e = e ? "<!--br-->" : ""), '<span class="c11"' + f + "><!--fap-->" + b + c + d + "</span>" + e
        }), a = a.replace(/(<!--amr-->)\d+/, function (a, b) {
            return b + h.armor
        }), a = a.replace(/<span><!--stat(\d+)-->[-+]\d+(\D*?)<\/span>(<!--e-->)?(<!--ps-->)?(<br ?\/?>)?/gi, function (a, b, c, d, e, f) {
            var g, i = h.bonuses[b];
            return i ? (i = (i > 0 ? "+" : "-") + i, g = "", f = f ? "<br />" : "") : (i = "+0", g = ' style="display: none"', f = f ? "<!--br-->" : ""), "<span" + g + "><!--stat" + b + "-->" + i + c + "</span>" + (d || "") + (e || "") + f
        }), a = a.replace(/<span class="q2">(.*?)<!--rtg(\d+)-->\d+(.*?)<\/span>(<br \/>)?/gi, function (a, b, c, d, e, f, g) {
            var i, j = h.bonuses[$oWoW.individualToGlobalStat[c] || c];
            return j ? (i = "", g = g ? "<br />" : "") : (i = ' style="display: none"', g = g ? "<!--br-->" : ""), '<span class="q2"' + i + ">" + b + "<!--rtg" + c + "-->" + j + d + "</span>" + g
        })
    }
    return a = a.replace(/<!--ppl(\d+):(\d+):(\d+):(\d+)-->\s*\d+/gi, function (a, c, d, e, f) {
        return "<!--ppl" + c + ":" + d + ":" + e + ":" + f + "-->" + Math.round(parseInt(e) + (Math.min(Math.max(b, c), d) - c) * f / 100)
    }), a = a.replace(/(<!--rtg%(\d+)-->)([\.0-9]+)/g, function (d, e, f) {
        return c = a.match(new RegExp("<!--rtg" + f + "-->(\\d+)")), c ? e + Math.round(100 * $oWoW.convertRatingToPercent(b, f, c[1])) / 100 : d
    }), a = a.replace(/(<!--\?\d+:\d+:\d+:)\d+((:\d+:\d+)?-->)/, "$1" + b + "$2"), a = a.replace(/<!--lvl-->\d+/g, "<!--lvl-->" + b)
}, $oWoW.setTooltipSpells = function (a, b, c, d) {
    var g, e = {},
        f = "<!--sp([0-9]+):[01]-->.+?<!--sp\\1-->";
    null == b && (b = []), null == d && (d = {});
    for (var h = 0; h < b.length; ++h)
        e[b[h]] = 1;
    if (g = a.match(new RegExp(f, "g")))
        for (var h = 0; h < g.length; ++h) {
            var i = g[h].match(f)[1];
            if (e[i] = 0 | e[i], null == d[i] && (d[i] = -1), d[i]++, null != c[i] && null != c[i][d[i]] && null != c[i][d[i]][e[i]]) {
                var j = c[i][d[i]][e[i]];
                j = $oWoW.setTooltipSpells(j, b, c, d), a = a.replace(g[h], "<!--sp" + i + ":" + e[i] + "-->" + j + "<!--sp" + i + "-->")
            }
        }
    return a
}, $oWoW.enhanceTooltip = function (a, b, c, d, e, f, g) {
    var i, h = typeof a;
    if ("number" == h) {
        var j = $oWoW.getDataSource(),
            k = a;
        if (!j[k] || !j[k][(e ? "buff_" : "tooltip_") + Locale.getName()])
            return a;
        a = j[k][(e ? "buff_" : "tooltip_") + Locale.getName()], i = j[k][(e ? "buff" : "") + "spells_" + Locale.getName()], i && (a = $oWoW.setTooltipSpells(a, f, i))
    } else if ("string" != h)
        return a;
    if (c) {
        var l = $oWoW.getGets();
        l.lvl && (a = $oWoW.setTooltipLevel(a, l.lvl, e))
    }
    if (b && (a = a.replace(/<span class="q2"><!--addamr(\d+)--><span>.*?<\/span><\/span>/i, function (a, b) {
        return '<span class="q2 tip" onmouseover="$oWoW.Tooltip.showAtCursor(event, $oWoW.sprintf(LANG.tooltip_armorbonus, ' + b + '), 0, 0, \'q\')" onmousemove="$oWoW.Tooltip.cursorUpdate(event)" onmouseout="$oWoW.Tooltip.hide()">' + a + "</span>"
    }), a = a.replace(/\(([^\)]*?<!--lvl-->[^\(]*?)\)/gi, function (a, b) {
        return '(<a href="javascript:;" onmousedown="return false" class="tip" style="color: white; cursor: pointer" onclick="$oWoW.staticTooltipLevelClick(this, null, 0)" onmouseover="$oWoW.Tooltip.showAtCursor(event, \'<span class=\\\'q2\\\'>\' + LANG.tooltip_changelevel + \'</span>\')" onmousemove="$oWoW.Tooltip.cursorUpdate(event)" onmouseout="$oWoW.Tooltip.hide()">' + b + "</a>)"
    })), d && Slider)
        if (e && e.slider)
            e.bufftip = this;
        else {
            var h = a.match(/<!--\?(\d+):(\d+):(\d+):(\d+)/);
            h && h[2] != h[3] && (this.slider = Slider.init(d, {
                minValue: parseInt(h[2]),
                maxValue: parseInt(h[3]),
                onMove: $oWoW.tooltipSliderMove.bind(this)
            }), Slider.setValue(this.slider, parseInt(h[4])), this.slider.onmousemove = $oWoW.Tooltip.cursorUpdate, this.slider.onmouseout = $oWoW.Tooltip.hide, this.slider.onmouseover = function (a) {
                $oWoW.Tooltip.showAtCursor(a, LANG.tooltip_changelevel2, 0, 0, "q2")
            })
        }
    if (g) {
        if (e && e.modified)
            e.bufftip = this;
        else
            for (var m in i)
                spellData[m] && -1 == $oWoW.in_array(f, m) && ($(g).append('<input type="checkbox" id="known-' + m + '" />').append('<label for="known-' + m + '"><a rel="spell=' + m + "&know=" + m + '">' + spellData[m]["name_" + Locale.getName()] + (spellData[m]["rank_" + Locale.getName()] ? " (" + spellData[m]["rank_" + Locale.getName()] + ")" : "") + "</a></label>").append("<br />"), $("#known-" + m).change($oWoW.tooltipSpellsChange.bind(this)));
        this.modified = [g, i, f], $(g).toggle(!$(g).is(":empty"))
    }
    return a
}, $oWoW.staticTooltipLevelClick = function (a, b, c, d) {
    for (; - 1 == a.className.indexOf("tooltip"); )
        a = a.parentNode;
    var e = a.innerHTML;
    if (e = e.match(/<!--\?(\d+):(\d+):(\d+):(\d+)/)) {
        var f = parseInt(e[1]),
            g = parseInt(e[2]),
            h = parseInt(e[3]),
            i = parseInt(e[4]);
        if (!(g >= h || (b || (b = prompt($oWoW.sprintf(LANG.prompt_ratinglevel, g, h), i)), b = parseInt(b), isNaN(b) || b == i || g > b || b > h))) {
            var j = $oWoW.getDataSource();
            e = $oWoW.setTooltipLevel(j[f][(d ? "buff_" : "tooltip_") + Locale.getName()], b, d), e = $oWoW.enhanceTooltip(e, !0), a.innerHTML = "<table><tr><td>" + e + '</td><th style="background-position: top right"></th></tr><tr><th style="background-position: bottom left"></th><th style="background-position: bottom right"></th></tr></table>', $oWoW.Tooltip.fixSafe(a, 1, 1), a.slider && !c && Slider.setValue(a.slider, b), d || $oWoW.tooltipSpellsChange.bind(a)()
        }
    }
}, $oWoW.tooltipSliderMove = function (a, b, c) {
    $oWoW.staticTooltipLevelClick(this, c.value, 1), this.bufftip && $oWoW.staticTooltipLevelClick(this.bufftip, c.value, 1, 1), $oWoW.Tooltip.hide()
}, $oWoW.tooltipSpellsChange = function () {
    if (this.modified) {
        var a = this.modified[0],
            b = this.modified[1],
            c = [];
        $.each($("input:checked", a), function (a, b) {
            c.push(parseInt(b.id.replace("known-", "")))
        }), this.modified[2] = c, this.innerHTML = $oWoW.setTooltipSpells(this.innerHTML, c, b), this.bufftip && $oWoW.tooltipSpellsChange.bind(this.bufftip)()
    }
}, $oWoW.Tooltip = {
    create: function (a, b) {
        var c = $oWoW.ce("div"),
            d = $oWoW.ce("table"),
            e = $oWoW.ce("tbody"),
            f = $oWoW.ce("tr"),
            g = $oWoW.ce("tr"),
            h = $oWoW.ce("td"),
            i = $oWoW.ce("th"),
            j = $oWoW.ce("th"),
            k = $oWoW.ce("th");
        if (c.className = "openwow-tt", i.style.backgroundPosition = "top right", j.style.backgroundPosition = "bottom left", k.style.backgroundPosition = "bottom right", a && (h.innerHTML = a), $oWoW.ae(f, h), $oWoW.ae(f, i), $oWoW.ae(e, f), $oWoW.ae(g, j), $oWoW.ae(g, k), $oWoW.ae(e, g), $oWoW.ae(d, e), b || ($oWoW.Tooltip.icon = $oWoW.ce("p"), $oWoW.Tooltip.icon.style.visibility = "hidden", $oWoW.ae($oWoW.Tooltip.icon, $oWoW.ce("div")), $oWoW.ae(c, $oWoW.Tooltip.icon)), $oWoW.ae(c, d), !b) {
            var l = $oWoW.ce("div");
            l.className = "tooltip-powered", $oWoW.ae(c, l), $oWoW.Tooltip.logo = l
        }
        return c
    },
    getMultiPartHtml: function (a, b) {
        return "<table><tr><td>" + a + "</td></tr></table><table><tr><td>" + b + "</td></tr></table>"
    },
    fix: function (a, b, c) {
        var d = $oWoW.gE(a, "table")[0],
            e = $oWoW.gE(d, "td")[0],
            f = e.childNodes;
        if (a.className = $oWoW.trim(a.className.replace("tooltip-slider", "")), f.length >= 2 && "TABLE" == f[0].nodeName && "TABLE" == f[1].nodeName) {
            f[0].style.whiteSpace = "nowrap";
            var g = parseInt(a.style.width);
            a.slider && g || (g = f[1].offsetWidth > 300 ? Math.max(300, f[0].offsetWidth) + 20 : Math.max(f[0].offsetWidth, f[1].offsetWidth) + 20), g = Math.min(320, g), g > 20 && (a.style.width = g + "px", f[0].style.width = f[1].style.width = "100%", a.slider && (Slider.setSize(a.slider, g - 6), a.className += " tooltip-slider"), !b && a.offsetHeight > document.body.clientHeight && (d.className = "shrink"))
        }
        c && (a.style.visibility = "visible")
    },
    fixSafe: function (a, b, c) {
        $oWoW.Tooltip.fix(a, b, c)
    },
    append: function (a, b) {
        var a = $oWoW.ge(a),
            c = $oWoW.Tooltip.create(b);
        $oWoW.ae(a, c), $oWoW.Tooltip.fixSafe(c, 1, 1)
    },
    prepare: function () {
        if (!$oWoW.Tooltip.tooltip) {
            var a = $oWoW.Tooltip.create();
            a.style.position = "absolute", a.style.left = a.style.top = "-2323px", $oWoW.ae(document.body, a), $oWoW.Tooltip.tooltip = a, $oWoW.Tooltip.tooltipTable = $oWoW.gE(a, "table")[0], $oWoW.Tooltip.tooltipTd = $oWoW.gE(a, "td")[0];
            var a = $oWoW.Tooltip.create(null, !0);
            a.style.position = "absolute", a.style.left = a.style.top = "-2323px", $oWoW.ae(document.body, a), $oWoW.Tooltip.tooltip2 = a, $oWoW.Tooltip.tooltipTable2 = $oWoW.gE(a, "table")[0], $oWoW.Tooltip.tooltipTd2 = $oWoW.gE(a, "td")[0]
        }
    },
    set: function (a, b) {
        var c = $oWoW.Tooltip.tooltip;
        if (c.style.width = "550px", c.style.left = "-2323px", c.style.top = "-2323px", a.nodeName ? ($oWoW.ee($oWoW.Tooltip.tooltipTd), $oWoW.ae($oWoW.Tooltip.tooltipTd, a)) : $oWoW.Tooltip.tooltipTd.innerHTML = a, c.style.display = "", $oWoW.Tooltip.fix(c, 0, 0), b) {
            $oWoW.Tooltip.showSecondary = !0;
            var c = $oWoW.Tooltip.tooltip2;
            c.style.width = "550px", c.style.left = "-2323px", c.style.top = "-2323px", b.nodeName ? ($oWoW.ee($oWoW.Tooltip.tooltipTd2), $oWoW.ae($oWoW.Tooltip.tooltipTd2, b)) : $oWoW.Tooltip.tooltipTd2.innerHTML = b, c.style.display = "", $oWoW.Tooltip.fix(c, 0, 0)
        } else
            $oWoW.Tooltip.showSecondary = !1
    },
    moveTests: [
        [null, null],
        [null, !1],
        [!1, null],
        [!1, !1]
    ],
    move: function (a, b, c, d, e, f) {
        if ($oWoW.Tooltip.tooltipTable) {
            var m, g = $oWoW.Tooltip.tooltip,
                h = $oWoW.Tooltip.tooltipTable.offsetWidth,
                j = ($oWoW.Tooltip.tooltipTable.offsetHeight, $oWoW.Tooltip.tooltip2),
                k = $oWoW.Tooltip.showSecondary ? $oWoW.Tooltip.tooltipTable2.offsetWidth : 0;
            $oWoW.Tooltip.showSecondary ? $oWoW.Tooltip.tooltipTable2.offsetHeight : 0, g.style.width = h + "px", j.style.width = k + "px";
            for (var n, p = 0, q = $oWoW.Tooltip.moveTests.length; q > p; ++p) {
                m = $oWoW.Tooltip.moveTests[p], n = $oWoW.Tooltip.moveTest(a, b, c, d, e, f, m[0], m[1]);
                break
            }
            g.style.left = n.l + "px", g.style.top = n.t + "px", g.style.visibility = "visible", $oWoW.Tooltip.showSecondary && (j.style.left = n.l + h + "px", j.style.top = n.t + "px", j.style.visibility = "visible")
        }
    },
    moveTest: function (a, b, c, d, e, f, g, h) {
        var i = a,
            j = b,
            l = ($oWoW.Tooltip.tooltip, $oWoW.Tooltip.tooltipTable.offsetWidth),
            m = $oWoW.Tooltip.tooltipTable.offsetHeight,
            o = ($oWoW.Tooltip.tooltip2, $oWoW.Tooltip.showSecondary ? $oWoW.Tooltip.tooltipTable2.offsetWidth : 0),
            p = $oWoW.Tooltip.showSecondary ? $oWoW.Tooltip.tooltipTable2.offsetHeight : 0,
            q = $oWoW.getWindowSize(),
            r = $oWoW.getScroll(),
            s = q.w,
            t = q.h,
            u = r.x,
            v = r.y,
            w = u,
            x = v,
            y = u + s,
            z = v + t;
        return null == g && (g = y >= a + c + l + o), null == h && (h = b - Math.max(m, p) >= x), g ? a += c + e : a = Math.max(a - (l + o), w) - e, h ? b -= Math.max(m, p) + f : b += d + f, w > a ? a = w : a + l + o > y && (a = y - (l + o)), x > b ? b = x : b + Math.max(m, p) > z && (b = Math.max(v, z - Math.max(m, p))), $oWoW.Tooltip.iconVisible && i >= a - 48 && a >= i && j >= b - 4 && b + 48 >= j && (b -= 48 - (j - b)), $oWoW.createRectangle(a, b, l, m)
    },
    show: function (a, b, c, d, e, f) {
        if (!$oWoW.Tooltip.disabled) {
            (!c || 1 > c) && (c = 1), (!d || 1 > d) && (d = 1), e && (b = '<span class="' + e + '">' + b + "</span>");
            var g = $oWoW.ac(a);
            $oWoW.Tooltip.prepare(), $oWoW.Tooltip.set(b, f), $oWoW.Tooltip.move(g.x, g.y, a.offsetWidth, a.offsetHeight, c, d)
        }
    },
    showAtCursor: function (a, b, c, d, e, f) {
        if (!$oWoW.Tooltip.disabled) {
            (!c || 10 > c) && (c = 10), (!d || 10 > d) && (d = 10), e && (b = '<span class="' + e + '">' + b + "</span>", f && (f = '<span class="' + e + '">' + f + "</span>")), a = $oWoW.evt(a);
            var g = $oWoW.getCursorPos(a);
            $oWoW.Tooltip.prepare(), $oWoW.Tooltip.set(b, f), $oWoW.Tooltip.move(g.x, g.y, 0, 0, c, d)
        }
    },
    showAtXY: function (a, b, c, d, e, f) {
        $oWoW.Tooltip.disabled || ($oWoW.Tooltip.prepare(), $oWoW.Tooltip.set(a, f), $oWoW.Tooltip.move(b, c, 0, 0, d, e))
    },
    cursorUpdate: function (a, b, c) {
        if (!$oWoW.Tooltip.disabled && $oWoW.Tooltip.tooltip) {
            a = $oWoW.evt(a), (!b || 10 > b) && (b = 10), (!c || 10 > c) && (c = 10);
            var d = $oWoW.getCursorPos(a);
            $oWoW.Tooltip.move(d.x, d.y, 0, 0, b, c)
        }
    },
    hide: function () {
        $oWoW.Tooltip.tooltip && ($oWoW.Tooltip.tooltip.style.display = "none", $oWoW.Tooltip.tooltip.visibility = "hidden", $oWoW.Tooltip.tooltipTable.className = "", $oWoW.Tooltip.setIcon(null)), $oWoW.Tooltip.tooltip2 && ($oWoW.Tooltip.tooltip2.style.display = "none", $oWoW.Tooltip.tooltip2.visibility = "hidden", $oWoW.Tooltip.tooltipTable2.className = "")
    },
    setIcon: function (a, b) {
        $oWoW.Tooltip.prepare(), b = "undefined" == typeof b ? $oWoW.getDomainFromExpansion(0) : $oWoW.getDomainFromExpansion(b), a ? ($oWoW.Tooltip.icon.style.backgroundImage = "url(//cdn.openwow.com/" + b + "/icons/medium/" + a.toLowerCase() + ".jpg)", $oWoW.Tooltip.icon.style.visibility = "visible") : ($oWoW.Tooltip.icon.style.backgroundImage = "none", $oWoW.Tooltip.icon.style.visibility = "hidden"), $oWoW.Tooltip.iconVisible = a ? 1 : 0
    }
}, $oWoW.isset("$oWoWTooltip") && $oWoWTooltip.init();