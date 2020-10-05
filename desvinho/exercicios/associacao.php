<?php

require_once('classes/Cachorro.php');
require_once('classes/Animal.php');

$Cachorro1 = new Cachorro ('Golden Retriever', 3, 12, 25,'Dourado escuro' );
$Animal1 = new Animal ('Cachorro', 51, 'Fêmea' );

$Cachorro1->setAnimal($Animal1);

echo 'A raça do cachorro é ' . $Cachorro1->getRaca() . '<br>';
echo 'O sexo do cachorro é ' . $Cachorro1->getAnimal()->getSexo() . '<br>';
