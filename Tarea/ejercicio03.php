<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler de automoviles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h1 class=" mt-3 mb-5">Alquiler de automóviles</h1>
		<form method="POST" action="">
			<div class="form-group">
				<label for="tarifa">Tarifa diaria de alquiler:</label>
				<input type="number" step="0.01" min="0" class="form-control" id="tarifa" name="tarifa" required>
			</div>
			<div class="form-group">
				<label for="dias">Número de días de alquiler:</label>
				<input type="number" min="0" class="form-control" id="dias" name="dias" required>
			</div>
            <br>
			<button type="submit" class="btn btn-primary">Calcular</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
		</form>

		<?php
			// Verificando si se recibieron los datos del formulario
			if(isset($_POST['tarifa']) && isset($_POST['dias'])) {
				$tarifa = $_POST['tarifa'];
				$dias = $_POST['dias'];

				// Cálculo del importe bruto
				$importe_bruto = $tarifa * $dias;

				// Cálculo del descuento
				$descuento = 0.15 * $importe_bruto;

				// Cálculo del importe neto a pagar
				$importe_neto = $importe_bruto - $descuento;

				// Cálculo de la cantidad de lapiceros de obsequio
				$lapiceros_obsequio = 3 * $dias;

				// Mostrando los resultados
				echo "<h2 class='mt-5'>Resultados</h2>";
				echo "<p><strong>Importe bruto:</strong> S/ ".number_format($importe_bruto, 2)."</p>";
				echo "<p><strong>Descuento:</strong> S/ ".number_format($descuento, 2)."</p>";
				echo "<p><strong>Importe neto a pagar:</strong> S/ ".number_format($importe_neto, 2)."</p>";
				echo "<p><strong>Lapiceros de obsequio:</strong> ".$lapiceros_obsequio."</p>";
			}
		?>
	</div>
</body>
</html>