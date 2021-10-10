<html>
<body>
<?php

echo "<b>POST</b>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "<hr>";

function calcular($primeiroNumero, $operador, $segundoNumero){
    $primeiroNumero = (int) $primeiroNumero;
    $segundoNumero = (int)  $segundoNumero;
    switch($operador){  
        case '+':
        return $primeiroNumero+ $segundoNumero;

        break;

        case '-':
        return $primeiroNumero- $segundoNumero;
        break;

        case '*':
        return $primeiroNumero* $segundoNumero;
        break;

        case '/':
        return $primeiroNumero/ $segundoNumero;
        break;

        default:
        return "";
    }   
}

function converteCardinalParaNumeral($cardinal){
    // Replace all number words with an equivalent numeric value
    $cardinal = strtr(
        $cardinal,
        array(
            'zero'      => '0',
            'um'       => '1',
            'dois'       => '2',
            'três'     => '3',
            'quatro'      => '4',
            'cinco'      => '5',
            'seis'       => '6',
            'sete'     => '7',
            'oito'     => '8',
            'nove'      => '9',
            'dez'       => '10',
            'onze'    => '11',
            'doze'    => '12',
            'treze'  => '13',
            'quatorze'  => '14',
            'quinze'   => '15',
            'dezesseis'   => '16',
            'dezessete' => '17',
            'dezoito'  => '18',
            'dezenove'  => '19',
            'vinte'    => '20',
            'trinta'    => '30',
            'quarenta'     => '40',
            'cinquenta'     => '50',
            'sessenta'     => '60',
            'setenta'   => '70',
            'oitenta'    => '80',
            'noventa'    => '90',
            'cem'   => '100',
            'cento'   => '100',
            'duzentos'   => '200',
            'trezentos'   => '300',
            'quatrocentos'   => '400',
            'quinhentos'   => '500',
            'seiscentos'   => '600',
            'setecentos'   => '700',
            'oitocentos'   => '800',
            'novecentos'   => '900',
            'mil'  => '1000',
            'milhão'   => '1000000',
            'milhões'   => '1000000',
            'bilhão'   => '1000000000',
            'bilhões'   => '1000000000',
            'e'       => '',
        )
    );

    $partes = array_map(
        function ($val) {
            return floatval($val);
        },
        preg_split('/[\s-]+/', $cardinal)
    );

    $stack = new SplStack; 
    $soma   = 0; 
    $ultimo  = null;
    $resultado = 0;

    foreach ($partes as $parte) {
        if (!$stack->isEmpty()) {
            if ($stack->top() > $parte) {
                if ($ultimo >= 1000) {
                    $soma += $stack->pop();
                    $stack->push($parte);
                } else {
                    $stack->push($stack->pop() + $parte);
                }
            } else {
                $stack->push($stack->pop() * $parte);
            }
        } else {
            $stack->push($parte);
        }

        $ultimo = $parte;
    }

    $resultado =  $soma + $stack->pop();
    return $resultado;
}

echo calcular(converteCardinalParaNumeral($_POST['primeiroNumero']), 
    $_POST['operador'], 
    converteCardinalParaNumeral($_POST['segundoNumero']));


?>
</body>
</html>
