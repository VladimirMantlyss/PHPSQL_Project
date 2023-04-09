<?php

$host = "localhost"; // адрес сервера базы данных
$username = "root"; // имя пользователя базы данных
$password = ""; // пароль пользователя базы данных
$dbname = "firmadogovor"; // имя базы данных

// установка соединения с базой данных
$conn = mysqli_connect($host, $username, $password, $dbname);

// проверка соединения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM firm"; // SQL-запрос

$result = mysqli_query($conn, $sql); // выполнение запроса к базе данных

if (mysqli_num_rows($result) > 0) {
    // вывод данных
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["Id"] . " Name: " . $row["name"] . " Schef: " . $row["schef"]. " Adress: " . $row["adress"]  . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>

<br>

<form method="post" action="dogovor_periodView.php">
    <label for="id">ID фирмы:</label>
    <input type="text" id="id" name="id" required>

    <label for="start_date">Дата начала периода:</label>
    <input type="date" id="start_date" name="start_date" required>

    <label for="end_date">Дата окончания периода:</label>
    <input type="date" id="end_date" name="end_date" required>

    <button type="submit">Показать договоры</button>
</form>
