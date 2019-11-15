<nav style="background-color: #f15c2f;" class="navbar navbar-expand-lg fixed-top navbar-dark conatiner">
        <a href="#" class="navbar-brand"> <img src="../images/header_logo.png"> Upload de Arquivos </a>
<<<<<<< HEAD
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao" 
=======
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacao"
>>>>>>> ea938f827f566a5018410fad0f4411937310e795
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

					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menu_dropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="font-size: 12pt;">  Sair </a>

          <div style="background-color: black;" class="dropdown-menu text-center">
          
          <a href="../logout.php" class="dropdown-link"> <span class="text-left text-light"> Encerrar Sessão </span> </a> <br>
          </div>
          </li>

          </ul>
			</div>
    </nav>

    <!-- Modal -->
<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color: #f15c2f;" class="modal-title" id="exampleModalLabel">Alterar Senha </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="alterasenha.php" class="ls-form" method="post">
      <div style="background: #efe7e7;" class="modal-body">
      <label class="ls-label">
            <b class="ls-label-text">Senha Atual *</b>
            <input class="border border-success" type="password" name="senha_atual" required placeholder="Digite sua senha atual" />
          </label>
          <label class="ls-label">
            <b class="ls-label-text"> Nova Senha *</b>
            <input class="border border-success" type="password" name="senha_nova" required placeholder="Digite a nova senha" />
          </label>
          <label class="ls-label">
            <b class="ls-label-text"> Confirmação de senha *</b>
            <input  class="border border-success" type="password" name="confirme_senha" required placeholder="Confirmar nova senha" />
          </label>

      </div>
      <div style="background: #efe7e7;" class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
        <input  style="background-color: #f15c2f;" type="submit" class="btn btn-primary" name="enviar" value="Salvar">

			</div>
			</form>
    </div>
  </div>
</div>

<!-- excluir depois

           <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/processamento/index.php" class="ls-ico-spinner" title="Agentes">Processamento</a></li>
           <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/processadas/index.php" class="ls-ico-checkmark-circle" title="Agentes">Realizados</a></li>
           <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/error/index.php" class="ls-ico-close" title="Agentes">Erros</a></li>
           <li><a href="http://<?php //echo $_SERVER['SERVER_NAME']; ?>/uploads/users/index.php" class="ls-ico-user" title="">Usuários</a></li>
        </ul>
      </nav> -->
