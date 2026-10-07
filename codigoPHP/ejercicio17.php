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
        </style>

    </head>
    <body>
        <header>

            <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
        </header>

        <main>
            <?php
            
            $aAseintosDisponibilidadTeatro = 
                [["ocupado","ocupado","libre","libre","libre","libre"],
                ["libre","ocupado","ocupado","ocupado","libre","libre"],
                ["libre","ocupado","libre","ocupado","ocupado","libre"],
                ["libre","libre","libre","libre","ocupado","ocupado"],
                ["ocupado","ocupado","ocupado","libre","ocupado","ocupado"]];
            echo '<h3> Arrays: Asientos Teatro </h3>';
            
            foreach($aAseintosDisponibilidadTeatro as $aAseintosDisponibilidadFila){
                echo '<p>';
                foreach($aAseintosDisponibilidadFila as $sAseintoDisponibilidad){
                    if (strcmp($sAseintoDisponibilidad, "libre")==0){
                    echo "<span class='libre'> $sAseintoDisponibilidad <span>";
                    }
                    else {
                    echo "<span class='ocupado'> ocup <span>";
                    }
                }
                
            echo '</p>';
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