<div class="demo">
    <h2>Objects.pack</h2>
    <p>The pack object simply causes any number of elements pack up horizontally to automatically fill an equal, fluid width of their parent.</p>
    <p><code>.pack</code>: All <code>.pack__item</code>s are aligned to the tops of each other.</p>
    <div class="pack">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--middle</code>, All <code>.pack__item</code>s are aligned to the middle of each other<a href="#notes">*</a>.</p>
    <div class="pack pack--middle">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--bottom</code>, All <code>.pack__item</code>s are aligned to the bottoms of each other<a href="#notes">*</a>.</p>
    <div class="pack pack--bottom">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--auto</code>, Cause <code>.pack__item</code>s to pack up into available space, but not equally sized<a href="#notes">*</a>.</p>
    <div class="pack pack--auto">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--tiny</code>: Tiny gutters between <code>.pack__item</code>s<a href="#notes">*</a>.</p>
    <div class="pack pack--tiny">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--small</code>: Small gutters between <code>.pack__item</code>s<a href="#notes">*</a>.</p>
    <div class="pack pack--small">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--large</code>: Large gutters between <code>.pack__item</code>s<a href="#notes">*</a>.</p>
    <div class="pack pack--large">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--huge</code>: Huge gutters between <code>.pack__item</code>s<a href="#notes">*</a>.</p>
    <div class="pack pack--huge">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <hr>
    <p><code>.pack.pack--rev</code>: Reversed order <code>.pack__item</code>s<a href="#notes">*</a>.</p>
    <div class="pack pack--rev">
        <div class="pack__item greybox">One line</div>
        <div class="pack__item greybox">Two<br />lines</div>
        <div class="pack__item greybox">Three<br />lines<br />here</div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-pack--middle</li>
        <li>$inuit-enable-pack--bottom</li>
        <li>$inuit-enable-pack--auto</li>
        <li>$inuit-enable-pack--tiny</li>
        <li>$inuit-enable-pack--small</li>
        <li>$inuit-enable-pack--large</li>
        <li>$inuit-enable-pack--huge</li>
        <li>$inuit-enable-pack--rev</li>
    </ul>
</div>
