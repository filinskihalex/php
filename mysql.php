<?php
    
    
    $host = '176.53.162.84';
    $user = '';
    $dbname = 'test';
    $port = '5432';
    $pwd = '';
    $dbconnect = pg_connect ("host = $host port=$port dbname=$dbname user=$user password=$pwd ");

    if (!$dbconnect) {
        echo 'соединение не установленно';
    } 
    $result = pg_query($dbconnect, 'SELECT * FROM vw_switch'); 
    if (!$result) {
        echo 'произошла ошибка';
    }
    
    while ($row = pg_fetch_assoc($result)) {
        $name = $row['name'];
        $location = $row['location'];
        $ip = $row['ip'];
        $mask = $row['mask'];
         // echo $row['first_name']."<span>--</span>".$row['last_name'].$row['age']."<br/>"; -->
        Echo $name, $location,$ip,$mask."<br/>";
     }
    // $table_name = 'movie';
    // $arrayName = array('1' =>"5" ,'2'=>'Зеленая миля', '3'=>"2005",'4'=>"3",'1'=>"1" );
    
    //  $quere = pg_insert($dbconnect,$table_name,$arrayName );
    //  if ($quere) {
    //      echo 'Данные вставлены';
    //  }
    //  echo $arrayName;
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
            <p>
                имя коммутатора <?php echo $name  ?>  размещение <?php echo $location?>
            </p>
            <p>
                год <?php while ($row = pg_fetch_assoc($result)) {
                $name = $row['name'];
                $location = $row['location'];
                $ip = $row['ip'];
                $mask = $row['mask'];
                // echo $row['first_name']."<span>--</span>".$row['last_name'].$row['age']."<br/>"; -->
                Echo $name, $location,$ip,$mask."<br/>";
            }  ?>
            </p>    

            <p></p>
        </body>
    </html>