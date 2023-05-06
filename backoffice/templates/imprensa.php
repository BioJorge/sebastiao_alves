
<form action="actions/imprensa-edit.php" method="GET" id="formulario" class="d-flex flex-column align-items-center">
    <table>

            <tr>
                <th class="text-center">Imagem</th>
                <th class="text-center">Título</th>
                <th class="text-center">Descrição</th>
                <th class="text-center">Data de publicação</th>
                <th class="text-center">Data de atualização</th>
                <th class="text-center">Ações</th>
            </tr>

            
        <?php foreach($imprensas as $i): ?>
            <tr>
                <td class="img_imprensa">
                    <img src="<?=(strpos("$i[imagem]", "uploads") !== false) ? "$i[imagem]" : "../" . $i["imagem"]?>" alt="">
                </td>
                <td>
                    <?=$i["titulo"]?>
                </td>
                <td>
                    <?=$i["descricao"]?>
                </td>
                <td>
                    <?=$i["data_publicacao"]?>
                </td>
                <td>
                    <?=$i["data_atualizacao"]?> 
                </td>
                <td>
                    <button type="submit" class="" name="editar" value="<?=$i["id"]?>">Editar!</button>
                    <button type="submit" class="mt-2 deletar" name="deletar" value="<?=$i["id"]?>">Eliminar!</button>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

    <button type="submit" name="inserir" class="mt-3 inserir">Inserir nova notícia</button>
</form>



