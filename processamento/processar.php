<?php

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");


$nome = htmlspecialchars($_REQUEST['nome']);
$email = htmlspecialchars($_REQUEST['email']);
$telefone = htmlspecialchars($_REQUEST['telefone']);
$opcaoimpressao = htmlspecialchars($_REQUEST['opcaoimpressao']);
$qtdecopias  = htmlspecialchars($_REQUEST['qtdecopias']);
$proposito  = htmlspecialchars($_REQUEST['proposito']);
$cursos = htmlspecialchars($_REQUEST['cursos']);
$patharq  = htmlspecialchars($_REQUEST['patharq']);
$rastreio  = htmlspecialchars($_REQUEST['rastreio']);
$data_envio  = htmlspecialchars($_REQUEST['data_envio']);
$status  = htmlspecialchars($_REQUEST['status']);


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
      <a href="home" class="ls-ico-earth">
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
        <h1 class="ls-title-intro ls-ico-checkmark-circle">Detalhes do Processamento</h1>
        <div class="ls-alert-warning"><strong>Atenção:</strong> Clique no botão Validar quando o processo de impressão for concluído.</div>

        <div class="ls-box">


  <form action="gravaprocesamento.php" method="post" class="ls-form row" data-ls-module="form">
    <fieldset id="domain-form" class="ls-form-disable ls-form-text">
      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Professor:</b>
        <input type="text" value='<?php echo $nome;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">E-mail:</b>
        <input type="text" value='<?php echo $email;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Telefone:</b>
        <input type="text" value='<?php echo $telefone;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Quantidade de Impressões:</b>
        <input type="text" value='<?php echo $qtdecopias;?>' required>
      </label>
      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Status:</b>
        <input type="text" value='<?php echo $status;?>' required>
      </label>
      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Data de envio:</b>
        <input type="text" value='<?php echo $data_envio;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Opção de impressão:</b>
          <input type="text" value='<?php echo $opcaoimpressao;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Arquivo:</b>
        <input type="text" value='<?php echo $patharq;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Cod. Rastreio:</b>
        <input type="text" name="rastreio" value='<?php echo $rastreio;?>' required>
      </label>

    
    </fieldset>



<fieldset>
<label class="ls-label col-md-12 col-sm-12">
      <b class="ls-label-text">Situação</b>
      <div class="ls-custom-select">
        <select name="status" class="ls-select">
          <option value="Impresso">Impresso</option>
          <option value="Erros">Erros</option>
          <option value="Pendente">Pendente</option>
        </select>
      </div>
    </label>
    </fieldset>




      <label class="ls-label col-md-6 col-lg-8">
        <b class="ls-label-text">Observação:</b>
        <textarea  name="observacao" cols="30" rows="5"></textarea>
      </label>




    <div class="domain-actions ls-display-none">
      <button type="submit" class="ls-btn-primary">Salvar</button>
      <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
    </div>

    <div class="ls-actions-btn">
    <button class="ls-btn" name="rastreio" value='<?php echo $rastreio;?>'>Validar</button>
    <button class="ls-btn-danger" name="cancelar">Cancelar</button>
  </div>



  </form>
</div>


      </div>
    </main>

  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
  </body>
</html>