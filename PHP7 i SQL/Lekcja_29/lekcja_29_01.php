<?php
class MyDB extends SQLite3 // dołącz rozszerzenie do obsługi SQLite
{
    public $is_db_file = false;
    
    function create()
    {
        /* definicja tabel SQL i przykładowe rekordy */
        $this->exec("
        CREATE TABLE IF NOT EXISTS ksiazki
        (
            id    INTEGER PRIMARY KEY AUTOINCREMENT,
            autor TEXT DEFAULT '',
            tytul TEXT DEFAULT '',
            rok   INTEGER DEFAULT 0,
            stron INTEGER DEFAULT 0
        );
        CREATE TABLE IF NOT EXISTS osoby
        (
            id       INTEGER PRIMARY KEY AUTOINCREMENT,
            imie     TEXT DEFAULT '',
            nazwisko TEXT DEFAULT ''
        );
        CREATE TABLE IF NOT EXISTS wypozyczenia
        (
            id      INTEGER PRIMARY KEY AUTOINCREMENT,
            ksiazka INTEGER DEFAULT 0,
            osoba   INTEGER DEFAULT 0,
            data    TEXT DEFAULT ''
        );
        INSERT INTO ksiazki (autor, tytul, rok, stron) 
            VALUES ('Laura Kłos', 'Wspomnienia z wakacji', 2014, 82);
        INSERT INTO ksiazki (autor, tytul, rok, stron) 
            VALUES ('Adam Mruczek', 'Przygody lwa Leona', 2017, 128);
        INSERT INTO ksiazki (autor, tytul, rok, stron) 
            VALUES ('Iwo Mocarz', 'Recepty na udany tort', 2019, 95);

        INSERT INTO osoby (imie, nazwisko) VALUES ('Zofia', 'Nowakówna');
        INSERT INTO osoby (imie, nazwisko) VALUES ('Oskar', 'Kolanko');
        INSERT INTO osoby (imie, nazwisko) VALUES ('Ewa', 'Promyczek');

        INSERT INTO wypozyczenia (ksiazka, osoba, data) VALUES (1, 2, '2019-05-20');
        INSERT INTO wypozyczenia (ksiazka, osoba, data) VALUES (2, 3, '2019-05-22');
        INSERT INTO wypozyczenia (ksiazka, osoba, data) VALUES (3, 1, '2019-05-24');
        INSERT INTO wypozyczenia (ksiazka, osoba, data) VALUES (2, 1, '2019-05-27');
        INSERT INTO wypozyczenia (ksiazka, osoba, data) VALUES (1, 3, '2019-05-31');
        ");
    }
        
    function __construct($db_name)
    {
        $this->is_db_file = file_exists($db_name); // czy plik bazy już istnieje?
        
        try 
        {
            $this->open($db_name); // połącz się z bazą danych
        } 
        catch (Exception $exception) 
        {
            echo $exception->getMessage();
            die();
        }
        
        if (!$this->is_db_file) // utwórz strukturę tabel dla nowej bazy danych
        { 
            $this->create();
            $this->is_db_file = true;
        }
    }
}

$db = new MyDB('kartoteka.db'); // tworzenie egzemplarza klasy

if ($db->is_db_file) 
{
    print "Baza danych SQLite została utworzona!\n";
    print "Zawartość bazy danych:\n\n";
    
    print "KSIĄŻKI\n";
    print "ID\tAUTOR\t\tTYTUŁ\t\t\tROK\tSTRON\n";
    
    $wynik = $db->query("SELECT * FROM ksiazki ORDER BY id ASC;");
    while ($wiersz = $wynik->fetchArray()) {
        printf(
            "%d\t%s\t%s\t%d\t%d\n", 
            $wiersz['id'], $wiersz['autor'], $wiersz['tytul'], 
            $wiersz['rok'], $wiersz['stron']
        );
    }
    
    print "\nOSOBY\n";
    print "ID\tIMIE\tNAZWISKO\n";
    
    $wynik = $db->query("SELECT * FROM osoby ORDER BY id ASC;");
    while ($wiersz = $wynik->fetchArray()) {
        printf(
            "%d\t%s\t%s\n", 
            $wiersz['id'], $wiersz['imie'], $wiersz['nazwisko']
        );
    }    
    
    print "\nWYPOŻYCZENIA\n";
    print "ID\tDATA\t\tID KSIĄŻKI\tID OSOBY\n";
    
    $wynik = $db->query("SELECT * FROM wypozyczenia ORDER BY id ASC;");
    while ($wiersz = $wynik->fetchArray()) {
        printf(
            "%d\t%s\t%s\t\t%s\n",
            $wiersz['id'], $wiersz['data'], $wiersz['ksiazka'], $wiersz['osoba']
            );
    }
}

$db->close(); // zamknij połączenie z bazą
?>