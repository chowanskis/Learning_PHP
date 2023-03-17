<?php
$db = new SQLite3('kartoteka.db'); // połącz się z bazą danych

print "STATYSTYKA TABELI Z KSIĄŻKAMI\n";

// wyślij zapytanie do bazy i pobierz wyniki
$wynik = $db->querySingle("
SELECT 
count(*) AS ilosc, 
SUM(stron) AS suma,
AVG(stron) AS srednia,
MIN(rok) AS min, 
MAX(rok) AS max 
FROM ksiazki;
", false);

// wydrukuj wyniki
printf(
    "Ilość książek w tabeli: %d\n".
    "Suma wszystkich stron: %d\n".
    "Średnia ilość stron w książce: %d\n".
    "Najstarsze wydanie: %d rok\n".
    "Najnowsze wydanie: %d rok\n",
    $wynik['ilosc'], $wynik['suma'], $wynik['srednia'], $wynik['min'], $wynik['max']
);

print_r($wynik);

$db->close(); // zamknij połączenie z bazą
?>