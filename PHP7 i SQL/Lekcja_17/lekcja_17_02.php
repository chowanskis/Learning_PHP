<?php
$name = "Ziemomysł"; // zmienna globalna

function printName()
{
    global $name; // dostęp do zmiennej globalnej
    
    print "Globalna przed zmianą: $name";
    print "\n";
    
    $name = "Toro"; // zmiana zmiennej globalnej
    print "Globalna po zmianie: $name";
}

print "Zmienna globalna: $name"; // zmienna z linii 2
print "\n";
printName();
print "\n";
print "Zmienna globalna: $name"; // nowa wartość zmiennej globalnej
?>