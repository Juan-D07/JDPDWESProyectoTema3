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
            
            .advertancia{
                font-size: 12px;
                color:gray;
                margin-top: 12px;
                
            }
        </style>

    </head>
    <body>
        <header>

            <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
        </header>

        <main>
            <?php
            require_once '../core/231018libreriaValidacion.php';
            //Inicializacion de variables
            $entradaOK = true; // Variable que nos indica que todo va bien
            //Array donde recogemos los mensajes de error
            $aError = [
                'nombre' => "",
                'fechaNacimiento' => "",
                'sueldo' => ""];
            //Array donde recogemos la respuestas correctas
            $aRespuesta = [
                'nombre' => "",
                'fechaNacimiento' => "",
                'sueldo' => ""];

            // Comprueba si el formulario se a enviado
            if (isset($_REQUEST["enviar"])) {
                // Validar Entrada
                
                $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"],1000,1,1);
                $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"],date("m/d/Y"),"01/01/1900", 1);
                $aError["sueldo"] = validacionFormularios::comprobarFloatMonetarioES($_REQUEST["sueldo"], PHP_FLOAT_MAX, 0, 1);

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
                $aRespuesta["nombre"] = ($_REQUEST["nombre"]);
                //
                $aRespuesta["fechaNacimiento"] = new DateTime($_REQUEST["fechaNacimiento"]);
                $aRespuesta["sueldo"] = floatval(str_replace(',', '.', $_REQUEST["sueldo"]));


                echo '<h3> Formulario Tratamiento</h3>';
                echo '<p>Nombre: ' . $aRespuesta["nombre"] . '</p>';
                echo '<p>Fecha de Nacimiento: ' . $aRespuesta["fechaNacimiento"]->format("d/m/Y") . '</p>';
                echo '<p>Sueldo: ' . number_format($aRespuesta["sueldo"], 2, ',', '.') . ' € </p>';

            } else {
                // Mostrar Formulario
                ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                    <h3>Formulario: Tratamiento</h3>
                    <label for="nombre" >Nombre:</label>
                    
                    <input type="text" name="nombre" id="nombre" value="<?php echo !empty($_REQUEST["nombre"]) ? htmlspecialchars($_REQUEST["nombre"]): '' ?>"/>
                    
                    <?php echo !empty($aError["nombre"]) ? "<span style='color:red;'>" . $aError['nombre'] . "</span>": '' ?>

                    <br/>
                    
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo !empty($_REQUEST["fechaNacimiento"])&&empty($aError["fechaNacimiento"]) ? htmlspecialchars($_REQUEST["fechaNacimiento"]): '' ?>"/>
                    
                    <?php echo !empty($aError["fechaNacimiento"]) ? "<span style='color:red;'>" . $aError['fechaNacimiento'] . "</span>": '' ?>
                    <br/>
                    <div class="advertancia"> Usar una coma para separar los decimales de los enteros</div>
                    <label for="sueldo" >Sueldo:</label>
                    
                    <input type="text" name="sueldo" id="sueldo" value="<?php echo !empty($_REQUEST["sueldo"]) ? htmlspecialchars($_REQUEST["sueldo"]): '' ?>"/>
                    
                    <?php echo !empty($aError["sueldo"]) ? "<span style='color:red;'>" . $aError['sueldo'] . "</span>": '' ?>
                    
                    <br/>
                    
                    <input type="submit" name="enviar" id="enviar" value="Enviar"/>
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