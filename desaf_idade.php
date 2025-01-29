<?php 
    $user1 = [
        'nome' => 'Thiago',
        'idade' => 20,
        'profissao' => 'marceneiro'
    ];
    if($user1['idade'] > 18) {
        echo "Olá, você pode acessar nosso site pois possui mais que 18 anos !";
    }
?>