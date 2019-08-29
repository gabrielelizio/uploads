<?php

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");


$nome = htmlspecialchars($_REQUEST['nome']);
$email = htmlspecialchars($_REQUEST['email']);
$opcaoimpressao = htmlspecialchars($_REQUEST['opcaoimpressao']);
$qtdecopias  = htmlspecialchars($_REQUEST['qtdecopias']);
$proposito  = htmlspecialchars($_REQUEST['proposito']);
$curso=htmlspecialchars($_REQUEST['curso']);
$path_arq=htmlspecialchars($_REQUEST['path_arq']);
$rastreio=htmlspecialchars($_REQUEST['rastreio']);
$datahora=htmlspecialchars($_REQUEST['datahora']);



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
        <h1 class="ls-title-intro ls-ico-upload">Arquivo enviado</h1>
        <div class="ls-alert-success"><strong>Sucesso!</strong> Arquivo enviado para impressão! Aguarde e-mail de confirmação</div>
        <div class="ls-box ls-no-bg ls-box-error">
        <h3 class="ls-title-intro ls-ico-checkmark">Arquivo enviado</h3>
        <p>O arquivo foi enviado com sucesso .</p>
        <p><b>Detalhes:</b></p>
        <p>---------------------------------------------------------------------------------</p>
        <p><b>Solicitante:</b> <?php echo "$nome";?> </p>
        <p><b>E-mail:</b> <?php echo "$email";?> </p>
        <p><b>Data:</b> <?php echo @date('d/m/Y H:i', @strtotime($datahora)) ?> </p>
        <p><b>Opção de impressão:</b> <?php echo "$opcaoimpressao";?>  </p>
        <p><b>Propósito:</b> <?php echo "$proposito";?></p>
        <p><b>Qtde. cópias:</b><?php echo "$qtdecopias";?></p>
        <p><b>Arquivo:</b> <?php echo "$path_arq";?></p>
        <p><b>Cod. Rastreio:</b> <?php echo "$rastreio";?></p>
        <p><b style="color: #F00">Obs:</b> Guarde seu código de rastreio para eventuais consultas.</p>
        <p>---------------------------------------------------------------------------------</p>

        <p><strong>Certifique-se de:</strong></p>
        <ol>
          <li>Verificar e-mail de confirmação.</li>
          <li>Retornar à <a href="index.php" class="ls-color-theme">página de upload.</a> para enviar novo arquivo</li>
        </ol>
        <p><a href="logout.php">Sair do sistema</a>.</p>
      </div>

    </div>


      </div>
    </main>

  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
  </body>
</html>