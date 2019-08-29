<?php
include_once("../lib/verifica-login.php");
include ("../lib/conexao_banco.php");
include ("../lib/funcoes.php");


$rastreio = htmlspecialchars($_REQUEST['rastreio']);

$sql = "delete uploads where rastreio = '$rastreio'";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
$hostname=$_SERVER['SERVER_ADDR'];
header("Location:http://$hostname/uploads/upload/confirmacaovalida.php?nome=$nome&email=$email&curso=$curso&opcaoimpressao=$opcaoimpressao&qtdecopias=$qtdecopias&path_arq=$path_arq&proposito=$proposito&rastreio=$rastreio&datahora=$datahora");
exit;

?>