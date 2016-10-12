<div class="o-wrapper">
    <h3>The Media object</h3>
    <p>This object is a simple abstraction of the common display of an image beside a text block.</p>
    <p>The default behaviour puts the image on the left side of the text, the text being aligned to the top of the image.</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>o-media</strong>">
    &lt;div class="<strong>o-media__img</strong>" />
        &lt;img... />
    &lt;/div>
    &lt;div class="<strong>o-media__body</strong>">
        Lorem ipsum...
    &lt;/div>
&lt;/div>
</code>
    <div class="u-margin-bottom  o-media">
        <div class="o-media__img">
            <img src="http://placehold.it/150x150" alt="" />
        </div>
        <div class="o-media__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum non maxime laudantium, alias eius, soluta ut quisquam dignissimos quia, ipsam natus recusandae qui voluptate fuga minus. Magnam, error hic.
        </div>
    </div>

    <p>It has several modifiers to change the behaviour of the following elements:</p>
    <ul>
        <li><strong>.o-media--reverse</strong>: the image will be put on the right side of the block instead of the left, as default.</li>
        <li><strong>.o-media--tiny</strong>, <strong>.o-media--small</strong>, <strong>.o-media--large</strong>, <strong>.o-media--huge</strong>, : varies the "space" between the image and the text from tiny to huge, standard spacing being between <em>small</em> and <em>large</em>.</li>
        <li><strong>.o-layout--flush</strong> : eliminates the "space" between the image and the text.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-media <strong>o-media--reverse</strong>">
    &lt;div class="o-media__img" />
        &lt;img... />
    &lt;/div>
    &lt;div class="o-media__body">
        Lorem ipsum...
    &lt;/div>
&lt;/div>

&lt;div class="o-media <strong>o-media--huge</strong>">
    &lt;div class="o-media__img" />
        &lt;img... />
    &lt;/div>
    &lt;div class="o-media__body">
        Lorem ipsum...
    &lt;/div>
&lt;/div>
</code>
    <div class="u-margin-bottom  o-media o-media--reverse">
        <div class="o-media__img">
            <img src="http://placehold.it/150x150" alt="" />
        </div>
        <div class="o-media__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum non maxime laudantium, alias eius, soluta ut quisquam dignissimos quia, ipsam natus recusandae qui voluptate fuga minus. Magnam, error hic.
        </div>
    </div>
    <div class="u-margin-bottom  o-media o-media--huge">
        <div class="o-media__img">
            <img src="http://placehold.it/150x150" alt="" />
        </div>
        <div class="o-media__body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis illum non maxime laudantium, alias eius, soluta ut quisquam dignissimos quia, ipsam natus recusandae qui voluptate fuga minus. Magnam, error hic.
        </div>
    </div>

    <p>Note that this object is a little bit like <a href="?page=flag">The "Flag" object</a> with a bit less options.</p>
</div>