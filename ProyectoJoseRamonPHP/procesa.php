<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Procesa pagina</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="" title="Color">
  
</head>

<body>

<?php
if(!isset($_POST['tema'])){
    $color="white";
}else $color =$_POST['tema'];
$nombre=$_POST['nombre'];
$frecuencia=$_POST['freejercicio'];
$intensidad=$_POST['intensejercicio'];
$puntuacion=$_POST['puntuacion'];
$opinio=$_POST['opinio'];
print "<div class=\"contenido\">";
print "Nom y cognoms: $nombre";
print "</div>";

print "<div class=\"contenido\">";
if(!isset($_POST['tipoejercicio'])){
    print "No ha introducido el deporte que practica";
}else{
$deporte=$_POST['tipoejercicio'];
print "Deporte : $deporte";
print "<br>";
print "<img src=img/".$deporte.".jpg>";
switch($deporte){
    case 'Tenis':
        print "<p>El tenis, también llamado tenis de campo, es un deporte de raqueta practicado sobre una pista rectangular (compuesta por distintas superficies, las cuales pueden ser cemento, tierra batida o hierba), delimitada por líneas y dividida por una red.</p>";
    break;
    case 'Padel':
        print "<p>El pádel (del inglés paddle) es un deporte de palas con origen en México. Se juega en parejas y consta de tres elementos fundamentales para su desarrollo: la pelota, la pala y el campo de juego o pista. Consiste en hacer botar la bola en el campo contrario, con la posibilidad de rebotar en las paredes.</p>";
    break;
    case 'Futbol':
        print "<p>El fútbol o futbol (del inglés británico football, traducido como balompié) es un deporte de equipo jugado entre dos conjuntos de once jugadores cada uno mientras que algunos árbitros que se ocupan de que las normas se cumplan correctamente. Es ampliamente considerado el deporte más popular del mundo, pues lo practican unas 270 millones de personas.</p>";
    break;
    case 'Gimnasio':
        print "<p>Un gimnasio (conocido asimismo con el anglicismo gym) es un lugar que permite practicar deportes o hacer ejercicio en un recinto cerrado con varias máquinas y artículos deportivos a disposición de quienes lo visiten.</p>";
    break;
}
}
print "</div>";

print "<div class=\"contenido\">";

switch($frecuencia){
    case '1':
        print "<p>Su frecuencia de ejercicio a la semana es baja, 1 dia a la semana</p>";
        print "<img class=\"sol\" src=img/sol.png>";
        break;
    case '2':
        print "<p>Su frecuencia de ejercicio a la semana es media, 2 dias a la semana</p>";
        for($i=0; $i<$frecuencia; $i++){
            print "<img class=\"sol\" src=img/sol.png>";
        }
        break;
    case '3':
        print "<p>Su frecuencia de ejercicio a la semana es media-alta, 3 dias a la semana</p>";
        for($i=0; $i<$frecuencia; $i++){
            print "<img class=\"sol\" src=img/sol.png>";
        }
        break;
    case '4':
        print "<p>Su frecuencia de ejercicio a la semana es alta, 4 dias a la semana</p>";
        for($i=0; $i<$frecuencia; $i++){
            print "<img class=\"sol\" src=img/sol.png>";
        }
        break;
    case '5':
        print "<p>Su frecuencia de ejercicio a la semana es muy alta, mas de 5 dias a la semana</p>";
        for($i=0; $i<$frecuencia; $i++){
            print "<img class=\"sol\" src=img/sol.png>";
        }
        break;
                    
}
print "</div>";

print "<div class=\"contenido\">";

switch($intensidad){
    case 'alta':
        print "<p> La intensidad de su entrenamiento es alta</p>";
        print "<img src=img/high.png>";
        break;
    case 'media':
        print "<p> La intensidad de su entrenamiento es media</p>";
        print "<img src=img/medium.png>";
        break;
    case 'baja':
        print "<p> La intensidad de su entrenamiento es baja</p>";
        print "<img src=img/low.png>";
        break;

}
print "</div>";

print "<div class=\"contenido\">";
if(empty($_POST['puntuacion'])){
    print "No ha introducido la puntuacion!!!";
}else {
print "<p>Puntuació: ".$puntuacion."</p>";
print "<img src=img/".$puntuacion.".png>";
}
print "</div>";
print "<div class=\"contenido\">";
print "<p>El que opines de nosaltres es: </p>";
print "$opinio";

print "</div>";

print "<div class=\"contenido\">";


  $fechaActual = date('d-m-Y');

  print "Fecha actual: $fechaActual";

  print "</div>";


?>
<style> 
body{
    background-color: <?php print "$color";?>;
}
div.contenido{
  background-color: blanchedalmond;
  border: solid 2px black;
  border-radius: 10px;
  text-align: center;
  font-weight: bold;
  font-size: 1.2em;
  padding: 10px;
  width: 80%;
  margin: auto;
  margin-top: 10px;
}
img{
    width:300px
}
.sol{
    width: 60px;
    margin: 5px;
}

</style>

</body>

</html>