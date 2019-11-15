<nav style="background-color: #f15c2f;" class="navbar navbar-collapse navbar-expand-lg fixed-top navbar-dark conatiner">
        <a href="#" class="navbar-brand"> <img src="../images/header_logo.png"> Upload de Arquivos </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="toggle navigation"">
    <span class="navbar-toggler-icon"></span>
  </button>

    <!-- Linkss -->
    <div id="menu" class="collapse navbar-collapse ">
        <ul class="navbar-nav ml-md-auto">

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/upload/index.php"> 
            <h6> #Dashboard </h6> </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/processamento/index.php"> 
            <h6> Processando </h6> </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/processadas/index.php"> 
            <h6> Realizados </h6> </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/error/index.php"> 
            <h6> Erros </h6> </a>
        </li>
        

			<li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu_dropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="font-size: 12pt; padding-botto:20px;">  Sair   </a>

        <div style="background-color: black;" class="dropdown-menu text-center">
        
        <a href="../logout.php" class="dropdown-link"> <span class="text-left text-light"> Encerrar Sessão </span> </a> <br>
        </div>
        </li>


        </ul>
	</div>
    </nav>  
  

    
<!-- <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/upload/index.php" class="ls-ico-upload" title="">Uploads</a></li>
  <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/processamento/index.php" class="ls-ico-spinner" title="Agentes">Processando</a></li>
  <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/processadas/index.php" class="ls-ico-checkmark-circle" title="Agentes">Realizados</a></li>
  <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/error/index.php" class="ls-ico-close" title="Agentes">Erros</a></li>
    
-->