<?php
require_once '../util/funciones.php';
require_once '../Control/generadorQR.php';

$datos = data_submitted();

//extraemos el monto
$monto = $datos['monto'] ?? null;


// Generar el QR
$qr = new GeneradorQR();
$qr->generarQR($monto); 

// Donde se guarda el QR
$qrRuta = '../Vista/img/qr_generado.png';  
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>QR Generado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    echo '<div class="container mt-5 text-center">';
    

    if (file_exists($qrRuta) && $monto != null) {
        //cambiar el monto a formato moneda
        $monto = '$' . number_format($monto, 2, ',', '.');
        echo '<h2 class="mb-4">Código QR generado para el pago de ' . htmlspecialchars($monto) . '</h2>';
        echo '<img src="' . $qrRuta . '" alt="QR Generado" class="img-fluid border p-2" style="max-width:300px;">';
        echo '<p class="mt-3">Escanea este código para completar el pago.</p>';
    } else {
        echo '<div class="alert alert-danger">No se pudo generar el QR.</div>';
    }

    echo '<a href="pagarQR.php" class="btn btn-secondary mt-3">Volver</a>';
    echo '</div>';
    ?>

</body>

</html>