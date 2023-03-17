<!doctype html>
<head>
<meta charset="utf-8">
<title>Domowa biblioteka</title>
</head>
<body>
<h2>Lista książek</h2>
<ol>
<?php
// połącz się z bazą danych
$db = new SQLite3('kartoteka.db');

// wyślij zapytanie do bazy i pobierz wyniki
$wynik = $db->query("SELECT autor, tytul FROM ksiazki ORDER BY id ASC;");

// przetwórz pobrane rekordy i wydrukuj
while ($wiersz = $wynik->fetchArray()) {
    printf(
        "<li>%s, \"%s\"</li>",
        $wiersz['autor'], $wiersz['tytul']
        );
}

// zamknij połączenie z bazą
$db->close();
?>
</ol>
</body>
</html>