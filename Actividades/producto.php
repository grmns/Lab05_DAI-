<?php
    if(isset($_POST['producto'])){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $producto = $valor1 * $valor2;
        echo "El resultado de la suma es: $producto";
    }
?>