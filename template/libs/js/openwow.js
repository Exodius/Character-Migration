var AzthOpenwow = function () {

    var _loaded = false;

    var _bak = $oWoWTooltip.init;

    $oWoWTooltip.init = function () {
        _loaded = true;
        _bak();
    }

    this.loadItem = function (currentType, currentId, currentLocale, currentParams, currentExpansion, callback) {
        var that = this;

        if (_loaded === false) {
            setTimeout(function () {
                that.loadItem(currentType, currentId, currentLocale, currentParams, currentExpansion, callback);
            }, 100);

            return;
        }

        var t;
        function _loadItem () {
            $oWoWTooltip.displayTooltip(currentType, currentId, currentLocale, currentParams, currentExpansion);

            if (LOOKUPS[currentType][0][currentExpansion][currentId]["icon"]) {
                callback(LOOKUPS[currentType][0][currentExpansion][currentId]);
                clearTimeout(t);
                return;
            } else {
                t = setTimeout(_loadItem, 100);
            }
        }

        _loadItem(callback);
    }

    this.loadIcon = function (imgTarget, currentType, currentId, currentLocale, currentParams, currentExpansion) {
        this.loadItem(currentType, currentId, currentLocale, currentParams, currentExpansion, function (item) {
            var img = "";
            if (item["icon"])
                img = "http://cdn.openwow.com/wotlk/icons/medium/" + item["icon"] + ".jpg"

            document.getElementById(imgTarget).src = img;
        });
    }
}