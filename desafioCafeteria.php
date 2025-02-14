<?php
    $bebida = readline("Digite o código da bebida: ");
    switch($bebida) {
        case 1:
            echo "Bebida 1: Café expresso. <br> Preço: R$ 5,00.";
            break;
        case 2:
            echo "Bebida 2: Capuccino. <br> Preço: R$ 7,50.";
        break;
        case 3:
            echo "Bebida 3: Chá verde. <br> Preço: R$ 4,00.";
            break;
        case 4:
            echo "Bebida 4: Suco de laranja. <br> Preço: R$ 6,00.";
            break;
        case 5:
            echo "Bebida 5: Água mineral. <br> Preço: R$ 2,50.";
            break;
    }
?>