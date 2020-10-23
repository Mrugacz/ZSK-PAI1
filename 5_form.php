<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Formularze</h4>
    <form method="get">
    <input type="text" name="surname" placeholder="Nazwisko" autofocus><br>
    <input type="text" name="name" placeholder="Imie"><br>
    <input type="submit" value="Wyslij dane"><br>
    </form>
    <?php
    if (!empty($_GET['surname']) && !empty($_GET['name']))
    {
    $surname = $_GET['surname'];
    echo <<<DATA
        Nazwisko: $surname<br>
        Imie: $_GET[name]<br>
        DATA;
    }
    ?>
</body>
</html>