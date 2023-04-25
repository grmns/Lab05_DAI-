<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de sueldo de vendedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h2>Calculadora de sueldo de vendedor</h2>
	<form method="post" action="">
		<div class="form-group">
			<label for="total_vendido">Importe total vendido del mes:</label>
			<input type="number" class="form-control" id="total_vendido" name="total_vendido" required >
		</div>
		<div class="form-group">
			<label for="hijos_escolares">Cantidad de hijos en edad escolar:</label>
			<input type="number" class="form-control" id="hijos_escolares" name="hijos_escolares" required>
		</div>
        <br>
		<button type="submit" class="btn btn-primary">Calcular Sueldo</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
	</form>

	<?php
		// Comprobar si se han enviado los datos del formulario
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Obtener los datos enviados por el formulario
			$total_vendido = $_POST["total_vendido"];
			$hijos_escolares = $_POST["hijos_escolares"];

			// Calcular la bonificación
			$bonificacion = $hijos_escolares * 50;

			// Calcular la comisión
			$comision = $total_vendido * 0.075;

			// Calcular el sueldo bruto
			$sueldo_bruto = 600 + $comision + $bonificacion;

			// Calcular el descuento
			$descuento = $sueldo_bruto * 0.11;

			// Calcular el sueldo neto
			$sueldo_neto = $sueldo_bruto - $descuento;

			// Mostrar los resultados
			echo "<br><h3>Resultados:</h3>";
			echo "<p><strong>Sueldo bruto:</strong> S/ " . number_format($sueldo_bruto, 2) . "</p>";
			echo "<p><strong>Bonificación:</strong> S/ " . number_format($bonificacion, 2 ) . "</p>";
			echo "<p><strong>Comisión:</strong> S/ " . number_format($comision, 2) . "</p>";
			echo "<p><strong>Descuento:</strong> S/ " . number_format($descuento, 2) . "</p>";
			echo "<p><strong>Sueldo neto:</strong> S/ " . number_format($sueldo_neto, 2) . "</p>";
		}
	?>

</div>
</body>
</html>