<?php
/* jedna linia */
print "Lubię programować!\n";
echo "Lubię programować!\n";

$myText = "PHP";

/* wiele linii */
print "Ten tekst zawiera wiele linii,
które wyświetlane są jedna pod drugą.
Możesz umieszczać wewnątrz tekstu zmienne $myText\n";

/* znaki specjalne */
echo "Przykład umieszczenia \"Cudzysłowia\" w tekście\n";

/* łączenie tekstu i zmiennych */
print "To "."jest "."przykładowy "."tekst "."w "."języku $myText\n";
echo "To ", "jest ", "przykładowy ", "tekst ", "w ", "języku ", $myText, PHP_EOL;