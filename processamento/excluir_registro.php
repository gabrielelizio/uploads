<?php 

include_once("../lib/verifica-login.php");
include_once("../variables_global.php");
include_once("../lib/funcoes.php");
include_once("../lib/conexao_banco.php");


$id_registro = $_GET['excluir'];

$sql= "DELETE FROM uploads WHERE id = '$id_registro'";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);


header('Location: index.php?sucesso2'); 


?>