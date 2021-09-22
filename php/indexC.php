<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

$invalidos = 0;

if (!isset($_POST["valor"])) {
	$invalidos++;
} else {
	if (!preg_match("#^(0|[1-9][0-9]*)\.[0-9]+$#", $_POST["valor"])) {
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
