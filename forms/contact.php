<?php

require_once "../assets/vendor/php-email-form/php-email-form.php"; // Include the PHP Email Form library
require_once "Mail.php"; // Include the Mail library

$receiving_email_address = 'joshrey773211@gmail.com';

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

$contact->smtp = array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'port' => '587'
);

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

echo $contact->send();
?>
