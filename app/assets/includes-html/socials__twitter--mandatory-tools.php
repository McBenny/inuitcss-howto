<?php
/**
 * This file is required by either tweet button, follow button, embedded tweet and timeline.
 * If you intend to use one of these files, you MUST insert this one before, ideally just after the body tag.
 *
 * @source: https://dev.twitter.com/web/javascript/loading
 * @time:   20150803
 */

/**
 * Insert this block just after the body tag if possible.
 * It doesn't generates anything in the page.
 * Insert it only once even if you have several twitter stuff afterwards.
 */

/*
//uncompiled source to be modified then compressed and copied/pasted below

<script type="text/javascript">window.twttr = (function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
        t._e.push(f);
    };

    return t;
}(document, "script", "twitter-wjs"));</script>
 */
?>
<script type="text/javascript">window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
<?php
}
