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

    if(date("w",$data == 0)) {
        $soma = date("w", $data) + 1;
    }
    if(date("w",$data == 6)) {
        $soma = date("w", $data) + 2;
    }


    $feriados = [
        mktime(0, 0, 0, 1, 1, ""),
        mktime(0, 0, 0, 4, 21, ""),
        mktime(0, 0, 0, 5, 1, ""),
        mktime(0, 0, 0, 9, 7, ""),
        mktime(0, 0, 0, 10, 12, ""),
        mktime(0, 0, 0, 11, 2, ""),
        mktime(0, 0, 0, 11, 15, ""),
        mktime(0, 0, 0, 12, 25, ""),
    ];
}
echo mais($data, $dias);


?>
</body>
</html>







