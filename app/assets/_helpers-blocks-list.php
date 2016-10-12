<?php
$path = '.';
require($path.'/config.php');

require($path.'/lng-fr/translations.php');

include ($path.'/includes/head__html.php');

$head__title = 'Présentation des blocs';
include ($path.'/includes/head__head.php');
?>

<body class="development" name="top">
	<div class="dev">
		<h1>Présentation des blocs</h1>
	</div>

	<div class="dev">
		<h3>Entête <span class="smallprint">(includes/header.php // header__navigation.php)</span></h3>
	</div>
	<?php include ('./includes/header.php'); ?>


	<div class="dev">
		<h3>Pied de page <span class="smallprint">(includes/pied.php)</span></h3>
	</div>
	<?php include ('./includes/footer.php'); ?>


</body>
</html>