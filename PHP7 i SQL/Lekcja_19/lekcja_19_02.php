<?php
$i = 10;
$sqrt = 0;
while (true) { // inicjacja pętli nieskończonej
    
    $sqrt = sqrt($i); // obliczenie pierwiastka
    printf ("pierwiastek z %d = %.2f\n", $i, $sqrt);
    
    if ($sqrt > 8) { // czy pierwiastek większy od 8?
        break; // przerwij cykl i pętlę
    }
    
    $i += 25;
}
?>