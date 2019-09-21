<?php


include_once ("../lib/verifica-login.php");
include_once ("../variables_global.php");

if(isset($_GET['excluir'])){

	$sql = "SELECT * FROM uploads";
	$resultado=conecta($maquina,$usuario,$senha,$banco,$sql);


	if(mysql_num_rows($resultado) <= 0){
		header('Location: index.php?noexcluir');
	}

	else {

		while($linha = mysql_fetch_array($resultado)){

				if($linha['id'] == $_GET['excluir']){

						$id = $linha['id'];
				}

			}

		 $sql= "DELETE FROM uploads";
		 $resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

		header('Location: index.php?sucesso');

		exit();
	}

}

?>
