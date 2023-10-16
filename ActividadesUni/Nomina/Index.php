</html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Nomina</title>
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <form action="Nomina.php" method="post">
        <div class="containernomi">
            <div class="divnomin">
                <h1>NOMINA</h1>
                <ul>
                    <li>
                        <h2>Nombre Empleados</h2>
                        <select name="Nombre">
                            <option value="1">MARIO ORTIZ</option>
                            <option value="2">CLEMENTE CONTRERAS</option>
                            <option value="3">LILIANA MAYORGA</option>
                            <option value="4">JOSE GERMAN RUIZ</option>
                            <option value="5">LUCY PORTACIO</option>
                            <option value="6">HERNANDO FORERO</option>
                        </select>
                    </li>
                    <li>
                        <h2>Dias Laborados</h2>
                        <input type="number" min="0" name="Dias_lab" required>
                    </li>
                    <li>
                        <h2>HD</h2>
                        <input type="number" min="0" name="HD" required>
                    </li>
                    <li>
                        <h2>HN</h2>
                        <input type="number" min="0" name="HN" required>
                    </li>
                    <li>
                        <h2>HDOM</h2>
                        <input type="number" min="0" name="HDOM" required>
                    </li>
                    <li>
                        <h2>Comisiones</h2>
                        <input type="number" min="0" name="COMNISIONES" required>
                    </li>
                    <li id="last">
                        <h2>Libranza</h2>
                        <input type="number" id="last" min="0" name="LIBRANZA" required>
                    </li>
                    <li id="boton">
                        <input id="Confirmar" type="submit" value="Calcular">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</body>

</html>