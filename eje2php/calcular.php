<?php
$producto = $_POST['producto'];
$precio = $_POST['proprecio'];
$cantidad = $_POST['procantidad'];
$formapago = $_POST['formapago'];
$costototal = $precio * $cantidad;
$descuento = 0;
$descuentoVisa = 20 / 100 * $costototal;
$descuentoAgora = 50 / 100 * $costototal;
$costodesc = 0;
switch ($formapago) {
    case 'Tarjeta Visa':
        $costodesc = $costototal - $descuentoVisa;
        $descuento = $descuentoVisa;
        break;
    case 'Tarjeta Agora':
        $costodesc = $costototal - $descuentoAgora;
        $descuento = $descuentoAgora;
        break;
    case 'Efectivo':
        $costodesc = $costototal;
        break;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Boleta Virtual 2</h1>
    <h2>Total a pagar</h2>
    <p>Producto > <?php echo $producto ?> </p>
    <p>Precio > <?php echo "S./ " . $precio ?></p>
    <p>Cantidad > <?php echo $cantidad . " ud." ?></p>
    <p>Forma de Pago > <?php echo $formapago  ?></p>
    <p>SubTotal > <?php echo "S/. " .  $costototal ?></p>
    <p>Monto Descontado > <?php echo "S/. " . $descuento ?></p>


    <p>Total a pagar > <?php echo "S./ " . $costodesc  ?> </p>
    
</body>
</html>