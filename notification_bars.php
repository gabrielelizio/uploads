<?php
include_once("variables_global.php");
?>
<!-- Barra de Notificações -->
  <div class="ls-notification-topbar">
    <!-- Links de apoio -->
    <div class="ls-alerts-list">
      <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
    </div>

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <img src="images/avatar-example.jpg" alt="" />
        <span class="ls-name"><?php echo $vg_user_logged; ?></span>
        
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="logout.php">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>