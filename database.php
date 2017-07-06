<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=pg376';
    $username = 'pg376';
    $password = 'oOA310Yzl';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>