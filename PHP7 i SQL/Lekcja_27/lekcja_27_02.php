<?php
interface Data // definicja interfejsu
{
    public function getID(); // definicja metody
    public function getName(); // definicja metody
    public function getCode(); // definicja metody
}

class Patient implements Data // implementacja interfejsu
{
    public function getID() // implementacja metody
    {
        print "Obsługa metody getID()\n";        
    }
    public function getName() // implementacja metody
    {
        print "Obsługa metody getName()\n";
    }
    public function getCode() // implementacja metody
    {
        print "Obsługa metody getCode()";
    }
}

$chory = new Patient;
$chory->getID();
$chory->getName();
$chory->getCode();
?>