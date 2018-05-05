<?php
//Задача 1
// Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость»
function greeting($arg, $name="Гость") {
  	echo "$arg, $name!<br/>";
}
greeting("Здравствуйте");
greeting("Здравствуйте", "Татьяна");

// Задача 2
// Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной.
// Переставьте названия так, чтобы названия были упорядочены по алфавиту.
function cityGenerator (string $cityNames) {
  $output=$cityNames;
  $partedCityNames=explode (' ',$cityNames);
  if (count($partedCityNames)>1) {
    sort($partedCityNames,SORT_STRING);
		$output = implode(' ',$partedCityNames);
  }
  return $output;
}
var_dump((cityGenerator ('Владивосток Анапа Барнаул')).'<br>');

// Задача 3
// Написать функцию - конвертер строки.
// Возможности:
// перевод всех символов в верхний регистр,
// перевод всех символов в нижний регистр,
// перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
// Это должна быть одна функция
function stringConverter (string $elems) {
  if (ctype_lower($elems)) {
     echo strtoupper($elems);
  }
  else if (ctype_upper($elems)) {
     echo strtolower($elems);
  }
  else {
     echo ucwords (strtolower($elems));
  }
  }
stringConverter('doG in tHe yArD');
 ?>
 
 <br>
 <?php
// Задача 4
// Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>».
// Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены.
function deleteTags ($greet) {
  echo strip_tags ( "&nbsp". $greet);
}
deleteTags ("<h1>Hello, world!</h1>");

 ?>
