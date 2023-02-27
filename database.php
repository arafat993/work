<?php
    $host_name = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'nothing';

    $db_connection = mysqli_connect($host_name, $username, $password, $db_name);

    if($db_connection){
        echo 'Database Connection Successfully';
    }
?>