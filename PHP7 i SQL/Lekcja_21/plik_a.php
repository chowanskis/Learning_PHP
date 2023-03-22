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

$array = [ // tablica wielowymiarowa
    "klucz_1" => [ // tablica 1
        "klucz_1_a" => "wartosc_1_a",
        "klucz_1_b" => "wartosc_1_b",
        "klucz_1_c" => "wartosc_1_c"
    ],
    "klucz_2" => [ // tablica 2
        "klucz_2_a" => "wartosc_2_a",
        "klucz_2_b" => "wartosc_2_b",
        "klucz_2_c" => "wartosc_2_c"
    ],
    "klucz_3" => [ // tablica 3
        "klucz_3_a" => "wartosc_3_a",
        "klucz_3_b" => "wartosc_3_b",
        "klucz_3_c" => "wartosc_3_c"
    ],
];


print_r($array);

print PHP_EOL;
print PHP_EOL;

print $array["klucz_1"]["klucz_1_b"];

?>