<?php
// proste zakodowanie informacji o uczniach i ocenach
$klasa_1a_txt = "Adam,4.5|Marek,5|Jola,5|Robert,4|Kasia,4";
$klasa_1b_txt = "Robert,5|Kasia,4|Adam,3.5|Magda,4|Rafał,5";

function zdekoduj($dane) { // zdekodowanie informacji
    $r = [];
    $e = explode("|", $dane); // znak podziału |
    foreach ($e as $k) {
        $u = explode(",", $k); // znak podzialu ,
        $r[] = ['imie' => $u[0], 'ocena' => $u[1]];
    }
    return $r;
}

// tablice 2-wymiarowe z imionami i ocenami uczniów klas 1a i 1b
$klasa_1a = zdekoduj($klasa_1a_txt);
$klasa_1b = zdekoduj($klasa_1b_txt);

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