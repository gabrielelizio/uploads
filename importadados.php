<?php
include("lib/conexao_banco.php");
include("lib/funcoes.php");

//$pass="202cb962ac59075b964b07152d234b70";  //123
$tipoCad="1";
$phone="3112345678";

$arq = file("professores.csv");
$conta = count($arq);

$sql="delete from users";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

for ($i=0;$i<$conta;$i++)
{
  $divide = explode(';', $arq[$i]);
  $nome = rtrim(ltrim($divide[0]));
  $sobrenome = rtrim(ltrim($divide[1]));
  $email = rtrim(ltrim($divide[2]));
  $cpf = rtrim(ltrim($divide[3]));
  $pass = md5("$cpf");


  echo "###################################################################<br>";    
  echo "$i - Inserindo $nome - $cpf - $email - $pass<br>";
  $sql1="insert into users (firstname,lastname,phone,email,pass,tipoCad,cpf) values ('$nome','$sobrenome','$phone','$email','$pass','$tipoCad','$cpf')";
  $resultado1=conecta($maquina,$usuario,$senha,$banco,$sql1);   
}//end for

echo "###################################################################<br>";    
echo "Inserindo Admin User: Admin<br>";
$sql2="insert into users (firstname,lastname,phone,email,pass,tipoCad,cpf) values ('Admin','do Sistema','31995041815','alesauer@gmail.com','$pass','2','03040222687')";
$resultado2=conecta($maquina,$usuario,$senha,$banco,$sql2);   


echo "###################################################################<br>";    
echo "Inserindo SICP User: Sicp<br>";

$pass=md5("03040222687");
$sql3="insert into users (firstname,lastname,phone,email,pass,tipoCad,cpf) values ('Sicp','Pitagoras Contagem','3199504815','sicpcontagem@gmail.com','$pass','0','03040222687')";
$resultado3=conecta($maquina,$usuario,$senha,$banco,$sql3);   

$pass=md5("11057147648");
$sql4="insert into users (firstname,lastname,phone,email,pass,tipoCad,cpf) values ('Suelen','Estefani Pereira Moraes','3199504815','suelen.morais@pitagoras.com.br','$pass','0','11057147648')";
$resultado4=conecta($maquina,$usuario,$senha,$banco,$sql4);   

$pass=md5("11366785657");
$sql5="insert into users (firstname,lastname,phone,email,pass,tipoCad,cpf) values ('Adriana','Aparecida dos Reis','3199504815','adriana.rreis@pitagoras.com.br','$pass','0','11366785657')";
$resultado5=conecta($maquina,$usuario,$senha,$banco,$sql5);   

$pass=md5("12396991663");
$sql6="insert into users (firstname,lastname,phone,email,pass,tipoCad,cpf) values ('Gabriela','Alves de Jesus','3199504815','gabriela.ajesus@pitagoras.com.br','$pass','0','12396991663')";
$resultado6=conecta($maquina,$usuario,$senha,$banco,$sql6);   

$pass=md5("12156860645");
$sql7="insert into users (firstname,lastname,phone,email,pass,tipoCad,cpf) values ('Euler','Matta da Paixão Silva','3199504815','euler.matta@pitagoras.com.br','$pass','0','12156860645')";
$resultado7=conecta($maquina,$usuario,$senha,$banco,$sql7);
?>