<?php

include_once ("../lib/verifica-login.php");
include_once ("../variables_global.php");


$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$phone = htmlspecialchars($_REQUEST['phone']);
$email = htmlspecialchars($_REQUEST['email']);
$cpf = htmlspecialchars($_REQUEST['cpf']);


$sql = "UPDATE users set firstname='$firstname',lastname='$lastname',phone='$phone',email='$email', cpf = '$cpf'
 where id=$idUpload";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);


$query = "SELECT * FROM uploads where id = $idUpload";
$resultado=conecta($maquina,$usuario,$senha,$banco,$query);


if($update="UPDATE uploads SET nome=(SELECT CONCAT(firstname, ' ',lastname)from users where id= $idUpload),telefone='$phone',email='$email' where id_prof=$idUpload")
{$resultado=conecta($maquina,$usuario,$senha,$banco,$update);
	{
		echo"<script>alert('Dados Alterados com Sucesso!');
		window.location='index.php';
		</script>";
		}
}

?>
