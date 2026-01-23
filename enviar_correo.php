<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';

// Honeypot
if (!empty($_POST['empresa'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Error de validación.'
    ]);
    exit;
}

// Sanitizar datos
$nombre   = trim(strip_tags($_POST['nombre'] ?? ''));
$email    = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
$telefono = trim(strip_tags($_POST['telefono'] ?? ''));
$mensaje  = trim(strip_tags($_POST['mensaje'] ?? ''));


// Validaciones básicas
if ($nombre === '' || $email === '' || $mensaje === '') {
    echo json_encode([
        'success' => false,
        'message' => 'Completa todos los campos obligatorios.'
    ]);
    exit;
}

// Validar email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Correo electrónico no válido.'
    ]);
    exit;
}




$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.tu-sitioweb.com';                 //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contacto@tu-sitioweb.com';             //SMTP username
    $mail->Password   = 'ynYMcr=_(XAo';                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contacto@tu-sitioweb.com', 'Formulario Web');
    $mail->addAddress('contacto@tu-sitioweb.com');              //Add a recipient
    $mail->addAddress($email, $nombre);                     //Name is optional
    //Reply To
    $mail->addReplyTo($email, $nombre);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nuevo contacto desde el Sitio Web';
    $mail->Body = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
        </head>
        <body style="margin:0; padding:0; background-color:#f4f4f5; font-family:Arial, Helvetica, sans-serif;">

            <div style="max-width:600px; margin:40px auto; background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.1);">

                <!-- Header -->
                <div style="background-color:#6d28d9; color:#ffffff; padding:20px 24px;">
                    <h2 style="margin:0; font-size:20px;">Nuevo mensaje desde el sitio web</h2>
                </div>

                <!-- Content -->
                <div style="padding:24px; color:#111827; font-size:14px; line-height:1.6;">

                    <p style="margin:0 0 16px;">
                        Has recibido un nuevo mensaje a trav&eacute;s  del formulario de contacto.
                    </p>

                    <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
                        <tr>
                            <td style="padding:8px 0; font-weight:bold;">Nombre:</td>
                            <td style="padding:8px 0;">' . htmlspecialchars($nombre) . '</td>
                        </tr>
                        <tr>
                            <td style="padding:8px 0; font-weight:bold;">Correo:</td>
                            <td style="padding:8px 0;">' . htmlspecialchars($email) . '</td>
                        </tr>
                        <tr>
                            <td style="padding:8px 0; font-weight:bold;">Tel&eacute;fono:</td>
                            <td style="padding:8px 0;">' . htmlspecialchars($telefono) . '</td>
                        </tr>
                    </table>

                    <div style="border-top:1px solid #e5e7eb; padding-top:16px;">
                        <p style="margin:0 0 8px; font-weight:bold;">Mensaje:</p>
                        <p style="margin:0; white-space:pre-line;">' . nl2br(htmlspecialchars($mensaje)) . '</p>
                    </div>

                </div>

                <!-- Footer -->
                <div style="background-color:#f9fafb; text-align:center; padding:14px; font-size:12px; color:#6b7280;">
                    Formulario Web - <a href="https://tu-sitioweb.com" style="color:#6d28d9; text-decoration:none;">tu-sitioweb.com</a>
                </div>

            </div>

        </body>
        </html>
        ';



    $mail->AltBody = "
        Nombre: {$nombre}
        Email: {$email}
        Telefono: {$telefono}

        Mensaje:
        {$mensaje}
    ";

    $mail->send();
    echo json_encode([
        'success' => true,
        'message' => 'Mensaje enviado correctamente. Te contactaremos en menos de 24 horas.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Tenemos problemas técnicos en este momento. Inténtalo más tarde.' . $mail->ErrorInfo 
    ]);
}