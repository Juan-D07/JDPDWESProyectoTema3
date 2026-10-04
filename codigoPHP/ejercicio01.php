<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tema 3 · Juan Miguel Dominguez </title>
    <link rel="stylesheet" href="../webroot/css/ejercicios.css">
    <style>
        .nombre{
            color:red;
        }
        
        .tipo{
            color:blue;
        }
        
        .valor{
            color:green;
        }
    </style>


</head>
<body>
  <header>

      <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
  </header>

  <main>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$sNombre = "Juan";
$iEdad = 18;
$fSaldo = 15.06;
$bSoleado = true;
$aColores = ["rojo", "azul","amarillo"];

echo '<h3> Imprir por pantalla con "echo" </h3>';
echo '<p> la variable <span class="nombre"> $sNombre </span> es de tipo '. "<span class='tipo'>".gettype($sNombre)."</span> y contiene el <span class='valor'>$sNombre </span></p>";
echo '<p> la variable <span class="nombre"> $iEdad </span> es de tipo '. "<span class='tipo'>".gettype($iEdad)."</span> y contiene el <span class='valor'>$iEdad </span></p>";
echo '<p> la variable <span class="nombre"> $fSaldo </span> es de tipo '. "<span class='tipo'>".gettype($fSaldo)."</span> y contiene el <span class='valor'>$fSaldo </span></p>";
echo '<p> la variable <span class="nombre"> $bSoleado </span> es de tipo '. "<span class='tipo'>".gettype($bSoleado)."</span> y contiene el <span class='valor'>$bSoleado </span></p>";
echo '<p> la variable <span class="nombre"> $aColores </span> es de tipo '. "<span class='tipo'>".gettype($aColores)."</span> y contiene el <span class='valor'>$aColores </span></p>";


print '<h3> Imprir por pantalla con "print" </h3>';
print '<p> la variable <span class="nombre"> $sNombre </span> es de tipo '. "<span class='tipo'>".gettype($sNombre)."</span> y contiene el <span class='valor'>$sNombre </span></p>";
print '<p> la variable <span class="nombre"> $iEdad </span> es de tipo '. "<span class='tipo'>".gettype($iEdad)."</span> y contiene el <span class='valor'>$iEdad </span></p>";
print '<p> la variable <span class="nombre"> $fSaldo </span> es de tipo '. "<span class='tipo'>".gettype($fSaldo)."</span> y contiene el <span class='valor'>$fSaldo </span></p>";
print '<p> la variable <span class="nombre"> $bSoleado </span> es de tipo '. "<span class='tipo'>".gettype($bSoleado)."</span> y contiene el <span class='valor'>$bSoleado </span></p>";
print '<p> la variable <span class="nombre"> $aColores </span> es de tipo '. "<span class='tipo'>".gettype($aColores)."</span> y contiene el <span class='valor'>$aColores </span></p>";


printf('<h3> Imprir por pantalla con "printf" </h3>');
printf('<p> la variable <span class="nombre"> %s </span> es de tipo '. "<span class='tipo'> %s </span> y contiene el <span class='valor'> %s </span></p>",'$sNombre',gettype($sNombre),$sNombre);
printf('<p> la variable <span class="nombre"> %s </span> es de tipo '. "<span class='tipo'> %s </span> y contiene el <span class='valor'> %d </span></p>",'$iEdad',gettype($iEdad),$iEdad);
printf('<p> la variable <span class="nombre"> %s </span> es de tipo '. "<span class='tipo'> %s </span> y contiene el <span class='valor'> %.2f </span></p>",'$fSaldo',gettype($fSaldo),$fSaldo);
printf('<p> la variable <span class="nombre"> %s </span> es de tipo '. "<span class='tipo'> %s </span> y contiene el <span class='valor'> %s </span></p>",'$bSoleado',gettype($bSoleado),$bSoleado);
printf('<p> la variable <span class="nombre"> %s </span> es de tipo '. "<span class='tipo'> %s </span> y contiene el <span class='valor'> %s </span></p>",'$aColores',gettype($aColores),$aColores);


print_r('<h3> Imprir por pantalla con "print_r" </h3>');
print_r('<p> la variable <span class="nombre"> $sNombre </span> es de tipo '. "<span class='tipo'>".gettype($sNombre)."</span> y contiene el <span class='valor'>$sNombre </span></p>");
print_r('<p> la variable <span class="nombre"> $iEdad </span> es de tipo '. "<span class='tipo'>".gettype($iEdad)."</span> y contiene el <span class='valor'>$iEdad </span></p>");
print_r('<p> la variable <span class="nombre"> $fSaldo </span> es de tipo '. "<span class='tipo'>".gettype($fSaldo)."</span> y contiene el <span class='valor'>$fSaldo </span></p>");
print_r('<p> la variable <span class="nombre"> $bSoleado </span> es de tipo '. "<span class='tipo'>".gettype($bSoleado)."</span> y contiene el <span class='valor'>$bSoleado </span></p>");
print_r('<p> la variable <span class="nombre"> $aColores </span> es de tipo '. "<span class='tipo'>".gettype($aColores)."</span> y contiene el <span class='valor'>");
print_r($aColores);
print_r("</span></p>");


echo '<h3> Imprir por pantalla con "var_dump" </h3>';
echo '<p> la variable <span class="nombre"> $sNombre </span> es de tipo '. "<span class='tipo'>".gettype($sNombre)."</span> y contiene el <span class='valor'>"; 
echo var_dump($sNombre)." </span></p>";
echo '<p> la variable <span class="nombre"> $iEdad </span> es de tipo '. "<span class='tipo'>".gettype($iEdad)."</span> y contiene el <span class='valor'>"; 
echo var_dump($iEdad)." </span></p>";
echo '<p> la variable <span class="nombre"> $fSaldo </span> es de tipo '. "<span class='tipo'>".gettype($fSaldo)."</span> y contiene el <span class='valor'>"; 
echo var_dump($fSaldo)." </span></p>";
echo '<p> la variable <span class="nombre"> $bSoleado </span> es de tipo '. "<span class='tipo'>".gettype($bSoleado)."</span> y contiene el <span class='valor'>"; 
echo var_dump($bSoleado)." </span></p>";
echo '<p> la variable <span class="nombre"> $aColores </span> es de tipo '. "<span class='tipo'>".gettype($aColores)."</span> y contiene el <span class='valor'>"; 
echo var_dump($aColores)." </span></p>";
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