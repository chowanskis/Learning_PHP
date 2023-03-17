<?php
require_once 'libs/Smarty.class.php'; // dołączanie pakietu Smarty

$smarty = new Smarty(); // tworzenie egzemplarza klasy

// definicja katalogów roboczych
$smarty->setTemplateDir('smarty/templates'); // szablony
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

// którą stronę wyświetlić?
$page = (isset($_REQUEST['page'])) ? trim(strip_tags($_REQUEST['page'])) : '';
$smarty->assign('page', $page);

require_once 'inc/db.class.php'; // obsługa bazy danych
$db = new MyDB('kartoteka.db'); // tworzenie egzemplarza klasy

// wyświetlenie szablonu
switch ($page) {
    case 'books':
        // może czegoś szukasz?
        $search = (isset($_POST['search'])) ? trim(strip_tags($_POST['search'])) : '';
        
        /* pobierz informacje o książkach */
        $books = $db->allBooks($search);
        $smarty->assign('books', $books);        
        $smarty->assign('search', $search);
        
        $smarty->assign('title', 'Lista książek');
        $smarty->display('books.tpl');
    break;
    case 'register':
        /* pobierz informacje o wypożyczeniach */
        $register = $db->register();
        $smarty->assign('register', $register);
        
        $smarty->assign('title', 'Wypożyczenia');
        $smarty->display('register.tpl');
    break;
    case 'about':
        $smarty->assign('title', 'O mnie');
        $smarty->display('about.tpl');
    break;
    case 'contact':        
        // formularz kontaktowy
        if (
            isset($_POST['contactForm']) AND
            isset($_POST['name']) AND $_POST['name'] != '' AND
            isset($_POST['email']) AND $_POST['email'] != '' AND
            isset($_POST['message']) AND $_POST['message'] != ''
        ) {
            // proste filtrowanie danych z formularza
            $name = trim(strip_tags($_POST['name']));
            $email = trim(strip_tags($_POST['email']));
            $message = trim(strip_tags($_POST['message']));
            
            $smarty->assign('contactForm', $name);            
            
            $write = 
                "===> Data: ".date("Y-m-d H:i:s")."\r\n".
                "Imię: ".$name."\r\n".
                "E-mail: ".$email."\r\n".
                "Wiadomość:\r\n".$message."\r\n".
                "<===\r\n\r\n";
            
            // zapisz do pliku            
            file_put_contents ("messages.txt", $write, FILE_APPEND);
            
            // wyślij na maila
            // zapisz do bazy            
        }
        
        $smarty->assign('title', 'Kontakt');
        $smarty->display('contact.tpl');
    break;
    case 'game':
        // tymczasowa tablica z informacjami o aktualnym stanie gry
        $progres = [];        
        $progres['letter'] = (isset($_POST['letter']) && $_POST['letter'] != '') ? $_POST['letter'] : '_';
        $progres['entered'] = (isset($_POST['entered']) && $_POST['entered'] != '') ? $_POST['entered'] : '';
        $progres['current'] = (isset($_POST['current']) && $_POST['current'] != '') ? (int)$_POST['current'] : -1;
        $progres['errors'] = (isset($_POST['errors']) && $_POST['errors'] != '') ? (int)$_POST['errors'] : 0;        
        
        // tytuły książek z bazy danych będą hasłami do odgadnięcia w grze
        $books = $db->allBooks();
        foreach ($books as $book) {
            $progres['books'][] = $book['title'];
        }
        
        require_once 'inc/game.class.php';
        $hangman = new Hangman($progres['books'], $progres['current'], $progres['errors']);
        
        // nowa gra czy kontynuacja?
        $game = (isset($_POST['game'])) ? 
            $hangman->play($progres['letter'], $progres['entered']) : 
            $hangman->start();
            
        $smarty->assign('title', 'Trochę rozrywki');
        $smarty->assign('game', $game);
        $smarty->display('game.tpl');
    break;
    default:
        $smarty->assign('title', 'Biblioteka Młodego Człowieka');
        $smarty->display('index.tpl');
}
?>