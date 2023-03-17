<?php
date_default_timezone_set("Europe/Warsaw"); // definicja strefy czasowej

$start = strtotime("now"); // bieżący znacznik czasu
$end = strtotime("next Friday 4pm"); // najbliższy piątek, godzina 16:00

$count = $end - $start; // ile sekund do weekendu?

// funkcja floor zaokrągla w dół np. floor(4.8) = 4
$days = floor($count / (60 * 60 * 24)); // 86400 sekund to 1 dzień
$hours = floor($count / (60 * 60)); // 3600 sekund to 1 godzina
$minutes = floor(($count / 60) % 60); // 60 sekund to 1 minuta
$seconds = $count % 60;

print "Weekend zaczyna się za $days dni, $hours godzin, $minutes minut i $seconds sekund.";
?>