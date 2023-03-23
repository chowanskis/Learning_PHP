<?php
/*
 * lekcja_22_01b.php
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

$wiersz = <<<EOT
To jest mój piękny wiersz o 
wszystkim co mi sie podoba!
Kolejne linie są dla Ciebie!
EOT;

$filename = "wiersz.txt";

if ($handle = fopen($filename, "w")) {

    if (fwrite($handle, $wiersz) === false) {
        die("Nie mogę zapisać w pliku $filename");
    }
    
    fclose($handle); 

    print "Wiersz został zapisany w pliku $filename";

} else {

    die("Nie mogę utworzyć pliku $filename");
} 
?>