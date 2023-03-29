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

 $a = 1;
 $temp = 0;
 $array = [];

 // Deklaruje tablicę o 1 większą niż potrzebuję.
 // Tablica od 0 do 49 włacznie, choć potrzebuje
 // od 1 do 49 włacznie. W ten sposób kod pozostaje
 // bardziej czytelny. 
 for ( $i = 0 ; $i <= 49; $i++ ) {
   $array[$i] = 0;
 }

 while ($a <= 7) {

   $temp = rand(1,49);

   // Skoro mam większą tablcę, tu nie musze 
   // dodawać i usować jednynek, aby ziścić się 
   // w tablicy.
   if ($array[$temp] === 0) {

      $array[$temp] = $temp;
      printf("Wylosowałem liczbę: %d .\n", $temp);
      $a++;
   }
 }
 ?>