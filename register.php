<?php
include_once '../controller/registerController.php';
include_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssfile.css">
</head>
<body>
<div class="container">
        <div class="header2">
            <h2>Krijoni një llogari</h2>
        </div>
        <div class="form-control">
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <label for="">Name</label>
        <input type="text" name="name" placeholder="name..." value="<?=$name?>"> <br> <br>
        <label for="">Surname</label>
        <input type="text" name="surname" placeholder="Enter your surname..." value="<?=$surname?>"> <br> <br>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Enter your email..." value="<?=$email?>"> <br> <br>
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Enter your username..." value="<?=$username?>"> <br> <br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter your password..." value="<?=$password?>"><br> <br>
        <input type="submit" value="register" name="registerBtn">
</div>
    </form>
</div>
<?php

include_once 'footer.php';

?> 

<style>
     @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');

* {
    box-sizing: border-box;
}

body {
    background-color: #0072ff;
    font-family: 'Open Sans', sans-serif;
    align-items: center;
    justify-content: center;
    margin: 0;
}

.container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    width: 400px;
    max-width: 100%;
}

.header2 {
    border-bottom: 1px solid #f0f0f0;
    background-color: #f7f7f7;
    padding: 20px 40px;
}

    .header h2 {
        margin: 0;
    }

form {
    padding: 10px 20px;
}

.form-control {
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

    .form-control label {
        display: inline-block;
        margin-bottom: 5px;
    }

    .form-control input {
        border: 2px solid #f0f0f0;
        border-radius: 4px;
        display: block;
        font-family: inherit;
        font-size: 14px;
        padding: 10px;
        width: 100%;
    }

        .form-control input:focus {
            outline: 0;
            border-color: #777;
        }

    .form-control.success input {
        border-color: #2ecc71;
    }

.form button {
    background-color: #0072ff;
    border: 2px solid #0072ff;
    border-radius: 4px;
    color: #fff;
    display: block;
    font-family: inherit;
    font-size: 16px;
    padding: 10px;
    margin-top: 20px;
    width: 100%;
}

</style>

</body>
</html>