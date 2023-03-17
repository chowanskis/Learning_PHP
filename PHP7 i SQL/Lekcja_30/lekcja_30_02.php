<?php
$_GET['tytul'] = " PRZYgody#"; // szukana fraza

$proces = [];

/* pierwsza optymalizacja danych */
$szukaj = (string)$_GET['tytul']; // rzutujemy do typu string
$proces[] = $szukaj;

// obcinamy boczne spacje i zamieniamy na małe litery
$szukaj = trim(strtolower($szukaj));
$proces[] = $szukaj;

// wycinamy wszystko co nie jest cyfrą, literą, podkreśleniem itp.
$szukaj = preg_replace('/[^0-9 a-z-!_]/i', '', $szukaj);
$proces[] = $szukaj;

if ($szukaj == '') {
    print "Nie ma co szukać ;(";
    die();
}

$db = new SQLite3('kartoteka.db'); // połącz się z bazą danych

/* druga optymalizacja */
$szukaj = SQLite3::escapeString($szukaj); // usuń znaki ucieczki
$proces[] = $szukaj;

$szukaj = '%'.$szukaj.'%'; // znaki specjalne dla operatora LIKE

/* przygotowanie zapytania SQL */
$stmt = $db->prepare("SELECT * FROM ksiazki WHERE tytul LIKE :tytul");
// sprawdź czy przekazany parametr jest tekstem
if ($stmt->bindValue(':tytul', $szukaj, SQLITE3_TEXT))
{
    /* wykonaj przygotowane zapytanie SQL */
    $wynik = $stmt->execute();
    print_r($wynik->fetchArray(SQLITE3_ASSOC));
    
    print "Co się działo ze zmienną 'szukaj' w trakcie działania programu?\n";
    foreach ($proces as $p) {
        print $p." => ";
    };
    print $szukaj;
}

$db->close(); // zamknij połączenie z bazą
?>