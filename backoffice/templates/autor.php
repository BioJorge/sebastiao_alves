

<form action="actions/autor-edit.php" method="GET" id="formulario" class="sem_tabela d-flex flex-column align-items-center">

        <h3 class="text-center">Imagem</h3>
        <img src="<?=$autor["imagem"]?>" alt="">


        <h3 class="text-center">Texto</h3>
        <p>
            <?=$autor["sobre_autor"]?>
        </p>

        <h3 class="text-center">Data de atualização</h3>
        <p>
            <?=$autor["data_atualizacao"]?> 
        </p>

        <h3 class="text-center">Ações</h3>           
    
        <button type="submit" name="editar" value="<?=$autor["id"]?>" form="formulario" class="">Editar!</button>
</form>


