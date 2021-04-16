<?php
    echo 'привет';

    $name = 'Alex';
    $familia = 'text';
    $balance1 = 14;
    $balace2 = 22;
    $svetofor = "green";

    $bal2 = $balance1 + $balace2;
    echo $bal2;

    // Константы

    define("DBNAME", "luxrazbor");

    // echo '$name',

    // $old = $name + $familia;

    // if (DBNAME == luxrazbor) {
    //     echo 'люкс'
    // };
    // if($svetofor == "red") {
    //     echo " я перехожу дорогу";
    // } else {
    //     echo " жду когда загориться зеленый";
    // }

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
    <div>
        <?php  echo $bal2; ?>
    
    </div>
    <div>
        <?php  echo DBNAME; ?>
    
    </div>
</body>
</html>
