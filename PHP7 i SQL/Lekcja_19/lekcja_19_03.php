<?php
function silnia($i)
{
    if ($i < 2) 
    {
        return 1;
    } 
    else 
    {
        return $i * silnia($i - 1);
    }
}
$x = 4;
print "$x! = ".silnia($x);

print "\n";

$x = 4;
$silnia = 1;
for ($i = 1; $i <= $x; $i++) {
    $silnia *= $i;
}
print "$x! = $silnia";
?>