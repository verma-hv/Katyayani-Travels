<?php include("header.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $given_name = $_POST["given_name"];
    $surname = $_POST["surname"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $country_name = $_POST["country_name"];
    $visa_type = $_POST["visa_type"];
   

    if (empty($given_name) || empty($surname) || empty($email) || empty($phoneno)  || empty($country_name) || empty($visa_type)) {
        // Handle empty fields
        echo "Please fill out all fields.";
        exit();
    }

    include('C:\xampp\htdocs\KATYAYANI TRAVELS WEB\smtp\PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
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

    $mail->Subject = "New Query From $given_name";
    $mail->Body = "Name: $given_name $surname<br> Phone No: $phoneno<br> Email: $email<br> Country Name: $country_name<br> Visa Type: $visa_type";
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));

    if (!$mail->send()) {
        // Message could not be sent
        $_SESSION['message'] = 'Failed to send your Request right now';

    } else {
        // Message sent successfully
        $_SESSION['message'] = 'Your Request has been sent Successfully';
        

    }
    ?>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .confirmation-container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #ffe4b2;
            /* Light Orange Background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #ff6600;
            /* Dark Orange Text Color */
        }

        p {
            text-align: center;
            font-weight: bold;
            color: #333;
            /* Dark Gray Text Color */
        }

        .info-label {
            color: #0066cc;
            /* Blue Text Color for Labels */
        }

        .info-value {
            color: #009933;
            /* Green Text Color for Values */
        }
    </style>

    <body>
        <div class="confirmation-container">
            <h2>Submitted Information:</h2>
            <p>Given Name:
                <?php echo $given_name; ?>
            </p>
            <p>Surname:
                <?php echo $surname; ?>
            </p>
            <p>Phone No:
                <?php echo $phoneno; ?>
            </p>
            <p>Email:
                <?php echo $email; ?>
            </p>
            <p>Country Name:
                <?php echo $country_name; ?>
            </p>
            <p>Visa Type:
                <?php echo $visa_type; ?>
            </p>
        </div>
    </body>


    <?php
}
?>