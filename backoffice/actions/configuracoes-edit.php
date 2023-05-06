<?php
    require_once("../../controllers/requisitos.php");

    $form = isset($_GET["senha_digitada"]) && isset($_GET["nova_senha"]) && isset($_GET["senha_confirmacao"]) && isset($_GET["id"]); 
    if($form){
        $id = $_GET["id"];
        $usuario = selectSQLUnico("SELECT * FROM colaboradores WHERE id='$id'");
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $redes_edicao = selectSQLUnico("SELECT * FROM redes_sociais WHERE id='$id'");
                //verificandos e a senha atual
            if(password_verify($_GET["senha_digitada"], $usuario["senha"])){
                //verificandos e a nova senha foi digitada duas vezes corretamente
                if($_GET["senha_confirmacao"] != $_GET["nova_senha"]){
                    header("Location: ../backoffice-logado.php?opcao=9&incongruencias=true");
                    exit();
                } else{
                    $nova_senha_cripto = password_hash($_GET["nova_senha"], PASSWORD_DEFAULT);
                    iduSQL("UPDATE colaboradores SET senha='$nova_senha_cripto' WHERE id='$usuario[id]'");
                    header("Location: ../backoffice-logado.php?opcao=9&troca=true");
                    exit();
                }
            } else{
                header("Location: ../backoffice-logado.php?opcao=9&credenciais=false");
                exit();
            }
        } 
    } else{
        header("Location: ../backoffice-logado.php");
        exit();
    }

?>