<?php
//$head__css__list = $head__css__prepend + $head__css__list + $head__css__prepend;

foreach ($head__css__prepend AS $key => $value) {
    if ($devvars['dev']) {
        if ($key == 'dev') {
            foreach($value AS $sKey => $sValue) {
                $sValue['media'] = !isset($sValue['media']) ? 'screen' : $sValue['media'];
?>
<link rel="stylesheet" href="<?php echo $sValue['path']; ?>" media="<?php echo $sValue['media']; ?>" />
<?php
            }
        }
    } else {
        if ($key != 'dev') {
            foreach($value AS $sKey => $sValue) {
?>
<link rel="stylesheet" href="<?php echo $sValue['path']; ?>" media="<?php echo $sValue['media']; ?>" />
<?php
            }
        }
    }
}


foreach ($head__css__list AS $key => $value) {
    if ($devvars['dev']) {
        if ($key == 'dev') {
            foreach($value AS $sKey => $sValue) {
                $sValue['media'] = !isset($sValue['media']) ? 'screen' : $sValue['media'];
?>
<link rel="stylesheet" href="<?php echo $sValue['path']; ?>" media="<?php echo $sValue['media']; ?>" />
<?php
            }
        }
    } else {
        if ($key != 'dev') {
            foreach($value AS $sKey => $sValue) {
?>
<link rel="stylesheet" href="<?php echo $sValue['path']; ?>" media="<?php echo $sValue['media']; ?>" />
<?php
            }
        }
    }
}



foreach ($head__css__append AS $key => $value) {
    if ($devvars['dev']) {
        if ($key == 'dev') {
            foreach($value AS $sKey => $sValue) {
                $sValue['media'] = !isset($sValue['media']) ? 'screen' : $sValue['media'];
?>
<link rel="stylesheet" href="<?php echo $value['path']; ?>" media="<?php echo $value['media']; ?>" />
<?php
            }
        }
    } else {
        if ($key != 'dev') {
            foreach($value AS $sKey => $sValue) {
?>
<link rel="stylesheet" href="<?php echo $sValue['path']; ?>" media="<?php echo $sValue['media']; ?>" />
<?php
            }
        }
    }
}