<?php
$conn = mysqli_connect('127.0.0.1', 'mariadb', 'mariadb', 'mariadb');
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wpisy (id INT AUTO_INCREMENT PRIMARY KEY, czas TIMESTAMP DEFAULT CURRENT_TIMESTAMP)");

if (isset($_POST['dodaj'])) {
    mysqli_query($conn, "INSERT INTO wpisy VALUES ()");
}

$wynik = mysqli_query($conn, "SELECT * FROM wpisy");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona PHP</title>
</head>
<body>
    <header><h1>Projekt PHP i baza danych</h1></header>

    <form method="POST">
        <button type="submit" name="dodaj">Dodaj wpis</button>
    </form>

    <br>

    <table border="1">
        <tr>
            <th>id</th>
            <th>czas</th>
        </tr>
        <?php while ($wiersz = mysqli_fetch_assoc($wynik)): ?>
        <tr>
            <td><?php echo $wiersz['id']; ?></td>
            <td><?php echo $wiersz['czas']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <footer><p>Autor: <b>Juliusz Sowiński</b></p></footer>
</body>
</html>
<?php mysqli_close($conn); ?>