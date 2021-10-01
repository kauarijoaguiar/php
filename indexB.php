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

while ($contador < $dias){

    if((date("W",$data == 0)) || (date("W",$data == 6))) {
         $soma = $dias + 1;
    }

    if((date("W",$data != 0)) && (date("W",$data != 6))) {
        $somadeDU = date('d/m/Y', strtotime("+{$soma} days", strtotime($data)));
        $contador++;
   }

}

    $somadeDU = date('d/m/Y', strtotime("+{$soma} days", strtotime($data)));
return $somadeDU;
}

echo mais($data, $dias);






?>
</body>
</html>







