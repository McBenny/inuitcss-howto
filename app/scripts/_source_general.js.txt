//é

var customData = {},
//hDispo = $(window).height(),
//lDispo = $(window).width(),
customFunctions = function () {

/*
    Faux parallax
*/
    fakeParallax = function () {
        var touchDevice = touchDevice !== undefined ? touchDevice : null;
        if (touchDevice !== undefined && !touchDevice) {
// Cas des bandeaux hauts
            $(".soloImg").find(".bandeau").css("top", -scrollTop * 0.33 );
        }
    },


    initIE7 = function () {
        return true;
    },

/*
    This function unmasks the page
*/
    unMask = function () {
        $("#mask").delay(250).fadeOut(250);
    },

/*
    This function inits PrettyPhoto plugin
*/
    initPrettyPhoto = function () {
        if ($.prettyPhoto !== undefined) {
            $(".gallery a[data-rel^='prettyPhoto']")
                .prettyPhoto(
                    {
                        theme: "light_rounded",
                        opacity: 0.6,
                        overlay_gallery: false,
                        default_width: "100%",
                        default_height: "100%",
//                      changepicturecallback:  function () {   // Fires at pop-in opening, kinda callback...
//                                      return true;
//                                  },
//                      callback: function () {
//                                  return true;
//                              },
                        social_tools: "",
                        deeplinking: false  // to avoid #!prettyPhoto/0/ in the url
                    }
                );
        }
    },

/*
    This function inits Cycle plugin
*/
    initCycle = function () {
        if ($.fn.cycle !== undefined) {
            $(".cycle").cycle({
                fx: "turnUp",
                speed: 1500,
                timeout: 5000,
                pause: 1
            });
        }
    },

/*
    This function inits MagnificPopUp plugin
*/
    initMFP = function () {
        if ($.fn.magnificPopup !== undefined) {
            $(".mfp").magnificPopup({
                type: "iframe",
                delegate: "a",
                gallery: {
                            enabled:    true
                        },
                iframe: {
                    patterns: {
                        dailymotion: {
                            index: "dailymotion.com",
                            id: function(url) {
                                    var m = url.match(/^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                                    if (m !== null) {
                                        if (m[4] !== undefined) {
                                            return m[4];
                                        }
                                        return m[2];
                                    }
                                    return null;
                                },
                            src: "http://www.dailymotion.com/embed/video/%id%"
                        }
                    }
                }
            });
        }
    };

// Public elements :
    return {
//      fakeParallax: fakeParallax,
        unMask: unMask,
        jQueryPlugins: {
                        initPrettyPhoto: initPrettyPhoto,
                        initCycle: initCycle,
                        initMFP: initMFP
                    }
    };
}();

$(window).load(function () {
    customFunctions.jQueryPlugins.initPrettyPhoto();
//  customFunctions.jQueryPlugins.initCycle();
//  customFunctions.jQueryPlugins.initMFP();
});

/*
$(window).scroll(function() {
    scrollTop = $(this).scrollTop();
    customFunctions.fakeParallax();
    customFunctions.floatingNav();
});
*/
