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
      .toggle { display: none; } 
      .same-box-1 { display: none; }
    </style>
  </head>
  <body>


<?php  include_once ("../notification_bars.php"); ?>


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

<div class="conatainer pt-5">
  <div class="row">
    <div class="col-3"></div>


    <div class="ls-tabs-btn col-6">

    <div class="ls-tabs-btn">
    <ul class="ls-tabs-btn-nav">
    <li class="col-md-3 col-xs-6 ls-active">
      <a href="#box1" class="ls-btn" data-ls-module="button" >
        <span class="ls-ico-user-add"> ADD Usuário</span></a></li>

    <li class="col-md-2 col-xs-6">
      <a href="#box2" class="ls-btn" data-ls-module="button">
      <span class="ls-ico-list"> Listar </span></a></li>

    <li class="col-md-2 col-xs-6">
      <a href="#box3" class="ls-btn" data-ls-module="button">
      <span class="ls-ico-remove"></span></a></li>
    
  </ul>

    <!--  <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" data-ls-module="button" data-target="#tab1a"
        class=" btn btn-outline-success ls-ico-user-add"> Add Usuário</button>

        <button type="button" data-ls-module="button" data-target="#tab2a" 
        class="btn btn-outline-success pr-4 pl-4"> <i class="ls-ico-list text-dark"> </i> Listar </button>

        <button type="button" data-ls-module="button" data-target="#tab3a" 
        class="btn btn-outline-success  pr-4 pl-4 "> <i class="ls-ico-remove text-danger"> </i> </button>
      </div> -->

      <!-- div p/ opção de adiiconar usuário -->
        <div class="ls-tabs-container pt-5 border border-secondary">
            <div class="same-box-1 toggle" id="box1">
              <form >
                <div class="row">
                  <div class="col-2"></div>
                  <div class="form-group col-6">
                    <label class="text-success"> Primeiro nome: </label>
                    <input type="text" class="form-control border-primary" id="firstName" 
                    placeholder="" autocomplete="off" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2"></div>
                  <div class="form-group col-6">
                    <label class="text-success"> Sobrenome: </label>
                    <input type="text" class="form-control border-primary" id="lastName" 
                    placeholder="" autocomplete="off" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2"></div>
                  <div class="form-group col-6">
                    <label class="text-success"> CPF: </label>
                    <input type="text" class="form-control border-primary" id="cpf" 
                    placeholder="Digite o numero do seu cpf. ex: 111.111.111.11" autocomplete="off" required="required" pattern="[0-9]+$">
                  </div>
                </div>

                <div class="row">
                  <div class="col-2"></div>
                  <div class="form-group col-6">
                    <label class="text-success"> Telefone: </label>
                    <input type="text" class="form-control border-primary" id="phone" 
                    placeholder="Apenas numeros com DDD.: ex: 3133333333" autocomplete="off" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2"></div>
                  <div class="form-group col-6">
                    <label class="text-success"> Email: </label>
                    <input type="text" class="form-control border-primary" id="email" 
                    placeholder="" autocomplete="off" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-2"></div>
                  <div class="form-group col-6">
                    <label class="text-success"> Senha: </label>
                    <div class="ls-prefix-group ls-field-lg">
                      <input id="password_field" class="ls-login-bg-password form-control border-primary" 
                      name="password" type="password" placeholder="Sua Senha" required>
                      <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" 
                      data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                    </div> <br>

                  <div class="row">
                  
                  <div class="form-group col-6">
                    <label class="text-success"> Função: </label>
                    <div>
                    <select id="inputState" class="form-control border-primary ">
                      <option selected>Professor</option>
                      <option>SICP</option>
                    </select>
                    </div>
                  </div>
                </div>

                <div class="row pt-4">
                  <div class="col-2"></div>
                  <div class="col-5 pt-5">
                  <button type="submit" class="btn btn-primary pr-5 pl-5"> Salvar </button>
                  </div>
                  <div class="col-4 pt-5">
                  <button type="reset" class="btn btn-secondary pr-5 pl-5"> Cancelar </button>
                  </div>
              </form>
              </div>
        
              <div style="height:200px;" class="row"></div> 
            


            <!-- lista de users -->
            <div class="same-box-1 toggle" id="box2" >
                Lucas vinicios Martins jkfbsdanahbfsdjuckubsadgjhu
            </div>

            <!-- Excluir users -->
            <div  class="same-box-1 toggle text-dark" id="box3" >
                \xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                \xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                \xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                \xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                \xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                \xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                \xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                v\xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
                v\xkzxcjnvkzjnxcvkjnzxckjnvkjzxncvkjnzxckjvnkjzxcnvkjzxnvhckjzxnhcv
            </div>
        
      
        </div>

      </div>

    </div> <!-- fim div clas row -->
    </div>  <!-- fim div container-->


  <?php include_once ("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  </body>


<script>
  $(document).ready(function () {
      $("a").click(function () {
        if ($(this).hasClass("same-box")) {
          $(".toggle:visible").slideUp();
          $($(this).attr("href")).slideDown();
          return false;
        }
        var myelement = $(this).attr("href");
        $(myelement).slideToggle("fast");
        $(".toggle:visible").not(myelement).slideUp();
      });
    });
</script>

</html>
