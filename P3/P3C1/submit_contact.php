<?php

/**
 * On ne traite pas les super globales provenant de l'utilisateur directement,
 * ces données doivent être testées et vérifiées.
 */
$getData = $_GET;

if (
    (!isset($getData['email']) || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($getData['message']) || empty($getData['message']))
) {
    echo ('Il faut un email et un message pour soumettre le formulaire.');
    return;
}

$email = $getData['email'];
$message = $getData['message'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Contact reçu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php include_once('header.php'); ?>
        <h1>Message bien reçu !</h1>

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo ($email); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo ($message); ?></p>
            </div>
        </div>