
<?php
    require_once("../../controllers/requisitos.php");

    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: index.php");
        exit();
    } else{
        $user = $_SESSION["user"];
    }

    $form = isset($_GET["editar"]) || isset($_GET["id"]);
    if($form){
        if(isset($_GET["editar"])){
            $id = $_GET["editar"];
            $contactos_edicao = selectSQLUnico("SELECT * FROM contactos WHERE id='$id'");
        } 
    } else{
        header("Location: ../backoffice-logado.php");
        exit();
    }
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $data = date("H:i:s - d/m/Y");

        iduSQL("UPDATE contactos SET morada='$_GET[morada]', email='$_GET[email]', telemovel='$_GET[telemovel]', horario='$_GET[horario]', data_atualizacao='$data' WHERE id='$id'");

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
            <div class="container opcoes_edicao flex-column d-flex justify-content-center align-items-center mt-3">
                <form action="" method="GET" id="formulario" class="d-flex flex-column align-items-center">

                    <h3 class="text-center">Morada</h3>
                    <input type="text" name="morada" value="<?=$contactos_edicao["morada"]?>">
                    <br>
                    <h3 class="text-center">E-mail</h3>
                    <input type="text" name="email" value="<?=$contactos_edicao["email"]?>">
                    <br>
                    <h3 class="text-center">Telemóvel</h3>
                    <input type="text" name="telemovel" value="<?=$contactos_edicao["telemovel"]?>">
                    <br>
                    <h3 class="text-center">Horário</h3>
                    <input type="text" name="horario" value="<?=$contactos_edicao["horario"]?>">
    
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" class="mt-3" value="Editar!!"></button>
                </form> 
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

        <script src="main.js"></script>
        <!-- JS do Bootstrap 5.3-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>

</html>