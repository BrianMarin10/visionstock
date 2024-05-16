<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Producto</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 18rem;
            margin-left: 100px; /* Ajusta este valor según sea necesario */
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/user/lentes.jpg') }}" class="card-img-top" alt="Imagen del producto">
            <div class="card-body">
                <h5 class="card-title">Lentes de contacto</h5>
                <p class="card-text">Descripción del Producto</p>
            </div>
        </div>
    </div>
</body>
</html>