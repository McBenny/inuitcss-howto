<div class="demo">
    <h2>Objects.list-inline</h2>
    <p>The list-inline object simply displays a list of items in one line.</p>
    <p><code>ul.list-inline > li</code></p>
    <ul class="list-inline">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
    </ul>
    <hr>
    <p>If you wish to completely remove the whitespace between items, three ways:</p>
    <ul>
        <li>omit the closing &lt;/li> tag (recommended by the creator):<br />
            <pre><code>
&lt;ul class="list-inline">
    &lt;li>One
    &lt;li>Two
    &lt;li>Three
&lt;/ul>
            </code><pre>
        </li>
        <li>insert comments between &lt;li>s :<br />
            <pre><code>
&lt;ul class="list-inline">
    &lt;li>One&lt;/li>&lt;!--
    -->&lt;li>Two&lt;/li>&lt;!--
    -->&lt;li>Three&lt;/li>
&lt;/ul>
            </code><pre>
        </li>
        <li>put all the &lt;li>s onto the same line, without space:<br />
            <pre><code>
&lt;ul class="list-inline">
    &lt;li>One&lt;/li>&lt;li>Two&lt;/li>&lt;li>Three&lt;/li>
&lt;/ul>
            </code><pre>
        
    </ul>
    <ul class="list-inline">
        <li>One</li><!--
        --><li>Two</li><!--
        --><li>Three</li>
    </ul>
    <hr>
    <p><code>ul.list-inline.list-inline--delimited > li</code> displays a delimiter character (-*-)<a href="#notes">*</a></p>
    <ul class="list-inline list-inline--delimited">
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
    </ul>
    <ul class="notes" id="notes">
        <li>A variable has to be activated to achieve this:</li>
        <li>$inuit-enable-list-inline--delimited</li>
        <li>The variable to change the delimiter:</li>
        <li>$inuit-list-inline-delimit-character</li>
    </ul>
</div>
