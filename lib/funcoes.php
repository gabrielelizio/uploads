<?php
################ Fun��o para conectar ao banco de dados Local ##################
function conecta( $maquina , $usuario, $senha, $banco, $sql )
{
	@header("Content-type: text/html; charset=utf-8");

	$conexao = mysql_connect($maquina,$usuario,$senha) or die("<center><h1>Falha na conexao com o banco de dados</h1></center>"); 
	//$charset=mysql_set_charset($conexao,"utf8");
	$db = mysql_select_db($banco,$conexao) or die("<center><h1>Falha na sele��o do banco</h1></center>");
	$resultado = mysql_query($sql,$conexao) or die("<center><h1>Imposs�vel realizar query.</h1></center>");
	mysql_close($conexao);
	return $resultado;
}



function diferenca_data($data_envio)
{	
	date_default_timezone_set('America/Sao_Paulo');
	$dataAtual = date("Y-m-d G:i:s");
	$datatime1 = new DateTime($data_envio);
	$datatime2 = new DateTime($dataAtual);
	$diff = $datatime1->diff($datatime2);
	$horas = $diff->h + ($diff->days * 24);
	return $horas;
}



############################### Data e Hora ##################################
//$data = date("d-m-Y");
//$data = "06/06/2013";

## Arruma data do formato do log do unix de Y-m-d para d-m-Y
function arrumadata($str)
{
	list($ano,$mes,$dia) = explode("-",$str);
	return "$dia-$mes-$ano";
}

## Arruma data do formato do phpMyAdmin de d/m/Y para Y/m/d
function converte_data($DATA)
{
	$divide = explode("/",$DATA);
	$dia = $divide[0];
	$mes = $divide[1];
	$ano = $divide[2];
	$data_nova = "$ano-$mes-$dia";
	return $data_nova;
}

function converteString($string) {

    // matriz de entrada
    $what = array( '�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','�','�' );

    // matriz de sa�da
    $by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_' );

    // devolver a string
    return str_replace($what, $by, $string);


 /*
	$pessoa = 'Jo�o dos Santos Videira';

$pastaPessoal = sanitizeString($pessoa);

// resultado
echo $pastaPessoal; // Joao_dos_Santos_Videira

*/

}


function limpaCPF_CNPJ($valor){
 $valor = trim($valor);
 $valor = str_replace(".", "", $valor);
 $valor = str_replace(",", "", $valor);
 $valor = str_replace("-", "", $valor);
 $valor = str_replace("/", "", $valor);
 return $valor;
}




## Envia Email
function email($email,$assunto,$mensagem)
{
	mail($email, $assunto, $mensagem);
	
}


function logs ( $COD_USUARIOS_SISTEMA , $TIPO_LOGS , $ACAO ,$IP )
{
 include ("conexao_banco.php");

date_default_timezone_set('America/Sao_Paulo');
$hora=date("Y-m-d H:i:s");
$data=date("Y-m-d");

$sql = "insert into logs_2(COD_USUARIOS_SISTEMA,DATA_LOGS,HORA_LOGS,TIPO_LOGS,ACAO,IP_LOGS) 
VALUES ('$COD_USUARIOS_SISTEMA','$data','$hora','$TIPO_LOGS','$ACAO','$IP')";
$resultado = conecta($maquina,$usuario,$senha,$banco,$sql);

}



?>






