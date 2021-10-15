<html>
<body>
<?php

echo "<h1>";
echo "Resultado";
echo "</h1>";

function calcular($primeiroNumero, $operador, $segundoNumero){
    $primeiroNumero = (int) $primeiroNumero;
    $segundoNumero = (int)  $segundoNumero;
    switch($operador){  
        case '+':
        return round($primeiroNumero+ $segundoNumero,0,PHP_ROUND_HALF_DOWN);

        break;

        case '-':
        return round($primeiroNumero- $segundoNumero,0,PHP_ROUND_HALF_DOWN);
        break;

        case '*':
        return round($primeiroNumero* $segundoNumero,0,PHP_ROUND_HALF_DOWN);
        break;

        case '/':
        return round($primeiroNumero/ $segundoNumero,0,PHP_ROUND_HALF_DOWN);
        break;

        default:
        return "";
    }   
}

function converteCardinalParaNumeral($cardinal){
    $cardinal = strtr(
        $cardinal,
        array(
            'zero'      => '0',
            'um'       => '1',
            'dois'       => '2',
            'tres'     => '3',
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
            'milhao'   => '1000000',
            'milhoes'   => '1000000',
            'bilhao'   => '1000000000',
            'bilhoes'   => '1000000000',
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

echo calcular(converteCardinalParaNumeral(strtolower($_POST['primeiroNumero'])), 
    $_POST['operador'], 
    converteCardinalParaNumeral(strtolower($_POST['segundoNumero'])));


?>
</body>
</html>
