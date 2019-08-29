<?php

/*
$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem
*/

$Nome		= "Teste";
$Fone		= "31995041816";
$Emailpara		= "alesauer@gmail.com";
$Mensagem	= "Sua prova esta sendo processada";


enviaemail($Nome,$Emailpara,$Mensagem);




function enviaemail ($Nome,$Emailpara,$Mensagem)
{
// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Nome: $Nome\n\nE-mail: $Emailpara\n\n\nMensagem: $Mensagem\n";

require_once("phpmailer/class.phpmailer.php");

//define('GUSER', 'alesauer@gmail.com');	// <-- Insira aqui o seu GMail
//define('GPWD', 'GxgLTr201@');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->CharSet="UTF-8";
	$mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'a2plcpnl0790.prod.iad2.secureserver.net';	// SMTP utilizado
	$mail->Port = '465';  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = 'sicp@pitagoras.contagem.br';
	$mail->Password = 'sicpcontagem';
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}


// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
// o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer($Emailpara, 'sicp@pitagoras.contagem.br', 'Upload Avaliacao', 'Sistema Upload', $Vai)) {
    echo "<h1>Vlw</h1>" ;
	//Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;

}//end function




?>