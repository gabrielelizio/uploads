<?php

include_once ("../lib/verifica-login.php");
include_once ("../variables_global.php");


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
      .hiden { display: none; }

    </style>
  </head>
  <body>



<?php
  if($_SESSION["nivel"] == 1){
      require_once ("../menu-professor.php");
  }else{
      require_once ("../menu-sicp.php");
  }
?>

<div class=" container-fluid pt-5">
	<h1 class="ls-title-intro ls-ico-user pl-5 text-center"> Usuários </h1>
</div>


  <div class="row pt-5">
    <div class="col-sm-3"></div>


    <div class="ls-tabs-btn col-6 ">
    <ul class="ls-tabs-btn-nav ">
    <li class="col-md-3 col-xs-6">
      <a href="#" onclick="mostrar_abas(this);" id="mostra_aba1"class="ls-btn" data-ls-module="button" >
        <span class="ls-ico-user-add"> ADD Usuário</a></li>

    <li class="col-md-2 col-xs-6">
      <a href="#" onclick="mostrar_abas(this);" id="mostra_aba2"  class="ls-btn" data-ls-module="button">
      <span class="ls-ico-list"> Listar </span></a></li>

    <li class="col-md-2 col-xs-6">
      <a href="#" onclick="mostrar_abas(this);" id="mostra_aba3" class="ls-btn" data-ls-module="button">
      <span class="ls-ico-remove"></span></a></li>

      <li class="col-md-2 col-xs-6">
      <a href="alterar_usuario.php"  class="ls-tooltip-right ls-btn" aria-label="Editar usuário" >
      <span class="ls-ico-pencil"></span></a></li>
  </ul>

    </div>
    <!-- formulario de cadastro d eusuarios -->
  </div>



        <!-- Mensagem 1 -->
        <?php if(isset($_GET['sucesso'])){ ?>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">

<div class="alert alert-success alert-dismissible fade show" role="alert">
Usuário cadastrado com sucesso!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

</div>
<div class="col-sm-3"></div>
</div>

<?php  }  ?>
<!-- ------------------------------------------------------------ -->

<!-- Mensagem 2 -->
<?php if(isset($_GET['sucesso2'])){ ?>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-4 ">

<div class="alert alert-success alert-dismissible fade show" role="alert">
Usuário excluído com sucesso !!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

</div>
<div class="col-3"></div>
</div>

<?php  }  ?>

 <!-- formulario de cadastro d eusuarios -->
        <div class=" row pt-5 ">
          <div class="col-sm-3"></div>
            <div class=" hiden col-sm-6 pt-5 border border-secondary" id="box1">
            <table>
            <form action="save.php" method="post"> 
                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Primeiro nome: </label>
                    <input type="text" class="form-control border-primary" id="firstName"
                    placeholder="" autocomplete="off" required name="firstname">
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Sobrenome: </label>
                    <input type="text" class="form-control border-primary" id="lastName"
                    placeholder="" autocomplete="off" required name="lastname">
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> CPF: </label>
                    <input type="text" class="form-control border-primary" id="cpf"
                    placeholder="Digite o numero do seu cpf. ex: 111.111.111-11" autocomplete="off" name="cpf"
                    required="required" pattern="[0-9]+$">
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Telefone: </label>
                    <input type="text" class="form-control border-primary" id="phone" name="phone"
                    placeholder="Apenas numeros com DDD.: ex: 3133333333" autocomplete="off" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Email: </label>
                    <input type="text" class="form-control border-primary" id="email" name="email"
                    placeholder="email" autocomplete="off" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="form-group col-sm-6">
                    <label class="text-success"> Senha: </label>
                    <div class="ls-prefix-group ls-field-lg">
                      <input id="password_field" name="password" class="ls-login-bg-password form-control border-primary"
                      name="password" type="password" placeholder=" Senha" required>
                      <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye"
                      data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                    </div> <br>

                  <div class="row">

                  <div class="form-group col-sm-6">
                    <label class="text-success"> Função: </label>
                    <div>
                    <select id="inputState" name="funcao" class="form-control border-primary ">
                      <option selected>Professor</option>
                      <option>SICP</option>
                    </select>
                    </div>
                  </div>
                </div>

                <div class="row pt-3">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-5 pt-5">
                  <input type="submit" value="Salvar" class="ls-btn ls-btn-primary pr-5 pl-5">
                  </div>
                  <div class="col-sm-4 pt-5">
                  <input type="reset" value="Cancelar" class="ls-btn ls-btn-secondary pr-5 pl-5">
                  </div>
                  <div class="pt-5 pb-5"></div>
              </form>
            </table>
              </div>
          <div class="col-sm-2"></div>
        </div> <!-- fim div clas row -->



  <!-- lista de users -->
  <div class="row">
    <div class="col-sm-1"></div>
  <div class="hiden col-sm-10" id="box2" >

   <Ul> <li> <h2 class="text-success pb-5"> Usuários Cadastrados</h2> </li> </Ul>
   <div style="overflow: auto; height: 640px">
   <table class="table table-borderless table-hover ">
  <thead class="bg-secondary">
    <tr>
      <th class="text-center text-light">Nome</th>
      <th class="text-center text-light">CPF</th>
      <th class="text-center text-light">email</th>
      <th class="text-center text-light">Telefone</th>
      <th class="text-center text-light">Função</th>
    </tr>
  </thead>
