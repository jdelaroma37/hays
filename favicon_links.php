<?php
// Get the root URL path dynamically
$root = str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(__DIR__));
?>

<!-- FAVICON SET -->
<link rel="icon" href="<?php echo $root; ?>/favicon_io/favicon.ico" type="image/x-icon">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>/favicon_io/favicon-16x16.png">
<link rel="apple-touch-icon" href="<?php echo $root; ?>/favicon_io/apple-touch-icon.png">
<link rel="manifest" href="<?php echo $root; ?>/favicon_io/site.webmanifest">
