<?php

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use AdminPanel\Constants\Constants;

function sendEmail($from, $to, $subject, $body, $attachment, $smtp = array()) {

    try {

        $phpmailer = new PHPMailer();
        $hasEmailBeenSent = true;

        $phpmailer->isSMTP();
        $phpmailer->SMTPAuth = true;
        $phpmailer->Host = (isset($smtp['host'])) ? $smtp['host'] : Constants::SMTP_DEFAULT_HOST;
        $phpmailer->Port = (isset($smtp['port'])) ? $smtp['port'] : Constants::SMTP_DEFAULT_PORT;
        $phpmailer->Username = (isset($smtp['username'])) ? $smtp['username'] : Constants::SMTP_DEFAULT_USERNAME;
        $phpmailer->Password = (isset($smtp['password'])) ? $smtp['password'] : Constants::SMTP_DEFAULT_PASSWORD;

        $senderEmail = (isset($from['sender_email'])) ? $from['sender_email'] : '';
        $senderName = (isset($from['sender_name'])) ? $from['sender_name'] : '';

        $recipientEmail = (isset($to['recipient_email'])) ? $to['recipient_email'] : Constants::PHP_MAILER_DEFAULT_RECIPIENT_EMAIL;
        $recipientName = (isset($to['recipient_name'])) ? $to['recipient_name'] : Constants::PHP_MAILER_DEFAULT_RECIPIENT_NAME;

        $phpmailer->setFrom($senderEmail, $senderName);
        $phpmailer->addAddress($recipientEmail, $recipientName);

        $phpmailer->isHTML(true);                                  //Set email format to HTML
        $phpmailer->Subject = (isset($subject) && strlen($subject) > 0) ? $subject : '';
        $phpmailer->Body = (isset($body) && strlen($body) > 0) ? $body : '';

        if (is_array($attachment) && count($attachment) > 0) {
            $phpmailer->addAttachment($attachment['file_temp_name'], $attachment['file_name']);
        }

        $phpmailer->send();
    }
    catch (Exception $e) {
        $hasEmailBeenSent = false;
    }

    return $hasEmailBeenSent;
}
