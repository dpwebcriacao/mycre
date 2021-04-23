	<div class="form-group float-end mb-5">
        <a class="btn btn-secondary" href="index.php"><i class="fas fa-home"></i> HOME</a>
        <a class="btn btn-outline-secondary" href="pessoas.php"><i class="fas fa-users"></i> PESSOAS</a>
        <a class="btn btn-outline-secondary" href="titulos.php"><i class="fas fa-file"></i> TÍTULOS</a>
        <a class="btn btn-outline-secondary" href="cre.php"><i class="fas fa-hand-holding-usd"></i> CONTAS A RECEBER</a>
    </div>

    <style type="text/css">
    	.quadro{
    		border: 1px solid #51585e;
    	}
    </style>
    
    <div style="display: inline-block; width: 100%;">
	    <?php

	    $servername = "crudmycre.mysql.dbaas.com.br";
		$username   = "crudmycre";
		$password   = 'P@$$w0rd';
		$dbname 	= "crudmycre";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
		  die("Falha na conexão: " . $conn->connect_error);
		} 

	    $QryVenc = 'SELECT count(1) conta, sum(valor) soma FROM contas_receber, titulos WHERE contas_receber.id_titulo = titulos.id and contas_receber.vencimento < CURRENT_DATE';

	    $vencidos = $conn->query($QryVenc);

	    if ($vencidos->num_rows > 0) {
		  while($row = $vencidos->fetch_assoc()) {
		    $contaVen = $row["conta"];
		    $valorVen = $row["soma"];
		  }
		} else {
		  echo "0 results";
		}

		$QryAven = 'SELECT count(1) conta, sum(valor) soma FROM contas_receber, titulos WHERE contas_receber.id_titulo = titulos.id and contas_receber.vencimento >= CURRENT_DATE';

	    $avencer = $conn->query($QryAven);

	    if ($avencer->num_rows > 0) {
		  while($row = $avencer->fetch_assoc()) {
		    $contaAve = $row["conta"];
		    $valorAve = $row["soma"];
		  }
		} else {
		  echo "0 results";
		}
		$conn->close();

	    ?>

	    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	    <script type="text/javascript">
	      google.charts.load('current', {'packages':['corechart']});
	      google.charts.setOnLoadCallback(drawChart);

	      function drawChart() {

	        var data = google.visualization.arrayToDataTable([
	          ['Status', 'Quantidade'],
	          ['À Vencer',     <?=$contaAve?>],
	          ['Vencidos',     <?=$contaVen?>]
	        ]);

	        var options = {
	          title: 'Títulos À Vencer & Vencidos (Qtde)'
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('quantidades'));

	        chart.draw(data, options);
	      }
	    </script>
		<div class="mt-5 mb-5 quadro" style="width: 49%; height: auto; float: left;">
		    <div id="quantidades" style="width: 500; height: 450px;"></div>
		</div>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	    <script type="text/javascript">
		    google.charts.load("current", {packages:['bar']});
		    google.charts.setOnLoadCallback(drawChart);
		    function drawChart() {
		      var data = google.visualization.arrayToDataTable([
		        ["Status", "Valor", { role: "style" } ],
		        ["À Vencer", <?=$valorAve?>, "#3366cc"],
		        ["Vencidos", <?=$valorVen?>, "#dc3912"]
		      ]);

		      var view = new google.visualization.DataView(data);
		      view.setColumns([0, 1,
		                       { calc: "stringify",
		                         sourceColumn: 1,
		                         type: "string",
		                         role: "annotation" },
		                       2]);

		      var options = {
		        title: "Títulos À Vencer & Vencidos (R$)",
		        width: 620,
		        height: 400,
		        bar: {groupWidth: "95%"},
		        legend: { position: "none" },
		      };
		      var chart = new google.visualization.ColumnChart(document.getElementById("valores"));
		      chart.draw(view, options);
		    }
		</script>
		<div class="mt-5 mb-5 quadro" style="width: 49%; height: auto;float: right;">
		    <div id="valores" style="width: 500; height: 450px;"></div>
		</div>
	</div>