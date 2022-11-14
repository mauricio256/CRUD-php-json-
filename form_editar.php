<?php
    $id = $_GET['id_produto'];

    $dados = file_get_contents('bd.json');   /// ler o arquivo json
    $dados = json_decode($dados); 
    
    $row = $dados[$id];
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estoque Fácil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <div class="mx-auto" style="width: 800px; padding: 20px; border-radius: 10px; margin-top: 30px; box-shadow: 1px 1px 5px 1px;">
      <h2>Editar</h2>
        <div class="progress">
          <div id="barraProgresso" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
        </div>
      <form id="form" action="editar.php" method="POST">
        <div class="mb-3">
          <label class="form-label">ID Produto : </label>
          <strong><?php echo $row->id; ?></strong>
          <input type="text"  name="id"  class="form-control" hidden value="<?php echo $row->id; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <input type="text" id="descricao"  name="descricao" class="form-control" value="<?php echo $row->descricao; ?>">
            <p id="msgErroDescricao"></p>
        </div>
        <div class="mb-3">
            <label class="form-label">Classificação</label>
            <input type="text" id="classificacao" name="classificacao" class="form-control" value="<?php echo $row->classificacao; ?>">
            <p id="msgErroClassificacao"></p>
        </div>
        <div class="mb-3">
            <label class="form-label">Unidade</label>
            <input type="text" id="unidade"  name="unidade" class="form-control" value="<?php echo $row->unidade; ?>">
            <p id="msgErroUnidade"></p>
        </div>
        <div class="mb-3">
            <label class="form-label">Quantidade</label>
            <input type="text" id="quantidade"  name="quantidade" class="form-control" value="<?php echo $row->quantidade; ?>">
            <p id="msgErroQuantidade"></p>
        </div>
        <div class="mb-3">
            <label class="form-label">Valor</label>
            <input type="text"  id="valor" name="valor" class="form-control" value="<?php echo $row->valor; ?>">
            <p id="msgErroValor"></p>
        </div>
        <input type="submit" name="salvar" value="salvar" class="btn btn-info" onclick ="return valida_form()" >
        <a href="index.php" class="btn alert-dark">Voltar</a>
      </form>  
    </div>  
    <script src="valida_form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


