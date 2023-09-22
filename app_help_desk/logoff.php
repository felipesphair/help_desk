<?php
    session_start();

    // unset ele retira algum dado da conta pode ser pra excluir algo que nao quer mais
    /*session_start();

    print_r($_SESSION);

    unset($_SESSION['x']);*/

    session_destroy();

    header('Location: index.php')

?>