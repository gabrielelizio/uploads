<?php 


include_once ("../lib/verifica-login.php");
include_once ("../variables_global.php");

if(isset($_GET['excluir'])){

    $sql = "SELECT * FROM users";
    $resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

    while($linha = mysql_fetch_array($resultado)){

        if($linha['id'] == $_GET['excluir']){

            $id = $linha['id'];   
        }

        
    }

     $sql= "DELETE FROM users WHERE id = '$id'";
     $resultado=conecta($maquina,$usuario,$senha,$banco,$sql);

    header('Location: index.php?sucesso2'); 

    exit();
}



?>