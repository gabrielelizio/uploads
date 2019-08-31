<?php

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");


?>
<!DOCTYPE html>
<html class="<?php echo "$vg_theme";?>">
  <head>
    <title><?php echo "$vg_title";?></title>

    <meta charset="<?php echo $vg_charset;?>">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <link href="../stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="../images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="../images/ico-boilerplate.png">
  </head>
  <body>
    <div class="ls-topbar ">

<?php  include_once("../notification_bars.php"); ?>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="#" class="ls-ico-earth">
        <small><?php echo "$vg_title";?></small>
        Provas
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>

<aside class="ls-sidebar">

  <div class="ls-sidebar-inner">
      <a href="#"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

<?php
  if($_SESSION["nivel"] == 1){
      require_once("../menu-professor.php");
  }else{
      require_once("../menu-sicp.php");
  }
?>


  </div>
</aside>


    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-user">Cadastro de curso</h1>
				<form action="" class="ls-form row">
  <fieldset>
    <label class="ls-label col-md-3">
      <b class="ls-label-text">Nome do curso</b>
      <p class="ls-label-info">Informe o nome completo do curso.</p>
      <input type="text" name="nome" placeholder="Nome do curso" required >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Digite o Código do Curso.</b>
      <p class="ls-label-info">Informe o código completo do curso a ser cadastrado.</p>
      <input type="text" name="codigo" placeholder="Escreva o código do curso." required >
    </label>
  </fieldset>

  <div class="ls-actions-btn">
    <button class="ls-btn">Salvar</button>
    <button class="ls-btn-danger">Excluir</button>
  </div>
</form>

      </div>
    </main>

  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
  </body>
</html>
