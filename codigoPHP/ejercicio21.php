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
                background-color: #fff7a1;
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
            <form action="Tratamiento.php" name="formulario" method="post">
                <h3>Formulario: Tratamiento</h3>
                <label for="nombre" >Nombre:</label>
                <input type="text" name="nombre" id="nombre"/>
                <br/>
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" value=/>
                <!-- <input type="datetime" name="fechaNacimiento" id="fechaNacimiento"/> -->
                
                <br/>
                <label for="sueldo">Sueldo:</label>
                <input type="number" name="sueldo" id="sueldo" step="any"/>
                <br/>
                <input type="submit" name="submit" id="submit"/>
            <?php
   
            ?>
           </form>     
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