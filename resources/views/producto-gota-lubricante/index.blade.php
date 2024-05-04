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
    
  </style>
</head>
<body>
  <div class="warehouse-background">
    <div class="content-container">
      <h2>Gotas lubricantes</h2>
      <p>Gotas lubricantes: Systane Las gotas lubricantes para los ojos humectan y mejoran <br>
      los ojos secos por causas temporales, como el cansancio o el clima seco.</p>
      
      <img src="{{ asset('images/productogotal.png') }}" alt="Otra Imagen">
      <pre><code>Código de referencia300651481228</code></pre>
    </div>
   
  </div>
</body>
</html>
