<?php
// etapy gry
define('GAME_DURING', 1);
define('GAME_WIN', 2);
define('GAME_OVER', 3);

// definicja naszego wisielca
define('HANGMAN', [
// scena 1   
' -------
 |/    |
 |
 |
 |
 |
 |
/|\
-------------',
// scena 2
' -------
 |/    |
 |     o
 |
 |
 |
 |
/|\
-------------',
// scena 3
' -------
 |/    |
 |     o
 |     |
 |     |
 |
 |
/|\
-------------',
// scena 4
' -------
 |/    |
 |     o
 |     |
 |     |
 |    /
 |
/|\
-------------',
// scena 5
' -------
 |/    |
 |     o
 |     |
 |     |
 |    / \
 |
/|\
-------------',
// scena 6
' -------
 |/    |
 |     o
 |   --|
 |     |
 |    / \
 |
/|\
-------------',
// scena 7
' -------
 |/    |
 |     o
 |   --|--
 |     |
 |    / \
 |
/|\
-------------'   
]);

class Hangman
{    
    private $count = 0; // ilość możliwych haseł do odgadnięcia
    private $current = 0; // indeks aktualnego hasła
    private $texts = []; // tablica z hasłami
    private $text = ''; // aktualne hasło
    private $letters = 0; // ilość liter w haśle
    private $template = ''; // szablon z ukrytymi literami
    private $errors = 0; // ilość błędnych typowań
    
    function __construct($texts, $current = -1, $errors = 0)
    {        
        foreach ($texts as $k=>$v) {
            $texts[$k] = str_replace(' ', '^', $v); // zamień spacje na znak ^
        }
        $this->texts = $texts;        
        $this->count = count($this->texts);
        $this->current = ($current == -1) ? rand(0, $this->count - 1) : $current;
        $this->text = mb_strtoupper($this->texts[$this->current]);
        $this->letters = mb_strlen($this->text);
        $this->template = str_repeat('_ ', $this->letters);
        $this->errors = $errors;
    }
    
    // sprawdź czy wprowadzone litery znajdują się w haśle
    private function match($entered)
    {
        for ($x = 0; $x < $this->letters; $x++) 
        {
            $char = $this->text[$x];
            if (mb_strstr($entered, $char))
            {
                $pos = $x * 2;
                $this->template[$pos] = $char;
            }
        }
        
        return $this->template;
    }
    
    public function start()
    {
        $this->match('^'); // oddziel wyrazy
        
        return [
            'status' => GAME_DURING,
            'stage' => HANGMAN[0],
            'template' => $this->template,
            'current' => $this->current,
            'entered' => '',
            'errors' => 0,
        ];
    }
    
    public function play($letter, $entered)
    {
        $this->match('^'); // oddziel wyrazy
        
        $letter = mb_strtoupper(trim($letter));
        $entered = mb_strtoupper(trim($entered));
        
        // jeśli nie ma litery w haśle, to zwiększ licznik błędów
        if(!mb_strstr($this->text, $letter))
        {
            $this->errors++;
        }
        
        // zakończ grę po 7 scenie
        if ($this->errors > 6)
        {
            return [
                'status' => GAME_OVER,
                'stage' => HANGMAN[6],
                'text' => $this->text
            ];
        }
        
        $entered .= $letter;
                
        // usuń duplikaty i posortuj typowane litery
        $tmp = array_unique(str_split($entered), SORT_STRING);
        sort($tmp);        
        $entered = implode('', $tmp);
        
        $this->match($entered); // sprawdź hasło
        
        if (!mb_strstr($this->template, "_"))
        {
            return [
                'status' => GAME_WIN,
                'stage' => HANGMAN[$this->errors],
                'text' => $this->text
            ];
        }
        
        return [
            'status' => GAME_DURING,
            'stage' => HANGMAN[$this->errors],
            'template' => $this->template,
            'current' => $this->current,
            'entered' => $entered,
            'errors' => $this->errors,
        ];
    }
}