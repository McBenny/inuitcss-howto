<?php
/**
 * The Comments plugin lets people comment on content on your site using their Facebook account.
 * If people wish to they can share this activity to their friends and friends of friends in News Feed as well.
 * It also contains built-in moderation tools and special social relevance ranking.
 *
 * @source: https://developers.facebook.com/docs/plugins/comments
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
 *
 * Warning:
 *  The 'appId' parameter MUST be set somewhere:
 *      - /app/assets/config.php#$socials['facebook']['appId']      preferred
 *      - with your facebook local datas ($fbLocalData['appId'])    last chance
 */

// Parameters to be moved into the calling page
/*$fbLocalData = array(
    'url' => 'http://www.yahoo.fr',
    'numberPosts' => 1,             //              5
    'count' => true,                //              FALSE   displays the total count of comments
    'order' => 'time',              //              SOCIAL | time | reverse_time
    'width' => 300,                 //              550
    'font' => 'tahoma',             //              LUCIDA GRANDE | arial | segoe ui | tahoma | trebuchet ms | verdana
    'color' => 'light'              //              LIGHT / dark
);
*/

if (isset($socials['facebook']) && is_array($socials['facebook']) && !empty($socials['facebook']['appId']) && !empty($socials['facebook']['title'])) {
    $fbData = array(
        'url' => isset($fbLocalData['url']) ? $fbLocalData['url'] : "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        'numberPosts' => isset($fbLocalData['numberPosts']) ? $fbLocalData['numberPosts'] : 5,
        'count' => isset($fbLocalData['count']) ? $fbLocalData['count'] : false,
        'order' => isset($fbLocalData['order']) ? $fbLocalData['order'] : 'social',
        'width' => isset($fbLocalData['width']) ? $fbLocalData['width'] : 550,
        'font' => isset($fbLocalData['font']) ? $fbLocalData['font'] : 'lucida grande',
        'color' => isset($fbLocalData['color']) ? $fbLocalData['color'] : 'light'
    );
    if ($fbData['count'] == true) {
?>
<span class="fb-comments-count" data-href="<?php echo $fbData['url']; ?>"></span>
<?php
    }
?>
<div class="fb-comments" data-href="<?php echo $fbData['url']; ?>" data-numposts="<?php echo $fbData['numberPosts']; ?>" data-order-by="<?php echo $fbData['order']; ?>" data-width="<?php echo $fbData['width']; ?>" data-font="<?php echo $fbData['font']; ?>" data-colorscheme="<?php echo $fbData['color']; ?>"></div>
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for Facebook comments block: appId and/or title.');</script>
<?php
    }
}
unset($fbLocalData, $fbData);
