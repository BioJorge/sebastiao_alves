
<!--Apresentacao-->
<div class="col-12 welcome p-3 d-flex flex-column justify-content-around align-items-center">
    <img src="../imagens_para_site/desktop/hacker-python.gif" alt="">
    <h3 class="mt-3">Bem vindo ao BACKOFFICE, <span><?=$user["nome"] . " " . $user["apelido"]?></span></h3>

    <table>
        <tr>
            <th class="text-center p-1">Lista de Acessos</th>
        </tr>
        <?php if(count($lista_acessos) <= 10):?>
            <!-- se menor que 10, faça por foreach -->
            <?php foreach($lista_acessos as $a): ?>
                <?php if($a["id_cliente"] == $user["id"]): ?>
                    <tr><td class="p-1 px-3"><?=$a["datas"]?></td></tr>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- se for maior que dez, faça apenas até dez, ordem decrescente -->
            <?php for($i = 1; $i <= 10; $i++): ?>
                <?php if($lista_acessos[$i]["id_cliente"] == $user["id"]): ?>
                    <tr><td class="p-1 px-3"><?=$lista_acessos[$i]["datas"]?></td></tr>
                <?php endif; ?>
            <?php endfor; ?>
        <?php endif; ?>

    </table>
</div>




