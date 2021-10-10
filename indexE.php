<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function romanoParaArabico($romano){
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

    foreach ($romanos as $chave => $valor) {
        while (strpos($romano, $chave) === 0) {
            $resultado += $valor;
            $romano = substr($roman, strlen($chave));
        }
    }
    return  $resultado;

}


?>
</body>
</html>