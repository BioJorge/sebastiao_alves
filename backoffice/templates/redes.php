
<form action="actions/redes-edit.php" class="sem_tabela d-flex flex-column align-items-center">

    <h3>facebook</h3>
    <p>
        <?=$redes_sociais["facebook"]?>
    </p>
    <hr class="border border-light w-100">

    <h3>Instagram</h3>
    <p>
        <?=$redes_sociais["instagram"]?>
    </p>
    <hr class="border border-light w-100">

    <h3>Linkedin</h3>
    <p>
        <?=$redes_sociais["linkedin"]?>
    </p>
    <hr class="border border-light w-100">

    <h3>Data de atualização</h3>
    <p>
        <?=$redes_sociais["data_atualizacao"]?>
    </p>

    <button type="submit" name="editar" value="<?=$redes_sociais["id"]?>">Editar</button>
</form>

