<?php

    require_once('config.php');

    var_dump(session_save_path());
    echo '<hr>';

    var_dump(session_status());
    echo '<hr>';

    switch (session_status()) {
        case 0:
            echo 'PHP_SESSION_DISABLED';
            break;
        case 1:
            echo 'PHP_SESSION_NONE';
            break;
        case 2:
            echo 'PHP_SESSION_ACTIVE';
            break;
        default:
            echo 'Sem informações sobre a sessão.';
            break;
    }

?>