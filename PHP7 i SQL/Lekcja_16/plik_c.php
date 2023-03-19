<?php
/*
 * plik_b.php
 * Copyright 2023 Sławomir Chowański
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

 define("DAYS_IN_YEAR", 365);
 define("MONTHS_IN_YEAR", 12);
 define("HOURS_IN_DAY", 24);
 define("MINUTES_IN_HOUR", 24);
 define("SECONDS_IN_MINUTE", 60);

 define("FIRST_YEAR", 1);


 function calcStatsYears($start, $end, $print = true)
{   
    // Uwzgędniam rok bieżący. np: start 1901 - end 1901 to 12 miesięcy     
    $days = ($end - $start + FIRST_YEAR) * DAYS_IN_YEAR;
    $months = ($end - $start + FIRST_YEAR) * MONTHS_IN_YEAR;
    $hours = $days * HOURS_IN_DAY;
    $mins = $hours * MINUTES_IN_HOUR;
    $secs = $mins * SECONDS_IN_MINUTE;
        
    if ($print == true) {

        // Ta gra słów jest powodem korekty. Od poczatku jednego do końca drógiego.
        print "Od początku roku $start do końca roku $end jest:\n";
        print "$days dni, $months miesięcy, $hours godzin, $mins minut i $secs sekund!\n";
    }
    
    return $secs;
}

calcStatsYears(1901, 1901); // Spradzam moją tezę o 1 roku kalendarzowym
$sec1 = calcStatsYears(1901, 2000); // XX wiek
$sec2 = calcStatsYears(2001, 2019); // od początku XXI wieku

print "Razem sekund: ".($sec1 + $sec2);
?>