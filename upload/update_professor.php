<?php

include_once ("../lib/verifica-login.php");
include_once ("../variables_global.php");


// $id = intval($_REQUEST['id']);
$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$phone = htmlspecialchars($_REQUEST['phone']);
$email = htmlspecialchars($_REQUEST['email']);
$cpf = htmlspecialchars($_REQUEST['cpf']);
// $pass = md5(htmlspecialchars($_REQUEST['pass']));
// $funcao = htmlspecialchars($_REQUEST['funcao']);


$sql = "UPDATE users set firstname='$firstname',lastname='$lastname',phone='$phone',email='$email', cpf = '$cpf'
 where id=$idUpload";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);


$query = "SELECT * FROM uploads where id = $idUpload";
$resultado=conecta($maquina,$usuario,$senha,$banco,$query);


if($update="UPDATE uploads SET nome='$nomeUpload',telefone='$phone',email='$email' where id_prof=$idUpload")
{$resultado=conecta($maquina,$usuario,$senha,$banco,$update);
	{
		echo"<script>alert('Dados Alterados com Sucesso!');
		window.location='index.php';
		</script>";
		}
}







?>
