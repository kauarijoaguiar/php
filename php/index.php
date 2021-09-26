<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

$invalidos = 0;

if (!isset($_POST["cpf"])) {
	$invalidos++;
} else {
	if (!preg_match("#^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$#", $_POST["cpf"])) {
		$invalidos++;
	}
}
if ($invalidos == 0) {
	echo "sem erros";
	// código PHP realizando alguma tarefa com os dados recebidos
} else {
	echo "com erros";
}

//validar CPF
/*
function validar(){
	$cpf = preg_replace('/[^0-9]/', "", $number);
	
	//quantidade de numeros ou se tem algum numero repetido 
	if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf) {
        return false;
    }

$number_quantity_to_loop = [9, 10];

    foreach ($number_quantity_to_loop as $item) {

        $sum = 0;
        $number_to_multiplicate = $item + 1;
    
        for ($index = 0; $index < $item; $index++) {

            $sum += $cpf[$index] * ($number_to_multiplicate--);
    
        }

        $result = (($sum * 10) % 11);

        if ($cpf[$item] != $result) {
            return false;
        }

    }
	return true;
}
}
*/

?>
</body>
</html>

