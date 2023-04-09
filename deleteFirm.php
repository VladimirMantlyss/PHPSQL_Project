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

// SQL-запрос на удаление данных из таблицы
$sql = "DELETE FROM firm WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    echo "<div class='container'>
    <form action='index.php' method='post' enctype='multipart/form-data'>

        <input type='submit' class='btn' value='back'>
    </form>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// закрытие соединения с базой данных
mysqli_close($conn);
?>
