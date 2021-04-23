<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-outline-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-outline-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>

<?php
	
  	$resultados = '';
  	foreach ($titulos as $titulo) {
	  	$resultados .= '<tr>
	  						<td>'.$titulo->id.'</td>
	  						<td>'.$titulo->descricao.'</td>
	  						<td>'.$titulo->valor.'</td>
	  						<td>
	  							<a href="editar-titulos.php?id='.$titulo->id.'"><button type="button" class="btn btn-primary">Editar</button></a>
	  							<a href="excluir-titulos.php?id='.$titulo->id.'"><button type="button" class="btn btn-danger">Excluir</button></a>
	  						</td>
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
		<a href="inserir-titulos.php">
			<button class="btn btn-success">Novo titulo</button>
		</a>
	</section>

	<h2 class="mt-3">Títulos Cadastrados</h2>

	<section>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descrição</th>
					<th>Valor</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?=$resultados?>
			</tbody>
		</table>
	</section>