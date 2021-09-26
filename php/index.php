<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function validacao($cpf){
    $cpf = $_POST['cpf'];
    echo ['cpf'];
}
echo validacao($cpf)


?>
</body>
</html>

