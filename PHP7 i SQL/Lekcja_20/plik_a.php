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

 // Tworzenie tablic - notacja ze strzałką.
 $array = ["klucz_1" => "wartośc_1", "klucz_2" => "wartośc_2", "klucz_3" => "wartośc_3"];
 
 print_r($array);
 print PHP_EOL;
 print $array["klucz_1"]."\n";
 print $array["klucz_2"];

 print PHP_EOL;
 print PHP_EOL;

 // Tradycyjne tworzenie tablic jak w ANSI C 
 $array1 = [];
 $array1 ["klucz_a"] = "wartosc_a";
 $array1 ["klucz_b"] = "wartosc_b";
 $array1 ["klucz_c"] = "wartosc_c";

 print_r($array1);

 print PHP_EOL;
 print PHP_EOL;

 // Tradycyjne tworzenie tablic jak w ANSI C 
 // Automatyczne indeksowanie od 0.
 $array2 = ["wartosc_x", "wartosc_y", "wartosc_z"];
 
 array_push($array2, "wartosc_d");
 $array2[] = "wartosc_dodana";

 print_r($array2);
 ?>
