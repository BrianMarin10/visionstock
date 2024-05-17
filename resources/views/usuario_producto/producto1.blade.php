<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div class="card">
            <img src="{{ asset('images/user/lentes.jpg') }}" class="card-img-top" alt="Imagen del producto">
            <div class="card-body">
                <h5 class="card-title">Lentes de contacto</h5>
                <p class="card-text">Descripción del Producto: </p>
                <p class="card-text">Costo: </p>
                <p class="card-text">Stock disponible: </p>
                <p class="card-text">Recomendaciones de uso: </p>
                <a href="{{ route('pagos.index') }}" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>