    <h3>Forcing the ratio</h3>
    <p>This allows you to force the ratio an image, iframe or object to what you desire no matter its initial ratio.</p>
    <p>Built-in ratios are 2:1, 4:3 and 16:9. You can add or change these ratios by editing the <code>$inuit-ratios</code> variable located in <code>./objects/_objects.ratio.scss</code>. I you decide to change them, rewrite the variable in <code>.settings/_settings.global.scss</code>.</p>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>o-ratio o-ratio--2:1</strong>">
    &lt;img... class="<strong>o-ratio__content</strong>" />
&lt;/div>

&lt;div class="<strong>o-ratio o-ratio--4:3</strong>">
    &lt;img... class="<strong>o-ratio__content</strong>" />
&lt;/div>

&lt;div class="<strong>o-ratio o-ratio--16:9</strong>">
    &lt;iframe... (embedding a video) />
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item u-1/3">
            <div class="o-ratio o-ratio--2:1">
                <img src="http://placehold.it/350x350" alt="" class="o-ratio__content" title="originating ratio: 7:5, display: 2:1" />
            </div>
        </div>
        <div class="o-layout__item u-1/3">
            <div class="o-ratio o-ratio--4:3">
                <img src="http://placehold.it/350x350" alt="" class="o-ratio__content" title="originating ratio: 7:5, display: 4:3" />
            </div>
        </div>
        <div class="o-layout__item u-1/3">
            <div class="o-ratio o-ratio--16:9">
                <iframe src="https://player.vimeo.com/video/100902001" width="422" height="238" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <p>This object shall not be confused with the <a href="?page=crop">"Crop" feature</a>.</p>
