<?php
$db = new SQLite3('kartoteka.db'); // połącz się z bazą danych

print "Ile potrzebuję czasu na przeczytanie książki?\n";
print "AUTOR\t\tTYTUŁ\t\t\tCZAS\n";

// wyślij zapytanie do bazy i pobierz wyniki
$wynik = $db->query("
SELECT (((stron * 3) / 60) + 1) AS czas, autor, tytul 
FROM ksiazki 
ORDER BY stron DESC;
");

// przetwórz pobrane rekordy i wydrukuj
while ($wiersz = $wynik->fetchArray()) {
    printf(
        "%s\t%s\t%d godz.\n",
        $wiersz['autor'], $wiersz['tytul'], $wiersz['czas']
    );
}

$db->close(); // zamknij połączenie z bazą
?>