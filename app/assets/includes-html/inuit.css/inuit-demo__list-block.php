<div class="demo">
    <h2>Objects.list-block</h2>
    <p>The list-block object creates blocky list items out of a `ul` or `ol`.</p>
    <p><code>ul.list-block > li.list-block__item</code></p>
    <ul class="list-block">
        <li class="list-block__item">One</li>
        <li class="list-block__item">Two</li>
        <li class="list-block__item">Three</li>
    </ul>
    <hr>
    <p>Different sizes can apply with additional classes<a href="#notes">*</a>:</p>
    <ul>
        <li><code>.list-block--tiny</code> for tiny,</li>
        <li><code>.list-block--small</code> for small,</li>
        <li><code>.list-block--large</code> for large</li>
        <li>and <code>.list-block--huge</code> for huge items.</li>
    </ul>
    <div class="layout">
        <div class="layout__item u-1/2">
            <ul class="greybox list-block list-block--tiny">
                <li class="list-block__item">One tiny</li>
                <li class="list-block__item">Two tiny</li>
                <li class="list-block__item">Three tiny</li>
            </ul>
        </div><!--
        --><div class="layout__item u-1/2">
            <ul class="greybox list-block list-block--small">
                <li class="list-block__item">One small</li>
                <li class="list-block__item">Two small</li>
                <li class="list-block__item">Three small</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="layout">
        <div class="layout__item u-1/2">
            <ul class="greybox list-block list-block--large">
                <li class="list-block__item">One large</li>
                <li class="list-block__item">Two large</li>
                <li class="list-block__item">Three large</li>
            </ul>
        </div><!--
        --><div class="layout__item u-1/2">
            <ul class="greybox list-block list-block--huge">
                <li class="list-block__item">One huge</li>
                <li class="list-block__item">Two huge</li>
                <li class="list-block__item">Three huge</li>
            </ul>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-list-block--tiny</li>
        <li>$inuit-enable-list-block--small</li>
        <li>$inuit-enable-list-block--large</li>
        <li>$inuit-enable-list-block--huge</li>
    </ul>
</div>
