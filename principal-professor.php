<?php
ob_start();


$hostname=$_SERVER['SERVER_NAME'];
@header("Location:http://$hostname/uploads/upload/index.php");
exit;


  session_start();
  include_once("variables_global.php");
  if(!isset($_SESSION["id"])){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html class="<?php echo "$vg_theme";?>">
  <head>
    <title><?php echo "$vg_title";?></title>

    <meta charset="<?php echo $vg_charset;?>">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="images/ico-boilerplate.png">
  </head>
  <body>


  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>

<div id="menu" class="collapse navbar-collapse container">
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item active"></li>

<?php include("menu-professor.php");  ?>


  </div>
</aside>


    <main class="ls-main ">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>
      </div>
    </main>
  <?php include_once("notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" src="javascripts/locastyle.js"></script>
  </body>
</html>