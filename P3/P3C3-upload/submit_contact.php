<?php

$postData = $_POST;

if (!isset($postData['email']) || !isset($postData['message'])) {
    echo ('Il faut un email et un message pour soumettre le formulaire.');
    return;
}

$email = $postData['email'];
$message = $postData['message'];

$success = false;

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['screenshot']['size'] <= 1000000) {
        // Testons si l'extension est autorisée
        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (in_array($extension, $allowedExtensions)) {
            // On peut valider le fichier et le stocker définitivement
            $success = move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' .
                basename($_FILES['screenshot']['name']));
            // echo "L'envoi a bien été effectué !";
        }
    }
}

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
                <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
            </div>
            <?php if ($success) : ?>
                <div class="alert alert-success col-sm-4 m-2" role="alert">
                    <?php echo ("L'envoi du fichier a bien été effectué !"); ?>
                </div>
            <?php endif; ?>
        </div>