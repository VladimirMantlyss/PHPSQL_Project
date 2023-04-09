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
$IdFirm = $_POST["Firmid"];
$Numberd = $_POST["Numberd"];
$Named = $_POST["Named"];
$Sumd = $_POST["Sumd"];
$DateStart = $_POST["DateStart"];
$DateFinish = $_POST["DateFinish"];
$Avans = $_POST["Avans"];

// SQL-запрос на обновление данных в таблице
$sql = "UPDATE dogovor SET id_firm='$IdFirm', numberd='$Numberd', named='$Named', sumd='$Sumd', date_start='$DateStart ', date_finish='$DateFinish', avans='$Avans' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    echo "<div class='container'>
    <form action='index.php' method='post' enctype='multipart/form-data'>

        <input type='submit' class='btn' value='back'>
    </form>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// закрытие соединения с базой данных
mysqli_close($conn);
?>
