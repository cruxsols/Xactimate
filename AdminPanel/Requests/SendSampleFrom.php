<?php
if (isset($_POST['send_sample_submit'])) {

    $emailBody = '';

    $sendSampleName = isset($_POST['send_sample_name']) && strlen($_POST['send_sample_name']) > 0 ? $_POST['send_sample_name'] : '';
    $sendSampleEmail = isset($_POST['send_sample_email']) && strlen($_POST['send_sample_email']) > 0 ? $_POST['send_sample_email'] : '';
    $sendSamplePhone = isset($_POST['send_sample_phone']) && strlen($_POST['send_sample_phone']) > 0 ? $_POST['send_sample_phone'] : '';

    $formType = 'Send Sample';

    if ($sendSampleName == '' || $sendSampleEmail == '' || $sendSamplePhone == '') {
        $validationErrorMessage = 'Please fill in the form properly.';
    }

    $emailFrom = array('sender_email' => $sendSampleEmail, 'sender_name' => $sendSampleName);
    $emailSubject = 'Download Sample Request';

    $emailBody = '<p>' . 'Sender Name: ' . $sendSampleName . '</p>';
    $emailBody .= '<p>' . 'Sender Email: ' . $sendSampleEmail . '</p>';
    $emailBody .= '<p>' . 'Phone: ' . $sendSamplePhone . '</p>';
    $emailBody .= '<p>' . 'Subject: ' . $emailSubject . '</p>';
    $emailBody .= '<p>' . 'Form Type: ' . $formType . '</p>';

    sendEmail($emailFrom, null, $emailSubject, $emailBody, null);
    $sendSampleSubmitSuccess = 'We have received your request! you will receive sample soon.';
}

?>