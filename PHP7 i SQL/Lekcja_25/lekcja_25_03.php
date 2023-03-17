<?php
class Produkt // definicja klasy
{
    private $nazwa; // właściwość dostępna lokalnie
    private $brutto; // i ta również
    private $netto; // i jeszcze ta
    
    public $vat = 23; // właściwość dostępna publicznie
    
    public function __construct($nazwa, $brutto) // konstruktor
    {
        $this->nazwa = $nazwa;
        $this->brutto = $brutto;
        $this->netto = $this->setNetto(); // wywołaj metodę lokalną
    }
    
    public function drukuj() // metoda dostępna publicznie
    {
        printf(
        "Produkt: %s\nCena netto: %.2f PLN\nPodatek: %.2f %%\nCena brutto: %.2f PLN",
        $this->nazwa,
        $this->netto,
        $this->vat,
        $this->brutto
        );
    }
    
    private function setNetto() // metoda dostępna lokalnie
    {
        return $this->brutto - ($this->brutto / (1 + $this->vat));
    }
}

$owoc = new Produkt("Jabłko", 4); // tworzenie egzemplarza klasy
print $owoc->drukuj(); // wywołanie metody publicznej
?>