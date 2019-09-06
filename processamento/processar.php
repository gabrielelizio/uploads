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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  	<link rel="stylesheet" href="../css/all.min.css"> 
 </head>
  <body>
    

<?php
  if($_SESSION["nivel"] == 1){
      require_once("../menu-professor.php");
  }else{
      require_once("../menu-sicp.php");
  }
?>

  
      <div class="container-fluid pt-5 text-right">
        <h1 class="ls-title-intro ls-ico-checkmark-circle">Detalhes do Processamento</h1>
      </div>

      <div class="container"> 
      <div class="row pt-5">
        <div class="col-2"></div>
        <div class="col-8">
        <div class="ls-alert-warning ls-dismissable">
          <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
          <strong>Atenção:</strong> Clique no botão Validar quando o processo de impressão for concluído.
        </div>
        </div>
      </div>

  <div style="background-color: #f2f3ed;"  class="container row border border-dark pt-5">
    <div class="col-3"></div>
    <div class="col-8">
    
  <form action="gravaprocesamento.php" method="post" class="ls-form row" data-ls-module="form">
    
      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Professor:</b>
        <input class=" form-control border border-success" type="text" value='<?php echo $nome;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">E-mail:</b>
        <input class=" form-control border border-success" type="text" value='<?php echo $email;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Telefone:</b>
        <input class=" form-control border border-success" type="text" value='<?php echo $telefone;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Quantidade de Impressões:</b>
        <input class=" form-control border border-success" type="text" value='<?php echo $qtdecopias;?>' required>
      </label>
      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Status:</b>
        <input class=" form-control border border-success" type="text" value='<?php echo $status;?>' required>
      </label>
      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Data de envio:</b>
        <input class=" form-control border border-success" type="text" value='<?php echo $data_envio;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Opção de impressão:</b>
          <input class=" form-control border border-success" type="text" value='<?php echo $opcaoimpressao;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Arquivo:</b>
        <input class=" form-control border border-success" type="text" value='<?php echo $patharq;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Cod. Rastreio:</b>
        <input class=" form-control border border-success" type="text" name="rastreio" value='<?php echo $rastreio;?>' required>
      </label>


<label class="ls-label col-md-8 col-sm-8">
      <b class="text-success">Situação</b>
      
        <select name="status" class=" form-control border border-success">
          <option value="Impresso">Impresso</option>
          <option value="Erros">Erros</option>
          <option value="Pendente">Pendente</option>
        </select>
  
    </label>
   

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Observação:</b>
        <textarea class=" form-control border border-success" name="observacao" cols="30" rows="5"></textarea>
      </label>

    <div class="domain-actions ls-display-none">
      <button type="submit" class="ls-btn-primary">Salvar</button>
      <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
    </div>
    
    <label class="ls-label col-md-6 col-lg-8">
    <div class=" text-center ls-actions-btn">
    <button class="ls-btn ls-btn-primary pr-5 pl-5" name="rastreio" value='<?php echo $rastreio;?>'>Validar</button>
    <button class="ls-btn-danger pr-5 pl-5" name="cancelar">Cancelar</button>
  </div>
    </label>
  </form>


</div> <!-- fim da coluna -->
</div> <!-- fim da row -->
</div>

<div style="height:250px;"></div>
  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
  </body>
</html>