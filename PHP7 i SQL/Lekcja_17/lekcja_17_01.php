<?php
$name = "Ziemomysł"; // zmienna globalna

function printName()
{
    $name = "Toro"; // zmienna lokalna
    print "Zmienna lokalna: $name";
}

print "Zmienna globalna: $name"; // zmienna z linii 2
print "\n";
printName();
print "\n";
print "Zmienna globalna: $name"; // ponownie zmienna z linii 2
?>