<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario</title>
  <style>
    .warehouse-background {
      background-image: url('{{ asset('images/inventarioini.png') }}');
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
    }

    .button:hover {
      background-color: #333; /* valor agg del boton al pasar mouse */
    }
  </style>
</head>
<body>
  <div class="warehouse-background">
    <div class="button-container">
      <button class="button">Productos en existencia</button>
      <button class="button">Productos por vencer</button>
      <button class="button">Productos por agotar</button>
      <button class="button">Productos mayor venta</button>

    </div>
  </div>
</body>
</html>
