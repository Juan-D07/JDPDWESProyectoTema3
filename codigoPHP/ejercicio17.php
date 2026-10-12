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
            $aAseintosDisponibilidadTeatro = [["libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "Moises", "libre", "Yolanda", "libre", "libre", "libre", "libre", "libre", "libre", "Juan", "libre", "libre", "libre", "libre", "libre", "libre"],
                        ["libre", "Alvaro", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "libre", "Santiago", "libre", "libre"]];
            echo '<h3> For Each: Asientos Teatro </h3>';

            foreach ($aAseintosDisponibilidadTeatro as $aAseintosDisponibilidadFila) {
                echo '<p>';
                foreach ($aAseintosDisponibilidadFila as $sAseintoDisponibilidad) {
                    if (strcmp($sAseintoDisponibilidad, "libre") == 0) {
                        echo "<span class='libre'> $sAseintoDisponibilidad <span>";
                    } else {
                        echo "<span class='ocupado'> $sAseintoDisponibilidad <span>";
                    }
                }

                echo '</p>';
            }
            echo '<h3> For: Asientos Teatro </h3>';
            for ($i = 0; $i < count($aAseintosDisponibilidadTeatro); $i++) {
                echo '<p>';
                for ($j = 0; $j < count($aAseintosDisponibilidadTeatro[$i]); $j++) {
                    if (strcmp($aAseintosDisponibilidadTeatro[$i][$j], "libre") == 0) {
                        echo "<span class='libre'>" . $aAseintosDisponibilidadTeatro[$i][$j] . " <span>";
                    } else {
                        echo "<span class='ocupado'>" . $aAseintosDisponibilidadTeatro[$i][$j] . " <span>";
                    }
                }

                echo '</p>';
            }
            echo '<h3> While: Asientos Teatro </h3>';
            $iContadorFila = 0;
            while ($iContadorFila < count($aAseintosDisponibilidadTeatro)) {
                echo '<p>';
                $iContadorColumna = 0;
                while ($iContadorColumna < count($aAseintosDisponibilidadTeatro[$iContadorFila])) {
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