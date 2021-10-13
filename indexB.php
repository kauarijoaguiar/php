<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function mais($data, $dias){

    $data = mktime(date("m"),date("d"),date("Y"),
    date($data[3].$data[4]),date($data[0].$data[1]),date($data[6].$data[7].$data[8].$data[9])). "<br>";

    $dia = date('d', $data);
    $mes = date('m', $data);
    $ano = date('Y', $data);

    $data = mktime(0, 0, 0, $mes, $dia, $ano);

    $finalSemana = 0;
    $diasUteis = 0;
    $somaDias = 1;

    $pascoa= easter_date($ano);
    $diaPascoa = date('j', $pascoa);
    $mesPascoa = date('m', $pascoa);

    $feriados = array(
        mktime(0, 0, 0, 1, 1, $ano), 
        mktime(0, 0, 0, 4, 21, $ano),
        mktime(0, 0, 0, 5, 1, $ano), 
        mktime(0, 0, 0, 9, 7, $ano), 
        mktime(0, 0, 0, 10,  12, $ano),
        mktime(0, 0, 0, 11,  2, $ano), 
        mktime(0, 0, 0, 11, 15, $ano), 
        mktime(0, 0, 0, 12, 25, $ano),
        mktime(0, 0, 0, $mesPascoa, $diaPascoa, $ano),
        mktime(0, 0, 0, $mesPascoa, $diaPascoa - 47, $ano),
        mktime(0, 0, 0, $mesPascoa, $diaPascoa - 2, $ano),
        mktime(0, 0, 0, $mesPascoa, $diaPascoa + 60, $ano),
    );
    while($diasUteis != $dias){
        $data = mktime(0, 0, 0, $mes, $dia + $somaDias, $ano)."<br>";
        if ((date('D', $data) == 'Sat') || (date('D', $data) == 'Sun') ||  in_array($data, $feriados)){
            $finalSemana++. "<br>";
        } else {
            $diasUteis++. "<br>";
        };
        $somaDias++. "<br>";

    }
    

    return date("d/m/Y",$data)."<br>";

}
echo mais($_POST['data'],$_POST['dias']);

?>
</body>
</html>

