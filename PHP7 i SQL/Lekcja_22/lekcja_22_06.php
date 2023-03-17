<?php
// Archiwalne wyniki losowań dużego lotka
// Źródło: www.mbnet.com.pl
// format: nr_losowania data_(w formacie dd.mm.rrrr) 6_wylosowanych_liczb
// przykład: 871. 04.03.1973 2,11,12,14,33,37
$url = "http://www.mbnet.com.pl/dl.txt";
$filename = "losowanie.txt"; // nazwa pliku, w którym zapiszemy wszystkie losowania

$table = []; // definicja zmiennej tablicowej

// pobierz dane archiwalne jeśli wcześniej nie zostały pobrane
if (!is_file($filename)) { // czy plik istnieje?
    $data = file_get_contents($url); // pobierz dane z Internetu
    file_put_contents($filename, $data); // zapisz dane w pliku na dysku
};

if (is_file($filename)) // czy plik istnieje?
{
    $file = fopen($filename, "r"); // otwarcie pliku w trybie tylko do odczytu
    while(!feof($file)) // czy koniec pliku?
    {
        $data = fgets($file); // pobierz linię tekstu z pliku
        
        if ($data) {            
            // zdekoduj z formatu tekstowego do tablicy
            $t1 = explode(" ", $data); // znak podziału - spacja
            $t2 = explode (".", $t1[1]); // znak podziału - kropka
    
            $pos1 = mb_strpos($t1[2], "11");
            $pos2 = mb_strpos($t1[2], "22");
            $pos3 = mb_strpos($t1[2], "33");
            
            if ($pos1 !== false AND $pos2 !== false AND $pos3 !== false) {
                // wstawienie danych do tablicy 3-wymiarowej ([rok][miesiąc][dzień])
                $table[$t2[2]][$t2[1]][$t2[0]] = $t1[2];
                
                echo $data;
            }
        }
            
    }        
    fclose($file); // zamknięcie pliku    
}

// zmienna tablicowa $table zawiera informacje o wyszukanych losowaniach
print_r($table);
?>