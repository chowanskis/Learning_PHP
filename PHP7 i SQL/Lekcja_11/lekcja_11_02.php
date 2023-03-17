<?php

$myText = "A może kot jest najlepszym przyjacielem człowieka?";

$myTextLen = mb_strlen($myText); // ilość znaków w tekście
$myCut = 11; // po którym znaku wycinamy tekst

$newText1 = mb_substr($myText, 0, 10); // pierwsze 10 znaków
$newText2 = mb_substr($myText, $myCut, $myTextLen-$myCut); // od znaku 11 do końca
$newText3 = mb_substr($myText, $myCut, 10); // 10 znaków, zaczynając od 11-go

print $newText1.PHP_EOL;
print $newText2.PHP_EOL;
print $newText3.PHP_EOL;
?>