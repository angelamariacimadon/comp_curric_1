<?php
$title = "Site.com" ;
$subtitle = "este e um site em PHP";

?>	

<!DOCTYPE html> <!--identificar se é html-->

<html> <!--//abre a primeira tag -->
	<head> <!--//cabeça do documento-->
			<meta charset ="UTF-8" /> <!--faz o acento nas letras-->
		<title>
			<?php
		echo $title. " - " . $subtitle;
		
		?></title><!--//titulo que ira ter na pagina-->
		
		</title>
	</head> 
	<body>  <!--//corpo do documento-->
		
		
		
		
		
<div id = "rodape"> &reg; copyright Site.com 

	<?php
	echo date("Y");	
		
		?>
		
	</div>
	
		
	</body>
	</html>
	
	<!--1.	Criar um arquivo PHP, e fazer o seguinte:
//a) Criar a estrutura HTML
//b) no Inicio do documento, criar a variável $title = “Site.com” e $subtitle = “este é um site em PHP”;
//c) na tag <title> mostrar o seguinte texto concatenado: “Site.com – este é um site em PHP”;
//d) dentro da DIV #rodape adicionar o seguinte texto: “® copyright Site.com – 2012”, sendo que o ® deve
 utilizar o código &reg; (HTML Entities) no html e o ano, deve ser mostrado o ano atual através do PHP com a função date. -->
	

	
	
	
	
	
	

	</body>
</html>
	