<?php
    require_once("../../php/config.php");
    require_once("../../php/base_dados.php");
    require_once("../../php/funcoes.php");
    require_once("../../php/globais.php");


    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: index.php");
        exit();
    } else{
        $user = $_SESSION["user"];
    }

    $form = isset($_GET["editar"]) || isset($_GET["deletar"]) || isset($_GET["id"]) || isset($_GET["inserir"]) || isset($_GET["inserir_confirmacao"]);
    if($form){
        
        if(isset($_GET["editar"])){
            //pegando o id pra editar e exibir o menu de edição
            $id = $_GET["editar"];
            $carousel_em_edicao = selectSQLUnico("SELECT * FROM carousel_lg WHERE id='$id'");

            //deleção direta
        } elseif(isset($_GET["deletar"])){
            iduSQL("DELETE FROM carousel_lg WHERE id='$_GET[deletar]'");
            header("Location: ../backoffice-logado.php");
            exit();
        }
    } else{
        header("Location: ../backoffice-logado.php");
        exit();
    }

    //edicao
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $data = date("H:i:s - d/m/Y");
        if(!empty($_GET["imagem_sm"])){
            iduSQL("UPDATE carousel_lg SET imagem_sm='$_GET[imagem_sm]', data_atualizacao='$data' WHERE id='$id'");

        }
        if(!empty($_GET["imagem_lg"])){
            iduSQL("UPDATE carousel_lg SET imagem_lg='$_GET[imagem_lg]', data_atualizacao='$data' WHERE id='$id'");

        }
        if(!empty($_GET["titulo"])){
            iduSQL("UPDATE carousel_lg SET titulo='$_GET[titulo]', data_atualizacao='$data' WHERE id='$id'");

        }
        if(!empty($_GET["categoria"])){
            iduSQL("UPDATE carousel_lg SET categoria='$_GET[categoria]', data_atualizacao='$data' WHERE id='$id'");

        }
        if(!empty($_GET["sinopse"])){
            iduSQL("UPDATE carousel_lg SET sinopse='$_GET[sinopse]', data_atualizacao='$data' WHERE id='$id'");

        }
        header("Location: ../backoffice-logado.php");
        exit();
    }
    if(isset($_GET["inserir_confirmacao"])){
        $data = date("H:i:s - d/m/Y");

        iduSQL("INSERT INTO carousel_lg (imagem_lg, imagem_sm, categoria, titulo, sinopse, data_atualizacao) VALUES ('$_GET[imagem_lg]','$_GET[imagem_sm]', '$_GET[categoria]', '$_GET[titulo]', '$_GET[sinopse]', '$data')");

        header("Location: ../backoffice-logado.php");
        exit();
    } 


?>


