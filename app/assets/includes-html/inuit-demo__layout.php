    <h3>The layout system</h3>
    <p>The layer system uses a group of classes organised with a container class and contained elements classes, combined with a set of other classes to determine the widths and behaviour of each part of the layout. Thus it gives you the ability to create different layouts with 1, 2, 3, 4... columns easily.</p>
    <h4>.o-layout</h4>
    <p>This class is the "<em>container</em>" class that surrounds the others. It is necessary for the other classes to take effect.<br />
    The columns starts from the left side of the container and are aligned to the top. A standard "space" (can be modified) is taking place between each column.</p>
    <p>It has several modifiers to change the behaviour of the following elements:</p>
    <ul>
        <li><strong>.o-layout--center</strong>, <strong>.o-layout--right</strong>: the columns will either be aligned to the center or the right of the container. It's only visible if the sum of the widths of the columns is lower than the width of the container.</li>
        <li><strong>.o-layout--reverse</strong>: the following elements will be presented in reverse order compared to the code: the first element will be the last, the last will be the first.</li>
        <li><strong>.o-layout--tiny</strong>, <strong>.o-layout--small</strong>, <strong>.o-layout--large</strong>, <strong>.o-layout--huge</strong>, : varies the "space" between the columns from tiny to huge, standard spacing being between <em>small</em> and <em>large</em>.</li>
        <li><strong>.o-layout--flush</strong> : eliminates the "space" between the columns.</li>
        <li><strong>.o-layout--middle</strong>, <strong>.o-layout--bottom</strong> : align the columns to their middle or bottom (instead of to the top, as the default behaviour).</li>
    </ul>
    <h4>.o-layout__item</h4>
    <p>This class is the "<em>column</em>" class that is contained in the <strong>.o-layout</strong>. You can put as many of them as you need into the container, they will behave as the modifiers classes on the container ask them to (align right, bottom, reversed, spacings...).</p>
    <p>To select the width of each column, use the "<em><a href="#widths">widths classes</a></em>"</p>
    <h4>Widths of the columns</h4>
    <p>The widths of the columns is given as a fraction of the container: 1/2, 2/3, 4/5...</p>
    <p>Several widths can be given to a single column to apply in different contexts (desktop, laptop, mobile...).</p>
    <p>It is possible to assemble columns of any fraction, if they fit into the width, they will be side by side, if they're not, le columns that don't fit create a second line of columns.</p>
    <p>Inuit brings fractions of 1, 2, 3, 4 and 5 by default. If you want other fractions (12, 7, etc.), just overwrite the <code>$inuit-fractions</code> variable located in <code>./utilities/_utilities.widths.scss</code>. If you decide to change them, rewrite the variable in <code>.settings/_settings.global.scss</code>.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-layout">
    &lt;div class="o-layout <strong>u-1/2</strong>">
        First half...
    &lt;/div>
    &lt;div class="o-layout <strong>u-1/2</strong>">
        Second half...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2">First half...</div>
        <div class="bg--12  o-layout__item u-1/2">Second half...</div>
    </div>

<code class="block u-margin-bottom">&lt;div class="o-layout <strong>o-layout--huge</strong>">
    &lt;div class="o-layout <strong>u-1/2</strong>">
        First half, huge spacing...
    &lt;/div>
    &lt;div class="o-layout <strong>u-1/2</strong>">
        Second half, huge spacing...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout o-layout--huge u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2">First half, huge spacing...</div>
        <div class="bg--12  o-layout__item u-1/2">Second half, huge spacing...</div>
    </div>

<code class="block u-margin-bottom">&lt;div class="o-layout <strong>o-layout--right</strong>">
    &lt;div class="o-layout <strong>u-1/2</strong>">
        One half...
    &lt;/div>
    &lt;div class="o-layout <strong>u-1/3</strong>">
        One third...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout o-layout--right u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2">One half...</div>
        <div class="bg--3  o-layout__item u-1/3">One third...</div>
    </div>

<code class="block u-margin-bottom">&lt;div class="o-layout <strong>o-layout--reverse</strong>">
    &lt;div class="o-layout u-1/2">
        One half...
    &lt;/div>
    &lt;div class="o-layout u-1/3">
        One third...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout o-layout--reverse u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2">One half...</div>
        <div class="bg--3  o-layout__item u-1/3">One third...</div>
    </div>

