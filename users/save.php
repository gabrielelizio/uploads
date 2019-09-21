<?php

include_once ("../lib/verifica-login.php");
include_once ("../variables_global.php");



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cpf= $_POST['cpf'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$funcao = $_POST['funcao'];


if($funcao == "Professor"){
	$tipoCad= 1;
}
else{
	$tipoCad = 2;
}

$sql = "INSERT INTO users (firstname, lastname, phone, email, pass, tipoCad, cpf) 
	VALUES('$firstname', '$lastname', '$phone', '$email', '$password', '$tipoCad', '$cpf')";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

header('Location: index.php?sucesso'); 
exit();

?>
