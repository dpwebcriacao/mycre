<script type="text/javascript">
	jQuery(function($){
		$("#data").mask("99/99/9999");
	});
</script>
<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>
<main>
	<section>
		<a href="cre.php">
			<button class="btn btn-outline-secondary">Voltar</button>
		</a>
	</section>

	<h2 class="mt-3"><?=TITLE?></h2>

	<form method="POST" class="mb-5">

		<div class="form-group mt-2">
			<label>ID Pessoa:</label>
			<input type="text" class="form-control" name="id_pessoa" value="<?=$obCre->id_pessoa?>" required>
		</div>

		<div class="form-group mt-2">
			<label>ID Título:</label>
			<input type="text" class="form-control" name="id_titulo" value="<?=$obCre->id_titulo?>" required>
		</div>

		<div class="form-group mt-2">
			<label>Vencimento:</label>
			<input type="text" id="data" class="form-control" name="vencimento" size="10" maxlength="10" value="<?=$obCre->vencimento?>" required>
		</div>

		<input type="hidden" name="updated" value="<?php echo date('d/m/Y H:i:s'); ?>">

		<div class="form-group mt-4">
			<button type="submit" class="btn btn-success">Enviar</button>
		</div>

	</form>
</main>