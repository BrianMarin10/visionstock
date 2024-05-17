<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona tu método de pago</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
Copy code    .payment-container {
        text-align: center;
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .payment-container h2 {
        margin-bottom: 30px;
    }

    .payment-options {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .payment-option {
        margin: 10px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .payment-option:hover {
        transform: scale(1.1);
    }

    .payment-option img {
        max-width: 100px;
        height: auto;
    }
</style>
</head>
<body>
    <div class="payment-container">
        <h2>Selecciona tu método de pago</h2>
        <div class="payment-options">
            <a href="https://www.nequi.com/" class="payment-option" target="_blank">
                <img src="https://brandemia.org/contenido/subidas/2023/10/nequi-nuevo-logotipo.jpg" alt="Nequi">
            </a>
            <a href="https://www.pse.com.co/" class="payment-option" target="_blank">
                <img src="https://www.sifer.com.co/wp-content/uploads/2021/02/pse-forma.jpg" alt="PSE">
            </a>
            <a href="https://www.bancolombia.com/" class="payment-option" target="_blank">
                <img src="https://www.valoraanalitik.com/wp-content/uploads/2021/04/Bancolombia.jpg" alt="Bancolombia">
            </a>
            <a href="https://www.davivienda.com/" class="payment-option" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Davivienda_logo_Vertical.webp/640px-Davivienda_logo_Vertical.webp.png" alt="Davivienda">
            </a>
        </div>
    </div>
</body>
</html>