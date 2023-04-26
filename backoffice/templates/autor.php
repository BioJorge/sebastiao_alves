

<table>
    <form action="actions/autor-edit.php" method="GET" id="formulario">
        <tr>
            <th class="text-center">Imagem</th>
            <th class="text-center">Texto</th>
            <th class="text-center">Data de atualização</th>
            <th class="text-center">Ações</th>
        </tr>

        <tr>
            <td class="img_autor">
                <img src="<?=$autor["imagem"]?>" alt="">
            </td>
            <td>
                <?=$autor["sobre_autor"]?>
            </td>
            <td>
                <?=$autor["data_atualizacao"]?> 
            </td>
            <td>
                <button type="submit" name="editar" value="<?=$autor["id"]?>" form="formulario" class="">Editar!</button>
            </td>
        </tr>
    </form>
</table>

