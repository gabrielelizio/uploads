<nav style="background-color: #f15c2f;" class="navbar navbar-expand-lg fixed-top navbar-dark conatiner">
        <a href="#" class="navbar-brand"> <img src="../images/header_logo.png"> Upload de Arquivos </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao" 
        aria-controls="navegacao" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>


      <!-- Linkss -->
      <div id="navegacao" class="collapse navbar-collapse ">
        <ul class="navbar-nav ml-md-auto">

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/processamento/index.php">
            <h6> Processamento</h6> </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/processadas/index.php">
            <h6> Realizados </h6> </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/error/index.php">
            <h6> Erros </h6> </a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/uploads/users/index.php">
            <h6> Usuários </h6> </a>
        </li>

			<li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu_dropdown2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="font-size: 12pt;">  Sair </a>

        <div style="background-color: black;" class="dropdown-menu text-center">
    
        <a href="../logout.php"  class="dropdown-link"> <span class="text-left text-light"> Encerrar Sessão </span> </a> <br>
        </div>
        </li>

        </ul>
			</div>
    </nav>



