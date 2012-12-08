

<?php
    $title="Site.com";
	$subtitle="este é um site em PHP";
?>

<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title. "-". $subtitle; ?></title>
</head>
<body>
	<!-- EXERCICIO 1 -->
	<div id="rodape">
		<p>&reg copyright Site.com – <?php echo date("Y") ?></p>
	</div>
	
	
	<!-- EXERCICIO 2-->
	<h1>
		<div id="conteudo">
		<?php 
		$nome1="Madri"; $nome2="Angela"; $nome3="Maria"; $sexo1="Masculino"; $sexo2="Feminino"; $sexo3="Masculino"; 
		?>
		
		<p><?php echo $nome1. ", ". $nome2. " e ". $nome3;?></p>		
		
		<?php
		if($sexo1 == "Masculino" && $sexo2 == "Mmasculino" && $sexo == "Masculino"){
			echo "A equipe é formada por meninos";
		} else if($sexo1 == "Feminino" && $sexo2 == "Feminino" & $sexo == "Feminino"){
			echo "A equipe é formada por meninas";
		} else {
			echo "A equipe é mista";
		}
		?>
		</div>
	</h1>

	
	<!-- EXERCICIO 3 -->
	<?php 
	switch ($qt="1") {
		case '0':
			echo "Não possui nenhum produto cadastrado";
			break;
		case '1':
			echo "Você possui um produto cadastrado";
			break;
		case '1,2,3':
			echo "Você possui vários produtos cadastrados";
			break;
		default:
			echo "Cadastro inválido, tente novamente";
			break;
	}
	?>
	
	
	<!--EXERCICIO 4 -->
	<!-- A -->
	<?php
	for ($x=0; $x<=25; $x=$x+1) {
	   echo '<p>Lactobacilos vivos também possuem sentimentos</p>';
	}
	?>
	
	<!-- B  Escrever um algoritmo que receba qualquer valor e mostre os 
		valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3"; -->
	<?php
	$valor = 5;
	for($x=0; $x<=$valor; $x++){
		echo "$x <br/>";
	}
	?>
	
	<!-- C  capturar dois valores em variáveis e mostrar os números entre 
		eles. Ex: 5 e 10, imprimir: "6 7 8 9"; -->
	<?php 
	$valor1 = 5;
	$valor2 = 10;
	for($valor1; $valor1<=$valor2; $valor1++){
		echo "<p>$valor1 <br/></p>";
	}
	?>
	
	<!-- D Escrever um algoritmo que multiplique os números utilizando apenas o 
		operador +, ex: (3 * 5) = 5 + 5 + 5 -->
		<?php 
	$v1 = 4;
	$v2 = 5;
	$var = 2;
	for ($i = 0; $i < $v1; $i++) {
	echo $v2 . " * ";
	$var = $var + $v2;
	}
	echo "=" . $var;
						
		
		
	?>
	
	<!--  EXERCICIO 5 -->

	<?php
				function multiplica($var_1, $var_2) {

					$var = 0;
					for ($i = 0; $i < $var_1; $i++) {
						if($i == $var_1 - 1){
							echo $var_2 . " ";
							$var = $var + $var_2;
						}
						if($i < $var_1 - 1){
							echo $var_2 . "+";
							$var = $var + $var_2;
						}
					}
					echo "=" . $var;
				}

						multiplica(3, 5);
			?>
	
	
	
	<!-- 6.	Fazer uma função chamada imprime() que faça o seguinte:
a) receba um parâmetro
b) retorne uma string que deverá estar dentro da tag <p>. Ex:
“<p> $parametro</p>” -->
	<?php	
	function imprime($param1){
		echo "<p>$param1</p>";
	}
    /*string strtoupper (string imprime)*/
    $nome = "angela";
	imprime($nome);   
	
?>




<!-- 7.	Descrever a sua funcionalidade e fazer exemplos das seguintes funções do PHP:-->

