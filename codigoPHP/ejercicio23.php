<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tema 3 · Juan Miguel Dominguez </title>
        <link rel="stylesheet" href="../webroot/css/ejercicios.css">
        <?php require_once '../core/231018libreriaValidacion.php'; ?>
        <style>
            input{
                margin: 10px 5px;
            }
            #nombre,#fechaNacimiento,#apellido{
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
            //Inicializacion de variables
            $entradaOK = true; // Variable que nos indica que todo va bien
            //Array donde recogemos los mensajes de error
            $aError = [
                'nombre' => "",
                'apellido' => "",
                'fechaNacimiento' => ""];
            //Array donde recogemos la respuestas correctas
            $aRespuesta = [
                'nombre' => "",
                'apellido' => "",
                'fechaNacimiento' => ""];

            // Comprueba si el formulario se a enviado
            if (isset($_REQUEST["enviar"])) {
                // Validar Entrada
                // $oFechaHoraActual= new DateTime();
                //$oFechaHoraActual->format("d/m/Y")
                
                $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"],1000,1,1);
                $aError["apellido"] = validacionFormularios::comprobarAlfabetico($_REQUEST["apellido"],1000,1,1);
                $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"],"01/01/2027","01/01/1900", 1);

                foreach ($aError as $value) {
                    if (!empty($value)) {
                        $entradaOK = false;
                    }
                }
            }
            // El formulario no se ha enviado nunca
            else {
                $entradaOK = false;
            }

            if ($entradaOK) {
                //Cargar la variable $aRespuestas y tratamiento de datos OK
                $aRespuesta["nombre"] = htmlspecialchars($_REQUEST["nombre"]);
                $aRespuesta["apellido"] = htmlspecialchars($_REQUEST["apellido"]);
                $aRespuesta["fechaNacimiento"] = htmlspecialchars($_REQUEST["fechaNacimiento"]);

                $oFechaNacimientoDateTime = new DateTime($aRespuesta["fechaNacimiento"]);

                echo '<h3> Formulario Tratamiento</h3>';
                echo '<p>Nombre: ' . $aRespuesta["nombre"] . '</p>';
                echo '<p>Apellido: ' . $aRespuesta["apellido"] . '</p>';
                echo '<p>Fecha de Nacimiento: ' . $oFechaNacimientoDateTime->format("d/m/Y") . '</p>';
            } else {
                // Mostrar Formulario
                ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                    <h3>Formulario: Tratamiento</h3>
                    <label for="nombre" >Nombre:</label>
                    <input type="text" name="nombre" id="nombre"/>
                    <?php
                    if (!empty($aError["nombre"])) {
                        echo "<span style='color:red;'>" . $aError['nombre'] . "</span>";
                    }
                    ?>
                    <br/>
                    <label for="apellido" >Apellido:</label>
                    <input type="text" name="apellido" id="apellido"/>
                    <?php
                    if (!empty($aError["apellido"])) {
                        echo "<span style='color:red;'>" . $aError['apellido'] . "</span>";
                    }
                    ?>
                    <br/>
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value=/>
                    <?php
                    if (!empty($aError["fechaNacimiento"])) {
                        echo "<span style='color:red;'>" . $aError['fechaNacimiento'] . "</span>";
                    }
                    ?>

                    <br/>
                    <input type="submit" name="enviar" id="enviar"/>
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