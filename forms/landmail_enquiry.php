<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['landmail_name'];
$email = $_POST['landmail_email'];
$phone = $_POST['landmail_mobile'];
$city = $_POST['landmail_city'];
$sitelocation = $_POST['landmail_sitelocation'];



if (!empty($name) && !empty($email) && !empty($phone) && !empty($city) && !empty($sitelocation)) {
    $html = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landmail Enquiry</title>
    <style>
        html,
        body,
        table,
        tbody,
        tr,
        td,
        div,
        p,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            padding: 0;
            font-size: 0;
            line-height: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        table {
            border-spacing: 0;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        table td {
            border-collapse: collapse;
        }
        .ExternalClass {
            width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }
        /* Outermost container in Outlook.com */

        .ReadMsgBody {
            width: 100%;
        }
        img {
            -ms-interpolation-mode: bicubic;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Arial;
        }
        h1 {
            font-size: 28px;
            line-height: 32px;
            padding-top: 10px;
            padding-bottom: 24px;
        }
        h2 {
            font-size: 24px;
            line-height: 28px;
            padding-top: 10px;
            padding-bottom: 20px;
        }
        h3 {
            font-size: 20px;
            line-height: 24px;
            padding-top: 10px;
            padding-bottom: 16px;
        }
        p {
            font-size: 16px;
            line-height: 20px;
            font-family: Georgia, Arial, sans-serif;
        }
        .container600 {
            width: 600px;
            max-width: 100%;
        }
        @media all and (max-width: 599px) {
            .container600 {
                width: 100% !important;
            }
        }
    </style>
</head>
<body style="background-color:#00a0e3;">
    <center>
        <table class="container600" cellpadding="0" cellspacing="0" border="0" width="100%" style="width:calc(100%);max-width:calc(600px);margin: 0 auto;">
            <tr>
                <td width="100%" style="text-align: left;">
                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                    <td width="100%" style="min-width:100%;color:#FFFFFF;padding:5px;"></td>
                        <tr>
                            <td style="background-color:#F6F5FF;color:#333333;padding:30px;">
                                <h1>Landmail Enquiry</h1>
                                <p style="font-family: Arial,sans-serif; ">Please find the following enquiry details.</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:20px;background-color:#F6F5FF;">
                                <table width="100%" cellpadding="0" cellspacing="0" style="color:#333333">
                                    <tbody>
                                        <tr>
                                            <th valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">Name</th>
                                            <td valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">' . $name . '</td>
                                        </tr>
                                        <tr>
                                            <th valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">Email</th>
                                            <td valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">' . $email . '</td>
                                        </tr>
                                        <tr>
                                            <th valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">Mobile</th>
                                            <td valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">' . $phone . '</td>
                                        </tr>
                                        <tr>
                                            <th valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">City Name</th>
                                            <td valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">' . $city . '</td>
                                        </tr>
                                        <tr>
                                            <th valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">Site Location</th>
                                            <td valign="top" style="padding:5px; width: 250px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;padding-bottom: 10px;">' . $sitelocation . '</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                        <tr>
                            <td width="100%" style="min-width:100%;color:#FFFFFF;padding:5px;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>';
    require '../assets/libraries/PHPMailer/src/Exception.php';
    require '../assets/libraries/PHPMailer/src/PHPMailer.php';
    require '../assets/libraries/PHPMailer/src/SMTP.php';
    require '../assets/vendor/autoload.php';
    //PHPMailer Object
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        //$mail->SMTPDebug = 3;
        //$mail->Debugoutput = 'html';
        $mail->Host = "tls://smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'tulasi@infinityspark.in'; // SMTP username
        $mail->Password = 'tulasimayee1'; // TCP port to connect to
        //Recipients
        $mail->setFrom('tulasi@infinityspark.in', 'InfinitySpark');
        $mail->addAddress('tulasi@infinityspark.in'); 
        // $mail->addAddress('pranesh.p@infinityspark.in'); 
        $mail->addReplyTo($email, $name);
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Landmail Enquiry';
        $mail->Body = $html;
        $mail->send();
        echo 'Success';
    } catch (Exception $e) {
        $error = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    exit;
}
