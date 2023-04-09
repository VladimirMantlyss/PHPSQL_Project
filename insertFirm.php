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
$name = $_POST["Name"];
$schef = $_POST["Schef"];
$adress = $_POST["Adress"];

// SQL-запрос на добавление данных в таблицу
$sql = "INSERT INTO firm (name, schef, adress) VALUES ('$name', '$schef', '$adress ')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<div class='container'>
    <form action='index.php' method='post' enctype='multipart/form-data'>

        <input type='submit' class='btn' value='back'>
    </form>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);


}

// закрытие соединения с базой данных
mysqli_close($conn);
?>
