<?php

use Source\Models\Usuario;

require __DIR__.'/vendor/autoload.php';

$usuarios = (new Usuario())->find()->fetch(true);

$cont = (new Usuario())->find()->count();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Olá, mundo!</title>
</head>

<body style="background-color:;">

	<section style="background-color: #00CBFF; height: 100px;">
		<form action="source/controllers/processa.php" method="post" class="d-flex" style="width: 65%; justify-content: space-between; margin: auto;">
			<div class="fomr-group mt-3">
				<input class="form-control" type="text" name="NomePessoa" required placeholder="Nome">
			</div>
			<div class="fomr-group">
				<input class="form-control mt-3" type="text" name="UltimoNome" required placeholder="ultimo nome">
			</div>
			<div>
				<input class="form-control mt-3" type="text" name="Porcentagem" required placeholder="Porcentagem">
			</div>
			<div class="mt-3">
				<button style="background-color: #00CBFF; border: none; color: #fff; border: 1px solid #fff; padding: 5px; border-radius: 5px;">Enviar</button>
			</div>
		</form>
	</section>

	<section class="mt-3">
		<div style="width: 60%; margin: 0 auto;">
			<h3 class="text-center">Dados Usuários</h3>
		</div>
		<div class="container">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Sobre nome</th>
						<th scope="col">Porcentagem</th>
					</tr>
				</thead>
				<tbody>		
					<?php if (!empty($usuarios)): ?>
						<?php foreach ($usuarios as $key => $usuario): ?>
							<tr>
								<td><?=$usuario->nome?></td>
								<td><?=$usuario->sobrenome?></td>
								<td><?=$usuario->porcentagem?></td>
							</tr>
						<?php endforeach ?>
					<?php endif ?>
				</tbody>
			</table>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 m-auto">
					<canvas id="myChart"></canvas>
				</div>
			</div>
		</div>
	</section>
	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		let cores = [...gerarCores()];
		console.log(cores)
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: [
				<?php 
				foreach ($usuarios as $key => $usuario) {
					echo "['$usuario->nome'],";
				}
				?>
				],
				datasets: [{
					label: '# of Votes',
					data: [
					<?php 
					foreach ($usuarios as $key => $usuario) {
						echo "['$usuario->porcentagem'],";
					}
					?>

					],
					backgroundColor: [
					cores
					],

					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});


		function gera_cor(){
			var hexadecimais = '0123456789ABCDEF';
			var cor = '#';

		    // Pega um número aleatório no array acima
		    for (var i = 0; i < 6; i++ ) {
		    //E concatena à variável cor
		    cor += hexadecimais[Math.floor(Math.random() * 16)];
		}
		return cor;
	}

	function gerarCores(){
		let cores = [];
		for (var i = 0; i < <?php echo $cont?>; i++) {
			cores.push(gera_cor());
		}
		return cores;
	}

</script>


</body>

</html>

