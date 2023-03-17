<?php
for ($i = 1; $i <= 10; $i++) { // inicjacja pętli
    
    if ($i % 2 != 0) { // jeśli nieparzyste
        continue; // to przerwij cykl i wykonaj cykl następny
    }
    
    $pow = $i ** 2; // obliczenie kwadratu
    print "$i do potęgi 2 = $pow\n";
}
?>