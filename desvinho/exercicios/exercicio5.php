<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$pessoas= array();
$pessoas['menina1']= 'Jennifer';
$pessoas['menina2']= 'Bianca';
$pessoas['menina3']= 'Amanda';
$pessoas['menina4']= 'Juliana';
$pessoas['menina5']= 'Sophia';

print_r($pessoas);

echo'<br>';
echo '<hr>';

$livros= array();
$livros['romance']= 
'Um lugar bem longe daqui'=> array(
'melhor' => 'A culpa é das estrelas',
'bom' => 'A aposta'
);

$livros['infantil']= 'Chapeuzinho Vermelho';
$livros['biografia ']= 'Lincoln';
$livros['literatura']= 'Dom Casmurro';

print_r($livros);

echo'<br>';
echo '<hr>';

$animais = array(
    'mamiferos' => array(
        'Leao' => array(
            'pelagem'=> 'sim',
            'alimentacao'=> 'leite materno',
            'tipo'=>'vertebrados')),
       
    'aves' => array(
        'Beija-Flor'=> array(
           'bico'=> 'sim',
           'pelagem'=> 'sim',
           'tipo'=>'vertebrados')),
        );

        foreach($animais as $indice => $animal){
            echo "$indice: <br>";
            foreach($animal as $chave => $valor){
                echo "$chave";
                echo '<br>';
                foreach($valor as $value){
                    echo"$value";
                    echo'<br>';
                }
                
            }
        }

?>

    
</body>
</html>