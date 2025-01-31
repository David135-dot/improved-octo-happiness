<?php
    $diaAtual = 6;
    $sabado = 6;
    if ($diaAtual == $sabado){
        echo "Eba, hoje é sábado !";
    }
    // Caso o dia de hoje seja domingo
    elseif ($diaAtual == 7){
        echo "faltam " . ($sabado - $diaAtual) + 7 . " dias para o sábado"; 
    }
    else {
        echo "faltam " . ($sabado - $diaAtual) . " dias para o sábado";
    }
?>
