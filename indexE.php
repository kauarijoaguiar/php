<html>
<body>
<?php

echo "<h4>";
echo "Resultado:";
echo "</h4>";


function romanoParaArabico($romano){

    $romano = preg_split('~([*/+-])~', $romano, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

    $romanos = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );

    $resultado = 0;
    foreach ($romano as &$valorOperacao){
        if((strrpos($valorOperacao, "+") === false) && 
            (strrpos($valorOperacao, "-") === false) &&
            (strrpos($valorOperacao, "*") === false) &&
            (strrpos($valorOperacao, "/") === false)){
                $resultado = 0;
                foreach ($romanos as $chave => $valor) {
                    while (strpos($valorOperacao, $chave) === 0) {
                        $resultado += $valor;
                        $valorOperacao = substr($valorOperacao, strlen($chave));
                    }
                }
                $valorOperacao = $resultado;
        }
    }
    return (implode("",$romano));

}

function calculadora($valorString){

    $valoresOperacao = preg_split('~([*/+-])~', $valorString, 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
    for($contador = 1; $contador < count($valoresOperacao); $contador++ ){
        
        switch($valoresOperacao[$contador]){
            case '*':
                array_splice($valoresOperacao, $contador - 1, 3, round($valoresOperacao[$contador - 1] * $valoresOperacao[$contador + 1],0,PHP_ROUND_HALF_DOWN));
                $contador--;
                break;
            case '/':
                array_splice($valoresOperacao, $contador - 1, 3, round($valoresOperacao[$contador - 1] / $valoresOperacao[$contador + 1],0,PHP_ROUND_HALF_DOWN));
                $contador--;
                break;
            case '+':
                array_splice($valoresOperacao, $contador - 1, 3, round($valoresOperacao[$contador - 1] + $valoresOperacao[$contador + 1],0,PHP_ROUND_HALF_DOWN));
                $contador--;
                break;
            case '-':
                array_splice($valoresOperacao, $contador - 1, 3, round($valoresOperacao[$contador - 1] - $valoresOperacao[$contador + 1],0,PHP_ROUND_HALF_DOWN));
                $contador--;
                break;      
            default: 
            break;      
        }
    }
    return current($valoresOperacao);
}

echo calculadora(romanoParaArabico($_POST['valores']));
?>
</body>
</html>