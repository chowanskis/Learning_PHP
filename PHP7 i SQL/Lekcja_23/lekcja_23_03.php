<?php
include_once("funkcje.php"); // dołącz dodatkowy plik z kodem

if (function_exists("rectangle")) // sprawdź czy funkcja jest zdefiniowana
{
    $a = 12;
    $b = 34;
    
    $rect = rectangle($a, $b);
    
    printf ("Obwód prostokąta o bokach %d i %d wynosi %d", $a, $b, $rect);
}
else
{
    print "Dołącz kod funkcji rectangle do swojego programu.";
}
?>