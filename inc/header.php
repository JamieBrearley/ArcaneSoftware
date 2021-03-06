<header>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="hamburgerMenu" aria-labelledby="hamburgerMenuLabel">
        <div class="offcanvas-header">
            <a class="offcanvas-title" href="<?php echo ROOT_DIR . 'index.php'; ?>">
                <img src="<?php echo ROOT_DIR; ?>assets/logo/logo_only.svg" class="logo" alt="Arcane Software Logo">
                <h5 class="text-center brand-name" id="hamburgerMenuLabel">Arcane <span>Software</span></h5>
            </a>
            <button type="button" class="hamburgerClose" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#d199ff">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                </svg>
            </button>
        </div>
        <div class="offcanvas-body small">
            <ul>
                <li>
                    <h6>Web Solutions</h6>
                </li>
                <li><a href="<?php echo ROOT_DIR; ?>websolutions/web_design.php">Web Design</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>websolutions/web-dev.php">Web Development</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>websolutions/ecommerce_design.php">eCommerce Web Design</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>websolutions/website_photography.php">Website Photography</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>websolutions/website_hosting.php">Website Hosting</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>websolutions/graphic_design.php">Visual Design</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>websolutions/website_management.php">Website Management</a></li>
            </ul>
            <ul>
                <li>
                    <h6>Digital Marketing</h6>
                </li>
                <li><a href="<?php echo ROOT_DIR; ?>marketing/seo.php">Search Engine Optimisation (SEO)</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>marketing/social_media.php">Social Media</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>marketing/content_marketing.php">Content Marketing</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>marketing/digital_marketing.php">Digital Marketing</a></li>
            </ul>
            <ul>
                <li>
                    <h6>Resources</h6>
                </li>
                <li><a href="<?php echo ROOT_DIR; ?>resources/truth_about_website_builders.php">The truth about website builders</a></li>
                <li><a href="<?php echo ROOT_DIR; ?>resources/website_cost.php">The Cost of Web Solutions</a></li>
            </ul>
        </div>
        <div class="offcanvas-footer small">
            <ul class="col-xl-6 company-info">
                <!-- <li><a href="tel:+1300 000 000">1300 000 000</a></li> -->
                <li>
                    <!-- Calendly link widget begin -->
                    <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/arcane-software/discovery-call?background_color=08000f&text_color=f3f7f7&primary_color=33ffff'});return false;">Book a consultation</a>
                    <!-- Calendly link widget end -->
                </li>
                <li><a href="<?php echo ROOT_DIR; ?>contact_us.php">or drop us a message</a></li>
            </ul>
            <div class="header-socials">
                <a href="https://www.facebook.com/ArcaneSoftwareAU" target="_blank" alt="Facebook">
                    <i class="fab fa-facebook" aria-hidden="true"></i></a>
                <a href="https://m.me/ArcaneSoftwareAU" target="_blank" alt="Messenger">
                    <i class="fab fa-facebook-messenger" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/arcanesoftware/" target="_blank" alt="Instagram">
                    <i class="fab fa-instagram" aria-hidden="true"></i></a>
                <a href="https://twitter.com/Arcane_Software" target="_blank" alt="Twitter">
                    <i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a href="https://wa.me/message/MW5I2D3HW5M7L1" target="_blank" alt="Whats App">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/arcane-software" target="_blank" alt="Linkedin">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                <a href="https://www.tiktok.com/@arcanesoftware" target="_blank" alt="TikTok">
                    <i class="fab fa-tiktok" aria-hidden="true"></i></a>
                <a href="mailto:hello@ArcaneSoftware.com.au" target="_blank" alt="TikTok">
                    <i class="fas fa-envelope" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</header>