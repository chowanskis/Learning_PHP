<?php
class MyDB extends SQLite3 // dołącz rozszerzenie do obsługi SQLite
{
    function __construct($db_name)
    {
        try 
        {
            $this->open($db_name); // połącz się z bazą danych
        } 
        catch (Exception $exception) 
        {
            echo $exception->getMessage();
            die();
        }
    }
    
    function myQuery($sql)
    {
        $query = $this->query($sql);
        
        $array = [];
        $cnt = 0;
        
        if ($query) {
            while ($row = $query->fetchArray(SQLITE3_ASSOC)) {
                foreach($row as $i=>$v) {
                    $array[$cnt][$i] = $v;
                }
                $cnt++;
            }
        }
        
        return $array;
    }
}

$db = new MyDB('kartoteka.db'); // tworzenie egzemplarza klasy

/* pobierz informacje o wypożyczeniach */
$result = $db->myQuery("
SELECT w.id, w.data, k.tytul, o.imie, o.nazwisko
FROM wypozyczenia AS w, ksiazki AS k, osoby AS o
WHERE
w.ksiazka = k.id AND w.osoba = o.id
ORDER BY w.id ASC;
");

print "ID\tDATA\t\tTYTUŁ KSIĄŻKI\t\tWYPOŻYCZAJĄCY\n";

foreach ($result as $r) {
    printf(
        "%s\t%s\t%s\t%s %s\n", 
        $r['id'], $r['data'], $r['tytul'], $r['imie'], $r['nazwisko']
    );
}

# print_r($result);

$db->close(); // zamknij połączenie z bazą
?>