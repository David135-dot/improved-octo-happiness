<?php
    //Criando a função para calcular a soma e subtração
    function calcularValores($a, $b) { 
        $soma = $a + $b;
        $sub = $a - $b;
        //Criando uma variável que juntara os resultados numa array, assim sendo possível obter dois resultados num return
        $resultadoFinal = array($soma, $sub);
        return $resultadoFinal;
    }
    //Criando outra variável para imprimir os valores obtidos na lista
    $resultadoArray = calcularValores(5, 9);
    echo "Soma: " . $resultadoArray[0];
    echo "<br>";
    echo "Subtração: " . $resultadoArray[1];
?>
