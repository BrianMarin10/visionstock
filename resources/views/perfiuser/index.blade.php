<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

        .form-group {
            margin-bottom: 20px;
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
    <div class="container">
        <h1 class="title">Mi Perfil</h1>
        
        <form id="profileForm">
            <div class="form-group">
                <label for="fullName">Nombre Completo</label>
                <input type="text" class="form-control" id="fullName" value="Zemog Gómez">
            </div>
            <div class="form-group">
                <label for="city">Ciudad</label>
                <input type="text" class="form-control" id="city" value="Cali">
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" class="form-control" id="address" value="Calle 9b#23-07">
            </div>
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" value="Zemog7">
            </div>
            <div class="form-group">
                <label for="birthdate">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="birthdate" value="2005-01-02">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" value="zemogsystem@gmail.com">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" value="********">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="acceptTerms">
                <label class="form-check-label" for="acceptTerms">Acepto las políticas de tratamiento de datos</label>
            </div>
            <button type="button" class="btn btn-primary mt-3" id="updateBtn">Actualizar</button>
        </form>
    </div>

    <script>
    $(document).ready(function() {
        // Función para cargar los datos del almacenamiento local en el formulario
        function loadFormData() {
            $('#fullName').val(localStorage.getItem('fullName'));
            $('#city').val(localStorage.getItem('city'));
            $('#address').val(localStorage.getItem('address'));
            $('#username').val(localStorage.getItem('username'));
            $('#birthdate').val(localStorage.getItem('birthdate'));
            $('#email').val(localStorage.getItem('email'));
            $('#password').val(localStorage.getItem('password'));
            $('#acceptTerms').prop('checked', localStorage.getItem('acceptTerms') === 'true');
        }

        // Cargar datos al cargar la página
        loadFormData();

        // Función para actualizar los datos y guardarlos en el almacenamiento local
        $('#updateBtn').click(function() {
            var fullName = $('#fullName').val();
            var city = $('#city').val();
            var address = $('#address').val();
            var username = $('#username').val();
            var birthdate = $('#birthdate').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var acceptTerms = $('#acceptTerms').is(':checked');

            // Guardar los nuevos valores en el almacenamiento local
            localStorage.setItem('fullName', fullName);
            localStorage.setItem('city', city);
            localStorage.setItem('address', address);
            localStorage.setItem('username', username);
            localStorage.setItem('birthdate', birthdate);
            localStorage.setItem('email', email);
            localStorage.setItem('password', password);
            localStorage.setItem('acceptTerms', acceptTerms);

            // Mostrar mensaje de confirmación
            alert('Los datos se han actualizado correctamente.');
        });
    });
</script>


</body>
</html>
