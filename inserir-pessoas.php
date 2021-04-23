<?php
	
	require __DIR__.'../vendor/autoload.php';

	use \Classes\Cadastros\Pessoa;

	//VALIDAÇÃO DO POST
	if(isset($_POST['nome'],$_POST['cpf'],$_POST['dtnasc'],$_POST['logradouro'],$_POST['numero'],$_POST['bairro'],$_POST['cidade'],$_POST['uf'],$_POST['status'])) {
		$obPessoas = new Pessoa;
		$obPessoas->nome             = $_POST['nome'];
		$obPessoas->cpf 	         = str_replace('-','',str_replace('.','',$_POST['cpf']));
		$obPessoas->data_nascimento  = date('Y-m-d',strtotime(str_replace('/','-',$_POST['dtnasc'])));
		$obPessoas->logradouro       = $_POST['logradouro'];
		$obPessoas->numero 	         = $_POST['numero'];
		$obPessoas->bairro 	   	     = $_POST['bairro'];
		$obPessoas->cidade 	         = $_POST['cidade'];
		$obPessoas->uf 	             = strtoupper($_POST['uf']);
		$obPessoas->status 			 = strtoupper($_POST['status']);
		$obPessoas->cadastrar();
		//echo '<pre>'; print_r($obPessoas); echo '</pre>'; exit;
		header('location: pessoas.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/form-pessoas.php';
	include __DIR__.'/includes/footer.php';