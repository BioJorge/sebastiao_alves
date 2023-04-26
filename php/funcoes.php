<?php
    date_default_timezone_set("Europe/Lisbon");

    function verifyLogin($login, $senha){
        return selectSQLUnico("SELECT * FROM colaboradores WHERE email='$login' AND senha='$senha'");
    }

    function logar_criptografia($email, $senha_digitada){
        $usuario = selectSQLUnico("SELECT * FROM colaboradores WHERE email='$email'");
            //achou usuario?
        if(!empty($usuario)){
            //se sim, verificar se o que está salvo no bd podertia ser criado via a senha que o ussuario digitaste no input
            if(password_verify($senha_digitada, $usuario["senha"])){
                return $usuario;
            } else{
                return null;
            }
        } else{
            return null;
        }
    }



    //funcao generica que retorna qualquer tabela que usastes como parametro
    function selectSQL($sql){
        global $pdo;
        $query = $pdo->query($sql);
        //fetch all ira retirnar encapsulado em um array todos os achados do FetchAll
        return $query->fetchAll(PDO::FETCH_ASSOC);
        // [
        //     [],
        //     [],     ele encapasula assim
        //     [],
        //     [],
        // ]
        // se fores encapsular apenas um elemento ficará assim:
        // [
        //     []     resultando em uma matrix com só uma linha [0][], uma tosquice.
        // ]
    }

    function selectSQL_num($sql){
        global $pdo;
        $query = $pdo->query($sql);
        //fetch all ira retirnar encapsulado em um array todos os achados do FetchAll
        return $query->fetchAll(PDO::FETCH_NUM);
        // [
        //     [],
        //     [],     ele encapasula assim
        //     [],
        //     [],
        // ]
        // se fores encapsular apenas um elemento ficará assim:
        // [
        //     []     resultando em uma matrix com só uma linha [0][], uma tosquice.
        // ]
    }

    function selectSQLUnico($sql){
        global $pdo;
        $query = $pdo->query($sql);
        //cuidado: fetch retorna aponas um resultado, o primeiro que encontraste
        return $query->fetch(PDO::FETCH_ASSOC);
        // encapsulas dessa forma um vetor[], e n uma matrix [0][] com uma so linha
    }

    function selectSQLUnico_num($sql){
        global $pdo;
        $query = $pdo->query($sql);
        //cuidado: fetch retorna aponas um resultado, o primeiro que encontraste
        return $query->fetch(PDO::FETCH_NUM);
        // encapsulas dessa forma um vetor[], e n uma matrix [0][] com uma so linha
    }

    function iduSQL($sql){
        global $pdo;
        $query = $pdo->query($sql);
    }

    function getClienteById($id){
        $cliente = selectSQLUnico("SELECT * FROM colaboradores WHERE id='$id'");
        return $cliente;
    }

    function getColabNameByID($id_usuario){
        return selectSQLUnico("SELECT nome FROM colaboradores WHERE id='$id_usuario'")["nome"];
    }
    function novoAcesso($id_usuario){
        $data_atual = date("H:i:s - d/m/Y");
        iduSQL("INSERT INTO acessos (id_usuario, datas) VALUES ('$id_usuario', '$data_atual')");
    }

    function getTodosAcessosByID($id_usuario){
        return selectSQL("SELECT * FROM acessos WHERE id_usuario='$id_usuario' ORDER BY id DESC");
    }

    function getUltimoAcesso($id_usuario){
        $ultimo =  selectSQLUnico("SELECT * FROM acessos WHERE id_usuario='$id_usuario' ORDER BY id DESC LIMIT 2 OFFSET 1");
        return (!empty($ultimo) ? "$ultimo[datas]" : "---");
    }

    function getLivroById($id_livro){
        $livro = selectSQLUnico("SELECT * from livros WHERE id='$id_livro'");
        return $livro;
    }





    

?>