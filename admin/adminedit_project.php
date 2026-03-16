<?php
include("../config/database.php");

$id=$_GET['id'];

$query="SELECT * FROM projects WHERE id=$id";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$title=$_POST['title'];
$description=$_POST['description'];
$link=$_POST['link'];

$update="UPDATE projects
SET title='$title',description='$description',link='$link'
WHERE id=$id";

mysqli_query($conn,$update);
mysqli_query($conn,"UPDATE projects SET title='$title',description='$description' WHERE id=$id");
header("Location:view_projects.php");
}
?>

<form method="POST">

Title<br>
<input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>

Description<br>
<textarea name="description"><?php echo $row['description']; ?></textarea><br><br>

Link<br>
<input type="text" name="link" value="<?php echo $row['link']; ?>"><br><br>

<button name="update">Update</button>

</form>

