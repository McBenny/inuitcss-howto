        <nav>
            <ul class="nav o-list-inline" data-title="Navigation">
<?php

foreach ($navigation__urls AS $key => $value) {
    $current = $key == $thePage ? ' current' : null;
?>
                <li class="nav__item o-list-inline__item<?php echo $current; ?>"><a href="?page=<?php echo $key; ?>"><?php echo $value; ?></a>
<?php
}
?>
            </ul>
        </nav>

<?php
/*
<div class="ghostBar">
    The ghost Nav !
</div>
*/
?>