<script type="text/javascript">
	jQuery(function($){
		$("#data").mask("99/99/9999", {placeholder: 'dd/mm/aaaa'});
		$("#cpf").mask("999.999.999-99", {placeholder: '___.___.___-__'});
});
</script>
<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-outline-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>
<main>
	<section>
		<a href="pessoas.php">
			<button class="btn btn-outline-secondary">Voltar</button>
		</a>
	</section>

	<h2 class="mt-3">Cadastro de Pessoas</h2>

	<form method="POST" class="mb-5">

		<div class="form-group mt-2">
			<label>Nome Completo:</label>
			<input type="text" class="form-control" name="nome" required>
		</div>

		<div class="form-group mt-2">
			<label>CPF:</label>
			<input id="cpf" type="text" class="form-control" name="cpf" size="14" maxlength="14" required>
		</div>

		<div class="form-group mt-2">
			<label>Data de Nascimento:</label>
			<input id="data" type="text" class="form-control" name="dtnasc" size="10" maxlength="10" required>
		</div>

		<div class="form-group mt-2">
			<label>Endereço:</label>
			<input type="text" class="form-control" name="logradouro" required>
		</div>

		<div class="form-group mt-2">
			<label>Número:</label>
			<input type="text" class="form-control" name="numero" required>
		</div>

		<div class="form-group mt-2">
			<label>Bairro:</label>
			<input type="text" class="form-control" name="bairro" required>
		</div>

		<div class="form-group mt-2">
			<label>Cidade:</label>
			<input type="text" class="form-control" name="cidade" required>
		</div>

		<div class="form-group mt-2">
			<label>Estado:</label>
			<input type="text" class="form-control" name="uf" size="2" maxlength="2" required>
		</div>

		<div class="form-group mt-2">
			<label>Status:</label>
			<div>
				<div class="form-check-inline">
					<label class="form-control">
						<input type="radio" name="status" value="s" checked> Ativo
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-control">
						<input type="radio" name="status" value="n"> Inativo
					</label>
				</div>
			</div>
		</div>

		<div class="form-group mt-4">
			<button type="submit" class="btn btn-success">Enviar</button>
		</div>

	</form>
</main>