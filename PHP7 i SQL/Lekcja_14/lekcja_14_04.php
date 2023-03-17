<?php
/* BIORYTMY */

// Twoja data urodzenia
$d = 20; // dzień
$m = 6; // miesiąc
$y = 2005; // rok

// jak długo żyjesz?
$secounds = time() - mktime(0, 0, 1, $m, $d, $y);
$days = $secounds / 86400; // 86400 sekund = 1 dzień

// obliczanie trendów - zakres od -100 do 100
// korzystamy ze stałej zdefiniowanej w jezyku PHP - M_PI i M_PI_2
// więcej: http://php.net/manual/en/function.pi.php
$pi2 = M_PI + M_PI;

// cykl intelektualny
$i = (($days % 33) / 33) * $pi2;
$ii = sin($i) * 100;

// cykl emocjonalny
$e = (($days % 28) / 28) * $pi2;
$ee = sin($e) * 100;

// cykl fizyczny
$f = (($days % 23) / 23) * $pi2;
$ff = sin($f) * 100;

// jaka jest tendencja cyklu?
function t($t) {
    $r = (($t >= M_PI_2) AND ($t < M_PI_2 + M_PI)) ? 'spadkowa' : 'wzrostowa';
    return $r;
}

// drukowanie wyników
printf("Żyjesz już %d sekund, czyli %d dni!\n", $secounds, $days);
printf("Cykl intelektualny %d [tendencja %s]\n", $ii, t($i));
printf("Cykl emocjonalny %d [tendencja %s]\n", $ee, t($e));
printf("Cykl fizyczny %d [tendencja %s]\n", $ff, t($f));

?>