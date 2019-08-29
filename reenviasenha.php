<!DOCTYPE html>
<html>
  <head>
    <title>Reenvia Senha</title>

    <meta charset="UTF-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="images/ico-boilerplate.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
  <body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br><br><br><br><br><br>
<h1 class="ls-login-logo" align="center"><a href="principal.html"> <img title="Logo login" src="images/login.png" height="145" width="140" /></a></h1>
            <div class="recovery-panel panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Recuperação de Senha</h3><br><br>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="recupera_senha.php">
                <fieldset>
                    <input id="textinput" name="textinput" placeholder="email@email.com" class="form-control input-md" required="" type="text">
                    <span class="help-block">Insira o email cadastrado no sistema</span>       
                     
                    <button id="recupera" name="recupera" class="btn btn-success">Recuperar</button>
                    <button id="cancela" name="cancela" class="btn btn-danger">Cancelar</button>
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
