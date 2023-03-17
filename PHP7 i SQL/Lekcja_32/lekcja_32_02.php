<?php
/* parametry połączenia */
$host = 'localhost';
$port = 12345;

$command = (isset($argv[1])) ? trim($argv[1]) : 'czas';

// utwórz klienta i połącz się z serwerem
if (($socket = stream_socket_client('tcp://'.$host.':'.$port)) === false)
{
    die('Nie mogę uruchomić klienta.');
}

// wyślij wiadomość do serwera
if (stream_socket_sendto($socket, $command) !== false)
{
    $response = fread($socket, 4096); // odbierz wiadomość z serwera
    print $response;
}

// zamknij połączenie
stream_socket_shutdown($socket, STREAM_SHUT_RDWR);
?>