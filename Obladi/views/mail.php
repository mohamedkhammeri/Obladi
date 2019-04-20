<?php
    require("PHPMailer-master/PHPMailer-master/src/class.phpmailer.php");
    $mail = new PHPMailer();

    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "csmajs2019@gmail.com"; // your GMail user name
    $mail->Password = "piweb2019"; 
    $mail->AddAddress("skanderellouze94@gmail.com"); // recipients email
    $mail->FromName = "your name"; // readable name

    $mail->Subject = "Subject title";
    $mail->Body    = "Here is the message you want to send to your friend."; 
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
    ?>