<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver usuarios</title>
    <link rel="stylesheet" href="css/viewStyle.css">
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
            <a style="background-color: transparent ;margin: 0px;padding: 0px;" href="create.php"><img src="img/addUser100.png"></a>
            <a href="view.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img style=" background-color: rgba(255, 255, 255, 0.438); border-radius: 3px;"  src="img/ViewUser100.png"></a>
            <a href="remove.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img src="img/RemovUser100.png"></a>
        </div>

        <div class="fundoV2">
            <!--Aqui começa a parte do layout da tela-->
            <div class="table">
                <h1 class="Ttable" style=" font-weight: 50; color: #555f78; padding:13px; padding-bottom: 2px; padding-top: 2px; margin-left: 8px;  background-color:transparent; "> <b> ></b> Todos os usuarios abaixo </h1>
                <div class="line"></div>
                <div style="padding:9px;">
                    <table width="100%">
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Senha</th>
                            <th>Device</th>
                            <th>Status</th>
                            <th>Validade</th>
                           
                        </tr>


                        <?php
            $Narquivo = file_get_contents('fullUser.json');
            $dec = json_decode($Narquivo, true);
            $uu = $dec;
            foreach($uu as $key){

                ?>      

                        <tr>
                            <td><?php echo $key['uid'];  ?></td>
                            <td><?php echo $key['user'];  ?></td>
                            <td><?php echo $key['pass'];  ?></td>
                            <td>0/1</td>
                            <td id="stt"> <?php echo $key['status'];  ?></td>
                            <td><?php echo $key['validade'];  ?></td>
                           
                        </tr>


                        <?php } ?>

                    </table>

                    <div class="conteudo">

                        <div class="copy">Copyright © <b>Z8HX OFC</b> 2022</div>

                    </div>
                </div>

            </div>

            <!--Aqui termina-->



        </div>

    </div>



</body>

</html>