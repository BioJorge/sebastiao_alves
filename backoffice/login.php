<?php
    require_once("../php/config.php");
    require_once("../php/base_dados.php");
    require_once("../php/funcoes.php");

    $form = isset($_POST["email"]) && isset($_POST["senha"]);

    if($form){
            //se
        $user_found = logar_criptografia($_POST["email"], $_POST["senha"]);

        if(empty($user_found)){
            header("Location: backoffice.php?credencial=incorreto");
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
        header("Location: index.html?credencial=vazio");
        exit();
    }

?>