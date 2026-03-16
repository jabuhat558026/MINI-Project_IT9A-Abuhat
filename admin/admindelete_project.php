<?php
include("../config/db.php");

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM projects WHERE id=$id");

header("Location: adminview_projects.php");
?>