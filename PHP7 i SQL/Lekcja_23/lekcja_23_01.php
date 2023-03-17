<?php
include("funkcje.php"); // dołącz dodatkowy plik z kodem

$numer = "SG 12345"; // przykładowy numer rejestracyjny pojazdu
$woj = rejestracja_pojazdu($numer); // wywołaj funkcję z dołączonego pliku

if ($woj) {
    print "Rejestracja pojazdu $numer to województwo $woj.";
} else {
    print "Wpisz poprawnie numer rejestracyjny pojazdu.";
}
?>