<?php
// Подключаемся к базе данных
$host = "localhost"; // адрес сервера базы данных
$username = "root"; // имя пользователя базы данных
$password = ""; // пароль пользователя базы данных
$dbname = "firmadogovor"; // имя базы данных

// установка соединения с базой данных
$conn = mysqli_connect($host, $username, $password, $dbname);

// Проверяем соединение с базой данных
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Формируем SQL-запрос
$sql = "SELECT firm.name AS firm_name, dogovor.numberd, dogovor.date_start, dogovor.date_finish 
FROM firm INNER JOIN dogovor ON firm.id = dogovor.id_firm 
WHERE DATEDIFF(dogovor.date_finish, dogovor.date_start) > 365";

// Выполняем SQL-запрос
$result = mysqli_query($conn, $sql);

// Проверяем наличие результатов
if (mysqli_num_rows($result) > 0) {
    // Выводим заголовок таблицы
    echo "<table>";
    echo "<tr><th>Фирма</th><th>Номер договора</th><th>Дата начала</th><th>Дата окончания</th></tr>";

    // Выводим данные о договорах
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['firm_name'] . "</td><td>" . $row['numberd'] . "</td><td>" . $row['date_start'] . "</td><td>" . $row['date_finish'] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Данные не найдены.";
}

echo "<div class='container'>
    <form action='index.php' method='post' enctype='multipart/form-data'>

        <input type='submit' class='btn' value='back'>
    </form>";

// Закрываем соединение с базой данных
mysqli_close($conn);
?>
