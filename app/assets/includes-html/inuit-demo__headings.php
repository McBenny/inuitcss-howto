<div class="o-wrapper">
    <h2>Headings</h2>
    <p>Headings are not really styled, but just sized relatively to one another: <code>&lt;h1></code> is the biggest, then comes <code>&lt;h2></code>, <code>&lt;h3></code> and of course <code>&lt;h6></code> is the smallest, the general font size.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;h1>Heading 1&lt;/h1>

&lt;h2>Heading 2&lt;/h2>

&lt;h3>Heading 3&lt;/h3>

&lt;h4>Heading 4&lt;/h4>

&lt;h5>Heading 5&lt;/h5>

&lt;h6>Heading 6&lt;/h6>
</code>
    <div class="u-margin-bottom-large">
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
    </div>

    <h3>Simulating headings</h3>
    <p>To apply the exact same sizes as <code>&lt;h1></code> to <code>&lt;h6></code> but without these tags, use <strong>.u-h1</strong>, <strong>.u-h2</strong> => <strong>.u-h6</strong>.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;p class="<strong>u-h1</strong>">Heading 1&lt;/p>

&lt;p>Give me a &lt;span class="<strong>u-h2</strong>">Heading 2&lt;/span>&lt;/p>

&lt;div class="<strong>u-h3</strong>">Heading 3&lt;/div>
</code>
    <div class="u-margin-bottom-large">
        <p class="u-h1">Heading 1</p>
        <p>Give me a <span class="u-h2">Heading 2</span></p>
        <div class="u-h3 u-margin-bottom">Heading 3</div>
    </div>

    <h3>Styling the headings</h3>
    <p>As a convention, for all the styling of your headings and titles you can use the following classes. They're provided without any styling by default, it's up to you to give them their final appearance.</p>
    <ul>
        <li><strong>.title</strong>: this is the default class for common attributes on titles,</li>
        <li><strong>.title--1</strong> => <strong>.title--6</strong>: to apply styles for each level of heading independantly.</li>
    </ul>
</div>