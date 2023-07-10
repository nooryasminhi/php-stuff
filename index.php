<?php 
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TO DO List Website</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <form action="insert.php" method="POST">
        <div class="container">
            <div class="row">
                <h2>TO DO </h3>
                <div class="col-8">
                    <input type="text" name=" " class="form-control">
                </div>
                <div class="col-2">
                    <button>ADD</button>
                </div>
            </div>
        </div>
       </form>
       <?php 
       include "config.php";
       $rawData= mysqli_query($con, "select * from todotable");
       ?>
       <div class="container">
            <div class="col-8">
       <table>
            <tbody>
                <?php 
                while($row = mysqli_fetch_array($rawData)){
                ?>
                <tr>
                    <td><?php echo $row['Id'] ?></td>
                    <td><?php echo $row['list'] ?></td>
                    <td> <a href="delete.php ID= <?php echo $row['Id'] ?>">Delete</a></td>
                    <td> <a href="update.php ID= <?php echo $row['Id'] ?>">Update</a></td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
       </table>
            </div>
        </div>
    </body>
</html>