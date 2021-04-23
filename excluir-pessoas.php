<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Cadastros\Pessoa;

	//VALIDAÇÃO DO ID
	if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
		header('location: pessoas.php?status=error');
		exit;
	}

	//CONSULTA A PESSOA
	$obPessoa = Pessoa::getPessoa($_GET['id']);

	//VALIDAÇÃO DA PESSOA
	if(!$obPessoa instanceof Pessoa){
		header('location: pessoas.php?status=error');
		exit;
	}

	//VALIDAÇÃO DO POST
	if(isset($_POST['nome'],$_POST['cpf'],$_POST['dtnasc'],$_POST['logradouro'],$_POST['numero'],$_POST['bairro'],$_POST['cidade'],$_POST['uf'],$_POST['status'])) {

		$obPessoa->nome             = $_POST['nome'];
		$obPessoa->cpf 	            = intval(str_replace('-','',str_replace('.','',$_POST['cpf'])));
		$obPessoa->data_nascimento  = date('Y-m-d',strtotime(str_replace('/','-',$_POST['dtnasc'])));
		$obPessoa->logradouro       = $_POST['logradouro'];
		$obPessoa->numero 	        = $_POST['numero'];
		$obPessoa->bairro 	   	    = $_POST['bairro'];
		$obPessoa->cidade 	        = $_POST['cidade'];
		$obPessoa->uf 	            = strtoupper($_POST['uf']);
		$obPessoa->status 			= strtoupper($_POST['status']);
		$obPessoa->atualizar();
		
		header('location: pessoas.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/confirmar-exclusao.php';
	include __DIR__.'/includes/footer.php';