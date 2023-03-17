<?php 
class MyDB extends SQLite3 // dołącz rozszerzenie do obsługi SQLite
{
    function __construct($db_name)
    {
        try
        {
            if (!is_file($db_name)) {
                die('Brak pliku z bazą danych: '.$db_name);
            }
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
    
    function allBooks($search = '')
    {
        if ($search != '')
        {
            // wycinamy wszystko co nie jest cyfrą, literą, podkreśleniem itp.
            $search = preg_replace('/[^0-9 a-z-!_]/i', '', $search);
            // usuń znaki ucieczki
            $search = SQLite3::escapeString($search);            
            // przygotuj kod SQL
            $search = 
            'WHERE autor LIKE "%'.$search.'%" OR tytul LIKE "%'.$search.'%"';
        }
        
        // lista wszystkich książek
        // zmiana nazw pól na język angielski
        return $this->myQuery("
        SELECT 
            id, 
            autor as author, 
            tytul as title, 
            rok as year, 
            stron as pages 
            FROM ksiazki $search ORDER BY id ASC;
        ");
    }
    
    function register()
    {
        // lista wszystkich książek
        // zmiana nazw pól na język angielski        
        return $this->myQuery("
        SELECT 
            w.id, 
            w.data as date, 
            k.tytul as title, 
            k.rok as year, 
            o.imie as name, 
            o.nazwisko as surname
        FROM wypozyczenia AS w, ksiazki AS k, osoby AS o
        WHERE
        w.ksiazka = k.id AND w.osoba = o.id
        ORDER BY w.id ASC;
        ");
    }
}
?>