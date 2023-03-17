<?php
$kontakt = []; // deklaracja tablicy

// pierwszy kontakt
$kontakt['imie'] = 'Adam';
$kontakt['nazwisko'] = 'Kowalski';
$kontakt['telefon'] = '123456789';

$kontakty = []; // deklaracja tablicy

// w tym momencie tablica $kontakty staje się już tablicą 2-wymiarową,
// ponieważ wstawiamy do niej tablicę $kontakt, tworzymy tablicę tablic
array_push($kontakty, $kontakt); 

// drugi kontakt, wypełniamy ponownie tablicę $kontakt
$kontakt['imie'] = 'Ewa';
$kontakt['nazwisko'] = 'Nowakówna';
$kontakt['telefon'] = '987654321';

// zamiast array_push możesz użyć formy skróconej []
$kontakty[] = $kontakt;

print_r($kontakty); // jak wygląda tablica w programie?

print "\n";
printf("Imię pierwszego kontaktu to: %s\n", $kontakty[0]['imie']);

print "\nLista kontaktów:\n";

$e = count($kontakty); // ile elementów ma tablica?

// dostęp do elementów tablicy
for ($i = 0; $i < $e; $i++) {
    printf(
        "%s\t%s\ttel. %s\n", 
        $kontakty[$i]['imie'], 
        $kontakty[$i]['nazwisko'], 
        $kontakty[$i]['telefon']
    );
}
?>