<?php

    // require_once('./db.php');
    // $sql = "SELECT * FROM users";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // while($users = $stmt->fetch())
    //     print_r($users);

    
    require_once('./db.php');
    
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while($users = $stmt->fetch())
        print_r($users);

?>