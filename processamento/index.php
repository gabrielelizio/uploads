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
        <h1 class="ls-title-intro ls-ico-checkmark-circle">Processamento dos Arquivos / Impressão</h1>
        
<form  action="busca-registro.php" class="ls-form ls-form-inline ls-float-left">
    <label style="width: 70%;" class="ls-label" role="search">
      <input style="width: 100%" type="text" name="rastreio" aria-label="Faça sua busca..." placeholder="Faça sua busca..." required="" class="ls-field">
    </label>
    <div class="ls-actions-btn">
      <input style="margin-top: -13px;" type="submit" value="Buscar" class="ls-btn" title="Buscar">
    </div>
</form>
  
    <table class="ls-table ls-sm-space">
  <thead>
    <tr>
      <th>Professor</th>
      <th class="ls-txt-center">E-mail</th>
      <th class="ls-txt-center">Data envio</th>
      <th class="ls-txt-center">Curso</th>
      <th class="ls-txt-center">Quantidade</th>
      <th class="ls-txt-center">Opção</th>
      <th class="ls-txt-center">Arquivo</th>
      <th></th>
    </tr>
  </thead>

<?php

if($_SESSION["nivel"] == 1){
   $sql = "SELECT * FROM uploads where id_prof = '$id' AND status='Pendente' order by data_envio desc";
  }else{
   $sql = "SELECT * FROM uploads where status='Pendente' order by data_envio desc";
  }





$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
while($linha=mysql_fetch_array($resultado))
{
$nome = $linha["nome"];
$email = $linha["email"];
$telefone = $linha["telefone"];
$proposito = $linha["proposito"];
$cursos = $linha["cursos"];
$opcaoimpressao = $linha["opcaoimpressao"];
$qtdecopias  = $linha["qtdecopias"];
$patharq  = $linha["patharq"];
$rastreio  = $linha["rastreio"];
$data_envio  = $linha["data_envio"];
$status  = $linha["status"];


$diferenca_hora = diferenca_data($data_envio);
if($diferenca_hora <= 12){ $cor="class='ls-tag-success'";}
if($diferenca_hora > 12 and $diferenca_hora <=24){ $cor="class='ls-tag-warning'"; }  
if($diferenca_hora > 24){ $cor="class='ls-tag-danger'";  }  









if($_SESSION["nivel"] == 1){
   
echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$nome</a>
           
        </td>
        <td class='ls-txt-center'>$email</td>
        <td class='ls-txt-center'><a href='#' $cor> $data_envio </a></td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'>$opcaoimpressao</td>
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
        <td class='ls-txt-center'><a href='#' $cor> $data_envio </a></td></td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'>$opcaoimpressao</td>
        <td class='ls-txt-center'><a href='../upload/$patharq' target='_new'>Abrir</a></td>
        <td class='ls-txt-right ls-regroup'><a href='processar.php?nome=$nome&email=$email&telefone=$telefone&proposito=$proposito&cursos=$cursos&opcaoimpressao=$opcaoimpressao&qtdecopias=$qtdecopias&patharq=$patharq&rastreio=$rastreio&data_envio=$data_envio&status=$status' class='ls-btn ls-btn-sm'>Processar</a>
        </td>
      </tr>
  </tbody>";
}

 }


?>
</table>


      </div>
    </main>

  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
  </body>
</html>