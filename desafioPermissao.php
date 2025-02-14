<?php
// Variáveis
$usuarioBloqueado = false; // Altere para true ou false para testar
$tentativasLogin = 3; // Altere o número de tentativas para testar

// Verifique as condições usando o operador NOT (!)
if (!$usuarioBloqueado) {
    echo "Acesso negado: Usuário bloqueado.";
} elseif (!($tentativasLogin < 3)) {
    echo "Acesso negado: Limite de tentativas excedido.";
} else {
    echo "Acesso permitido. Bem-vindo!";
}
?>