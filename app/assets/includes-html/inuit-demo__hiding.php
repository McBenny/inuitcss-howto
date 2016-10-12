<div class="o-wrapper">
    <h3>Hiding content</h3>
    <p>There are two considerations to take while hiding content: do you want it to be hidden absolutely, or just "visually"? A content that is just "visually hidden" is still accessible to screen readers and search engine. A content that is "hidden" is no more accessible to screen readers nor search engines. So depending on what you try to achieve, you might use different classes.</p>
    <h4>.u-hidden</h4>
    <p>This class hides completely a content, it's no more accessible. Of course if the class is removed, the content becomes accessible, visible, etc.</p>
    <h4>.u-hidden-visually</h4>
    <p>This class hides a content "visually", it's still accessible, although not visible.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">The hidden content his just below this line, trust me ;-)
&lt;div class="<strong>u-hidden</strong>">
    Completely hidden content...
&lt;/div>

&lt;div class="<strong>u-hidden-visually</strong>">
    Content visually hidden but still accessible...
&lt;/div>
</code>
    <div class="bg--1 u-padding  u-margin-bottom-large">
        The hidden content his just below this line, trust me ;-)
        <div class="u-hidden">Completely hidden content...</div>
        <div class="u-hidden-visually">Content visually hidden but still accessible...</div>
    </div>

    <h3>Responsible hiding</h3>
    <p>This is not part of the originating <strong>inuitcss</strong>.</p>
    <p>If you wish to hide a content in certain responsive situation you can use the following classes:</p>
    <ul>
        <li><strong>.accessibility@mobile</strong>, <strong>.accessibility@tablet</strong>, <strong>.accessibility@desktop</strong>, <strong>.accessibility@wide</strong>: these classes will visually hide the content for the selected "device width", respectively for <em>mobiles</em>, <em>tablets</em>, <em>desktops</em> and <em>wide screens</em>.</li>
        <li><strong>.accessibility@tablet+</strong>, <strong>.accessibility@desktop+</strong>: will hide content starting from the selected "device width" and up, thus hiding from tablets to wide screens or from desktops to wide screens, leaving the content visible in the lower widths.</li>
        <li><strong>.accessibility@tablet-</strong>, <strong>.accessibility@desktop-</strong>: will hide content starting from small widths until the selected "device width", thus hiding from mobiles to tablets or from mobiles to desktops screens, leaving the content visible in the higher widths.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-layout">
    The hidden content his just below this line, trust me ;-)
    &lt;div class="o-layout__item u-1/4 <strong>accessibility@mobile</strong>">
        Hidden from mobiles...
    &lt;/div>
    &lt;div class="o-layout__item u-1/4 <strong>accessibility@tablet</strong>">
        Hidden from tablets...
    &lt;/div>
    &lt;div class="o-layout__item u-1/4 <strong>accessibility@desktop</strong>">
        Hidden from desktops...
    &lt;/div>
    &lt;div class="o-layout__item u-1/4 <strong>accessibility@wide</strong>">
        Hidden from wide screens...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom-large">
        <div class="bg--1  o-layout__item u-1/4 accessibility@mobile">
            Hidden from mobiles...
        </div>
        <div class="bg--12  o-layout__item u-1/4 accessibility@tablet">
            Hidden from tablets...
        </div>
        <div class="bg--2  o-layout__item u-1/4 accessibility@desktop">
            Hidden from desktops...
        </div>
        <div class="bg--22  o-layout__item u-1/4 accessibility@wide">
            Hidden from wide screens...
        </div>
    </div>

<code class="block u-margin-bottom">&lt;div class="o-layout">
    The hidden content his just below this line, trust me ;-)
    &lt;div class="o-layout__item u-1/2 <strong>accessibility@tablet-</strong>">
        Hidden from tablets and below...
    &lt;/div>
    &lt;div class="o-layout__item u-1/2 <strong>accessibility@desktop+</strong>">
        Hidden from desktops and above...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom-large">
        <div class="bg--12  o-layout__item u-1/2 accessibility@tablet-">
            Hidden from tablets and below...
        </div>
        <div class="bg--2  o-layout__item u-1/2 accessibility@desktop+">
            Hidden from desktops and above...
        </div>
    </div>

</div>