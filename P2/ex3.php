<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . nl2br("\n"); //! PHP_EOL doesn't work
}