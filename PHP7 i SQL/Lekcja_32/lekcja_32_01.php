<?php
/* optymalizacja działania serwera */
set_time_limit(600); // program będzie działał co najmniej 10 minut 
ini_set("default_socket_timeout", 300); // oczekuj co najmniej 5 minut na połączenie
ob_implicit_flush(); // wyświetl wszystkie informacje trafiające do bufora na konsoli

/* parametry połączenia */
$host = 'localhost';
$port = 12345;

$limit = 2; // limit przyjętych połączeń
$cnt = 1; // licznik połączeń

print "<> Uruchamiam serwer... ";

// utwórz serwer
if (($connect = stream_socket_server('tcp://'.$host.':'.$port)) === false) 
{
    die('Nie mogę uruchomić serwera.');
}

print "Gotowe!\n";
print "Limit połączeń: $limit\n";

// zaakceptuj połączenie przychodzące
while ($socket = stream_socket_accept($connect)) 
{
    print "[$cnt] Zaakceptowane połączenie z klientem.\n";
    
    $read = stream_socket_recvfrom($socket, 1500, 0, $sender);
    if (empty($read) === false) 
    {
        print "<= Odebrałem wiadomość...\n";
        $response = '';
        
        switch ($read) 
        {
            case 'czas':
                $response = 'Czas lokalny: ' . date('Y-m-d H:i:s');
                print "<?> Przygotowuję informację o aktualnym czasie...\n";
            break;
            case 'wersja-php':
                $response = 'Wersja PHP: ' . phpversion();
                print "<?> Przygotowuję informację o wersji PHP...\n";
            break;
            default:
                $response = 'Echo: '.$read;
        }
        
        stream_socket_sendto($socket, $response, 0, $sender);
        print "=> Wysłałem wiadomość...\n";
    }
    
    fclose($socket);
    sleep(1); // poczekaj chwilkę na kolejne połączenie
    
    $cnt++;
    if ($cnt > $limit) // sprawdź limit połączeń
    {
        print "[*] Przekroczono limit połączeń.\n";
        break; 
    }
}

print "<> Wyłączam serwer... ";

// zamknij połączenie (serwera i klienta)
stream_socket_shutdown($connect, \STREAM_SHUT_RDWR);

print "Gotowe!\n";
?>