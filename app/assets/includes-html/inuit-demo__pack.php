    <h3>The pack object</h3>
    <p>The pack object simply causes any number of elements to pack up horizontally to automatically fill an equal, fluid width of their parent.</p>
    <p>Simply place the <strong>.o-pack</strong> class on the container element and add an <strong>.o-pack__item</strong> on each element inside, et voilà!</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>o-pack</strong>">
    &lt;div class="<strong>o-pack__item</strong>">Many bananas&lt;/div>
    &lt;div class="<strong>o-pack__item</strong>">Apples&lt;/div>
    &lt;div class="<strong>o-pack__item</strong>">3 Oranges&lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item">
            <div class="o-pack">
                <div class="bg--1  o-pack__item">Many bananas</div>
                <div class="bg--12  o-pack__item">Apples<br />...</div>
                <div class="bg--2  o-pack__item">3 Oranges<br />...<br />...</div>
            </div>
        </div>
    </div>

    <p>If the default behaviour forces the elements to have the same width, you can disable this by adding the <strong>.o-pack--auto</strong> class to the container, thus each element will occupy a width depending on its content.</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-pack <strong>o-pack--auto</strong>">
    &lt;div class="o-pack__item">Many bananas&lt;/div>
    &lt;div class="o-pack__item">Apples&lt;/div>
    &lt;div class="o-pack__item">3 Oranges&lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item">
            <div class="o-pack o-pack--auto">
                <div class="bg--1  o-pack__item">Many bananas</div>
                <div class="bg--12  o-pack__item">Apples<br />...</div>
                <div class="bg--2  o-pack__item">3 Oranges<br />...<br />...</div>
            </div>
        </div>
    </div>

    <p>You can manage the vertical alignment of the elements, that defaults to <em>top</em> by adding <strong>.o-pack--middle</strong> or <strong>.o-pack--bottom</strong> clases to the container to align the element to their middle or bottom respectively.</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-pack <strong>o-pack--bottom</strong>">
    &lt;div class="o-pack__item">Bananas&lt;/div>
    &lt;div class="o-pack__item">Apples&lt;/div>
    &lt;div class="o-pack__item">Oranges&lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item">
            <div class="o-pack o-pack--bottom">
                <div class="bg--1  o-pack__item">Bananas</div>
                <div class="bg--12  o-pack__item">Apples<br />...</div>
                <div class="bg--2  o-pack__item">Oranges<br />...<br />...</div>
            </div>
        </div>
    </div>

    <p>There are several other modifiers to change the behaviour of the elements:</p>
    <ul>
        <li><strong>.o-pack--rev</strong>: the elements will be displayed in reverse order compared to the source.</li>
        <li><strong>.o-pack--tiny</strong>, <strong>.o-pack--small</strong>, <strong>.o-pack--large</strong>, <strong>.o-pack--huge</strong>, : varies the "space" between the elements from <em>tiny</em> to <em>huge</em>. Default behaviour doesn't display any space.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="o-pack <strong>o-pack--rev</strong>">
    &lt;div class="o-pack__item">Bananas&lt;/div>
    &lt;div class="o-pack__item">Apples&lt;/div>
    &lt;div class="o-pack__item">Oranges&lt;/div>
&lt;/div>

&lt;div class="o-pack <strong>o-pack--huge</strong>">
    &lt;div class="o-pack__item">Bananas&lt;/div>
    &lt;div class="o-pack__item">Apples&lt;/div>
    &lt;div class="o-pack__item">Oranges&lt;/div>
&lt;/div>
</code>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item">
            <div class="o-pack o-pack--rev">
                <div class="bg--1  o-pack__item">Bananas</div>
                <div class="bg--12  o-pack__item">Apples<br />...</div>
                <div class="bg--2  o-pack__item">Oranges<br />...<br />...</div>
            </div>
        </div>
    </div>
    <div class="o-layout u-margin-bottom">
        <div class="o-layout__item">
            <div class="o-pack o-pack--huge">
                <div class="bg--1  o-pack__item">Bananas</div>
                <div class="bg--12  o-pack__item">Apples<br />...</div>
                <div class="bg--2  o-pack__item">Oranges<br />...<br />...</div>
            </div>
        </div>
    </div>
