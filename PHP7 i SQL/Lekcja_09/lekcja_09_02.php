<?php

$i = 20;

// przypisanie zmiennej okreslonej wartości w zależności od spełnienia warunku
$tekst = ($i >= 18) ? 'jest' : 'nie jest';

/*
if ($i >= 18)
{
    $tekst = 'jest';
}
else
{
    $tekst = 'nie jest';
}
*/
print "Tomek $tekst pełnoletni\n";
?>