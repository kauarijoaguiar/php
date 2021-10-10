<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function calcular($primeiroNumero, $operador, $segundoNumero){
    $primeiroNumero = (int) $primeiroNumero;
    $segundoNumero = (int)  $segundoNumero;
    switch($operador){  
        case '+':
        return $primeiroNumero+ $segundoNumero;

        break;

        case '-':
        return $primeiroNumero- $segundoNumero;
        break;

        case '*':
        return $primeiroNumero* $segundoNumero;
        break;

        case '/':
        return $primeiroNumero/ $segundoNumero;
        break;

        default:
        return "";
    }   
}

function converteCardinalParaNumeral($cardinal){
    return $numeral;
}

echo calcular(converteCardinalParaNumeral($_POST['primeiroNumero']), 
    $_POST['operador'], 
    converteCardinalParaNumeral($_POST['segundoNumero']));


?>
</body>
</html>
