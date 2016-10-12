    <h3>The "Box" effect</h3>
    <p>This allows you to box off content!</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;p>The body of &lt;span class="<strong>o-box</strong>">the box&lt;/span>...&lt;/p></code>
    <div class="o-layout u-margin-bottom-large">
        <div class="o-layout__item">
            <p>The body of <span class="bg--1  o-box">the box</span>... lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolore nam soluta pariatur repellat qui incidunt vero placeat laboriosam!</p>
        </div>
    </div>

    <h4>Spacing</h4>
    <p>To manage the spacing around the box, use these classes: <strong>.o-box--flush</strong>, <strong>.o-box--tiny</strong>, <strong>.o-box--small</strong>, <strong>.o-box--large</strong>, <strong>.o-box--huge</strong> to respectively generate <em>no space</em>, a <em>tiny</em> space, a <em>small</em> space (both smaller than the default spacing), or a <em>large</em> space or a <em>huge</em> space around the box.</p>
<code class="block u-margin-bottom">&lt;p>The body of &lt;span class="o-box <strong>o-box--flush</strong>">the flushed box&lt;/span>...&lt;/p>

&lt;p>The body of &lt;span class="o-box <strong>o-box--tiny</strong>">the tiny box&lt;/span>...&lt;/p>

&lt;p>The body of &lt;span class="o-box <strong>o-box--huge</strong>">the huge box&lt;/span>...&lt;/p>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item u-1/3">
            <p>The body of <span class="bg--1  o-box o-box--flush">the flushed box</span>... lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolore nam soluta pariatur repellat qui incidunt vero placeat laboriosam!</p>
        </div>
        <div class="o-layout__item u-1/3">
            <p>The body of <span class="bg--1  o-box o-box--tiny">the tiny box</span>... lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolore nam soluta pariatur repellat qui incidunt vero placeat laboriosam!</p>
        </div>
        <div class="o-layout__item u-1/3">
            <p>The body of <span class="bg--12  o-box o-box--huge">the huge box</span>... lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolore nam soluta pariatur repellat qui incidunt vero placeat laboriosam!</p>
        </div>
    </div>
