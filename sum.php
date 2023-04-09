<?php
$host = "localhost"; // адрес сервера базы данных
$username = "root"; // имя пользователя базы данных
$password = ""; // пароль пользователя базы данных
$dbname = "firmadogovor"; // имя базы данных

// Получаем значения параметров из формы
$firm_id = $_POST["firm_id"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];

// Создаем соединение с базой данных
$conn = mysqli_connect($host, $username, $password, $dbname);

// Проверяем соединение на ошибки
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Формируем SQL-запрос
$sql = "SELECT SUM(sumd) FROM dogovor WHERE id_firm = $firm_id AND date_start BETWEEN '$start_date' AND '$end_date'";

// Выполняем запрос
$result = mysqli_query($conn, $sql);

// Извлекаем результат из запроса
$row = mysqli_fetch_row($result);
$sum = $row[0];

// Вывод
if ($sum) {
    echo "Сумма всех договоров для фирмы $firm_id за период с $start_date по $end_date составляет $sum долларов.";
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
