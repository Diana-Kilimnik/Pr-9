<?php
$login_a='admin';
$password_a = '1111';

if(isset($_POST['submit'])){
    if( (md5(md5($_POST['password'])) == $password_a) && ($_POST['email'] == $login_a)){
        $_SESSION['auth'] = true;
        header('Location: restricted.php');
    }
    else{
        unset($_SESSION['id']); unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
}
?>