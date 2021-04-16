<?php
    // $arr = ('фильм'=>'Охотник за головами' );

    $arr = ['Матрица' , 'Побег', 'властелин колец'];

    // Удаление элемента из массива
    // unset($arr[0]); 
    // Вставка элемента в конец массива
    array_push($arr, 'Монстры'); 
    //  Вставка элемента в начало массива
    array_unshift($arr, 'Король лев'); 
    array_push($arr, 'Побег' );

    $arr = array_unique($arr);
    sort($arr);

    foreach ($arr as $key => $value) {
        echo $value.'<br>';
        # code...
    };




?>