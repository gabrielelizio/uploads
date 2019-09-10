<?php

include_once ("../lib/verifica-login.php");

$id = intval($_REQUEST['id']);
$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$phone = htmlspecialchars($_REQUEST['phone']);
$email = htmlspecialchars($_REQUEST['email']);
$cpf = htmlspecialchars($_REQUEST['cpf']);
$pass = md5(htmlspecialchars($_REQUEST['pass']));
$funcao = htmlspecialchars($_REQUEST['funcao']);

include '../conn.php';

$sql = "update users set firstname='$firstname',lastname='$lastname',phone='$phone',email='$email', pass = '$pass', tipoCad = '$funcao' , cpf = '$cpf' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'firstname' => $firstname,
		'lastname' => $lastname,
		'phone' => $phone,
		'email' => $email,
		'cpf' => $cpf
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
