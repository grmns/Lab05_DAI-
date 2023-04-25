<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
    <form method="post" action="">
        Ingresar Valor 1: <br> <input type="text" name="valor1"> <br>
        Ingresar Valor 2: <br> <input type="text" name="valor2"> <br>
        Resultado: <br>
        <input type="submit" name="Suma" value="Suma">
    </form>
    <?php
        if(isset($_POST['Suma'])){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $resultado = $valor1 + $valor2;
            echo "El resultado de la suma es: $resultado";
        }
    ?>
</body>
</html>