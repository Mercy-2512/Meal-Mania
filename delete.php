<?php
include 'conn.php';
$name=$_GET['name'];
$delete="DELETE * FROM newrecipe where mealname=''";
$delete_q=mysqli_query($conn,$delete);
header('location:view.php');
?>