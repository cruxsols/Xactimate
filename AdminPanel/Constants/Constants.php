<?php
namespace AdminPanel\Constants;
class Constants{

    const Domain = "elementorthemesite.com";

    const SMTP_DEFAULT_HOST = 'sandbox.smtp.mailtrap.io';
    const SMTP_DEFAULT_PORT = 2525;
    const SMTP_DEFAULT_USERNAME = 'b2ae21183aaadd';
    const SMTP_DEFAULT_PASSWORD = 'c443c94d68934a';

    const PHP_MAILER_DEFAULT_RECIPIENT_EMAIL = 'qasim.online.now@gmail.com';
    const PHP_MAILER_DEFAULT_RECIPIENT_NAME = 'Construction Company';

    public static function baseUrl()
    {
        // Get protocol (http or https)
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
            ? "https://"
            : "http://";

        // Get host (e.g., localhost, domain.com)
        $host = $_SERVER['HTTP_HOST'];

        // Get the script directory
        $scriptDir = '/';//irname($_SERVER['SCRIPT_NAME']);

        // Construct the base URL
       // return rtrim($protocol . $host . $scriptDir, '/');
        return $protocol . $host . $scriptDir;
    }
    public static function assetsUrl()
    {
        return self::baseUrl().'Assets/';
    }


    public static function basePath()
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }

    public static function assetsPath()
    {
        return self::basePath().'/Assets/';
    }

    public static function componentsPath()
    {
        return self::basePath().'/Components/';
    }

    public static function pagesPath()
    {
        return self::basePath().'/Pages/';
    }

    public static function templatesPath()
    {
        return self::basePath().'/Templates/';
    }

    public static function layoutPath()
    {
        return self::basePath().'/Layout/';
    }


}
