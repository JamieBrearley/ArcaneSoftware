<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('inc/head.php'); ?>
    <title>Arcane Software - Contact Us</title>

    <link rel="stylesheet" href="css/contact.css">

    <meta name="description" content="Arcane Software is a full-service digital marketing agency devoted to developing skills that help you outperform your competition. While we believe a beautiful, snappy, appealing website to be the core of a business' online profile, genuine online growth demands a distinct range of capabilities. Drop us a message today for a free consultation and quote.">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Us" />
    <meta property="og:description" content="Arcane Software is a full-service digital marketing agency devoted to developing skills that help you outperform your competition. While we believe a beautiful, snappy, appealing website to be the core of a business' online profile, genuine online growth demands a distinct range of capabilities. Drop us a message today for a free consultation and quote." />
    <meta property="og:image" content="https://arcane-software-bucket.s3.ap-southeast-2.amazonaws.com/images/logo_512.jpg" />
    <meta property="og:image:secure_url" content="https://arcane-software-bucket.s3.ap-southeast-2.amazonaws.com/images/logo_512.jpg" />
</head>

<body style="opacity: 0;">
    <?php require_once('inc/header.php'); ?>
    <main>
        <?php require('inc/hamburgerBtn.php'); ?>
        <section>
            <h1>Drop us a message!</h1>
            <div class="socialWrapper">
                <a href="https://www.facebook.com/ArcaneSoftwareAU" target="_blank" title="Facebook"><i class="fab fa-facebook"></i>
                    <h5>Facebook</h5>
                </a>
                <a href="https://m.me/ArcaneSoftwareAU" target="_blank" title="Messenger">
                    <i class="fab fa-facebook-messenger"></i>
                    <h5>Messenger</h5>
                </a>

                <a href="https://www.instagram.com/arcanesoftware/" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                    <h5>Instagram</h5>
                </a>
                <a href="https://twitter.com/Arcane_Software" target="_blank" title="Twitter">
                    <i class="fab fa-twitter"></i>
                    <h5>Twitter</h5>
                </a>
                <a href="https://wa.me/message/MW5I2D3HW5M7L1" target="_blank" title="Whats App">
                    <i class="fab fa-whatsapp"></i>
                    <h5>What's App</h5>
                </a>
                <a href="https://www.linkedin.com/company/arcane-software" target="_blank" title="Linkedin">
                    <i class="fab fa-linkedin-in"></i>
                    <h5>LinkedIn</h5>
                </a>
                <a href="https://www.tiktok.com/@arcanesoftware" target="_blank" title="TikTok">
                    <i class="fab fa-tiktok"></i>
                    <h5>TikTok</h5>
                </a>
                <a href="mailto:hello@arcanesoftware.com.au" target="_blank" title="email">
                    <i class="fas fa-envelope"></i>
                    <h5>Email</h5>
                </a>
                <!-- <a href="tel:1300000000" target="_blank" alt="phone">
                        <i class="fas fa-phone"></i>
                        <h5>Phone</h5>
                    </a> -->
            </div>
            <form class="contactWrapper">
                <!-- Client Details -->
                <div class="flex wrap">
                    <div class="floating-label validate">
                        <input type="text" class="input-control" id="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="floating-label validate">
                        <input type="text" class="input-control" id="business">
                        <label for="business">Business Name</label>
                    </div>
                    <div class="floating-label validate">
                        <input type="email" class="input-control" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="floating-label">
                        <input type="tel" class="input-control" id="phone">
                        <label for="phone">Phone</label>
                    </div>
                </div>
                <!-- Services -->
                <ul class="flex wrap" id="services">
                    <li class="checkboxGroup">
                        <input type="checkbox" id='webDesignCheckbox'>
                        <label for="webDesignCheckbox">Web Design &amp; Development</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='searchEngineCheckbox'>
                        <label for="searchEngineCheckbox">Search Engine Optimisation (SEO)</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='marketingCheckbox'>
                        <label for="marketingCheckbox">Digital Marketing</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='socialMediaCheckbox'>
                        <label for="socialMediaCheckbox">Social Media Marketing</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='socialManagementCheckbox'>
                        <label for="socialManagementCheckbox">Community Management</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='graphicDesignCheckbox'>
                        <label for="graphicDesignCheckbox">Graphic Design</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='websiteHostingCheckbox'>
                        <label for="websiteHostingCheckbox">Website Maintenance &amp; Hosting</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='brandingCheckbox'>
                        <label for="brandingCheckbox">Branding</label>
                    </li>
                    <li class="checkboxGroup">
                        <input type="checkbox" id='otherCheckbox'>
                        <label for="otherCheckbox">Other</label>
                    </li>
                </ul>
                <div class="dynamic">
                    <!-- Web Design and Development Questions -->
                    <ul id="webInfoType" class="validate">
                        <li>
                            <h6>Website Type</h6>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='basicWebType'>
                            <label for="basicWebType">Basic Website</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='marketingWebType'>
                            <label for="marketingWebType">Marketing Website</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='eCommerceWebType'>
                            <label for="eCommerceWebType">eCommerce Website</label>
                        </li>
                    </ul>
                    <ul id="webInfoBudget" class="validate">
                        <li>
                            <h6>Website Budget</h6>
                        </li>
                        <li class="radioGroup">
                            <input type="radio" name='webBudget' id='lowWebBudget'>
                            <label for="lowWebBudget">&#60; $1,000</label>
                        </li>
                        <li class="radioGroup">
                            <input type="radio" name='webBudget' id='mediumWebBudget'>
                            <label for="mediumWebBudget">$1,000 - $5,000</label>
                        </li>
                        <li class="radioGroup">
                            <input type="radio" name='webBudget' id='highWebBudget'>
                            <label for="highWebBudget">$5,000 - $10,000</label>
                        </li>
                        <li class="radioGroup">
                            <input type="radio" name='webBudget' id='eCommerceWebBudget'>
                            <label for="eCommerceWebBudget">$10,000 - $20,000</label>
                        </li>
                        <li class="radioGroup">
                            <input type="radio" name='webBudget' id='CorporateWebBudget'>
                            <label for="CorporateWebBudget">$20,000+</label>
                        </li>
                    </ul>
                    <!-- SEO questions -->
                    <ul id="seoBudget" class="validate">
                        <li>
                            <h6>Monthly SEO Budget</h6>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="seoBudget" id='lowSEOBudget'>
                            <label for="lowSEOBudget">&#60; $1,000</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="seoBudget" id='mediumSEOBudget'>
                            <label for="mediumSEOBudget">$1,000 - $1,500</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="seoBudget" id='highSEOBudget'>
                            <label for="highSEOBudget">$1,500 - $2,000</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="seoBudget" id='CorporateSEOBudget'>
                            <label for="CorporateSEOBudget">$2,000+</label>
                        </li>
                    </ul>
                    <!-- Digital Marketing Questions -->
                    <ul id="digMrkt" class="validate">
                        <li>
                            <h6>Digital Marketing Services</h6>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='searchEngineAds'>
                            <label for="searchEngineAds">Search Engine Ads</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='remarketing'>
                            <label for="remarketing">Remarketing</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='onlineAds'>
                            <label for="onlineAds">Online Ads</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='otherDigMrkt'>
                            <label for="otherDigMrkt">Other</label>
                        </li>
                    </ul>
                    <ul id="digMrktBudget" class="validate">
                        <li>
                            <h6>Monthly Ads Budget</h6>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="DigMrktBudget" id='lowDigMrktBudget'>
                            <label for="lowDigMrktBudget">&#60; $1,000</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="DigMrktBudget" id='mediumDigMrktBudget'>
                            <label for="mediumDigMrktBudget">$1,000 - $1,500</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="DigMrktBudget" id='highDigMrktBudget'>
                            <label for="highDigMrktBudget">$1,500 - $2,000</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="DigMrktBudget" id='CorporateDigMrktBudget'>
                            <label for="CorporateDigMrktBudget">$2,000+</label>
                        </li>
                    </ul>
                    <!-- Social Marketing Questions -->
                    <ul id="socialMediaAccounts" class="validate">
                        <li>
                            <h6>Social Media Accounts</h6>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='smFacebook'>
                            <label for="smFacebook">Facebook</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='smInstagram'>
                            <label for="smInstagram">Instagram</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='smLinkedIn'>
                            <label for="smLinkedIn">LinkedIn</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='smTikTok'>
                            <label for="smTikTok">TikTok</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="checkbox" id='smOther'>
                            <label for="smOther">Other</label>
                        </li>
                    </ul>
                    <ul id="socialBudget" class="validate">
                        <li>
                            <h6>Monthly Social Media Budget</h6>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="socialMrktBudget" id='lowSocialMarketingBudget'>
                            <label for="lowSocialMarketingBudget">&#60; $1,000</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="socialMrktBudget" id='mediumSocialMarketingBudget'>
                            <label for="mediumSocialMarketingBudget">$1,000 - $1,500</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="socialMrktBudget" id='highSocialMarketingBudget'>
                            <label for="highSocialMarketingBudget">$1,500 - $2,000</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="socialMrktBudget" id='CorporateSocialMarketingBudget'>
                            <label for="CorporateSocialMarketingBudget">$2,000+</label>
                        </li>
                    </ul>
                    <!-- Logo Budget -->
                    <ul id="graphicDesign" class="validate">
                        <li>
                            <h6>Logo Design</h6>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="logoBudget" id='lowLogoDesign'>
                            <label for="lowLogoDesign">&#60; $500</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="logoBudget" id='medLogoDesign'>
                            <label for="medLogoDesign">$500 - $1,000</label>
                        </li>
                        <li class="checkboxGroup">
                            <input type="radio" name="logoBudget" id='highLogoDesign'>
                            <label for="highLogoDesign">$1,000 - $2,000</label>
                        </li>
                    </ul>
                </div>
                <!-- Website URL -->
                <div id="hosting" class="validate">
                    <div class="floating-label">
                        <input type="text" class="input-control" id="hostingURL">
                        <label for="hostingURL">Website URL</label>
                    </div>
                </div>
                <div class="floating-label">
                    <textarea id="message" class="input-control"></textarea>
                    <label for="message">Any additional information</label>
                </div>
                <p class="overline">No reCAPTCHA, no worries. We use completely custom techniques.</p>
                <button type="submit" id="submit" class="btn-animate" title="submit form">Submit</button>
            </form>
            <p class="overline" id="postResult" style="visibility: hidden;">No reCAPTCHA, no worries. We use completely custom techniques.</p>
        </section>
    </main>

    <?php require_once('inc/footer.php'); ?>
    <script src="js/contact.js"></script>

</body>

</html>