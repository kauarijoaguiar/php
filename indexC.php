<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

$valor = $_POST['valor'];
if (($valor > 0.01) && ($valor < 999999999.99)){
$chama = extenso($valor);
$valor = number_format($valor, 2, ",", ".");

echo $chama;
}else{
    echo "Valor invalido";
}

function extenso($valor = 0, $tipo = false) {
    if(!$tipo){
        $singular = ["centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão"];
        $plural = ["centavos", "reais", "mil", "milhões", "bilhões", "trilhões", "quatrilhões"];
        $unidade = ["", "um", "dois", "três", "quatro", "cinco", "seis",  "sete", "oito", "nove"];
    }

    $centena = ["", "cem", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos"];
    $dezena = ["", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"];
    $d10 = ["dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove"];

    $contador = 0;
    $armazenar = "";

    $valor = number_format($valor, 2, ".", ".");
    $inteiro = explode(".", $valor);
    $i=0;
    for(;$i<count($inteiro);$i++)
    for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
    $inteiro[$i] = "0".$inteiro[$i];

    if(count($inteiro) - ($inteiro[count($inteiro)-1] > 0)){
        $resp = 1;
    }else{
        $resp = 2;
    }
    $i=0;
    while($i<count($inteiro)){
        $valor = $inteiro[$i];
        if (($valor > 100) && ($valor < 200)){
            $pegarcentena ="cento";
         }else{
            $pegarcentena = $centena[$valor[0]];
         }
         if($valor[1] < 2){
            $pegardezena = "";
         }else{
            $pegardezena =  $dezena[$valor[1]];
         }
        if($valor > 0){
            if($valor[1] == 1){ 
                $pegarunidade = $d10[$valor[2]];
            }else{ 
                $pegarunidade = $unidade[$valor[2]];
            }
            }else{
            $pegarunidade="";
        } 

        $r = $pegarcentena.(($pegarcentena && ($pegardezena || $pegarunidade)) ? " e " : "").$pegardezena.(($pegardezena &&
        $pegarunidade) ? " e " : "").$pegarunidade;
        $t = count($inteiro)-1-$i;
        $r .= $r ? " ".($valor > 1 ? $plural[$t] : $singular[$t]) : "";

        if ($valor == "000"){
            $contador++;
        }elseif($contador > 0){
            $contador--;
        }
        if (($t==1) && ($contador>  0) && ($inteiro[0] > 0)){
                if($contador>1){
                $r = " de ";
            } else{
                $r="";
            }
            $r=$plural[$t];
        }
        if ($r) $armazenar = $armazenar . ((($i > 0) && ($i <= $resp) && ($inteiro[0] > 0) && ($contador < 1)) ? ( ($i < $resp) ? ", " : " e ") : " ") . $r;
        $i++;
    }
    if(!$tipo){
        return $armazenar;
    }else{
        return strtoupper($return);
    }
}
?>
</body>
</html>