<?php
// include db connection
include 'conn.php';

if(isset($_POST['create'])){
    $mealtype = $_POST['mealtype'];
    $mealname = $_POST['mealname'];
    $mealimage = $_FILES['mealimg'];
    $desc = $_POST['mealdesc'];
    $recipe = $_POST['mealrecipe'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    // insert data

    mysqli_query($con,"INSERT INTO 'new_recipe'( `meal_type`, `meal_name`, `meal_image`,'meal_desc','meal_recipe') VALUES ('$mealtype','$mealname','$meal_img','$desc','$recipe')");
    header("location:add.php");

}

?>