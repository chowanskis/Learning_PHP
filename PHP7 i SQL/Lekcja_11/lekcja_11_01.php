<?php

$myText = "czy PIES jest najlePSZYM Przyjacielem CZŁOWIEKA?";
$myTextLower = mb_strtolower($myText); // zamiana na małe litery
$myTextUpper = mb_strtoupper($myText); // zamiana na wielkie litery

print $myText.PHP_EOL;
print $myTextLower.PHP_EOL; 
print $myTextUpper.PHP_EOL;
?>