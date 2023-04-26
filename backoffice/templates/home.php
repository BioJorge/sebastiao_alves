

<table>
    <form action="actions/home-edit.php" method="GET" id="formulario">
        <tr>
            <th class="text-center">Título da caixa de introdução</th>
            <th class="text-center">Parágrafo da caixa de introdução</th>
            <th class="text-center">Parágrafo da caixa dos últimos livros</th>
            <th class="text-center">Data de atualização</th>
            <th class="text-center">Ações</th>
        </tr>

        
        <tr>
            <td>
                <?=$home["caixa_titulo"]?>
            </td>
            <td>
                <?=$home["caixa_paragrafo"]?>
            </td>
            <td>
            <?=$home["ultimos_livros_paragrafo"]?>
            </td>
            <td>
                <?=$home["data_atualizacao"]?> 
            </td>
            <td>
                <button type="submit" name="editar" value="<?=$home["id"]?>" class="">Editar!</button>
            </td>
        </tr>
        
    </form>
</table>