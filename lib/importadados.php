<?php
include("conexao_banco.php");
include("funcoes.php");

/*$arq = file("../banco/cidade-site-complemento-end.txt");*/


$arq = file("../upload/complementares 04-10.csv");
$conta = count($arq);



$sqlx="delete from aluno";
$resultadox=conecta($maquina,$usuario,$senha,$banco,$sqlx);



echo "<h1>Iniciando o processo de Carga</h1><br>";



//i cmoeça de 01 para retirar o cabeçalhbo do arquivo
for ($i=1;$i<$conta;$i++)
{
$divide = explode(';', $arq[$i]);
$nome_empresa = rtrim(ltrim($divide[0]));
$cod_empresa = rtrim(ltrim($divide[1]));
$ra = rtrim(ltrim($divide[2]));
$nome_aluno = rtrim(ltrim($divide[3]));
$cpf_aluno = rtrim(ltrim($divide[4]));
$situacao_aluno = rtrim(ltrim($divide[5]));
$especialidade = rtrim(ltrim($divide[6]));
$nome_curso = rtrim(ltrim($divide[7]));
$turma = rtrim(ltrim($divide[8]));
$horas_requerida = rtrim(ltrim($divide[9]));
$horas_realizadas = rtrim(ltrim($divide[10]));


echo "$i - Cadastros do RA: $ra  <br>";

$sql = "INSERT INTO aluno (RA_Aluno,Nome_Aluno,CPF_Aluno,Curso_Aluno,ACO_Realizada_Curso,ACO_Requerida) 
VALUES ('$ra','$nome_aluno','$cpf_aluno','$nome_curso','$horas_realizadas','$horas_requerida');";
$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

}//end for



$sql1="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Engenharia Mecanica - N' WHERE  `Curso_Aluno` = 'Engenharia MecÃ¢nica - N'";
$resultado1=conecta($maquina,$usuario,$senha,$banco,$sql1);

$sql2="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'CST em Gestao Financeira - N' WHERE  `Curso_Aluno` = 'CST em GestÃ£o Financeira - N'";
$resultado2=conecta($maquina,$usuario,$senha,$banco,$sql2);

$sql3="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'CST em Logistica - M' WHERE  `Curso_Aluno` = 'CST em LogÃ­stica - M'";
$resultado3=conecta($maquina,$usuario,$senha,$banco,$sql3);

$sql4="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Engenharia Eletrica - N' WHERE  `Curso_Aluno` = 'Engenharia ElÃ©trica - N'";
$resultado4=conecta($maquina,$usuario,$senha,$banco,$sql4);

$sql5="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'CST em Gestao Comercial - N' WHERE  `Curso_Aluno` = 'CST em GestÃ£o Comercial - N'";
$resultado5=conecta($maquina,$usuario,$senha,$banco,$sql5);

$sql6="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Administracao - N' WHERE  `Curso_Aluno` = 'AdministraÃ§Ã£o - N'";
$resultado6=conecta($maquina,$usuario,$senha,$banco,$sql6);

$sql7="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'CST em Gestao de Producao Industrial - N' WHERE  `Curso_Aluno` = 'CST em GestÃ£o de ProduÃ§Ã£o Industrial - N'";
$resultado7=conecta($maquina,$usuario,$senha,$banco,$sql7);

$sql8="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'CST em Gestao de Recursos Humanos - N' WHERE  `Curso_Aluno` = 'CST em GestÃ£o de Recursos Humanos - N'";
$resultado8=conecta($maquina,$usuario,$senha,$banco,$sql8);

$sql9="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Ciencias Contabeis - N' WHERE  `Curso_Aluno` = 'CiÃªncias ContÃ¡beis - N'";
$resultado9=conecta($maquina,$usuario,$senha,$banco,$sql9);

$sql10="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Administracao - M' WHERE  `Curso_Aluno` = 'AdministraÃ§Ã£o - M'";
$resultado10=conecta($maquina,$usuario,$senha,$banco,$sql10);

$sql11="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Sistemas de Informacao - N' WHERE  `Curso_Aluno` = 'Sistemas de InformaÃ§Ã£o - N'";
$resultado11=conecta($maquina,$usuario,$senha,$banco,$sql11);

$sql12="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Engenharia Mecanica - N' WHERE  `Curso_Aluno` = 'Engenharia MecÃ¢nica - N'";
$resultado12=conecta($maquina,$usuario,$senha,$banco,$sql12);

$sql12="UPDATE `horas_complementares`.`aluno` SET `Curso_Aluno` = 'Engenharia de Produção - N' WHERE  `Curso_Aluno` = 'Engenharia de ProduÃ§Ã£o - N'";
$resultado12=conecta($maquina,$usuario,$senha,$banco,$sql12);





$sql13="UPDATE aluno SET `CPF_Aluno` = REPLACE( REPLACE( `CPF_Aluno`, '.', '' ), '-', '' )";
$resultado12=conecta($maquina,$usuario,$senha,$banco,$sql13);

?>