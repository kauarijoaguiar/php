<!-- essa é uma lógica que a gente tinha feito no 1º ano, dá para aproveitar -->
<!-- var numeroromano = prompt("Digite o número em romano:");
var c = 0;
var numeroromano=(numeroromano.trim()).toUpperCase();
var resp = 0;
var sair=""
while (c < numeroromano.length){
if((numeroromano.charAt(c) == "I")||(numeroromano.charAt(c) == "V")||(numeroromano.charAt(c) == "X")||(numeroromano.charAt(c) == "L")||(numeroromano.charAt(c) == "C")||(numeroromano.charAt(c) == "D")||(numeroromano.charAt(c) == "M")){  
  if(numeroromano.charAt(c)=="I"){
    resp=resp+1;
    if((numeroromano.charAt(c+2)=="I")&&(numeroromano.charAt(c+1)=="I")&&(numeroromano.charAt(c+3)=="I")){
    alert("O número não é valido");
    sair="sair";
    break
    }
    if(numeroromano.length==1){
      alert("O número é "+resp);
      break
    }
   else{
      if(numeroromano.charAt(c+1)=="I"){
        resp=resp+1;
        c++
      }
      if((numeroromano.charAt(c+1)=="I")&&(numeroromano.charAt(c)=="I")){
        resp=resp+1;
        c++;
        }
      }
   }
    if(numeroromano.charAt(c)=="V"){
      resp=resp+5
      if(numeroromano.charAt(c-1)=="I"){
      resp=resp-2;
      }
      if(numeroromano.charAt(c-2)=="I"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.length==1){
        alert("O número é "+resp);
        break
      }
      else{
        if((numeroromano.charAt(c+1)=="V")&&(numeroromano.charAt(c)=="V")){
          alert("O número não é valido");
          sair="sair";
          break
        }
      }
    }
    if(numeroromano.charAt(c)=="X"){
      resp=resp+10;
      if(numeroromano.charAt(c-1)=="I"){
      resp=resp-2;
      }
      if(numeroromano.charAt(c-2)=="I"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="V"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if((numeroromano.charAt(c+2)=="X")&&(numeroromano.charAt(c+1)=="X")&&(numeroromano.charAt(c+3)=="X")){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.length==1){
      alert("O número é "+resp);
      break
      }
      else{
        if(numeroromano.charAt(c+1)=="X"){
        resp=resp+10;
        c++
       }
      if((numeroromano.charAt(c+1)=="X")&&(numeroromano.charAt(c)=="X")){
        resp=resp+10;
        c++;
        }
      }
   }
   if(numeroromano.charAt(c)=="C"){
    resp=resp+100;
    if(numeroromano.charAt(c-1)=="X"){
      resp=resp-20;
    }
    if(numeroromano.charAt(c-2)=="X"){
      alert("O número não é valido");
      sair="sair";
      break
    }
    if(numeroromano.charAt(c-1)=="I"){
      alert("O número não é valido");
      sair="sair";
      break
    }
    if(numeroromano.charAt(c-1)=="V"){
      alert("O número não é valido");
      sair="sair";
      break
    }
    if(numeroromano.charAt(c-1)=="L"){
      alert("O número não é valido");
      sair="sair";
      break
    }
    if((numeroromano.charAt(c+2)=="C")&&(numeroromano.charAt(c+1)=="C")&&(numeroromano.charAt(c+3)=="C")){
    alert("O número não é valido")
    sair="sair";
    break
    }
    if(numeroromano.length==1){
      alert("O número é "+resp);
      break
    }
    else{
      if(numeroromano.charAt(c+1)=="C"){
        resp=resp+100;
        c++
      }
      if((numeroromano.charAt(c+1)=="C")&&(numeroromano.charAt(c)=="C")){
        resp=resp+100;
        c++;
        }
    }
   }
   if(numeroromano.charAt(c)=="M"){
      resp=resp+1000;
      if(numeroromano.charAt(c-1)=="I"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="V"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="X"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="L"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="D"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="C"){
      resp=resp-200;
      }
      if(numeroromano.charAt(c-2)=="C"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if((numeroromano.charAt(c+2)=="M")&&(numeroromano.charAt(c+1)=="M")&&(numeroromano.charAt(c+3)=="M")){
      alert("O número não é valido");
      sair="sair";
      break
    }
    if(numeroromano.length==1){
      alert("O número é "+resp);
      break
    }
    else{
      if(numeroromano.charAt(c+1)=="M"){
        resp=resp+1000;
        c++
      }
      if((numeroromano.charAt(c+1)=="M")&&(numeroromano.charAt(c)=="M")){
        resp=resp+1000;
        c++;
      }
    }
   }
  if(numeroromano.charAt(c)=="L"){
      resp=resp+50;
      if(numeroromano.charAt(c-1)=="I"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="V"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="X"){
      resp=resp-20;
      }
      if(numeroromano.charAt(c-2)=="X"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.length==1){
        alert("O número é "+resp);
        break
      }
      else{
        if((numeroromano.charAt(c+1)=="L")&&(numeroromano.charAt(c)=="L")){
          alert("O número não é valido");
          sair="sair";
          break
        }
      }
    }
    if(numeroromano.charAt(c)=="D"){
      resp=resp+500
      if(numeroromano.charAt(c-1)=="I"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="V"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="X"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="L"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.charAt(c-1)=="C"){
      resp=resp-200;
      }
      if(numeroromano.charAt(c-2)=="C"){
      alert("O número não é valido");
      sair="sair";
      break
      }
      if(numeroromano.length==1){
        alert("O número é "+resp);
        break
      }
      else{
        if((numeroromano.charAt(c+1)=="D")&&(numeroromano.charAt(c)=="D")){
          alert("O número não é valido");
          sair="sair";
          break
        }
      }
    }
}
  else{
  alert("O número não é valido");
  sair="sair";
  break
  }
  c++
}
if(sair!="sair"){
alert("O número é "+resp);
} -->

<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

$romans = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1,
);

$roman = $_POST['operador'];
$result = 0;

foreach ($romans as $key => $value) {
    while (strpos($roman, $key) === 0) {
        $result += $value;
        $roman = substr($roman, strlen($key));
    }
}
echo $result;



?>
</body>
</html>
