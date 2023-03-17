<?php
$myText = "Piękne niebo! Dlaczego ludzie patrzą w niebo?";
$searchText = "niebo";

$pos = mb_strpos($myText, $searchText); // sprawdź pozycję

// tekst został odnaleziony?
if ($pos === false) { // nie
    print "Szukany tekst nie został odnaleziony.";
} else { // tak
    print "Pierwsze wystąpienie ciągu znaków \"$searchText\" ";
    print "zostało odnalezione na pozycji nr $pos";
}
?>