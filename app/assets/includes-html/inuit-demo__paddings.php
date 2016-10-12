<div class="o-wrapper">
    <h2>Paddings</h2>
    <p>There are a few handy classes to manage paddings in blocks.</p>
    <h3 class="u-margin-top-large">Specific widths of padding</h3>
    <p>To apply padding to an element, simply use one or several classes among these:</p>
    <ul>
        <li><strong>.u-padding</strong>: this class will apply a standard margin on the four sides of the block.</li>
        <li><strong>.u-padding-tiny</strong>, <strong>.u-padding-small</strong>, <strong>.u-padding-large</strong>, <strong>.u-padding-huge</strong>: these classes will apply a <em>tiny</em>, or <em>small</em>, or <em>large</em> or <em>huge</em> padding on the four sides of the element (standard padding sits between <em>small</em> and <em>large</em>).</li>
        <li><strong>.u-padding-none</strong>: this class will remove all padding on the four sides of the element.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>u-padding-tiny</strong>">
    Tiny padding
&lt;/div>

&lt;div class="<strong>u-padding-small</strong>">
    Small padding
&lt;/div>

&lt;div class="<strong>u-padding</strong>">
    Standard padding
&lt;/div>

&lt;div class="<strong>u-padding-large</strong>">
    Large padding
&lt;/div>

&lt;div class="<strong>u-padding-huge</strong>">
    Huge padding
&lt;/div>

&lt;div class="<strong>u-padding-none</strong>">
    No padding
&lt;/div>
</code>
    <div class="visible-container u-margin-bottom-small  u-padding-tiny">Tiny padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding-small">Small padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding">Standard padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding-large">Large padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding-huge">Huge padding</div>
    <div class="visible-container  u-padding-none">No padding</div>

    <h3 class="u-margin-top-large">Selected paddings</h3>
    <p>You can also apply the paddings selectively: only on the left side, only at the bottom... To achieve this, use this collection of classes: <strong>.u-padding-top</strong>, <strong>.u-padding-right</strong>, <strong>.u-padding-bottom</strong>, <strong>.u-padding-left</strong>, they will respectively apply a standard padding at the top, the right side, at the bottom or on the left side.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>u-padding-left</strong>">
    Left padding
&lt;/div>

&lt;div class="<strong>u-padding-top</strong>">
    Top padding
&lt;/div>

&lt;div class="<strong>u-padding-left u-padding-bottom</strong>">
    Left and bottom paddings
&lt;/div>
</code>
    <div class="visible-container u-margin-bottom-small  u-padding-left">Left padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding-top">Top padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding-left u-padding-bottom">Left and bottom paddings</div>

    <h3 class="u-margin-top-large">Specific widths for selected paddings</h3>
    <p>On the same principle, you can add selective paddings of specific widths: a tiny left padding, a huge bottom padding, or any combination of these. You can also remove a specific padding on a specific side using the following classes:</p>
    <ul>
        <li><strong>.u-padding-top-tiny</strong>, <strong>.u-padding-top-small</strong>, <strong>.u-padding-top-large</strong>, <strong>.u-padding-top-huge</strong>: to apply different padding widths <em>at the top</em> of the element,</li>
        <li><strong>.u-padding-right-tiny</strong>, <strong>.u-padding-right-small</strong>, <strong>.u-padding-right-large</strong>, <strong>.u-padding-right-huge</strong>: to apply different padding widths <em>on the right side</em> of the element,</li>
        <li><strong>.u-padding-bottom-tiny</strong>, <strong>.u-padding-bottom-small</strong>, <strong>.u-padding-bottom-large</strong>, <strong>.u-padding-bottom-huge</strong>: to apply different padding widths <em>at the bottom</em> of the element,</li>
        <li><strong>.u-padding-left-tiny</strong>, <strong>.u-padding-left-small</strong>, <strong>.u-padding-left-large</strong>, <strong>.u-padding-left-huge</strong>: to apply different padding widths <em>on the left side</em> of the element.</li>
        <li><strong>.u-padding-top-none</strong>, <strong>.u-padding-right-none</strong>, <strong>.u-padding-bottom-none</strong>, <strong>.u-padding-left-none</strong>: to <em>remove paddings</em> selectively on a specific side of the element.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>u-padding-left-huge</strong>">
    Huge left padding
&lt;/div>

&lt;div class="<strong>u-padding-top-small u-padding-bottom-large</strong>">
    A small top padding and a large bottom padding
&lt;/div>

&lt;div class="<strong>u-padding u-padding-top-none u-padding-right-huge</strong>">
    Standard paddings all around but none at the top and a huge padding on the right side
&lt;/div>
</code>
    <div class="visible-container u-margin-bottom-small  u-padding-left-huge">Huge left padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding-top-small u-padding-bottom-large">A small top padding and a large bottom padding</div>
    <div class="visible-container u-margin-bottom-small  u-padding u-padding-top-none u-padding-right-huge">Standard paddings all around but none at the top and a huge padding on the right side. Adding text so the right padding becomes obvious. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, ipsa voluptatum dolorem sit impedit fugiat id, accusantium excepturi, reprehenderit animi et soluta alias error minus quaerat fuga aspernatur quidem enim.</div>
</div>