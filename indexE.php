<html>
<body>
<?php
echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function romanoParaNumeral($romanoo){
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

foreach ($romanos as $key => $value) {
    while (strpos($romano, $key) === 0) {
        $resultado += $value;
        $romano = substr($romano, strlen($key));
    }
}
  return $resultado;
}

