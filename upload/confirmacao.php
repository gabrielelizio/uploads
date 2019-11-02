<?php

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");


$nome = htmlspecialchars($_REQUEST['nome']);
$email = htmlspecialchars($_REQUEST['email']);
$disciplina = htmlspecialchars($_REQUEST['disciplina']);
$qtdecopias  = htmlspecialchars($_REQUEST['qtdecopias']);
$proposito  = htmlspecialchars($_REQUEST['proposito']);
$curso=htmlspecialchars($_REQUEST['curso']);
$path_arq=htmlspecialchars($_REQUEST['path_arq']);
$rastreio=htmlspecialchars($_REQUEST['rastreio']);
$datahora=htmlspecialchars($_REQUEST['datahora']);
$dia_semana = htmlspecialchars($_REQUEST['dia_semana']);
$turno = htmlspecialchars($_REQUEST['turno']);


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


<div class=" container-fluid pt-5 text-center">
	<h1 class="ls-title-intro ls-ico-upload text-right">  Arquivo Enviado </h1>
</div>

<div class="container pt-5">

  <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
      <div class="ls-alert-success ls-dismissable">
      <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
        <strong>Sucesso!</strong> Arquivo enviado para impressão! Aguarde e-mail de confirmação</div>
      </div>
  </div>


  <div class="row pt-5 border border-dark">
    <div class="col-2"></div>
    <div class="col-6">
      <div style="font-size:18pt;" class="ls-box ls-no-bg ls-box-error">
        <h3 class="ls-title-intro ls-ico-checkmark">Arquivo enviado</h3>
        <p>O arquivo foi enviado com sucesso .</p>
        <p><b>Detalhes:</b></p>
        <p>---------------------------------------------------------------------------------</p>
        <p><b>Solicitante:</b> <?php echo "$nome";?> </p> 
        <p><b>E-mail:</b> <?php echo "$email";?> </p>
        <p><b>Data de envio:</b> <?php echo @date('d/m/Y H:i', @strtotime($datahora)) ?> </p>
        <p><b>Curso(s):</b> <?php echo "$curso";?>  </p>
        <p><b>Disciplina:</b> <?php echo "$disciplina";?>  </p>
        <p><b>Turno:</b> <?php echo "$turno";?>  </p>
        <p><b>Propósito:</b> <?php echo "$proposito";?></p>
        <p><b>Qtde. cópias:</b><?php echo "$qtdecopias";?></p>
        <p><b>Dia da prova:</b><?php echo "$dia_semana";?></p>
        <p><b>Arquivo:</b> <?php echo "$path_arq";?></p>
        <p><b>Cod. Rastreio:</b> <?php echo "$rastreio";?></p>
        <p><b style="color: #F00">Obs:</b> Guarde seu código de rastreio para eventuais consultas.</p>
        <p>---------------------------------------------------------------------------------</p>

        <p class="pt-4"><strong>Certifique-se de:</strong></p>
        <ol>
          <li>Verificar e-mail de confirmação.</li>
          <li>Retornar à <a href="index.php" class="ls-color-theme">página de upload.</a> para enviar novo arquivo</li>
        </ol>
        
      </div>
    </div>
  </div>  <!-- fecha div box -->
  <div class="text-center pt-5"><a class="btn btn-dark"  href="logout.php"> Sair do sistema </a>.</div>
    <div style="height:200px;"></div>
    </div> <!-- fecha container -->
  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
  </body>
</html>