<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function mais($data, $dias){
    $data = $_POST['data'];
    $dias = $_POST['dias'];

    $data = implode('-', array_reverse(explode('/', $_POST['data'])));


    if(date("w",$data == 0)) {
        $soma = date("w", $data) + 1;
    }
    if(date("w",$data == 6)) {
        $soma = date("w", $data) + 2;
    }

    $somadeDU = date('d/m/Y', strtotime("+{$dias} days", strtotime($data)));
return $somadeDU;
}
echo mais($data, $dias);






?>
</body>
</html>







