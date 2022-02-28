<?php
function contenido()
{
 print "<!DOCTYPE html>\n";
 print "<html lang=\"es\">\n";
 print "<head>\n";
 print " <meta charset=\"utf-8\">\n";
 print " <title></title>\n";
 print " <meta name=\"viewport\" content=\"width=device-width,
    initial-scale=1.0\">\n";
 print " <link rel=\"stylesheet\" href=\"estilo.css\"
    title=\"Color\">\n";
 print "</head>\n";
 print "\n";

print "<main>";
print "<label for=\"nombre\">Nombre:</label>";
print "<input type=\"text\" name=\"nombre\" id=\"nombre\" size=\"15\" required>";
print "<br>";
print "<br>";
print "<label for=\"checkbox\">Que deporte practicas:</label><br>";
print "<input type=\"checkbox\"  name=\"tipoejercicio\" value=\"Futbol\">Futbol";
print "<br>";
print "<input type=\"checkbox\"  name=\"tipoejercicio\" value=\"Gimnasio\">Gimnasio";
print "<br>";
print "<input type=\"checkbox\"  name=\"tipoejercicio\" value=\"padel\">Padel";
print "<br>";
print "<input type=\"checkbox\"  name=\"tipoejercicio\" value=\"Tenis\">Tenis";
print "<body>\n";
print "<br>";
print "<br>";
print "<label for=\"freejercicio\"> Frecuencia ejercicio:</label>";
print "<select id=\"freejercicio\" name=\"freejercicio\" required>
        <option value=\"1\">1 dia a la semana</option>
        <option value=\"2\">2 dias a la semana</option>
        <option value=\"3\">3 dias a la semana</option>
        <option value=\"4\">4 dias a la semana</option>
        <option value=\"5\">Mas de 5 dias a la semana</option>
    </select> ";
print "<br>";
print "<br>";
    print "<label for=\"intensjercicio\"> Intensidad del ejercicio:</label>";
    print "<select id=\"intensejercicio\" name=\"intensejercicio\" required>
        <option value=\"alta\">Alta</option>
        <option value=\"media\">Media</option>
        <option value=\"baja\">Baja</option>
        
    </select> ";
    
    print"<br>";
    print"<br>";
    print "<label for=\"radio\">Elija color de tema:</label><br>";
print "<input type=\"radio\"  name=\"tema\" value=\"green\">Verde";
print "<br>";
print "<input type=\"radio\"  name=\"tema\" value=\"blue\">Azul";
print "<br>";
print "<input type=\"radio\"  name=\"tema\" value=\"red\">Rojo";
print "<br>";

            print"<label for=\"puntuacion\">Puntuan's:</label>
            <input type=\"number\" name=\"puntuacion\"  size=\"15\" max=\"5\" min=\"0\">";
            print "<br>";
            print "<br>";
            print "<label for=\"opinion\">Deja tu opinion</label>
            <textarea id=\"opinion\" name=\"opinio\" rows=\"4\" cols=\"50\">
           Està molt bé!
            </textarea>";
            print "<br>";
            print "<input type=\"submit\"value=\"Enviar\">";
 
            print "</main>";
            
 

 print "\n";
}
?>