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

		</head>
		<body>
			<div class="ls-topbar ">

	<?php  include_once("../notification_bars.php"); ?>

		<span class="ls-show-sidebar ls-ico-menu"></span>

		<!-- Nome do produto/marca com sidebar -->
			<h1 class="ls-brand-name">
				<a href="#" class="ls-ico-earth">
					<small><?php echo "$vg_title";?></small>
					Provas
				</a>
			</h1>

		<!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
	</div>

	<aside class="ls-sidebar">

		<div class="ls-sidebar-inner">
				<a href="#"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

	<?php
		if($_SESSION["nivel"] == 1){
				require_once("../menu-professor.php");
		}else{
				require_once("../menu-sicp.php");
		}
	?>

		</div>
	</aside>


			<main class="ls-main ">
				<div class="container-fluid">
					<h1 class="ls-title-intro ls-ico-upload">Upload de Provas</h1>


	<form action="save.php" method="post" enctype="multipart/form-data" class="ls-form ls-form-horizontal row">
		<fieldset>
			<label class="ls-label col-md-3">
				<b class="ls-label-text">Nome</b>
				<p class="ls-label-info"></p>
				<input style="background: #efe7e7;" type="text" name="nome" readonly value="<?= $nomeUpload ?>" required >
			</label>
			<label class="ls-label col-md-4">
				<b class="ls-label-text">E-mail</b>
				<p class="ls-label-info"></p>
				<input style="background: #efe7e7;" type="text" name="email" readonly value="<?= $emailUpload ?>" required >
			</label>

			<input style="background: #efe7e7;" type="hidden" name="telefone" readonly value="<?= $telUpload ?>" required >

		</fieldset>

		<hr>

		<b class="ls-label-text">Para cadastrar um novo Curso, informe o nome abaixo:</b>
<!--
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
			<div class="ls-label col-md-5">
				<p>Selecione o(s) cursos</p>
				<div>
				<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Administracao">
					Administração
				</label>
				</div>
				<div>
				<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Eng. eletrica">
					Eng. Elétrica
				</label>
				</div>
				<div>
				<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Eng. Mecanica">
					Eng. Mecânica
				</label>
				</div>
				<div>
				<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Redes">
					Redes Comp.
				</label>
				</div>
	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Arquitetura">
					Arquitetura e Urbanismo
				</label>
	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Contabeis">
					Ciências Contábeis
				</label>
	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="EngCivil">
					Engenharia Civil
				</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="EngProducao">
					Engenharia de Produção
				</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Enfermagem">
					Enfermagem
				</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Fisioterapia">
					Fisioterapia
				</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="EduFisica">
					Educação Física
	</label>
	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="GestaoComercial">
					Gestão Comercial
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="GestaoRH">
					Gestão de RH
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="GestaoFinanceira">
					Gestão Financeira
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="EduFisica">
					Educação Física
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Logística">
					Logística
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="GestaoMarketing">
					Gestão em Marketing
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="ConstrucaoEdificios">
					Construção de Edifícios
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="SistemasInformacao">
					Sistemas de Informação
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="Mecatronica Industrial">
					Mecatrônica
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="ProducaoIndustrial">
					G. da Produção Industrial
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="SegurancaTrabalho">
					Segurança no Trabalho
	</label>

	<label class="ls-label-text">
					<input type="checkbox" name="curso[]" value="PosGraduacao">
					Pós Graduação
	</label>

			</div>
		</fieldset>


	<hr>

	<fieldset>
		<label class="ls-label col-md-3">
				<b class="ls-label-text">Código das turmas</b>
				<input type="text" name="codturmas" placeholder="Código da(s) turma(s)" required >
			</label>
		</fieldset>

	<hr>

		<fieldset>
			<!-- Exemplo com Radio button -->
			<div class="ls-label col-md-5">
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
		</fieldset>

	<hr>

	<fieldset>
	<label class="ls-label col-md-12 col-sm-12">
				<b class="ls-label-text">Propósito</b>
				<div class="ls-custom-select">
					<select name="proposito" class="ls-select">
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
			</fieldset>

	<hr>

		<fieldset>
		<label class="ls-label col-md-3">
				<b class="ls-label-text">Qtde. cópias de cada arquivo</b>
				<input type="text" name="qtdecopias" placeholder="Número de cópias" required >
			</label>


		</fieldset>

	<hr>

		<label class="ls-label col-md-6">
			<div class="ls-prefix-group">
				<span class="ls-label-text-prefix">Arquivo:</span>
				<input id="input-b1" name="arquivo[]" type="file" class="file" multiple>
			</div>
		</label>

	<hr>
			<div class="ls-actions-btn">
				<button class="ls-btn">Salvar</button>
				<button class="ls-btn-danger">Limpar</button>
			</div>
		</form>
			</div>
				</main>

			<?php include_once("../notification_message.php"); ?>


			<!-- We recommended use jQuery 1.10 or up -->
			<script type="text/javascript" src="../javascripts/jquery.js"></script>
			<script type="text/javascript" src="../javascripts/locastyle.js"></script>
		</body>
	</html>
