<?php
// tablice 2-wymiarowe z imionami i ocenami uczniów klas 1a i 1b
$klasa_1a = 
[
    ['imie' => 'Adam', 'ocena' => 4.5], 
    ['imie' => 'Marek', 'ocena' => 5],
    ['imie' => 'Jola', 'ocena' => 5],
    ['imie' => 'Robert', 'ocena' => 4],
    ['imie' => 'Kasia', 'ocena' => 4]
];
$klasa_1b =
[
    ['imie' => 'Robert', 'ocena' => 5],
    ['imie' => 'Kasia', 'ocena' => 4],
    ['imie' => 'Adam', 'ocena' => 3.5],
    ['imie' => 'Magda', 'ocena' => 4],
    ['imie' => 'Rafał', 'ocena' => 5]
];

// tablica 3-wymiarowa z wszystkimi uczniami i ocenami klas 1
$klasy = ['1a' => $klasa_1a, '1b' => $klasa_1b];

# print_r($klasy); exit;

// drukowanie imion uczniów i uzyskanych ocen
foreach ($klasy as $e => $klasa) {
    
    print "Klasa: ".$e."\n".
          "-------------\n".
          "Imię\tOcena\n".
          "-------------\n";
    
    foreach ($klasa as $k) {
        printf("%s\t%s\n", $k['imie'], $k['ocena']);
    }
    
    print "-------------\n";   
        
    // sumujemy wszystkie oceny i dzielimy przez ilość ocen
    $oceny = array_column($klasa, 'ocena'); // wyodrębniamy kolumnę z ocenami
    $srednia = array_sum($oceny) / count($oceny);
    
    printf ("Średnia\t%.2f\n\n", $srednia);
}

$imiona = []; // tablica z imionami uczniów

$imiona = array_merge($klasa_1a, $klasa_1b); // łączymy tabele
# print_r($imiona);

$imiona = array_column($imiona, 'imie'); // wyodrębniamy kolumnę z imionami
# print_r($imiona);

$imiona = array_unique($imiona); // usuwamy powtarzające się imiona
# print_r($imiona);

sort ($imiona); // sortujemy alfabetycznie (rosnąco)
# print_r($imiona);

print "Dzieci w klasach mają następujące imiona:\n";

foreach ($imiona as $k => $imie) {
    print $imie.", ";
}
?>