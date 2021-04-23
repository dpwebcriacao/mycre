<script type="text/javascript">
	jQuery(function($){
		$("#data").mask("99/99/9999");
		$("#cpf").mask("999.999.999-99");
});
</script>
<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-outline-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>
<main>
	
	<h2 class="mt-3">Excluir Pessoa</h2>

	<form method="POST" class="mb-5">

		<div class="form-group mt-2">
			<p>Você deseja realmente excluir a pessoa <strong><?=$obPessoa->nome?></strong>?</p>
		</div>

		<div class="form-group mt-4">
			<a href="pessoas.php"><button type="button" class="btn btn-success">Voltar</button></a>

			<button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
		</div>

	</form>
</main>