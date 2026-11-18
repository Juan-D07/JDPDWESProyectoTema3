<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tema 3 · Juan Miguel Dominguez </title>
        <link rel="stylesheet" href="../webroot/css/ejercicios.css">
        <style>
            .ocupado{
                color:red;
            }

            .libre{
                color:limegreen;
            }
            main p{
                text-align: center;
            }
        </style>

    </head>
    <body>
        <header>

            <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
        </header>

        <main>
            <?php
            //Inicializamos la matriz de dos filas, representando un teatro
            $aAseintosDisponibilidadTeatro = [["libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "Moises", "libre", "Yolanda", "libre", "libre", "libre", "libre", "libre", "libre", "Juan", "libre", "libre", "libre", "libre", "libre", "libre"],
                        ["libre", "Alvaro", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "Santiago", "libre", "libre"]];
            echo '<h3> For Each: Asientos Teatro </h3>';
            //recorrer matriz con foreach
            foreach ($aAseintosDisponibilidadTeatro as $aAseintosDisponibilidadFila) {
                echo '<p>';
                //recorro el array dentro de la matriz
                foreach ($aAseintosDisponibilidadFila as $sAseintoDisponibilidad) {
                    //comprobacion si el asiento esta libre o ocupado
                    //strcmp devuelve 0 si los string son iguales
                    if (strcmp($sAseintoDisponibilidad, "libre") == 0) {
                        echo "<span class='libre'> $sAseintoDisponibilidad <span>";
                    } else {
                        echo "<span class='ocupado'> $sAseintoDisponibilidad <span>";
                    }
                }

                echo '</p>';
            }
            
            //recorrer matriz con for loop
            echo '<h3> For: Asientos Teatro </h3>';
            for ($i = 0; $i < count($aAseintosDisponibilidadTeatro); $i++) {
                echo '<p>';
                //recorro el array dentro de la matriz
                for ($j = 0; $j < count($aAseintosDisponibilidadTeatro[$i]); $j++) {
                    //comprobacion si el asiento esta libre o ocupado
                    if (strcmp($aAseintosDisponibilidadTeatro[$i][$j], "libre") == 0) {
                        echo "<span class='libre'>" . $aAseintosDisponibilidadTeatro[$i][$j] . " <span>";
                    } else {
                        echo "<span class='ocupado'>" . $aAseintosDisponibilidadTeatro[$i][$j] . " <span>";
                    }
                }

                echo '</p>';
            }
            //recorrer matriz con un while
            echo '<h3> While: Asientos Teatro </h3>';
            $iContadorFila = 0;
            while ($iContadorFila < count($aAseintosDisponibilidadTeatro)) {
                echo '<p>';
                //recorro el array dentro de la matriz
                $iContadorColumna = 0;
                while ($iContadorColumna < count($aAseintosDisponibilidadTeatro[$iContadorFila])) {
                    //comprobacion si el asiento esta libre o ocupado
                    if (strcmp($aAseintosDisponibilidadTeatro[$iContadorFila][$iContadorColumna], "libre") == 0) {
                        echo "<span class='libre'>" . $aAseintosDisponibilidadTeatro[$iContadorFila][$iContadorColumna] . " <span>";
                    } else {
                        echo "<span class='ocupado'>" . $aAseintosDisponibilidadTeatro[$iContadorFila][$iContadorColumna] . " <span>";
                    }
                    $iContadorColumna++;
                }

                echo '</p>';
                $iContadorFila++;
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