<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/28/2017
 * Time: 7:00 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Class</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="row">
        <h1>Thêm mới Class</h1>
        <form method="post" action="postAddClass.php">

            <div class="form-group">
                <label for="exampleInputPassword1">Tên lớp học</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Tên lớp học">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Số lượng lớp học</label>
                <input type="text" name="qty" class="form-control" id="exampleInputPassword1" placeholder="Số lượng">
            </div>

            <button type="submit" class="btn btn-default">Lưu</button>
        </form>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
