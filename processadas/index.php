<?php

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");
include_once("../lib/funcoes.php");
include_once("../lib/conexao_banco.php");
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


	<div class=" container-fluid pt-5">
	<h1 class="ls-title-intro ls-ico-upload pl-5 text-center"> Arquivos Realizados </h1>
  </div>
  

	<div class="container pt-5">

  <div class="row pt-5">
    <div class="col-8">
    <form  action="busca-registro_processada.php" class="form-row">
      <label style="width: 70%;" class="ls-label" role="search">
        <input style="width: 100%" type="text" name="rastreio" aria-label="Faça sua busca..."
          placeholder="Faça sua busca..." required="" autocomplete="off" class="form-control">
      </label>
      <div class="btn">
        <input style="margin-top: -13px;" type="submit" value="Buscar" class="btn btn-outline-success" title="Buscar">
      </div>
</form>
    </div>
    <div class="col-2"></div>
</div>



<div class="row pt-2">
<table class="table table-striped table-hover">
  <thead class="bg-success">
    <tr>
      <th class="text-center text-light">Professor</th>
      <th class="text-center text-light">Curso</th>
      <th class="text-center text-light">Quantidade</th>
      <th class="text-center text-light">Submissão</th>
      <th class="text-center text-light">Data Impressão</th>
      <th class="text-center text-light">Arquivo</th>
      <th></th>
    </tr>
  </thead>
  <style>
    .finalizado{
display: inline-block;
    border-radius: 5px;
    padding: 10px 15px!important;
    margin-top: 2px;
    color: #FFF;
    background: #FFA500;
    border: 1px solid #60AB60;
    }
  </style>
<?php

 if($_SESSION["nivel"] == 1){
   $sql = "SELECT * FROM uploads where id_prof = '$id' AND status='Impresso' order by id desc";
  }else{
  $sql = "SELECT * FROM uploads where  status='Impresso' order by id desc";
  }


$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
while($linha=mysql_fetch_array($resultado))
{
$nome = $linha["nome"];
$email = $linha["email"];
$proposito = $linha["proposito"];
$cursos = $linha["cursos"];
$opcaoimpressao = $linha["opcaoimpressao"];
$qtdecopias  = $linha["qtdecopias"];
$patharq  = $linha["patharq"];
$rastreio  = $linha["rastreio"];
$data_envio  = $linha["data_envio"];
$data_processamento  = $linha["data_processamento"];

echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$nome</a>

        </td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'>$data_envio</td>
        <td class='ls-txt-center'>$data_processamento</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='ls-txt-right ls-regroup finalizado'>Impresso</td>
      </tr>
  </tbody>";

}

?>
</table>

    </div>
  </div>

  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
  </body>
</html>
