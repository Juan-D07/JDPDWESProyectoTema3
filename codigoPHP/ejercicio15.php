<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Tema 3 · Juan Miguel Dominguez </title>
        <link rel="stylesheet" href="../webroot/css/ejercicios.css">
        <style>
            .dia{
                color:red;
            }

            .paga{
                color:blue;
            }
        </style>

    </head>
    <body>
        <header>

            <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
        </header>

        <main>
            <?php
            
            $aSueldoSemanal = ["Lunes" => 50,
                "Martes" => 60,
                "Miercoles" => 55.10,
                "Jueves" => 56,
                "Viernes" => 20,
                "Sabado" => 40.77 ,
                "Domingo" => 10];
            $ftotal=0;
            echo '<h3> Arrays: Sueldo </h3> <ul>';
            
            foreach($aSueldoSemanal as $sdia => $fsueldo){
            echo "<li> el dia <span class='dia'>$sdia</span> cobro <span class='paga'>$fsueldo</span> </li>";
            $ftotal+=$fsueldo;
            }
            printf( "</ul> <p> Paga de la semana fue %.2f",$ftotal );  
            
                         
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