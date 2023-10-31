<?php
$isAllowedToEnter = "Oui";

// SI on a l'autorisation d'entrer
if ($isAllowedToEnter == "Oui") {
    // instructions à exécuter quand on est autorisé à entrer
    
    echo '<h1>Ma page web</h1>';
    echo '<p>Aujourd\'hui nous sommes le ' . date('d/m/Y h:i:s') . '.</p>';
    $fullname = 'Mathieu Nebra';
    echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK

} // SINON SI on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter == "Non") {
    // instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}
?>