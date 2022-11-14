<?php
session_start(); 

if(isset($_POST['salvar'])){

    /// abrir o arquivo json
    $dados = file_get_contents('bd.json');
    $dados = json_decode($dados, true);


    //// dados do formulario em um array
    $input = array(
        'id'=> $_POST['id'],
        'descricao'=> $_POST['descricao'],
        'classificacao'=> $_POST['classificacao'],
        'unidade'=> $_POST['unidade'],
        'quantidade'=> $_POST['quantidade'],
        'valor'=> $_POST['valor']
    );

    $dados [] = $input;  //pega a var $dados, que já contem os valores vindo do arquivo 
                        //JSON, e tranforma essa var em um vetor e add os dados do array
                        //$input dentro dessa var que agora contem os dois dados

    $dados_convertido = json_encode($dados, JSON_PRETTY_PRINT);    /// converte de volta para JSON

    file_put_contents('bd.json', $dados_convertido); //grava os dados de volta no arquivo JSON 

    $_SESSION['msg'] = "Adicionado com sucesso!";
    header('Location:index.php');

}



?>

