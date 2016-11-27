    <footer class="footer env--negative" id="contact">
        <div class="grid ctnt vcard" itemscope itemtype="http://schema.org/Organization">
            <h2 class="grid__item one-whole title title--footer fn org" itemprop="legalName">The Company</h2>
            <div class="grid__item one-third portable-one-whole">
                <span class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span class="street-address" itemprop="streetAddress">1, road St</span><br />
                    <span class="locality" itemprop="addressLocality">Sydney</span> <span class="postal-code" itemprop="postalCode">2000</span> <span class="state">NSW</span>
                </span>
            </div><!--
            --><dl class="grid__item one-third portable-one-whole split">
                <dt class="split__title"><?php echo $footer__text['tel']; ?></dt>
                <dd><span class="tel"><span class="value" itemprop="telephone">+ 61 (02) 1234-5678</span></span></dd>
                <dt class="split__title"><?php echo $footer__text['fax']; ?></dt>
                <dd><span class="tel"><span class="value" itemprop="faxNumber">+ 61 (02) 1111-2222</span></span></dd>
            </dl><!--
            --><div class="grid__item one-third portable-one-whole">
                <a href="mailto:<?php echo $contact__mail; ?>" class="email" itemprop="email"><?php echo $contact__mail; ?></a>
                <ul class="nav socials">
                    <li class="socials__item socials__item--youtube"><a href="http://www.youtube.com/user/theCompany" class="socials__link jsHook popUp" title="Youtube" itemprop="url"><span class="accessibility">Youtube</span></a></li>
                    <li class="socials__item socials__item--twitter"><a href="http://twitter.com/theCompany" class="socials__link jsHook popUp" title="Twitter" itemprop="url"><span class="accessibility">Twitter</span></a></li>
                    <li class="socials__item socials__item--facebook"><a href="https://www.facebook.com/theCompany" class="socials__link jsHook popUp" title="Facebook" itemprop="url"><span class="accessibility">Facebook</span></a></li>
                </ul>
            </div>
        </div>
    </footer>