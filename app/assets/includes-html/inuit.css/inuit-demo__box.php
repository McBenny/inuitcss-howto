<div class="demo">
    <h2>Objects.box</h2>
    <p><code>.box</code>: The box object simply boxes off content.</p>
    <div class="box greybox">
        The content of the box.
    </div>
    <hr>
    <p>Different sizes can apply with additional classes<a href="#notes">*</a>:</p>
    <ul>
        <li><code>.box--tiny</code> for tiny,</li>
        <li><code>.box--small</code> for small,</li>
        <li><code>.box--large</code> for large</li>
        <li>and <code>.box--huge</code> for huge boxes.</li>
    </ul>
    <div class="layout">
        <div class="layout__item u-1/2">
            <div class="greybox box box--tiny">
                The content of the tiny box.
            </div>
        </div><!--
        --><div class="layout__item u-1/2">
            <div class="greybox box box--small">
                The content of the small box.
            </div>
        </div>
    </div>
    <hr>
    <div class="layout">
        <div class="layout__item u-1/2">
            <div class="greybox box box--large">
                The content of the large box.
            </div>
        </div><!--
        --><div class="layout__item u-1/2">
            <div class="greybox box box--huge">
                The content of the huge box.
            </div>
        </div>
    </div>
    <hr>
    <p><code>.box.box--flush</code> There is a very pragmatic, simple implementation of a responsive flag object, which simply places the text-content beneath the image-content.<a href="#notes">*</a>.</p>
    <div class="layout">
        <div class="layout__item u-1/2">
            <div class="greybox box box--flush">
                The content of the flush box.
            </div>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-box--tiny</li>
        <li>$inuit-enable-box--small</li>
        <li>$inuit-enable-box--large</li>
        <li>$inuit-enable-box--huge</li>
        <li>$inuit-enable-box--flush</li>
    </ul>
</div>
