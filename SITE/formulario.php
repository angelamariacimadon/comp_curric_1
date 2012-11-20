<?php
//$_POST = variavel
//var_dump($_POST);
//SE for enviado um post e a variavel vazia 
//entao mostrar os dados
if(isset ($_POST["pagina"])&& $_POST["pagina"] =="contato"){
echo $_POST["nome"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["mensagem"];
} else {
	header("Location: contact.php");
	}