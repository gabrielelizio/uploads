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

<div class="pb-4"></div>
	<div class=" container-fluid pt-5">
	<h1 class="ls-title-intro ls-ico-checkmark-circle pl-5 text-center "> Processamento dos Arquivos / Impressão </h1>
	</div>
  <div class="pt-5"></div>
  <div class="row container pt-5">
    <div class="col-sm-2"></div>
    <div class="col-sm-7">
    <form  action="busca-registro.php" class="form-row">
    <label style="width: 70%;" class="" role="search">
      <input style="width: 100%" type="text" name="rastreio" aria-label="Faça sua busca pelo Cod. de 
      rastreio" placeholder="N° do Código de rastreio"  autocomplete="off" required="" class="form-control">
    </label>
    <div class="btn">
      <input style="margin-top: -13px;" type="submit" value="Buscar" class="btn btn-outline-success btn-sm" title="Buscar">
      </div>
</form>
    </div>
    <div class="col-sm-3"> 
    <a class="voltar btn btn-danger btn-group-lg ls-float-left" href="index.php">Voltar a lista de registros</a> <br>
    </div>
    
    
  </div>
    
  <hr class="pt-4">

  <div class="container-fluid">
  <div class="row pt-3 pl-5 pr-5">
    <table class="table table-striped table-hover">
  <thead class="bg-success">
    <tr>
      <th class="text-center text-light">Professor</th>
      <th class="text-center text-light">E-mail</th>
      <th class="text-center text-light">Data Envio</th>
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

$rastreio = htmlspecialchars($_REQUEST['rastreio']);

$sql = "SELECT * FROM pendente WHERE nome like '%$rastreio%' or proposito like '%$rastreio%' or disciplina like '%$rastreio%' 
or email like '%$rastreio%' or telefone like '%$rastreio%' or cursos like '%$rastreio%' or qtdecopias like '%$rastreio%'
or dia_semana like '%$rastreio%' or turno like '%$rastreio%' or data_envio like '%$rastreio%'";
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
	$data_envio  = $linha["data_envio"];
  $status  = $linha["status"];
  $dia_semana = $linha["dia_semana"];
  $turno = $linha["turno"];
  
date_default_timezone_set('UTC');
$data1 = date('d/m/Y - H:i:s',strtotime($linha['data_envio']));


	if($_SESSION["nivel"] == 1){
   
echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$nome</a>
           
        </td>
        <td class='ls-txt-center'>$email</td>
        <td class='ls-txt-center'>$data1</td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$disciplina</td>
        <td class='ls-txt-center'>$turno</td>
        <td class='ls-txt-center'>$dia_semana</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='ls-txt-right ls-regroup'><a href='#'></a>
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
        <td class='ls-txt-center'>$data1</td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$disciplina</td>
        <td class='ls-txt-center'>$turno</td>
        <td class='ls-txt-center'>$dia_semana</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='ls-txt-right ls-regroup'><a href='processar.php?nome=$nome&email=$email&telefone=$telefone&proposito=$proposito&cursos=$cursos&disciplina=$disciplina&qtdecopias=$qtdecopias&patharq=$patharq&rastreio=$rastreio&data_envio=$data_envio&status=$status&dia_semana=$dia_semana&turno=$turno' class='ls-btn ls-btn-sm'>Processar</a>
        </td>
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