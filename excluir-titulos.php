<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Cadastros\Titulo;

	//VALIDAÇÃO DO ID
	if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
		header('location: titulos.php?status=error');
		exit;
	}

	//CONSULTA O CRE
	$obTitulo = Titulo::getTitulo($_GET['id']);

	//VALIDAÇÃO DO CRE
	if(!$obTitulo instanceof Titulo){
		header('location: titulos.php?status=error');
		exit;
	}

	//VALIDAÇÃO DO POST
	if(isset($_POST['excluir'])) {

		$obTitulo->excluir();
		
		header('location: titulos.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/confirmar-exclusao-titulo.php';
	include __DIR__.'/includes/footer.php';