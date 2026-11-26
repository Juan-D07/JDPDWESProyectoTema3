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
            #fechaNacimiento{
                width: 110px
            }
            #sueldo{
                width: 120px;
                /*text-align: right;*/
            }

            #telefono{
                background-color: white;
                width: 130px;
            }

            #fechaRegistro{
                background-color: #e0e0e0;
                width: 145px;
                text-align: center;

            }

            .grupo-terminos{
                text-align: center;
                position:relative;
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
                margin-right: 8px ;

            }

            input[type="submit"]{
                height: 40px;
                width:100px;
                font-size: 20px;
                background-color: orange;
                border-radius: 45px;
                border: none;
                font-weight: bold;
                transition: ease-in-out .2s;
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
                'sueldo' => "",
                'telefono' => "",
                'genero' => "",
                'estadoCivil' => "",
                'aceptaTerminos' => ""];
            //Array donde recogemos la respuestas correctas (si $entradaOK)
            $aRespuesta = [
                'nombre' => "",
                'fechaNacimiento' => "",
                'sueldo' => "",
                'telefono' => "",
                'genero' => "",
                'estadoCivil' => ""];

            $aEstadoCivilOpciones = ['Soltero/a', 'Casado/a', 'Divorciado/a', 'Viudo/a'];

            //Para cada campo del formulario: Validar entrada y actuar en consecuencia
            // Comprueba si el formulario se a enviado
            if (isset($_REQUEST["enviar"])) {
                // Validar Entrada

                $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 1000, 1, 1);
                $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"], date("m/d/Y"), "01/01/1900", 1);
                $aError["sueldo"] = validacionFormularios::comprobarFloatMonetarioES($_REQUEST["sueldo"], PHP_FLOAT_MAX, 0, 1);
                //campo opcional
                $aError['telefono'] = validacionFormularios::validarTelefono($_REQUEST["telefono"], 0);

                // Valida el Desplegable de Estado Civil. Uso del metodo estatico ValidarElementoEnLista
                $sEstadoCivilSeleccionado = isset($_REQUEST['estadoCivil']) ? $_REQUEST['estadoCivil'] : '';
                $aError['estadoCivil'] = empty($sEstadoCivilSeleccionado) ? "Debe seleccionar una opcion" : validacionFormularios::validarElementoEnLista($sEstadoCivilSeleccionado, $aEstadoCivilOpciones);

                //validar que se hayan entregado
                $aError['genero'] = empty($_REQUEST['genero']) ? "Debe seleccionar una opcion" : "";
                $aError['aceptaTerminos'] = empty($_REQUEST['aceptaTerminos']) ? "Es obligatorio aceptar los terminos." : "";

                foreach ($aError as $value) {
                    if (!empty($value)) { //Cuando encontremos un error
                        $entradaOK = false;
                    }
                }
            }
            // El formulario no se ha enviado nunca
            else {
                $entradaOK = false;
            }
            //Tratamiento del formulario
            if ($entradaOK) {
                //Cargar la variable $aRespuestas y tratamiento de datos OK
                $aRespuesta["nombre"] = ($_REQUEST["nombre"]);
                $aRespuesta["fechaNacimiento"] = new DateTime($_REQUEST["fechaNacimiento"]);
                $aRespuesta["sueldo"] = floatval(str_replace(',', '.', $_REQUEST["sueldo"]));
                $aRespuesta["telefono"] = ($_REQUEST["telefono"]);
                $aRespuesta["estadoCivil"] = ($_REQUEST["estadoCivil"]);
                $aRespuesta["genero"] = $_REQUEST["genero"];
                ?>

                <div class="container">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                        <h3>Resultados Formulario</h3>
                        <table class="resultados">
                            <tr>
                                <td>Nombre:</td>
                                <td><b><?php echo $aRespuesta["nombre"]; ?></b></td>
                            </tr>
                            <tr>
                                <td>Fecha de Nacimiento:</td>
                                <td><b><?php echo $aRespuesta["fechaNacimiento"]->format("d/m/Y"); ?></b></td>
                            </tr>
                            <tr>
                                <td>Sueldo:</td>
                                <td><b><?php echo number_format($aRespuesta["sueldo"], 2, ',', '.') ?> €</b></td>
                            </tr>
                            <tr>
                                <td>Telefono:</td>
                                <td><b><?php echo $aRespuesta["telefono"]; ?></b></td>
                            </tr>
                            <tr>
                                <td>Genero:</td>
                                <td><b><?php echo $aRespuesta["genero"]; ?></b></td>
                            </tr>
                            <tr>
                                <td>Estado Civil:</td>
                                <td><b><?php echo $aRespuesta["estadoCivil"]; ?></b></td>
                            </tr>
                            <tr>
                                <td>Terminos y condiciones:</td>
                                <td><b>Aceptados</b></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <?php
            } //Mostrar el formulario hasta que lo rellenemos correctamente
            else { 
                // Mostrar Formulario
                ?>
                <div class="container">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                        <h3>Formulario: Tratamiento</h3>
                        <table class="formulario">
                            <tr>
                                <td><label for="nombre" >Nombre:</label></td>
                                <td><input type="text" name="nombre" id="nombre" value="<?php echo!empty($_REQUEST["nombre"])&&empty($aError["nombre"]) ? $_REQUEST["nombre"] : '' ?>"/><!-- Mostrar los tatos tecleados correctamente en intentos anteriores-->
                                    <?php echo!empty($aError["nombre"]) ? "<span style='color:red;'>" . $aError['nombre'] . "</span></td>" : '</td>' ?> <!-- Mostrar mensajes de error -->
                            </tr>
                            <tr>
                                <td><label for="fechaNacimiento">Fecha de Nacimiento:</label></td>
                                <td><input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo!empty($_REQUEST["fechaNacimiento"]) && empty($aError["fechaNacimiento"]) ? $_REQUEST["fechaNacimiento"] : '' ?>"/>
                                    <?php echo!empty($aError["fechaNacimiento"]) ? "<span style='color:red;'>" . $aError['fechaNacimiento'] . "</span></td>" : '</td>' ?>
                            </tr>
                            <tr>

                                <td><label for="sueldo" ><span class="advertancia">Usar una coma para separar los decimales de los enteros</span> Sueldo:</label></td>
                                <td><input type="text" name="sueldo" id="sueldo" value="<?php echo!empty($_REQUEST["sueldo"])&& empty($aError["sueldo"])? $_REQUEST["sueldo"] : '' ?>"/>
                                    <?php echo!empty($aError["sueldo"]) ? "<span style='color:red;'>" . $aError['sueldo'] . "</span></td>" : '</td>' ?>
                            </tr>
                            <tr>
                                <td><label for="telefono">Telefono:</label></td>
                                <td><input type="text" name="telefono" id="telefono" value="<?php echo!empty($_REQUEST["telefono"]) && empty($aError["telefono"]) ? $_REQUEST["telefono"] : ''; ?>"/>
                                    <span class='error'><?php echo!empty($aError["telefono"]) ? "<div style='color:red;width:300px;display:inline-block'>" . $aError['telefono'] . "</div></td>" : '</td>' ?></span>
                            </tr>
                            <tr>
                                <td><label>Género:</label></td>
                                <td><div class="grupo-opciones">
                                        <input type="radio" name="genero" id="generoM" value="Masculino" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'Masculino') ? 'checked' : ''; ?>/>
                                        <label for="generoM" class="label-inline">Masculino</label>

                                        <input type="radio" name="genero" id="generoF" value="Femenino" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'Femenino') ? 'checked' : ''; ?>/>
                                        <label for="generoF" class="label-inline">Femenino</label>

                                        <input type="radio" name="genero" id="generoO" value="Otro" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'Otro') ? 'checked' : ''; ?>/>
                                        <label for="generoO" class="label-inline">Otro</label>
                                        <span class='error'><?php echo!empty($aError["genero"]) ? "<span style='color:red;'>" . $aError['genero'] . "</span></td>" : '</td>' ?></span>
                                    </div>
                            </tr>
                            <tr>
                                <td><label for="estadoCivil">Estado Civil:</label></td>
                                <td><select name="estadoCivil" id="estadoCivil">
                                        <option value="">-- Seleccione una opcion --</option>
                                        <option value="Soltero/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Soltero/a') ? 'selected' : ''; ?>>Soltero/a</option>
                                        <option value="Casado/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Casado/a') ? 'selected' : ''; ?>>Casado/a</option>
                                        <option value="Divorciado/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Divorciado/a') ? 'selected' : ''; ?>>Divorciado/a</option>
                                        <option value="Viudo/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Viudo/a') ? 'selected' : ''; ?>>Viudo/a</option>
                                    </select>
                                    <span class='error'><?php echo!empty($aError["estadoCivil"]) ? "<span style='color:red;'>" . $aError['estadoCivil'] . "</span></td>" : '</td>' ?></span>
                            </tr>
                            <tr>
                                <td colspan="2"><div class="grupo-terminos" >
                                        <input type="checkbox" name="aceptaTerminos" id="aceptaTerminos" value="SI" <?php echo isset($_REQUEST['aceptaTerminos']) ? 'checked' : ''; ?>/>
                                        <label for="aceptaTerminos" class="label-inline">Acepto los términos y condiciones</label>
                                        
                                    <span class='error'><?php echo!empty($aError["aceptaTerminos"]) ? "<span style='color:red;position:absolute;right:60px;top:3px'>" . $aError['aceptaTerminos'] . "</span></div></td>" : '</div></td>' ?></span>
                            </tr>
                            <tr>
                                <td><label for="fechaRegistro" >Fecha y Hora de Registro:</label></td>
                                <td><input type="text" name="fechaRegistro" id="fechaRegistro" value="<?php echo date('d/m/Y H:i:s'); ?>" readonly/></td>
                            </tr>
                        </table>
                        <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                    </form>
                </div>
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