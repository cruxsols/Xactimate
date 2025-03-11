<?php

include DocRoot.'AdminPanel'.DS.'Constants'.DS.'Constants.php';
include DocRoot.'AdminPanel'.DS.'Constants'.DS.'Data.php';
include DocRoot.'AdminPanel'.DS.'Constants'.DS.'Links.php';
include DocRoot.'AdminPanel'.DS.'Helper'.DS.'Menu.php';
include DocRoot.'AdminPanel'.DS.'PHPMailer'.DS.'index.php';
include DocRoot.'AdminPanel'.DS.'Requests'.DS.'SendSampleFrom.php';
include DocRoot.'AdminPanel'.DS.'Requests'.DS.'ContactForm.php';
include DocRoot.'AdminPanel'.DS.'Requests'.DS.'GetAQuoteFrom.php';

use AdminPanel\Constants\Constants;
use AdminPanel\Constants\Data;
use AdminPanel\Constants\Links;

$domain = Constants::Domain;
$baseUrl = Constants::baseUrl();
$basePath = Constants::basePath();
$assetsUrl = Constants::assetsUrl();
$assetsPath = Constants::assetsPath();
$componentsPath = Constants::componentsPath();
$pagesPath = Constants::pagesPath();
$templatesPath = Constants::templatesPath();
$layoutPath = Constants::layoutPath();
$siteTitle = "qzsim";//'Accurate Construction Estimating Services | Construct Estimates';
$assetsJsonUrl = Constants::DomainProtocol.':\/\/'.Constants::DomainName.'\/Assets\/';
$topMenu = Links::topMenu();

$footerCopyrightText = Data::getFooterCopyrightText();
$footerMenus = Data::getFooterMenus();
$footerAddresses = Data::getFooterAddresses();
$footerContactNumbers = Data::getFooterContactNumbers();
$footerSocialIcons = Data::getFooterSocialIcons();
$footerDescription = Data::getFooterDescription();
$footerLogoUrl = Data::getFooterLogoUrl();

$headerLeftIcons = Data::getHeaderLeftIcons();
$headerSocialIcons = Data::getHeaderSocialIcons();
$headerContactNumbers = Data::getHeaderContactNumbers();