<?php

$sql = "SELECT * FROM users ";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
while($linha=mysql_fetch_array($resultado))
{
$idProfessor = $linha["id"];
$firstname = $linha["firstname"];
$lastname = $linha["lastname"];
$cpf = $linha["cpf"];
$telefone = $linha["phone"];
$email = $linha["email"];
$funcao = $linha["tipoCad"];


echo "
<tbody>
      <tr>
        <td>
          <a href='#'>$firstname $lastname</a>

        </td>
        <td class='ls-txt-center'>$cpf</td>
        <td class='ls-txt-center'>$email</td>
        <td class='ls-txt-center'>$telefone</td>
        <td class='ls-txt-center'>$funcao</td>
      </tr>
  </tbody>";

}

?>
</table>
<hr>
<ul>
  <li> Função = 1 : <span class="text-success"> Professor </span></li>
  <li> Função = 2 : <span class="text-success"> SCIP </span></li>
</ul>
</div>
</div>
<div class="col-sm-1"></div>
</div> <!-- fim da row -->


            <!-- Excluir users -->
<div class="row">
  <div class="col-sm-3"></div>
  <div  class="hiden col-sm-6" id="box3" >
  <div style="overflow: auto; height: 500px">
      <table  class="table table-borderless table-hover ">
      <thead class="bg-secondary">
        <tr>
          <th style="width: 400px;" class=" text-light pl-5">Nome</th>
          <th class="text-center text-light float-right"> </th>
        </tr>
      </thead>
      <?php $sql = "SELECT id, firstname, lastname  FROM users";
      $resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
      while($linha=mysql_fetch_array($resultado))
      {
      $id = $linha["id"];
      $nome= $linha["firstname"];
      $sobrenome = $linha["lastname"];
      ?>

      <tbody>
        <tr>

          <td class="text-primary"> <?php echo "$nome $sobrenome" ?> </td>
          <td>

          <a href="" data-ls-module="modal"  aria-label="Excluir"
            data-action="delete-user.php?excluir=<?php echo $id ?> "
            data-content="<h6> Deseja mesmo excluir este registro de usuário ?
						</h6> <br><p> Aviso ,
						está ação não pode ser revertida , ao clicar em aceitar os
						respectivos dados serão apagados permanentemente
						da sua base de dados. </p>"
						data-title="Excluir"
						data-class="btn btn-success pr-5 pl-5 btn "
						data-save="Sim"
						data-close="Fechar"> <i class="btn  ls-ico-cancel-circle text-danger
							float-right"></i></a></td>


        </tr>
      </tbody>

      <?php
      }
      ?>
      </table>
  </div>
</div>
<div class="col-sm-3"></div>
</div>

    </div>  <!-- fim div container-->

    <div style="height:200px;" class="row"></div>


  <?php include_once ("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
    function escondeMostra(x){
      x = document.getElementById(x).style.display == "none";){
        document.getElementById(x).style.display = "inline"; }
        else{ document.getElementById(x).style.display = "none"; }
      }
    </script>

  </body>

  <script>
function mostrar_abas(obj) {

     document.getElementById('box1').style.display="none";
      document.getElementById('box2').style.display="none";
      document.getElementById('box3').style.display="none";

   switch (obj.id) {
      case 'mostra_aba1':
      document.getElementById('box1').style.display="block";
      break
      case 'mostra_aba2':
      document.getElementById('box2').style.display="block";
      break
      case 'mostra_aba3':
      document.getElementById('box3').style.display="block";
      break
   }
}

</script>

</html>

<script type="text/javascript" src="../javascripts/jquery.js"></script>
			<script type="text/javascript" src="../javascripts/locastyle.js"></script>
			<script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>