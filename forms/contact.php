<?php
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

    // Collect the sender's information from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "recipient@example.com";

    // Set the email subject
    $subject = "New message from $name";

    // Build the email message
    $body = "From: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    // Send the email
    if(mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent!";
    } else {
        echo "There was an error sending your message.";
    }
// ---------------------------------

// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];
// $to = "omkar.hande30@gmail.com";
// $subject = "Mail From website";
// $txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
// $headers = "From: omkar.hande30@gmail.com" . "\r\n" .
//   "CC: vanrai.sbm@gmail.com";
// if ($email != NULL) {
//   mail($to, $subject, $txt, $headers);
// }
// ----------------------------------
//redirect
// header("Location:thankyou.html");
// Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'omkar.hande30@gmail.com';

// if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
//   include($php_email_form);
// } else {
//   die('Unable to load the "PHP Email Form" Library!');
// }

// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['name'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['subject'];


// $contact->smtp = array(
//   'host' => 'smtp-relay.sendinblue.com',
//   'username' => 'vanrai.sbm@gmail.com',
//   'password' => 'zBkW9T1fUYOJcHjP',
//   'port' => '587'
// );


// $contact->add_message($_POST['name'], 'From');
// $contact->add_message($_POST['email'], 'Email');
// $contact->add_message($_POST['message'], 'Message', 10);

// echo $contact->send();
?>