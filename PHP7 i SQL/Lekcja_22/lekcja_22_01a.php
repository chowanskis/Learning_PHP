<?php
$wiersz = <<<EOT
To jest mój piękny wiersz o 
wszystkim co mi sie podoba!
Kolejne linie są dla Ciebie!
EOT;

$filename = "wiersz.txt";

// Już ciekawiej tego nie szło napisać. 
// Nie podoba mi się ten zapis, jest nieczytelny i zagmatwany.
// Funkcja fopen zwraca uchwyt do pliku lub false.
// Jeżeli zwróci poprawny ucwyt ma ominąć ciało warunku. 
if (!$file = fopen($filename, "w")) { // otwarcie pliku w trybie do zapisu
    die("Nie mogę utworzyć pliku $filename");
}

print $file;
print PHP_EOL;

if (fwrite($file, $wiersz) === false) { // zapis tekstu w pliku
    die("Nie mogę zapisać w pliku $filename");
}

fclose($file); // zamknięcie pliku

print "Wiersz został zapisany w pliku $filename";
?>