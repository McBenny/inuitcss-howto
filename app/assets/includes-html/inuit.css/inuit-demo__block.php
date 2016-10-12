<div class="demo">
    <h2>Objects.block</h2>
    <p><code>.block > .block__img, .block > .block__body</code>: A simple abstraction to cover a very commonly occurring design pattern.</p>
    <div class="block">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <hr>
    <p><code>.block.block--flush > img.block__img</code> No space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="block block--flush">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <hr>
    <p><code>.block.block--tiny > .block__img</code> Tiny space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="block block--tiny">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <hr>
    <p><code>.block.block--small > .block__img</code> Small space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="block block--small">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <hr>
    <p><code>.block.block--large > .block__img</code> Large space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="block block--large">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <hr>
    <p><code>.block.block--huge > .block__img</code> Huge space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="block block--huge">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <hr>
    <p><code>.block.block--right > .block__img</code> Right-aligned blocks<a href="#notes">*</a>.</p>
    <div class="block block--right">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <hr>
    <p><code>.block.block--center > .block__img</code> Center-aligned blocks<a href="#notes">*</a>.</p>
    <div class="block block--center">
        <img src="http://placehold.it/200x100/e8117f/fff" alt="" class="block__img" />
        <p class="block__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-block--flush</li>
        <li>$inuit-enable-block--tiny</li>
        <li>$inuit-enable-block--small</li>
        <li>$inuit-enable-block--large</li>
        <li>$inuit-enable-block--huge</li>
        <li>$inuit-enable-block--right</li>
        <li>$inuit-enable-block--center</li>
    </ul>
</div>
