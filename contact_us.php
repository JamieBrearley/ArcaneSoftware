<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('inc/head.php'); ?>
    <title>Arcane Software - Contact Us</title>

    <link rel="stylesheet" href="css/contact.css">

    <meta name="description" content="Arcane Software is a full-service digital marketing agency devoted to developing skills that help you outperform your competition. We use a combination of data analysis, technical intellect, and web expertise to make intelligent, informed decisions that help your business expand and grow online, from Search Engine Optimisation (SEO) to Social Media management and eye-catching web design.">
</head>

<body style="opacity: 0;">
    <?php require_once('inc/header.php'); ?>
    <main>
        <?php require('inc/hamburgerBtn.php'); ?>
        <section>
            <h1>Contact us!</h1>
            <div class="contactWrapper">
                <div class="socialWrapper">
                    <a href="https://www.facebook.com/ArcaneSoftwareAU" target="_blank" alt="Facebook"><i class="fab fa-facebook"></i>
                        <h5>Facebook</h5>
                    </a>
                    <a href="https://m.me/ArcaneSoftwareAU" target="_blank" alt="Messenger">
                        <i class="fab fa-facebook-messenger"></i>
                        <h5>Messenger</h5>
                    </a>

                    <a href="https://www.instagram.com/arcanesoftware/" target="_blank" alt="Instagram">
                        <i class="fab fa-instagram"></i>
                        <h5>Instagram</h5>
                    </a>
                    <a href="https://twitter.com/Arcane_Software" target="_blank" alt="Twitter">
                        <i class="fab fa-twitter"></i>
                        <h5>Twitter</h5>
                    </a>
                    <a href="https://wa.me/message/MW5I2D3HW5M7L1" target="_blank" alt="Whats App">
                        <i class="fab fa-whatsapp"></i>
                        <h5>What's App</h5>
                    </a>
                    <a href="https://www.linkedin.com/company/arcane-software" target="_blank" alt="Linkedin">
                        <i class="fab fa-linkedin-in"></i>
                        <h5>LinkedIn</h5>
                    </a>
                    <a href="https://www.tiktok.com/@arcanesoftware" target="_blank" alt="TikTok">
                        <i class="fab fa-tiktok"></i>
                        <h5>TikTok</h5>
                    </a>
                    <a href="mailto:hello@arcanesoftware.com.au" target="_blank" alt="email">
                        <i class="fas fa-envelope"></i>
                        <h5>Email</h5>
                    </a>
                    <!-- <a href="tel:1300000000" target="_blank" alt="phone">
                        <i class="fas fa-phone"></i>
                        <h5>Phone</h5>
                    </a> -->
                </div>
                <form action="inc/contact.php">
                    <!-- Your Details -->
                    <!-- Name -->
                    <!-- Business -->
                    <!-- Email -->
                    <!-- Phone -->

                    <!-- How can we help? -->
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>Web Design &amp; Development</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Search Engine Optimisation (SEO)</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Google Ads &amp; Remarketing</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Social Media Marketing</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Facebook &amp; Instagram Ads</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Logo Design</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Website Maintenance / Hosting</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Branding</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Other</label>
                        </li>
                    </ul>
                    <!-- Message -->

                    <!-- reCAPTCHA -->
                    <!-- Send Message -->
                </form>
            </div>
        </section>
    </main>

    <?php require_once('inc/footer.php'); ?>

</body>

</html>