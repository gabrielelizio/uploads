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
  <title>Tela de Login</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href="stylesheets/locastyle.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <style>
  
  </style>
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index container-fluid">
  
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
        <img src="images/logo_login.png" class="card-img-top">
          <div class="card-body">
            <div class="form-group">
              <div class="row">
              <div class="col-1"> </div>
                <div class="col-10 ">
                  <form method="post" action="lib/autentica.php">
                  <label class="ls-label">
                  <b class="text-success"> Usuário </b>
                  <input class="ls-login-bg-user ls-field-lg" name="email" type="text" placeholder="Seu email professor" required autofocus>
                  </label>
                  <label class="ls-label">
                    <b class="text-success">Senha</b> 
                    <div class="ls-prefix-group ls-field-lg">
                      <input id="password_field" class="ls-login-bg-password" name="pass" type="password" placeholder="Sua Senha" required>
                      <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                    </div>
                  </label>

                  <p><a class="ls-login-forgot" href="#">Esqueci minha senha</a></p>
                  <br>  
                  <input type="submit" value="Entrar" class="btn btn-success ls-btn-block btn-lg">

                  </form>
                </div>
                
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4"></div>
  </div>
</div>


 <script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/locastyle.js"></script>
<script type="text/javascript" src="javascripts/bootstrap.bundle.min.js"></script>

</body>

</html>
