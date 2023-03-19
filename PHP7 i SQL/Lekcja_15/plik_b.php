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

 $myTekst = "Jakiś tekst do wyświetlenia.";
 $myBool = true;

 function showUpper($myTekst, $myBool){

    if ($myBool === true) {
        print strtoupper($myTekst);
        print PHP_EOL;
    } else {
        print strtolower($myTekst);
        print PHP_EOL;
    }
 }

 function showUpper1($myTekstB = 'TeKst', $myBoolB = true){

    if ($myBoolB === true) {
        print strtoupper($myTekstB);
        print PHP_EOL;
    } else {
        print strtolower($myTekstB);
        print PHP_EOL;
    }
 }

 showUpper($myTekst, $myBool);
 showUpper($myTekst, $myBool);
 showUpper("Inny tekst", true);
 showUpper("Inny tekst", false);

 showUpper1();
 
 ?>