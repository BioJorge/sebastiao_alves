
<form action="actions/redes-edit.php" class="d-flex flex-column justify-content-center align-items-center gap-3">
    <table>
        <tr>
            <th class="text-center text-uppercase">facebook</th>
            <th class="text-center text-uppercase">Instagram</th>
            <th class="text-center text-uppercase">Linkedin</th>
            <th class="text-center">Data de atualização</th>
        </tr>
        <tr>
            <td><?=$redes_sociais["facebook"]?></td>
            <td><?=$redes_sociais["instagram"]?></td>
            <td><?=$redes_sociais["linkedin"]?></td>
            <td><?=$redes_sociais["data_atualizacao"]?></td>
        </tr>

    </table>

    <button type="submit" name="editar" value="<?=$redes_sociais["id"]?>">Editar</button>
</form>

