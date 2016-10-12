<div class="demo">
    <h2>Trumps.spacing</h2>
    <p>Margin and padding helper classes. Use these to tweak layout on a micro level.</p>
    <p><code>.m</code>: A margin is added all around the box<a href="#notes">*</a>.</p>
    <div class="reveal-margins clearfix">
        <div class="m greybox">Content of the box</div>
    </div>
    <hr>
    <p><code>.mt</code>, <code>.mr</code>, <code>.mb</code> and <code>.ml</code> respectively add a margin on the <b>top</b>, the <b>right</b>, the <b>bottom</b> and the <b>left</b> side of a box.</p>
    <div class="pack pack--small">
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="mt greybox"><code>.mt</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="mr greybox"><code>.mr</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="mb greybox"><code>.mb</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="ml greybox"><code>.ml</code></div>
            </div>
        </div>
    </div>
    <p><code>.mh</code> and <code>.mv</code> respectively add a margin on the <b>horizontal</b> and the <b>vertical</b> axis sides of a box.</p>
    <div class="pack pack--small">
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="mh greybox"><code>.mh</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="mv greybox"><code>.mv</code></div>
            </div>
        </div>
    </div>
    <hr>
    <p>Different sizes of margin can be applied: <code>.m--</code> for tiny, <code>.m-</code> for small, <code>.m+</code> for large  and <code>.m++</code> for huge margins<a href="#notes">*</a>.</p>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="m m-- greybox"><code>.m.m--</code> for tiny margins</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="m m- greybox"><code>.m.m-</code> for small margins</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="m m+ greybox"><code>.m.m+</code> for large margins</div>
            </div>
        </div>
    </div>
    <div class="pack pack--small">
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="m m++ greybox"><code>.m.m++</code> for huge margins</div>
            </div>
        </div>
    </div>
    <hr>
    <p>To get rid of margin use<a href="#notes">*</a>:</p>
    <ul>
        <li><code>.m0</code> for all,</li>
        <li><code>.mt0</code> for top margin,</li>
        <li><code>.mr0</code> for right margin,</li>
        <li><code>.mb0</code> for bottom margin,</li>
        <li><code>.ml0</code> for left margin,</li>
        <li><code>.mh0</code> for horizontal margins,</li>
        <li>and <code>.mv0</code> for vertical margins.</li>
    </ul>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="m m0 greybox"><code>.m0</code> for getting rid of all margins.</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="m mr0 greybox"><code>.mh0</code> for getting rid of right margin.</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="m mh0 greybox"><code>.mh0</code> for getting rid of horizontal margins.</div>
            </div>
        </div>
    </div>
    <p><code>.-m</code>: A negative margin is added all around the box<a href="#notes">*</a>.</p>
    <p>&nbsp;</p>
    <div class="reveal-margins clearfix">
        <div class="-m greybox">Content of the box</div>
    </div>
    <hr>
    <p><code>.-mt</code>, <code>.-mr</code>, <code>.-mb</code> and <code>.-ml</code> respectively add a negative margin on the <b>top</b>, the <b>right</b>, the <b>bottom</b> and the <b>left</b> side of a box.</p>
    <p>&nbsp;</p>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="-mt greybox"><code>.-mt</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="-mr greybox"><code>.-mr</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="-mb greybox"><code>.-mb</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="-ml greybox"><code>.-ml</code></div>
            </div>
        </div>
    </div>
    <p><code>.mh</code> and <code>.mv</code> respectively add a negative margin on the <b>horizontal</b> and the <b>vertical</b> axis sides of a box.</p>
    <p>&nbsp;</p>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="-mh greybox"><code>.-mh</code></div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-margins">
                <div class="-mv greybox"><code>.-mv</code></div>
            </div>
        </div>
    </div>
    <p>Different sizes of negative margin can be applied: <code>.-m--</code> for tiny, <code>.-m-</code> for small, <code>.-m+</code> for large  and <code>.-m++</code> for huge margins<a href="#notes">*</a>.</p>


    <p><code>.p</code>: A padding is added on all sides of the box<a href="#notes">*</a>.</p>
    <div class="reveal-padding p">
        <span class="greybox"><code>.p</code> (on the container)</span>
    </div>
    <hr>
    <p><code>.pt</code>, <code>.pr</code>, <code>.pb</code> and <code>.pl</code> respectively add a padding on the <b>top</b>, the <b>right</b>, the <b>bottom</b> and the <b>left</b> side of a box.</p>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-padding pt">
                <span class="greybox"><code>.pt</code> (on the container)</span>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding pr">
                <div class="greybox"><code>.pr</code> (on the container)</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding pb">
                <div class="greybox"><code>.pb</code> (on the container)</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding pl">
                <div class="greybox"><code>.pl</code> (on the container)</div>
            </div>
        </div>
    </div>
    <p><code>.ph</code> and <code>.pv</code> respectively add a padding on the <b>horizontal</b> and the <b>vertical</b> axis sides of a box.</p>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-padding ph">
                <div class="greybox"><code>.ph</code> (on the container)</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding pv">
                <div class="greybox"><code>.pv</code> (on the container)</div>
            </div>
        </div>
    </div>
    <hr>
    <p>Different sizes of paddings can be applied<a href="#notes">*</a>:</p>
    <ul>
        <li><code>.p--</code> for tiny,</li>
        <li><code>.p-</code> for small,</li>
        <li><code>.p+</code> for large</li>
        <li>and <code>.p++</code> for huge padding.</li>
    </ul>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-padding p p--">
                <div class="greybox"><code>.p--</code>  (on the container)</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding p p-">
                <div class="greybox"><code>.p-</code> (on the container)</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding p p+">
                <div class="greybox"><code>.p+</code> (on the container)</div>
            </div>
        </div>
    </div>
    <div class="pack pack--small">
        <div class="pack__item">
            <div class="reveal-padding p p++">
                <div class="greybox"><code>.p++</code> (on the container)</div>
            </div>
        </div>
    </div>
    <hr>
    <p>To get rid of padding use<a href="#notes">*</a>:</p>
    <ul>
        <li><code>.p0</code> for all,</li>
        <li><code>.pt0</code> for top padding,</li>
        <li><code>.pr0</code> for right padding,</li>
        <li><code>.pb0</code> for bottom padding,</li>
        <li><code>.pl0</code> for left padding,</li>
        <li><code>.ph0</code> for horizontal padding,</li>
        <li>and <code>.pv0</code> for vertical padding.</li>
    </ul>
    <div class="pack pack--small pack--middle">
        <div class="pack__item">
            <div class="reveal-padding p p0">
                <div class="greybox"><code>.p0</code> for getting rid of all paddings.</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding p pr0">
                <div class="greybox"><code>.ph0</code> for getting rid of right padding.</div>
            </div>
        </div>
        <div class="pack__item">
            <div class="reveal-padding p ph0">
                <div class="greybox"><code>.ph0</code> for getting rid of horizontal padding.</div>
            </div>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-margins</li>
        <li>$inuit-enable-margins--tiny</li>
        <li>$inuit-enable-margins--small</li>
        <li>$inuit-enable-margins--large</li>
        <li>$inuit-enable-margins--huge</li>
        <li>$inuit-enable-margins--none</li>
        <li>$inuit-enable-margins--negative</li>
        <li>$inuit-enable-paddings</li>
        <li>$inuit-enable-paddings--tiny</li>
        <li>$inuit-enable-paddings--small</li>
        <li>$inuit-enable-paddings--large</li>
        <li>$inuit-enable-paddings--huge</li>
        <li>$inuit-enable-paddings--none</li>
    </ul>
</div>
