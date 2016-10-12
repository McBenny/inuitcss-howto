<?php
/**
 * Embedded timelines are an easy way to embed multiple Tweets on your website in a compact, single-column view.
 * Display the latest Tweets from a single Twitter account, multiple accounts, or tap into the worldwide conversation around a topic grouped in a search result.
 *
 * @source: https://dev.twitter.com/web/embedded-timelines
 * @time:   20150803
 *
 * Warning:
 *      This include requires "socials__twitter--mandatory-tools.php" to be inserted BEFORE
 */

/**
 * Insert this block where you want to display the Tweet.
 *
 * The following parameters must be deleted from this file and inserted into the calling page.
 * None of these parameters but one is mandatory as there are default values into the mechanic.
 *
 * Mandatory parameter:
 *  The 'widget-id' parameter MUST be set:
 *      1) Create a source for your timeline:
 *          => Go to: https://twitter.com/settings/widgets/new (being logged-in)
 *          => [Create a widget]
 *      2) Get the widget id in the source displayed under the example presentation (it will also be present into the URL bar)
 *      3) Insert it into /app/assets/config.php#$socials['twitter']['widget-id'] (preferred) or in the $twLocalData['widget-id'].
 * 
 * Warning:
 *  The 'screen-name' parameter MUST be set somewhere:
 *      - /app/assets/config.php#$socials['twitter']['screen-name']     preferred
 *      - with your twitter local datas ($twLocalData['screen-name'])   last chance
 */

// Parameters to be moved into the calling page
$twLocalData = array(
//  'screen-name' => 'accountName',         //              any Twitter account
//  'widget-id' => '628202967171264512',    //              the widget id generated
    'tweet-limit' => 2,                     //              any number between 1 and 20

    'width' => 260,                         //              NULL = 520 | 250 < x < 550
    'height' => 260,                        //              NULL = 600 | 250 < x < 550
            'alignment' => 'right',                 //              LEFT | center | right       works only from the online settings
    'theme' => 'dark',                      //              LIGHT | dark
    'link-color' => '#ff0000',              //              Defaults to #0084b4 (light theme) / #87c2ed (dark theme) | any hexadecimal color code
            'cards' => 'hidden',                    //              HIDDEN | ?                  works only from the online settings
    'noheader' => true,                     //              FALSE | true
    'nofooter' => true,                     //              FALSE | true
    'noborders' => true,                    //              FALSE | true
    'noscrollbar' => true,                  //              FALSE | true
    'transparent' => true,                  //              FALSE | true
    'lang' => 'fr',                         //              EN | fr | es | ...
    'dnt' => false                          //              TRUE | false
);

$twData = array(
    'screen-name' => isset($twLocalData['screen-name']) ? $twLocalData['screen-name'] : (isset($socials['twitter']) && isset($socials['twitter']['screen-name']) ? $socials['twitter']['screen-name'] : null),
    'widget-id' => isset($twLocalData['widget-id']) ? ' data-widget-id="'.$twLocalData['widget-id'].'"' : (isset($socials['twitter']) && isset($socials['twitter']['widget-id']) ? ' data-widget-id="'.$twLocalData['widget-id'].'"' : null),
    'tweet-limit' => isset($twLocalData['tweet-limit']) ? ' data-tweet-limit="'.$twLocalData['tweet-limit'].'"' : null,

    'width' => isset($twLocalData['width']) ? ' width="'.$twLocalData['width'].'"' : null,
    'height' => isset($twLocalData['height']) ? ' height="'.$twLocalData['height'].'"' : null,
            'alignment' => isset($twLocalData['alignment']) && in_array($twLocalData['alignment'], array('left', 'center', 'right')) ? ' data-alignment="'.$twLocalData['alignment'].'"' : null,
    'theme' => isset($twLocalData['theme']) && in_array($twLocalData['theme'], array('light', 'dark')) ? ' data-theme="'.$twLocalData['theme'].'"' : null,
    'link-color' => isset($twLocalData['link-color']) ? ' data-link-color="'.$twLocalData['link-color'].'"' : null,
            'cards' => isset($twLocalData['cards']) && $twLocalData['cards'] == 'hidden' ? ' data-cards="'.$twLocalData['cards'].'"' : null,
    'chrome' => '',
    'noheader' => isset($twLocalData['noheader']) && $twLocalData['noheader'] ? ' noheader' : null,
    'nofooter' => isset($twLocalData['nofooter']) && $twLocalData['nofooter'] ? ' nofooter' : null,
    'noborders' => isset($twLocalData['noborders']) && $twLocalData['noborders'] ? ' noborders' : null,
    'noscrollbar' => isset($twLocalData['noscrollbar']) && $twLocalData['noscrollbar'] ? ' noscrollbar' : null,
    'transparent' => isset($twLocalData['transparent']) && $twLocalData['transparent'] ? ' transparent' : null,
    'lang' => isset($twLocalData['lang']) && in_array($twLocalData['lang'], $languages['list']) ? ' data-lang="'.$twLocalData['lang'].'"' : ' data-lang="'.$languages['active'].'"',
    'dnt' => isset($twLocalData['dnt']) && !$twLocalData['dnt'] ? null : ' data-dnt="true"'
);
$twData['chrome'] = ' data-chrome="'.trim($twData['noheader'].$twData['nofooter'].$twData['noborders'].$twData['noscrollbar'].$twData['transparent']).'"';

if ($twData['screen-name'] != null && $twData['widget-id'] != null) {
?>

<a class="twitter-timeline" href="https://twitter.com/<?php echo $twData['screen-name']; ?>"<?php echo $twData['widget-id'].$twData['tweet-limit'].$twData['width'].$twData['height'].$twData['alignment'].$twData['theme'].$twData['link-color'].$twData['chrome'].$twData['cards'].$twData['lang'].$twData['dnt']; ?>>Tweets de @<?php echo $twData['screen-name']; ?></a>
<?php
} else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters missing for Twitter timeline: screen-name and/or widget-id.');</script>
<?php
    }
}
unset($twLocalData, $twData);
