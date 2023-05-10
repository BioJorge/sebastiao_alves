<?php

    $autor = selectSQLUnico("SELECT * FROM autor ORDER BY id ASC");
    $lista_carousel = selectSQL("SELECT * FROM carousel ORDER BY id ASC");
    $lista_livros = selectSQL("SELECT * FROM livros ORDER BY id ASC");
    $redes_sociais = selectSQLUnico("SELECT * FROM redes_sociais ORDER BY id ASC");
    $navegacao = selectSQL("SELECT * FROM navegacao ORDER BY id ASC");
    $contactos = selectSQLUnico("SELECT * FROM contactos ORDER BY id ASC");
    $home = selectSQLUnico("SELECT * FROM home ORDER BY id ASC");
    $destaques = selectSQL("SELECT * FROM destaques ORDER BY id ASC");
    $imprensas = selectSQL("SELECT * FROM imprensa ORDER BY id ASC");
    $lista_acessos = selectSQL("SELECT * FROM acessos ORDER BY id ASC");

    $user;

?>