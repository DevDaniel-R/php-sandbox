<?php 
    //?Setting up connection to the DB. testing connection with the try catch.
    $dsn = "mysql:host=localhost;dbname=pdo";

    try {
        $pdo = new PDO($dsn, 'root', '');
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

    ?>