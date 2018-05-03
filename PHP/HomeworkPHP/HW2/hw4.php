<?php
//4. Отсортировать массив по 'price'
$arr = [
'1'=> [
'price' => 10,
'count' => 2
],
'2'=> [
'price' => 5,
'count' => 5
],
'3'=> [
'price' => 8,
'count' => 5
],
'4'=> [
'price' => 12,
'count' => 4
],
'5'=> [
'price' => 8,
'count' => 4
],
];
$sort = array(); 
foreach($arr as $key => $row)
    $sort[$key] = $row['price'];

array_multisort($sort, SORT_ASC, $arr);

echo '<pre>', print_r($arr, true), '</pre>';
?>
