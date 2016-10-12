<?php
/* é */
/**
 * Supported formats : https://developer.mozilla.org/en-US/docs/Web/HTML/Supported_media_formats
 */
// Parameters to be moved into the calling page
/*$videoLocalData = array(
    'width' => 192,
    'height' => 144,
    'controls' => false,
    'autoplay' => true,
    'preload' => true,
    'loop' => true,
    'mute' => false,
    'poster' => 'images/poster.jpg',
    'src' => array(
        'mp4' => 'images/movie.mp4',
        'webm' => 'images/movie.webm',
        'ogg' => 'images/movie.ogg',
    ),
    'alt' => '',
    'playerswf' => 'images/movie.swf',
    'playerBackground' => '#f00'
);
*/

$videoData = array(
    'width' => isset($videoLocalData['width']) && is_numeric($videoLocalData['width']) ? ' width="'.$videoLocalData['width'].'"' : null,
    'height' => isset($videoLocalData['height']) && is_numeric($videoLocalData['height']) ? ' height="'.$videoLocalData['height'].'"' : null,
    'controls' => isset($videoLocalData['controls']) && !$videoLocalData['controls'] ? null : ' controls="controls"',
    'autoplay' => isset($videoLocalData['autoplay']) && $videoLocalData['autoplay'] ? ' autoplay="autoplay"' : null,
    'preload' => isset($videoLocalData['preload']) && $videoLocalData['preload'] ? ' preload="preload"' : null,
    'loop' => isset($videoLocalData['loop']) && $videoLocalData['loop'] ? ' loop="loop"' : null,
    'mute' => isset($videoLocalData['mute']) && $videoLocalData['mute'] ? ' muted="muted"' : null,
    'poster' => isset($videoLocalData['poster']) && is_file($videoLocalData['poster']) ? ' poster="'.$videoLocalData['poster'].'"' : null,
    'src' => '',
    'alt' => isset($videoLocalData['alt']) ? $videoLocalData['alt'] : $video__unsupported,
    'playerswf' => isset($videoLocalData['playerswf']) && is_file($videoLocalData['playerswf']) ? $videoLocalData['playerswf'] : null,
    'playerBackground' => isset($videoLocalData['playerBackground']) && ($videoLocalData['playerBackground'] != '' && $videoLocalData['playerBackground'] != 'transparent' && $videoLocalData['playerBackground'] != 'window') ? "<param name=\"bgColor\" value=\"".$videoLocalData['playerBackground']."\" />\n" : "<param name=\"wmode\" value=\"transparent\" />\n"
);
$videoData['src'] .= isset($videoLocalData['src']['mp4']) && is_file($videoLocalData['src']['mp4']) ? "\t<source src=\"".$videoLocalData['src']['mp4']."\" type=\"video/mp4\">\n" : null;
$videoData['src'] .= isset($videoLocalData['src']['webm']) && is_file($videoLocalData['src']['webm']) ? "\t<source src=\"".$videoLocalData['src']['webm']."\" type=\"video/webm\">\n" : null;
$videoData['src'] .= isset($videoLocalData['src']['ogg']) && is_file($videoLocalData['src']['ogg']) ? "\t<source src=\"".$videoLocalData['src']['ogg']."\" type=\"video/ogg\">\n" : null;

if ($videoData['src'] != '') {
?>
<video<?php echo $videoData['width'].$videoData['height'].$videoData['controls'].$videoData['autoplay'].$videoData['loop'].$videoData['mute'].$videoData['poster'].$videoData['preload']; ?>>
<?php echo $videoData['src']; ?>
<?php
}
if ($videoData['playerswf'] != null) {
// Code dedicated to old Internet Explorer
    $videoData['playerWidth'] = $videoData['width'] != null ? $videoLocalData['width'] : null;
    $videoData['playerHeight'] = $videoData['height'] != null ? $videoLocalData['height'] : null;
    $videoData['playerAutoplay'] = $videoData['autoplay'] != null ? true : false;
    $videoData['playerLoop'] = $videoData['loop'] != null ? true : false;
    $videoData['playerPoster'] = $videoData['poster'] != null ? $videoLocalData['poster'] : null;
?>
    <object type="application/x-shockwave-flash" data="<?php echo $videoData['playerswf']; ?>" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="<?php echo $videoData['playerWidth']; ?>" height="<?php echo $videoData['playerHeight']; ?>">
        <param name="movie" value="<?php echo $videoData['playerswf']; ?>" />
        <param name="flashvars" value="autostart=<?php echo $videoData['playerAutoplay']; ?>&amp;controlbar=over&amp;image=<?php echo $videoData['playerPoster']; ?>&amp;file=<?php echo $videoLocalData['src']['mp4']; ?>" />
        <param name="quality" value="high" />
        <param name="loop" value="<?php echo $videoData['playerLoop']; ?>" />
        <?php echo $videoData['playerBackground']; ?>
        <param name="scale" value="showall" />
        <param name="menu" value="false" />
        <param name="devicefont" value="false" />
        <param name="allowScriptAccess" value="sameDomain" />
<?php
// Code dedicated to others
?>      <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="<?php echo $videoData['playerswf']; ?>" width="<?php echo $videoData['playerWidth']; ?>" height="<?php echo $videoData['playerHeight']; ?>">
            <param name="movie" value="<?php echo $videoData['playerswf']; ?>" />
            <param name="flashvars" value="autostart=<?php echo $videoData['playerAutoplay']; ?>&amp;controlbar=over&amp;image=<?php echo $videoData['playerPoster']; ?>&amp;file=<?php echo $videoLocalData['src']['mp4']; ?>" />
            <param name="quality" value="high" />
            <param name="loop" value="<?php echo $videoData['playerLoop']; ?>" />
            <?php echo $videoData['playerBackground']; ?>
            <param name="scale" value="showall" />
            <param name="menu" value="false" />
            <param name="devicefont" value="false" />
            <param name="allowScriptAccess" value="sameDomain" />
        <!--<![endif]-->
            <?php echo $videoData['alt']; ?>
        <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
    </object>
<?php
}
if ($videoData['src'] != '') {
?>
</video>
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for video embedding: video source.');</script>
<?php
    }
}
unset($videoLocalData, $videoData);
