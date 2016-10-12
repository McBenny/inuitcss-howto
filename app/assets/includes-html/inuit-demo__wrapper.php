<div class="o-wrapper">
    <h3>The main wrapper</h3>
    <h4>.o-wrapper</h4>
    <p>This class is used as a "main" container, it centers the block into its parent, constrains the content to the <code>$inuit-wrapper-width</code> width, or to be more precise, to a <strong>max-width</strong> of <code>$inuit-wrapper-width</code> and adds a nice padding on the sides.</p>
    <p>Built-in width is set in the <code>$inuit-wrapper-width</code> variable located in <code>./objects/_objects.wrapper.scss</code>. I you decide to change them, rewrite the variable in <code>.settings/_settings.global.scss</code>.</p>
    <p>It has several modifiers to change the padding on the sides:</p>
    <ul>
        <li><strong>.o-wrapper--tiny</strong>, <strong>.o-wrapper--small</strong>, <strong>.o-wrapper--large</strong>, <strong>.o-wrapper--huge</strong>, : varies the padding on the left and right sides, standard padding being between <em>small</em> and <em>large</em>.</li>
    </ul>
    <p><strong>Examples:</strong></p>
<code class="block u-margin-bottom">&lt;div class="<strong>o-wrapper</strong>">
    ...
&lt;/div>

&lt;div class="o-wrapper <strong>o-wrapper--huge</strong>">
    ...
&lt;/div>
</code>
    <div class="bg--1  o-wrapper">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint labore repellat rem recusandae itaque, placeat provident inventore. Impedit omnis, nemo exercitationem earum blanditiis quia. Eligendi expedita ut, minima iusto totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, nulla perferendis debitis, ut velit cumque ratione consequuntur vero itaque, dicta earum et fugit ad qui iusto totam quaerat expedita maxime.</p>
    </div>
    <div class="bg--1  o-wrapper o-wrapper--huge">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint labore repellat rem recusandae itaque, placeat provident inventore. Impedit omnis, nemo exercitationem earum blanditiis quia. Eligendi expedita ut, minima iusto totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, nulla perferendis debitis, ut velit cumque ratione consequuntur vero itaque, dicta earum et fugit ad qui iusto totam quaerat expedita maxime.</p>
    </div>
</div>