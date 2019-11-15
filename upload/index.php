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

	<div class="pt-2"></div>
	<div class=" container-fluid pt-5">
	<h1 class="ls-title-intro ls-ico-upload pl-5 text-center "> Upload de Provas </h1>
	</div>
	<div class="container pt-5">
		
		<div class="row">
			<div class="col-sm-12">
				<div style="background: #efe7e7;" data-ls-module="collapse" data-target="#0" class="ls-collapse ">
					<a href="#" style="text-decoration:none" class="ls-collapse-header">
					<h1 class="ls-collapse-title "> <span class="ls-text-primary" style="font-size: 14pt; color: #f15c2f;" >
					 * Importante </span>  </h1>
					</a>
					<div style="background: #fff" class="ls-collapse-body" id="0">
					<p style="font-size: 12pt;" class=" text-success pt-3">
					&emsp;&emsp;Atenção professor, considere os seguintes requisitos para enviar sua prova. 
					</p>
					<p style="font-size: 12pt;">
						<li> Tamanho máximo 2 Folhas </li>
						<li> ... </li> 
						<li> ...</li> 
						<li> ... </li>  
					</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row pt-5">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">

			<form action="save.php" method="post" enctype="multipart/form-data" class="ls-form ls-form-horizontal row">
			<div class="row">
				
				<div class="col-sm-10">
				<label class="ls-label">
				<b class="ls-label-text">Nome</b>
				<p class="ls-label-info"></p>
				<input class="col-12" style="background: #efe7e7;" type="text" name="nome" readonly value="<?= $nomeUpload ?>" required >
				
				</label>
				</div>
				<div class="col-sm-2">
				<a href="alterar_usuario.php" class="ls-tooltip-right btn btn-info btn-sm"  aria-label="Editar usuário"><i class="ls-ico-pencil"></i> </a>
				</div>
				<div class="col-sm-10">
				<label class="ls-label  ">
				<b class="ls-label-text">E-mail</b>
				<p class="ls-label-info"></p>
				<input class="col-12" style="background: #efe7e7;" type="text" name="email" readonly value="<?= $emailUpload ?>" required >
			</label>

				</div>
			</div>
			
			</div>
			<div class="col-sm-1"></div>
		</div>

		<hr>

			<!-- Exemplo com Checkbox -->
		<div class="row">
		<p>Selecione o(s) cursos abaixo:</p>
		</div>

		<div class="row">  <!-- Linha 1 -->
			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Administracao">
					Administração
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Eng. eletrica">
					Eng. Elétrica
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Eng. Mecanica">
					Eng. Mecânica
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Redes">
					Redes Comp.
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 2 -->
			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Arquitetura">
					Arquitetura e Urbanismo
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Contabeis">
					Ciências Contábeis
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="EngCivil">
					Engenharia Civil
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="EngProducao">
					Engenharia de Produção
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 3 -->
			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Enfermagem">
					Enfermagem
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Fisioterapia">
					Fisioterapia
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="EduFisica">
					Educação Física
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoComercial">
					Gestão Comercial
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 4 -->
			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoRH">
					Gestão de RH
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoFinanceira">
					Gestão Financeira
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Logística">
					Logística
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="GestaoMarketing">
					Gestão em Marketing
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 5 -->
			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="ConstrucaoEdificios">
					Construção de Edifícios
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="SistemasInformacao">
					Sistemas de Informação
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="Mecatronica Industrial">
					Mecatrônica
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="ProducaoIndustrial">
					G. da Produção Industrial
				</label>
			</div>
		</div>

		<div class="row"> <!-- Linha 5 -->
			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="SegurancaTrabalho">
					Segurança no Trabalho
				</label>
			</div>

			<div class="col-sm-3">
				<label class="ls-label-text text-primary">
					<input type="checkbox" name="curso[]" value="PosGraduacao">
					Pós Graduação
				</label>
			</div>

			<div class="col-sm-3">
			</div>

			<div class="col-sm-3">
			</div>
		</div>

<!-- Fim da tabela de cursos  ################################################################### -->
<br>

<div class="row pt-5">
	<label class="ls-label col-sm-4">
		<b class="ls-label-text">Preencha o nome da disciplina do curso:</b>
		<p class="text-info"> * Limite máximo de 1 arquivo por disciplina.</p>
		<input class="form-control" type="text" name="disciplina" placeholder="Informe a disciplina" required >
	</label>
</div>

<div class="row pt-5">
	<label class="ls-label col-sm-4">
		<b class="ls-label-text">Preencha o código dos cursos selecionados:</b>
		<input class="form-control" type="text" name="codturmas" placeholder="Código do(s) curso(s)" required >
	</label>
</div>

<br>
<div class="row">
	<div class="ls-label col-sm-8">
	<label class="ls-label col-sm-6">
			<b class="ls-label-text"> Dia da Semana </b>
				<p class="text-info"> * Informe o dia da semana que você vai aplicar a prova.</p>
			<div class="ls-custom-select">
				<select name="dia_semana" class="form-control">
					<option value="Segunda-feira">Segunda-Feira</option>
					<option value="Terça-feira">Terça-Feira </option>
					<option value="Quarta-feira">Quarta-Feira </option>
					<option value="Quinta-feira">Quinta-Feira</option>
					<option value="Sexta-feira">Sexta-feira </option>
					<option value="Sabádo">Sábado</option>
					<option value="Domingo">Domingo</option>
				</select>
			</div>
		</label>
	</div>
</div>


<div class="ls-label col-md-5">
    <p><b>Turno:</b></p>
    <label class="ls-label-text">
        <input type="radio" name="turno" value="Manhã" checked="checked">
        Manhã &nbsp;&nbsp;
        <input  type="radio" name="turno" value="Noite">
        Noite
    </label>
    </div>


<br>
<div class="row">
	<div class="col-sm-8">
		<label class="ls-label col-sm-12">
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
	<label class="ls-label col-sm-6">
		<b class="ls-label-text">Qtde. cópias de cada arquivo</b>
		<input class="form-control" type="text" name="qtdecopias" placeholder="Número de cópias" required >
	</label>
</div>

<br>
<div class="row">
	<label class="ls-label col-sm-10">
		<div class="ls-prefix-group">
			<span class="ls-label-text-prefix">Arquivo:</span>
			<input  id="input-b1" name="arquivo[]" type="file" accept="application/pdf" class="file" multiple>
		</div>
	</label>
</div>
<br>

<div class="row pt-5">
	<div class="col-sm-4"></div>
	<div class="col-sm-2">
	<button class="btn btn-success col-12">Salvar</button>
	</div>
	<div class="col-sm-2">
		<button class="ls-btn-danger col-12">Limpar</button>
	</div>
	<div class="col-sm-4"></div>
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
