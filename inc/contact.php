<?php

if (count($_POST) <= 0) return;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = htmlspecialchars(trim($_POST["name"]));
$business = htmlspecialchars(trim($_POST["business"]));
$email = htmlspecialchars(trim($_POST["email"]));
$phone = htmlspecialchars(trim($_POST["phone"]));

$services = htmlspecialchars(trim($_POST["services"]));

$webInfoType = htmlspecialchars(trim($_POST["webInfoType"]));
$webBudget = htmlspecialchars(trim($_POST["webBudget"]));
$seoBudget = htmlspecialchars(trim($_POST["seoBudget"]));
$digMrkt = htmlspecialchars(trim($_POST["digMrkt"]));
$digMrktBudget = htmlspecialchars(trim($_POST["digMrktBudget"]));
$socialMediaAccounts = htmlspecialchars(trim($_POST["socialMediaAccounts"]));
$socialMrktBudget = htmlspecialchars(trim($_POST["socialMrktBudget"]));
$logoBudget = htmlspecialchars(trim($_POST["logoBudget"]));
$hostingURL = htmlspecialchars(trim($_POST["hostingURL"]));
$message = htmlspecialchars(trim($_POST["message"]));

$msg = "$name from $business ($email) [$phone] submitted via the website contact form: \n\n";
$msg .= "Services: $services\n\n";
$msg .= "Web Type: $webInfoType\n\n";
$msg .= "Web Budget: $webBudget\n\n";
$msg .= "SEO Budget: $seoBudget\n\n";
$msg .= "Digital Marketing: $digMrkt\n\n";
$msg .= "Digital Marketing Budget: $digMrktBudget\n\n";
$msg .= "Social Media Accounts: $socialMediaAccounts\n\n";
$msg .= "Social Media Marketing Budget: $socialMrktBudget\n\n";
$msg .= "Logo Design Budget: $logoBudget\n\n";
$msg .= "Domain Name: $hostingURL\n\n";
$msg .= "Additional Info: $message\n\n";

$htmlmsg =
    "<p>$name from $business ($email) [$phone] submitted via the website contact form: </p>";
$htmlmsg .= "<p>Services: $services</p>";
$htmlmsg .= "<p>Web Type: $webInfoType</p>";
$htmlmsg .= "<p>Web Budget: $webBudget</p>";
$htmlmsg .= "<p>SEO Budget: $seoBudget</p>";
$htmlmsg .= "<p>Digital Marketing: $digMrkt</p>";
$htmlmsg .= "<p>Digital Marketing Budget: $digMrktBudget</p>";
$htmlmsg .= "<p>Social Media Accounts: $socialMediaAccounts</p>";
$htmlmsg .= "<p>Social Media Marketing Budget: $socialMrktBudget</p>";
$htmlmsg .= "<p>Logo Design Budget: $logoBudget</p>";
$htmlmsg .= "<p>Domain Name: $hostingURL</p>";
$htmlmsg .= "<p>Additional Info: $message</p>";

// $msg = wordwrap($msg, 70);

require_once '../vendor/autoload.php';

// This address must be verified with Amazon SES.
$sender = 'jamie.brearley@arcanesoftware.com.au';
$senderName = 'Arcane Software Contact Form';

$recipient = 'hello@arcanesoftware.com.au';

// Amazon SES SMTP user name.
$usernameSmtp = 'AKIAU25A2MR7C24KVFWG';

// Amazon SES SMTP password.
$passwordSmtp = 'BB74/bvuTh6dyOT31S2QmXjaXhlj3FI0yj0fSa0PFTRb';

// Amazon SES SMTP endpoint.
$host = 'email-smtp.ap-southeast-2.amazonaws.com';
$port = 587;

$mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    //  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

    // Specify the message recipients.
    $mail->addAddress($recipient);
    // You can also add CC, BCC, and additional To recipients here.
    $mail->ClearReplyTos();
    $mail->addReplyTo($email, $name);

    // Specify the content of the message.
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $htmlmsg;
    $mail->AltBody    = $msg;
    $mail->Send();
    return ('success');
} catch (phpmailerException $e) {
    //Catch errors from PHP Mailer.
    trigger_error("An error occurred. {$e->errorMessage()}");
} catch (Exception $e) {
    //Catch errors from Amazon SES.
    trigger_error("Email not sent. {$mail->ErrorInfo}");
}
