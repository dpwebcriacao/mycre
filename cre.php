<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Cadastros\Cre;

	$Cres = Cre::getCres();

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/lista-cre.php';
	include __DIR__.'/includes/footer.php';