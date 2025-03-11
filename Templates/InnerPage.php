<?php
require_once DocRoot.'AdminPanel'.DS.'Includes'.DS.'Index.php';
/**
 * @var string $basePath
 * @var string $layoutPath
 * @var string $assetsPath
 * @var string $mainContent
 */

//$hideFooterTop = $hideFooterTop??false;
$innerPageCommonCss = $assetsPath.'Css'.DS.'InnerPage'.DS.'Common.php';
$commonForAllPages = $assetsPath.'Css'.DS.'CommonForAllPages.php';
?>


<!doctype html>
<html lang="en-US">

<?php include $layoutPath . 'Head.php' ?>
<body class="home page-template-default page page-id-39 wp-custom-logo wp-embed-responsive elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-39">


<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<?php include $layoutPath . 'Header.php' ?>


<?php echo  $mainContent; ?>

<?php include $layoutPath . 'Footer.php' ?>


<?php include $layoutPath . 'Foot.php' ?>

</body>
</html>

