<?php
session_name("system");
session_start();


//  $email = $_SESSION["NOME_USUARIO"];



//if(!(session_is_registered("NOME_USUARIO")))
//if(!( $_SESSION["NOME_USUARIO"]))


if(!( isset($_SESSION["login"])))
{
        
 echo "<script type='text/javascript'>
 			window.onload = function alerta()
			{
				history.back();
				alert('Area Restrita! Favor Efetuar o logon.');
			}
       </script>";


		header("Location:login.html");
                exit;
}

?>
