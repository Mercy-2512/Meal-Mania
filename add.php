<!doctype html>
<html>
    <head>
        <title>ADD RECIPE</title>
        <link href="add.css" rel="stylesheet" type="text/css"/>
    </head>
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
                <li><a href="home.html">LOG OUT</a></li>
            </ul>
        </nav>
    </div>
    
<br></br>
<div class="addform">
    <h2>ADD RECIPES </h2>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="mealtype" placeholder="Meal Type">
    <br><br> 
    <input type="text" name="mealname" placeholder="Meal Name">
    <br><br>
    <input type="file" name="mealimg">
    <br><br>
    <input type="text" name="mealdesc" placeholder="Meal Description">
    <br><br>
    <input type="text" name="mealrecipe" placeholder="Meal Recipe">
    <br><br>   
    <input type="submit" name="submit_btn" value="Create">
    <br><br>
</form>
<a href="view.php">VIEW RECIPES</a>
<?php include 'record.php';?>
</div>

    <br></br>
    <footer>
    <h2>FOR MORE DETAILS</h2>
    
           <p>&copy; 2023 Meal Mania. All rights reserved.</p>
           <a href="mailto:mealmania@gmail.com">Mail us to </a>
    </footer>
</body>
</html>

