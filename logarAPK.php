<?php



    $username = $_POST['user'];

    $password = $_POST['pass'];
    
    $dispositivo = $_POST['id'];
    
    $Vtoken = $_POST['token'];

    $diaAtual = $_POST['day'];
    
    $rename = $username.".json";
    
    $diretorio = 'usuarios/'.$rename;

    if(file_exists('usuarios/'.$rename)){
    
        $file = file_get_contents($diretorio);
    
        $getData = json_decode($file,true);
    
        $senha = $getData['pass'];
    
        $celular = $getData['id'];
    
        $Vstts = $getData['status'];
    
        $Atoken = $getData['token'];

        $validade = $getData['validade'];
    
        if($senha == $password){
            if($celular == ""){

                $arr= array("user"=>$username, "pass"=>$password, "id"=>$dispositivo, "validade"=>$validade, "token"=>$username.$password, "status"=>$Vstts);
                $encript[] =  json_encode($arr);

                if(file_put_contents($diretorio,$encript)){

                    $Ndata = file_get_contents($diretorio);
                    $dec = json_decode($Ndata,true);
                    $data_final = $dec['validade'];
                    $data_inicial = $diaAtual;
                    $diferenca = strtotime($data_final) - strtotime($data_inicial);
                    $dias = floor($diferenca / (60 * 60 * 24)); 
                    if($dias < 0){

                        $final = "0";

                    }else{
                        
                        $final = $dias;

                    }

                    
                    $senha = $dec['pass'];
                    $celular = $dec['id'];              
                    $Vstts = $dec['status'];
                    $Atoken = $dec['token'];
                    $validade = $dec['validade'];
                    /*$criado = $dec['criado'];*/
    
                    $Varr = array("user"=>$username, "pass"=>$password, "id"=>$dispositivo, "validade"=>$validade, "token"=>$username.$password,"criado"=>$diaAtual, "expira"=>$final, "status"=>$Vstts);
                    $encript = json_encode($Varr);
                    
                    echo $encript;
    
                }else{
    
                    echo"Erro no servidor";
    
                }


            }else{

                if($celular == $dispositivo){
                    if($Vstts == "ATIVO" ){
                        if($Atoken == $Vtoken){

                            $Ndata = file_get_contents($diretorio);
                            $dec = json_decode($Ndata,true);
                            $data_final = $dec['validade'];
                            $data_inicial = $diaAtual;
                            $diferenca = strtotime($data_final) - strtotime($data_inicial);
                            $dias = floor($diferenca / (60 * 60 * 24)); 
                            if($dias < 0){
        
                                $final = "0";
        
                            }else{
                                
                                $final = $dias;
        
                            }
        
                            
                            $senha = $dec['pass'];
                            $celular = $dec['id'];              
                            $Vstts = $dec['status'];
                            $Atoken = $dec['token'];
                            $validade = $dec['validade'];
                            /*$criado = $dec['criado'];*/
            
                            $Varr = array("user"=>$username, "pass"=>$password, "id"=>$dispositivo, "validade"=>$validade, "token"=>$username.$password,"criado"=>$diaAtual, "expira"=>$final, "status"=>$Vstts);
                            $encript = json_encode($Varr);
                            
                            echo $encript;
                            
                        }else{
                            echo "Token invalido";
                        }
                    }else{
                        echo "Usuario desativado";
                       }
                }else{
                        echo "dispositivo não permitido";
                }
            }
        }else{
            echo "Senha incorreta";  
        }

    }else{

        echo "Usuário não existe";
    }

?>