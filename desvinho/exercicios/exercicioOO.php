<?php

require_once ('classes/Carro.php');

$volkswagen = new Carro ('Fox Connect 1.6',2020, 4, 'Câmera de Ré, DVD', 'Vermelho');
/*$volkswagen ->setModelo('Fox Connect 1.6');
$volkswagen ->ano= 2020;
$volkswagen ->qtdPortas= 4;
$volkswagen ->setAdicional('Câmera de Ré, DVD');
$volkswagen ->setCor('Vermelho');
//$volkswagen ->freiar();
$volkswagen ->AumentarAno(5);*/

echo 'Modelo: ' . $volkswagen->getModelo(). '<br>';
echo 'Ano: ' . $volkswagen->ano. '<br>';
echo 'Quantidade de Portas: ' . $volkswagen->qtdPortas. '<br>';
echo 'Adicional: ' . $volkswagen->getAdicional(). '<br>';
echo 'Cor: ' . $volkswagen->getCor(). '<br><hr>';


$fiat = new Carro ('Palio', 2018, 2, 'DVD, vidros e travas eletricas', 'Preto');
/*$fiat ->setModelo ('Palio');
$fiat ->ano= 2018;
$fiat ->qtdPortas= 2;
$fiat ->setAdicional ('DVD, vidros e travas eletricas');
$fiat ->setCor ('Preto');
//$fiat ->acelerar();
$fiat ->AumentarAno(1);*/


//print_r ($volkswagen);
//print_r ($volkswagen->freiar());
//print_r ($fiat);
//print_r ($fiat ->acelerar());
//echo $fiat->getModelo() . '<br>';
//echo $fiat->getCor() . '<br>';
//echo $fiat->getAdicional() . '<br>';

echo '<br>';
echo '<br>';
echo 'Modelo: ' . $fiat->getModelo(). '<br>';
echo 'Ano: ' . $fiat->ano. '<br>';
echo 'Quantidade de Portas: ' . $fiat->qtdPortas. '<br>';
echo 'Adicional: ' . $fiat->getAdicional(). '<br>';
echo 'Cor: ' . $fiat->getCor(). '<br><hr>';



echo '<br>';
echo '<hr>';

require_once ('classes/Cachorro.php');

$Cachorro1 = new Cachorro ('Golden Retriever', 3, 12, 25,'Dourado escuro' );
/*$Cachorro1 ->raca= 'Golden Retriever';
$Cachorro1 ->idade= 3;
$Cachorro1 ->espectativaVida= 12;
$Cachorro1 ->peso= 25;
$Cachorro1 ->cor= 'Dourado escuro';
$Cachorro1 ->aumentarEspectativaVida(5);
//echo $Cachorro1 ->espectativaVida;*/

echo 'Raça: ' . $Cachorro1->raca . '<br>';
echo 'idade: ' . $Cachorro1->idade . '<br>';
echo 'Espectativa de Vida: ' . $Cachorro1->espectativaVida . '<br>';
echo 'Peso: ' . $Cachorro1->peso . '<br>';
echo 'Cor: ' . $Cachorro1->cor . '<br><hr>';



$Cachorro2 = new Cachorro ('Beagle', 6, 15, 10, 'Limão e branco');
/*$Cachorro2 ->raca= 'Beagle';
$Cachorro2 ->idade= 6;
$Cachorro2 ->espectativaVida= 15;
$Cachorro2 ->peso= 10;
$Cachorro2 ->cor= 'Limão e branco';
$Cachorro2 ->diminuirPeso(3);

print_r ($Cachorro1);
//print_r ($Cachorro1->AlterarRaca('Maltês'));
echo '<br>';
echo '<br>';
print_r ($Cachorro2);*/

echo 'Raça: ' . $Cachorro2->raca . '<br>';
echo 'idade: ' . $Cachorro2->idade . '<br>';
echo 'Espectativa de Vida: ' . $Cachorro2->espectativaVida . '<br>';
echo 'Peso: ' . $Cachorro2->peso . '<br>';
echo 'Cor: ' . $Cachorro2->cor . '<br><hr>';
