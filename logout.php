<?php
//session_start();
//unset($_SESSION['user_name']);
//unset($_SESSION['email']);
//session_destroy();
$expire_date = time() - (86400  * 30);
setcookie('user_name' ,$_COOKIE['user_name'] , $expire_date, '/');
echo "you are logged out";
header("refresh:5; URL=./login.php") ;