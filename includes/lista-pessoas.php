<div class="form-group float-end">
    <a class="btn btn-outline-secondary" href="index.php">HOME</a>
    <a class="btn btn-secondary" href="pessoas.php">PESSOAS</a>
    <a class="btn btn-outline-secondary" href="titulos.php">TÍTULOS</a>
    <a class="btn btn-outline-secondary" href="cre.php">CONTAS A RECEBER</a>
</div>

<?php
	
	function mask($val, $mask){
	    $maskared = '';
	    $k = 0;
	    for ($i = 0; $i <= strlen($mask) - 1; ++$i) {
	        if ($mask[$i] == '#') {
	            if (isset($val[$k])) {
	                $maskared .= $val[$k++];
	            }
	        } else {
	            if (isset($mask[$i])) {
	                $maskared .= $mask[$i];
	            }
	        }
	    }
	    return $maskared;
	}

  	$resultados = '';
  	foreach ($pessoas as $pessoa) {
	  	$resultados .= '<tr>
	  						<td>'.$pessoa->id.'</td>
	  						<td>'.$pessoa->nome.'</td>
	  						<td>'.mask($pessoa->cpf, '###.###.###-##').'</td>
	  						<td>'.date('d/m/Y',strtotime($pessoa->data_nascimento)).'</td>
	  						<td>'.$pessoa->logradouro.'</td>
	  						<td>'.$pessoa->numero.'</td>
	  						<td>'.$pessoa->bairro.'</td>
	  						<td>'.$pessoa->cidade.'</td>
	  						<td>'.$pessoa->uf.'</td>
	  						<td>'.($pessoa->status == 'S' ? 'Ativo' : 'Inativo').'</td>
	  						<td>
	  							<a href="editar-pessoas.php?id='.$pessoa->id.'"><button type="button" class="btn btn-primary">Editar</button></a>
	  							<a href="excluir-pessoas.php?id='.$pessoa->id.'"><button type="button" class="btn btn-danger">Excluir</button></a>
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
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?=$resultados?>
			</tbody>
		</table>
	</section>