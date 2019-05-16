<?php
    $bulk = new MongoDB\Driver\BulkWrite;
    
    $username = $_POST["username"];
    $email =    $_POST["email"];
    $password = $_POST["password"];

    $user = [
        '_id'      => new MongoDB\BSON\ObjectId,
        'username' => $username,
        'email'    =>  $email,
        'password' => $password
    ];

    try{
        $bulk->insert($user);
        $manager = new MongoDB\Driver\Manager("mongodb+srv://john:john123@gynacluster-frcod.mongodb.net/test?retryWrites=true");
        $result = $manager->executeBulkWrite('gyna.user',$bulk);
        echo "User Added";

    } catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered: ".$e);
    }
?>