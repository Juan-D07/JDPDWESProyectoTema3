<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tema 3 · Juan Miguel Dominguez </title>

    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

        *{
            box-sizing: border-box;
            font-family: Oswald;
            font-weight: 400; 

          }

          html{
            scroll-behavior: smooth;
          }

          body{
            margin: 0;
            color:black;
            font-family: Roboto, Arial;
            background-color: rgb(255, 253, 253);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
          }

          header{
            display:flex;
            background-color: rgb(10, 10, 10);
            color: white;
            height: 120px;
            align-items: center;
          }

          .header-izq img{
            height: 100px;
            border-radius: 50px;
            border: 2px solid orange;
            padding:0px 0px 2px 2px
          }

          .header-izq{
            flex:1;
            align-content: center;
          }

          .header-der{
            flex:1;
          }

          h2{
            text-align: center;
            font-size: 1.9vw;
            border-bottom: 2px solid orange;
            padding: 4px;
            margin: 0 12vw;
          }

          a {
            text-decoration: none; 
            color: black;
          }
          a:hover {
            color: orange;
          }
          
        footer{
            margin-top: auto;
            background-color: rgb(10, 10, 10);
            padding: 4px;
            color:white;
            font-size: 20px;
            font-style:normal;
          }

          .foo-txt{
            text-align: center;
          }

          .miweb-link{
            color:white;
            text-decoration: none;
          }

          .miweb-link:hover{
            color:orange;
          }


          @media (min-width:621px) and (max-width: 1001px){
              h2{
              font-size: 20px;
            }
          }

          @media (max-width: 620px){
             h2{
              font-size: 16px;
            }

          }

          @media (min-width: 1800px){
            h2{
              font-size: 36px;
            }
          }


    </style>

</head>
<body>
  <header>

    <div class="header-izq">
      <h2> UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</h2>
    </div>

    <div class="header-der">
      <h2> Juan Miguel Dominguez Perdigon</h2>
    </div>
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
$bSoleado = false;

echo '<h3> Imprir por pantalla con "echo" </h3>';

echo '<p> la variable <span class="nombre"> $sNombre </span> as de '. "<span class='tipo'>gettype($sNombre)</span> y contiene el <span class='valor'>$sNombre </span></p>";
echo '<p> la variable <span class="nombre"> $iEdad </span> as de '. "<span class='tipo'>gettype($iEdad)</span> y contiene el <span class='valor'>$iEdad </span></p>";
echo '<p> la variable <span class="nombre"> $fSaldo </span> as de '. "<span class='tipo'>gettype($fSaldo)</span> y contiene el <span class='valor'>$fSaldo </span></p>";
echo '<p> la variable <span class="nombre"> $bSoleado </span> as de '. "<span class='tipo'>gettype($bSoleado)</span> y contiene el <span class='valor'>$bSoleado </span></p>";

?>

  </main>

  <footer>
    <address>
      <p class="foo-txt">
        © 2026 <span ><a class="miweb-link" href="../indexProyectoTema3.php" >Juan Miguel Dominguez</a></span> Todos los derechos reservados. <span ><a class="miweb-link" href="https://github.com/Juan-D07/JDPDWESProyectoTema3" target="_blank">Github</a></span>
      </p>
    </address>
  </footer>
  
</body>
</html>

