<div class="o-wrapper">
    <h3>The "Block" structure</h3>
    <p>This structure allows you to display an image and a text under it. Pretty simple!</p>
    <p>It comes with a default spacing between the image and the body of the block and an alignment at the center for both the image and the body.</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>o-block</strong>">
    &lt;div class="<strong>o-block__img</strong>">
        &lt;img... />
    &lt;/div>
    &lt;div class="<strong>o-block__body</strong>">
        The body of the block...
    &lt;/div>
&lt;/div>
</code>
    <div class="u-margin-bottom  o-block">
        <div class="o-block__img">
            <img src="images/poster.jpg" alt="..." />
        </div>
        <div class="o-block__body">
            The body of the block... lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolore nam soluta pariatur repellat qui incidunt vero placeat laboriosam!
        </div>
    </div>

    <h4>Spacing</h4>
    <p>To manage the spacing between the image and the text, use these classes: <strong>.o-block--flush</strong>, <strong>.o-block--tiny</strong>, <strong>.o-block--small</strong>, <strong>.o-block--large</strong>, <strong>.o-block--huge</strong> to respectively generate <em>no space</em>, a <em>tiny</em> space, a <em>small</em> space (both smaller than the default spacing), or a <em>large</em> space or a <em>huge</em> space.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-block <strong>o-block--tiny</strong>">
    &lt;div class="o-block__img">
        &lt;img... />
    &lt;/div>
    &lt;div class="o-block__body">
        The body of the block with tiny spacing...
    &lt;/div>
&lt;/div>

&lt;div class="o-block <strong>o-block--huge</strong>">
    &lt;div class="o-block__img">
        &lt;img... />
    &lt;/div>
    &lt;div class="o-block__body">
        The body of the block with huge spacing...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item u-1/2">
            <div class="o-block o-block--tiny">
                <div class="o-block__img">
                    <img src="images/poster.jpg" alt="..." />
                </div>
                <div class="o-block__body">
                    The body of the block with tiny spacing... lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
        <div class="o-layout__item u-1/2">
            <div class="o-block o-block--huge">
                <div class="o-block__img">
                    <img src="images/poster.jpg" alt="..." />
                </div>
                <div class="o-block__body">
                    The body of the block with huge spacing... lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
    </div>

    <h4>Alignment</h4>
    <p>To change the alignment, use:</p>
    <ul>
        <li><strong>.o-block--left</strong>: will align the image and the text to the left.</li>
        <li><strong>.o-block--right</strong>: will align the image and the text to the right.</li>
    </ul>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-block <strong>o-block--right</strong>">
    &lt;div class="o-block__img">
        &lt;img... />
    &lt;/div>
    &lt;div class="o-block__body">
        The body of the block...
    &lt;/div>
&lt;/div>
</code>
    <div class="o-block o-block--right">
        <div class="o-block__img">
            <img src="images/poster.jpg" alt="..." />
        </div>
        <div class="o-block__body">
            The body of the block... lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolore nam soluta pariatur repellat qui incidunt vero placeat laboriosam!
        </div>
    </div>

</div>