<?php
$city = "Zakopane"; // informacja od użytkownika

switch ($city) {
    case "Londyn":
        print "Stolica Wielkiej Brytanii";
    break;
    case "Monachium":
        print "Interesujące miasto w Niemczech";
    break;
    case "Zakopane":
        print "$city to bardzo piękne miasto w Polsce!";
    break;
    default:
        print "Pozostałe miasta też są fajne!";
}
?>