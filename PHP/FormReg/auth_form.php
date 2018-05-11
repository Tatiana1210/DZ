<?php
//TXT/CSV
//1. Форма регистрации
//Написать обработчик регистрационной формы
//операция-добавить нового пользователя в файл
//(логин должен быть уникальным)
//2. Форма авторизации
//Написать обработчик формы входа на сайт, который будет проверять сущ пользов в файле,
//сверять введенный пароль в хэш файла

//3. Cоздать страницу, которая будет доступна только
//пользователям, которые прошли регистрацию и выполнили
//вход на сайт

//4.Logout для авторизованных пользователей
  ?>
<!DOCTYPE>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Language school">
  <meta name="description" content="Сайт школы">
 <form action="auth_logout.php" method="post">
 <input type="text" name="auth_name" placeholder="name">
 <input type="text" name="auth_login" placeholder="login">
 <input type="submit" value="submit">
  </form>

  <?php
  include "index.php";
