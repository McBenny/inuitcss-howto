    <h3>The inline list</h3>
    <p>This object is here to put all the elements of a list on a single line (as long as there is enough space ;-)).</p>
    <p>Simply place the <strong>.o-list-inline</strong> class in the <code>ul</code> and add a <strong>.o-list-inline__item</strong> on each <code>li</code> of the list, et voilà!</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;ul class="<strong>o-list-inline</strong>">
    &lt;li class="<strong>o-list-inline__item</strong>">Bananas&lt;/li>
    &lt;li class="<strong>o-list-inline__item</strong>">Apples&lt;/li>
    &lt;li class="<strong>o-list-inline__item</strong>">Oranges&lt;/li>
&lt;/ul>
</code>
    <div class="o-layout bg--1 u-margin-bottom">
        <div class="o-layout__item">
            <ul class="o-list-inline">
                <li class="o-list-inline__item">Bananas</li>
                <li class="o-list-inline__item">Apples</li>
                <li class="o-list-inline__item">Oranges</li>
            </ul>
        </div>
    </div>

    <p>If you want to insert a delimiter between the elements of the list, just add the <strong>.o-list-inline--delimited</strong> class into the <code>ul</code> tag.</p>
    <p>The default delimiter is a comma + space (, ) but you can configure it to be any other character like a pipe (|), a dash (-) or anything by editing the <code>$inuit-list-inline-delimiter</code> variable located in <code>./objects/_objects.lost-inline.scss</code>. If you decide to change it, rewrite the variable in <code>.settings/_settings.global.scss</code>.</p>
    <p><strong>Example:</strong></p>
<code class="block u-margin-bottom">&lt;ul class="<strong>o-list-inline</strong>">
    &lt;li class="<strong>o-list-inline__item</strong>">Bananas&lt;/li>
    &lt;li class="<strong>o-list-inline__item</strong>">Apples&lt;/li>
    &lt;li class="<strong>o-list-inline__item</strong>">Oranges&lt;/li>
&lt;/ul>
</code>
    <div class="o-layout bg--1 u-margin-bottom">
        <div class="o-layout__item">
            <ul class="o-list-inline o-list-inline--delimited">
                <li class="o-list-inline__item">Bananas</li>
                <li class="o-list-inline__item">Apples</li>
                <li class="o-list-inline__item">Oranges</li>
            </ul>
        </div>
    </div>
