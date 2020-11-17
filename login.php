<?php
session_start();
require_once 'connection.php'; 
	if (count($_POST)>0) {  
        $sq = "SELECT * FROM users WHERE login='$_POST[login]' and password='$_POST[password]'";
        
        $res = mysqli_query ($conn, $sq);
		$row = mysqli_fetch_array($res);
        
        if (is_array($row)){
            $_SESSION['login'] = $row['email'];
        } 
        else {
            echo 'Invalid password';
        }
    }
?>