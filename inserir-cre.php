<?php
	
	require __DIR__.'/vendor/autoload.php';

	define('TITLE','Cadastrar CRE');

	use \Classes\Cadastros\Cre;

	$obCre = new Cre;

	//VALIDAÇÃO DO POST
	if(isset($_POST['id_pessoa'],$_POST['id_titulo'],$_POST['vencimento'],$_POST['updated'])) {

		$obCre->id_pessoa   = $_POST['id_pessoa'];
		$obCre->id_titulo 	= $_POST['id_titulo'];
		$obCre->vencimento 	= date('Y-m-d',strtotime(str_replace('/','-',$_POST['vencimento'])));
		$obCre->updated 	= date('Y-m-d H:i:s',strtotime(str_replace('/','-',$_POST['updated'])));
		$obCre->cadastrar();
		//echo '<pre>'; print_r($obCre); echo '</pre>'; exit;
		header('location: cre.php?status=success');
		exit;
	}

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/form-cre.php';
	include __DIR__.'/includes/footer.php';