<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path if necessary

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);

    // Subject and message
    $subject = "Congratulations";
    $message = "Dear $first_name $last_name,\n\nCongratulations! You have successfully filled out the form.";

    // PHPMailer configuration
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'dacostaalexander.luz@gmail.com'; // SMTP username
        $mail->Password = 'jufv fptb dpct vlym'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setfrom('noreply@example.com', 'Mailer');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        header("Location: form.html?success=1");
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>