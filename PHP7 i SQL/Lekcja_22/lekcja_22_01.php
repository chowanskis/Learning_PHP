<?php
$wiersz = <<<EOT
To jest mój piękny wiersz o 
wszystkim co mi sie podoba!
Kolejne linie są dla Ciebie!
EOT;

$filename = "wiersz.txt";

if (!$file = fopen($filename, "w")) { // otwarcie pliku w trybie do zapisu
    die("Nie mogę utworzyć pliku $filename");
}
    
if (fwrite($file, $wiersz) === false) { // zapis tekstu w pliku
    die("Nie mogę zapisać w pliku $filename");
}

fclose($file); // zamknięcie pliku

print "Wiersz został zapisany w pliku $filename";
?>