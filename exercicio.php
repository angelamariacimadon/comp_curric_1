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
	<!-- FIM DO EXERCICIO  -->
	
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
	<!-- FIM DO EXERCICIO  -->
	
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
	<!-- FIM DO EXERCICIO -->
	
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
		
		
	?>
	<!-- FIM DO EXERCICIO 4 -->
	
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

<!-- 7.	Descrever a sua funcionalidade e fazer exemplos das seguintes funções do PHP:
a) array():  Arrays servem para armazenar, gerenciar, operar sobre um conjunto de variáveis.
Ex: 
$fruta = array('banana', 'tomate', 'mamão');

b) trim():  é responsável por remover tais sobras de string tanto no início como no fim.
Ex: 
<?php
$var1 = "     String com sobras";
echo (trim($var1));
?>

c) substr():  serve para obter uma substring
Ex: <?php
$substr1 = substr($string, 4);
$substr2 = substr($string, 4, 8);
echo ("Substring 1 (sem delimitador): $substr1") ;
?>

d) strtolower():  a função serve para converter todos os caracteres em maiúsculos ou minúsculos.
Ex:
<Php? 
$str  =  "Angela" ; 
$str  =  strtolower ( $str ); 
impressão  str$;  / / Maria 
?>
e) strtoupper():  retorna uma string com todos os caracteres convertidos em maiúsculos.
Ex:  
<Php? 
$str  =  "Angela," ; 
$str  =  strtoupper ( $str ); 
impressão  str$ ;  / / Maria
?>

f) ucfirst(): Converte parágrafo maiúscula do primeiro caracter
Ex: 
<Php? 
$foo  =  'angela!' ; 
$foo  =  ucfirst( $foo );  
echo $foo;            !


g) ucwords(): Converte o parágrafo maiúsculo o primeiro caracetre de casa palavra
Ex:
<Php? 
$foo  =  'Olá mundo!' ; 
$foo  =  ucwords ( $foo );   
h) explode():  serve para dividir uma string em um vetor ou array de strings
Ex: <?php
$nome_arquivo = "texto.txt";
$arquivo = explode('.', $nome_arquivo);
?>

i) var_dump(): 


j) implode(): junta os índices de um vetor ou array em uma string única


k) htmlspecialchars()
l) join()
m) isset()
n) strlen()
o) is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric()
p) getdate()
q) empty()
r) strip_tags()
s) max(), min()
t) abs()
u) ceil(), floor(), round()
v) rand()
w) sqrt()
x) str_replace()
y) count()
z) htmlentities()
todos os caracteres que tem caracteres HTML
<?php
function unhtmlentities ($string)
{
    $trans_tbl = get_html_translation_table (HTML_ENTITIES);
    $trans_tbl = array_flip ($trans_tbl);
    return strtr ($string, $trans_tbl);
}
?>



 -->


	
	
	
	<!-- coverttendo string para inteiro ? 
	
		<Php 
$ a  =  1234 ;  / / numero decimal 
$ a  = - 123 ;  / / um numero Negativo 
$ a  =  0123 ;  / / numero octal (Equivalente a 83 los decimal) 
$ a  =  0x1A ;  hexadecimal / / NUMERO (Equivalente de 26 decimal em) 
?> -->
		<!--<Php
	$a= 122; 
	$123 = a;
	
	?>
	
	<php
	<!-- -->
	
<!--<?php 
$a = 122; // numero decimal
?>
-->
<?php
$string = "joão, maria, josé, pedro";
$array  = explode(',', $string);
echo "$array";
?>



		
		
	?>
	
		
</body>
</html>

