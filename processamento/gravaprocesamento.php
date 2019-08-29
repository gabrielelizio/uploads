<?php
ob_start();
include_once("../lib/verifica-login.php");
include ("../lib/conexao_banco.php");
include ("../lib/funcoes.php");
include_once("../lib/emailGoDaddy.php");


$observacao  = htmlspecialchars($_REQUEST['observacao']);
$rastreio = htmlspecialchars($_REQUEST['rastreio']);
$dataAtual = date("Y-m-d G:i:s");
$status  = htmlspecialchars($_REQUEST['status']);

$nome  = htmlspecialchars($_REQUEST['nome']);
$email  = htmlspecialchars($_REQUEST['email']);
$telefone  = htmlspecialchars($_REQUEST['telefone']);
$qtdecopias  = htmlspecialchars($_REQUEST['qtdecopias']);
$opcaoimpressao  = htmlspecialchars($_REQUEST['opcaoimpressao']);
$rastreio  = htmlspecialchars($_REQUEST['rastreio']);



$Mensagem="Prezado $nome,\n\n Segue abaixo o status do processamento do arquivo enviado para impressão:\n
\tData do processamento: $dataAtual.\n\tSituação da Inpressão: $status.\n\tObservação: $observacao.\n\tQuantidade de Cópias: $qtdecopias. \n\tOpção de Impressão: $opcaoimpressao. \n\tCod. rastreio: $rastreio.
\n\n
Caso a situação da sua impressão for: Erro ou pendente, você deverá submeter novamente o arquivo para impressão.
\n\n
Qualquer dúvida e/ou esclarecimento, nos contate.\n\n
\t\t Equipe SICP - Pitágoras Contagem.";

enviaemail($nome,$email,$Mensagem);




$sql="UPDATE uploads SET status='$status', observacao='$observacao', data_processamento='$dataAtual', status='$status'  where rastreio= '$rastreio'";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

$hostname=$_SERVER['SERVER_NAME'];
header("Location:http://$hostname/uploads/processamento/index.php");
exit;

?>