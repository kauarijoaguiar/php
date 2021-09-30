<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

if (verificar($valor) == true) {
	//nome
	echo "valor esta dentro dos parametros";
   echo "<br>";
	 echo $_POST["valor"];
 } else {
	 echo "valor n esta dentro dos parametros";
 }

function verificar($valor){
	$valor = $_POST['valor'];

	if(($valor > 0.01) && ($valor < 999999999.99)){
		return true;
	}else{
		return false;
	}
}
?>
</body>
</html>
