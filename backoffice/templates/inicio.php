<?php
    if($_SESSION["user"]["admin"]){
        $acessos = $lista_acessos;
    } else{
        $acessos = getTodosAcessosByID($user["id"]);
    }

    // $elementos_por_pagina = 10;
    // $qtd_acessos = count($acessos);
    // $elementos_da_pagina = selectSQL("SELECT datas FROM colaboradores WHERE id=$user[id] ORDER BY id DESC LIMIT 10");
?>


<!--Apresentacao-->
<div class="col-12 welcome p-3 d-flex flex-column justify-content-around align-items-center">
    <img src="../imagens_para_site/desktop/hacker-python.gif" alt="">
    <h3 class="mt-3">Bem vindo ao BACKOFFICE, <span><?=$user["nome"] . " " . $user["apelido"]?></span></h3>

    <h3 class="text-center p-1">Lista de Acessos</h3>
    <h5>Seu último acesso foi: <?=getUltimoAcesso($user["id"])?></h5>
    
    <table>
        <?php if(count($acessos) <= 10):?>
            <!-- se menor que 10, faça por foreach -->
            <?php foreach($acessos as $chave => $a): ?>

                <tr>
                    <td>
                        <?=getColabNameByID($acessos[$chave]["id_usuario"])?>
                    </td>
                    <td class="p-1 px-3">
                        <?=$acessos[$chave]["datas"]?>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            <!-- se for maior que dez, faça apenas até dez, ordem decrescente -->
            <?php for($i = 0; $i < 10; $i++): ?>

                <tr>
                    <td>
                        <?=getColabNameByID($acessos[$i]["id_usuario"])?>
                    </td>
                    <td class="p-1 px-3"><?=(count($acessos))-$i . " - (" . $acessos[$i]["datas"] . ")"?></td>
                </tr>
  
            <?php endfor; ?>
        <?php endif; ?>
    </table>
</div>




