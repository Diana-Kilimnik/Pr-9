<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully with db";

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<br>Your login: ' . $_POST['login'];echo '<br>';
        if($_POST['login'] == $row["login"] && 
        $_POST['password'] == $row["password"])
            echo '<br> Hello, you are logged in!!! <br><br>';
        if($_POST['login'] == $row["login"] && 
        $_POST['password'] != $row["password"])
            echo '<br> Password is incorrect!!!';
        if($_POST['login'] != $row["login"])
            echo '<br> There isn`t so user!!!';
	}
}
?>