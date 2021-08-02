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

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/global.css">
<link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/header.css">
<link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/main.css">

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