<html>
    <head> 
        <title> Iniciar sesión </title>
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
        <div class="contenedor_formulario"> 
            <div class="contenido_formulario">
                <h2>Iniciar sesión</h2>
                <br>
                <form action="login.php" method="post">
                    <label>Correo electrónico
                        <input name="mail" type="email" maxlength="30" />
                    </label><br />
                    <label>Contraseña
                        <input type="password" name="password" maxlength="12" />
                    </label><br />
                        <input type="submit" value="Login"/>	
                </form>
                <a href="form_registro.php">Registrate</a> 
            </div>
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
    </body>
    <style>
            nav a{
                text-decoration: none;
            }

            .contenedor_formulario{
                display:flex;
                justify-content: center;
                margin-left: 350;
                margin-top: 235px;
                margin-bottom: 235;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-family: 'outfit', sans-serif;
                font-size: large;
                font-weight: 200;
            }
            input {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                box-sizing: border-box;
                
            }
            a {
                font-family: 'outfit', sans-serif;
                font-size: large;
                margin-top: 10px;
                text-align: center;
                text-decoration: none;
                color: black;
                font-weight: 300;
            }
            
        </style>
</html>