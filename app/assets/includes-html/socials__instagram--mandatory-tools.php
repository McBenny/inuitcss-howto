<?php
/**
 * This file is required to embed and Instragam flow.
 * If you intend to use one, you MUST insert this at the very end of the page, after the javascript calls.
 *
 * @source: https://instagram.com/developer/
 * @time:   20150804
 *
 *  1) Register
 *  Instagram will assign you an OAuth client_id and client_secret for each of your applications.
 * 
 *  2) Authenticate
 *  Have our user authenticate and authorize your application with Instagram.
 * 
 *  3) Start making requests!
 *  Make requests to our API Endpoints with your authenticated OAuth credentials.
 */

/**
 * Insert this block at the very end of the page, after the javascript calls.
 * It doesn't generates anything in the page.
 * 
 * The following parameters must be deleted from this file and inserted into the calling page.
 * None of these parameters is mandatory as there are default values into the mechanic.
 *
 * Warning:
 *  The 'client_id' parameter MUST be set here:
 *      - /app/assets/config.php#$socials['instagram']['client_id']     preferred
 *      - with your instagram local datas ($imLocalData['client_id'])   last chance
 */

// Parameters to be moved into the calling page
$imLocalData = array(
    'type' => 'tagname',                                //  USERNAME | tagname
//  'client_id' => '96b797d00ead490f8a471e7663ded25d',  //  The client ID generated on instagram.com
    'username' => 'elvis',                              //  The username you're looking for
    'tagname' => 'galah',                               //  The tag you're looking for
    'count' => 2                                        //  Defaults to 20 | any number between 1 and 20
);

$imData = array(
    'type' => isset($imLocalData['type']) && in_array($imLocalData['type'], array('username', 'tagname')) ? $imLocalData['type'] : 'username',
    'client_id' => isset($imLocalData['client_id']) ? $imLocalData['client_id'] : (isset($socials['instagram']) && isset($socials['instagram']['client_id']) ? $socials['instagram']['client_id'] : null),
    'username' => isset($imLocalData['username']) && $imLocalData['username'] != '' ? $imLocalData['username'] : (isset($socials['instagram']) && isset($socials['instagram']['username']) ? $socials['instagram']['username'] : null),
    'tagname' => isset($imLocalData['tagname']) && $imLocalData['tagname'] != '' ? $imLocalData['tagname'] : (isset($socials['instagram']) && isset($socials['instagram']['tagname']) ? $socials['instagram']['tagname'] : null),
    'count' => isset($imLocalData['count']) && is_numeric($imLocalData['count']) ? $imLocalData['count'] : 20
);

if ( ($imData['type'] === 'username' && !empty($imData['username'])) || ($imData['client_id'] != null && $imData['tagname'] != '') ) {
?>
<div class="instagram">
    <ul class="pictures-list"></ul>
</div>
<?php
    if ($imData['type'] === 'username' && !empty($imData['username'])) {
?>
<script type="text/javascript">_functions.instagramManagement('<?php echo $imData['type']; ?>','','<?php echo $imData['username']; ?>',null);</script>
<?php
    } else if ($imData['type'] === 'tagname' && ($imData['client_id'] != null && $imData['tagname'] != '') ) {
?>
<script type="text/javascript">_functions.instagramManagement('<?php echo $imData['type']; ?>','<?php echo $imData['client_id']; ?>','<?php echo $imData['tagname']; ?>',<?php echo $imData['count']; ?>);</script>
<?php
    }
    else {
        if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters invalid for Instagram flow. Code 1');</script>
<?php
        }
    }
}
else {
    if ($devvars['dev']) {
?>
<script type="text/javascript">console.info('Parameters invalid for Instagram flow. Code 2');</script>
<?php
    }
}
unset($imLocalData, $imData);
