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

 define("PARY_BOKOW", 2);

 $bokA = 5;
 $bokB = 8;

 $poleProstokata = $bokA * $bokB;
 $obwodProstokata = ($bokA + $bokB) * PARY_BOKOW;

 printf("Obwód prostokąta o bokach %d %d wynoksi %d cm. \n", 
        $bokA, $bokB, $obwodProstokata);
 printf("Pole prostokąta o bokach %d %d wynoksi %d cm.kw. \n",
        $bokA, $bokB, $poleProstokata);
 ?>