<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['g-recaptcha-response'])) {
    $secret_key = '6LeicqAbAAAAAEpWKAwyFQ-5OLBucR77I5q-Rc6u';
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    $data = curl_exec($curl);
    curl_close($curl);
    $responseCaptchaData = json_decode($data);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($responseCaptchaData->success) {
            sendMail();
        } else {
            echo "<p class='text-danger text-center'>reCAPTCHA rejection</p>";
            trigger_error("reCAPTCHA rejection: $data");
        }
    }
}

function sendMail()
{
    $name = htmlspecialchars(trim($_POST['nameField']));
    $email = htmlspecialchars(trim($_POST['emailField']));
    $subject = htmlspecialchars(trim($_POST['subjectField']));
    $message = htmlspecialchars(trim($_POST['messageField']));

    $msg = $name . " (" . $email . ") submitted the following to our website contact form: \n\n" . $message;
    $htmlmsg = "<p>$name (" . $email . ") submitted the following to our website contact form: </p><p>$message</p>";

    // if (preg_match('/http|www|@/i', $message)) {
    //     trigger_error('message contains http|www|@ (' . $message . ')');
    //     $error_message = "Due to spam, unfortunately we do not allow urls or email addresses in the message. Please try again.";
    // }

    // $msg = wordwrap($msg, 70);

    // $headers = 'Reply-To: ' . $email . "\n" . "From: Arcane Software <info@arcanesoftware.com.au>";


    // If necessary, modify the path in the require statement below to refer to the
    // location of your Composer autoload.php file.
    require_once "vendor/autoload.php";

    // Replace sender@example.com with your "From" address.
    // This address must be verified with Amazon SES.
    $sender = 'jamie.brearley@arcanesoftware.com.au';
    $senderName = 'Arcane Software Contact Form';

    // Replace recipient@example.com with a "To" address. If your account
    // is still in the sandbox, this address must be verified.
    $recipient = 'jamie.brearley@arcanesoftware.com.au';

    // Replace smtp_username with your Amazon SES SMTP user name.
    $usernameSmtp = 'AKIAU25A2MR7C24KVFWG';

    // Replace smtp_password with your Amazon SES SMTP password.
    $passwordSmtp = 'BB74/bvuTh6dyOT31S2QmXjaXhlj3FI0yj0fSa0PFTRb';

    // Specify a configuration set. If you do not want to use a configuration
    // set, comment or remove the next line.
    //$configurationSet = 'ConfigSet';

    // If you're using Amazon SES in a region other than US West (Oregon),
    // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
    // endpoint in the appropriate region.
    $host = 'email-smtp.ap-southeast-2.amazonaws.com';
    $port = 587;

    // The plain-text body of the email
    $bodyText =  $msg;

    // The HTML-formatted body of the email
    // $bodyHtml = $msg;

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
        $mail->AltBody    = $bodyText;
        $mail->Send();
        DisplayError('success', 'green');
    } catch (phpmailerException $e) {
        DisplayError("An error occurred. {$e->errorMessage()}", 'red'); //Catch errors from PHP Mailer.
    } catch (Exception $e) {
        DisplayError("Email not sent. {$mail->ErrorInfo}", 'red'); //Catch errors from Amazon SES.
    }
}

function DisplayError($msg, $color)
{
    if ($color == 'green') {
        echo "<p class='text-success text-center'>Sent successfully. Please expect a response between 1-2 business days.</p>";
    } else {
        trigger_error("Email failed to send: $msg");
        echo "<p class='text-danger text-center'>An error occurred. Email not sent, Sorry :(</p>";
    }
}
