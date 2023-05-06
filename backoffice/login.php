<?php
    require_once("../controllers/requisitos.php");

    $form = isset($_POST["email"]) && isset($_POST["senha"]);

    if($form){
            //se
        $user_found = logar_criptografia($_POST["email"], $_POST["senha"]);

        if(empty($user_found)){
            header("Location: ../backoffice.php?credenciais=incorreto");
            exit();
            
        } else{
            session_start();
            $_SESSION["user"] = $user_found;
            $data = date("H:i:s - d/m/Y");

            novoAcesso($user_found["id"]);
            header("Location: backoffice-logado.php");
            exit();
        }
    
    } else{
        header("Location: ../backoffice.phpl?credencial=vazio");
        exit();
    }

?>