<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <!--Boxicons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- CSS do Bootstrap 5.3-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!--CSS proprio-->
        <link rel="stylesheet" href="../style/backoffice-logado.css">
        <!-- editor ckeditor5 -->
        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    </head>

    <body>

        <header>
            <!--Apresentacao do Sebastiao-->
            <div class="col-12 welcome p-3 d-flex justify-content-around align-items-center">
                <h3 style="width: fit-content;">Bem vindo, <span><?=$user["nome"] . " " . $user["apelido"]?></span></h3>
                <a href="logoff.php"><button>Logoff</button></a>
            </div>
        </header>

       
        <main>
            <div class="container opcoes_edicao flex-column d-flex justify-content-center align-items-center">
                <?php if(isset($_GET["editar"])): ?>
                    <form action="carousel-edit.php" method="GET" id="formulario" class="flex-column d-flex justify-content-center align-items-center">
                        <h3 class="text-center">Imagem_sm</h3>
                        <div>
                            <input type="text" name="imagem_sm" value="<?=$carousel_em_edicao["imagem_sm"]?>" name="imagem_sm">
                            <a href="../../tinyfilemanager.php" target="_blank"><button>Buscar imagem</button></a>
                        </div>
                        <br>

                        <h3 class="text-center">Imagem_lg</h3>
                        <div>
                            <input type="text" name="imagem_lg" value="<?=$carousel_em_edicao["imagem_lg"]?>" name="imagem_lg">
                            <a href="../../tinyfilemanager.php" target="_blank"><button>Buscar imagem</button></a>
                        </div>
                        <br>

                        <h3 class="text-center">Título</h3>
                        <input type="text" name="titulo" value="<?=$carousel_em_edicao["titulo"]?>">
                        <br>

                        <h3 class="text-center">Categoria</h3>
                        <input type="text" name="categoria" value="<?=$carousel_em_edicao["categoria"]?>">
                        <br>

                        <h3 class="text-center">Sinopse</h3>
                        <textarea name="sinopse" id="editor1" cols="30" rows="10">
                            <?=$carousel_em_edicao["sinopse"]?>
                        </textarea>
                        <br>

                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" class="mt-3" value="Editar!!"></button>
                    </form>
                <?php endif; ?>

                <?php if(isset($_GET["inserir"])): ?>

                    <form action="carousel-edit.php" method="GET" id="formulario" class="flex-column d-flex justify-content-center align-items-center">

                        <h3>Imagem_sm</h3>
                        <div>
                            <input type="text" name="imagem_sm">
                            <a href="../../tinyfilemanager.php" target="_blank"><button>Buscar imagem</button></a>
                        </div>

                        <h3>Imagem_lg</h3>
                        <div>
                            <input type="text" name="imagem_lg">
                            <a href="../../tinyfilemanager.php" target="_blank"><button>Buscar imagem</button></a>
                        </div>

                        <h3>Título</h3>
                        <textarea name="titulo" id="" cols="60" rows="2"></textarea>
                        
                        <h3>Categoria</h3>
                        <textarea name="categoria" id="" cols="60" rows="2"></textarea>

                        <h3>Sinopse</h3>
                        <textarea name="sinopse" id="editor1" cols="60" rows="4">
                        </textarea>

                        <input type="hidden" name="inserir_confirmacao" value="true">
                        <input type="submit" class="mt-3" value="Criar!"></button>
                    </form>
                <?php endif; ?>
            
            
            </div>
        </main>

        <footer>
            <div class="footer-end d-flex justify-content-center flex-wrap">
                <div class="col-12 col-md-6">
                <div class="col-12 title1 text-light text-center">Contactos</div>
                <div class="col-12 d-flex gap-1 justify-content-around" id="info_contacto">
                    <div class="col-12 col-md-3 d-flex flex-column align-items-center">
                        <h3 class="subtitulo text-center">Morada</h3>
                        <p>
                            Braga, Portugal.
                        </p>
                    </div>
                    <div class="col-12 col-md-3 margem-10 d-flex flex-column align-items-center">
                        <h3 class="subtitulo">Telefone</h3>
                        <p>
                            +351 927 121 725
                        </p>
                    </div>
                    <div class="col-12 col-md-3 margem-15 d-flex flex-column align-items-center">
                        <h3 class="subtitulo">Email</h3>
                        <p id="ultimo_contacto">
                            biojorge96@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex flex-column align-items-center">
                <div class="col-12 text-center">
                    <div class="title1 text-light">Siga-me nas redes sociais</div>
                </div>
                <div class="col-12 redes-sociais d-flex justify-content-center">
                    <a href="https://github.com/BioJorge"><i class='bx bxl-github'></i></a>
                    <a href="https://www.linkedin.com/in/jorge-carlos-sousa-filho-5310861a3/"><i class='bx bxl-linkedin-square'></i></a>
                </div>
            </div>

            <div class="col-12 text-center copyright">
                <p class="text-center m-0 pt-2">
                    Política de cookies.
                    <br>
                    Copyright&copy; 2023. Jorge Filho.  Todos os direitos reservados.
                </p>
            </div>
        </footer>

        <script>
            ClassicEditor
                .create( document.querySelector( '#editor1' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

        <script src="main.js"></script>
        <!-- JS do Bootstrap 5.3-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>

</html>