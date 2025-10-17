
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagar con QR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Generar código QR de pago</h2>
    <form action="action_pagarQR.php" method="post">
        <div class="mb-3">
            <label for="monto" class="form-label">Monto a pagar:</label>
            <input type="number" class="form-control" id="monto" name="monto" min="1" step="any" required placeholder="Ingrese el monto">
        </div>
        <button type="submit" class="btn btn-primary">Generar QR</button>
    </form>
</div>
</body>
</html>
