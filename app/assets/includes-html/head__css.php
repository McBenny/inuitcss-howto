<?php
$head__css__list = $head__css__prepend + $head__css__list + $head__css__append;

foreach ($head__css__list AS $key => $value) {
    if ($devvars['dev']) {
        if ($key == 'dev') {
            $value['media'] = !isset($value['media']) ? 'screen' : $value['media'];
?>
<link rel="stylesheet" href="<?php echo $value['path']; ?>" media="<?php echo $value['media']; ?>" />
<?php
        }
    } else {
        if ($key != 'dev') {
?>
<link rel="stylesheet" href="<?php echo $value['path']; ?>" media="<?php echo $value['media']; ?>" />
<?php
        }
    }
}
