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
	if (!preg_match("#\d{3}\.?\d{3}\.?\d{3}-?\d{2}$#", $_POST["cpf"])) {
		$invalidos++;
	}
}
if ($invalidos == 0) {
	echo "sem erros";
	// código PHP realizando alguma tarefa com os dados recebidos
} else {
	echo "com erros";
}

?>
</body>
</html>

