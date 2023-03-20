<?php
// deklaracja tablicy z 4 elementami
$owoce = ["jabłko", "banan", "arbuz", "gruszka"];

print "Przed sortowaniem:\n";
print_r($owoce);

asort($owoce); // sortowanie tablicy

print "\nPo sortowaniu:\n";
print_r($owoce);
?>