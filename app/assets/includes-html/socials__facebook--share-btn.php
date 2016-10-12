<?php
/**
 * The Share button lets people add a personalized message to links before sharing on their timeline, in groups, or to their friends via a Facebook Message.
 *
 * @source: https://developers.facebook.com/docs/plugins/share-button
 * @time:   20150729
 *
 * Warning:
 *      This block requires "socials__facebook--mandatory-tools.php" to be inserted BEFORE (best just after the body tag)
 */

/**
 * Insert this block where you want to display the Facebook Like button.
 *
 * The following parameters must be deleted from this file and inserted into the calling page.
 * None of these parameters is mandatory as there are default values into the mechanic.
 *
 * Warning:
 *  The 'appId' parameter MUST be set somewhere:
 *      - /app/assets/config.php#$socials['facebook']['appId']      preferred
 *      - with your facebook local datas ($fbLocalData['appId'])    last chance
 */

// Parameters to be moved into the calling page
/*$fbLocalData = array(
    'url' => 'http://www.yahoo.fr',
    'layout' => 'icon_link',        //              ICON_LINK | icon | link | button | button_count | box_count
    'font' => 'tahoma',             //              LUCIDA GRANDE | arial | segoe ui | tahoma | trebuchet ms | verdana
    'color' => 'light'              //              LIGHT / dark
);
*/

if (isset($socials['facebook']) && is_array($socials['facebook']) && !empty($socials['facebook']['appId']) && !empty($socials['facebook']['title'])) {
    $fbData = array(
        'url' => isset($fbLocalData['url']) ? $fbLocalData['url'] : "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        'layout' => isset($fbLocalData['layout']) ? $fbLocalData['layout'] : 'icon_link',
        'font' => isset($fbLocalData['font']) ? $fbLocalData['font'] : 'lucida grande',
        'color' => isset($fbLocalData['color']) ? $fbLocalData['color'] : 'light'
    );
?>
<div class="fb-share-button" data-href="<?php echo $fbData['url']; ?>" data-layout="<?php echo $fbData['layout']; ?>" data-font="<?php echo $fbData['font']; ?>" data-colorscheme="<?php echo $fbData['color']; ?>"></div>
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for Facebook share button: appId and/or title.');</script>
<?php
    }
}
unset($fbLocalData, $fbData);
