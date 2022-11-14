<?php session_start();  ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estoque Fácil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
</svg> Estoque Fácil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <form class="d-flex" role="search" action="buscar.php" method="POST">
            <input id="descricao" name="descricao" required class="form-control me-2" type="text" placeholder="Digite o nome do produto" aria-label="Search">
            <button name="buscar" class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        </div>
    </div>
    </nav>
        <?php if(isset($_SESSION['msg'])): ?>
        <div class="alert alert-light">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?php echo $_SESSION['msg']; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php unset($_SESSION['msg']); endif; ?>
    <box class="container-fluid">
        <a href="form_add.php" class="btn btn-info" style="margin:40px 80px 20px 0px; float:right;">Adicionar</a>
        <table class='table' style="margin:0px 80px;">
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Descrição</th>
                        <th scope='col'>Classificação</th>
                        <th scope='col'>Unidade</th>
                        <th scope='col'>Quantidade</th>
                        <th scope='col'>Valor</th>
                        <th scope='col'>Ações</th>
                    </tr>
                </thead>
        <?php 

         ////lista        
        $dados = file_get_contents('bd.json');   /// ler o arquivo json
        $dados = json_decode($dados); 

        if($dados):
            foreach ($dados as $row) {
                echo"
                    <tbody>
                        <tr>
                            <td>".$row->id."</td>
                            <td>".$row->descricao."</td>
                            <td>".$row->classificacao."</td>
                            <td>".$row->unidade."</td>
                            <td>".$row->quantidade."</td>
                            <td> R$ ".$row->valor."</td>
                            <td> 
                                <a href='form_editar.php?id_produto=".$row->id."' class='btn btn-warning btn-sm'>Editar</a>
                                <a href='deletar.php?id_produto=".$row->id."' class='btn btn-danger btn-sm' onclick =' return alerta_delete()'>Deletar</a>
                            </td>
                        </tr>
                    </tbody>
                ";
            }       
        endif; 
        ?>
        </table>
    </box>

    <script>
        function alerta_delete(){
            var deleta = confirm('Tem certeza que deseja deletar este registro?');
            if (deleta == true)
                return true;                       
            else
                return false;
        }                                 
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>
