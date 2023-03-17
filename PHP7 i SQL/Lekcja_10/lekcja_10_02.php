<?php
$myText = "Jak czytać KSIĄŻKI i dlaczego książki warto czytać?";
$searchText = "książki";

$pos1 = mb_stripos($myText, $searchText); // sprawdź pierwsze wystapienie
$pos2 = mb_strrpos($myText, $searchText); // sprawdź ostatnie wystapienie

// tekst został odnaleziony?
if ($pos1 === false AND $pos2 === false) { // nie
    print "Szukany tekst nie został odnaleziony.";
} else { // tak
    if ($pos1 !== false) { // pierwsze
        print "Pierwsze wystąpienie ciągu znaków \"$searchText\" ";
        print "zostało odnalezione na pozycji nr $pos1";
    }
    print "\n";
    if ($pos2 !== false) { // ostatnie
        print "Ostatnie wystąpienie ciągu znaków \"$searchText\" ";
        print "zostało odnalezione na pozycji nr $pos2";
    }
}
?>