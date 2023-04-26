


<form action="actions/contactos-edit.php" method="GET" id="formulario" class="sem_tabela d-flex flex-column align-items-center">

    <h3 class="text-center">Morada</h3>
    <p>
        <?=$contactos["morada"]?>
    </p>

    <h3 class="text-center">E-mail</h3>
    <p>
        <?=$contactos["email"]?>
    </p>

    <h3 class="text-center">Telemovel</h3>
    <p>
        <?=$contactos["telemovel"]?>
    </p>

    <h3 class="text-center">Data de atualização</h3>
    <p>
        <?=$contactos["data_atualizacao"]?> 
    </p>   

    <button type="submit" name="editar" value="<?=$contactos["id"]?>"form="formulario" class="">Editar!</button>


</form>
