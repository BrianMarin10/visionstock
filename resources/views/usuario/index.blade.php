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

    <title>Productos</title>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
            color: #fff;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="homeu">
                <img src="{{ asset('images/vision-48.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Vision Stock
            </a>
            <a class="navbar-brand" href="homeu">
                <img src="{{ asset('images/home-48.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Home
            </a>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Buscar..." id="searchInput" aria-label="Search">
            </form>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" id="productCards">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/user/lentes.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lentes de contacto</h5>
                        <p class="card-text">¡Descubre la comodidad y la libertad visual con nuestros lentes de contacto de alta calidad! Diseñados para ofrecer una corrección precisa de la visión, nuestros lentes de contacto son ideales para quienes buscan una alternativa práctica y estética a las gafas. Hechos de materiales blandos y flexibles, proporcionan una sensación natural y confortable durante todo el día.</p>
                        <a href="{{ route('usuario_producto1') }}" class="btn btn-primary">Detalle</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/user/gota_hidratante.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gotas hidratantes</h5>
                        <p class="card-text">¡Dale a tus ojos el alivio y la frescura que merecen con nuestras gotas hidratantes de alta calidad! Especialmente formuladas para proporcionar una hidratación intensa y duradera, nuestras gotas son ideales para aliviar la sequedad ocular, el enrojecimiento y la irritación causada por el uso prolongado de pantallas, lentes de contacto, o factores ambientales como el viento y el polvo.</p>
                        <a href="{{ route('usuario_producto2') }}" class="btn btn-primary">Detalle</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/user/gafa.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gafas</h5>
                        <p class="card-text">¡Transforma tu visión y tu estilo con nuestras gafas de alta calidad! Diseñadas con precisión y estilo, nuestras gafas ofrecen una corrección visual superior y una comodidad excepcional. Disponibles en una amplia variedad de diseños, desde los clásicos hasta los más modernos, nuestras gafas se adaptan a tus necesidades visuales y preferencias de moda.</p>
                        <a href="{{ route('usuario_producto3') }}" class="btn btn-primary">Detalle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        // Función para filtrar los productos por título
        function filterProducts() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const productCards = document.querySelectorAll('#productCards .card');

            productCards.forEach(card => {
                const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
                if (cardTitle.includes(searchInput)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Evento de escucha para el input de búsqueda
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', filterProducts);
    </script>
</body>
</html>
        