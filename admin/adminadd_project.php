<?php
include("../config/db.php");

if(isset($_POST['submit']))
{
$title = $_POST['title'];
$description = $_POST['description'];

$query = "INSERT INTO projects(title,description) VALUES('$title','$description')";
mysqli_query($conn,$query);

echo "Project Added!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Project</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="header">
<h2>Add Portfolio Project</h2>
</div>

<div class="container">

<div class="card">

<form method="POST">

<label>Project Title</label>
<input type="text" name="title" required>

<label>Description</label>
<textarea name="description"></textarea>

<button type="submit" name="submit">Add Project</button>

</form>

</div>

</div>

</body>
</html>