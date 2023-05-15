<?php
    require_once("../../controllers/requisitos.php");


    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: index.php");
        exit();
    } else{
        $user = $_SESSION["user"];
    }

    $form = isset($_GET["editar"]) || isset($_GET["deletar"]) || isset($_GET["id"]) || isset($_GET["inserir"]) || isset($_GET["inserir_confirmacao"]) || isset($_GET["deletar_confirmacao"]);

    if($form){
        
        if(isset($_GET["editar"])){
            //pegando o id pra editar e exibir o menu de edição
            $id = $_GET["editar"];
            $imprensa_em_edicao = selectSQLUnico("SELECT * FROM imprensa WHERE id='$id'");

            //confirmar deleção
        } elseif(isset($_GET["deletar"])){
            $id = $_GET["deletar"];
            $imprensa_em_delecao = selectSQLUnico("SELECT * FROM imprensa WHERE id='$id'");
        }
    } else{
        header("Location: ../backoffice-logado.php");
        exit();
    }

    //edicao
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $data = date("H:i:s - d/m/Y");
        iduSQL("UPDATE imprensa SET imagem='$_GET[imagem]', titulo='$_GET[titulo]', descricao='$_GET[descricao]', data_publicacao='$_GET[data_publicacao]', data_atualizacao='$data' WHERE id='$id'");

        header("Location: ../backoffice-logado.php");
        exit();
    }

    //inserção
    if(isset($_GET["inserir_confirmacao"])){
        $data = date("H:i:s - d/m/Y");

        iduSQL("INSERT INTO imprensa (imagem, titulo, descricao, data_publicacao, data_atualizacao) VALUES ('$_GET[imagem]','$_GET[titulo]', '$_GET[descricao]', '$_GET[data_publicacao]', '$data')");

        header("Location: ../backoffice-logado.php");
        exit();
    } 

    //delecao
    if(isset($_GET["deletar_confirmacao"])){
        iduSQL("DELETE FROM imprensa WHERE id='$_GET[deletar_confirmacao]'");
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
        <link rel="stylesheet" href="../public/backoffice-logado.css">
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
                    <form action="imprensa-edit.php" method="GET" id="formulario" class="flex-column d-flex justify-content-center align-items-center">
                        <h3 class="text-center">Imagem</h3>
                        <div>
                            <input type="text" name="imagem" value="<?=$imprensa_em_edicao["imagem"]?>" name="imagem_sm">
                            <a href="" target="popup" onclick="window.open('../../tinyfilemanager.php', 'newwindow', 'width=800, height=600'); return false;"><button>Buscar imagem</button></a>
                        </div>
                        <br>

                        <h3 class="text-center">Titulo</h3>
                        <input type="text" name="titulo" value="<?=$imprensa_em_edicao["titulo"]?>" name="imagem_lg">
                        <br>

                        <h3 class="text-center">Descricao</h3>
                        <textarea name="descricao" id="editor1" cols="30" rows="10">
                            <?=$imprensa_em_edicao["descricao"]?>
                        </textarea>
                        <br>

                        <h3 class="text-center">Data de publicacao</h3>
                        <input type="text" name="data_publicacao" value="<?=$imprensa_em_edicao["data_publicacao"]?>">
                        <br>

                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" class="mt-3" value="Editar!!"></button>
                    </form>

                <?php elseif(isset($_GET["inserir"])): ?>

                    <form action="imprensa-edit.php" method="GET" id="formulario" class="flex-column d-flex justify-content-center align-items-center">

                        <h3>Imagem</h3>
                        <div>
                            <input type="text" name="imagem" placeholder="Insira o link da imagem aqui">
                            <a href="" target="popup" onclick="window.open('../../tinyfilemanager.php', 'newwindow', 'width=800, height=600'); return false;"><button>Buscar imagem</button></a>
                        </div>
                        <br>

                        <h3>Título</h3>
                        <textarea name="titulo" id="" cols="60" rows="2" placeholder="Insira o texto aqui"></textarea>
                        
                        <h3>Descricao</h3>
                        <textarea name="descricao" id="editor1" cols="30" rows="10" placeholder="Insira o texto aqui"></textarea>

                        <h3>Data de publicação</h3>
                        <textarea name="data_publicacao" id="" cols="60" rows="2" placeholder="Insira o texto aqui"></textarea>

                        <input type="hidden" name="inserir_confirmacao" value="true">
                        <input type="submit" class="mt-3" value="Criar!"></button>
                    </form>

                <?php elseif(isset($_GET["deletar"])): ?>

                    <form action="imprensa-edit.php" method="GET" id="formulario" class="flex-column d-flex justify-content-center align-items-center">

                        <table>

                            <tr>
                                <th class="text-center">Imagem</th>
                                <th class="text-center">Título</th>
                                <th class="text-center">Descricao</th>
                                <th class="text-center">Data de publicação</th>
                            </tr>
                            <tr>
                                <td><img src="<?=(strpos("$imprensa_em_delecao[imagem]", "uploads") !== false) ? "" : "../../"?><?=$imprensa_em_delecao["imagem"]?>" alt=""></td>
                                <td><?=$imprensa_em_delecao["titulo"]?></td>
                                <td><?=$imprensa_em_delecao["descricao"]?></td>
                                <td><?=$imprensa_em_delecao["data_publicacao"]?></td>
                            </tr>
                        </table>

                            <h3>Tem certezas que desejas  eliminar esse item do carousel?</h3>

                            <input type="hidden" name="deletar_confirmacao" value="<?=$id?>">
                            <input type="submit" class="my-3" value="SIM!"></button>
                            <a href="../backoffice-logado.php" class="my-5 botoes"></a>
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
