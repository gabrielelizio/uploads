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
        <h1 class="ls-title-intro ls-ico-checkmark-circle">Solicitações Processadas</h1>

   
<form  action="busca-registro_processada.php" class="ls-form ls-form-inline ls-float-left">
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
      <th class="ls-txt-center">Curso</th>
      <th class="ls-txt-center">Quantidade</th>
      <th class="ls-txt-center">Submissão</th>
      <th class="ls-txt-center">Data Impressão</th>
      <th class="ls-txt-center">Arquivo</th>
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
    background: #6FC66F;
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
    </main>

  <?php include_once("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
  </body>
</html>