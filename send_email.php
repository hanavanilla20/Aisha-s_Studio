<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hanavanilla20@gmail.com"; // Ubah dengan alamat email penerima
    $from = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $headers = "From: $from\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
