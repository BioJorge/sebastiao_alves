
<form action="actions/carousel-edit.php" method="GET" id="formulario" class="d-flex flex-column align-items-center">
    <table>
    
        <tr>
            <th class="text-center">Imagem_sm</th>
            <th class="text-center">Imagem_lg</th>
            <th class="text-center">Título</th>
            <th class="text-center">Categoria</th>
            <th class="text-center">Sinopse</th>
            <th class="text-center">Data de atualização</th>
            <th class="text-center">Ações</th>
        </tr>

        
            <?php foreach($lista_carousel as $lc): ?>
                <tr>
                    <td class="img_livro">
                        <img src="<?=(strpos("$lc[imagem_sm]", "uploads") !== false) ? "$lc[imagem_sm]" : "../" . $lc["imagem_sm"]?>" alt="">
                    </td>
                    <td class="img_livro">
                        <img src="<?=(strpos("$lc[imagem_lg]", "uploads") !== false) ? "$lc[imagem_lg]" : "../" . $lc["imagem_lg"]?>" alt="">
                    </td>
                    <td>
                        <?=$lc["titulo"]?>
                    </td>
                    <td>
                        <?=$lc["categoria"]?>
                    </td>
                    <td>
                        <?=$lc["sinopse"]?>
                    </td>
                    <td>
                        <?=$lc["data_atualizacao"]?>
                    </td>
                    <td>
                        <button type="submit" name="editar" value="<?=$lc["id"]?>" form="formulario" class="">Editar!</button>
                        <button type="submit" name="deletar"  value="<?=$lc["id"]?>" form="formulario" class="mt-2 deletar">Eliminar!</button>
                    </td>
                </tr>
            <?php endforeach; ?>   
    </table>
    <button type="submit" name="inserir" class="mt-4 inserir">Inserir novo objeto</button>
</form>