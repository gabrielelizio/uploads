 <?php
 ob_start();
 @session_start();
  if(isset($_SESSION["acesso-negado"])){
    echo $_SESSION["acesso-negado"];
    unset($_SESSION["acesso-negado"]);
  }
?>
<!DOCTYPE html>
<html class="ls-theme-gray">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Esqueci minha Senha</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href="stylesheets/locastyle.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">

<div id="fundo-externo"></div>
    <div id="fundo">
        <img class="img-responsive " src="../images/bg_login.jpg" alt="" />
    </div>
</div>

<div id="card-form" class="container">
  <div class="row">
    <div class="col-sm-4 col-md-4"></div>
    <div class="col-sm-4 col-md-4">
      <div  class="card border border-1 ">
      <a href="login.php">
        <img src="images/logo_login.png" class="card-img-top">
        </a>
        <h5 class="text-info pt-3"><center color="red">Solicitar recuperação de senha</center></h5>
      
          <div class="card-body pt-5">
            <div class="form-group">
              <div class="row">
              <div class="col-1"> </div>
                <div class="col-10 ">
                <form role="form" class="ls-form ls-login-form" method="post" action="lib/esqueci-senha-autentica.php">

                <label class="ls-label">
                <b class="text-success">Email</b>
                  <b class="ls-label-text ls-hidden-accessible">E-Mail</b>
                  <input class="ls-login-bg-user ls-field-lg" name="email" type="text" placeholder="E-Mail Cadastrado" required autofocus>
                </label>


                <label class="ls-label">
                <b class="text-success">CPF</b>
                  <b class="ls-label-text ls-hidden-accessible">CPF</b>
                  <div class="ls-prefix-group ls-field-lg">
                    <input id="password_field" class="ls-login-bg-password" name="cpf" type="text" placeholder="Seu CPF" required>
                    <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                  </div>
                </label>

                  
                  <br>
                  <input type="submit" value="Solicitar" class="btn btn-success  ls-btn-block ls-btn-lg">
                  
                  </form>
                </div>
                
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4"> </div>
  </div>
</div>



 <script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/locastyle.js"></script>

</body>
</html>
