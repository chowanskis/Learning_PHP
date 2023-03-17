<?php
print "Tworzenie tablicy.\n";

// deklaracja tablicy z dwoma elementami
$owoce = ["jabłko", "banan"];

print_r($owoce); // drukowanie tablicy
// funkcja count zwraca liczbę elementów w tablicy
print "Tablica ma ".count($owoce)." elementy.\n";

print "\nDodanie 2 elementów.\n";

array_push($owoce, "arbuz"); // dodanie elementu do tablicy
array_push($owoce, "gruszka"); // dodanie elementu do tablicy

print_r($owoce);
print "Tablica ma ".count($owoce)." elementy.\n";

print "\nPobranie 1 elementu z tablicy.\n";

$owoc = array_pop($owoce); // pobranie (i usunięcie) ostatniego elementu z tablicy
print_r($owoce);

print "Tablica ma ".count($owoce)." elementy.\n";
print "Zmienna owoc ma wartość $owoc";
?>