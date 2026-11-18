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

            date_default_timezone_set("Europe/Madrid"); 
            $oFechaHoraActual= new DateTime(); //Declaro un objeto de la clase DateTime
            
            
            echo '<h3> Operaciones Aritmeticas con Fechas </h3>'; 
            
            // añado 60 dias a la fecha actual formato (P:perido, 60D: dias)
            $oFechaHoraActual->add(new DateInterval('P60D'));
            // $oFechaHoraActual->modify('+60 day'); //otra forma de hacerlo
            echo '<p> fecha y dia dentro de 60 dias: ' .$oFechaHoraActual->format("d-m-Y") .' , '. $oFechaHoraActual->format("l").'</p>';
            
            $oFechaHoraActual->sub(new DateInterval('P60D')); // resto los dias
            // añado 1 año, 2 meses y 4 dias a la fecha actual formato (P:perido, 1Y:año, 2M: meses, 4D: dias)
            $oFechaHoraActual->add(new DateInterval('P1Y2M4D'));
            echo '<p> fecha y dia dentro de 1 año, 2 meses y 4 dias: ' .$oFechaHoraActual->format("d-m-Y") .' , '. $oFechaHoraActual->format("l").'</p>';
            
            // añado 60 dias a la fecha actual formato (PT:perido tiempo, 2H: horas)
            //$oFechaHoraActual->add(new DateInterval('PT2H30M'));
            $oFechaHoraActual->modify('+2 hour 30 minutes'); //otra forma de hacerlo
            echo '<p> Hora dentro de 2 horas y media: ' .$oFechaHoraActual->format("H:m:s") .'</p>';
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