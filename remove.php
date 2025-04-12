<!DOCTYPE html>


<?php 

if(isset($_POST['enviar'])){

    $user = $_POST['user'];
    $rename = $user.".json";

    if(file_exists('usuarios/'.$rename)){

        if(!unlink('usuarios/'.$rename)){
            echo "<script>alert('Ocorreu um erro ao excluir')</script>";
        }else{
            echo "<script>alert('Usuário excluido')</script>";
        }

    }else{
        echo "<script>alert('Usuário não existe')</script>";
    }

}


?>



<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
    <link rel="stylesheet" href="css/criarStyle.css">
</head>

<body>

    <div class="toolbar">
        <a class="sair" href="https://xvideos.com"> Sair </a>
        <a class="adm" href="https://wa.me/+5554991267036">Contato</a>
        <h1 class="title">Painel Z8HX - ADMIN</h1>
    </div>

    <div class="fundo">

        <div class="drawer">

        <a style="background-color: transparent ;margin: 0px; padding: 0px;" href="dashboard.php"><img src="img/Home100.png"></a>
            <a style="background-color: transparent ;margin: 0px;padding: 0px;" href="create.php"><img  src="img/addUser100.png"></a>
            <a href="view.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img  src="img/ViewUser100.png"></a>
            <a href="remove.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img style=" background-color: rgba(255, 255, 255, 0.438); border-radius: 3px;" src="img/RemovUser100.png"></a>
        </div>

        <div class="fundoV2">

            <!--Aqui começa a parte do layout da tela-->

            <form action="" method="post">

                <h1 style="color: #555f78; padding:13px; margin-left: 8px; font-size:14px; background-color:transparent; ">REMOVER USUÁRIO</h1>
                <div class="line"></div>
                <div style="padding:14px ;" class="login">
                    <label for="">Usuário</label><br>
                    <input name="user" type="text" placeholder="Enter username"><br>
                    <label for="">Vendedor</label><br>
                    <h4 class="vendedor">Esthevan</h4>

                </div>
                <div class="line"></div>
                <div style="padding:14px;">
                    <input name="enviar" class="botao" type="submit" value="Remover">
                </div>




            </form>



            <!--Aqui termina-->



        </div>

    </div>



</body>

</html>