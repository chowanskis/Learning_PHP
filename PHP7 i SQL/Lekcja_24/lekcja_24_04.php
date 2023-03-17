<?php
print "Kiedy odwiedzą nas kosmici?\n";

$table = []; // tablica na wylosowane daty

$i = 0;
do {
    // wylosuj liczbę z danego zakresu
    $day = rand(1, 31);
    $month = rand(1, 12);
    $year = rand(2020, 2120);
    $hour = rand(0, 23);
    $min = rand(0, 59);
    $sec = rand(0, 59);
    
    // sprawdź czy data jest poprawna
    if (checkdate($month, $day, $year)) {        
        // oblicz znacznik czasu
        $table[] = strtotime("$year-$month-$day $hour:$min:$sec");
        $i++;
    }
} while ($i <10);

sort($table); // sortuj rosnąco

foreach ($table as $t) {
    print date("Y.m.d H:i:s (D)", $t)."\n"; 
}
?>