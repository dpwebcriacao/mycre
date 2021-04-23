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
	if(isset($_POST['excluir'])) {

		$obPessoa->excluir();
		
		header('location: pessoas.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/confirmar-exclusao-pessoa.php';
	include __DIR__.'/includes/footer.php';