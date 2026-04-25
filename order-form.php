<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'assets/libraries/PHPMailer/src/Exception.php';
require 'assets/libraries/PHPMailer/src/PHPMailer.php';
require 'assets/libraries/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $location = strip_tags(trim($_POST["location"]));
    $requirements = strip_tags(trim($_POST["requirements"]));
    $product_name = strip_tags(trim($_POST["product_name"]));

    if (empty($name) || empty($phone) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger">Please fill in all required fields correctly.</div>';
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'madhualupana7@gmail.com';
        $mail->Password   = 'rxlvhbetkovszawg';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('madhualupana7@gmail.com', 'Navanath Natural Farms');
        $mail->addAddress('madhualupana7@gmail.com');
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Quote Request for ' . $product_name;
        
        $email_content = "<h2>New Quote Request</h2>";
        $email_content .= "<p><strong>Product Ordered:</strong> {$product_name}</p>";
        $email_content .= "<p><strong>Name:</strong> {$name}</p>";
        $email_content .= "<p><strong>Email:</strong> {$email}</p>";
        $email_content .= "<p><strong>Phone:</strong> {$phone}</p>";
        $email_content .= "<p><strong>City / State:</strong> {$location}</p>";
        $email_content .= "<p><strong>Requirements:</strong><br>{$requirements}</p>";

        $mail->Body    = $email_content;

        $mail->send();
        echo '<div class="alert alert-success">Your quote request has been sent successfully!</div>';
    } catch (Exception $e) {
        echo '<div class="alert alert-danger">Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '</div>';
    }
} else {
    echo '<div class="alert alert-danger">There was a problem with your submission, please try again.</div>';
}
