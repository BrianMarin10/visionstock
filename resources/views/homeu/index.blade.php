<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Categorías de Productos</title>

    <style>
        body {
            background-color: #007bff;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
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

        .icon {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #007bff;
        }
        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>

<a class="navbar-brand" href="usuarioini">
                <img src="{{ asset('images/home-48.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Home
            </a>

    <div class="container">
        <h1 class="title">Categorías de Productos</h1>
        <a href="{{ route('usuarios') }}" class="card">
            <i class="fas fa-star icon"></i>
            <h5>Productos Más Vendidos</h5>
            <p>Descubre nuestros productos más populares y mejor valorados.</p>
        </a>
        <div class="card">
            <i class="fas fa-glasses icon"></i>
            <h5>Lentes y Gafas</h5>
            <p>Explora nuestra amplia gama de lentes de contacto y gafas de alta calidad.</p>
        </div>
        <div class="card">
            <i class="fas fa-user-shield icon"></i>
            <h5>Gafas y Guantes y Aseo</h5>
            <p>Encuentra gafas protectoras, guantes y otros accesorios esenciales.</p>
        </div>
        <div class="card">
            <i class="fas fa-eye-dropper icon"></i>
            <h5>Gotas Lubricantes</h5>
            <p>Alivia la sequedad ocular con nuestras gotas lubricantes de primera calidad.</p>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlRl3b1gtaVVlbFAhV9KKtX5muu77JxK5HPrJ5XKz9j1GtfP5JpGbfld2gL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG+/M5G1pLkaFf8DDOLjckSCca25I0Bvlwvf0Q0t0DkZlA5UcRI5KSL13gj" crossorigin="anonymous"></script>
</body>
</html>
