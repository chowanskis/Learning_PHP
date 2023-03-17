<?php

$name = "szrek"; // wszystkie małe litery
$enter = " Szrek  "; // imię wpisane przez użytkownika

// pozbycie się spacji na początku i na końcu, i zamiana na małe litery
$enter = mb_strtolower(trim($enter)); // przypisujemy wynik do tej samej zmiennej

if ($name == $enter) {
    print "Imiona są identyczne!";
} else {
    print "Imiona się różnią!";
}
?>