<?php
    require_once("../controllers/requisitos.php");

    $form = isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"]);

    if($form){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha_digitada = $_POST["senha"];
        $senha_criptografada = password_hash($senha_digitada, PASSWORD_DEFAULT);

        iduSQL("INSERT INTO colaboradores (nome, email, senha) VALUES ('$nome', '$email', '$senha_criptografada')");

        header("Location: backoffice.php");
        exit();
    }

?>



<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
       <!--Boxicons-->
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
       <link rel="stylesheet" href="style/backoffice.css">
    </head>

    <body>

        <main>
            <div class="container">
                <div class="content">
                    <h2 class="logo"><i class='bx bxl-visual-studio'></i>Codemaster</h2>

                    <div class="text-sci">
                        <h2>Welcome!<br><span>Subscription page</span></h2>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate corporis 
                            beatae fugiat reprehenderit molestiae. Accusamus distinctio a aut vero magnam 
                            ipsam fugiat, corporis, non magni vitae quasi quisquam porro ducimus?
                        </p>

                        <div class="social-media">
                            <a href="https://github.com/BioJorge"><i class='bx bxl-github'></i></a>
                            <a href="https://www.linkedin.com/in/jorge-carlos-sousa-filho-5310861a3/"><i class='bx bxl-linkedin-square'></i></a>
                        </div>
                    </div>
                </div>

                <div class="logreg-box">
                    <div class="form-box login">
                        <form action="" class="formulario" method="POST">
                            <h2>Sign Up</h2>

                            <div class="input-box">
                                <span class="icon"><i class='bx bxs-user'></i></span>
                                <input type="text" required id="nome" name="nome" required>
                                <label for="name" class="label-helper">Name</label>
                            </div>           
                            
                            <div class="input-box">
                                <span class="icon"><i class='bx bxs-envelope'></i></span>
                                <input type="email" name="email" required id="email">
                                <label for="email" class="label-helper">E-mail</label>
                            </div>
                                                
                            <div class="input-box">
                                <span class="icon"><i class='bx bxs-lock-alt'></i></span> 
                                <input type="password" name="senha" id="senha" required onfocusin="(this.type='text')" onfocusout="(this.type='password')">
                                <label for="password" class="label-helper" required>Password</label>
                            </div>
                            
                            <div class="remember-forgot">
                                <label for=""><input type="checkbox">I agree to the terms and conditions</label>
                            </div>
                          
                            <button type="submit" class="btn">Sign Up</button>
    
                            <div class="login-register">
                                <p>Already have an account? <a href="http://localhost/sebastiao_alves/backoffice.php">Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>


        

        <script src="main.js"></script>
    </body>

</html>