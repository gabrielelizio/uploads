<?php

include_once("../lib/verifica-login.php");

$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$phone = htmlspecialchars($_REQUEST['phone']);
$email = htmlspecialchars($_REQUEST['email']);
$cpf = htmlspecialchars($_REQUEST['cpf']);
$pass = md5(htmlspecialchars($_REQUEST['pass']));
$funcao = htmlspecialchars($_REQUEST['funcao']);

include '../conn.php';

$sql = "insert into users(firstname, lastname, phone, email, pass, tipoCad , cpf) values('$firstname','$lastname','$phone','$email', '$pass', '$funcao' , '$cpf')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
		'firstname' => $firstname,
		'lastname' => $lastname,
		'phone' => $phone,
		'email' => $email,
		'pass' => $pass,
		'funcao' => $funcao
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>