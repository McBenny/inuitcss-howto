<?php
/* é */
/*
    http://www.w3schools.com/html5/html5_audio.asp
    Support formats :
        IE      ffx     Opera   Chrome  Safari
    Ogg -       3.5+    10.5+   3+      -
    MP3 -       -       -       3+      3+
    Wav -       3.5+    10.5+   -       3+
*/
// Parameters to be moved into the calling page
/*$audioLocalData = array(
    'controls' => true,
    'autoplay' => false,
    'preload' => false,
    'loop' => false,
    'src' => array(
                'mp3' => 'img/tmp/song.mp3',
                'ogg' => 'img/tmp/song.ogg',
                'wav' => 'img/tmp/song.wav'
            ),
    'alt' => ''
);
*/
$audioData = array(
    'controls' => isset($audioLocalData['controls']) && $audioLocalData['controls'] ? ' controls="controls"' : null,
    'autoplay' => isset($audioLocalData['autoplay']) && $audioLocalData['autoplay'] ? ' autoplay="autoplay"' : null,
    'preload' => isset($audioLocalData['preload']) && $audioLocalData['preload'] ? ' preload="preload"' : null,
    'loop' => isset($audioLocalData['loop']) && $audioLocalData['loop'] ? ' loop="loop"' : null,
    'src' => '',
    'alt' => isset($audioLocalData['alt']) ? $audioLocalData['alt'] : $audio__unsupported
);
$audioData['src'] .= isset($audioLocalData['src']['mp3']) && is_file($audioLocalData['src']['mp3']) ? "\t<source src=\"".$audioLocalData['src']['mp3']."\" type=\"audio/mpeg\"></source>\n" : null;
$audioData['src'] .= isset($audioLocalData['src']['ogg']) && is_file($audioLocalData['src']['ogg']) ? "\t<source src=\"".$audioLocalData['src']['ogg']."\" type=\"audio/ogg\"></source>\n" : null;
$audioData['src'] .= isset($audioLocalData['src']['wav']) && is_file($audioLocalData['src']['wav']) ? "\t<source src=\"".$audioLocalData['src']['wav']."\" type=\"audio/x-wav\"></source>\n" : null;

if ($audioData['src'] != '') {
?>
<audio<?php echo $audioData['controls'].$audioData['autoplay'].$audioData['preload'].$audioData['loop']; ?>>
<?php echo $audioData['src']; ?>
    <?php echo $audioData['alt']; ?>
</audio>
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for audio embedding: audio source.');</script>
<?php
    }
}
unset($audioLocalData, $audioData);
