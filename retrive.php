<?php
include 'config.php';
?>
<!doctype html>
<html>
    <head>
        <title>Employee list</title>
        <link href="add.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="left">
                <?php require 'menu.php'; ?>
            </div>
            <div class="right">
                <?php
                $query = "SELECT * from newrecipe";
                $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <h3>Recipe List</h3>
                    <table class="addlist">
                        <thead>
                            <tr>
                                <th>Meal Type</th>
                                <th>Meal Name</th>
                                <th>Meal Image</th>
                                <th>Meal Description</th>
                                <th>Meal Recipe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?= $row['mealtype'] ?></td>
                                    <td><?= $row['mealname'] ?></td>
                                    <td><?= $row['mealdesc'] ?></td>
                                    <td><img src="<?= $row['mealimage'] ?>" width="100" height="100"></td>
                                    <td>
                                        <a href="edit.php?empid=<?= $row['id'] ?>">Edit</a> | 
                                        <a href="javascript:void(0)" onclick="deleteFunction('<?= $row['id'] ?>',this)">Delete</a>
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <?php
                } else {
                    echo 'Record Not found';
                }
                ?>
            </div>
        </div>

        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/myscript.js" type="text/javascript"></script>

    </body>
</html>




