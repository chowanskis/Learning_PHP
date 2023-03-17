<?php
class Ssak // definicja klasy
{
    private $kolorOczu; // wspólna właściwość dla ssaków
    
    public function setKolorOczu($kolor)
    {
        $this->kolorOczu = $kolor;
    }
    
    public function getKolorOczu()
    {
        return $this->kolorOczu;
    }
}

class Pies extends Ssak // definicja klasy z dziedziczeniem
{
    private $rasa;
 
    public function setRasa($rasa)
    {
        $this->rasa = $rasa;
    }
    
    public function getRasa()
    {
        return $this->rasa;
    }
}

$pies = new Pies();
$pies->setKolorOczu("brązowe"); // odziedziczona metoda po klasie Ssak
$pies->setRasa("szpic pomorski"); // metoda zdefiniowana w klasie Pies

print "Mój pies:\n";
print "rasa: ".$pies->getRasa()."\n";
print "kolor oczu: ".$pies->getKolorOczu();
?>