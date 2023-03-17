<?php
class Auto
{
    protected function print1()
    {
        print "Klasa Auto\n";
    }
}

class Stereo extends Auto
{
    protected function print2()
    {
        print "Klasa Stereo\n";
    }
}

class Radio extends Stereo
{
    public function print3()
    {
        $this->print1(); // wywołanie metody odziedziczonej po klasie Auto
        $this->print2(); // wywołanie metody odziedziczonej po klasie Stereo
        print "Klasa Radio";
    }
}

$radio = new Radio();
$radio->print3();
?>