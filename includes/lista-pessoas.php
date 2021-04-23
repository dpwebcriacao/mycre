<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-outline-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>

<?php

  $resultados = '';
  foreach ($pessoas as $pessoa) {
  	$resultados .= '<tr>
  						<td>'.$pessoa->id.'</td>
  						<td>'.$pessoa->nome.'</td>
  						<td>'.$pessoa->cpf.'</td>
  						<td>'.$pessoa->data_nascimento.'</td>
  						<td>'.$pessoa->logradouro.'</td>
  						<td>'.$pessoa->numero.'</td>
  						<td>'.$pessoa->bairro.'</td>
  						<td>'.$pessoa->cidade.'</td>
  						<td>'.$pessoa->uf.'</td>
  						<td>'.$pessoa->status.'</td>
  					</tr>';
  }

?>
<main>
	<section>
		<a href="index.php">
			<button class="btn btn-outline-secondary">Voltar</button>
		</a>
	</section>

	<section class="mt-5">
		<a href="inserir-pessoas.php">
			<button class="btn btn-success">Nova Pessoa</button>
		</a>
	</section>

	<h2 class="mt-3">Pessoas Cadastradas</h2>

	<section>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>Data Nascimento</th>
					<th>Logradouro</th>
					<th>Número</th>
					<th>Bairro</th>
					<th>Cidade</th>
					<th>UF</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?=$resultados?>
			</tbody>
		</table>
	</section>