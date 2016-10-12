<div class="demo">
    <h2>Objects.list-ui</h2>
    <p>The UI list object creates blocky list items with a keyline separator out of a `ul` or `ol`.</p>
    <p><code>ul.list-ui > li.list-ui__item</code></p>
    <ul class="list-ui">
        <li class="list-ui__item">One</li>
        <li class="list-ui__item">Two</li>
        <li class="list-ui__item">Three</li>
    </ul>
    <hr>
    <p>Different sizes can apply with additional classes<a href="#notes">*</a>:</p>
    <ul>
        <li><code>.list-ui--tiny</code> for tiny,</li>
        <li><code>.list-ui--small</code> for small,</li>
        <li><code>.list-ui--large</code> for large</li>
        <li>and <code>.list-ui--huge</code> for huge items.</li>
    </ul>
    <div class="layout">
        <div class="layout__item u-1/2">
            <ul class="list-ui list-ui--tiny">
                <li class="list-ui__item">One tiny</li>
                <li class="list-ui__item">Two tiny</li>
                <li class="list-ui__item">Three tiny</li>
            </ul>
        </div><!--
        --><div class="layout__item u-1/2">
            <ul class="list-ui list-ui--small">
                <li class="list-ui__item">One small</li>
                <li class="list-ui__item">Two small</li>
                <li class="list-ui__item">Three small</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="layout">
        <div class="layout__item u-1/2">
            <ul class="list-ui list-ui--large">
                <li class="list-ui__item">One large</li>
                <li class="list-ui__item">Two large</li>
                <li class="list-ui__item">Three large</li>
            </ul>
        </div><!--
        --><div class="layout__item u-1/2">
            <ul class="list-ui list-ui--huge">
                <li class="list-ui__item">One huge</li>
                <li class="list-ui__item">Two huge</li>
                <li class="list-ui__item">Three huge</li>
            </ul>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-list-ui--tiny</li>
        <li>$inuit-enable-list-ui--small</li>
        <li>$inuit-enable-list-ui--large</li>
        <li>$inuit-enable-list-ui--huge</li>
    </ul>
</div>
