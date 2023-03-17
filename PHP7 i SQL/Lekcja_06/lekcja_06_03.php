<?php
/* przykłdowe dane */
$name = "  Calineczka  ";
$city = "  Roszpunkowo  ";
$country = "  Bajlandia  ";

/* przed optymalizacją */
print $name." wprowadziła miasto ".$city." i kraj ".$country."!\n";

/* optymalizacja - usunięcie zbednych spacji i przypisanie nowych wartości zmiennym */
$name = trim($name);
$city = trim($city);
$country = trim($country);

/* po optymalizacji */
print $name." wprowadziła miasto ".$city." i kraj ".$country."!\n";
?>