<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-outline-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>
<main>
	<section>
		<a href="titulos.php">
			<button class="btn btn-outline-secondary">Voltar</button>
		</a>
	</section>

	<h2 class="mt-3"><?=TITLE?></h2>

	<form method="POST" class="mb-5">

		<div class="form-group mt-2">
			<label>Descrição:</label>
			<input type="text" class="form-control" name="nome" value="<?=$obTitulo->descricao?>" required>
		</div>

		<div class="form-group mt-2">
			<label>Valor:</label>
			<input type="text" class="form-control" name="cpf" size="10" maxlength="10" value="<?=$obTitulo->valor?>" required>
		</div>

		<div class="form-group mt-4">
			<button type="submit" class="btn btn-success">Enviar</button>
		</div>

	</form>
</main>