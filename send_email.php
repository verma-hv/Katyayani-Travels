<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Input validation
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        // Handle empty fields
        echo "Please fill out all fields.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email
        echo "Invalid email address.";
        exit();
    }

    include('C:\xampp\htdocs\KATYAYANI TRAVELS WEB\smtp\PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'vermahv22@gmail.com';
    $mail->Password = 'kkxahzxmpiyezpkj';
    $mail->SetFrom('vermahv22@gmail.com');
    $mail->addAddress("vermahv33@gmail.com");
    $mail->isHTML(true);

    $mail->Subject = "(New Query) $subject";
    $mail->Body = "name: $name<br> email: $email<br> message: $message";
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));

    if (!$mail->send()) {
        // Message could not be sent
        $_SESSION['message'] = 'Failed to send your Query right now';

    } else {
        // Message sent successfully
        $_SESSION['message'] = 'Your Query has been sent Successfully';
        

    }    
    header('Location: book.php');
}
?>
