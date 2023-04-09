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
    <h5>Add New Dogovor</h5>
    <form method="post" action="insertDogovor.php">

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
