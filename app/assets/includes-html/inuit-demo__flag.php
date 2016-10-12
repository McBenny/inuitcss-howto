    <h3>The Flag object</h3>
    <p>This object is a simple abstraction of the common display of an image beside a text block with some interesting customization tricks.</p>
    <p>The default behaviour puts the image on the left side of the text, the text being aligned to the middle on the vertical axis with the image.</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>o-flag</strong>">
    &lt;div class="<strong>o-flag__img</strong>" />
        &lt;img... />
    &lt;/div>
    &lt;div class="<strong>o-flag__body</strong>">
        Lorem ipsum...
    &lt;/div>
&lt;/div>
</code>
    <div class="u-margin-bottom  o-flag">
        <div class="o-flag__img">
            <img src="http://placehold.it/150x150" alt="" />
        </div>
        <div class="o-flag__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum non maxime laudantium, alias eius, soluta ut quisquam dignissimos quia, ipsam natus recusandae qui voluptate fuga minus. Magnam, error hic.
        </div>
    </div>

    <p>It has several modifiers to change the behaviour of the following elements:</p>
    <ul>
        <li><strong>.o-flag--reverse</strong>: the image will be put on the right side of the block instead of the left, as default.</li>
        <li><strong>.o-flag--tiny</strong>, <strong>.o-flag--small</strong>, <strong>.o-flag--large</strong>, <strong>.o-flag--huge</strong>, : varies the "space" between the image and the text from tiny to huge, standard spacing being between <em>small</em> and <em>large</em>.</li>
        <li><strong>.o-flag--top</strong>, <strong>.o-flag--bottom</strong>, : changes the vertical alignment top <em>top</em> and <em>bottom</em> instead of <em>middle</em>.</li>
        <li><strong>.o-flag--flush</strong> : eliminates the "space" between the image and the text.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-flag <strong>o-flag--reverse</strong>">
    &lt;div class="o-flag__img" />
        &lt;img... />
    &lt;/div>
    &lt;div class="o-flag__body">
        Lorem ipsum...
    &lt;/div>
&lt;/div>

&lt;div class="o-flag <strong>o-flag--bottom</strong>">
    &lt;div class="o-flag__img" />
        &lt;img... />
    &lt;/div>
    &lt;div class="o-flag__body">
        Lorem ipsum...
    &lt;/div>
&lt;/div>

&lt;div class="o-flag <strong>o-flag--huge</strong>">
    &lt;div class="o-flag__img" />
        &lt;img... />
    &lt;/div>
    &lt;div class="o-flag__body">
        Lorem ipsum...
    &lt;/div>
&lt;/div>
</code>
    <div class="u-margin-bottom  o-flag o-flag--reverse">
        <div class="o-flag__img">
            <img src="http://placehold.it/150x150" alt="" />
        </div>
        <div class="o-flag__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum non maxime laudantium, alias eius, soluta ut quisquam dignissimos quia, ipsam natus recusandae qui voluptate fuga minus. Magnam, error hic.
        </div>
    </div>
    <div class="u-margin-bottom  o-flag o-flag--bottom">
        <div class="o-flag__img">
            <img src="http://placehold.it/150x150" alt="" />
        </div>
        <div class="o-flag__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum non maxime laudantium, alias eius, soluta ut quisquam dignissimos quia, ipsam natus recusandae qui voluptate fuga minus. Magnam, error hic.
        </div>
    </div>
    <div class="u-margin-bottom  o-flag o-flag--huge">
        <div class="o-flag__img">
            <img src="http://placehold.it/150x150" alt="" />
        </div>
        <div class="o-flag__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum non maxime laudantium, alias eius, soluta ut quisquam dignissimos quia, ipsam natus recusandae qui voluptate fuga minus. Magnam, error hic.
        </div>
    </div>

    <p>Note that this object is a little bit like <a href="?page=media">The "Media" object</a> but with more options.</p>
