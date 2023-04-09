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

<form method="post" action="sum.php">
    <label for="firm_id">ID фирмы:</label>
    <input type="text" name="firm_id" id="firm_id">
    <br>
    <label for="start_date">Дата начала периода:</label>
    <input type="date" name="start_date" id="start_date">
    <br>
    <label for="end_date">Дата окончания периода:</label>
    <input type="date" name="end_date" id="end_date">
    <br>
    <input type="submit" value="Отправить">
</form>

