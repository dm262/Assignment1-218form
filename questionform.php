<?php
include('form_test.php'); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Question</title>
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <link href="docs/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
    <form class="form-container" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h3 class="title">Question Form</h3>


        <div class="form-group">
            <label for="questionname"> Name</label>
            <input placeholder="Title" class="form-control" type="text" id="title" name="title" value="<?= $title ?>">
            <span><?= $title_error ?></span>
        </div>

        <div class="form-group" >
            <label for="body"> Body</label>
            <textarea placeholder="Body"  class="form-control" id="body" name="body" rows="3"  value="<?= $body ?>" ></textarea>
            <span><?= $body_error ?></span>
        </div>

        <div class="form-group">
            <label for="skills"> Skills</label>
            <textarea placeholder="Skills" id="skills" class="form-control" rows="3" name="skills" value="<?= $skills ?>"></textarea>
            <span><?= $skills_error ?></span>
        </div>


        <button name="submit" class="btn btn-success btn-block" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>


        <div><?= $success ?></div>

    </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</body>
</html>
