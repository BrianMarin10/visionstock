<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Venta</title>
    <style>
        body {
            background-image: url('{{ asset('images/Admin.png') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .download-container {
            display: flex;
            align-items: center;
        }
        select {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #ffffff;
            color: #000000;
            border: none;
            cursor: pointer;
        }
        button {
            margin-left: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Reporte de Venta</h1>
    <div class="download-container">
        <button onclick="downloadFile()">Descargar</button>
        <select id="file-format">
            <option value="csv">CSV</option>
            <option value="pdf">PDF</option>
        </select>
    </div>

    <script>
    function downloadFile() {
        var fileFormat = document.getElementById('file-format').value;
        var fileName = 'reportedeventa.' + fileFormat;
        var url = '{{ route("reportedeventa") }}?format=' + fileFormat; // Cambia a "reportedeventa"

        // Crear un elemento <a> temporal para iniciar la descarga
        var link = document.createElement('a');
        link.href = url;
        link.download = fileName;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script>


</body>
</html>
