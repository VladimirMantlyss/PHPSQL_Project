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

$sql = "SELECT * FROM dogovor"; // SQL-запрос

$result = mysqli_query($conn, $sql); // выполнение запроса к базе данных

if (mysqli_num_rows($result) > 0) {
    // вывод данных
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["Id"] . " ID_Firm: " . $row["id_firm"] . " Numberd: " . $row["numberd"]. " Named: " . $row["named"]. " SumD: " . $row["sumd"] . " DateStart: " . $row["date_start"] . " DateFinish: " . $row["date_finish"]. " Avans: " . $row["avans"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            padding-top: 3rem;
        }
        .container {
            width: 4000px;
        }
    </style>
</head>
<body>
<div class="container">
    <h5>Change Dogovor</h5>
    <form method="post" action="updateDogovor.php">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>

        <label for="Firmid">FirmId:</label>
        <input type="number" id="Firmid" name="Firmid" required>

        <label for="Numberd">Numberd:</label>
        <input type="number" id="Numberd" name="Numberd" required>

        <label for="Named">Named:</label>
        <input type="text" id="Named" name="Named" required>

        <label for="Sumd">SumD:</label>
        <input type="number" id="Sumd" name="Sumd" required>

        <label for="DateStrat">DateStrat:</label>
        <input type="date" id="DateStrat" name="DateStart" required>

        <label for="DateFinish">DateFinish:</label>
        <input type="date" id="DateFinish" name="DateFinish" required>

        <label for="Avans">Avans:</label>
        <input type="number" id="Avans" name="Avans" required>

        <button type="submit">Submit</button>
    </form>



</div>
</body>
</html>
