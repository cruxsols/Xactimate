<?php

// Check if the form is submitted
//if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
if (isset($_POST['contact_us_submit'])) {

    $emailBody = '';

    $contactUsName = isset($_POST['contact_us_name']) && strlen($_POST['contact_us_name']) > 0 ? $_POST['contact_us_name'] : '';
    $contactUsCompany = isset($_POST['contact_us_company']) ? $_POST['contact_us_company'] : '';
    $contactUsEmail = isset($_POST['contact_us_email']) && strlen($_POST['contact_us_email']) > 0 ? $_POST['contact_us_email'] : '';
    $contactUsPhone = isset($_POST['contact_us_phone']) && strlen($_POST['contact_us_phone']) > 0 ? $_POST['contact_us_phone'] : '';
    $contactUsSubject = isset($_POST['contact_us_subject']) && strlen($_POST['contact_us_subject']) > 0 ? $_POST['contact_us_subject'] : '';
    $contactUsMessage = isset($_POST['contact_us_message']) && strlen($_POST['contact_us_message']) > 0 ? $_POST['contact_us_message'] : '';

    $formType = 'Contact Us';

    if ($contactUsName == '' || $contactUsEmail == '' || $contactUsPhone == '' || $contactUsSubject == '' || $contactUsMessage == '') {
        $validationErrorMessage = 'Please fill in the form properly. Only company name is not required!';
    }

    $emailFrom = array('sender_email' => $contactUsEmail, 'sender_name' => $contactUsName);
    $emailSubject = $contactUsSubject."-Contact Us";

    $emailBody = '<p>' . 'Company Name: ' . $contactUsCompany . '</p>';
    $emailBody .= '<p>' . 'Sender Name: ' . $contactUsName . '</p>';
    $emailBody .= '<p>' . 'Sender Email: ' . $contactUsEmail . '</p>';
    $emailBody .= '<p>' . 'Phone: ' . $contactUsPhone . '</p>';
    $emailBody .= '<p>' . 'Subject: ' . $contactUsSubject . '</p>';
    $emailBody .= '<p>' . 'Message: ' . $contactUsMessage . '</p>';
    $emailBody .= '<p>' . 'Form Type: ' . $formType . '</p>';

    sendEmail($emailFrom, null, $emailSubject, $emailBody, null);
    $validationSuccessMessage = 'Email has been sent successfully!';
}