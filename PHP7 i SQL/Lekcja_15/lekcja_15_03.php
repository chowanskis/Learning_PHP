<?php
// definicja funkcji z 2 argumentami
// każdy argument ma ustaloną wartość domyślną
function drukuj($tekst = "", $nowa_linia = true)
{
    print $tekst;
    if ($nowa_linia == true) {
        print PHP_EOL;
    }
}

drukuj("Lubię ", false);
drukuj("programować!");
drukuj();
drukuj("Ale lubię też wakacje!");
?>