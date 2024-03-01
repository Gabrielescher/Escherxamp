<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matematicos</title>
</head>
<body>
    <?php
    echo "<h3>OPERADORES MATEMATICOS EM PHP</H3>";
    // as variaveis abaixo, são do tipo inteiro
    $numero1 = 50;
    $numero2 = 20;   
    $numero3 = 30;
    $numero4 = 12;
    echo "Numero 1: " .$numero1;
    echo "<br>Numero 2:" .$numero2;
    echo "<br>Numero 3:" .$numero3;
    echo "<br>Numero 4:" .$numero4;
    
    $soma = $numero1 + $numero3;
    echo "<br>Soma total:" .$soma;
    $soma = $numero2 + $numero4;
    echo "<br>Subtração total:" .$soma;
    $soma = $numero2 + $numero1;
    echo "<br>Divisão total:" .$soma;
    $soma = $numero3 + $numero4;
    echo "<br>Multiplicação total:" .$soma;
    
    

    ?>
    
</body>
</html>