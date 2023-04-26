

<form action="actions/home-edit.php" method="GET" id="formulario" class="sem_tabela d-flex flex-column align-items-center">
    
        <h3 class="text-center">Título da caixa de introdução</h3>
        <p class="text-center">
            <?=$home["caixa_titulo"]?>
        </p>

        <h3 class="text-center">Parágrafo da caixa de introdução</h3>
        <p class="text-justify">
            <?=$home["caixa_paragrafo"]?>
        </p>

        <h3 class="text-center">Parágrafo da caixa dos últimos livros</h3>
        <p>
        <?=$home["ultimos_livros_paragrafo"]?>
        </p>

        <h3 class="text-center">Data de atualização</h3>
        <p class="text-center">
            <?=$home["data_atualizacao"]?> 
        </p>

        <button type="submit" name="editar" value="<?=$home["id"]?>" class="">Editar!</button>

</form>
