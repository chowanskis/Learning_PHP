<?php

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

$array = [
    ["wartosc_1_a", "wartosc_1_b", "wartosc_1_c"],
    ["wartosc_2_a", "wartosc_2_b", "wartosc_2_c"],
    ["wartosc_3_a", "wartosc_3_b", "wartosc_3_c"]
];

print_r($array);
?>