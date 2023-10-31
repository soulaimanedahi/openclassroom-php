<?php
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . nl2br("\n"); //! PHP_EOL doesn't work

$positionLaurene = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurene . PHP_EOL;