<?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);


echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' 
. nl2br("\n") //! PHP_EOL doesn't work
. $recipe;
