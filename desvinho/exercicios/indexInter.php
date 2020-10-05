<?php

require_once ('Interface/Voador.php');
require_once ('classesInter/Aviao.php');
require_once ('classesInter/Pato.php');
require_once ('classesInter/SuperHomem.php');
require_once ('classesInter/TorreDeControle.php');



$p = new Pato(100);
$a = new Aviao (0);   
$s = new SuperHomem (0);   
$t = new TorreDeControle; 

$t->adicionarVoador($p);
$t->adicionarVoador($a);
$t->adicionarVoador($s);

$t->voemTodos();

$p = new Pato(100);
echo $p ->Voar();

