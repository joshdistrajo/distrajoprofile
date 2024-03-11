<?php

class PHP_Email_Form
{
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp;
    public $ajax;
    
    public function add_message($content, $label, $maxlength = "")
    {
        // You can implement this function according to your requirements
        // For now, I'll just return the content as it is.
        return $content;
    }
    
    public function send()
    {
        $to = $this->to;
        $from_name = $this->from_name;
        $from_email = $this->from_email;
        $subject = $this->subject;
        $message = "";
    
        // Construct the message
        $message .= "From: $from_name\n";
        $message .= "Email: $from_email\n";
        $message .= "Message: " . $_POST['message'] . "\n";
        
        // Gmail SMTP configuration
        $smtp_username = 'joshrey773211@gmail.com';
        $smtp_password = 'xinvbtkcgsbkulqs';
    
        // Set the SMTP server and port
        $smtp_host = 'smtp.gmail.com';
        $smtp_port = 587;
    
        // Set the mailer to use SMTP
        ini_set('SMTP', $smtp_host);
        ini_set('smtp_port', $smtp_port);
    
        // Set the SMTPAuth to true
        $headers = array(
            'From' => $from_email,
            'To' => $to,
            'Subject' => $subject
        );
    
        $smtp = Mail::factory('smtp', array(
            'host' => $smtp_host,
            'port' => $smtp_port,
            'auth' => true,
            'username' => $smtp_username,
            'password' => $smtp_password
        ));
    
        $mail = $smtp->send($to, $headers, $message);
    
        if (PEAR::isError($mail)) {
            return "error: " . $mail->getMessage();
        } else {
            return "success";
        }
    }
}    