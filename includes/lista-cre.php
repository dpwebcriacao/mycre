<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-outline-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>

<?php
	
  	$resultados = '';
  	foreach ($Cres as $Cre) {
	  	$resultados .= '<tr>
	  						<td>'.$Cre->id.'</td>
	  						<td>'.$Cre->id_pessoa.'</td>
	  						<td>'.$Cre->id_titulo.'</td>
	  						<td>'.$Cre->vencimento.'</td>
	  						<td>'.$Cre->updated.'</td>
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
		<a href="inserir-cre.php">
			<button class="btn btn-success">Novo CRE</button>
		</a>
	</section>

	<h2 class="mt-3">CREs Cadastrados</h2>

	<section>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>ID Pessoa</th>
					<th>Id Titulo</th>
					<th>Vencimento</th>
					<th>Updated</th>
				</tr>
			</thead>
			<tbody>
				<?=$resultados?>
			</tbody>
		</table>
	</section>