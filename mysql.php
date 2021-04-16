<?php
    
    // $mysqli = new mysqli('localhost','root','master','kinomonstr');
    // if(mysqli_connect_errno()){
    //     printf('Соединение не установленно', mysqli_connect_error());
    //     exit();
    // }
    // $host = 'host = localhost';
    // $user = 'user = postgres';
    // $dbname = 'dbname = kinomonstr';
    // $port = 'port = 5432';
    // $pwd = 'password = master';
    // $con_string = 'host= localhost, port=5432, dbname=kinomonstr, user=postgres, password=master';
    $dbconnect = pg_connect('127.0.0.1', '5432', 'Erek' );

    if (!$dbconnect) {
        echo 'соединение не установленно';
    } 

    $result = pg_query($dbconnect,'SELECT * FROM actor' );
    if (!$result) {
        echo 'произошла ошибка';
    }
    
        // echo $result['first_name']
    while ($row = pg_fetch_assoc($result)) {
        $last_name = $row['first_name'];
        echo $row['first_name']."<span>--</span>".$row['last_name'].$row['age']."<br/>";
        Echo $last_name."<br/>";
     }
    $table_name = 'movie';
    $arrayName = array('1' =>"5" ,'2'=>'Зеленая миля', '3'=>"2005",'4'=>"3",'1'=>"1" );
    
     $quere = pg_insert($dbconnect,$table_name,$arrayName );
     if ($quere) {
         echo 'Данные вставлены';
     }
     echo $arrayName;
    // phpinfo();
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Имя Актера <?php echo $last_name  ?>
</body>
</html>