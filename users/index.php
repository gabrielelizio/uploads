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
    <div class="col-8">
      <p class="h5"> Adicionar Um Usuário: </p>
      <iframe src="user.php" height="600" width="800" style=border:none;></iframe>
    </div>
  </div>
</div>

  <?php include_once ("../notification_message.php"); ?>


    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="../javascripts/jquery.js"></script>
    <script type="text/javascript" src="../javascripts/locastyle.js"></script>
    <script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
  </body>
</html>
