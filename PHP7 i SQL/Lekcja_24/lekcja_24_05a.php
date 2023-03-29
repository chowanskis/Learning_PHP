<?php

if (PHP_INT_SIZE === 8) {
    print "64-bity to moja specjalność!";
    print PHP_EOL;
}

$liczby = []; // tablica na wylosowane liczby

$i = 0;
do {
    $liczba = rand(1, 49); // losuj liczbę
    
    // sprawdź czy liczba została już wcześniej wylosowana
    if (!in_array($liczba, $liczby)) {
        $liczby[] = $liczba;
        $i++;
    }
} while ($i < 6);

sort($liczby); // sortuj rosnąco

foreach ($liczby as $liczba) {
    print $liczba." ";
}
?>