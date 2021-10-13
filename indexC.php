<html>
<body>
<?php

echo "<h4>";
echo "Resultado:";
echo "</h4>";


$valor = $_POST['valor'];
if (($valor > 0.01) && ($valor < 999999999.99)){
$chama = extenso($valor);
$valor = number_format($valor, 2, ",", ".");

echo $chama;
}else{
    echo "Valor invalido";
}

function extenso($valor) {

    $singular = ["centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão"];
    $plural = ["centavos", "reais", "mil", "milhões", "bilhões", "trilhões", "quatrilhões"];
    $unidade = ["", "um", "dois", "três", "quatro", "cinco", "seis",  "sete", "oito", "nove"];
    $centena = ["", "cem", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos"];
    $dezena = ["", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"];
    $d10 = ["dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove"];

    $contador = 0;
    $armazenar = "";

    $valor = number_format($valor, 2, ".", ".");
    $inteiro = explode(".", $valor);
    for($contador2=0;$contador2<count($inteiro);$contador2++)
    for($ii=strlen($inteiro[$contador2]);$ii<3;$ii++)
    
    $inteiro[$contador2] = "0".$inteiro[$contador2];

    if(count($inteiro) - ($inteiro[count($inteiro)-1]) > 0){
        $resp = 1;
    }else{
        $resp = 2;
    }
    $contador2=0;
    while ($contador2<count($inteiro)) {
        $valor = $inteiro[$contador2];
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

        $sla = $pegarcentena.(($pegarcentena && ($pegardezena || $pegarunidade)) ? " e " : "").$pegardezena.(($pegardezena &&
        $pegarunidade) ? " e " : "").$pegarunidade;

        $tamanho = count($inteiro)-1-$contador2;

        if($sla){
            if($valor > 1){
                $sla .= " ".$plural[$tamanho];
            } else {
                $sla .= " ".$singular[$tamanho];
            }
        }
        
        if ($valor == "000"){
            $contador++;
        }elseif($contador > 0){
            $contador--;
        }
        if (($tamanho==1) && ($contador>  0) && ($inteiro[0] > 0)){
                if($contador>1){
                $sla = " de ";
            } else{
                $sla="";
            }
            $sla=$plural[$tamanho];
        }if ($sla) $armazenar = $armazenar . ((($contador2 > 0) && ($contador2 <= $resp) && ($inteiro[0] > 0) && ($contador < 1)) ? ( ($contador2 < $resp) ? ", " : " e ") : " ") . $sla;
        $contador2++;
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


