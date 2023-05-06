<form action="actions/livros-edit.php" method="GET" id="formulario" class="d-flex flex-column align-items-center">
    <table>
            <tr>
                <th class="text-center">Imagem das Cartas [Home]</th>
                <th class="text-center">Imagem dos livros [Página do livro]</th>
                <th class="text-center">Título</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Descrição</th>
                <th class="text-center">Data de atualização</th>
                <th class="text-center">Ações</th>
            </tr>

            
        <?php foreach($lista_livros as $lc): ?>
            <tr>
                <td class="img_livro">
                    <img src="<?=(strpos("$lc[imagem_cartas]", "uploads") !== false) ? "$lc[imagem_cartas]" : "../" . $lc["imagem_cartas"]?>" alt="">
                </td>
                <td class="img_livro">
                    <img src="<?=(strpos("$lc[imagem_livros]", "uploads") !== false) ? "$lc[imagem_livros]" : "../" . $lc["imagem_livros"]?>" alt="">
                </td>
                <td>
                    <?=$lc["titulo"]?>
                </td>
                <td>
                    <?=$lc["categoria"]?>
                </td>
                <td>
                    <?=$lc["descricao"]?>
                </td>
                <td>
                    <?=$lc["data_atualizacao"]?> 
                </td>
 
                <td>
                    <button type="submit" name="editar" value="<?=$lc["id"]?>" class="">Editar!</button>
                    <button type="submit" name="deletar" value="<?=$lc["id"]?>" class="mt-2 deletar">Eliminar!</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <button type="submit" name="inserir" class="mt-3 inserir">Inserir novo livro</button>
</form>
