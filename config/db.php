<?php
    define('DB_HOST','localhost');
    define('DB_USER','review_app1');
    define('DB_PASS','123456');
    define('DB_NAME','review_app1');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die('连接失败' . $conn->connect_error);
    }
