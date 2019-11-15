<?php
ob_start();
session_start();

	include_once ("funcoes.php");
	include_once ("conexao_banco.php");

$email = $_SESSION["email"];

$senha = $_POST['senha_atual'];
$senha_nova = $_POST['senha_nova'];
$confirme_senha = $_POST['confirme_senha'];

$sql=mysql_query("select pass from users where login='$email' ");
$row= mysql_fetch_array($sql);
$senha_banco = $row['pass'];

if(($senha_nova=="") && ($confirme_senha=="") && ($senha_banco==""))
{
echo"<script>alert('Os campos das senhas não podem ser Nulos!');
window.location='index.php?ver=alterar_senha.php';
</script>";
return false;
}
else
{
if(($senha != $senha_banco) && ($senha_nova != $confirme_senha))
{
echo"<script>alert('Senhas Digitadas não conhecidem!');
window.location='index.php?ver=alterar_senha.php';
</script>";
}
else
{
if($result=mysql_query("update users set pass='$confirme_senha' where login='$email'"))
{
echo"<script>alert('Senha Alterada com Sucesso!');
window.location='index.php?ver=conta.php';
</script>";
}
}
}
?>
