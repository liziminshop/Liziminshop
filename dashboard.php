<!DOCTYPE html>

<?php

$soma = file_get_contents('fullUser.json');
$d = json_decode($soma,true);
$uuid = count($d);

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashStyle.css">
</head>

<body>

    <div class="toolbar">
        <a class="sair" href="https://xvideos.com"> Sair </a>
        <a class="adm" href="https://wa.me/+5554991267036">Contato</a>
        <h1 class="title">Painel Z8HX - ADMIN</h1>
    </div>

    <div class="fundo">

        <div class="drawer">

            <a style="background-color: transparent ;margin: 0px; padding: 0px;" href="dashboard.php"><img style=" background-color: rgba(255, 255, 255, 0.438); border-radius: 3px;" src="img/Home100.png"></a>
            <a style="background-color: transparent ;margin: 0px;padding: 0px;" href="create.php"><img  src="img/addUser100.png"></a>
            <a href="view.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img src="img/ViewUser100.png"></a>
            <a href="remove.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img src="img/RemovUser100.png"></a>

        </div>

        <div class="users">
            <img class="usersImg" src="img/ViewUser100.png" alt="">
            <small><?php echo $uuid ?></small>
        </div>

    </div>



</body>

</html>