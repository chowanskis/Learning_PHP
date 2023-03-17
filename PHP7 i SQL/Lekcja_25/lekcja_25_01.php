<?php
class Auto // definicja klasy
{
    private $marka; // właściwość klasy
    
    public function setMarka($marka) // metoda klasy
    {
        $this->marka = $marka; // przypisanie wartości do właściwości klasy
    }
    
    public function getMarka() // metoda klasy
    {
        return $this->marka; // pobranie wartości właściwości klasy
    }
}

$fiat = new Auto(); // tworzenie pierwszego egzemplarza klasy
$fiat->setMarka("Fiat 125p"); // i wywołanie metody

$jeep = new Auto(); // tworzenie drugiego egzemplarza klasy
$jeep->setMarka("Jeep Grand Cherokee"); // i wywołanie metody

print "Samochody występujące jako obiekty:\n";
print $fiat->getMarka();
print "\n";
print $jeep->getMarka();
?>