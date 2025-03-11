<?php
if (isset($_POST['affordable_estimate_submit'])) {

    $validationErrorMessage = '';

    $emailBody = '';

    $maxFileSize = 2 * 1024 * 1024; // 2 MB
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf', 'docx'];
    $isFileUploadedSuccessfully = false;
    $fileAttachment = array();
    $fileTmpName = null;
    $fileName = null;

    $affordableEstimateName = isset($_POST['affordable_estimate_name']) && strlen($_POST['affordable_estimate_name']) > 0 ? $_POST['affordable_estimate_name'] : '';
    $affordableEstimateCompany = isset($_POST['affordable_estimate_company']) && strlen($_POST['affordable_estimate_company']) > 0 ? $_POST['affordable_estimate_company'] : '';
    $affordableEstimateEmail = isset($_POST['affordable_estimate_email']) && strlen($_POST['affordable_estimate_email']) > 0 ? $_POST['affordable_estimate_email'] : '';
    $affordableEstimatePhone = isset($_POST['affordable_estimate_phone']) && strlen($_POST['affordable_estimate_phone']) > 0 ? $_POST['affordable_estimate_phone'] : '';
    $affordableEstimatePlansUrl = isset($_POST['affordable_estimate_plans_url']) && strlen($_POST['affordable_estimate_plans_url']) > 0 ? $_POST['affordable_estimate_plans_url'] : '';
    $affordableEstimateType = isset($_POST['affordable_estimate_type']) && strlen($_POST['affordable_estimate_type']) > 0 ? $_POST['affordable_estimate_type'] : '';
    $affordableEstimateDescScope = isset($_POST['affordable_estimate_desc_scope']) && strlen($_POST['affordable_estimate_desc_scope']) > 0 ? $_POST['affordable_estimate_desc_scope'] : '';

    $formType = 'Get a Quote (Affordable Estimate)';

    if ($affordableEstimateName == '' || $affordableEstimateEmail == '' || $affordableEstimatePhone == '' || $affordableEstimatePlansUrl == '' || $affordableEstimateType == '' || $affordableEstimateDescScope == '') {
        $validationErrorMessage = 'Please fill in the form properly. Only company name and uploading file is not required!';
    }

    if (isset($_FILES['affordable_estimate_file']) && $_FILES['affordable_estimate_file']['error'] == UPLOAD_ERR_OK) {

        $file = $_FILES['affordable_estimate_file'];
        $fileSize = $file['size'];
        $fileTmpName = $file['tmp_name'];
        $fileName = $file['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validate file size
        if ($fileSize > $maxFileSize) {
            $validationErrorMessage = 'File size exceeds the allowed limit of 2MB.';
        }

        // Validate file extension
        if (!in_array($fileExtension, $allowedExtensions)) {
            $validationErrorMessage = 'Invalid file type. Allowed types are: ' . implode(', ', $allowedExtensions);
        }

        if ($validationErrorMessage == '') {
            $isFileUploadedSuccessfully = true;
        }
    }

    $hasFileAttachment = ($isFileUploadedSuccessfully) ? 'Yes' : 'No';
    if ($hasFileAttachment == 'Yes') {
        $fileAttachment = array('file_temp_name' => $fileTmpName, 'file_name' => $fileName);
    }

    $emailFrom = array('sender_email' => $affordableEstimateEmail, 'sender_name' => $affordableEstimateName);
    $emailSubject = $formType."-Get A Quote";

    $emailBody = '<p>' . 'Company Name: ' . $affordableEstimateCompany .'</p>';
    $emailBody .= '<p>' . 'Sender Name: ' . $affordableEstimateName .'</p>';
    $emailBody .= '<p>' . 'Sender Email: ' . $affordableEstimateEmail .'</p>';
    $emailBody .= '<p>' . 'Phone: ' . $affordableEstimatePhone .'</p>';
    $emailBody .= '<p>' . 'Subject: ' . $emailSubject .'</p>';
    $emailBody .= '<p>' . 'Plans Url: ' . $affordableEstimatePlansUrl .'</p>';
    $emailBody .= '<p>' . 'Type: ' . $affordableEstimateType .'</p>';
    $emailBody .= '<p>' . 'Description/Scope: ' . $affordableEstimateDescScope .'</p>';
    $emailBody .= '<p>' . 'File Attachment: ' . $hasFileAttachment .'</p>';
    $emailBody .= '<p>' . 'Form Type: ' . $formType .'</p>';

    $isEmailSent = sendEmail($emailFrom, null, $emailSubject, $emailBody, $fileAttachment);
    $validationSuccessMessage = 'Email has been sent successfully!';
}