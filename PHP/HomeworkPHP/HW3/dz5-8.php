<?php
// Задача 5
// Создайте массив. Объедините все элементы массива в строку и выведите её на экран.
$arr=['Я', 'люблю', 'свинку', 'Пэпу'];
$str = implode(",", $arr);
echo str_replace(',', ' ', $str);
?>
<br>
<?php
// Задача 6
// В переменной $date лежит дата в формате '30-11-2017'.
// Преобразуйте эту дату в формат '2017.11.30'.
$date = date_create_from_format('j-m-Y', '30-11-2017');
echo date_format($date, 'Y.m.d');
?>
<br>
<?php
// Задача 7
// Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
$toMakeStr='/php/';
//var_dump($toMakeStr);
$clean = trim($toMakeStr, "/");
var_dump($clean);
?>
<br>
<?php
// Задача 8
// Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет
//  - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim
$justStr="Дружные мопсы  ";
if(stristr($justStr, '.') === TRUE) {
  echo "$justStr";
}
else {
  $trimmed = rtrim($justStr);
  echo substr_replace($trimmed, '.', -1,-1);
}
?>
