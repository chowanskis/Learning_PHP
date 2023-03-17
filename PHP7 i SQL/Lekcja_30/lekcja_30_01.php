<?php
$db = new SQLite3('kartoteka.db'); // połącz się z bazą danych

/* przygotowanie zapytania SQL */
$stmt = $db->prepare("SELECT * FROM ksiazki WHERE id=:id");
// sprawdź czy przekazany parametr jest liczbą całkowitą
if ($stmt->bindValue(':id', 1, SQLITE3_INTEGER))
{
    /* wykonaj przygotowane zapytanie SQL */
    $wynik = $stmt->execute();
    print_r($wynik->fetchArray(SQLITE3_ASSOC));
};

$db->close(); // zamknij połączenie z bazą
?>