<?php
session_start();

if(isset($_POST['salvar'])){

    //// dados do formulario em um array
    $input = array(
        'id'=> $_POST['id'],
        'descricao'=> $_POST['descricao'],
        'classificacao'=> $_POST['classificacao'],
        'unidade'=> $_POST['unidade'],
        'quantidade'=> $_POST['quantidade'],
        'valor'=> $_POST['valor']
    );

    $dados = file_get_contents('bd.json');
    $dados_array = json_decode($dados,true);

    $dados_array[ $_POST['id'] ] = $input; /// pega os valores que foi retornado do json que esta
                                         ///  armazenado na operação: $data_array = json_decode($data) e acessa 
                                         ///  a posição com ID vindo do form, assim acessa registro do JSON a que
                                         ///  se quer editar. com isso $data_array[ $_POST['id'] ] recebe os
                                         ///  novos dados que estao na var $input.  


    $dados = json_encode($dados_array, JSON_PRETTY_PRINT);
    file_put_contents('bd.json', $dados);

    $_SESSION['msg'] = "Salvo com sucesso!";
    header('Location:index.php');
}
?>
