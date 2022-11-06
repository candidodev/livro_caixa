<?php
if(isset($_SESSION['user'])){
    if(isset($action)){
        if($action=="logout"){
            unset($_SESSION['user']);
            
            header("Location:".URL_BASE);
        }
    }else{
        require_once DIR_BASE."pages/em_construcao.php";
    }
}else{
    if(isset($action)){
        if($action="login"){
            include DIR_PAGES."user/login.php";
        }else if($action=="autenticar"){
            $user=$User::login($_POST['email'],$_POST['password']);
            if($user){
                if(isset($user['error'])){
                    #registra a mensagem de erro
                    $msg['msg']="ERROR :".$user['error'];
                    $msg['class']="danger";
                    $_SESSION['msgs'][]=$msg;
                    #redireciona a página
                    header("Location:"+URL_BASE);
                }
                if(isset($user['user'])){
                    #armazena os dados do usuário na sessão
                    $_SESSION['user']=$user;
                    #registra a mensagem de sucesso
                    $msg['msg']="Login successfully done!";
                    $msg['class']="success";
                    $_SESSION['msgs'][]=$msg;
                }
            }
            #Redireciona para a página inicial.
            header("Location:".URL_BASE);

        }else if($action=="forgot_password"){
            require_once DIR_BASE."pages/em_construcao.php";
        }else{
            //require_once DIR_BASE."template/em_construcao.php";
            //require_once DIR_BASE."pages/error_404.php";
        }
    }else{
        include DIR_PAGES."user/login.php";
    }
    
    
}
