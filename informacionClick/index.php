<!DOCTYPE html>
<html>
<head>
    <title>Información del Host</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }
        #info {
            margin-top: 30px;
            display: none;
        }
    </style>
</head>
<body>

    <h1>Concienciar sobre la información del host</h1>
    <button onclick="mostrarInformacion()">Haz clic para ver información del host</button>
    <div id="info">
        <p><strong>Dirección IP:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        <p><strong>Navegador Web:</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p><strong>Servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
    </div>

    <script>
        function mostrarInformacion() {
            document.getElementById('info').style.display = 'block';
        }
    </script>

</body>
</html>
