<?php
$filename = "wiersz.txt";

if (is_file($filename)) // czy plik istnieje?
{
    $file = fopen($filename, "r"); // otwarcie pliku w trybie tylko do odczytu
    $contents = fread($file, filesize($filename)); // pobranie zawartości do zmiennej
    fclose($file); // zamknięcie pliku
    
    print "Mój wiersz z pliku $filename\n";
    print $contents;
}
?>