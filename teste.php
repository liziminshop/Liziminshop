<?php
$user = $_POST['user'];

$pass = $_POST['pass'];

$celular = $_POST['id'];

$rename = $user.".json";

if(file_exists($rename)){

    $dados = file_get_contents($rename);

    $decry = json_decode($dados, true);

    $passA = $decry['pass'];

    $idd = $decry['id'];

    if($pass == $passA){

        if($idd == ""){

            $createU = array("user"=>$user,"pass"=>$passA,"id"=>$celular);

            $enc[] = json_encode($createU);

            if(file_put_contents($rename,$enc)){

                echo "logado";

            }else{

                echo"Erro no servidor";

            }

        }else{

            if($idd == $celular){

                echo " Logado";

            }else{

                echo "Dispositivo nao permitido";

            }

        }

    }else{

        echo "Senha incorreta";

    }

}else{

    echo "Usuário não existe";

}
?>