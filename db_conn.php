<?php

    $credentials = parse_ini_file('db_config.ini');
    $conn = new mysqli($credentials['db_host'], $credentials['db_user'], $credentials['db_password']);
    $conn-> select_db($credentials['db_name']);

?>