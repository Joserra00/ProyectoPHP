<?php
function cabecera($titulo)
{
 print "<!DOCTYPE html>\n";
 print "<html lang=\"es\">\n";
 print "<head>\n";
 print " <meta charset=\"utf-8\">\n";
 print " <title>$titulo</title>\n";
 print " <meta name=\"viewport\" content=\"width=device-width,
initial-scale=1.0\">\n";
 print " <link rel=\"stylesheet\" href=\"estilo.css\"
title=\"Color\">\n";
 print "</head>\n";
 print "\n";
 print "<header>";
 print "<img src=img/fotocabecera.jpg>";
 print "<body>\n";
 print " <h1>$titulo</h1>\n";
 print "</header>";
 print "\n";
}
?>