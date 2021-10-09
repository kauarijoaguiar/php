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
     $ano = $data[0].$data[1].$data[2].$data[3];
     $days= $data[5].$data[6];
     $mes= $data[8].$data[9];
      $data =  mktime(0, 0, 0, $mes, $days, $ano) ."<br>";
     $pascoa = easter_date($ano); 
     $diaPascoa = date('j', $pascoa);
     $mesPacoa = date('n', $pascoa);
     $contador = 0 ;
     $feriados = [
        mktime(0, 0, 0, 1, 1, $ano), 
        mktime(0, 0, 0, 4, 21, $ano),
        mktime(0, 0, 0, 5, 1, $ano), 
        mktime(0, 0, 0, 9, 7, $ano), 
        mktime(0, 0, 0, 10,  12, $ano), 
        mktime(0, 0, 0, 11,  2, $ano), 
        mktime(0, 0, 0, 11, 15, $ano), 
        mktime(0, 0, 0, 12, 25, $ano),
        mktime(0, 0, 0, $mesPacoa, $diaPascoa, $ano),
        mktime(0, 0, 0, $mesPacoa, $diaPascoa - 47, $ano),
        mktime(0, 0, 0, $mesPacoa, $diaPascoa - 2, $ano),
        mktime(0, 0, 0, $mesPacoa, $diaPascoa + 60, $ano),
     ];

     $contador2 = 1;
    while($contador != $dias){
    if(in_array($data, $feriados) || date("w",$data == 0) || date("w",$data == 6)){
         $soma = $contador2;
         $contador2++;
         $contador++;
    }else{
        $contador++;
    }
    }
    $soma += $dias;

$somadeDU = date('d/m/Y', strtotime("+{$soma} days", strtotime($data)));
return $somadeDU;
}

 echo mais($data, $dias);

?>
</body>
</html>







