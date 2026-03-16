<?php
include("../config/db.php");

$query = "SELECT * FROM projects";
$result = mysqli_query($conn, $query);
?>

<h1>My Portfolio</h1>
<p>Welcome to my portfolio system.</p>
<a href="../admin/adminlogin.php">Admin Login</a>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div>
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['description']; ?></p>
    </div>
<?php } ?>