<code class="block u-margin-bottom">&lt;div class="o-layout">
    &lt;div class="o-layout <strong>u-1/2</strong>">
        One half...
    &lt;/div>
    &lt;div class="o-layout <strong>u-1/3</strong>">
        One third...
    &lt;/div>
    &lt;div class="o-layout <strong>u-1/4</strong>">
        One quarter...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2">One half...</div>
        <div class="bg--3  o-layout__item u-1/3">One third...</div>
        <div class="bg--2  o-layout__item u-1/4">One quarter...</div>
    </div>

    <h4>Responsive columns</h4>
    <p>If you wish to present your content in 2 columns on desktop but would like to fall back to one single column on mobiles, you can use the exact same fraction classes but specifying the range where you want to apply them:</p>
    <ul>
        <li><strong>.u-1/2@mobile</strong>, <strong>.u-1/2@tablet</strong>, <strong>.u-1/2@desktop</strong>, <strong>.u-1/2@wide</strong>: will respectively be applied <em>only</em> on mobiles, tablets, desktops or wide screens, depending on the values set for each stage.</li>
    </ul>
    <p>The list of breakpoints and their values is hold by <code>$mq-breakpoints</code> coming from <code>./nodes_modules/sass-mq/_mq.scss</code>. If you wish to change it, rewrite the variable in <code>./settings/_settings.config.scss</code>.</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-layout">
    &lt;div class="o-layout <strong>u-1/2@desktop</strong> <strong>u-1/1@mobile</strong>">
        First half...
    &lt;/div>
    &lt;div class="o-layout <strong>u-1/2@desktop</strong> <strong>u-1/1@mobile</strong>">
        Second half...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2@desktop u-1/1@mobile">First half... (transformed to a full width in mobile)</div>
        <div class="bg--12  o-layout__item u-1/2@desktop u-1/1@mobile">Second half... (transformed to a full width in mobile)</div>
    </div>

    <h4>Offsets</h4>
    <p>You can offset a block of its original position, left or right by using a collection of classes. You can <em>push</em> a block to the right or <em>pull</em> it to the left.</p>
    <p>Offsetting a block doesn't changes the natural flow, thus it may happen that the block overlaps other blocks or go out of the "page".</p>
    <p>Each offset is given using the same fraction measures as the widths of the block:</p>
    <ul>
        <li><strong>.u-push-1/2</strong>, <strong>.u-push-1/3</strong>, <strong>.u-push-2/3</strong>, <strong>.u-push-1/4</strong>, <strong>.u-push-3/4</strong>, <strong>.u-push-1/5</strong>, <strong>.u-push-2/5</strong>, <strong>.u-push-3/5</strong>, <strong>.u-push-4/5</strong>: will push block of the selected fraction to the right.</li>
        <li><strong>.u-pull-1/2</strong>, <strong>.u-pull-1/3</strong>, <strong>.u-pull-2/3</strong>, <strong>.u-pull-1/4</strong>, <strong>.u-pull-3/4</strong>, <strong>.u-pull-1/5</strong>, <strong>.u-pull-2/5</strong>, <strong>.u-pull-3/5</strong>, <strong>.u-pull-4/5</strong>: will pull block of the selected fraction to the left.</li>
    </ul>
    <p>This utility is dependant on the <code>$inuit-offset</code> variable that is set to <code>false</code> by default. If you wish to use it, set this variable to <code>true</code> in <code>./settings/_settings.global.scss</code>.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-layout">
    &lt;div class="o-layout u-1/2">
        First half...
    &lt;/div>
    &lt;div class="o-layout u-1/2 <strong>u-push-1/4</strong>">
        Second half...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2">First half...</div>
        <div class="bg--12  o-layout__item u-1/2 u-push-1/4">Second half...</div>
    </div>
<code class="block u-margin-bottom">&lt;div class="o-layout">
    &lt;div class="o-layout u-1/2">
        First half...
    &lt;/div>
    &lt;div class="o-layout u-1/2 <strong>u-pull-1/4</strong>">
        Second half...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/2">First half...</div>
        <div class="bg--12  o-layout__item u-1/2 u-pull-1/4">Second half...</div>
    </div>
