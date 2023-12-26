<html>
    <head> 
        <title> Filtros </title>
        <link rel="stylesheet" href="./css/styles.css">
        <meta charset="UTF-8">
    </head>
    <body> 
        <header>
            <nav>
                <ul>
                    <li class="left"><a href="index.html">bauhouse</a></li>
                    <li><a href="explore.html">explore</a></li>
                    <li><a href="communities.html">communities</a></li>
                    <li><a href="events.html">events</a></li>
                    <li><a href="about.html">about bauhaus</a></li>
                    <li><a href="form_login.php">you, designer</a></li>
                </ul>
            </nav>
        </header>

        <form action="resultados.php" method="post">
                <div id="filtros">
                    <div class="contenedor-botones">
                        <label>
                            <input type="radio" value="packaging" name="filtro"> Packaging
                        </label>
                        <label>
                            <input type="radio" value="arquitectura" name="filtro"> Arquitectura
                        </label>
                        <label>
                            <input type="radio" value="uxui" name="filtro"> Diseño UX/UI
                        </label>
                    </div>
                    <div class="contenedor-botones">
                        <label>
                            <input type="radio" value="industrial" name="filtro"> Diseño Industrial
                        </label>
                        <label>
                            <input type="radio" value="videojuegos" name="filtro"> Videojuegos
                        </label>
                        <label>
                            <input type="radio" value="interiores" name="filtro"> Diseño de Interiores
                        </label>
                        <label>
                            <input type="radio" value="mobiliario" name="filtro"> Mobiliario
                        </label>
                    </div>
                    <div class="contenedor-botones">
                        <label>
                            <input type="radio" value="pintura" name="filtro"> Pintura
                        </label>
                        <label>
                            <input type="radio" value="grafico" name="filtro"> Diseño Gráfico
                        </label>
                        <label>
                            <input type="radio" value="indumentaria" name="filtro"> Diseño de Indumentaria
                        </label>
                    </div>
                </div>
                <div class="contenedor_input">
                    <input type="submit" value="Aplicar Filtros">
                </div>
            </form>
        <div class="contenedor-resultados">
        <?php
            // Incluye el archivo "conexion.php" donde se conecta con la base de datos
            include("conexion.php");

            // Crea el array asociativo $filtro con el valor obtenido del formulario
            $filtro = $_POST["filtro"];

            // Variable que contiene una consulta que selecciona todas las columnas de la tabla 'explore' donde el valor de la columna "filtro" es coincide al valor de la variable $filtro. 
            $consulta = mysqli_query($conexion, "SELECT * FROM explore WHERE filtro LIKE '%$filtro%'");

            // Estructura repetitiva: Cada fila de resultados se almacena en el array asociativo $fotos. El bucle continúa mientras hay más filas para recuperar. Los resultados -imagenes- se imprimen en pantalla.
            while ($fotos = mysqli_fetch_array($consulta)) {
            echo '<img src="./img/' . $fotos['imagen'] . '"/>';
            }
            ?>
        </div>

    
        <footer>
            <br>
            <div class="contenido-footer">
                <img class="iconos" src="./img/iconos.png">
            </div>
            <br>
            <div class="contenido-footer"> 
                <ul class="horizontal">
                    <li><a href="index.html">bauhouse</a></li>
                    <li><a href="explore.html">explore</a></li>
                    <li><a href="communities.html">communities</a></li>
                    <li><a href="events.html">events</a></li>
                    <li><a href="about.html">about bauhaus</a></li>
                    <li><a href="form_login.php">you, designer</a></li>
                </ul>
            </div>
            <br>
            <div class="contenido-footer"> ©Copyright 2023 | bauhouse </div>
            <br>
        </footer>

        <style>
            body {
                font-family: 'outfit', sans-serif;
                font-weight: 300;
                margin: 0;
                padding: 0;
            }
    
            form {
                max-width: 100%;
                margin: 20px auto;
                padding: 20px;
            }
    
            #filtros {
                margin-bottom: 20px;
            }
    
            .contenedor-botones {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin-bottom: 10px;
            }
    
            label {
                margin-right: 25px;
                cursor: pointer;
                color: #003B74;
                color: black;
            }

            label:hover{
                font-weight: 500;
            }
            
            .contenedor_input{
                display: flex;
                justify-content: center;
            }
    
            input[type="submit"] {
                background-color: #FFC700; 
                color: black;
                padding: 10px 20px;
                border: none;
                border-radius: 20px;
                cursor: pointer;
        

            }
    
            input[type="submit"]:hover {
                background-color: #003B74; 
                color:white;
            }

            .contenedor-resultados{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                max-width: 100%;
                height: auto;
                margin: 0 auto;
                padding: 20px;
            }

            img{
                display: flex;
                max-width: 100%; 
                max-height: 250px; 
                margin: 20px;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
                animation: entrada 1.5s ease-in-out;
                transform-origin: center center;
                transition: transform 0.4s
            }

            img:hover{
                transform: scale(1.2);
            }

        </style>

    </body>
</html>
