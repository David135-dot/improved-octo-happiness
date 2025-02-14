<?php
    function verificarAcesso($idade, $autorizacao) {
        if(!is_int($idade)) {
            return "Erro: Digite um número inteiro para idade.";
        }
        if(!is_bool($autorizacao)) {
            return "Erro: Não foi inserido um booleano (true/false)";
        }
        if($idade >= 18 && $autorizacao) {
            return "Acesso autorizado";
        }
        elseif($idade < 18) {
            return "Acesso negado. Idade mínima requerida: 18 anos.";
        }
        else {
            return "Acesso negado. Autorização necessária.";
        }
    }
    echo verificarAcesso(15, false);
?>