<?php
/**
 * api: https://developers.google.com/youtube/player_parameters
 * iframe: https://support.google.com/youtube/answer/171780
 * 20150731
 */
// Parameters to be moved into the calling page
/*$ytLocalData = array(
    'mode' => 'iframe',     //  API | iframe
    'width' => 768,         //  api-mode: Defaults to initial width or ratio if height is set
                            //  iframe-mode: Defaults to 200
    'height' => null,       //  api-mode: Defaults to initial height or ratio if width is set
                            //  iframe-mode: Defaults to 113
    'controls' => false,    //  Defaults to true
    'title' => false,       //  Defaults to true
    'suggested' => true,    //  Defaults to false

    'autoplay' => true,     //  Defaults to false (only in api mode)

    'privacy' => false,     //  Defaults to true (only in iframe mode)
    'fullscreen' => false,  //  Defaults to true (only in iframe mode)

    'id' => 'U4VxBVmbsao'
);
*/
$ytData = array(
    'mode' => isset($ytLocalData['mode']) && in_array($ytLocalData['mode'], array('api', 'iframe')) ? $ytLocalData['mode'] : 'api',
    'width' => isset($ytLocalData['width']) && $ytLocalData['width'] ? 'width: "'.$ytLocalData['width'].'",' : null,
    'height' => isset($ytLocalData['height']) && $ytLocalData['height'] ? 'height: "'.$ytLocalData['height'].'",' : null,
    'controls' => isset($ytLocalData['controls']) && !$ytLocalData['controls'] ? 0 : 1,
    'title' => isset($ytLocalData['title']) && !$ytLocalData['title'] ? 0 : 1,
    'suggested' => isset($ytLocalData['suggested']) && $ytLocalData['suggested'] ? 1 : 0,

    'autoplay' => isset($ytLocalData['autoplay']) && $ytLocalData['autoplay'] ? 1 : 0,

    'privacy' => isset($ytLocalData['privacy']) && !$ytLocalData['privacy'] ? null : '-nocookie',
    'fullscreen' => isset($ytLocalData['fullscreen']) && !$ytLocalData['fullscreen'] ? null : ' allowfullscreen',

    'id' => isset($ytLocalData['id']) ? $ytLocalData['id'] : null
);

if ($ytData['id'] != '') {
    if ($ytData['mode'] == 'api') {
?>
<div id="ytplayer"></div>

<script type="text/javascript">
// Load the IFrame Player API code asynchronously.
var tag = document.createElement("script"),
    firstScriptTag = document.getElementsByTagName("script")[0],
    player;
tag.src = "https://www.youtube.com/player_api";
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
function onYouTubePlayerAPIReady () {
    player = new YT.Player("ytplayer", {
        <?php echo $ytData['width']; ?>
        <?php echo $ytData['height']; ?>
        controls: <?php echo $ytData['controls']; ?>,
        showinfo: <?php echo $ytData['title']; ?>,
        rel: <?php echo $ytData['suggested']; ?>,
        autoplay: <?php echo $ytData['autoplay']; ?>,
        videoId: "<?php echo $ytData['id']; ?>"
    });
}
</script>
<?php
    } else {
        $ytData['width'] = isset($ytLocalData['width']) && $ytLocalData['width'] ? ' width="'.$ytLocalData['width'].'"' : null;
        $ytData['height'] = isset($ytLocalData['height']) && $ytLocalData['height'] ? ' height="'.$ytLocalData['height'].'"' : null;
        $ytData['controls'] = $ytData['controls'] ? null : '&amp;controls=0';
        $ytData['title'] = $ytData['title'] ? null : '&amp;showinfo=0';
        $ytData['suggested'] = $ytData['suggested'] ? null : '&amp;rel=0';
        $ytData['autoplay'] = $ytData['autoplay'] ? '&amp;autoplay=1' : null;
?>
<iframe<?php echo $ytData['width'].$ytData['height']; ?> src="https://www.youtube<?php echo $ytData['privacy']; ?>.com/embed/<?php echo $ytData['id']; ?>?<?php echo $ytData['controls'].$ytData['autoplay'].$ytData['title'].$ytData['suggested']; ?>" frameborder="0"<?php echo $ytData['fullscreen']; ?>></iframe>
<?php
    }
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for Youtube video embedding: video id.');</script>
<?php
    }
}
unset($ytLocalData, $ytData);
