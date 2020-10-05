<?php

require_once ('Interface/Imprimivel.php');
require_once ('classesInter/Contrato.php');
require_once ('classesInter/Foto.php');
require_once ('classesInter/Documento.php');
require_once ('classesInter/Impressora.php');


$cont = new Contrato('Trabalhista', 'Temporario');
$fot = new Foto ('Romantica', 'Retrato');
$doc = new Documento('Especial', 'Importante');
$imp = new Impressora;


$imp->adicionarImprimivel($cont);
$imp->adicionarImprimivel($fot);
$imp->adicionarImprimivel($doc);

$imp->imprimirTudo();
