<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product-container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            background-color: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            flex: 1;
            padding: 20px;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
        }
        .product-details {
            flex: 2;
            padding: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('images/user/lentes.jpg') }}" alt="Imagen del producto">
            </div>
            <div class="product-details">
                <h2 class="card-title">Lentes de contacto</h2>
                <p class="card-text">Descripción del Producto: ¡Descubre la comodidad y la libertad visual con nuestros lentes de contacto de alta calidad! Diseñados para ofrecer una corrección precisa de la visión, nuestros lentes de contacto son ideales para quienes buscan una alternativa práctica y estética a las gafas. Hechos de materiales blandos y flexibles, proporcionan una sensación natural y confortable durante todo el día.</p>
                <p class="card-text">Costo: <strong>$77.990</strong></p>
                <p class="card-text">Stock disponible: <strong>30 unidades</strong></p>
                <h5>Recomendaciones de uso:</h5>
                <p class="card-text">Para un uso seguro y efectivo de tus lentes de contacto, es crucial mantener una buena higiene. Siempre lávate bien las manos con agua y jabón antes de manipular tus lentes. Usa tus lentes solo durante el tiempo recomendado (diario, quincenal, mensual) y reemplázalos según las indicaciones. Limpia y desinfecta tus lentes con la solución adecuada, evitando el uso de agua del grifo o saliva. Da a tus ojos un descanso regular, especialmente si usas lentes de contacto de uso prolongado, y considera usar gafas durante parte del día. A menos que estén específicamente diseñados para uso nocturno, evita dormir con ellos puestos. No uses lentes de contacto al nadar, en la ducha o en jacuzzis para prevenir infecciones. Si sientes sequedad ocular, utiliza gotas lubricantes recomendadas por tu oftalmólogo.</p>
                <a href="{{ route('pagos.index') }}" class="btn btn-primary btn-lg">Comprar ahora</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>