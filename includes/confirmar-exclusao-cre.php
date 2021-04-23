<main>
	
	<h2 class="mt-3">Excluir CRE</h2>

	<form method="POST" class="mb-5">

		<div class="form-group mt-2">
			<p>Você deseja realmente excluir o CRE <strong><?=$obCre->id?></strong>?</p>
		</div>

		<div class="form-group mt-4">
			<a href="cre.php"><button type="button" class="btn btn-success">Voltar</button></a>

			<button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
		</div>

	</form>
</main>