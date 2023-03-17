<?php
function drukuj($tekst = "", $nowa_linia = true)
{
    print $tekst;
    if ($nowa_linia == true) {
        print PHP_EOL;
    }
}

function dodaj($a, $b)
{
    return $a + $b;
}

function odejmij($a, $b)
{
    return $a - $b;
}

function pomnoz($a, $b)
{
    return $a * $b;
}

function podziel($a, $b)
{
    if ($b == 0) {
        drukuj("Nie można dzielić przez zero!");
        return 0;
    } else {
        return $a / $b;
    }    
}

$a = 70;
$b = 14;

$suma = dodaj($a, $b);
$roznica = odejmij($a, $b);
$iloczyn = pomnoz($a, $b);
$iloraz = podziel($a, $b);

drukuj("$a + $b = $suma");
drukuj("$a - $b = $roznica");
drukuj("$a * $b = $iloczyn");
drukuj("$a / $b = $iloraz");
?>