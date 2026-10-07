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
            <?php

            
            $oFechaHoraActual= new DateTime(); //Declaro un objeto de la clase DateTime
            $oFechaCaidaMuroBerlin= new DateTime('1989-11-9'); //Declaro un objeto de la clase DateTime con la fecha de la caida del muro de Berlin
             
            echo '<p> Marca de tiempo de hoy (timestamp): ' .$oFechaHoraActual->getTimestamp() .'</p>';
            echo '<p> Marca de tiempo de la Caida del Muro de Berlin: ' .$oFechaCaidaMuroBerlin->getTimestamp() .'</p>';
            echo '<p> Fecha de la Caida del Muro de Berlin: ' .$oFechaCaidaMuroBerlin->format("d-m-Y") .'</p>';
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