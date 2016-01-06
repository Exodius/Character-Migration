var AzthOpenwow = function () {
    this.loadItem = function (currentType, currentId, currentLocale, currentParams, currentExpansion, callback) {
        // do everything after document has been fully load to avoid page freezing
        $(document).ready(function () {
            var t;
            var reqSent = false;
            function _loadItem () {
                // if this function exists, than the $oWoW system has been loaded , otherwise wait for it
                if (!$oWoW.getDomainFromExpansion) {
                    setTimeout(function () {
                        _loadItem();
                    }, 500);

                    return;
                } else {

                    // send request just 1 time
                    if (!reqSent) {
                        $oWoWTooltip.displayTooltip(currentType, currentId, currentLocale, currentParams, currentExpansion);
                        reqSent = true;
                    }

                    // wait that info has been received
                    if (LOOKUPS[currentType][0][currentExpansion][currentId]["icon"]) {
                        callback(LOOKUPS[currentType][0][currentExpansion][currentId]);
                        clearTimeout(t);
                        return;
                    } else {
                        t = setTimeout(_loadItem, 500);
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