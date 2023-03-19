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

 define("ZERO", 0);
 define("FACTOR", 0.5);

 $podstawa = ZERO;
 $wysokosc = ZERO;
 function poleTrojkata($podstawa, $wysokosc){

    if ( ($podstawa !== ZERO) AND ($wysokosc !== ZERO) ) {
        return FACTOR * $podstawa * $wysokosc;
    } 
    return ZERO;
 }

 $podstawa = 8;
 $wysokosc = 10;

 printf("Pole trójkąta o podstawie %d cm i %d cm wynosi: %d cm.kw. \n",
            $podstawa, $wysokosc, poleTrojkata($podstawa, $wysokosc));
 ?>
