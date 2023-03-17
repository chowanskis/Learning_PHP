<?php
/* imię wprowadzone przez użytkownika, możesz wpisać swoje */
$name = "  Mrówka  ";
print "Tekst oryginalny: >". $name. "<\n";

/* usunięcie spacji w lewej i z prawej strony */
print "Funkcja trim: >". trim($name). "<\n";

/* usunięcie spacji z lewej strony */
print "Funkcja ltrim: >". ltrim($name). "<\n";

/* usunięcie spacji z prawej strony */
print "Funkcja rtrim: >". rtrim($name). "<\n";
?>