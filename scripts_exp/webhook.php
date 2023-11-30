<?php

$secret = 'ad3@42A4329@26#5#SD$G@$d903gzh%#2v4@%#A3346fg'; // Acesta trebuie să fie același cu cel setat în GitHub
$headerName = 'HTTP_X_HUB_SIGNATURE';

// Colectează datele din POST și header
$rawPost = file_get_contents('php://input');
if (!$rawPost) {
    die('No data received');
}

// Verifică semnătura
if (!isset($_SERVER[$headerName])) {
    die('Signature not provided');
}

list($algo, $gitHubSignature) = explode('=', $_SERVER[$headerName], 2);
$hash = hash_hmac($algo, $rawPost, $secret);
if ($hash !== $gitHubSignature) {
    die('Signatures do not match');
}

// Comanda pentru a actualiza repository-ul
$commands = array(
    'cd ~/tts_web_project',
    'git pull origin master'
);

// Execută comenzile
$output = '';
foreach ($commands as $command) {
    $tmp = shell_exec($command);
    $output .= htmlspecialchars("$command: $tmp\n");
}

echo $output;
?>

