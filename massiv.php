<?php

$arr[0] = 'продукты';
$arr[1] = 'бутылка';

echo $arr[1];

print_r($arr);

echo count($arr);

for ($i=0; $i < count($arr); $i++) { 
    # code...
    echo $arr[$i].'<br>';
}

?>