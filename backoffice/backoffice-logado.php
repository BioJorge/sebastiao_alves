<?php
    require_once("../controllers/requisitos.php");


    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: backoffice.php");
        exit();
    } else{
        $user = $_SESSION["user"];
        if(isset($_GET["opcao"])){
            $opcao = intval($_GET["opcao"]);
        } else{
            $opcao = 1;
        }
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
        <link rel="stylesheet" href="public/backoffice-logado.css">
    </head>

    <body>

        <header class="d-flex align-content-center flex-column">
            <h3 class="text-center text-white mt-3 w-100 <?=(isset($_GET["opcao"])) ? "d-none" : "" ?>">Qual página ou conteúdo desejas editar?</h3>
            
            <form action="backoffice-logado.php" method="get" class="container d-flex justify-content-around align-items-center gap-2 my-4 flex-wrap">

                <button name="opcao" value="1" class="<?=($opcao == 1) ? "selecionado" : "" ?>">Início</button>
                <button name="opcao" value="2" class="<?=($opcao == 2) ? "selecionado" : "" ?>">Carousel</button>
                <button name="opcao" value="3" class="<?=($opcao == 3) ? "selecionado" : "" ?>">Home</button>
                <button name="opcao" value="4" class="<?=($opcao == 4) ? "selecionado" : "" ?>">Autor</button>
                <button name="opcao" value="5" class="<?=($opcao == 5) ? "selecionado" : "" ?>">Livros</button>
                <button name="opcao" value="6" class="<?=($opcao == 6) ? "selecionado" : "" ?>">Destaques da Home</button>
                <button name="opcao" value="7" class="<?=($opcao == 7) ? "selecionado" : "" ?>">Imprensa</button>
                <button name="opcao" value="8" class="<?=($opcao == 8) ? "selecionado" : "" ?>">Contactos</button>
                <button name="opcao" value="9" class="<?=($opcao == 9) ? "selecionado" : "" ?>">Redes</button>
                <button name="opcao" value="10" class="<?=($opcao == 10) ? "selecionado" : "" ?>">Configurações</button>
                <button name="opcao" value="11" class="<?=($opcao == 11) ? "selecionado" : "" ?>">Logoff</button>
            
            </form>
            
            <!-- <a href="logoff.php"><button>Logoff</button></a> -->
        </header>

        <main class="container-fluid p-0 d-flex flex-column align-items-center justify-content-center gap-3 my-5 px-5">
                <?php switch($opcao){
                    case 1:
                        require_once("templates/inicio.php"); break;
                    case 2:
                        require_once("templates/carousel.php"); break;
                    case 3:
                        require_once("templates/home.php"); break;
                    case 4:
                        require_once("templates/autor.php"); break;
                    case 5:
                        require_once("templates/livros.php"); break;
                    case 6:
                        require_once("templates/destaques.php"); break;
                    case 7:
                        require_once("templates/imprensa.php"); break;
                    case 8:
                        require_once("templates/contactos.php"); break;
                    case 9:
                        require_once("templates/redes.php"); break;
                    case 10:
                        require_once("templates/configuracoes.php"); break;
                    case 11:
                        require_once("logoff.php"); break;
                    default:  
                        header("backoffice-edicao.php"); exit();
                    } 
                ?>


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
            <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                <div class="col-12 text-center">
                    <div class="title1 text-light">Siga-me nas redes sociais</div>
                </div>
                <div class="col-12 redes-sociais d-flex justify-content-center">
                    <a href="https://github.com/BioJorge"><i class='bx bxl-github'></i></a>
                    <a href="https://www.linkedin.com/in/jorge-carlos-sousa-filho-5310861a3/"><i class='bx bxl-linkedin-square'></i></a>
                </div>
            </div>

            <div class="col-12 text-center copyright d-flex align-items-center">
                <p class="text-center m-0 pt-2 col-6">
                    Política de cookies.
                    <br>
                    Copyright&copy; 2023. Jorge Filho.  Todos os direitos reservados.
                </p>
                <div class="patrocinio d-flex justify-content-center align-items-center gap-3 col-6 mt-2">
                    <span class=" d-none d-md-block">Powered by CodeMaster:</span>
                    <img src="../public/imagens/incode.png" alt="">
                </div>
            </div>
        </footer>

        <script src="main.js"></script>
        <!-- JS do Bootstrap 5.3-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>

</html>