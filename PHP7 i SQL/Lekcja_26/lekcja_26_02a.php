<?php
// Poprawiona definicja klasy, gdyż poprzednia zawierała
// dwie zmienne, które nigdzie nie były uzywane.(2 pola) 
class Silnik // definicja klasy
{
    private $moc;
    
    public function setMoc($moc)
    {
        $this->moc = $moc;
    }
    
    public function getMoc()
    {
        return $this->moc;
    }
}

class Auto // definicja klasy
{
    private $marka;    
    private $model;
    private $silnik;
    
    public function __construct($marka, $model, $moc) // konstruktor
    {
        $this->marka = $marka;
        $this->model = $model;
        
        $this->silnik = new Silnik; // tworzenie egzemplarza klasy
        $this->silnik->setMoc($moc); // wywołanie metody egzemplarza klasy
    }    
    
    public function print()
    {
        print "Parametry samochodu:\n";
        print "Marka: ".$this->marka."\n";
        print "Model: ".$this->model."\n";
        print "Moc silnika: ".$this->silnik->getMoc()." KM";
    }
}

$auto = new Auto("Syrena", "S-31", 45);
$auto->print();
?>