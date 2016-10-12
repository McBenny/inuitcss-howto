<div class="demo">
    <h2>Tools.widths</h2>
    <p>Inuit grid width system goes only to 5 by default, offering sizes like 1/2, 2/3, 3/4 or 1/5. If you want to achieve a thinner grid system, use the provided mixin<a href="#notes">*</a>:</p>
    <p><code>@include inuit-widths(12);</code>: This will create all the classes for a grid of 12: .u-1/12, .u-2/12, ... .u-11/12</p>
    <p>If you need a set of 2 or 3 different grid systmes, like 12 and 7, use the mixin like this:</p>
    <p><code>@include inuit-widths(7 12);</code>: It will create all the classes for both the 7 and 12 grid systems.</p>
    <p>If you need a suffix to your classes, just specify it in the code:</p>
    <p><code>@include inuit-widths(7 12, --ipadPro);</code>: It will create all the classes such as .u-1/7--ipadPro, .u-5/7--ipadPro, .u-1/12--ipadPro...</p>

    <div class="layout layout--small">
        <div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item one</div>
        </div><!--
        --><div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item two</div>
        </div><!--
        --><div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item three</div>
        </div><!--
        --><div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item four</div>
        </div><!--
        --><div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item five</div>
        </div><!--
        --><div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item six</div>
        </div><!--
        --><div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item seven</div>
        </div>
    </div>
    <hr>
    <div class="layout layout--small">
        <div class="layout__item u-1/7--ipadPro">
            <div class="greybox">item one: 1/7</div>
        </div><!--
        --><div class="layout__item u-6/7--ipadPro">
            <div class="greybox">item two: 6/7</div>
        </div>
    </div>
    <hr>
    <div class="layout layout--small">
        <div class="layout__item u-2/7--ipadPro">
            <div class="greybox">item one: 2/7</div>
        </div><!--
        --><div class="layout__item u-5/7--ipadPro">
            <div class="greybox">item two: 5/7</div>
        </div>
    </div>
    <hr>
    <div class="layout layout--small">
        <div class="layout__item u-3/7--ipadPro">
            <div class="greybox">item one: 3/7</div>
        </div><!--
        --><div class="layout__item u-4/7--ipadPro">
            <div class="greybox">item two: 4/7</div>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>The mixin is to be used in /app/scss/functionals/_vars.scss</li>
        <li>It can be used several times in the same project.</li>
        <li>To automatically generate a set of widths with their corresponding responsive names, you shall override 2 variables with your set of grids:</li>
        <li>$inuit-widths-columns: (1, 2, 3, 4, 5, 6, 7);</li>
        <li>$inuit-widths-columns-responsive: (1, 2, 3, 4, 5, 6, 7);</li>
    </ul>
</div>
