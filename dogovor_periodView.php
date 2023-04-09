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

// получение данных из HTML-формы
$id = $_POST["id"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];

// SQL-запрос на выборку данных из таблицы
$sql = "SELECT * FROM dogovor WHERE id_firm='$id' AND date_start BETWEEN '$start_date' AND '$end_date'";

$result = mysqli_query($conn, $sql);

// проверка наличия данных в таблице
if (mysqli_num_rows($result) > 0) {
    // вывод результатов выборки в HTML-таблицу
    echo "<table>";
    echo "<tr><th>ID</th><th>Номер договора</th><th>Сумма договора</th><th>Дата начала</th><th>Дата окончания</th><th>Аванс</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id_firm"] . "</td>";
        echo "<td>" . $row["numberd"] . "</td>";
        echo "<td>" . $row["sumd"] . "</td>";
        echo "<td>" . $row["date_start"] . "</td>";
        echo "<td>" . $row["date_finish"] . "</td>";
        echo "<td>" . $row["avans"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Нет данных для отображения";
}

// закрытие соединения с базой данных
mysqli_close($conn);
?>
