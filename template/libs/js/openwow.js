var AzthOpenwow = function () {
    // [CONSTRUCTOR]

    // [/CONSTRUCTOR]

    this.loadItem = function (currentType, currentId, currentLocale, currentParams, currentExpansion, callback) {
        // do everything after document has been fully load to avoid page freezing
        $(document).ready(function () {
            //var t;

            AzthOpenwow.register(currentId, currentType, true, function () {
                var e = LOOKUPS[currentType][0][currentExpansion][currentId];

                // wait that info has been received
                if (e["icon"]) {
                    callback(LOOKUPS[currentType][0][currentExpansion][currentId]);
                    return;
                }
            });

            var reqSent = false;
            function _loadItem () {
                // if this function exists, than the $oWoW system has been loaded , otherwise wait for it
                if (!$oWoW.getDomainFromExpansion) { // rerely happens
                    setTimeout(function () {
                        _loadItem();
                    }, 100);

                    return;
                } else {
                    // send request just 1 time
                    if (!reqSent && (!LOOKUPS[currentType][0][currentExpansion] || !LOOKUPS[currentType][0][currentExpansion][currentId])) {
                        $oWoWTooltip.displayTooltip(currentType, currentId, currentLocale, currentParams, currentExpansion);
                        reqSent = true;
                    }
                }
            }

            _loadItem();
        });
    };

    this.loadIcon = function (imgTarget, currentType, currentId, currentLocale, currentParams, currentExpansion) {
        this.loadItem(currentType, currentId, currentLocale, currentParams, currentExpansion, function (item) {
            var img = "";
            if (item["icon"])
                img = "http://cdn.openwow.com/wotlk/icons/medium/" + item["icon"] + ".jpg";

            document.getElementById(imgTarget).src = img.toLowerCase();
        });
    };
};

AzthOpenwow._listening = new Array();

AzthOpenwow.STATUS_NONE = 0;
AzthOpenwow.STATUS_QUERYING = 1;
AzthOpenwow.STATUS_ERROR = 2;
AzthOpenwow.STATUS_NOTFOUND = 3;
AzthOpenwow.STATUS_OK = 4;
AzthOpenwow.STATUS_SCALES = 5;
AzthOpenwow.STATUS_INVALID = 6;
AzthOpenwow.TYPE_NPC = 1;
AzthOpenwow.TYPE_OBJECT = 2;
AzthOpenwow.TYPE_ITEM = 3;
AzthOpenwow.TYPE_QUEST = 5;
AzthOpenwow.TYPE_SPELL = 6;
AzthOpenwow.TYPE_ACHIEVEMENT = 10;

AzthOpenwow.notify = function (id, type) {
    if (!AzthOpenwow._listening[id + '-' + type]) {
        AzthOpenwow._listening[id + '-' + type] = {};
        AzthOpenwow._listening[id + '-' + type]["func"] = new Array();
        AzthOpenwow._listening[id + '-' + type]["firstNotify"] = true;
    }

    if (AzthOpenwow._listening[id + '-' + type]["func"].length > 0) {
        for (var key in AzthOpenwow._listening[id + '-' + type]["func"]) {
            AzthOpenwow._listening[id + '-' + type]["func"][key].call();
        }
    }
};

AzthOpenwow.register = function (id, type, directNotify, cb) {
    if (!AzthOpenwow._listening[id + '-' + type]) {
        AzthOpenwow._listening[id + '-' + type] = {};
        AzthOpenwow._listening[id + '-' + type]["func"] = new Array();
    }

    if (directNotify && AzthOpenwow._listening[id + '-' + type]["firstNotify"] == true) {
        cb();
    } else {
        AzthOpenwow._listening[id + '-' + type]["func"].push(cb);
    }

};

// listener code injection

AzthOpenwow._regNpc = $oWoWTooltip.regNpc;
$oWoWTooltip.regNpc = function (id, locale, json, expansion) {
    AzthOpenwow._regNpc.call($oWoWTooltip, id, locale, json, expansion);

    AzthOpenwow.notify(id, AzthOpenwow.TYPE_NPC);
};

AzthOpenwow._regObject = $oWoWTooltip.regObject;
$oWoWTooltip.regObject = function (id, locale, json, expansion) {
    AzthOpenwow._regObject.call($oWoWTooltip, id, locale, json, expansion);

    AzthOpenwow.notify(id, AzthOpenwow.TYPE_OBJECT);
};

AzthOpenwow._regItem = $oWoWTooltip.regItem;
$oWoWTooltip.regItem = function (id, locale, json, expansion) {
    AzthOpenwow._regItem.call($oWoWTooltip, id, locale, json, expansion);

    AzthOpenwow.notify(id, AzthOpenwow.TYPE_ITEM);
};

AzthOpenwow._regQuest = $oWoWTooltip.regQuest;
$oWoWTooltip.regQuest = function (id, locale, json, expansion) {
    AzthOpenwow._regQuest.call($oWoWTooltip, id, locale, json, expansion);

    AzthOpenwow.notify(id, AzthOpenwow.TYPE_QUEST);
};

AzthOpenwow._regSpell = $oWoWTooltip.regSpell;
$oWoWTooltip.regSpell = function (id, locale, json, expansion) {
    AzthOpenwow._regSpell.call($oWoWTooltip, id, locale, json, expansion);

    AzthOpenwow.notify(id, AzthOpenwow.TYPE_SPELL);
};

AzthOpenwow._regAchievement = $oWoWTooltip.regAchievement;
$oWoWTooltip.regAchievement = function (id, locale, json, expansion) {
    AzthOpenwow._regAchievement.call($oWoWTooltip, id, locale, json, expansion);

    AzthOpenwow.notify(id, AzthOpenwow.TYPE_ACHIEVEMENT);
};

    