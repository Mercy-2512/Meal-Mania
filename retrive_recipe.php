<?php
              include conn.php;
              $sql = "SELECT * FROM vegetarian";
              $result = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result) > 0) {
                  echo "mealtype" . $row["mealtype"] . " mealname " . $row["mealname"] . " mealrecipe" . $row["mealrecipe"]."<br>";
              }
             else {
                 echo "No records found";
             }
?>