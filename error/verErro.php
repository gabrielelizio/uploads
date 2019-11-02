<?php

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");


$nome = htmlspecialchars($_REQUEST['nome']);
$email = htmlspecialchars($_REQUEST['email']);
$telefone = htmlspecialchars($_REQUEST['telefone']);
$disciplina = htmlspecialchars($_REQUEST['disciplina']);
$qtdecopias  = htmlspecialchars($_REQUEST['qtdecopias']);
$proposito  = htmlspecialchars($_REQUEST['proposito']);
$cursos = htmlspecialchars($_REQUEST['cursos']);
$patharq  = htmlspecialchars($_REQUEST['patharq']);
$rastreio  = htmlspecialchars($_REQUEST['rastreio']);
$data_envio  = htmlspecialchars($_REQUEST['data_envio']);
$status  = htmlspecialchars($_REQUEST['status']);
$observacao  = htmlspecialchars($_REQUEST['observacao']);
$data_processamento  = htmlspecialchars($_REQUEST['data_processamento']);
$turno  = htmlspecialchars($_REQUEST['turno']);

//$observacao  = "1";
//$data_processamento  = "2";


//echo "$observacao";
//echo "$data_processamento"; exit;


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
    
<?php  include_once("../notification_bars.php"); ?>

<?php
  if($_SESSION["nivel"] == 1){
      require_once("../menu-professor.php");
  }else{
      require_once("../menu-sicp.php");
  }
?>

	<div class=" container-fluid pt-5 text-center">
	<h1 class="ls-title-intro ls-ico-close  text-center "> Detalhes do Erro na Impressão </h1>
</div>
  
<div class="container">

<div class="row  pt-5">
  <div class="col-2"></div>
  <div class="col-8">
    <div class="ls-alert-danger ls-dismissable">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
      <strong>Motivo do erro:</strong> <?php echo $observacao;?> </div>
  </div>
  <div class="col-2"></div>
</div>
 
<div class="pt-5"></div>
<div style="background-color: #f2f3ed;" class="row pt-5 border border-dark">

<div class="col-2"></div>
<div class="col-8 align-items-center">

  <form action="gravaprocesamento.php" method="post" class="ls-form row" data-ls-module="form">
      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Professor:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $nome;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">E-mail:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $email;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Telefone:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $telefone;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Curso(s):</b>
        <input class="form-control border border-success" type="text" value='<?php echo $cursos;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Disciplina:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $disciplina;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Turno:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $turno;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Quantidade de Impressões:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $qtdecopias;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Status:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $status;?>' required>
      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Data de envio:</b>
        <input class="form-control border border-success" type="text" value='<?php echo $data_envio;?>' required>
      </label>

     

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-danger">Arquivo:</b>
        <a href="../upload/<?php echo $patharq;?>" class="ls-ico-folder"><?php echo $patharq;?></a>

      </label>

      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Cod. Rastreio:</b>
        <input class="form-control border border-success" type="text" name="rastreio" value='<?php echo $rastreio;?>' required>
      </label>


      <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Situação:</b>
        <input class="form-control border border-success" type="text" name="rastreio" value='<?php echo $status;?>' required>
      </label>

  <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Observação:</b>
        <input class="form-control border border-success" type="text" name="rastreio" value='<?php echo $observacao;?>' autocomplete="off" required>
  </label>
    

  <label class="ls-label col-md-6 col-lg-8">
        <b class="text-success">Data do processamento :</b>
        <input class="form-control border border-success" type="text" name="rastreio" value='<?php echo $data_processamento;?>' required>
  </label>
  
<div class="pt-5" style="height:150px;"></div>



  </form>
</div>

<div class="col-2"></div>
</div>  <!-- fecha div row -->

<div class="row pt-5" style="height:250px;">
  <div class="col-5"></div>
  <div class="col-5">
  <a href="index.php" class="btn btn-danger btn-lg ls-ico-shaft-left pr-5 pl-5">Voltar</a>
  </div>
  <div class="col-2"></div>
</div>
</div>

</div> <!-- fecha div conatiner -->

  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
  </body>
</html>