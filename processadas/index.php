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
    <div class="col-7">

    <form  action="busca-registro_processada.php" class="form-row">
      <label style="width: 70%;" class="ls-label" role="search">
        <input style="width: 100%" type="text" name="rastreio" aria-label="Faça sua busca..."
          placeholder="Faça sua busca..." required="" autocomplete="off" class="form-control">
			</label>

      <div class="btn">
        <input style="margin-top: -13px;" type="submit" value="Buscar" class="btn btn-outline-success" title="Buscar">
			</div>
			<?php if(isset($_GET['sucesso'])){ ?>    <!-- sucesso ao excluir os dados de uploads-->
                  <br>
                    <div class="ls-alert-success ls-dismissable ">
                  <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
                 Registro excluído com sucesso. </div>
						<?php } ?>

						<?php if(isset($_GET['noexcluir'])){ ?>    <!-- Não existe informaçções para excluir.-->
                  <br>
                    <div class="ls-alert-danger ls-dismissable ">
                  <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
                 Você não possui registros com status Impresso para excluir.  </div>
						<?php } ?>

</form>
    </div>
    <div class="col-2"></div>
    <div class="col-3">
        <a class="btn btn-secondary float-right text-light" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="ls-ico-remove ls-text-xl"></i> Limpar Registros</a>
    </div>
</div>


<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalCenterTitle"> Deseja mesmo excluir estes Registros ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="height: 190px;" class="modal-body">
      <br>
        Aviso, está ação não pode ser revertida. Ao clicar em aceitar todos os registro listados abaixo na tabela como
        processados serão apagados permanentemente da sua base de dados.
      </div>
      <div class="modal-footer">
			<a href="" class="btn btn-dark text-center pr-5 pl-5"
			data-ls-module="modal"
			data-action="processadas_opcoes.php?excluir"
			data-content="<h6> Lembrando que não será possível reverter os dados perdidos. <strong>Deseja</strong> ?
						</h6> <br><p> Aviso ,
						está ação não pode ser revertida , ao clicar em aceitar os
						respectivos dados serão apagados permanentemente
						da sua base de dados. </p>"
						data-class="btn btn-success pr-5 pl-5 btn"
						data-save="Sim"
						data-close="Fechar"

						>
					<i class="ls-ico-remove ls-text-xl"></i> Estou ciente</a></i></a>





		</div>
    </div>
  </div>
</div>

<hr>
<div class="row pt-2">
<table class="table table-striped table-hover table-responsive-lg">
  <thead class="bg-success">
    <tr>
      <th class="text-center text-light">Professor</th>
      <th class="text-center text-light">Curso</th>
      <th class="text-center text-light">Quantidade</th>
      <th class="text-center text-light">Submissão</th>
      <th class="text-center text-light">Data Impressão</th>
      <th class="text-center text-light">Arquivo</th>
      <th class="text-center text-light"> Status </th>
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


// converte as datas para o formato brasileiro.
date_default_timezone_set('UTC');
$data1 = date('d/m/Y - H:i:s',strtotime($linha['data_envio']));
$data2 = date('d/m/Y - H:i:s',strtotime($linha['data_processamento']));

echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$nome</a>

        </td>
        <td class='ls-txt-center'>$cursos</td>
        <td class='ls-txt-center'>$qtdecopias</td>
        <td class='ls-txt-center'>$data1</td>
        <td class='ls-txt-center'>$data2</td>
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
