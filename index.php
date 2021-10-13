<html>
<body>
<?php

echo "<h4>";
echo "Resultado:";
echo "</h4>";


    if (validacao($cpf) == true) {
       echo "CPF válido";
      echo "<br>";
        echo $_POST["cpf"];
    } else {
        echo "CPF inválido";
    }


function validacao($cpf){
$cpf = $_POST['cpf'];

    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

    if (($cpf[0] == $cpf[1]) && ($cpf[1] == $cpf[2]) && ($cpf[2] == $cpf[3]) && ($cpf[3] == $cpf[4]) && ($cpf[4] == $cpf[5]) && ($cpf[5] == $cpf[6]) && ($cpf[6] == $cpf[7]) && ($cpf[8] == $cpf[9]) && ($cpf[9] == $cpf[10])) {
        return false;
    }

    if (($cpf[9] == 1) && ($cpf[10] == 0)){
        return false;
    }

    $contador = 9; 
    $resto = 0;
    $posicao = 0;
    while ($contador < 11 ) {
        while ( $posicao < $contador)  {
            $resto = $resto + $cpf[$posicao] * (($contador + 1) - $posicao);
            $posicao++;
        }
        $resto = ((10 * $resto) % 11) % 10;
        if ($cpf[$posicao] != $resto) {
            return false;
        }
        $contador++;
    }
	return true;
}



?>
</body>
</html>

