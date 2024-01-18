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
        $mail->setFrom(GMAIL_USERNAME, 'tabere_app');
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

function sendVerifyEmail($email, $user_name, $token) {
    $subiect = "Verificare Email";
    $app_url = APP_URL;
    $corp = '
    <html>
    <head>
        <meta charset="UTF-8">
        <title>'.$subiect.'</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #333;
            }
            .container {
                width: 80%;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #f8f8f8;
            }
            a {
                color: #3498db;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Bună, '.$user_name.'!</h2>
            <p>Ne bucurăm să te-ai înregistrat pe aplicația noastră. Te rugăm să verifici adresa de e-mail apasând pe linkul de mai jos:</p>
            <p><a href="https://'.$app_url.'/user/verify/'.$email.'/'.$token.'">Verifică Email</a></p>
            <p>Dacă nu v-ați înregistrat pe site-ul nostru, vă rugăm să ignorați acest e-mail.</p>
            <p>O zi bună,</p>
            <p>tabere_app</p>
        </div>
    </body>
    </html>
';

    sendEmail($email, $subiect, $corp);
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
