<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroJS Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcula_densidad(){
        var masa= 5.97E24;
        var radio= 6378e3;
        var volumen= (4/3)*Math.PI*radio*radio*radio;
        var densidad= masa/volumen;
        var d=document.getElementById("resultadoA");
        d.innerHTML=densidad+' kg/(metro cubico)';
        }
    </script>
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroJS</a></h1>
      <nav>
      <ul>
        <li><a href="index.html" class="current">Inicio</a></li>
        <li><a href=basicoJS.html>Básica</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcula la distancia a la cual gira el satelite sobre la superficie de la tierra </h2>
  <p>Descripción:</p>
  <p>la distancia de la luna a la tierra es de 3.84x10E5 km <br>
la orbita de la luna es circular con un periodo de rotacion(TI)
de 27.32 dias  y el radio de la tierra es de 6378 km.</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    h=radiotierra-radiosatelite(rs)<br>
    rs=raizCubica(Ts2/TI2)rluna
</section>
<section class="datos">
<h2>Datos:</h2>
   distancia de la luna a  la tierra=3.84x10E5 km<br>
   rotacion(TI)= 27.32 dias
   <br>radio=6378 km </p>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)La distancia que gira el satelite sobre la superficie de la tierra es:<br>
    h = 6378 km-3.84x10E5 km(rs)<br>
    rs=sqrt3(90^2/27.32^2)rluna</p>
    <button onclick="calcula_densidad();">Presiona para calcular</button>
</section>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
