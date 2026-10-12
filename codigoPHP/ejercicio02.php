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
            $sNombre = "Juan Miguel Dominguez";

            $sHorario = <<<HORARIO
        El estudiante $sNombre tiene el siguiente horario los lunes: <br/>
        1. Diseño <br/>
        2. Ciberseguridad <br/>
        3. Entorno Cliente <br/>
        4. Empresa <br/>
        5. Desplieque <br/>                          
        HORARIO;
            $sSentenciaSQL = <<<SQL
        Select c.nombre, sum(p.pvp - (pvp*(descuento/100))) from cliente c
        inner join factura f on f.clienteid=c.clienteID
        inner join lineas_facturas lf on lf.facturaid=f.facturaid
        inner join producto p on p.productoid=lf.productoid
        group by f.clienteid;
        SQL;
            
            echo $sHorario ."<br>" . $sSentenciaSQL;
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