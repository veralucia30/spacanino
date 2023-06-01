 <!--EJEMPLO BASICO  -->
    <?php 
    $producto = $_POST['producto'];
    // $precio = $_POST['costoprecio'];
    $cantidad = $_POST['costocantidad'];
    $precio = 0;

    switch ($producto) {
        case 'arroz':
            $precio = 2.5;
            break;
        case 'azucar':
            $precio = 2.0;
            break;
        case 'leche':
            $precio = 4.5;
            break;
        case 'frejoles':
            $precio = 3.5;
            break;
        case 'yogurt':
                $precio = 3.0;
                break;

    }
    $costototal = $cantidad * $precio;

    // echo "PRODUCTO SELECCIONADO > " .$producto;
    // echo "<br>";
    // echo "PRECIO > " . $precio;
    // echo "<br>";
    // echo "CANTIDAD > " . $cantidad;
    // echo "<br>";
    // echo "EL COSTO TOTAL ES " . $costototal;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta Virtual</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Boleta Virtual</h1>
    <h2>Total a pagar</h2>
    <p>Producto > <?php echo $producto ?> </p>
    <p>Precio > <?php echo "S./ " . $precio ?></p>
    <p>Cantidad > <?php echo $cantidad . " ud." ?></p>
    <p>Total a pagar > <?php echo "S./ " . $costototal  ?> </p>
    
</body>
</html>
