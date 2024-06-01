<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
   
    <meta charset="utf-8" />
    <title>Meal Mania</title>
    <link rel="stylesheet" href="explore.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
</head>
<body>
<div class="hero">
    <nav class="navbar"> 
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="recipe.html">Find Recipes</a></li>
        </ul>
    </nav>
    <img src="gl.jpg" alt="Logo" class="logo">
</div>
<?php
include 'conn.php';
$select="SELECT * FROM newrecipe";
$select_q=mysqli_query($conn,$select);
$data=mysqli_num_rows($select_q);
?>
<table border="1px" cellspacing="0" cellpading="30px">
    <tr>
        <th>Meal Type</th>
        <th>Meal Name</th>
        <th>Meal Image</th>
        <th>Meal Description</th>
        <th>Meal Recipe</th>
        <th colspan="2">Actions</th>
   </tr>
<?php
if($data){
    while($row=mysqli_fetch_array($select_q)){
        ?>
        <tr>
            <td><?php echo $row['mealtype']?></td>
            <td><?php echo $row['mealname']?></td>
            <td><img src="images/<?php echo $row['mealimg'] ?>" width="80px"></td>
            <td><?php echo $row['mealdesc']?></td>
            <td><?php echo $row['mealrecipe']?></td>
            <td><a  onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE THE RECIPE??')"href="delete.php?name=<?php echo $row['mealname'] ?>">DELETE</a></td>
    </tr>
    <?php
    }
}
else{
    echo "No Record Found";
}
?>
</body>
</html>