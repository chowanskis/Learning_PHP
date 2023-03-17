<?php
$file = fopen("dane.txt", "a+");

if (flock($file, LOCK_EX)) // zablokuj plik 
{
    fwrite($file, "Jakiś tekst\n");
    flock($file, LOCK_UN); // zwolnij blokadę
} 
else // plik jest już zablokowany
{
    echo "Nie mogę zapisać, bo plik jest zablokowany!";
}

fclose($file);
?>