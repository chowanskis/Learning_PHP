<?php
// Archiwalne wyniki losowań dużego lotka
// Źródło: www.mbnet.com.pl
// format: nr_losowania data_(w formacie dd.mm.rrrr) 6_wylosowanych_liczb
// przykład: 871. 04.03.1973 2,11,12,14,33,37
$url = "http://www.mbnet.com.pl/dl.txt";
$filename = "losowanie.txt"; // nazwa pliku, w którym zapiszemy wszystkie losowania

// jaki okres nas interesuje?
$year = "1973";
$month = "03";

$table = []; // definicja zmiennej tablicowej

// pobierz dane archiwalne jeśli wcześniej nie zostały pobrane
// Dlaczego takie trudne komentarze. Przecież powinno być
// Jeżeli plik nie istnieje to pobierz dane i zapisz w pliku. 
if (!is_file($filename)) { // czy plik istnieje? - NIE KOMENTUJ TAK
    $data = file_get_contents($url); // pobierz dane z Internetu
    file_put_contents($filename, $data); // zapisz dane w pliku na dysku
};

// Tu się zgadza, jeżli plik istnieje?
if (is_file($filename)) // czy plik istnieje?
{
    $file = fopen($filename, "r"); // otwarcie pliku w trybie tylko do odczytu
    while(!feof($file)) // czy koniec pliku?
    {
        $data = fgets($file); // pobierz linię tekstu z pliku        
        if ($data) { // czy zmienna coś zawiera?
            $pos = mb_strpos($data, $month.".".$year);
            if ($pos !== false) {
                echo $data; // drukowanie odnalezionego losowania
                
                // zdekoduj z formatu tekstowego do tablicy
                $t1 = explode(" ", $data); // znak podziału - spacja
                $t2 = explode (".", $t1[1]); // znak podziału - kropka
                
                // wstawienie danych do tablicy 3-wymiarowej ([rok][miesiąc][dzień])
                $table[$t2[2]][$t2[1]][$t2[0]] = $t1[2];
            }
        }
    }        
    fclose($file); // zamknięcie pliku    
}

// zmienna tablicowa $table zawiera informacje o wyszukanych losowaniach
print_r($table);
?>