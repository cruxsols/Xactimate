<?php
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Constants\Constants.php';
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Constants\Data.php';
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Constants\Links.php';
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Helper\Menu.php';
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\PHPMailer\index.php';
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Requests\SendSampleFrom.php';
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Requests\ContactForm.php';
include $_SERVER['DOCUMENT_ROOT'].'/AdminPanel\Requests\GetAQuoteFrom.php';

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
$assetsJsonUrl = 'http:\/\/elementorthemesite.com\/Assets\/';
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