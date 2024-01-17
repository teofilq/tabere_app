<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendEmail($destinatar, $subiect, $corp) {

    $mail = new PHPMailer(true);

    try {
        // Configurare server
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = GMAIL_USERNAME;
        $mail->Password   = GMAIL_PASSWORD;
		
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Destinatari
        $mail->setFrom(GMAIL_USERNAME, 'Nume Expeditor');
        $mail->addAddress($destinatar); // Adăugați destinatarul

        // Conținut
        $mail->isHTML(true);
        $mail->Subject = $subiect;
        $mail->Body    = $corp;

        $mail->send();
        echo 'Mesajul a fost trimis';
    } catch (Exception $e) {
        echo "Mesajul nu a putut fi trimis. Mailer Error: {$mail->ErrorInfo}";
    }
}

function show($stuff)
{
	echo "<pre>";
	echo "<br>";
	print_r($stuff);
	echo "</pre>";
}

function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}
