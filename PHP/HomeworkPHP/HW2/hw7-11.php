<?php
// 7.Создайте массив, заполненный буквами от 'a' до 'j'.
// Сделайте из него массив с заглавными буквами.
$arrayoFLetters=['a','b','c','d','e','f','g','h','i','j'];
foreach ($arrayoFLetters as &$val) {
  $val=mb_strtoupper($val);
}
unset($val);
var_dump($arrayoFLetters);

// 8. Создать массив, заполненный цифрами от '1' до '10'.
// Найдите сумму элементов данного массива
// Найдите произведение элементов данного массива
// Выведите на экран его элементы в следующем порядке: 1102837465.

$arr=[1,2,3,4,5,6,7,8,9,10];
var_dump(array_sum($arr));
var_dump($arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4]*$arr[5]*$arr[6]*$arr[7]*$arr[8]*$arr[9]);
list($one, $two, $three,$four,$five,$six,$seven,$eight, $nine, $ten) = $arr;
echo "$one$ten$two$eight$three$seven$four$six$five";

// 9. Создайте массив ['a'=>1, 'b'=2... 'j'=>10] из предыдущих массивов.
$newArray=array_combine($arrayoFLetters, $arr);
var_dump($newArray);
?>
<?php
// 10. Создайте массив вида [­[1, 2, 3], [4, 5, 6], [7, 8, 9]] (цикл не использовать).
$arr1=[1, 2, 3];
$arr2=[4, 5, 6];
$arr3=[7, 8, 9];
$arrTogether=[];
array_push($arrTogether, $arr1, $arr2, $arr3);
var_dump($arrTogether);
?>
<?php
// 11. Дан массив с элементами ['<p>Some</p>', '<p>info</p>'].
// Создайте новый массив, в котором из элементов будут удалены теги.
$arroFElements=['<p>Some</p>', '<p>info</p>'];
list($array1, $array2) = array_chunk($arroFElements, ceil(count($arroFElements) / 2));
//var_dump($array1);
//var_dump($array2);
strip_tags($array1[0]);
strip_tags($array2[0]);
$result= array_merge($array1, $array2);
print_r($result);
?>
