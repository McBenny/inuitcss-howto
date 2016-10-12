<div class="demo">
    <h2>Objects.buttons</h2>
    <p><code>.btn</code>: A simple button object.</p>
    <p><a href="" class="btn">My button</a></p>
    <hr>
    <p>You can customize the rendering easily through these variables:</p>
    <ul>
        <li>$inuit-btn-background (a color)</li>
        <li>$inuit-btn-color (a color)</li>
        <li>$inuit-btn-border-width (a size in px)</li>
        <li>$inuit-btn-border-style (solid, double...)</li>
        <li>$inuit-btn-border-color (a color)</li>
        <li>$inuit-btn-radius (a radius in px)</li>
    </ul>
    <hr>
    <p>Different sizes can apply with additional classes<a href="#notes">*</a>:</p>
    <ul>
        <li><code>.btn--small</code> for small,</li>
        <li>and <code>.btn--large</code> for large buttons</li>
    </ul>
    <div class="layout">
        <div class="layout__item u-1/2">
            <p><a href="" class="btn btn--small">My small button</a></p>
        </div><!--
        --><div class="layout__item u-1/2">
            <p><a href="" class="btn btn--large">My large button</a></p>
        </div>
    </div>
    <hr>
    <p>You can also get full width buttons or pill-like buttons through <code>.btn--full</code> and <code>.btn--pill</code><a href="#notes">*</a>:</p>
    <div class="layout">
        <div class="layout__item u-1/2">
            <p><a href="" class="btn btn--full">My full button</a></p>
        </div><!--
        --><div class="layout__item u-1/2">
            <p><a href="" class="btn btn--pill">My pill button</a></p>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-btn--tiny</li>
        <li>$inuit-enable-btn--small</li>
        <li>$inuit-enable-btn--large</li>
        <li>$inuit-enable-btn--full</li>
        <li>$inuit-enable-btn--pill</li>
    </ul>
</div>
