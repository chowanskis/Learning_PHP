<?php
$liczby = []; // deklaracja pustej tablicy
$ile = 20;

for ($i = 0; $i <= $ile; $i++) {
    if ($i % 2 == 0) { // parzyste?
        $liczby[] = $i; // dodajemy do tablicy kolejny element
        // array_push($liczby, $i); // alternatywa dla $liczby[] = $i
    }
}

$e = count($liczby); // ile elementów ma tablica?

// dostęp do elementów tablicy
for ($i = 0; $i < $e; $i++) {
    print "klucz = $i, wartość = $liczby[$i]\n";
}
?>