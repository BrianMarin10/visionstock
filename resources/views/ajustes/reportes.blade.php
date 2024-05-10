<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajustes</title>
  <style>
    .warehouse-background {
      background-image: url('{{ asset('images/Modulos-auditoria.png') }}');
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
      flex-direction: column; /* Colocar los botones uno debajo del otro */
    }

    .button {
      background-color: #000; 
      color: #fff; 
      border: 2px solid #000; 
      border-radius: 5px; 
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      margin: 5px 0; /* Espacio entre los botones */
      transition: background-color 0.3s, color 0.3s; /* Transición breve de mouse*/
      text-decoration: none; /* Eliminar el subrayado de los enlaces */
    }

    .button:hover {
      background-color: #333; /* valor agg del boton al pasar mouse */
    }
  </style>
</head>
<h2>Tipos de reporte</h2>
<body>
  <div class="warehouse-background">
     <div class="button-container">
      <a href="{{ route('reporte-de-venta') }}" class="button">De venta</a>
   
      <button class="button">Inventario</button>
      <button class="button">Costos</button>
    </div>
  </div>
</body>
</html>
