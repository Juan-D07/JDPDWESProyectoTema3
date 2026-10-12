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

            echo '<h3> Funciones: Asientos Teatro </h3>';

            while (key($aAseintosDisponibilidadTeatro)!== null) {
                echo '<p>';
                $aAseintosDisponibilidadTeatroFila=current($aAseintosDisponibilidadTeatro);
                while (key($aAseintosDisponibilidadTeatroFila)!== null) {
                    if (strcmp(current($aAseintosDisponibilidadTeatroFila), "libre") == 0) {
                        echo "<span class='libre'>" . current($aAseintosDisponibilidadTeatroFila) . " <span>";
                    } else {
                        echo "<span class='ocupado'>" . current($aAseintosDisponibilidadTeatroFila) . " <span>";
                    }
                    next($aAseintosDisponibilidadTeatroFila);
                }

                echo '</p>';
                next($aAseintosDisponibilidadTeatro);
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