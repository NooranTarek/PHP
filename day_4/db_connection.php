
<?php

require_once 'db_info.php';

function dbConnection(){
    try {
        $dsn= "mysql:host=localhost;dbname=users;port=3306";
        $pdo=  new PDO($dsn, DB_USER, DB_PASSWORD);
        return $pdo;
    }
    catch (Exception $errMsg) {
        echo "<h3 style='color:red'>{$errMsg->getMessage()}</h3>";
        return false;
    }
}

dbConnection();