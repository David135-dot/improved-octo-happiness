<?php 
    $assinaturaAtiva = false;
    $ehAdministrador = false;
    if ($assinaturaAtiva || $ehAdministrador) {
        echo "Acesso permitido.";
    }
    else {
        echo "Aceso negado: </br>";
        if(!$assinaturaAtiva) {
            echo "Sua assinatura está inátiva. ";
        }
        if(!$ehAdministrador) {
            echo "Você não tem permissão pois não é um administrador";
        }
    }
?>