        <nav>
            <ul class="nav header__nav header__nav--desk" data-title="Navigation">
<?php

foreach ($navigation__urls AS $key => $value) {
?>
                <li class="nav__item"><a href="?page=<?php echo $key; ?>"><?php echo $value; ?></a>
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