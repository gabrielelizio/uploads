<?php

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");
include_once("../lib/funcoes.php");
include_once("../lib/conexao_banco.php");

error_reporting(0);
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

<div class=" container-fluid pt-5">
	<h1 class="ls-title-intro ls-ico-upload pl-5 text-center ls-ico-checkmark-circle "> Processamento dos Arquivos / Impressão</h1>
</div>

<div class="container pt-5">
  <div class="row pt-5">
    <div class="col-7">
    <form  action="busca-registro_processada.php" class="form-row">
    <label style="width: 70%;" class="ls-label" role="search">
      <input style="width: 100%" type="text" name="rastreio" aria-label="Faça sua busca pelo Cod. de rastreio"
      placeholder="N° do Código de rastreio" autocomplete="off" required="" class="form-control">
    </label>
    <div class="btn">
      <input style="margin-top:-13px" type="submit" value="Buscar" class="btn btn-outline-success " title="Buscar">
    </div>
</form>
    </div>
    <div class="col-4">
    <a style="margin-top: -5px" class="voltar btn btn-danger ls-float-left-xs" href="index.php"> Voltar a lista de registros</a>
    </div>
  </div>
  </div>

  <div class="container-fluid">

  <div class="row pt-5 pr-5 pl-5">

  <table class="table table-striped table-hover">
  <thead class="bg-success">
    <tr>
		<th class="text-center text-light">Professor</th>
      <th class="text-center text-light">Curso</th>
      <th class="text-center text-light">Disciplina</th>
      <th class="text-center text-light">Turno</th>
      <th class="text-center text-light">Quantidade</th>
      <th class="text-center text-light">Submissão</th>
      <th class="text-center text-light">Data Impressão</th>
      <th class="text-center text-light">Arquivo</th>
      <th class="text-center text-light">Status</th>
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

$rastreio = htmlspecialchars($_REQUEST['rastreio']);

$sql = "SELECT * FROM processada WHERE nome like '%$rastreio%' or proposito like '%$rastreio%' or email like '%$rastreio%' or telefone like '%$rastreio%' or cursos like '%$rastreio%' or qtdecopias like '%$rastreio%'
or data_envio like '%$rastreio%' or disciplina like '%$rastreio%' or turno like '%$rastreio%' AND status = 'Impresso' ";

$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
if(mysql_num_rows($resultado) > 0){
	while($linha=mysql_fetch_array($resultado))
	{
	$nome = $linha["nome"];
	$email = $linha["email"];
	$telefone = $linha["telefone"];
	$proposito = $linha["proposito"];
	$cursos = $linha["cursos"];
	$disciplina = $linha["disciplina"];
	$qtdecopias  = $linha["qtdecopias"];
	$patharq  = $linha["patharq"];
	$rastreio  = $linha["rastreio"];
	$data_envio  = date('d/m/Y H:i', strtotime($linha["data_envio"]));
  $status  = $linha["status"];
  $turno  = $linha["turno"];
  $dia_semana  = $linha["dia_semana"];

	// converte as datas para o formato brasileiro.
date_default_timezone_set('UTC');
$data1 = date('d/m/Y - H:i:s',strtotime($linha['data_envio']));
$data2 = date('d/m/Y - H:i:s',strtotime($linha['data_processamento']));

	if($_SESSION["nivel"] == 1){

echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$nome</a>

        </td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$disciplina</td>
        <td class='ls-txt-center'>$turno</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'>$data1</td>
        <td class='ls-txt-center'>$data2</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='text-right ls-regroup finalizado'>Impresso</td>
      </tr>
  </tbody>";

  }else{


echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$nome</a>

        </td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$disciplina</td>
        <td class='ls-txt-center'>$turno</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'>$data1</td>
        <td class='ls-txt-center'>$data2</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='text-left ls-regroup finalizado'>Impresso</td>
      </tr>
  </tbody>";
}
	}
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
