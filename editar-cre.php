<?php
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Editar CRE');

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
	if(isset($_POST['id_pessoa'],$_POST['id_titulo'],$_POST['vencimento'],$_POST['updated'])) {

		$obCre->id_pessoa   = $_POST['id_pessoa'];
		$obCre->id_titulo 	= $_POST['id_titulo'];
		$obCre->id_titulo 	= str_replace('/','-',date('Y-m-d',strtotime($_POST['vencimento'])));
		$obCre->id_titulo 	= str_replace('/','-',date('Y-m-d H:i:s',strtotime($_POST['updated'])));
		$obCre->atualizar();
		
		header('location: cre.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/form-cre.php';
	include __DIR__.'/includes/footer.php';