<?php
ob_start();
include_once("../lib/verifica-login.php");
include ("../lib/conexao_banco.php");
include ("../lib/funcoes.php");

$observacao  = htmlspecialchars($_REQUEST['observacao']);
$rastreio = htmlspecialchars($_REQUEST['rastreio']);
$dataAtual = date("Y-m-d G:i:s");
$status  = htmlspecialchars($_REQUEST['status']);
//echo ("$rastreio");
//exit;


$sql="UPDATE uploads SET status='Impresso', observacao='$observacao', data_processamento='$dataAtual', status='$status'  where rastreio= '$rastreio'";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

$hostname=$_SERVER['SERVER_NAME'];
header("Location:http://$hostname/uploads/processamento/index.php");
exit;

?>