<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .classUsers{
            height: 200px;
            width: 200px;
            float: left;
            border: solid 2px;
            margin-left: 20px;
            text-align: center;
            margin-bottom: 10px;
        }
        #title {
            text-align: center;
        }
    </style>
    <title>Users</title>
</head>
<body>
        <h1 id="title">Users</h1>
    <?php 
        require('connect.php');

        $registers = mysqli_query($con, "Select * from `tbl_register`");

        while ($register = mysqli_fetch_array($registers)) { 
            echo "<div class='classUsers'> ";
            echo "<p> $register[nome] </p>";
            echo "<p> $register[email] </p>";
            echo "<p> $register[senha] <p/>";
            echo "</div>";
        }
    ?>
</body>
</html>