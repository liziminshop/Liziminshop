<!DOCTYPE html>
<html lang="pt-br">


<?php


if(isset($_POST['envia'])){
   
    $username = $_POST['user']; 
    $password = $_POST['pass'];
    $validade = $_POST['dataa']; 
    if($username == ""){
         echo "<script>alert('Preencha o usuario')</script>"; 
        }else{
             if($password == ""){
                 echo "<script>alert('Preencha a senha')</script>"; }
                 else{ 
                    if($validade == ""){
                         echo "<script>alert('Defina uma data de validade')</script>";
                         }else{

                           
                            $data_inicial = date("y-m-d");
                            $status = "ATIVO"; 
                            $token = $username.$password;
                            $id = ""; 
                            $nameFile = $username.".json";
                            $data = array(
                                "user"=>$username,
                                "pass"=>$password,
                                "id"=>$id,
                                "validade"=>$validade,
                                "token"=>$token,
                                "criado"=>$data_inicial,
                                "status"=>$status);

                                $enc = json_encode($data);

                                if(file_exists('usuarios/'.$nameFile)){
                                     echo "<script>alert('Usuário já existe')</script>";
                                     $username = "";
                                        $password ="";
                                     }else{ 
                                        $dataUser = $enc;
                                        $open = fopen('usuarios/'.$nameFile, "wb");
                                        fwrite($open,$dataUser);
                                       

                                            $soma = file_get_contents('fullUser.json');
                                            $d = json_decode($soma,true);
                                            $uuid = count($d);
                                            $ar = array(
                                                "user"=>$username,
                                                "pass"=>$password,
                                                "id"=>$id,
                                                "validade"=>$validade,
                                                "token"=>$token,
                                                "status"=>$status,
                                                "criado"=>date("y-m-d"),
                                                "uid"=>$uuid
                                            );
                                            $d[]= $ar;
                                            $anc = json_encode($d);
                                    
                                    
                                            if(file_put_contents('fullUser.json',$anc)){
                                              
                                                echo "<script>alert('Usuário Criado')</script>";
        
                                            }


                                     }

                          }
                         } 
                        }


}



?>







<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuárioo</title>
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
            <a style="background-color: transparent ;margin: 0px;padding: 0px;" href="create.php"><img style=" background-color: rgba(255, 255, 255, 0.438); border-radius: 3px;" src="img/addUser100.png"></a>
            <a href="view.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img src="img/ViewUser100.png"></a>
            <a href="remove.php" style="background-color: transparent ; margin: 0px; padding: 0px;"><img src="img/RemovUser100.png"></a>

        </div>

        <div class="fundoV2">

            <!--Aqui começa a parte do layout da tela-->

            <form action="" method="post">

                <h1 style="color: #555f78; padding:10px; margin-left: 8px; font-size:14px; background-color:transparent; ">ADICIONAR USUÁRIO</h1>
                <div class="line"></div>
                <div style="padding:14px ;" class="login">
                    <label for="">Usuário</label><br>
                    <input name="user" type="text" placeholder="Enter username"><br>
                    <label for="">Senha</label><br>
                    <input name="pass" type="text" placeholder="Enter password"><br>
                    <label for="">Dispositivo</label><br>
                    <input type="number" value="1" max="1" min="1"><br>
                    <label for="">Selecione os Dias</label><br>
                    <input name="dataa" type="date"><br>
                    <label for="">Vendedor</label><br>
                    <h4 class="vendedor">Esthevan</h4>

                </div>
                <div class="line"></div>
                <div style="padding:14px;">
                    <input name="envia" class="botao" type="submit" value="Confirmar">
                </div>

            </form>

            <!--Aqui termina-->

        </div>


    </div>



</body>

</html>