<?php
/**
 * This file is required by either like button, share button and comments block files.
 * If you intend to use one of these files, you MUST insert this one before, ideally just after the body tag.
 *
 * @source: https://developers.facebook.com/docs/plugins/
 * @time:   20150729
 */

/**
 * Insert this block just after the body tag if possible.
 * It doesn't generates anything in the page.
 * Insert it only once even if you have several facebook stuff afterwards.
 * 
 * Warning:
 *  The 'appId' parameter MUST be set here:
 *      - /app/assets/config.php#$socials['facebook']['appId']
 */

if (isset($socials['facebook']) && is_array($socials['facebook']) && !empty($socials['facebook']['appId']) && !empty($socials['facebook']['title'])) {
    switch ($languages['active']) {
        case 'ar':
            $locale = 'ar_AR';
            break;
        case 'cn':
            $locale = 'de_DE';
            break;
        case 'de':
            $locale = 'zh_CN';
            break;
        case 'en':
            $locale = 'en_US';
            break;
        case 'es':
            $locale = 'es_ES';
            break;
        case 'fr':
            $locale = 'fr_FR';
            break;
        case 'it':
            $locale = 'it_IT';
            break;
        case 'ja':
            $locale = 'ja_JP';
            break;
        case 'nl':
            $locale = 'nl_NL';
            break;
        case 'pt':
            $locale = 'pt_PT';
            break;
        case 'ru':
            $locale = 'ru_RU';
            break;
        default:
            $locale = 'en_US';
            break;
    }
    $fbLocalData = isset($fbLocalData) ? $fbLocalData : array();

/*
//uncompiled source to be modified then compressed and copied/pasted below

(function (d, s, id) {
    var js,
        fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "http://connect.facebook.net/<?php echo $locale; ?>/sdk.js#xfbml=1&version=v2.4&appId=<?php echo $socials['facebook']['appId']; ?>";
    fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));
 */
?>
<div id="fb-root"></div>
<script type="text/javascript">(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="http://connect.facebook.net/<?php echo $locale; ?>/sdk.js#xfbml=1&version=v2.4&appId=<?php echo $socials['facebook']['appId']; ?>";fjs.parentNode.insertBefore(js,fjs);}(document,"script","facebook-jssdk"));</script>
<?php
}
