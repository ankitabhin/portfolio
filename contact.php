<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Receiver email (yours)
    $to = "bhingareankita48@gmail.com";

    // Subject
    $subject = "New Contact Form Message from $name";

    // Email body
    $body = "You received a new message from your portfolio website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Try to send
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='font-family:sans-serif; color:green'>Thank you, $name! Your message has been sent successfully.</h2>";
        echo "<p><a href='index.html'>← Back to Home</a></p>";
    } else {
        echo "<h2 style='font-family:sans-serif; color:red'>Sorry, something went wrong. Please try again later.</h2>";
        echo "<p><a href='contact.html'>← Back to Contact</a></p>";
    }
} else {
    header("Location: contact.html");
    exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "bhingareankita48@gmail.com";
    $subject = "New Contact Form Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message\n";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent.";
    }
}
?>
