<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tema 3 · Juan Miguel Dominguez </title>
        <link rel="stylesheet" href="../webroot/css/ejercicios.css">
        <style>
            input{
                margin: 10px 5px;
            }
            #nombre,#fechaNacimiento,#sueldo{
                background-color: #fffce0;
                border:1px solid black;
            }
            /* Remove arrows for Chrome, Safari, Edge, and Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }
            /* Remove arrows for Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
        </style>

    </head>
    <body>
        <header>

            <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
        </header>

        <main>
            <?php
            // Comprueba si el formulario se a enviado
            if (isset($_REQUEST["submit"])) {
                // Código que se ejecuta cuando se envía el formulario
                $oFechaNacimientoDateTime = new DateTime($_REQUEST["fechaNacimiento"]);

                echo '<h3> Formulario Tratamiento</h3>';
                echo '<p>Nombre: ' . $_REQUEST["nombre"] . '</p>';
                echo '<p>Fecha de Nacimiento: ' . $oFechaNacimientoDateTime->format("d/m/Y") . '</p>';
                echo '<p>Sueldo: ' . $_REQUEST["sueldo"] . '</p>';
            } else {
                // Código que se ejecuta antes de rellenar el formulario
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                    <h3>Formulario: Tratamiento</h3>
                    <label for="nombre" >Nombre:</label>
                    <input type="text" name="nombre" id="nombre"/>
                    <br/>
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value=/>

                    <br/>
                    <label for="sueldo">Sueldo:</label>
                    <input type="number" name="sueldo" id="sueldo" step="any"/>
                    <br/>
                    <input type="submit" name="submit" id="submit"/>
                </form>  
            <?php
            }
            ?>

        </main>

        <footer>
            <address>
                <p class="foo-txt">
                    © 2026 <span ><a class="miweb-link" href="../../JDPDWESProyectoDWES/indexProyectoDWES.php" >Juan Miguel Dominguez</a></span> Todos los derechos reservados.
                    <a href="https://github.com/Juan-D07/JDPDWESProyectoTema3" target="_blank"> <img class="github" src="../webroot/images/github.png"  alt="Github logo"/></a>
                    <a href="../indexProyectoTema3.php"> <img class="casa" src="../webroot/images/casa.png"  alt="Casa logo"/></a>
                </p>
            </address>
        </footer>

    </body>
</html>