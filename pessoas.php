<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Cadastros\Pessoa;

	//VALIDAÇÃO DO POST
	if(isset($_POST['nome'],$_POST['cpf'],$_POST['dtnasc'],$_POST['logradouro'],$_POST['numero'],$_POST['bairro'],$_POST['cidade'],$_POST['uf'])) {
		$obPessoas = new Pessoa;
		$obPessoas->nome             = $_POST['nome'];
		$obPessoas->cpf 	         = $_POST['cpf'];
		$obPessoas->data_nascimento  = $_POST['dtnasc'];
		$obPessoas->logradouro       = $_POST['logradouro'];
		$obPessoas->numero 	         = $_POST['numero'];
		$obPessoas->bairro 	   	     = $_POST['bairro'];
		$obPessoas->cidade 	         = $_POST['cidade'];
		$obPessoas->uf 	             = $_POST['uf'];
		$obPessoas->cadastrar();
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/form-pessoas.php';
	include __DIR__.'/includes/footer.php';