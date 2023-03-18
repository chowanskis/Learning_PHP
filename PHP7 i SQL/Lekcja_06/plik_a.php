<?php
/*
 * plik_a.php
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


$name = "  Calineczka  ";
$city = "  Roszpunkowo  ";
$country = "  Bajlandia  ";

$name = ltrim($name); $name = rtrim($name);
$city = ltrim($city); $city = rtrim($city);
$country = ltrim($country); $country = rtrim($country);

// Tekst o optymalizacji, co znie zmienia faktu, że gdyby zmienne 
// zawierały więcej wyrazaów to chciałbym wczytać je po znaku i 
// usunąc nadmiarowe spacje między wyrazami.
// np: $city = "  Jastrzębie     Zdrój  ";
print $name." wprowadziła miasto ".$city." i kraj ".$country."!\n";
?>