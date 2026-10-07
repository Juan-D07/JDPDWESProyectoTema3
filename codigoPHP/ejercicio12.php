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
            
            echo '<h3> Mostrar Variables superglobales con print r</h3>';
            
            echo '<p> varialbe global $_SERVER';
            /** @var type $_SERVER */
            print_r($_SERVER);
            echo '</p>';  
            
            echo '<h3> Mostrar Variables superglobales con foreach</h3>';
            
            echo '<p> varialbe global $_SERVER <ul>';
            /** @var type $_SERVER */
            
            foreach($_SERVER as $codigo => $contenido){
            echo "<li> el codigo $codigo contiene $contenido </li>";
            }
            echo '</ul>';  
            
            
                         
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