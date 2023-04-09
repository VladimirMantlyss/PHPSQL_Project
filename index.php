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
        <form action="allFirmInfo.php" method="post" enctype="multipart/form-data">
            <input type="submit" class="btn" value="ShowFirms">

        </form>
        <form method="post" action="insertFirmBegin.php" enctype="multipart/form-data">

            <input type="submit" class="btn" value="Add New Firm">

        </form>
        <form method="post" action="changeFirmBegin.php" enctype="multipart/form-data">

            <input type="submit" class="btn" value="Change Firm">

        </form>
        <form method="post" action="deleteFirmBegin.php" enctype="multipart/form-data">

            <input type="submit" class="btn" value="Delete Firm">

        </form>
</div>
<div class="container" style="margin-top: 100px">
        <form action="allDogovorInfo.php" method="post" enctype="multipart/form-data">
            <input type="submit" class="btn" value="ShowDogovors">
        </form>
        <form method="post" action="insertDogovorBegin.php" enctype="multipart/form-data">

            <input type="submit" class="btn" value="Add New Dogovor">

        </form>

        <form method="post" action="changeDogovorBegin.php" enctype="multipart/form-data">

            <input type="submit" class="btn" value="Change Dogovor">

        </form>

        <form method="post" action="deleteDogovorBegin.php" enctype="multipart/form-data">

            <input type="submit" class="btn" value="Delete Dogovor">
        </form>
</div>

<div class="container" style="margin-top: 100px">
    <form method="post" action="dogovor_period.php" enctype="multipart/form-data">

        <input type="submit" class="btn" value="Func1">  усі договори для зазначеної фірми за вказаний період;

    </form>

    <form method="post" action="dogovor_sum.php" enctype="multipart/form-data">

        <input type="submit" class="btn" value="Func2">  суми всіх договорів для зазначеної фірми за вказаний період;

    </form>

    <form method="post" action="longterm.php" enctype="multipart/form-data">

        <input type="submit" class="btn" value="Func3">  інформація про всі довгострокові (більше року) договори всіх фірм за весь період часу;

    </form>
</div>


</form>
</body>
</html>
