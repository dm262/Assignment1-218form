<?php
session_start();
include('form_test.php');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Display</title>
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <link href="docs/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "https://web.njit.edu/~dm262/project1v2/questionform.php";
        };
    </script>
</head>

<body>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form class="form-container" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h3 class="title">User Info</h3>


                <div class="form-group">
                    <p> Firstname: <?= $_SESSION['fname'] ; ?></p>
                </div>
                <div class="form-group">
                    <p> Lastname: <?= $_SESSION['lname'] ; ?></p>
                </div>
                <div class="form-group">
                    <p> email: <?=  $_SESSION['owneremail']; ?></p>
                </div>

                <div class="form-group" >
                    <label for="body"> Question</label>
                    <p><?= $_SESSION['question'] ?></p>

                </div>

<!--                <div class="form-group">-->
<!--                    <label for="question"> Add new question</label>-->
<!--                    <textarea placeholder="Enter question" id="question" class="form-control" rows="3" name="body"></textarea>-->
<!--                </div>-->


<!--                <button name="register" class="btn btn-success btn-block" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>-->
<!--                <div>--><?//= $success ?><!--</div>-->


            </form>
            <form action="questionform.php">
                <button name="question" class="btn btn-success btn-block" type="submit" id="contact-submit" data-submit="...Sending">Add new question</button>

            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</body>
</html>
