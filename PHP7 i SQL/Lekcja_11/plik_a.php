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


 $myTextA = "No to pobawmy się trchę tekstem";
 $myTextB = "";
 $myTextC = "";
 $lenghtA = mb_strlen($myTextA);
 $myTextA = mb_strtolower($myTextA);

 print("Mój string ma $lenghtA znaków." .PHP_EOL);
 print("Mój string pisany małymi literami: $myTextA" .PHP_EOL);

 $myTextB = mb_substr($myTextA, 0, 1);
 $myTextB = mb_strtoupper($myTextB);
 print("$myTextB" .PHP_EOL);

 // Podmieniamy pierwszy znak z małej na wielką. 
 // Choć łatwiej byłoby mi użyć konkatenacji łańcuchów.
 $myTextC = str_replace(mb_substr($myTextA, 0, 1), $myTextB, $myTextA);

 print("$myTextC" .PHP_EOL);
 ?>