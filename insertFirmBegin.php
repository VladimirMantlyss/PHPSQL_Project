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
        <h5>Add New Firm</h5>
        <form method="post" action="insertFirm.php">

            <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name" required>

            <label for="Schef">Schef:</label>
            <input type="text" id="Schef" name="Schef" required>

            <label for="Adress">Adress:</label>
            <input type="text" id="Adress" name="Adress" required>

            <button type="submit">Submit</button>
        </form>


    </div>
</body>
</html>
