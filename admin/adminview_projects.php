<?php
include("../config/db.php");
$result = mysqli_query($conn,"SELECT * FROM projects");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Projects</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="header">
<h2>All Portfolio Projects</h2>
</div>

<div class="container">

<div class="card">

<table>

<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>

<td>
    <a href="adminedit_project.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="admindelete_project.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>