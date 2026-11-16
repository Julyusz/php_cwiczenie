<?php
$host = '127.0.0.1';
$user = 'mariadb';
$password = 'mariadb';
$database = 'mariadb';

$polaczenie = mysqli_connect($host, $user, $password, $database);
if (!$polaczenie) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}
echo "Połączono z bazą danych <b>$database</b>";
?>