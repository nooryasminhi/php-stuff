<!DOCTYPE html>
<html lang=""en>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>update</title>
    </head>
    <?php 
    $id = $_GET['ID'];
    include "config.php";
    $Rdata = mysqli_query($con, "select * from todotable where Id =")
    $data = mysqli_fetch_array($Rdata);
    ?>
    <body>
    <form action="update1.php" method="POST">
        <div class="container">
            <div class="row">
                <h2>Update</h2>
                <div class="col-10">
                    <input type="text" value="<? php echo $data['list'] ?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button>UPDATE</button>
                    <input type="hidden" name="id" value="<? php echo $data['Id'] ?>">
                </div>
            </div>
        </div>
    </form>
    </body>