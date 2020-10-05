<?php

require_once ('classes/Conta.php');
require_once ('classes/Cliente.php');

$c1= new Cliente('Steffany', 'Sousa');
$c2= new Cliente('Ana', 'Brito');

$conta1= new Conta(1234,500,$c1);
//$conta2= new Conta();

$conta1-> saque(300);
