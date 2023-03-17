<?php
class Kwadrat // definicja klasy
{
    private $pole;
    private $obwod;
    
    public function __construct($bok) // konstruktor
    {
        $this->pole = $bok * $bok;
        $this->obwod = 4 * $bok;
    }
    
    public function pole() // metoda zwracająca pole kwadratu
    {
        return $this->pole;
    }
    
    public function obwod() // metoda zwracająca obwód kwadratu
    {
        return $this->obwod;
    }
}

$bok = 5; // długość boku kwadratu

$kwadrat = new Kwadrat($bok); // tworzenie egzemplarza klasy

$pole = $kwadrat->pole(); // wywołanie metody zwracającej pole
$obwod = $kwadrat->obwod(); // i obwód kwadratu

printf("Pole kwadratu o boku %.2f wynosi %.2f.\n", $bok, $pole);
printf("Obwód kwadratu o boku %.2f wynosi %.2f.", $bok, $obwod);
?>