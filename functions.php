<?php function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "craig.sanders@me.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $mailContent = "Name: $name\n";
    $mailContent .= "Email: $email\n";
    $mailContent .= "Message:\n$message";

    if (mail($to, $subject, $mailContent, $headers)) {
        echo "success"; // You can handle the success response as needed
    } else {
        echo "error"; // You can handle the error response as needed
    }
}
?>
