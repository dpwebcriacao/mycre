<?php
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Editar Título');

	use \Classes\Cadastros\Titulo;

	//VALIDAÇÃO DO ID
	if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
		header('location: titulos.php?status=error');
		exit;
	}

	//CONSULTA O TITULO
	$obTitulo = Titulo::getTitulo($_GET['id']);

	//VALIDAÇÃO DO TITULO
	if(!$obTitulo instanceof Titulo){
		header('location: titulos.php?status=error');
		exit;
	}	

	//VALIDAÇÃO DO POST
	if(isset($_POST['descricao'],$_POST['valor'])) {

		$obTitulo->descricao   = $_POST['descricao'];
		$obTitulo->valor       = $_POST['valor'];
		$obTitulo->atualizar();
		
		header('location: titulos.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/form-titulos.php';
	include __DIR__.'/includes/footer.php';