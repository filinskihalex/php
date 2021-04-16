<?php
    
    // условный оператор if 

    // $svetofor = 'mlue';
    $svetofor1 = '';

    // if ($svetofor == 'green') {
    //     echo 'можно переходить дорогу';
    // } else if ($svetofor == 'yellow') {
    //     echo 'скоро загориться желтый';
    // }
    // else {
    //     echo 'стоять красный';
    // };
    
    
    switch ($svetofor1) {
        case 'green' :
            echo 'можно переходить дорогу';
            break;
        case 'yellow' :
            echo 'скоро загориться желтьй';
            break;
        case 'red' :
            echo 'красный';
            break;
        default:
            echo 'светофор сломался';
            break;
    };

?>