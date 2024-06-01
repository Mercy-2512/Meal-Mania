<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="hero">
            <nav class="navbar"> 
            <div class="navbar-content">
                <h3 class="logo-text">Meal Mania</h3>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="recipe.html">Find Recipes</a></li>
                </ul>
            </nav>
          
        </div>
        <br><br>
    <div class="loginp">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-box">
        <form id="login" class="input-group">
        <input type="text" class="input-field" name="username"placeholder="User Id" required />
        <input type="password" class="input-field" name="password" placeholder="Enter Password" required />
        <button type="submit"  class="sumbit">Login</button>
<?php
include "conn.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  if (!empty($username) && !empty($password)) {
    $sql = "SELECT * FROM admin WHERE userid='$username' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
      $_SESSION["userid"] = $username;
      header("Location: admin.html");
      exit();
    } else {
      $error = "Invalid username or password.";
      
      echo $error;
    }
    mysqli_close($conn);
    
  } else {
    $error = "Please enter username and password.";
     echo $error;
  }
  
}
?>
   </form>
       </div> 
       <br><br><br>
    <footer>
        <h2>FOR MORE DETAILS</h2> 
        <p>&copy; 2023 Meal Mania. All rights reserved.</p>
        <a href="mailto:mealmania@gmail.com">Mail us to </a>
    </footer>
        </body>
        </html>