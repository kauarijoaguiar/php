<html>
<body>
<?php
echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";


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

    if (strlen($cpf) != 11) {
        return false;
    }
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    return true;

}



?>
</body>
</html>

