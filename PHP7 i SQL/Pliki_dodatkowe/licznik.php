<?php
function licznik()
{
    $filename = "licznik.txt"; // plik z wartością licznika
    
    // czy plik istnieje?
    if (!is_file($filename)) 
    {         
        // jeśli nie, utwórz plik z początkową wartością
        file_put_contents($filename, "1");
        return "1"; // zwróć wartość funkcji
    } 
    // ok, plik już istnieje
    else 
    {
        $file = fopen($filename, "r+"); // otwórz plik
        
        if (flock($file, LOCK_EX)) // zablokuj plik
        {
            // odczytaj wartość licznika
            $counter = (int)fread($file, filesize($filename));
            $counter++; // zwiększ o 1
            fseek($file, 0); // ustaw wskaźnik pliku na początek
            fwrite($file, $counter); // zapisz nową wartości licznika do pliku
            flock($file, LOCK_UN); // zwolnij blokadę
        }
        
        fclose($file); // zamknij pliku
        
        return $counter;
    }
}
?>