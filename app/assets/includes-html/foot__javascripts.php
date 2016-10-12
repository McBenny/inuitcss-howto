<?php
include('foot__analytics.php');

$actual__foot__js__list = $devvars['dev'] ? $foot__js__list['dev'] : $foot__js__list['prod'];
$foot__js__list = $foot__js__prepend + $actual__foot__js__list + $foot__js__append;

foreach ($foot__js__list AS $key => $value) {
?>
    <script type="text/javascript" src="<?php echo $value; ?>"></script>
<?php
}
?>
