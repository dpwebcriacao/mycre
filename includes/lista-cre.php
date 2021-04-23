<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php"><i class="fas fa-home"></i> HOME</a>
    <a class="btn btn-outline-secondary" href="pessoas.php"><i class="fas fa-users"></i> PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php"><i class="fas fa-file"></i> TÍTULOS</a>
    <a class="btn btn-secondary" href="cre.php"><i class="fas fa-hand-holding-usd"></i> CONTAS A RECEBER</a>
</div>

<?php
	
	use \Classes\Cadastros\Pessoa;
	use \Classes\Cadastros\Titulo;

  	$resultados = '';
  	foreach ($Cres as $Cre) {
  		$obPessoa = Pessoa::getPessoa($Cre->id_pessoa);
		$obTitulo = Titulo::getTitulo($Cre->id_titulo);
	  	$resultados .= '<tr>
	  						<td>'.$Cre->id.'</td>
	  						<td>'.$Cre->id_pessoa.'</td>
	  						<td>'.$obPessoa->nome.'</td>
	  						<td>'.$Cre->id_titulo.'</td>
	  						<td>'.$obTitulo->descricao.'</td>
	  						<td>'.date('d/m/Y',strtotime(str_replace('-','/',$Cre->vencimento))).'</td>
	  						<td>'.date('d/m/Y H:i:s',strtotime(str_replace('-','/',$Cre->updated))).'</td>
	  						<td>
	  							<a href="editar-cre.php?id='.$Cre->id.'"><button type="button" class="btn btn-primary">Editar</button></a>
	  							<a href="excluir-cre.php?id='.$Cre->id.'"><button type="button" class="btn btn-danger">Excluir</button></a>
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
					<th>Nome</th>
					<th>ID Titulo</th>
					<th>Descrição</th>
					<th>Vencimento</th>
					<th>Updated</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?=$resultados?>
			</tbody>
		</table>
	</section>