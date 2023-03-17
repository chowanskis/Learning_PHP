<?php
/* definicja zmiennych */
$a = 151;
$b = 81;
$c = 55;
$d = 12;

/* konstrukcja warunkowa */
if ( ($a >= 50 AND $b < 100) OR ($c < 80 AND $d != 20) )
{
    print "Wykonuję sobie kod pierwszy\n";
}

if ( !($a >= 50 AND $b > 100) AND ($c < 80 AND $d != 20) )
{
    print "Wykonuję sobie kod drugi\n";
}
?>