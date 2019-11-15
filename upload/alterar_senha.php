<?php


include_once ("../lib/verifica-login.php");
include_once ("../variables_global.php");


$senha_atual = md5($_POST['senha_atual']);
$senha_nova = md5( $_POST['senha_nova']);
$confirme_senha = md5($_POST['confirme_senha']);



$sql= "select pass from users where id='$idUpload;' ";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
$row= mysql_fetch_array($resultado);
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
if(($senha_atual != $senha_banco) && ($senha_nova != $confirme_senha))
{
echo"<script>alert('Senhas Digitadas não conhecidem!');
window.location='index.php?ver=alterar_senha.php';
</script>";
}
else
{
if($sql= "update users set pass='$confirme_senha' where id='$idUpload'")
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);
{
echo"<script>alert('Senha Alterada com Sucesso!');
window.location='logout.php';
</script>";
}
}
}
?>