<?php
require_once ('validador_acesso.php');

$chamados = array();

$arquivo = fopen('arquivo.txt', 'r');

while(!feof($arquivo)){
$registro = fgets($arquivo);
$chamados[] = $registro;
}
fclose($arquivo);



?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <?php
   include_once('menu.php');
   ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            <?php 
            foreach($chamados as $chamado) { ?>

            <?php
            $chamados_dados = explode('#', $chamado);
            if(count($chamados_dados) <3 ){
              continue;
            }
            ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamados_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamados_dados[1]?></h6>
                  <p class="card-text"><?= $chamados_dados[2]?></p>

                </div>
              </div>
                <?php } ?>
            
              </div>

              <div class="row mt-5">
              <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>