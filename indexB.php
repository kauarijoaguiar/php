<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function mais($data, $dias){
    $data = $_POST['data'];
    $dias = $_POST['dias'];

    $data = implode('-', array_reverse(explode('/', $_POST['data'])));


$contador = 0;
$contador2 = 0;
$somadeDU = date('d/m/Y', strtotime("+{$dias} days", strtotime($data)));

while ($contador < $dias){
    if(date("w",$data == 0)) {
        
        $soma1 = $dias + 1;
    } if(date("w",$data == 6)){
        $soma1 = $dias + 2;
        
    }
    $contador++;
}  

    $somadeDU = date('d/m/Y', strtotime("+{$soma1} days", strtotime($data)));
    return $somadeDU;
}

echo mais($data, $dias);






?>
</body>
</html>







