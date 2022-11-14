<?php

    $dados = file_get_contents('bd.json');
    $dados_array = json_decode($dados);

    $busca = false;
    foreach($dados_array as $row){ 
        if($row->descricao == $_POST['descricao'] ){
            echo "
                <table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Classificação</th>
                        <th>Unidade</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                    </tr>
                    <tr>
                        <td>$row->id</td>
                        <td>$row->descricao</td>
                        <td>$row->classificacao</td>
                        <td>$row->unidade</td>
                        <td>$row->quantidade</td>
                        <td>$row->valor</td>
                    </tr>
                </table>
            ";
            $busca = true;
        }
    }
if($busca == false):
    echo"Nenhum resultado encotrado.";
endif;        
echo "<p><a href='index.php'>Voltar</a></p>"; 

