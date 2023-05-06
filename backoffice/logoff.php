<?php
    session_start();
    session_destroy();

    header("Location: http://localhost/sebastiao_alves/backoffice.php");
?>