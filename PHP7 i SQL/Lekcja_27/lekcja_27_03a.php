<?php
abstract class Info // definicja klasy abstrakcyjnej
{
    abstract public function getID(); // definicja metody abstrakcyjnej
    abstract public function getCode(); // implementacja metody

    public function getName() // implementacja metody
    {
        print "Obsługa metody getName()\n";
    }
}

class Patient extends Info // definicja klasy z dziedziczeniem
{
    public function getID() // implementacja metody abstrakcyjnej
    {
        print "Obsługa metody getID()\n";
    }

    public function getCode(){
        print "Obsługa metody getCode() w klasie Patient\n";
    }
}

$chory = new Patient;
$chory->getID();
$chory->getName();
$chory->getCode();
?>