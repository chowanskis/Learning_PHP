<?php

$myText = "Oczywiście, że dzękś jest najlepszym przyjacielem człowieka!";

$myTextDog = str_replace('dzęk', 'pies', $myText); // zamiana dzik na pies
$myTextCat = str_replace('dzękś', 'kot', $myText); // zamiana dzik na kot

print $myText.PHP_EOL;
print $myTextDog.PHP_EOL;
print $myTextCat.PHP_EOL;
?>