<h2> a) array() </h2>
    <p>São variaveis que servem para guarda na memoria, valores diferentes. Ex:</p>
    
    <?php
    $lista = array('Angela', 'Maria', 'Mariana');

    for ($i = 0; $i < 3; $i++) {
      echo 'Posição: ' . $i . ' Nome: ' . $lista[$i] . '<br/>';
    }
    ?>
    <h2>b) trim()</h2>
    <p> retira espaços que tem  no inicio e no final de uma string. Ex:</p>
    <?php
    $var1 = "     String com espaços     ";
      echo (trim($var1));
    ?>
    
    <h2>c) substr()</h2>
    <p> Retorna partes de uma String. Ex:</p>
    <?php
    echo substr('abcdef', 1);     // bcdef
    echo "</br>";
    echo substr('abcdef', 1, 3);  // bcd
    echo "</br>";
    echo substr('abcdef', 0, 4);  // abcd
    echo "</br>";
    echo substr('abcdef', 0, 8);  // abcdef
    echo "</br>";
    echo substr('abcdef', -1, 1); // f
    ?>
    <h2>d) strtolower()</h2>
    <p> Converte toda a String em minuscula. Ex:</p>
    <?php
    echo strtolower("ANGELA.");
    ?>
    
    <h2>e) strtoupper()</h2>
    <p> convete toda a String em minusculo. Ex:</p>
    <?php
    echo strtoupper("ANGELA.");
    ?>
    
    
    <h2>f) ucfirst()</h2>
    <p> Converte  para maiúscula o primeiro caractere de uma string. Ex:</p>
    <?php
    echo ucfirst("ANGELA");
    ?>
    
    <h2>g) ucwords()</h2>
    <p>Converte para maiúsculas o primeiro caractere de cada palavra. Ex:</p>
    <?php
    echo ucwords("ANGELA");
    ?>
    
    <h2>h) explode()</h2>
    <p>Divide uma string em strings. Ex:</p>
    <?php
      $string = "teste, trabalho, teste";
      $array = explode(',', $string);
      print_r($array);
      
    ?>

    
    <h2>i) var_dump()</h2>
    <p>Mostra informações sobre variável. Ex:</p>
    
    <?php
    $var1 = "     String com espaços     ";
      var_dump($var1);
    ?>
    
    
    <h2>j) implode()</h2>
    <p>Junta elementos de uma matriz em string. Ex:</p>
    <?php
    $arr = array('Hello','World!','Beautiful','Day!');
    echo implode(" ",$arr);
    ?>
    
    <h2>k) htmlspecialchars()</h2>
    <p> Converte caracteres especiais para a realidade HTML. Ex:</p>
    <?php
    $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
    echo $new;    
    ?>
    
    
    <h2>l) join()</h2>
    <p>É um sinonimo de Implode() Ex:</p>
    <?php
    $arr = array('Hello','World!','Beautiful','Day!');
    echo join(" ",$arr);
    ?>
    
    <h2>m) isset()</h2>
    <p>Verifica se uma constante já foi definida, retornando true ou false. Ex:</p>
    <?php
    $StringSet = 'teste';
    $StringNula;
 
    if (isset($StringSet))
    echo "TEM DATA";
     else {
    echo "NAO TEM DATA";
    }
    echo "</br>";
    if (isset($StringNula))
    echo "TEM DATA";
     else {
    echo "NAO TEM DATA";
    }
      
      ?>
    
    <h2>n) strlen()</h2>
    <p>retorna o comprimento da string fornecida. Ex:</p>
    <?php
    $str = 'abcdsswdasf';
    echo strlen($str); // 11
        echo "</br>";
    $str = 'd aassab cd ';
    echo strlen($str); // 12
    ?>
    
    <h2>o) is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric()</h2>
    <p>Informa se a váriavel é: float, int, array, string, boolean ou numerico. Ex:</p>
    <?php
    $var_name=127.55;  
    if (is_float($var_name)) 
    echo 'This is a float value.<br>';  
    
    $var_name=1;  
    if (is_int($var_name)) 
    echo 'This is a Integer value.<br>'; 
    
    $var_name= array(23.3, 56, 6);  
    if (is_array($var_name)) 
    echo 'This is a ARRAY value.<br>';
    
    $var_name= "TESTE";  
    if (is_string($var_name)) 
    echo 'This is a STRING value.<br>'; 
    
    $var_name= TRUE;  
    if (is_bool($var_name)) 
    echo 'This is a boolean value.<br>'; 
    
    $var_name=12755;  
    if (is_numeric($var_name)) 
    echo 'This is a numerico value.<br>'; 
    ?>
    
    
    
    <h2>p) getdate()</h2>
    <p>Retorna informações data/hora. Ex:</p>
    <?php
      $today = getdate(); 
      print_r($today);
    ?>
    
    <h2>q) empty()</h2>
    <p> Informa se a variável é vazia. Ex:</p>
    <?php 
    $var = 0;
    if (isset($var)) {
        echo '$var está "setado" apesar de vazio';
    }
    ?>
    
    <h2>r) strip_tags()</h2>
    <p> Retorna uma string retirando todas as tags HTML e PHP de string. Ex:</p>
    <?php
      $text = '<p>TESTE TESTE TESTE.</p><!-- Comment --> <a href="#fragment">Other text</a>';
      echo strip_tags($text);
      echo "\n";

      echo strip_tags($text, '<p><a>');
    ?>
    
    <h2>s) max(), min()</h2>
  <p>Se o primeiro e único parâmetro é um array, max() retorna o maior valor do array. Se no mínimo dois parâmetros são fornecidos, max() retornará o maior desses valores.</p>
  <?php
  echo max(1, 3, 5, 6, 7);
  // 7
  echo "<br>";
  echo max(array(2, 4, 5));
  // 5
  echo "<br>";

  echo max(0, 'hello');
  echo "<br>";
  // 0
  echo max('hello', 0);
  echo "<br>";
  
  echo max(-1, 'hello');
  echo "<br>";
  

  
  $val = max(array(2, 4, 8), array(2, 5, 7));
  
  $val = max('string', array(2, 5, 7), 42);
  // array(2, 5, 7)
  ?>

  <h2>t) abs()</h2>
  <p>Retorna o valor absoluto do numero.</p>

  <h2>u) ceil(), floor(), round()</h2>
  <p>Ceil: Retorna o próximo maior valor inteiro arredondando para cima do value, se fracionário. Ex:</p>
  <?php
  echo ceil(4.3);
  // 5
  echo "<br>";
  echo ceil(9.999);
  // 10
  echo "<br>";
  echo ceil(-3.14);
  // -3
    ?>

  <p>Floor: Retorna o próximo menor valor inteiro ao se arredondar para baixo o valor indicado, se necessário. Ex:</p>
  <?php
  echo floor(4.3);
  // 4
  echo "<br>";
  echo floor(9.999);
  // 9
  echo "<br>";
  echo floor(-3.14);
  // -4
  ?>

  <p>Round: Retornar um valor arredondado de um valor definindo o numero de casas decimais. Numero de casas pode ser negativo ou zero (padrão). Ex:</p>
  <?php
  echo round(3.4);
  // 3
  echo "<br>";
  echo round(3.5);
  // 4
  echo "<br>";
  echo round(3.6);
  // 4
  echo "<br>";
  echo round(3.6, 0);
  // 4
  echo "<br>";
  echo round(1.95583, 2);
  // 1.96
  echo "<br>";
  echo round(1241757, -3);
  // 1242000
  echo "<br>";
  echo round(5.045, 2);
  // 5.05
  echo "<br>";
  echo round(5.055, 2);
  // 5.06
  ?>

  <h2>v) rand()</h2>
  <p>Se chamado sem os parâmetros opcionais min e max, rand() retornará um pseudo inteiro randômico entre 0 e getrandmax(). Se você precisa de um número aleatório entre 5 e 15 (inclusive), por exemplo, utilize rand (5, 15).</p>
  <?php
  echo rand() . "\n";
  echo "<br>";
  echo rand() . "\n";
  
  echo "<br>";
  echo rand(5, 15);
  ?>

  <h2>w) sqrt()</h2>
  <p>Retorna a raiz quadrada de um valor.</p>
  <?php
  // Precisão depende de sua diretiva precision
  echo sqrt(9);
  // 3
  echo "<br>";
  echo sqrt(10);
  // 3.16227766 ...
  ?>

  <h2>x) str_replace()</h2>
  <p>Esta função retorna uma string ou um array com todas as ocorrências de search em subject substituídas com o valor dado para replace.</p>
  <?php
  // Fornece: <body text='black'>
  $bodytag = str_replace("%body%", "black", "<body text='%body%'>");

  
  $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
  $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

  
  $frase = "você comeria frutas, vegetais, e fibra todos os dias.";
  $saudavel = array("frutas", "vegetais", "fibra");
  $saboroso = array("pizza", "cerveja", "sorvete");

  $novafrase = str_replace($saudavel, $saboroso, $frase);

  
  $str = str_replace("ll", "", "good golly miss molly!", $count);
  echo $count;
  // 2

 
  $str = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
  $order = array("\r\n", "\n", "\r");
  $replace = '<br />';
 

  $newstr = str_replace($order, $replace, $str);

  echo "<br>";
  
  $letters = array('a', 'p');
  $fruit = array('apple', 'pear');
  $text = 'a p';
  $output = str_replace($letters, $fruit, $text);
  echo $output;
  ?>

  <h2>y) count()</h2>
  <p>
  Conta os elementos de um array, ou propriedades em um objeto.
  </p>
  <?php
  $comidas = array('frutas' => array('laranja', 'banana', 'maçã'), 'veggie' => array('cenoura', 'couve', 'ervilha'));
 
  echo count($comidas, COUNT_RECURSIVE);
  
  echo count($comidas);
 
  ?>

  <h2>z) htmlentities()</h2>
  <p>
  Converte todos os caracteres aplicáveis em entidades html. Ex:
  </p>
  <?php
  $str = "Uma 'citação' é <b>negrito</b>";
  echo htmlentities($str);
  echo "<br>";
  echo htmlentities($str, ENT_QUOTES);
  ?>
  
   <!-- FIM DO EXERCICIO  -->
	
	<!-- 8.	Utilize o PHP para efetuar as seguintes conversões:  -->

<!--a) de string para integer-->
	$string = '1234';
	$inteiro = (int)$string;
	echo var_dump($inteiro);
	echo "</br>";

		<!--b) de integer para string-->
		$inteiro = (string)666;
		echo var_dump($inteiro);
		echo "</br>";

			<!--c) de string para array-->
			$string = "teste, uma, fase";
			$array = explode(',', $string);
			print_r($array);
			echo "<br>";

				<!--d) de array para string-->
				$list = array("teste", "materia");
				$string = implode(' ', $list);
				echo $string;
				echo "</br>";

					<!--e) de integer para float-->
					$num = (float)219;
					echo var_dump($num);
					echo "</br>";

						<!--f) de float para string em formato de dinheiro: R$ 23,45-->
						$valor = 38.79;
						echo "R$ " . number_format($valor, 2, ',', '.');
				
					
</body>
</html>

