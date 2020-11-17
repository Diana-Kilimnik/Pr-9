<!doctype html>
<html lang="en">
<head> 

<?php
$login_a='user';
$password_a = '1111';
if(isset($_POST['submit'])){
    if(($_POST['password'] == $password_a) && ($_POST['login'] == $login_a)){
        $_SESSION['auth'] = true;
        echo 'Hello, you are authorized!!!'; 
        header('Location: restricted.php');
    }
    else{
        echo 'Hello, you are not authorized!!!';
        header('Location: login.php');
    }
}
?>
</head>
</html>