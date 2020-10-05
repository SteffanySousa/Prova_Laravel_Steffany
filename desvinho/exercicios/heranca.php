<?php

require_once('classes/Veiculo.php');
require_once('classes/Carro1.php');
require_once('classes/Moto.php');

$c1 = new Carro1('Palio', 2020, 'vermelho', 'Ar-condicionado', 4);
echo $c1->getDados();
echo '<br>';
print_r($c1);
echo '<br><br>';
echo $c1->acelerar();
echo '<br>';
echo $c1->freiar();
echo'<br><hr>';

$mt = new Moto ('PCX DLS', 2019, 'Azul', '1000','Faróis de Neblina');
echo $mt->getDados();
echo'<br>';
print_r($mt);
echo'<br><br>';
echo $mt->acelerar();
echo '<br>';
echo $mt->freiar();