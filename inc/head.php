<?php
$dir = '';
if (
    strpos($_SERVER['REQUEST_URI'], 'creation') ||
    strpos($_SERVER['REQUEST_URI'], 'marketing') ||
    strpos($_SERVER['REQUEST_URI'], 'resources')
) {
    $dir = '../';
}

define('ROOT_DIR', $dir);
?>

<!-- The Essentials -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS stylesheets -->
<link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/global.css">
<link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/header.css">
<link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/main.css">

<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo ROOT_DIR; ?>assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo ROOT_DIR; ?>assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_DIR; ?>assets/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo ROOT_DIR; ?>assets/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php echo ROOT_DIR; ?>assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3G4YBL3W22"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-3G4YBL3W22');
</script>