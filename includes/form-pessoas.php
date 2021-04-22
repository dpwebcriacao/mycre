
<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-outline-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>
<main>
	<section>
		<a href="index.php">
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
			<input type="text" class="form-control" name="cpf" required>
		</div>

		<div class="form-group mt-2">
			<label>Data de Nascimento:</label>
			<input type="text" class="form-control" name="dtnasc" required>
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
			<label>Complemento:</label>
			<input type="text" class="form-control" name="Complemento">
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
			<input type="text" class="form-control" name="uf" required>
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