<?php

    session_id('kqf8jj6vtq38q2mmomve5ljptm');

    require_once('config.php');

    session_regenerate_id();

    echo session_id();

    echo '<hr>';

    var_dump($_SESSION)

?>