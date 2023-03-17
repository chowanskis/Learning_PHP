<?php
/* definicja zmiennych */
$x = (int)35; // typu integer
$y = (float)35; // typu float

if ($x == $y) { // sprawdź tylko wartość
    print "Zmienne mają tę samą wartość.\n";
} else {
    print "Zmienne są różnej wartości.\n";
}

if ($x === $y) { // sprawdź wartość i typ
    print "Zmienne mają tę samą wartość i są tego samego typu.\n";
} else {
    print "Zmienne są różnego typu.\n";
}
?>