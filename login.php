<!doctype html>
<html lang="en">
<head> 
<?php
session_start();
require_once 'connection.php'; 
	if (count($_POST)>0) {  
        $sq = "SELECT * FROM users WHERE login='$_POST[login]' and password='$_POST[password]'";
        
        $res = mysqli_query ($conn, $sq);
		$row = mysqli_fetch_array($res);
        
        if (is_array($row)){
            $_SESSION['login'] = $row['login'];
        } 
        else {
            echo '<br>Incorrect! <br>Try again: ';
        }
    }
?>
<a href="index.php">Return to the previos page</a>
</head>
</html>