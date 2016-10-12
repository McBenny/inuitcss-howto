<?php
/**
 * The Like button is the quickest way for people to share content with their friends.
 * 
 * A single click on the Like button will 'like' pieces of content on the web and share them on Facebook.
 * You can also display a Share button next to the Like button to let people add a personal message and customize who they share with.
 *
 * @source: https://developers.facebook.com/docs/plugins/like-button
 * @time:   20150729
 *
 * Warning:
 *      This include requires "socials__facebook--mandatory-tools.php" to be inserted BEFORE (best just after the body tag)
 */

/**
 * Insert this block where you want to display the Facebook Like button.
 *
 * The following parameters must be deleted from this file and inserted into the calling page.
 * None of these parameters is mandatory as there are default values into the mechanic.
 */

// Parameters to be moved into the calling page
/*$fbLocalData = array(
    'action' => 'like',             //              LIKE | recommend
    'url' => 'http://www.yahoo.fr', //  
    'layout' => 'standard',         //              STANDARD | button | button_count | box_count
    'width' => 380,                 //              works only with 'layout' = 'standard'
                                                    //  450 | min-width = 225
                                                    //  height = 35 | height = 80 (with faces)
    'faces' => 'false',             //              false
    'font' => 'segoe ui',           //              LUCIDA GRANDE | arial | segoe ui | tahoma | trebuchet ms | verdana
    'share' => 'false',             //              false
    'color' => 'light'              //              LIGHT / dark
);
*/

if (isset($socials['facebook']) && is_array($socials['facebook']) && !empty($socials['facebook']['appId']) && !empty($socials['facebook']['title'])) {
    $fbData = array(
        'action' => isset($fbLocalData['action']) ? $fbLocalData['action'] : 'like',
        'url' => isset($fbLocalData['url']) ? $fbLocalData['url'] : "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        'layout' => isset($fbLocalData['layout']) ? $fbLocalData['layout'] : 'standard',
        'faces' => isset($fbLocalData['faces']) ? $fbLocalData['faces'] : 'false',
        'font' => isset($fbLocalData['font']) ? $fbLocalData['font'] : 'lucida grande',
        'share' => isset($fbLocalData['share']) ? $fbLocalData['share'] : 'false',
        'color' => isset($fbLocalData['color']) ? $fbLocalData['color'] : 'light'
    );
    $fbData['layoutDetails'] = $fbData['layout'] == 'standard' ? (isset($fbLocalData['width']) ? (isset($fbLocalData['height']) ? " data-width=\"".$fbLocalData['width']."\" data-height=\"".$fbLocalData['height']."\"" : " data-width=\"".$fbLocalData['width']."\"") : (isset($fbLocalData['height']) ? " data-height=\"".$fbLocalData['height']."\"" : null)) : null;
?>
<div class="fb-like" data-href="<?php echo $fbData['url']; ?>" data-layout="<?php echo $fbData['layout']; ?>"<?php echo $fbData['layoutDetails']; ?> data-action="<?php echo $fbData['action']; ?>" data-show-faces="<?php echo $fbData['faces']; ?>" data-share="<?php echo $fbData['share']; ?>" data-font="<?php echo $fbData['font']; ?>" data-colorscheme="<?php echo $fbData['color']; ?>"></div>
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for Facebook like button: appId and/or title.');</script>
<?php
    }
}
unset($fbLocalData, $fbData);
