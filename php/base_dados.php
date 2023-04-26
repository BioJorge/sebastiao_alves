<?php
//criou a global que é a base de dados
    $pdo = new PDO("mysql:dbname=".$base_dados["dbname"].";host=".$base_dados["host"], $base_dados["user"], $base_dados["password"]);
?>