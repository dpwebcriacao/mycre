<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Cadastros\Pessoa;

	$pessoas = Pessoa::getPessoas();

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/lista-pessoas.php';
	include __DIR__.'/includes/footer.php';