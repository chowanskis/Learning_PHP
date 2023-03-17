<?php
class MyDB extends SQLite3 // dołącz rozszerzenie do obsługi SQLite
{
    function create()
    {
        $this->exec(
        "CREATE TABLE IF NOT EXISTS UczestnicyBalu
        (
        	id	INTEGER PRIMARY KEY AUTOINCREMENT,
        	imie	TEXT DEFAULT '',
        	postac	TEXT DEFAULT '',
        	wiek	INTEGER DEFAULT 0
        );"
        );
    }
        
    function __construct()
    {
        $this->open('UczestnicyBalu.db'); // otwórz połączenie z bazą lub utwórz bazę
        $this->create(); // utórz tabelę jeśli nie została wcześniej utworzona
    }
}

$db = new MyDB(); // tworzenie egzemplarza klasy

/* dodawanie rekordów do tabeli */
$db->exec("INSERT INTO UczestnicyBalu (imie, postac, wiek) 
VALUES ('Ariel', 'Szeryf', 8);");
$db->exec("INSERT INTO UczestnicyBalu (imie, postac, wiek) 
VALUES ('Róża', 'Księżniczka', 6);");

$db->close(); // zamknij połączenie z bazą

if (file_exists('UczestnicyBalu.db')) { // sprawdź czy plik z bazą został utworzony
    print "Baza danych SQLite została utworzona!";
}
?>