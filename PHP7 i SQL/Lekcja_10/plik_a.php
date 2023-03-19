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

 $myText = "To jest jakiś tam tekst do przeszukania";
 $searchText = "tam";

 // W mb_strpos wielkość liter ma znaczenie.
 $pos = mb_strpos($myText, $searchText);

 print "$pos \n";

 // Ten if zadzaiła źle. Funkcja mb_strpos zwtaca int lub false.
 // Dlatego nalezy testowac warunek false ( === false).
 if ( $pos === true) {
    print "Szukany tekst znajduje się na pozycji: $pos \n";
 } else {
    print "Szukany tekst nie znajduje się w przeszukiwanym ciągu. \n";
 }

 // Tak wygląda poprawne użycie funkcji mb_strpos.
 if ( $pos === false) {
    print "Szukany tekst nie znajduje się w przeszukiwanym ciągu. \n";
 } else {
    print "Szukany tekst znajduje się na pozycji: $pos \n";
 }
 ?>