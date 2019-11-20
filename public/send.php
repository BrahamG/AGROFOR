<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail=new PHPMailer;
    $to="braham.gc@gmail.com";

    $nombre=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
    $msj=nl2br($_POST['message']);

    $mail->From=$email;
    $mail->addAddress($to);
    $mail->Subject='Nuevo';
    $mail->isHtml(true);
    $mail->Body='<strong>'.$nombre.'</strong>Nuevo potencial cliente con los siguintes datos<br>Email: <strong>'.$email.'</strong><p>Numero de hectareas:<strong>'.$sub.'</strong>Detalles<br><p>'.$msj.'</p>';
    $mail->CharSet='UTF-8';
    $mail->send();
?>
