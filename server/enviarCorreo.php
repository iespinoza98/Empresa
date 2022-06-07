<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/PHPMailer.php';
require 'Phpmailer/Exception.php';
require 'Phpmailer/SMTP.php';



$mail = new PHPMailer(true);                                    //Create an instance; passing `true` enables exceptions

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.innovatecproyectos.com';          //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contacto@innovatecproyectos.com';      //SMTP username
    $mail->Password   = 'contacto2022!*';                       //SMTP password
    $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption, 'ssl' also accepted
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    if (! $_POST
    || trim($_POST['nombre'])   === ''
    || trim($_POST['apellido'])     === ''
    || trim($_POST['mensaje'])     === ''
    || trim($_POST['email']) === ''
    || trim($_POST['celular']) === ''
    ) {
        $jsonReturn = array(
            'type' => 'E',
            'message' => 'Por favor, completar todos los datos obligatorios.'
        );
        echo json_encode($jsonReturn);
    } else {
        //Variables of the page form
        $namecomplete = $_POST['nombre'] . ' ' . $_POST['apellido'];
        $phone = $_POST['celular'];
        $message = $_POST['mensaje'];
        $email = $_POST['email'];

        //Recipients
        $mail->setFrom('contactoadmin@innovatecproyectos.com', 'Innovatec Proyectos');
        $mail->addAddress('israelespinoza1298@gmail.com');         //Add a recipient

        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = 'Nuevo mensaje de ' . $namecomplete;
        $mail->Body    = 'Datos del cliente: <br> <b>Nombre: </b>' . $namecomplete . '<br> <b>Email: </b>' . $email  . '<br> <b>Celular: </b>' . $phone . '<br> <b>Mensaje: </b>' . $message;

        $mail->send();

        $jsonReturn = array(
            'type' => 'S',
            'message' => 'Todo bien'
        );
        echo json_encode($jsonReturn);
    }
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    $jsonReturn = array(
        'type' => 'E',
        'message' => $mail->ErrorInfo
    );
    echo json_encode($jsonReturn);
}

?>