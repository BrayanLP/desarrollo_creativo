<?php


function sendMail() {
    $to = 'gaby.tumba@gmail.com';
    $subject = 'Contacto de Desarrollo Creativo';
    $message = 'Contacto de Desarrollo Creativo' . "\r\n" .
            "\r\n" .
            'nombre: ' . $_POST['nombre'] . "\r\n" .
            'email: ' . $_POST['email'] . "\r\n" .
            'telefono: ' . $_POST['telefono'] . "\r\n" . 
            "\r\n" .
            'Mensaje: ' . $_POST['mensaje'] . "\r\n";

    $headers = 'From: noreply@indexumcorp.com' . "\r\n" .
            'Reply-To: noreply@indexumcorp.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $r = mail($to, utf8_decode($subject), utf8_decode($message), utf8_decode($headers));
}

function sendMail2() {
    $to2 = 'brayansystemlp@gmail.com';
    $subject2 = 'Contacto de Desarrollo Creativo';
    $message2 = 'Contacto de Desarrollo Creativo' . "\r\n" .
            "\r\n" .
            'nombre: ' . $_POST['nombre'] . "\r\n" .
            'email: ' . $_POST['email'] . "\r\n" .
            'telefono: ' . $_POST['telefono'] . "\r\n" . 
            "\r\n" .
            'Mensaje: ' . $_POST['mensaje'] . "\r\n";

    $headers2 = 'From: noreply@indexumcorp.com' . "\r\n" .
            'Reply-To: noreply@indexumcorp.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    $r2 = mail($to2, utf8_decode($subject2), utf8_decode($message2), utf8_decode($headers2));
}

function sendMailToClient() {
    $to = '';
    $subject = 'Gracias por Contactarnos';
    
    $message = file_get_contents(dirname(__FILE__) .'/email-template.php');
    $message = str_replace('[Name]', $_POST['Name'], $message);

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
    $headers .= 'To: '.$_POST['nombres'].' <'.$_POST['email'].'>' . "\r\n";
    $headers .= 'From: info<noreply@indexumcorp.com>' . "\r\n";

// Mail it
    mail($to, utf8_decode($subject), utf8_decode($message), utf8_decode($headers));
}

sendMail();
sendMail2();
//sendMailToClient();

header("Location: /");