<?php
abstract class Info // definicja klasy abstrakcyjnej
{
    abstract public function getID(); // definicja metody abstrakcyjnej
    
    public function getName() // implementacja metody
    {
        print "Obsługa metody getName()\n";
    }
    
    final public function getCode() // implementacja metody
    {
        print "Obsługa metody getCode()";
    }
}

class Patient extends Info // definicja klasy z dziedziczeniem
{
    public function getID() // implementacja metody abstrakcyjnej
    {
        print "Obsługa metody getID()\n";
    }
}

$chory = new Patient;
$chory->getID();
$chory->getName();
$chory->getCode();
?>