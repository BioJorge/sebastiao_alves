
<?php
    require_once("../php/config.php");
    require_once("../php/base_dados.php");
    require_once("../php/funcoes.php");
    require_once("../php/globais.php");

?>


<div class="container-fluid opcoes_edicao flex-column d-flex justify-content-center align-items-center mt-3">
    <form action="actions/configuracoes-edit.php" method="GET" id="formulario" class="senhas d-flex flex-column align-items-center justify-content-center">
        <?php if(isset($_GET["incongruencias"])): ?>
            <h3 style="color:#B47D33;">Nova senha e senha de confirmação não são iguais</h3>
        <?php elseif(isset($_GET["troca"])): ?>
            <h3 class="text-success">Senha trocada com sucesso!</h3>
        <?php elseif(isset($_GET["credenciais"])): ?>
            <h3 class="text-danger">Senha incorreta</h3>
        <?php endif;?>
        

        <h3>Senha atual</h3>
        <input type="password" name="senha_digitada" id="senha">

        <h3>Nova senha</h3>
        <input type="text" name="nova_senha">

        <h3>Confirmar nova senha</h3>
        <input type="text" name="senha_confirmacao">

        <input type="hidden" name="id" value="<?=$user["id"]?>">
        <input type="submit" class="mt-3" value="Submeter!"></button>
    </form> 
</div>


