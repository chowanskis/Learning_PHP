<?php
$db = new SQLite3('UczestnicyBalu.db'); // połącz się z bazą danych

// wyślij zapytanie do bazy i pobierz wyniki
$wynik = $db->query("SELECT imie, wiek FROM UczestnicyBalu ORDER BY wiek ASC;");

// przetwórz pobrane rekordy i wydrukuj
print "Uczestnicy balu:\n";
while ($wiersz = $wynik->fetchArray()) {
    printf("Imię: %s, wiek: %d\n", $wiersz['imie'], $wiersz['wiek']);
}

$db->close(); // zamknij połączenie z bazą
?>