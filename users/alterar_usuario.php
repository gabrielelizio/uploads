<?php

	include_once("../lib/verifica-login.php");
	include_once("../variables_global.php");

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
			<style>

			</style>
		</head>
		<body>

		<?php
		if($_SESSION["nivel"] == 1){
				require_once("../menu-professor.php");
		}else{
				require_once("../menu-sicp.php");
		}
	?>


	<div class=" container-fluid pt-5 ">
	<h1 class="ls-title-intro ls-ico-upload pl-5 text-center "> Editar perfil </h1>
  </div>

 <div class="row container">
   <div class="col-sm-4"></div>
   <div class="col-sm-4 pt-5">
   <a href="#" class="btn btn-info" data-toggle="modal" data-target="#alterar"> <span class="text-left"> Alterar Senha </span>   </a>
   </div>
 <div class="col-sm-4"></div>
 </div>

	<div class="container pt-5">

    <?php

$sql = "SELECT * FROM users where id = $idUpload";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
while($linha=mysql_fetch_array($resultado))
{
$idProfessor = $linha["id"];
$firstname = $linha["firstname"];
$lastname = $linha["lastname"];
$cpf = $linha["cpf"];
$telefone = $linha["phone"];
$email = $linha["email"];

}
    ?>


    <!-- formulario de cadastro d eusuarios -->
    <div class=" row ">
          <div class="col-sm-3"></div>
            <div class=" hiden col-sm-6 pt-5 border border-secondary" id="box1">
            <table>
            <form action="update_scip.php" method="post">
                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Primeiro nome: </label>
                    <input type="text" class="form-control border-primary" id="firstName" value="<?php echo $firstname; ?>"
                    placeholder="" autocomplete="off" required name="firstname">
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Sobrenome: </label>
                    <input type="text" class="form-control border-primary" id="lastName" value="<?php echo $lastname; ?>"
                    placeholder="" autocomplete="off" required name="lastname">
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-4">
                    <label class="text-success"> CPF: </label>
                    <input type="text" class="form-control border-primary" id="cpf" value="<?php echo $cpf; ?>"
                 autocomplete="off" name="cpf"
                    required="required" pattern="[0-9]+$">
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Telefone: </label>
                    <input type="text" class="form-control border-primary" id="phone" name="phone"
                    value="<?php echo $telefone; ?>" autocomplete="off" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Email: </label>
                    <input type="text" class="form-control border-primary" id="email" name="email" value="<?php echo $email; ?>"
                    placeholder="" autocomplete="off" required>
                  </div>
                </div>

                <div class="row pt-3">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-5 pt-5">
                  <input type="submit" value="Salvar" class="ls-btn ls-btn-primary pr-5 pl-5">
                  </div>
                  <div class="col-sm-4 pt-5">
                  <a class="ls-btn ls-btn-secondary pr-5 pl-5" href="javascript:history.back()">Cancelar </a>
                  </div>
                  <div class="pt-5 pb-5"></div>
              </form>
            </table>
              </div>
          <div class="col-sm-2"></div>
        </div> <!-- fim div clas row -->
        <div class="pt-5 pb-5"></div>


  <!-- Modal -->
  <div class="modal fade" id="alterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color: #f15c2f;" class="modal-title" id="exampleModalLabel">Alterar Senha </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="alterar_senha.php" class="ls-form" method="post">
      <div style="background: #efe7e7;" class="modal-body">
      <label class="ls-label">
            <b class="ls-label-text">Senha Antiga *</b>
            <input class="border border-success" type="password" name="senha_atual" required placeholder="Digite sua senha atual" />
          </label>
          <label class="ls-label">
            <b class="ls-label-text"> Nova Senha *</b>
            <input class="border border-success" type="password" name="senha_nova" required placeholder="Digite a nova senha" />
          </label>
          <label class="ls-label">
            <b class="ls-label-text"> Confirmação de senha *</b>
            <input class="border border-success" type="password" name="confirme_senha" required placeholder="Confirmar nova senha" />
          </label>

      </div>
      <div style="background: #efe7e7;" class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
        <input  style="background-color: #f15c2f;" type="submit" class="btn btn-primary" name="salvar" value="salvar">

      </div>
    </div>
  </div>
</div>

</body>
        <script type="text/javascript" src="../javascripts/jquery.js"></script>
			<script type="text/javascript" src="../javascripts/locastyle.js"></script>
			<script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
