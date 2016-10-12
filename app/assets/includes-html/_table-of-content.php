<div class="dev">
    <h1>Table of contents</h1>

    <h2>Functionnal</h2>
    <ul>
        <li><a href="./-test-helpers-blocks-list.php">All blocks</a></li>
        <li><a href="./-test-helpers-color-palette.php">Color palette</a></li>
    </ul>

    <hr class="rule rule--dashed" />

    <h2>Pages list</h2>
    <ul class="dev__toc">
        <li class="legend">Name of the page - <span class="smallprint"><span class="done">done</span> - <span class="to-do">to-do</span></span></li>
<?php
foreach ($devvars['pageList'] AS $value) {
    $deskState = $value['desk'] == 1 ? 'done' : 'to-do';
    $mobState = $value['mob'] == 1 ? 'done' : 'to-do';
?>
        <li><a href="<?php echo $value['url']; ?>"><?php echo $value['name']; ?></a> <span class="smallprint"><span class="<?php echo $deskState; ?>">desktop</span> / <span class="<?php echo $mobState; ?>">mobile</span></span></li>
<?php
}
?>
    </ul>
</div>
