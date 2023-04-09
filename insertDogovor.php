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
$IdFirm = $_POST["Firmid"];
$Numberd = $_POST["Numberd"];
$Named = $_POST["Named"];
$Sumd = $_POST["Sumd"];
$DateStart = $_POST["DateStart"];
$DateFinish = $_POST["DateFinish"];
$Avans = $_POST["Avans"];

// SQL-запрос на добавление данных в таблицу
$sql = "INSERT INTO dogovor (id_firm, numberd, named, sumd, date_start, date_finish, avans) VALUES ('$IdFirm', '$Numberd', '$Named ', '$Sumd', '$DateStart ', '$DateFinish ', '$Avans ')";

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
