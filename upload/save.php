<?php
ob_start();
include_once("../lib/verifica-login.php");
include_once ("../lib/conexao_banco.php");
include_once ("../lib/funcoes.php");
include_once("../lib/emailGoDaddy.php");

function clearId($id){
$LetraProibi = Array(" ",",","'","\"","&","|","!","#","$","¨","*","(",")","`","´","<",">",";","=","+","§","{","}","[","]","^","~","?","%");
$special = Array('Á','È','ô','Ç','á','è','Ò','ç','Â','Ë','ò','â','ë','Ø','Ñ','À','Ð','ø','ñ','à','ð','Õ','Å','õ','Ý','å','Í','Ö','ý','Ã','í','ö','ã',
	'Î','Ä','î','Ú','ä','Ì','ú','Æ','ì','Û','æ','Ï','û','ï','Ù','®','É','ù','©','é','Ó','Ü','Þ','Ê','ó','ü','þ','ê','Ô','ß','‘','’','‚','“','”','„');
$clearspc = Array('a','e','o','c','a','e','o','c','a','e','o','a','e','o','n','a','d','o','n','a','o','o','a','o','y','a','i','o','y','a','i','o','a',
	'i','a','i','u','a','i','u','a','i','u','a','i','u','i','u','','e','u','c','e','o','u','p','e','o','u','b','e','o','b','','','','','','');
$newId = str_replace($special, $clearspc, $id);
$newId = str_replace($LetraProibi, "", trim($newId));
return strtolower($newId);
}
/*
echo "<pre>";
print_r($_FILES);
echo "</pre>";
$tam = count($_FILES['arquivo']);
echo "$tam";
//echo $_FILES['arquivo']['name'][1];
for ($i=0;$i<=$tam;$i++)
{
echo $_FILES['arquivo']['name'][$i];
echo "<br>";
}
//$uploadarq = $_FILES['arquivo'];
//print_r($uploadarq);
exit;
*/
$id_prof = $_SESSION["id"];
$nome = htmlspecialchars($_REQUEST['nome']);
$email = htmlspecialchars($_REQUEST['email']);
$disciplina = htmlspecialchars($_REQUEST['disciplina']);
$telefone = htmlspecialchars($_REQUEST['telefone']);
$qtdecopias  = htmlspecialchars($_REQUEST['qtdecopias']);
$proposito  = htmlspecialchars($_REQUEST['proposito']);
$codturmas  = htmlspecialchars($_REQUEST['codturmas']);
$dia_semana = htmlspecialchars($_REQUEST['dia_semana']);
$curso  = $_REQUEST['curso'];
$newcurso=$curso[0];
for($i = 1; $i < count($curso); $i++)
{
$newcurso = $newcurso.", ".$curso[$i];
}
$curso=$newcurso;
date_default_timezone_set('America/Sao_Paulo');
$datahora=date("Y-m-d H:i:s");
$data=date("Y-m-d");
$rastreio = md5("$datahora");
/*
if (!file_exists("arquivos/$nome")) {
mkdir("arquivos/$nome", 0777, true);
}
*/
////////////// UPLOPAD DO ARQUIVO
// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = "arquivos/";
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
// Array com as extensões permitidas
$_UP['extensoes'] = array('pdf', 'csv', 'slk');
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = true;
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

$tam = count($_FILES['arquivo']);
for ($i=0;$i<$tam;$i++)
{
$rastreio = md5("$datahora+$i");

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if (@$_FILES['arquivo']['error'][$i] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error'][$i]]);
exit; // Para a execução do script
}

// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

// Faz a verificação da extensão do arquivo
//		$extensao = @strtolower(end(explode('.', $_FILES['arquivo']['name'][$i])));
//		if (array_search($extensao, $_UP['extensoes']) === false) {
//		echo "Por favor, envie arquivos com os seguintes formatos: pdf";
//		}

// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size'][$i]) {
echo "O arquivo enviado é muito grande, envie arquivos de ate 2Mb.";
}

// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
@$nomenovo = clearId($_FILES['arquivo']['name'][$i]);
$timestamp=time();
@$nome_final = "$nome_$timestamp"."_$nomenovo";
$path_arq = "arquivos/$nome_final";
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['arquivo']['name'][$i];
$path_arq = "arquivos/$nome_final";
}

// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], $_UP['pasta'] . $nome_final))
{
$codturmas = $codturmas;
$status="Pendente";
$sql = "INSERT INTO `systemsauer`.`uploads` (`id_prof`, `nome`, `email`, `telefone`, `cursos`, `disciplina`, `qtdecopias`, `patharq`, `proposito`, `rastreio`, `data_envio`, `status`, `codigos_turmas`,`dia_semana`)
VALUES ('$id_prof', '$nome', '$email', '$telefone', '$curso', '$disciplina', '$qtdecopias', '$path_arq', '$proposito', '$rastreio', '$datahora', '$status', '$codturmas','$dia_semana');";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

$assunto="Upload para Impressão - Enviado para processamento";
$Mensagem="Prezado $nome,\n\n Segue abaixo o status do processamento do arquivo enviado para impressão:\n
\tData do processamento: $data_envio.\n\tSituação da Inpressão: $status.\n\tQuantidade de Cópias: $qtdecopias. \n\tDisciplina $disciplina. \n\tCod. rastreio: $rastreio.
\n\n
Qualquer dúvida e/ou esclarecimento, nos contate.\n\n
\t\t Equipe SICP - Pitágoras Contagem.";
enviaemail($nome,$email,$Mensagem,$assunto);
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
//	echo "Não foi possível enviar o arquivo, tente novamente";
//	exit;
}

}
////////////// FIM DO UPLOPAD DO ARQUIVO
}//end for
$hostname=$_SERVER['SERVER_NAME'];
@header("Location:http://$hostname/uploads/upload/confirmacao.php?nome=$nome&email=$email&curso=$curso&disciplina=$disciplina&qtdecopias=$qtdecopias&path_arq=$path_arq&proposito=$proposito&rastreio=$rastreio&datahora=$datahora&dia_semana=$dia_semana");
exit;
?>
