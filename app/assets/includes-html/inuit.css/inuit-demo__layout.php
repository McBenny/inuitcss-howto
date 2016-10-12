<div class="demo">
    <h2>Objects.layout</h2>
    <p><code>.layout</code>: Begin a layout group.</p>
    <p><code>.layout__item</code> for each element of the layout.</p>
    <div class="layout">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item three</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--tiny</code>: Layouts with tiny gutters<a href="#notes">*</a>.</p>
    <div class="layout layout--tiny">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item three</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--small</code>: Layouts with small gutters<a href="#notes">*</a>.</p>
    <div class="layout layout--small">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item three</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--large</code>: Layouts with large gutters<a href="#notes">*</a>.</p>
    <div class="layout layout--large">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item three</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--huge</code>: Layouts with huge gutters<a href="#notes">*</a>.</p>
    <div class="layout layout--huge">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item three</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--flush</code>: Layouts with no gutters<a href="#notes">*</a>.</p>
    <div class="layout layout--flush">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item three</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--rev</code>: Reversed rendered order of layout items<a href="#notes">*</a>.</p>
    <div class="layout layout--rev">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item three</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--middle</code>: Align layout items to the vertical centers of each other<a href="#notes">*</a>.</p>
    <div class="layout layout--middle">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item<br />two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item on<br />three<br />lines</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--bottom</code>: Align layout items to the vertical bottoms of each other<a href="#notes">*</a>.</p>
    <div class="layout layout--bottom">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item<br />two</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item on<br />three<br />lines</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--right</code>: Make the layout items fill up from the right hand side (<em>visible if there is at least one <code>.layout__item</code> missing on the line</em>)<a href="#notes">*</a>.</p>
    <div class="layout layout--right">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item<br />two</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--center</code>: Make the layout items fill up from the center outward (<em>visible if there is at least one <code>.layout__item</code> missing on the line</em>)<a href="#notes">*</a>.</p>
    <div class="layout layout--center">
        <div class="layout__item u-1/3">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/3">
            <div class="greybox">item<br />two</div>
        </div>
    </div>
    <hr>
    <p><code>.layout.layout--auto</code>: Make the layout items fill up from the center outward (<em>visible if there is no specific width or ration specified on <code>.layout__item</code>s</em>)<a href="#notes">*</a>.</p>
    <div class="layout layout--auto">
        <div class="layout__item">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item">
            <div class="greybox">item<br />two</div>
        </div><!--
        --><div class="layout__item">
            <div class="greybox">item on<br />three<br />lines</div>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-layout--tiny</li>
        <li>$inuit-enable-layout--small</li>
        <li>$inuit-enable-layout--large</li>
        <li>$inuit-enable-layout--huge</li>
        <li>$inuit-enable-layout--flush</li>
        <li>$inuit-enable-layout--rev</li>
        <li>$inuit-enable-layout--middle</li>
        <li>$inuit-enable-layout--bottom</li>
        <li>$inuit-enable-layout--right</li>
        <li>$inuit-enable-layout--center</li>
        <li>$inuit-enable-layout--auto</li>
    </ul>
</div>
