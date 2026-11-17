<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tema 3 · Juan Miguel Dominguez </title>

        <link rel="stylesheet" href="../webroot/css/ejercicios.css">


    </head>
    <body>
        <header>

            <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
        </header>

        <main>
            <h3> Mostrar Variables superglobales</h3>
            <?php

            // Recorrer el array de variables super global
            foreach ($GLOBALS as $nombreSuperglobal => $arraySuperglobal) {
                echo "<h3 class='superGlobal'>$nombreSuperglobal</h3>";
                //combrobacion de que la variable no este vacia
                if (!empty($arraySuperglobal)) {
                    echo "<ul>";
                    //recorrer la variable  super global
                    foreach ($arraySuperglobal as $nombre => $contenido) {
                        //comprobacion de que el valor dentro de la variable sea un array
                        if (is_array($contenido)) {
                            $contenido = "<pre>" . print_r($contenido, true) . "</pre>";
                        }
                        echo "<li><span style='color:blue;font-weight:bold'>$nombre : </span> $contenido</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<div class='vacio'>La variable $nombreSuperglobal esta vacia en este momento.</div>";
                }
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