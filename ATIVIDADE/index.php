<?php

session_start();

require_once('methods/verification.php');

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>Formulário</title>
    
  </head>
  <body>

    <div id="central-form">
      <div class="content" align="center">
        <form action="./pages/final.page.php" method="POST" class="col-sm-4">
          <div class="input-container">
            <input type="text" name="title" class="form-control" placeholder="Título"><br>
          </div>

          <div class="input-container">
            <textarea type="text" name="conteudo" cols="140" rows="10" placeholder="Conteúdo"></textarea><br>
          </div>

          <div class="input-container">
            <input type="text" name="autor" class="form-control" placeholder="Autor"><br>
          </div>

          <input type="submit" name="EnviarDados" class="btn btn-outline-primary btn-lg btn-block"><br>       
        </form> 
        
        <a href="methods/logout.php"><button>Sair</button></a>

      </div>
    </div>
  </body>
</html>