<?php

class Person // definicja klasy
{
    private $name; // właściwość klasy
    
    public function setName($name) // metoda klasy
    {
        $this->name = $name; // przypisanie wartości do właściwości klasy
    }
    
    public function getName() // metoda klasy
    {
        return $this->name; // pobranie wartości właściwości klasy
    }    
}

$contact = new Person(); // tworzenie egzemplarza klasy
$contact->setName("Armands"); // wywołanie metody klasy

print $contact->getName(); // wydrukowanie wartości właściwości klasy
?>