<div class="demo">
    <h2>Objects.flag</h2>
    <p><code>.flag > .flag__img, .flag > .flag__body</code>: The flag object is a design pattern similar to the media object, however it gives us control over the vertical alignments of the text and image.</p>
    <div class="flag">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--tiny > .flag__img</code> Tiny space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="flag flag--tiny">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--small > .flag__img</code> Small space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="flag flag--small">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--large > .flag__img</code> Large space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="flag flag--large">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--huge > .flag__img</code> Huge space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="flag flag--huge">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--rev > img.flag__img</code> Reversed flag objects have their image-content to the right, and text-content to the left.<a href="#notes">*</a>.</p>
    <div class="flag flag--rev">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--flush > img.flag__img</code> Flush flag objects have no space between the image- and text-content<a href="#notes">*</a>.</p>
    <div class="flag flag--flush">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--top > img.flag__img</code> Vertically top aligned flag objects<a href="#notes">*</a>.</p>
    <div class="flag flag--top">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--bottom > img.flag__img</code> Vertically bottom aligned flag objects<a href="#notes">*</a>.</p>
    <div class="flag flag--bottom">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.flag.flag--responsive > .flag__img</code> There is a very pragmatic, simple implementation of a responsive flag object, which simply places the text-content beneath the image-content.<a href="#notes">*</a>.</p>
    <div class="flag flag--responsive">
        <div class="flag__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="flag__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-flag--tiny</li>
        <li>$inuit-enable-flag--small</li>
        <li>$inuit-enable-flag--large</li>
        <li>$inuit-enable-flag--huge</li>
        <li>$inuit-enable-flag--rev</li>
        <li>$inuit-enable-flag--flush</li>
        <li>$inuit-enable-flag--top</li>
        <li>$inuit-enable-flag--bottom</li>
        <li>The responsive display, with the image on top of the text is managed by default with the two following variables, the second waiting for a width in pixels to "swap".</li>
        <li>$inuit-enable-flag--responsive</li>
        <li>$inuit-flag-collapse-at</li>
    </ul>
</div>
