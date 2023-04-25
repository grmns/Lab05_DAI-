<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h2>Calculadora de compra de conos de CDs</h2>
		<form method="post" action="">
			<div class="form-group">
				<label for="precio">Precio del cono:</label>
				<input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
			</div>
			<div class="form-group">
				<label for="cantidad">Cantidad de conos:</label>
				<input type="number" class="form-control" id="cantidad" name="cantidad" required>
				<br>
			<button type="submit" class="btn btn-primary">Calcular</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
		</form>
		<br>
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$precio = $_POST["precio"];
			$cantidad = $_POST["cantidad"];
			$importe = $precio * $cantidad;
			$descuento1 = $importe * 0.05;
			$importeConDescuento1 = $importe - $descuento1;
			$descuento2 = $importeConDescuento1 * 0.05;
			$importeFinal = $importeConDescuento1 - $descuento2;
			echo "<h4>Resumen de compra:</h4>";
			echo "<p><strong>Precio del cono:</strong> S/ " . number_format($precio, 2) . "</p>";
			echo "<p><strong>Cantidad de conos:</strong> " . $cantidad . "</p>";
			echo "<p><strong>Importe de la compra:</strong> S/ " . number_format($importe, 2) . "</p>";
			echo "<p><strong>Descuento 1:</strong> S/ " . number_format($descuento1, 2) . "</p>";
			echo "<p><strong>Importe con descuento 1:</strong> S/ " . number_format($importeConDescuento1, 2) . "</p>";
			echo "<p><strong>Descuento 2:</strong> S/ " . number_format($descuento2, 2) . "</p>";
			echo "<p><strong>Importe final:</strong> S/ " . number_format($importeFinal, 2) . "</p>";
		}
		?>
	</div>
</body>
</html>