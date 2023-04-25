<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de compra de gaseosas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<h2>Calculadora de compra de gaseosas</h2>
	<form method="post" action="">
		<div class="form-group">
			<label for="precio_actual">Precio actual de la gaseosa de 3 litros:</label>
			<input type="number" class="form-control" id="precio_actual" name="precio_actual" required>
		</div>
		<div class="form-group">
			<label for="unidades_adquiridas">Cantidad de unidades adquiridas:</label>
			<input type="number" class="form-control" id="unidades_adquiridas" name="unidades_adquiridas" required>
		</div>
        <br>
		<button type="submit" class="btn btn-primary">Calcular compra</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
	</form>

	<?php
		// Comprobar si se han enviado los datos del formulario
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Obtener los datos enviados por el formulario
			$precio_actual = $_POST["precio_actual"];
			$unidades_adquiridas = $_POST["unidades_adquiridas"];

			// Calcular el nuevo precio de la gaseosa
			$nuevo_precio = $precio_actual * 0.95;

			// Calcular el importe de la compra
			$importe_compra = $nuevo_precio * $unidades_adquiridas;

			// Calcular el importe del descuento
			$importe_descuento = $importe_compra * 0.07;

			// Calcular el importe a pagar
			$importe_pagar = $importe_compra - $importe_descuento;

			// Calcular el obsequio de caramelos
			$obsequio_caramelos = $unidades_adquiridas * 2;

			// Mostrar los resultados
			echo "<br><h3>Resultados:</h3>";
			echo "<p><strong>Nuevo precio de la gaseosa:</strong> S/ " . number_format($nuevo_precio, 2) . "</p>";
			echo "<p><strong>Importe de la compra:</strong> S/ " . number_format($importe_compra, 2) . "</p>";
			echo "<p><strong>Importe del descuento:</strong> S/ " . number_format($importe_descuento, 2) . "</p>";
			echo "<p><strong>Importe a pagar:</strong> S/ " . number_format($importe_pagar, 2) . "</p>";
			echo "<p><strong>Obsequio de caramelos:</strong> " . $obsequio_caramelos . "</p>";
		}
	?>
</body>
</html>