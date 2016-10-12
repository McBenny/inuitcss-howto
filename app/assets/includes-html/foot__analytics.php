<?php
/**
 * Analytics.js is a JavaScript library for measuring how users interact with your website.
 * 
 * https://developers.google.com/analytics/devguides/collection/analyticsjs/
 * 20150731
 *
 * Warning:
 *  The 'url' and 'ua' parameters MUST be set here:
 *      - /app/assets/config.php#$googleAnalytics['url']
 *      - /app/assets/config.php#$googleAnalytics['ua']
 *      
 * When sending hits, you can also override the data that is sent. Use the $gaLocalData to do this.
 * 
 */

// Parameters to be moved into the calling page
/*$gaLocalData = array(
    'complement' => array(
        array(
            'name' => 'aField',
            'value' => 'aValue'
        ),
        array(
            'name' => 'anotherField',
            'value' => 'anotherValue'
        ),
    )
);
*/

if (isset($googleAnalytics) && isset($googleAnalytics['url']) && isset($googleAnalytics['ua'])) {
    $gaData = array(
        'url' => $googleAnalytics['url'],
        'ua' => $googleAnalytics['ua'],
        'complement' => ''
    );
    if (isset($gaLocalData) && isset($gaLocalData['complement']) && count($gaLocalData['complement']) > 0) {
        $gaData['complement'] = '{';
        foreach ($gaLocalData['complement'] as $key => $value) {
            $gaData['complement'] .= $value['name'].': '.$value['value'].',';
        }
        $gaData['complement'] = trim($gaData['complement'], ',');
        $gaData['complement'] = ', '.$gaData['complement'].'}';
    }

/*
//uncompiled source to be modified then compressed and copied/pasted below

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','<?php echo $gaData['url']; ?>','ga');

ga('create', '<?php echo $gaData['ua']; ?>', 'auto');
ga('send', 'pageview'<?php echo $gaData['complement']; ?>);

</script>
<!-- End Google Analytics -->
 */
?>
<!-- Google Analytics -->
<script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','<?php echo $gaData['url']; ?>','ga');ga('create', '<?php echo $gaData['ua']; ?>', 'auto');ga('send', 'pageview'<?php echo $gaData['complement']; ?>);</script>
<!-- End Google Analytics -->
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for Google Analytics: url and/or ua.');</script>
<?php
    }
}
unset($gaLocalData, $gaData);
