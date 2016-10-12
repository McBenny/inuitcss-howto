    <h3>Table management</h3>
    <p>Tables are a native HTML feature that has some strange behaviour sometimes. The following classes help to get back some control over it.</p>
    <h4>.o-table</h4>
    <p>This class is the "<em>main</em>" class that applies to the <em>table</em> itself. It is necessary for the other classes to take effect.<br />
    It will also force the table to occupy the whole width available.</p>
    <p>It has several modifiers to change the behaviour of the following elements:</p>
    <ul>
        <li><strong>.o-table--fixed</strong>: each columns will have the same width whatever the content.</li>
        <li><strong>.o-table--tiny</strong>, <strong>.o-table--small</strong>, <strong>.o-table--large</strong>, <strong>.o-table--huge</strong>, : varies the padding of the cells from tiny to huge. Default behaviour doesn't display any padding.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;table class="<strong>o-table</strong>">
    &lt;tr>
        &lt;td>First...&lt;/td>
        &lt;td>2...&lt;/td>
        &lt;td>Third cell...&lt;/td>
    &lt;/tr>
    ...
&lt;/table>

&lt;table class="o-table <strong>o-table--fixed</strong>">
    &lt;tr>
        &lt;td>First...&lt;/td>
        &lt;td>2...&lt;/td>
        &lt;td>Third cell...&lt;/td>
    &lt;/tr>
    ...
&lt;/table>

&lt;table class="o-table <strong>o-table--huge</strong>">
    &lt;tr>
        &lt;td>First...&lt;/td>
        &lt;td>2...&lt;/td>
        &lt;td>Third cell...&lt;/td>
    &lt;/tr>
    ...
&lt;/table>
</code>
    <div class="u-margin-bottom">
        <table class="o-table">
            <tr>
                <td class="bg--1">First...</td>
                <td class="bg--2">2</td>
                <td class="bg--3">Third cell...</td>
            </tr>
            <tr>
                <td class="bg--12">...</td>
                <td class="bg--22">...</td>
                <td class="bg--32">...</td>
            </tr>
        </table>
    </div>
    <div class="u-margin-bottom">
        <table class="o-table o-table--fixed">
            <tr>
                <td class="bg--1">First...</td>
                <td class="bg--2">2</td>
                <td class="bg--3">Third cell...</td>
            </tr>
            <tr>
                <td class="bg--12">...</td>
                <td class="bg--22">...</td>
                <td class="bg--32">...</td>
            </tr>
        </table>
    </div>
    <div class="u-margin-bottom">
        <table class="o-table o-table--huge">
            <tr>
                <td class="bg--1">First...</td>
                <td class="bg--2">2</td>
                <td class="bg--3">Third cell...</td>
            </tr>
            <tr>
                <td class="bg--12">...</td>
                <td class="bg--22">...</td>
                <td class="bg--32">...</td>
            </tr>
        </table>
    </div>
