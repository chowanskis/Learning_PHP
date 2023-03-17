<?php
date_default_timezone_set("Europe/Warsaw"); // definicja strefy czasowej

$unix_time = time(); // ile sekund minęło od początku 1970 roku do dzisiaj?

// mktime($godzina, $minuta, $sekunda, $miesiąc, $dzien, $rok)
$unix_time_2000 = mktime(0, 0, 0, 1, 1, 2000); // a ile sekund do początku 2000 roku?

print "Od początku 2000 roku upłynęło ".($unix_time - $unix_time_2000)." sekund.";
?>