<?php 
ob_start();
session_start();

	include_once ("funcoes.php");
	include_once ("conexao_banco.php");

if(isset($_POST["email"]) && !empty($_POST["email"])){
	$email = addslashes($_POST["email"]);
	$pass = md5(addslashes($_POST["pass"]));

	$sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
	$resultado = conecta($maquina, $usuario, $senha, $banco, $sql);

	if(mysql_num_rows($resultado) > 0){
		$dados = mysql_fetch_assoc($resultado);
		$_SESSION["id"] = $dados["id"];
		$_SESSION["nivel"] = $dados["tipoCad"];

		if($_SESSION["nivel"] == 1){
			header("Location: ../principal-professor.php");
		}else{
			header("Location: ../principal-sicp.php");
		}


	}else{
		$_SESSION["acesso-negado"] = "<div class='ls-alert-warning'><strong>Acesso Negado:</strong> Login ou senha inválido.</div>";
		header("Location: ../login.php");
	}
}


?>