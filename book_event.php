<?php session_start(); ?>
<!-- the captcha needs the above line -->

<?php
if(isset($_POST['email'])) {

    $email_to = "younglubackup@gmail.com";
    $email_subject = "Bomes Theater Booking - " . $_POST['event_name'];

    function died($error)
    {
        //echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        //echo "These errors appear below.<br /><br />";
        //echo $error . "<br /><br />";
        //echo "Please fix before resubmitting.<br /><br />";
        die($error);
    }

    // validation
    if (!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['comp_name']) ||
        !isset($_POST['address']) ||
        !isset($_POST['city']) ||
        !isset($_POST['state']) ||
        !isset($_POST['zip']) ||
        !isset($_POST['country']) ||
        !isset($_POST['event_name']) ||
        !isset($_POST['event_type']) ||
        !isset($_POST['event_desc']) ||
        !isset($_POST['attendees']) ||
        !isset($_POST['date']) ||
        !isset($_POST['hours'])
    ) {
        died('One or more of your entries appears to be invalid, please try again.');
    }

    $name = $_POST['name'];
    $email_host = 'do-not-reply@BomesTheater.com';
    $email_from = $_POST['email'];
    $captcha = $_POST['captcha'];
    $phone = $_POST['phone'];
    $comp_name = $_POST['comp_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $event_name = $_POST['event_name'];
    $event_type = $_POST['event_type'];
    $event_desc = $_POST['event_desc'];
    $attendees = $_POST['attendees'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'Please enter a valid email.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Please enter a valid name.<br />';
    }

    if (strlen($event_desc) < 2) {
        $error_message .= 'The message you entered does not appear to be valid.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Phone: " . clean_string($phone) . "\n";
    $email_message .= "Company/Organization Name: " . clean_string($comp_name) . "\n";
    $email_message .= "Address: " . clean_string($address) . "\n";
    $email_message .= "City: " . clean_string($city) . "\n";
    $email_message .= "State/Province: " . clean_string($state) . "\n";
    $email_message .= "Postal/Zip Code: " . clean_string($zip) . "\n";
    $email_message .= "Country: " . clean_string($country) . "\n";
    $email_message .= "Event Name: " . clean_string($event_name) . "\n";
    $email_message .= "Event Type: " . clean_string($event_type) . "\n";
    $email_message .= "Event Description: " . clean_string($event_desc) . "\n";
    $email_message .= "Estimated Number of Attendees: " . clean_string($attendees) . "\n";
    $email_message .= "Event Date: " . clean_string($date) . "\n";
    $email_message .= "Event Hours: " . clean_string($hours) . "\n";

    // create email headers
    $headers = 'From: ' . $email_host . "\r\n" .
        'Reply-To: ' . $email_host . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
}
    ?>
     
    <!-- include success html here -->
     
    Your message has been sent, thank you!
     

