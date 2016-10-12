<div class="demo">
    <h2>Objects.media</h2>
    <p><code>.media > .media__img, .media > .media__body</code>: Place any image- and text-like content side-by-side.</p>
    <div class="media">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.media.media--tiny > .media__img</code> Tiny space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="media media--tiny">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.media.media--small > .media__img</code> Small space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="media media--small">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.media.media--large > .media__img</code> Large space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="media media--large">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.media.media--huge > .media__img</code> Huge space between the image and the text content<a href="#notes">*</a>.</p>
    <div class="media media--huge">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.media.media--rev > img.media__img</code> Reversed image location (right instead of left). Extends `.media`<a href="#notes">*</a>.</p>
    <div class="media media--rev">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.media.media--flush > img.media__img</code> Flush media objects have no space between the image- and text-content<a href="#notes">*</a>.</p>
    <div class="media media--flush">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <hr>
    <p><code>.media.media--responsive > .media__img</code> There is a very pragmatic, simple implementation of a responsive media object, which simply places the text-content beneath the image-content.<a href="#notes">*</a>.</p>
    <div class="media media--responsive">
        <div class="media__img">
            <img src="http://placehold.it/200x100/e8117f/fff" alt="" />
        </div>
        <div class="media__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa numquam suscipit illo eveniet eaque assumenda beatae, molestias at, architecto in explicabo facere non amet! Enim perspiciatis maiores expedita non.</p>
        </div>
    </div>
    <ul class="notes" id="notes">
        <li>Several variables have to be activated to achieve this:</li>
        <li>$inuit-enable-media--tiny</li>
        <li>$inuit-enable-media--small</li>
        <li>$inuit-enable-media--large</li>
        <li>$inuit-enable-media--huge</li>
        <li>$inuit-enable-media--rev</li>
        <li>$inuit-enable-media--flush</li>
        <li>The responsive display, with the image on top of the text is managed by default with the two following variables, the second waiting for a width in pixels to "swap".</li>
        <li>$inuit-enable-media--responsive</li>
        <li>$inuit-media-collapse-at</li>
    </ul>
</div>
