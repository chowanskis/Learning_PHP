<?php
/*
 * plik_c.php
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

 define("STRING", "To jest jakies zdanie");
 define("WARTOSC_INT", 300);
 define("WARTOSC_FLOAT", 3.14);
 define("BOOL", true);

 $br = "\n";
 
 print "Wartość definicji STRING " .STRING .$br;
 print "Wartość definicji WARTOSC_INT " .WARTOSC_INT .$br;
 print "Wartość definicji WARTOSC_FLOAT " .WARTOSC_FLOAT .$br;
 print "Wartość definicji BOOL " .BOOL .$br;
 ?>