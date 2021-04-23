<?php
	
	require __DIR__.'/vendor/autoload.php';

	use \Classes\Cadastros\Titulo;

	$titulos = Titulo::getTitulos();

	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/lista-titulos.php';
	include __DIR__.'/includes/footer.php';