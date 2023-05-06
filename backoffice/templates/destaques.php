<form action="actions/destaques-edit.php" method="GET" id="formulario" class="d-flex flex-column align-items-center">
    <table>
            <tr>
                <th class="text-center">Imagem das Cartas [Home]</th>
                <th class="text-center">Título</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Sinopse da Carta</th>
                <th class="text-center">Ações</th>
            </tr>

            
        <?php foreach($destaques as $d): ?>
            <tr>
                <td class="img_livro">
                    <img src="<?="../" . getLivroById($d["id_livro"])["imagem_cartas"]?>" alt="">
                </td>
                <td>
                    <?=getLivroById($d["id_livro"])["titulo"]?>
                </td>
                <td>
                    <?=getLivroById($d["id_livro"])["categoria"]?>
                </td>
                <td>
                    <?=limit_text(strip_tags(getLivroById($d["id_livro"])["descricao"]), 30)?>
                </td>
                <td>
                    <button type="submit" name="editar" value="<?=$d["id"]?>" class="">Editar!</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</form>