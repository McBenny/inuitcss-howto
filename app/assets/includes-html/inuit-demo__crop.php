<div class="o-wrapper">
    <h3>Cropping</h3>
    <p>This allows you to crop an element on a specific width/height ratio. Perfect if you need to display an image or video for instance in a specific ratio, so that what's beside fits in height.</p>
    <p>Built-in ratios are 2:1, 4:3 and 16:9. You can add or change these ratios by editing the <code>$inuit-crops</code> variable located in <code>./objects/_objects.crop.scss</code>. If you decide to change them, rewrite the variable in <code>.settings/_settings.global.scss</code>.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>o-crop o-crop--2:1</strong>">
    &lt;img...  class="<strong>o-crop__content</strong>" />
&lt;/div>

&lt;div class="<strong>o-crop o-crop--4:3</strong>">
    &lt;img...  class="<strong>o-crop__content</strong>" />
&lt;/div>

&lt;div class="<strong>o-crop o-crop--16:9</strong>">
    &lt;div class="o-crop__content">
        &lt;iframe... (embedding a video) />
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item u-1/3">
            <div class="o-crop o-crop--2:1">
                <img src="http://placehold.it/350x250" alt="" class="o-crop__content" title="originating ratio: 7:5, display: 2:1" />
            </div>
        </div>
        <div class="o-layout__item u-1/3">
            <div class="o-crop o-crop--4:3">
                <img src="http://placehold.it/350x250" alt="" class="o-crop__content" title="originating ratio: 7:5, display: 4:3" />
            </div>
        </div>
        <div class="o-layout__item u-1/3">
            <div class="o-crop o-crop--16:9">
                <div class="o-crop__content">
                    <iframe src="https://player.vimeo.com/video/100902001" width="422" height="238" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <p>As the content will be cropped, it is important to manage the position of the element inside its container. The default position is top left.</p>
    <p>To change the position, use the following classes: <strong>o-crop__content--right</strong>, <strong>o-crop__content--bottom</strong> and <strong>o-crop__content--center</strong> to position the cropped element accordingly into its container. You can of course use the bottom alignment with any of the <em>center</em> or <em>right</em> alignment altogether.</p>
<code class="block u-margin-bottom">&lt;div class="o-crop o-crop--2:1">
    &lt;img...  class="o-crop__content <strong>o-crop__content--center</strong>" />
&lt;/div>

&lt;div class="o-crop o-crop--4:3">
    &lt;img...  class="o-crop__content <strong>o-crop__content--bottom</strong>" />
&lt;/div>

&lt;div class="o-crop o-crop--16:9">
    &lt;div class="o-crop__content <strong>o-crop__content--right</strong>">
        &lt;iframe... (embedding a video) />
    &lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item u-1/3">
            <div class="o-crop o-crop--2:1">
                <img src="http://placehold.it/350x250" alt="" class="o-crop__content o-crop__content--center" title="Aligned center" />
            </div>
        </div>
        <div class="o-layout__item u-1/3">
            <div class="o-crop o-crop--4:3">
                <img src="http://placehold.it/350x250" alt="" class="o-crop__content o-crop__content--bottom" title="Aligned to the bottom" />
            </div>
        </div>
        <div class="o-layout__item u-1/3">
            <div class="o-crop o-crop--16:9">
                <div class="o-crop__content o-crop__content--right">
                    <iframe src="https://player.vimeo.com/video/100902001" width="422" height="238" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


    <p>This feature doesn't gives the width or the height of the element that's cropped, it just maintains the ratio so to achieve a specific width, you have to surround this object with a layout for instance (<strong>.o-layout + .o-layout__item...</strong>).</p>
    <p>Pay attention that this feature also doesn't enlarge the element that has the <strong>.o-crop__content</strong> class so if your content is smaller than the container, the visual result will not be what you would expect.</p>

    <p>This object shall not be confused with the <a href="?page=ratio">"force ratio" feature</a>.</p>
</div>