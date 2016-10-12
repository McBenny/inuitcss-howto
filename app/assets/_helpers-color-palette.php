<?php
$path = '.';
require($path.'/config.php');

require($path.'/lng-fr/translations.php');

include ($path.'/includes/head__html.php');

$head__title = 'Color palette';
$head__style = '
		a {color: inherit;}
		.inactive {color: #999; text-decoration: none; cursor: default;}
';
include ($path.'/includes/head__head.php');
?>

<body class="development">
	<div class="dev">
		<h1>Palette de couleurs</h1>
		<ul class="development__palette">
<?php

$elts = array(
	'bg' => array('bg--2'),
	'text' => array('text--2', 'text--3', 'text--4')
);

foreach ($elts AS $key => $value) {
	$color = is_array($value) ? $key : $value;
?>
			<li class="palette__item development__colors--<?php echo $color; ?>">
				$<?php echo $color; ?>
<?php
	if (is_array($value)) {
?>
				<ul class="development__palette--derivatives">
<?php
		foreach ($value as $sKey => $sValue) {
?>
					<li class="palette__item development__colors--<?php echo $sValue; ?>">
						$<?php echo $sValue; ?>
<?php
		}
		unset($sKey, $sValue);
?>
				</ul>
<?php
	}
?>
			</li>
<?php
}
unset($elts, $key, $value, $colors);
?>
		</ul>
	</div>
</body>
</html>