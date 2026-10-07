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
            //Opcional, el timezone viene desde la configuracion del servidor Web. Ponemos la zona horaria española por defecto
            //date_default_timezone_set("Europe/Madrid"); 
            
            $oFechaHoraActual= new DateTime(); //Declaro un objeto de la clase DateTime
            
             
            echo "<p>Fecha y hora formateada de España: " . $oFechaHoraActual->format('d-m-Y , H:i:s A'). "</p>"; //Imprimo por pantalla la fecha formateada dia-mes-año horas:minutos:segundos
            
            echo '<p> Hoy es ' .$oFechaHoraActual->format("d"). ' de '. $oFechaHoraActual->format("M") . ' de ' .$oFechaHoraActual->format("Y"). ' y son las '.$oFechaHoraActual->format("H:i") . '</p> <br>';
            //numero del dia / nombre del dia abreviado /  nombre del dia completo
            echo '<p> Dia: '.$oFechaHoraActual->format("d"). ' / '. $oFechaHoraActual->format("D"). ' / '. $oFechaHoraActual->format("l") .'</p> ';
            //numero del mes / nombre del mes abreviado /  nombre del mes completo
            echo '<p> Des: '.$oFechaHoraActual->format("m"). ' / '. $oFechaHoraActual->format("M"). ' / '. $oFechaHoraActual->format("F").'</p> ';
            //numero del anio abreviado / numero del anio completo
            echo '<p> Anio: '.$oFechaHoraActual->format("y"). ' / '. $oFechaHoraActual->format("Y"). '</p> ';
            //hora formato 12 horas / hora formato 24 horas
            echo '<p> Hora: '.$oFechaHoraActual->format("h"). ' / '. $oFechaHoraActual->format("H"). '</p> ';
            
            echo '<p> Fecha: '.$oFechaHoraActual->format("d/m/y"). ' / '. $oFechaHoraActual->format("d-m-Y"). '</p> ';
            
            echo '<p> Marca de tiempo (timestamp): ' .$oFechaHoraActual->getTimestamp() .'</p>';
            
            $oFechaCumpleanios= new DateTime("2007-10-22"); //Declaro un objeto de la clase DateTime con parametros del dia, mes y hora
            
            echo '<p> Fecha de nacimento: '.$oFechaCumpleanios->format("d/m/Y").' </p>';
            echo '<p> Naci un ' . $oFechaCumpleanios->format("l") .', en el dia ' . $oFechaCumpleanios->format("d") . ' de '.$oFechaCumpleanios->format("F"). ' de ' .$oFechaCumpleanios->format("Y");
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