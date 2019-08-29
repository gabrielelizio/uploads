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
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">

<div class="ls-login-parent">
  <div class="ls-login-inner">
    <div class="ls-login-container">
 
      <div class="ls-login-box">
  <h1 class="ls-login-logo">
   <a href="login.php"> <img title="Logo login" src="images/login.png" height="145" width="240" /></a>
  </h1>
  <h3><center color="red">Solicitar recuperação de senha</center></h3>
  <br>
  <form role="form" class="ls-form ls-login-form" method="post" action="lib/esqueci-senha-autentica.php">
    <fieldset>

      <label class="ls-label">
        <b class="ls-label-text ls-hidden-accessible">E-Mail</b>
        <input class="ls-login-bg-user ls-field-lg" name="email" type="text" placeholder="E-Mail Cadastrado" required autofocus>
      </label>

      <label class="ls-label">
        <b class="ls-label-text ls-hidden-accessible">CPF</b>
        <div class="ls-prefix-group ls-field-lg">
          <input id="password_field" class="ls-login-bg-password" name="cpf" type="text" placeholder="Seu CPF" required>
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
        </div>
      </label>


      <input type="submit" value="Solicitar" class="ls-btn-primary ls-btn-block ls-btn-lg">
     
    </fieldset>
  </form>
</div>

    </div>
  </div>
</div>

 <script type="text/javascript" src="javascripts/jquery.js"></script>
<script type="text/javascript" src="javascripts/locastyle.js"></script>

</body>
</html>
