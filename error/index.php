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
    <div class="ls-topbar ">

<?php  include_once("../notification_bars.php"); ?>


<?php
  if($_SESSION["nivel"] == 1){
      require_once("../menu-professor.php");
  }else{
      require_once("../menu-sicp.php");
  }
?>
<div class="pt-2"></div>
	<div class=" container-fluid pt-5">
	<h1 class="ls-title-intro ls-ico-close pl-5 text-center"> Erros / Pendências no Envio </h1>
	</div>

<div class="container pt-5">
      
<div class="row pt-5">
    <div class="col-sm-6">
    <form  action="busca-registro.php" class="form-row">
    
      <input style="width: 100%" type="text" name="rastreio" aria-label="Faça sua busca..." 
      placeholder="Faça sua busca..." autocomplete="off" required="" class="form-control">
      </div>
    <div class="col-sm-3">
      <input type="submit" value="Buscar" class="btn btn-sm btn-outline-success" title="Buscar">
    </div>
</form>
    
    
    <div class="col-sm-3">
        <a class="btn btn-secondary float-right text-light" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="ls-ico-remove ls-text-xl"></i> Limpar Registros </a>
    </div>
</div>
</div>


<div class="container-fluid">
<div class="row pt-5 pr-5 pl-5">

    <table class="table table-striped table-hover">
  <thead class="bg-success">
    <tr>
      <th class="text-center text-light">Professor</th>
      <th class="text-center text-light">E-mail</th>
      <th class="text-center text-light">Data envio</th>
      <th class="text-center text-light">Curso</th>
      <th class="text-center text-light">Disciplina</th>
      <th class="text-center text-light">Turno</th>
      <th class="text-center text-light">Dia da semana</th>
      <th class="text-center text-light">Quantidade</th>
      <th class="text-center text-light">Arquivo</th>
      <th></th>
    </tr>
  </thead>

<?php

if($_SESSION["nivel"] == 1){
   $sql = "SELECT * FROM uploads where id_prof = '$id' AND status='Erros' order by data_envio desc";
  }else{
   $sql = "SELECT * FROM uploads where status='Erros' order by data_envio desc";
  }


$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
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
$data_envio  = $linha["data_envio"];
$status  = $linha["status"];
$observacao  = $linha["observacao"];
$data_processamento = $linha["data_processamento"];
$dia_semana= $linha["dia_semana"];
$turno = $linha["turno"];


$diferenca_hora = diferenca_data($data_envio);
if($diferenca_hora <= 12){ $cor="class='ls-tag-success'";}
if($diferenca_hora > 12 and $diferenca_hora <=24){ $cor="class='ls-tag-warning'"; }
if($diferenca_hora > 24){ $cor="class='ls-tag-danger'";  }

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
        <td class='ls-txt-center'>$email</td>
        <td class='ls-txt-center'><a href='#' $cor> $data1 </a></td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$disciplina</td>
        <td class='ls-txt-center'>$turno</td>
        <td class='ls-txt-center'>$dia_semana</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='ls-txt-right ls-regroup'><a href='verErro.php?nome=$nome&email=$email&telefone=$telefone&proposito=$proposito&cursos=$cursos&disciplina=$disciplina&qtdecopias=$qtdecopias&patharq=$patharq&rastreio=$rastreio&data_envio=$data1&status=$status&observacao=$observacao&data_processamento=$data2&dia-semana=$dia_semana&turno=$turno' class='ls-btn ls-btn-sm'>Ver Erro</a>
        </td>
      </tr>
        </td>
      </tr>
  </tbody>";

  }else{


echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$nome</a>

        </td>
        <td class='ls-txt-center'>$email</td>
        <td class='ls-txt-center'><a href='#' $cor> $data1</a></td></td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$disciplina</td>
        <td class='ls-txt-center'>$turno</td>
        <td class='ls-txt-center'>$dia_semana</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='ls-txt-right ls-regroup'><a href='verErro.php?nome=$nome&email=$email&telefone=$telefone&proposito=$proposito&cursos=$cursos&disciplina=$disciplina&qtdecopias=$qtdecopias&patharq=$patharq&rastreio=$rastreio&data_envio=$data1&status=$status&observacao=$observacao&data_processamento=$data2&dia-semana=$dia_semana&turno=$turno' class='ls-btn ls-btn-sm'>Ver Erro</a>
        </td>
      </tr>
  </tbody>";
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
