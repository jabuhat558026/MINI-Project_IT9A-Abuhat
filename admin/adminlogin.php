<?php
session_start();
include("../config/database.php");

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1){

$_SESSION['admin']=$username;
header("Location: dashboard.php");

}else{
echo "Invalid login";
}
}
?>

<h2>Admin Login</h2>

<form method="POST">

Username<br>
<input type="text" name="username"><br><br>

Password<br>
<input type="password" name="password"><br><br>

<button name="login">Login</button>

</form>