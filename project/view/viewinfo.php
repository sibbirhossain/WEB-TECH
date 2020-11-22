<!DOCTYPE html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Informations</title>
</head>


<body>

    <?php require '_nav.php' ?>
    <br>
    <div>
        <h3 style="text-align: center;">Serial No. | Name | Phone | Gender | Email | Address</h3>
    </div>
    <br>

    <ol>
        <?php
        $users = fopen("../data/users.txt", "r") or die("Unable to open file!");

        while ($usersinfo = fgets($users)) {
            echo "<li>" . $usersinfo . "</li>";
        }
        fclose($users);

        ?>
    </ol>
    <br><br><br><br><br><br><br><br><br>
    <div>
        <?php require 'footer.php' ?>
    </div>
</body>

</html>