<?php
    include ('setting.php'); //файл настроек
    
      // Запрос к базе данных 
    $result = pg_query($dbconnect, 'SELECT * FROM vw_switch'); 
    if (!$result) {
        echo 'произошла ошибка';
    }

    // Проходим циклом по result  вытаскиваем данные из каждой строки запроса
    // print_r($result);
    while ($row = pg_fetch_assoc($result)) {
        $name = $row['switch_name'];
        $location = $row['location'];
        $ip = $row['ip'];
        $model = $row['model'];
        // echo $row['first_name']."<span>--</span>".$row['last_name'].$row['age']."<br/>"; -->
        Echo 'имя'."<br>".$name, $location,$ip,$model."<br/>";
    }

    // pg_close($dbconnect); // закрываем соединение с базой после прохода цикла 

    $row = pg_fetch_assoc($result);
    foreach ($row as $key => $value) {
        echo $key,$value.'</br>' ;
        # code...
    }


    $result = pg_query($dbconnect, 'SELECT * FROM vw_switch_port'); 
    if (!$result) {
        echo 'произошла ошибка';
    }
    
    $row = pg_fetch_assoc($result);
    foreach ($row as $key => $value) {
        echo $key,$value.'</br>' ;
        # code...
    }

    pg_close($dbconnect);
    
    // $table_name = 'switch';
    // $arrayName = array('location_id' =>"1" ,'name'=>"Зеленая миля", 'ip_id'=>"5",'SN'=>"PM42006422",'hardware_id'=>"1",'add_date' => "now()" );
    
    //  $quere = pg_insert($dbconnect,$table_name,$arrayName );
    //  if ($quere) {
    //      echo 'Данные вставлены';
    //  }
    //  echo $arrayName;
    // phpinfo();

    // $i = 1;

    // while($i  <= 254) {
    //     echo $i.'<br>';
    //     $i + $i++;


    // }

    // $query = "delete from switch where ip_id = 5;";
    // $query .= "delete from ip where ip_id = 5;";
      

    // $query .= "insert into ip values(5,'192.168.2.5',24);"; 
    // $query .= "insert into switch (location_id,name,ip_id,SN,hardware_id,add_date) values  (1,'th1sds.core1.sc',5,'PM42002222',1,now() );";
    
    // $insert = pg_query($dbconnect,$query); 
    //     if ($query) {
    //         echo 'Данные вставлены';
    //     }
    //     pg_close($dbconnect);

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
               
            </p>    

            <p></p>
        </body>
    </html>