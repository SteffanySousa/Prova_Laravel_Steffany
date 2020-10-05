<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>

<?php //Primeiro um if
            $i = 1;

            if ($i == 0) {
                echo "i é igual a 0";
            } elseif ($i == 1) {
                echo "i é igual a 1";
            } elseif ($i == 2) {
                echo "i é igual a 2";
            } else {
                print "i não é igual a 0, 1 ou 2";
            }
 ?>  


 <?php 
        $i = 1;

        switch ($i) {
            case 0:
                echo "i é igual a 0";
            break;    
            
            case 1:
                echo "i é igual a 1";
            break;  

            case 2:
                echo "i é igual a 2";
            break;
                      
        default:
            echo "i não é igual a 0, 1 ou 2";
        } 
 ?> 
</body>
</html>