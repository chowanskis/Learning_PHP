<?php
/* definicja zmiennych */
$weekend = true; // jest weekend?
$sun = true; // świeci słońce?
$hour = 10; // która godzina?

if ($weekend == true) { // tak?
    if ($sun == true AND $hour < 18) { // świeci słońce i nie jest za późno?
        print "Hurra! Jedziemy na plażę!";
    } else {
        print "Znowu siedzimy w domu :(";
    }
}
?>