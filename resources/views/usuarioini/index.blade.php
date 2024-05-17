<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Inicial</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-color: #007bff;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            padding: 20px;
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card h5 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .card p {
            margin-bottom: 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        /* Estilos para el recuadro del botón */
        .button-container {
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Bienvenido a Vision Stock</h1>
        
        <!-- Botón para navegar -->
        <div class="button-container">
            <a href="{{ route('homeu.index') }}" class="btn btn-primary">Ir a las Categorías</a>
        </div>
        
        <div class="button-container">
            <a href="{{ route('perfiuser.index') }}" class="btn btn-primary">Mi Perfil</a>
        </div>
        
        <!-- Tarjetas de consejos para el cuidado de los ojos -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-title">Descansa tus ojos</h5>
                    <p class="card-text">Recuerda hacer pausas regulares cuando uses dispositivos digitales durante mucho tiempo.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-title">Mantén una buena iluminación</h5>
                    <p class="card-text">Trabaja o lee en un área bien iluminada para reducir la fatiga ocular.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-title">Usa lentes de protección</h5>
                    <p class="card-text">Cuando estés al aire libre o en entornos con riesgo de daños en los ojos, usa lentes de protección.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-title">Visita a un oftalmólogo regularmente</h5>
                    <p class="card-text">Hazte chequeos oculares periódicos para mantener la salud visual y detectar problemas a tiempo.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
