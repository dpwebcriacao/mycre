<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Cadastros\Cre;

	//VALIDAÇÃO DO ID
	if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
		header('location: cre.php?status=error');
		exit;
	}

	//CONSULTA O CRE
	$obCre = Cre::getCre($_GET['id']);

	//VALIDAÇÃO DO CRE
	if(!$obCre instanceof Cre){
		header('location: cre.php?status=error');
		exit;
	}

	//VALIDAÇÃO DO POST
	if(isset($_POST['excluir'])) {

		$obCre->excluir();
		
		header('location: cre.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/confirmar-exclusao-cre.php';
	include __DIR__.'/includes/footer.php';