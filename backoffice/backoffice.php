<?php
    require_once("../php/config.php");
    require_once("../php/base_dados.php");
    require_once("../php/funcoes.php");
    require_once("../php/globais.php");
?>


<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BackOffice</title>
         <!--Boxicons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!--CSS proprio-->
        <link rel="stylesheet" href="style/backoffice.css">
    </head>

    <body>

    <main>
            <div class="container">
                <div class="content">
                    <h2 class="logo"><i class='bx bxl-visual-studio'></i>Codemaster</h2>

                    <div class="text-sci">
                        <h2>Bem Vindo!<br><span>BackOffice do site Sebastião Alves</span></h2>

                        <p>
                            Faça login para poder adicionar, editar ou deletar conteúdos do site de forma completamente responsiva através de nossa base de dados MyPHP. <span style="color: #B47D33; font-size: 18px; text-shadow: 0.5px 0.5px black;">Aproveite para seguir-me nas minhas redes socais. Links abaixo!!</span>
                        </p>

                        <div class="social-media">
                            <a href="https://github.com/BioJorge"><i class='bx bxl-github'></i></a>
                            <a href="https://www.linkedin.com/in/jorge-carlos-sousa-filho-5310861a3/"><i class='bx bxl-linkedin-square'></i></a>
                        </div>
                    </div>
                </div>

                <div class="logreg-box">
                    <div class="form-box login">
                        <form action="login.php" method="POST" class="formulario">
                            <h2>Sign In</h2>

                            <?php if(!empty($_GET["credenciais"])):?>
                                <h1 style="color: #B47D33;">Credencais de acesso inválidas</h1>
                            <?php endif; ?>
                                       
                            <div class="input-box">
                                <span class="icon"><i class='bx bxs-envelope'></i></span>
                                <input type="email" name="email" required id="email">
                                <label for="email" class="label-helper">E-mail</label>
                            </div>
                                                
                            <div class="input-box">
                                <span class="icon"><i class='bx bxs-lock-alt' id="cadeado"></i></span> 
                                <input type="password" name="senha" id="senha" required onfocusin="(this.type='text')" onfocusout="(this.type='password')">
                                <label for="password" class="label-helper" required>Senha</label>
                            </div>
                            
                            <div class="remember-forgot">
                                <label for=""><input type="checkbox">Lembre de min</label>
                                <a href="">Esqueceste a senha?</a>
                            </div>

                            <div class="login-register">
                                <p>Don't have an account? <a href="sign_up.php">Sign up</a></p>
                            </div>
                          
                            <button type="submit" class="btn">Submeter</button>
    
                        </form>
                    </div>
                </div>
            </div>

        </main>

        <script src="main.js"></script>
    </body>

</html>