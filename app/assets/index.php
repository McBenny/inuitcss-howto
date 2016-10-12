<?php
$path = '.';
$dev = isset($_GET['dev']) && $_GET['dev'] == 1 ? true : false;

require($path.'/config.php');

$thePage = isset($_GET['page']) && $_GET['page'] != '' && isset($navigation__urls[$_GET['page']]) ? $_GET['page'] : null;

include_once($path.'/lng-'.$languages['default'].'/translations.php');
if ($languages['default'] != $languages['active']) {
    include_once($path.'/lng-'.$languages['active'].'/translations.php');
}

include ($path.'/'.$varSite['includes'].'/head__html.php');

$head__title = $thePage ? $navigation__urls[$thePage] : 'Home page';

/*
$head__style = '
        a {color: inherit;}
        .inactive {color: #999; text-decoration: none; cursor: default;}
';
*/

include ($path.'/'.$varSite['includes'].'/head__head.php');

/*
$foot__js__prepend = array(
    $path.'/scripts/script-before.js'
);
$foot__js__append = array(
    $path.'/scripts/script-after.js'
);
*/
?>

<body id="top">
<?php 
if ($dev) {
    include ($path.'/'.$varSite['includes'].'/_table-of-content.php');
}
?>

<div class="dev">
    <div class="o-wrapper">
        <?php include($varSite['includes'].'/navigation.php'); ?>
<?php
if ($thePage) {
    include ($path.'/'.$varSite['includes'].'/inuit-demo__'.$thePage.'.php');
} else  {
    include ($path.'/'.$varSite['includes'].'/inuit-demo__default.php');
}
?>
    </div>
</div>


<?php
/*
include ($path.'/'.$varSite['includes'].'/header.php');

include ($path.'/'.$varSite['includes'].'/headband.php');

include ($path.'/'.$varSite['includes'].'/footer.php');
*/

include ($path.'/'.$varSite['includes'].'/foot__javascripts.php');
?>

</body>
</html>