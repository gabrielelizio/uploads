	<?php

	include_once("../lib/verifica-login.php");
	include_once("../variables_global.php");

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
			<style>

			</style>
		</head>
		<body>

		<?php
		if($_SESSION["nivel"] == 1){
				require_once("../menu-professor.php");
		}else{
				require_once("../menu-sicp.php");
		}
	?>

	<!--	<nav style="background-color: #f15c2f;" class="navbar navbar-expand-lg fixed-top navbar-dark conatiner">
        <a href="#" class="navbar-brand"> <img src="../images/header_logo.png"> Upload de Arquivos </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
            <span class="navbar-toggler-icon"></span>
		</button>

            <div id="menu" class="collapse navbar-collapse container">
                <ul class="navbar-nav ml-md-auto">

					<li class="nav-item">
                        <a class="nav-link"  href="#"> <h6> Processando </h6> </a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <h6> Realizados </h6> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#"> <h6> Erros </h6> </a>
					</li>

					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menu_dropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="font-size: 12pt;">  Sair </a>

                        <div style="background-color: black;" class="dropdown-menu text-center">
                            <a href="../logout.php" class="dropdown-link"> <span class="text-left text-light"> Encerrar Sessão </span> </a> <br>
                        </div>
					</li>
					<li class="nav-item">
                        <a class="nav-link"  href="#"> <h6></h6> </a>
					</li>

                </ul>
			</div>
	</nav>

	-->
	<div class="pt-2"></div>
	<div class=" container-fluid pt-5">
	<h1 class="ls-title-intro ls-ico-upload pl-5 text-right "> Upload de Provas </h1>
	</div>
	<div class="container pt-5">


		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">

			<form action="save.php" method="post" enctype="multipart/form-data" class="ls-form ls-form-horizontal row">

			<label class="ls-label col-6 ">
				<b class="ls-label-text">Nome</b>
				<p class="ls-label-info"></p>
				<input style="background: #efe7e7;" type="text" name="nome" readonly value="<?= $nomeUpload ?>" required >
			</label>
			<label class="ls-label col-6 ">
				<b class="ls-label-text">E-mail</b>
				<p class="ls-label-info"></p>
				<input style="background: #efe7e7;" type="text" name="email" readonly value="<?= $emailUpload ?>" required >
			</label>

			<input style="background: #efe7e7;" type="hidden" name="telefone" readonly value="<?= $telUpload ?>" required >
			</div>
			<div class="col-1"></div>
		</div>

		<hr>

	<div class="row">
		<b class="ls-label-text col-12" >Para cadastrar um novo Curso, informe o nome abaixo:</b>
	</div>
<!--<
	<fieldset>
		<div class="ls-label col-md-5">
		<form action="cadastrocurso.php">
		<input name =cadastrocurso>
		<button className= "Cadastrar">
	</form>
	</div>
	</fieldset>
	<fieldset> -->
			<!-- Exemplo com Checkbox -->
		<div class="row">
		<p>Selecione o(s) cursos</p>
		</div>

		<div class="row">  <!-- Linha 1 -->
			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Administracao">
					Administração
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Eng. eletrica">
					Eng. Elétrica
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Eng. Mecanica">
					Eng. Mecânica
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Redes">
					Redes Comp.
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 2 -->
			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Arquitetura">
					Arquitetura e Urbanismo
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Contabeis">
					Ciências Contábeis
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="EngCivil">
					Engenharia Civil
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="EngProducao">
					Engenharia de Produção
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 3 -->
			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Enfermagem">
					Enfermagem
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Fisioterapia">
					Fisioterapia
				</label>
			</div>

			<div cl		ass="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="EduFisica">
					Educação Física
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoComercial">
					Gestão Comercial
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 4 -->
			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoRH">
					Gestão de RH
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoFinanceira">
					Gestão Financeira
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Logística">
					Logística
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoMarketing">
					Gestão em Marketing
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 5 -->
			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="ConstrucaoEdificios">
					Construção de Edifícios
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="SistemasInformacao">
					Sistemas de Informação
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Mecatronica Industrial">
					Mecatrônica
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="ProducaoIndustrial">
					G. da Produção Industrial
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 5 -->
			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="SegurancaTrabalho">
					Segurança no Trabalho
				</label>
			</div>

			<div class="col-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="PosGraduacao">
					Pós Graduação
				</label>
			</div>

			<div class="col-3">
			</div>

			<div class="col-3">
			</div>
		</div>

<!-- Fim da tabela de cursos  ################################################################### -->
<br>

<div class="row pt-5">
	<label class="ls-label col-4">
		<b class="ls-label-text">Código das turmas</b>
		<input class="form-control" type="text" name="codturmas" placeholder="Código da(s) turma(s)" required >
	</label>
</div>

<br>
<div class="row">
	<div class="ls-label col-8">
		<p><b>Escolha uma opção de impressão:</b></p>
			<label class="ls-label-text">
				<input type="radio" name="opcaoimpressao" value="FrenteVerso" checked="checked">
				Frente e Verso
			</label>
			<label class="ls-label-text">
				<input type="radio" name="opcaoimpressao" value="Frente">
				Frente
			</label>
	</div>
</div>

<br>
<div class="row">
	<div class="col-8">
		<label class="ls-label col-12">
			<b class="ls-label-text">Propósito</b>
			<div class="ls-custom-select">
				<select name="proposito" class="form-control">
					<option value="Parcial 01">Parcial 01</option>
					<option value="Oficial 01">Oficial 01</option>
					<option value="Parcial 02">Parcial 02</option>
					<option value="Oficial 02">Oficial 02</option>
					<option value="Segunda Chamada">Segunda Chamada</option>
					<option value="Exame Espacial">Exame Especial</option>
					<option value="Outros">Outros</option>
				</select>
			</div>
		</label>
	</div>
</div>

<br>
<div class="row">
	<label class="ls-label col-6">
		<b class="ls-label-text">Qtde. cópias de cada arquivo</b>
		<input class="form-control" type="text" name="qtdecopias" placeholder="Número de cópias" required >
	</label>
</div>

<br>
<div class="row">
	<label class="ls-label col-10">
		<div class="ls-prefix-group">
			<span class="ls-label-text-prefix">Arquivo:</span>
			<input  id="input-b1" name="arquivo[]" type="file" class="file" multiple>
		</div>
	</label>
</div>
<br>

<div class="row pt-5">
	<div class="col-4"></div>
	<div class="col-2">
		<button class="btn btn-success col-12">Salvar</button>
	</div>
	<div class="col-2">
		<button class="ls-btn-danger col-12">Limpar</button>
	</div>
	<div class="col-4"></div>
</div>
</form>


<hr><br>
<div style="height: 200px;"></div>

			<!-- We recommended use jQuery 1.10 or up -->
			<script type="text/javascript" src="../javascripts/jquery.js"></script>
			<script type="text/javascript" src="../javascripts/locastyle.js"></script>
			<script type="text/javascript" src="../javascripts/bootstrap.bundle.min.js"></script>
		</body>
	</html>
