<?php
include 'conn.php';
if (isset($_POST['submit_btn'])) {
    $mtype=$_POST['mealtype'];
    $mname=$_POST['mealname'];
    $mimage=$_FILES['mealimg']['name'];
    $tmp_name=$_FILES['mealimg']['tmp_name'];
    $destination="images/".$mimage;
    move_uploaded_file($tmp_name, $destination);
    $mdesc=$_POST['mealdesc'];
    $mrecipe=$_POST['mealrecipe'];

    $insert="INSERT INTO newrecipe (mealtype,mealname,mealimg,mealdesc,mealrecipe) VALUES('$mtype','$mname','$mimage','$mdesc','$mrecipe')";
    $insert_q=mysqli_query($conn,$insert);
    if($insert_q){
        ?>
        <script type="text/javascript">
            alert("Recipe Saved Successfully");
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Please try again to add recipe");
        </script>
        <?php
    }
}
?>