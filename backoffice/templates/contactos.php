

<table>
    <form action="actions/contactos-edit.php" method="GET" id="formulario">
        <tr>
            <th class="text-center">Morada</th>
            <th class="text-center">E-mail</th>
            <th class="text-center">Telemovel</th>
            <th class="text-center">Data de atualização</th>
            <th class="text-center">Ações</th>
        </tr>
            
        <tr>
            <td>
                <?=$contactos["morada"]?>
            </td>
            <td>
                <?=$contactos["email"]?>
            </td>
            <td>
                <?=$contactos["telemovel"]?>
            </td>
            <td>
                <?=$contactos["data_atualizacao"]?> 
            </td>
            <td>
                <button type="submit" name="editar" value="<?=$contactos["id"]?>"form="formulario" class="">Editar!</button>
            </td>
        </tr>  
        
    </form>
</table>