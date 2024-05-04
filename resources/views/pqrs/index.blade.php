<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PQRS</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/pqrs.png') }}');
            background-size: cover; 
            background-position: top center;
            height: 100vh; 
            overflow: hidden; 
        }
        .container {
            padding-top: 300px; 
            overflow-y: auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Modificar y consultar PQRS</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Fecha creación</th>
            <th>Observación</th>
        </tr>
        <tr>
            <td>50001</td>
            <td>COO123</td>
            <td>PENDI..</td>
            <td>24/02/24</td>
            <td>NO ME GUSTA..</td>
        </tr>
        <tr>
            <td>P0001</td>
            <td>C05603</td>
            <td>ATEND..</td>
            <td>20/01/24</td>
            <td>FALTA LA INTE..</td>
        </tr>
        <tr>
            <td>R0001</td>
            <td>Q0001</td>
            <td>CO1235</td>
            <td>C00013</td>
            <td>PENDI..</td>
        </tr>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>13/02/24</td>
            <td>ME ATENDIER..</td>
        </tr>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>30/01/24</td>
            <td>ME ROBARON ..</td>
        </tr>
    </table>
</div>

</body>
</html>
