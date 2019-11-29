<?php
include('form_test.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <link href="docs/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</head>

<body>

<!--<div class="container-fluid">-->
<!--    <div class="jumbotron">-->
<!--        <h1 class=" title display-4">Registration</h1>-->
<!--        <p class="lead">Welcome to my assignment registration page</p>-->
<!--        <hr class="my-4">-->
<!--        <p>Enter all your information below</p>-->
<!--    </div>-->
<!---->
<!--</div>-->
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
<!--                form starts-->


            <form class="form-container" action="display.php" method="post">
                <h1 class="title">Register</h1>

                <div class="form-group">
            <label for="firstnname">First Name</label>
            <input type="text" class="form-control"  name="firstname" value="<?= $firstname?>" aria-describedby="emailHelp" placeholder="Enter First name">
            <span class="error"><?= $firstname_error ?></span>
             </div>

                <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control"  name="lastname" value="<?= $lastname?>" aria-describedby="emailHelp" placeholder="Enter last name">
            <span class="error"><?= $lastname_error ?></span>
                </div>

                 <div class="form-group">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control"  name="birthday" value= "<?= $birthday?>" aria-describedby="emailHelp" placeholder="Enter your Birthday">
            <span class="error"><?= $birthday_error ?></span>
                </div>

        <div class="form-group">
            <label for="email">Email address </label>
            <input type="text" class="form-control"  name="email" value="<?= $email?>" aria-describedby="emailHelp" placeholder="Enter email ">
            <span class="error"><?= $email_error ?></span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control"  name = password value="<?= $password?>" placeholder="Password">
            <span class="error"><?= $password_error ?></span>
        </div>

        <button type="submit" name="submit" class="btn btn-success btn-block">Register</button>
        <span><?=$success?></span>
    </form>
<!--                form ends-->
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>

    </div>
</div>
</body>
</html>
