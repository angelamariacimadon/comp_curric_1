<?php
class HelloController extends AppController{
	

	//action
	//hello/index
	public function index(){
	$nomeCompleto = "Angela Maria";
	//enviando o conteudo da variavel para a view
	$this->set('nome', $nomeCompleto);

	}

	public function sobremim(){

	}
	public function contato(){

	}
	public function teste(){
	
	}
}