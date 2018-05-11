<?php
function check_data() {
  $post=$_POST;
  return $post;
}

function get_data() {
  if (isset($post['submit'])) {
    if (!empty($post['auth_login']) || !empty($post['password'])) {
      return false;
    }
    else {
      is_data_in_file($data);
    }
  }
}

function log_in(){
    $data = check_data();
    if (is_data_in_file($data)==TRUE) {
      header('Location:hidden_page.php');
    }
  return false;
}
function is_data_in_file($data){
    $data = check_data();
    $str = file_get_contents("data.txt");
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
        if (($data['auth_login'] == $item[0]) && (password_veryfy($data['password'],$item[1])==true)) {
            return true;
        }
    }
    return false;
}
