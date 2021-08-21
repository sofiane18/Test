<?php 
//To Connect To Database
    $host = 'localhost';
    $dbname = 'test';
    $mysql_username = 'root';
    $mysql_password = '';

//DSN: Data Source Name
    $dsn='mysql:host='.$host.';dbname='.$dbname;

//Create a PDO instant
    $pdo = new PDO($dsn,$mysql_username,$mysql_password);
//If Theres Any Errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Getting Data From Form
     $name = $_POST['name'];


//Connect To Database


//Inserting Data Into Database
    //SQL Query-Request
    $sql = 'INSERT INTO test (name) VALUES (:name)'; 

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name]);

?>