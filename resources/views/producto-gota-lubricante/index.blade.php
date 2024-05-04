<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producto-gota-lubricante</title>
  <style>
    .warehouse-background {
      background-image: url('{{ asset('images/inventarioini.png') }}');
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column; 
    }

    .content-container {
      background-color: rgba(0, 0, 0, 0.8); 
      color: #fff; 
      padding: 20px;
      border-radius: 10px;
      margin-top: 20px; 
      text-align: center;
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
      margin: 0 5px; 
      transition: background-color 0.3s, color 0.3s; 
    }

    .button:hover {
      background-color: #333; 
    }
  </style>
</head>
<body>
  <div class="warehouse-background">
    <div class="content-container">
      <h2>Gotas lubricantes</h2>
      <p>Gotas lubricantes: Systane Las gotas lubricantes para los ojos humectan y mejoran <br>
      los ojos secos por causas temporales, como el cansancio o el clima seco.</p>
      <pre><code>Código de referencia300651481228</code></pre>
      <img src="{{ asset('images/otra_imagen.png') }}" alt="Otra Imagen">
    </div>
    <div class="button-container">
      <button class="button">Otra opcion ns</button>
      <button class="button">Otra opcion ns</button>
    </div>
  </div>
</body>
</html>
