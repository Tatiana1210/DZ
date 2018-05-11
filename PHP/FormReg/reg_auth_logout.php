<?php
 //данные от пользователя $_POST
 //файлик
 //сравнение данных из файлика и поста
function check_data() {
    $post = $_POST;
    // валидация данных
    // false
    return $post;//при удачной валидации
}
// регистрация пользователя
function reg_user(){
    $data = check_data();
    if (is_data_in_file($data)) { // если пользователь с логином $data['login'] есть в файле, завершаем работу функции
        return;
    }
    add_user($data); //в противном случае добавляем данные пользователя в файл
}
function is_data_in_file($data){
    $str = file_get_contents("data.txt");
    //$str = "qwe;1234;Михаил;" -
    $from_file = explode(";", $str);
    // $from_file = ['qwe,1234,Михаил',
    //              'asd,5454,Дмитрий',
    //              'zxc,1234,Михаил']
    foreach ($from_file as $val) {
        //'qwe,1234,Михаил'
        $item = explode(",", $str);
//        [
//            'qwe',
//            '1234',
//            'Михаил'
//        ]
        if ($data['login'] == $item[0]) {
            return true;
        }
    }
    return false;
}
function add_user($data){
//    [
//        'login' => 'qwe',
//        'password' =>
//    ]
    $str = "";
    foreach ($data as $val) {
        $str .= $val . ',';
    }
    //"," -> ";"
    $str[strlen($str)-1] = ';';
    file_put_contents(
        'data.txt',
        $str,
        FILE_APPEND);
}
//session_start();
//$session = $_SESSION;
//
//if ($session['auth']) {
//
//}
