<?php
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Cadastrar Título');

	use \Classes\Cadastros\Titulo;

	$obTitulo = new Titulo;

	//VALIDAÇÃO DO POST
	if(isset($_POST['descricao'],$_POST['valor'])) {

		$obTitulo->descricao   = $_POST['descricao'];
		$obTitulo->valor 	   = $_POST['valor'];
		$obTitulo->cadastrar();
		//echo '<pre>'; print_r($obTitulo); echo '</pre>'; exit;
		header('location: titulos.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/form-titulos.php';
	include __DIR__.'/includes/footer.php';