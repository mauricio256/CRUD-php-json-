<?php

session_start();

if(isset($_GET['id_produto'])){

    $dados = file_get_contents('bd.json');
    $dados_array = json_decode($dados, true);

    unset($dados_array[ $_GET['id_produto'] ] ); 
                                    
    $dados_array = json_encode($dados_array, JSON_PRETTY_PRINT);
    file_put_contents('bd.json', $dados_array);

    $_SESSION['msg'] = "Deletado com sucesso!";
    header('Location:index.php');
}
?>