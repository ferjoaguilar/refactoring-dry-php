<?php

class OperacionesDeRestaYDivision{
    public function dividir2Numeros($a, $b){
        return $a / $b;
    }

    public function subtractenEspaniolRestar($a, $b){
        return $a - $b;
    }
}

class OperacionesDeSumaYMultiplicacion{
    public function add($a, $b){
        return $a + $b;
    }

    

    public function multiplica($a, $b){
        return $a * $b;
    }
}

class SpecialOperationes{
    public function squareRoot($a){
        return sqrt($a);
    }
    public function factorial($n){
        if ($n == 0) {
            return 1;
        } else {
            return $n * $this->factorial($n - 1);
        }
    }
}

$operacionesQueSumaYMultiplica = new OperacionesDeSumaYMultiplicacion();
$operacionesQueRestaYDivide = new OperacionesDeRestaYDivision();
$operacionesEspeciales = new SpecialOperationes();

$operacionesQueRestaYDivide->subtractenEspaniolRestar(5, 2);
$operacionesQueSumaYMultiplica->multiplica(5, 2);
$operacionesEspeciales->squareRoot(5);
$operacionesEspeciales->factorial(5);
?>