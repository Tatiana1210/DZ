<?php
// 5. Дан массив $fruits.
// Каждому вложенному массиву добавить count - количество элементов в массиве (элементы с одинаковым name)
// Удалить дублирующиеся элементы
$fruits = [
[
"name"=> "apple",
"color"=> "red",
],
[
"name"=> "orange",
"color"=> "orange",
],
[
"name"=> "lemon",
"color"=> "yellow",
],
[
"name"=> "apple",
"color"=> "green",
],
[
"name"=> "plum",
"color"=> "violet",
],
[
"name"=> "plum",
"color"=> "violet",
],
[
"name"=> "apple",
"color"=> "red",
],
[
"name"=> "lemon",
"color"=> "yellow",
],
[
"name"=> "banana",
"color"=> "yellow",
]
];
$fruits[0]=$fruits[0]+['count'=>'2'];
$fruits[1]=$fruits[1]+['count'=>'2'];
$fruits[2]=$fruits[2]+['count'=>'2'];
$fruits[3]=$fruits[4]+['count'=>'2'];
$fruits[5]=$fruits[6]+['count'=>'2'];
$fruits[7]=$fruits[7]+['count'=>'2'];
$fruits[8]=$fruits[8]+['count'=>'2'];
print_r($fruits);
// P.S. Можно ли сделать это же с помощью цикла? У меня такая реализация не работает((:
// for ($i=0; $i<count($fruits);$i++){
// $fruits[i]=$fruits[i]+['count'=>'2'];
// }
?>
