<?php
/**
 * The Follow button is a small button displayed on your websites to help users easily follow a Twitter account.
 *
 * @source: https://dev.twitter.com/web/follow-button
 * @time:   20150803
 *
 * Warning:
 *      This include requires "socials__twitter--mandatory-tools.php" to be inserted BEFORE
 */

/**
 * Insert this block where you want to display the Twitter Follow button.
 *
 * The following parameters must be deleted from this file and inserted into the calling page.
 * None of these parameters is mandatory as there are default values into the mechanic.
 * 
 * Warning:
 *  The 'screen-name' parameter MUST be set somewhere:
 *      - /app/assets/config.php#$socials['twitter']['screen-name']             preferred
 *      - with your twitter local datas ($twLocalData['screen-name'])   last chance
 */

// Parameters to be moved into the calling page
/*$twLocalData = array(
    'screen-name' => 'accountName', //              any Twitter account

    'size' => 'large',              //              null | large    h:20px | h:28px
    'show-count' => false,          //              TRUE | false
    'show-screen-name' => false,    //              TRUE | false
    'lang' => 'es',                 //              EN | fr | es | ...
    'dnt' => false                  //              TRUE | false
);
*/

$twData = array(
    'screen-name' => isset($twLocalData['screen-name']) ? $twLocalData['screen-name'] : (isset($socials['twitter']) && isset($socials['twitter']['screen-name']) ? $socials['twitter']['screen-name'] : null),

    'size' => isset($twLocalData['size']) && in_array($twLocalData['size'], array('large')) ? ' data-size="'.$twLocalData['size'].'"' : null,
    'show-count' => isset($twLocalData['show-count']) && !$twLocalData['show-count'] ? ' data-show-count="false"' : null,
    'show-screen-name' => isset($twLocalData['show-screen-name']) && !$twLocalData['show-screen-name'] ? ' data-show-screen-name="false"' : null,
    'lang' => isset($twLocalData['lang']) && in_array($twLocalData['lang'], $languages['list']) ? ' data-lang="'.$twLocalData['lang'].'"' : ' data-lang="'.$languages['active'].'"',
    'dnt' => isset($twLocalData['dnt']) && !$twLocalData['dnt'] ? null : ' data-dnt="true"'
);

if ($twData['screen-name'] != null) {
?>
<a class="twitter-follow-button" href="https://twitter.com/<?php echo $twData['screen-name']; ?>"<?php echo $twData['size'].$twData['show-count'].$twData['show-screen-name'].$twData['lang'].$twData['dnt']; ?>>Follow</a>
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for Twitter Follow button: screen-name.');</script>
<?php
    }
}
unset($twLocalData, $twData);
