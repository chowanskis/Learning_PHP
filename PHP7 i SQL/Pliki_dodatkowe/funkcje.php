<?php
function rejestracja_pojazdu($numer = '')
{
    // deklaracja tabeli z prefiksami i nazwami województw
    $rej = [
        "B" => "podlaskie",
        "C" => "kujawsko-pomorskie",
        "D" => "dolnoślaskie",
        "E" => "łódzkie",
        "F" => "lubuskie",
        "G" => "pomorskie",
        "K" => "małopolskie",
        "L" => "lubelskie",
        "N" => "warmińsko-mazurskie",
        "O" => "opolskie",
        "P" => "wielkopolskie",
        "R" => "podkarpackie",
        "S" => "śląskie",
        "T" => "świętokrzyskie",
        "W" => "mazowieckie",
        "Z" => "zachodniopomorskie"
    ];
    
    // pobranie pierwszego znaku z numeru i zamiana na wielką literę
    $prefiks = mb_strtoupper(mb_substr($numer, 0, 1));   
    
    // zwróć nazwę województwa, jeśli prefiks istnieje w tabeli
    return isset($rej[$prefiks]) ? $rej[$prefiks] : false;
}

function rectangle($a, $b) // funkcja licząca pole prostokąta
{
    $p = (2 * $a) + (2 * $b); // obliczanie obwodu
    return $p; // zwracanie wynik
}
?>