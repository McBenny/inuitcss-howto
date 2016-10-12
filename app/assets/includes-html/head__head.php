<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,IE=8" />
    <title><?php echo $head__title; ?></title>

    <meta name="robots" content="<?php echo $varSite['robots']; ?>" />
    <meta name="keywords" content="<?php echo $head__meta__keywords; ?>" />
    <meta name="description" content="<?php echo $head__meta__description; ?>" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="initial-scale=1.0" />

    <link rel="icon" type="image/png" href="<?php echo $path; ?>/css/images/favicon.png" />
    <link rel="icon" type="image/x-icon" href="<?php echo $path; ?>/css/images/favicon.ico" />

    <?php include($path.'/'.$varSite['includes'].'/head__css.php'); ?>
<?php
if (isset($head__style)) {
?>
    <style type="text/css"><?php echo $head__style; ?>
    </style>
<?php
}
?>

</head>
