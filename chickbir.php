<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Chicken Biriyani</title>
    <link rel="stylesheet" href="explore.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <body>
   <div class="hero">
        <nav class="navbar"> 
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="explore.html">Find Recipes</a></li>
                <li><a href="adminlogin.html">Admin Login</a></li>
            </ul>
        </nav>
        <img src="gl.jpg" alt="Logo" class="logo">
    </div>
<br></br>
    <div class="recipes">
<?php
$conn = new mysqli('localhost', 'root', 'root','meal');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";

$sql = "SELECT mealrecipe FROM lunch where mealname='Chicken Biriyani'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<p>" . $row["mealrecipe"] . "</p>";
      }
    } else {
      echo "0 results";
    }
mysqli_close($conn);
?>
</div>
<br></br>
<footer>
    <h2>FOR MORE DETAILS</h2>
           <img src="gl.jpg" alt="footer image">
           <p>&copy; 2023 Meal Mania. All rights reserved.</p>
           <a href="mailto:mealmania@gmail.com">Mail us to </a>
    </footer>
</body>
</html>