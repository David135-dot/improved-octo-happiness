<?php 
    function compararNumeros($a, $b) {
        if(!is_int($a)) {
            return "O primeiro número digitado não é um inteiro, por favor digite um válido. </br>";
        }
        if(!is_int($b)) {
            return "O segundo número digitado não é um inteiro, por favor digite um válido.";
        }
        if(is_int($a) && is_int($b)) {
            if($a > $b) {
                return "O primeiro número é maior.";
            }
            elseif($a < $b) {
                return "O segundo número é maior.";
            }
            else {
                return "Os números são iguais.";
            }
        }
    }
    echo compararNumeros(5 , 6)
?>