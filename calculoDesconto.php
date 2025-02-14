<?php
    function calcularDesconto($valor, $categoria) {
        switch ($categoria) {
            case 'eletrônicos':
                $valor = $valor - ($valor * 0.10);
                return $valor; 
                break;
            case 'vestuário':
                $valor = $valor - ($valor * 0.20);
                return $valor;
                break;
            case 'alimentos':
                $valor = $valor - ($valor * 0.05);
                return $valor;
                break;
            default:
                return $valor;
                break;
        }
    }
    echo calcularDesconto(100, "vestuário");
?>