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

/*
$feriados = [
    
    mktime(0, 0, 0, 1, 1, $ano),   
    mktime(0, 0, 0, 4, 21, $ano),  
    mktime(0, 0, 0, 5, 1, $ano),   
    mktime(0, 0, 0, 9, 7, $ano),   
    mktime(0, 0, 0, 10, 12, $ano), 
    mktime(0, 0, 0, 11, 2, $ano), 
    mktime(0, 0, 0, 11, 15, $ano), 
    mktime(0, 0, 0, 12, 25, $ano), 
    mktime(0, 0, 0, $mesPacoa, $diaPascoa - 48, $anoPascoa),
    mktime(0, 0, 0, $mesPacoa, $diaPascoa - 47, $anoPascoa), 
    mktime(0, 0, 0, $mesPacoa, $diaPascoa - 2, $anoPascoa),  
    mktime(0, 0, 0, $mesPacoa, $diaPascoa, $anoPascoa),   
    mktime(0, 0, 0, $mesPacoa, $diaPascoa + 60, $anoPascoa), 

];
*/
    $somadeDU = date('d/m/Y', strtotime("+{$soma} days", strtotime($data)));
return $somadeDU;
}

echo mais($data, $dias);






?>
</body>
</html>







