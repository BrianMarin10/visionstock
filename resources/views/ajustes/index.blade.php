<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajustes</title>
  <style>
    .warehouse-background {
      background-image: url('{{ asset('images/ajustes.png') }}');
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .button {
      background-color: #000; 
      color: #fff; 
      border: 2px solid #000; 
      border-radius: 5px; 
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      margin: 0 5px; /* Espacio entre los botones */
      transition: background-color 0.3s, color 0.3s; /* Transición breve de mouse*/
      text-decoration: none; /* Eliminar el subrayado de los enlaces */
    }

    .button:hover {
      background-color: #333; /* valor agg del boton al pasar mouse */
    }
  </style>
</head>
<h2>Modulos de auditoria</h2>
<body>
  <div class="warehouse-background">
     <div class="button-container">
      <a href="{{ route('reportes') }}" class="button">Reportes</a>
      <a href="{{ route('configuracion') }}" class="button">Configuración del sistema</a>
    </div>
  </div>
</body>
</html>
