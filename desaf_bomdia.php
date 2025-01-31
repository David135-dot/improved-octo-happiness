<?php 
    $hora = date('H:i:s');
    $manha = date('11:59:59');
    $tarde = date('17:59:59');
    $noite = date('18:00:00');
    echo $hora;
    echo "<br>";
    if ($hora > $manha and $hora < $noite ) {
        echo "Boa tarde !";
    }
    elseif ($hora < $tarde) {
        echo "Bom dia !";
    }
    else {
        echo "Boa noite !";
    }
?>