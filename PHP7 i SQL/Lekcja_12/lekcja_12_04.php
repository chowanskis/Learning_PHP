<?php
$x = (float)1;
$y = (float)10;
$z = (float)0.9;

$c1 = $x / $y; // 1 / 10 = 0.1
$c2 = $x - $z; // 1 - 0.9 = 0.1

print "Czy c1 = $c1 i c2 = $c2 są sobie równe?\n";
# printf("Czy c1 = %.20f i c2 = %.20f są sobie równe?\n", $c1, $c2);

if ($c1 == $c2) { // niestety, nie są równe
    print "operator ==";
}

if ($c1 === $c2) { // a teraz? też nie!
    print "operator ===";
}

if (round($c1, 8) == round($c2, 8)) { // trik z zaokrągleniem
    print "Dopiero po zastosowaniu zaokrąglenia do 8 miejsc po przecinku.";
}
?>