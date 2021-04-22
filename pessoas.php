<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Pessoas\Pessoa;

	//VALIDAÇÃO DO POST
	if(isset($_POST['nome'],
			 $_POST['cpf'],
			 $_POST['dtnasc'],
			 $_POST['logradouro'],
			 $_POST['numero'],
			 $_POST['bairro'],
			 $_POST['cidade'],
			 $_POST['uf'])) {
		die('Cadastrar');
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/form-pessoas.php';
	include __DIR__.'/includes/footer.php';