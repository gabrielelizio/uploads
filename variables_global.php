<?php
  	include_once ("lib/funcoes.php");
	include_once ("lib/conexao_banco.php");
	//session_start();
 	$id = $_SESSION["id"];
 	$nivel = $_SESSION["nivel"];
	$sql = "SELECT * FROM users WHERE id = '$id'";
	$resultado = conecta($maquina, $usuario, $senha, $banco, $sql);
	$dados = mysql_fetch_assoc($resultado);

$vg_title="Uploads";
$vg_charset="utf-8";
$vg_theme="ls-theme-orange";
$vg_user_logged = $nomeUser = $dados["firstname"];
$vg_nome_sistema="Provas";
$vg_title_small="Upload";

$nomeUpload = $nomeUser = $dados["firstname"]. " ". $dados["lastname"];
$emailUpload = $nomeUser = $dados["email"];  
$telUpload = $nomeUser = $dados["phone"]; 
?>