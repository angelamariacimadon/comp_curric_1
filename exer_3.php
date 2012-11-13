

<!DOCTYPE html> <!--identificar se é html-->

<html> <!--//abre a primeira tag -->
	<head> <!--//cabeça do documento-->
			<meta charset ="UTF-8" /> <!--faz o acento nas letras-->
		<title></title><!--//titulo que ira ter na pagina-->
		
		</title>
	</head> 
	<body>  <!--//corpo do documento-->
		
<div id = "conteudo"> 
	<?php
	$nome1 = "Angela";
	$nome2 = "joana";
	$nome3 = "pai";
	$sexo1 = "feminino";
	$sexo2 = "feminino";
	$sexo3 = "masculino";
	
	
	?>
	<p><?php echo $nome1. " - ". $nome2. " - ". $nome3. " - " ?></p>
	<p><?php echo $sexo1. " - ". $sexo2. " - ". $sexo3. " - " ?></p>
	<?php
	
	if($sexo1 == "feminino" && $sexo2 == "feminino" && $sexo3 == "feminino"){
		echo "predominante feminino";
	}
		else if($sexo1 == "masculino" && $sexo2 == "masculino" && $sexo3 == "masculino"){
			echo "predominante masculino";
		}
		
	
	?>
		
	</div>
	
		
	</body>
	</html>
	
	<!--1.	2.	Depois da tag <h1> criar uma div #conteudo e nela adicionar o seguinte código PHP: 
 $nome1 = “Fulano”;
 $nome2 = “Fulana”;
 $nome3 = “Ciclano”;
 $sexo1 = “M”;
 $sexo2 = “F”;
 $sexo3 = “M”;
 a) Concatenar os nomes e imprimir numa tag <p>, e mostrar qual sexo predominante na equipe. Exemplo: 

Se o $sexo1 for igual a M, e $sexo2 for igual a M e $sexo3 for igual a M então mostrar uma mensagem dizendo que a equipe é formada por meninos;

Se o $sexo1 for igual a F, e $sexo2 for igual a F e $sexo3 for igual a F então mostrar uma mensagem dizendo que a equipe é formada por meninas;

 -->
	

	
	
	
	
	
	

	</body>
</html>
	