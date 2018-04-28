<?php
//boolean
$boo1=true;
$boo2=false;

is_bool($bool);//проверка типа данных (возвращает true или false);

//integer
//для 32 битных сборок 2млрд
// для 64 битных=9E18

var_dump (PHP_INI_SIZE);
var_dump(PHP_INT_MAX);
var_dump (PHP_INT_MIN);


is_integer(var: 5/2);
is_float(var:5/2);

round (val: 3.67, precision: 0, mode: PHP_ROUND_HALF_UP);

//Nan и Infinity -если значение при вычислении не может быть переопределено;
// C php 7.0-при приведении к integer=0;

$some_int=78;

$str="Строка в двойных кавычках {$some_int} rere";// переводится переменная;
$str1='Строка в двойных кавычках $some_int';// переменная воспр как есть, как написано
$str="Строка в 'двойных' кавычках {$some_int} rere";
$str="Строка в \"двойных\" кавычках {$some_int} rere";

// приведение пременной
//(int) (integer)
//(bool) (boolean)
//(float) (double) (real)
//(string)
//(array)
//(object)


// 0
var_dump((bool) " ")
?>//закрывающий тег
