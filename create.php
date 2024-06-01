<?php
include 'config.php';
?>
<!doctype html>
<html>
    <head>
        <title>Employee list</title>
        <link href="css/crudstyles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="right">
                <form class="empform" id="empform" action="" enctype="multipart/form-data">
                    <table cellspacing="20">
                        <tr>
                            <th colspan="2"><center>New Employee Form</center></th>
                        </tr>
                        <tr>
                            <td>Emp ID</td>
                            <td><input type="text" name="empid" id="empid" /></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="empname" id="empname" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="empemail" id="empemail" /></td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td><input type="file" name="profilepic" id="profilepic" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="sbtn" name="submit" id="submit" value="create">Submit</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/myscript.js" type="text/javascript"></script>

    </body>
</html>

