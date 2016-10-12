<?php
/**
 * The Tweet button is a small button displayed on your website to help viewers easily share your content on Twitter.
 *
 * @source: https://dev.twitter.com/web/tweet-button
 * @time:   20150803
 *
 * Warning:
 *      This include requires "socials__twitter--mandatory-tools.php" to be inserted BEFORE
 */

/**
 * Insert this block where you want to display the Twitter Tweet button.
 *
 * The following parameters must be deleted from this file and inserted into the calling page.
 * None of these parameters is mandatory as there are default values into the mechanic.
 */

// Parameters to be moved into the calling page
/*$twLocalData = array(
    'text' => 'Your Message',       //              TITLE OF THE PAGE | The message to tweet
    'url' => 'http://www.yahoo.fr', //              URL OF THE PAGE | The URL to tweet
    'hashtags' => 'tag1,tag2',      //              The hashtags to add to the message
    'via' => 'twitterUser',         //              any Twitter user account

    'size' => 'large',              //              null | large    h:20px | h:28px
    'alignment' => 'right',         //              LEFT | right
    'count' => 'none',              //              NULL | none | vertical
    'lang' => 'en'                  //              EN | fr | es | ...
    'dnt' => false                  //              FALSE | true
);
*/

$twData = array(
    'text' => isset($twLocalData['text']) ? ' data-text="'.$twLocalData['text'].'"' : null,
    'url' => isset($twLocalData['url']) ? ' data-url="'.$twLocalData['url'].'"' : null,
    'hashtags' => isset($twLocalData['hashtags']) ? ' data-hashtags="'.$twLocalData['hashtags'].'"' : null,
    'via' => isset($twLocalData['via']) ? ' data-via="'.$twLocalData['via'].'"' : null,

    'size' => isset($twLocalData['size']) && in_array($twLocalData['size'], array('large')) ? ' data-size="'.$twLocalData['size'].'"' : null,
    'alignment' => isset($twLocalData['alignment']) && in_array($twLocalData['alignment'], array('left', 'right')) ? ' data-alignment="'.$twLocalData['alignment'].'"' : null,
    'count' => isset($twLocalData['count']) && in_array($twLocalData['count'], array('none', 'vertical')) ? ' data-count="'.$twLocalData['count'].'"' : null,
    'lang' => isset($twLocalData['lang']) && in_array($twLocalData['lang'], $languages['list']) ? ' data-lang="'.$twLocalData['lang'].'"' : null,
    'dnt' => isset($twLocalData['dnt']) && !$twLocalData['dnt'] ? null : ' data-dnt="true"'
);
?>
<a class="twitter-share-button" href="https://twitter.com/intent/tweet"<?php echo $twData['text'].$twData['url'].$twData['hashtags'].$twData['via'].$twData['size'].$twData['alignment'].$twData['count'].$twData['lang'].$twData['dnt']; ?>>Tweet</a>
<?php
unset($twLocalData, $twData);
