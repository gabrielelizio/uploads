<?
  session_start();
  if(!isset($_SESSION["id"])){
    header("Location: login.php");
  }
  ##---------------------------------------------------
  ##  Envio de Emails pelo SMTP Aut�nticado usando PEAR
  ##---------------------------------------------------
  # Mais detalhes sobre o PEAR: 
  #   http://pear.php.net/
  #
  # Mais detalhes sobre o PEAR Mail:
  #   http://pear.php.net/manual/en/package.mail.mail-mime.php
  ##---------------------------------------------------
  
  # Faz o include do PEAR Mail e do Mime.
  include ("Mail.php");
  include ("Mail/mime.php");
  
  # Vari�vel de teste de upload
  $up=0;

  # E-mail de destino. Caso seja mais de um destino, crie um array de e-mails.
  # *OBRIGAT�RIO*
  $recipients = 'destino@email.com.br';

  # Cabe�alho do e-mail.
  $headers = 
    array (
      'From'    => 'suaconta@seuwebsite.com', # O 'From' � *OBRIGAT�RIO*.
      'To'      => $recipients,
      'Subject' => 'Mensagem enviada do site'
    );

  # Utilize esta op��o caso deseje definir o e-mail de resposta
  # $headers['Reply-To'] = 'EMailDeResposta@DominioDeResposta.com';

  # Utilize esta op��o caso deseje definir o e-mail de retorno em caso de erro de envio
  # $headers['Errors-To'] = 'EMailDeRerornoDeERRO@DominioDeretornoDeErro.com';

  # Utilize esta op��o caso deseje definir a prioridade do e-mail
  # $headers['X-Priority'] = '3'; # 1 UrgentMessage, 3 Normal  

  # Define o tipo de final de linha.
  $crlf = "\r\n";

  # Corpo da Mensagem e texto e em HTML
  $text = "Nome: ".$_POST['nome'];
  $html = "<HTML><BODY><font color=blue>$text</font></BODY></HTML>";


  # Instancia a classe Mail_mime
  $mime = new Mail_mime($crlf);

  # Coloca o HTML no email
  $mime->setHTMLBody($html);

  # Efetua o upload do arquivo
for( $i = 0; $i < count($_FILES['anexo']['name']); $i++ ){

  if (is_uploaded_file($_FILES['anexo']['tmp_name'][$i])) {
	  $caminho[$i] = "/home/nomedeusuarioFTP/www/form/tmp/".$_FILES['anexo']['name'][$i];
	  
	  # grava o $arquivo no $caminho especificado
	  if(copy($_FILES['anexo']['tmp_name'][$i],$caminho[$i])) {
	  	$mime->addAttachment($caminho[$i]);
	  	unlink($caminho[$i]);
	  	echo "O arquivo foi transferido!<br>";
	}
	  }else{
		  echo "<h1>O arquivo n�o foi transferido!</h1>";
		  echo "<h2><font color='red'>Caminho ou nome de arquivo Inv�lido</font></h2>";
		  }
}

##  # Anexa um arquivo ao email.
  
  # Procesa todas as informa��es.
  $body = $mime->get();
  $headers = $mime->headers($headers);

  # Par�metros para o SMTP. *OBRIGAT�RIO*
  $params = 
    array (
      'auth' => true, # Define que o SMTP requer autentica��o.
      'host' => 'smtp.seuwebsite.com', # Servidor SMTP
      'username' => 'suaconta=seuwebsite.com', # Usu�rio do SMTP
      'password' => 'suasenha' # Senha do seu MailBox.
    );
    
  # Define o m�todo de envio
  $mail = new Mail();
  $mail_object = $mail->factory('smtp', $params);

  # Envia o email. Se n�o ocorrer erro, retorna TRUE caso contr�rio, retorna um
  # objeto PEAR_Error. Para ler a mensagem de erro, use o m�todo 'getMessage()'.
  $result = $mail_object->send($recipients, $headers, $body);
  if (PEAR::IsError($result))
  {
    echo "ERRO ao tentar enviar o email. (" . $result->getMessage(). ")";
  }   
  else
  {
    echo "Email enviado com sucesso!";
       
  }   
?>			
