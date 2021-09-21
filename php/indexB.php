<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

$invalidos = 0;
if (!isset($_POST["data"])) {
	$invalidos++;
} else {
	if (!preg_match("#^(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[0-2])/(19|2[0-9])[0-9]{2}$#", $_POST["data"])) {
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







