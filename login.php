<?php 
    if(isset($_POST['submit'])){
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
        $email_user = $_POST['email_user'];
        $password_user = $_POST['password_user'];

        $sql = 'SELECT email_user, password_user FROM users WHERE email_user=:email_user and password_user=:password_user';

        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email_user' => $email_user, 'password_user' => $password_user]);

        $count = $stmt->rowCount();

        if($count==1){

        }else{
            header('LOCATION: loginPage.php');
        }

    }

?>