<?php
// define variables and set to empty values
$firstname_error = $lastname_error = $email_error = $password_error = $questionname_error = $questionbody_error = $questionskills_error = $birthday_error = "";
$firstname = $lastname = $email = $password = $birthday = $questionbody = $questionname = $questionarray =$questionskills = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstname_error = "first name is required";
    } else {
        $firstname = test_input($_POST["firstname"]);

    }
    if (empty($_POST["lastname"])) {
        $lastname_error = "Last name is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $password_error = "password is required";
    } else {
        $password = test_input($_POST["password"]);
        // check if password is well-formed
        if (strlen($password) < 8) {
            $password_error = "Your password must be at least 8 characters";
        }
    }

    if (empty($_POST["birthday"])) {
        $birthday_error = " You must enter you birthday";
    } else {
        $birthday = test_input($_POST["birthday"]);

    }

    if (empty($_POST["questionname"])) {
        $questionname_error = "You have not entered a question name";
    } else {
        $questionname = test_input($_POST["questionname"]);
        if (strlen($questionname) < 3){
            $questionname_error = "Your question name must be at least  3 characters";
        }

    }

    if (empty($_POST["questionbody"])) {
        $questionbody_error = "You have not entered a question body";
    } else {
        $questionbody = test_input($_POST["questionbody"]);
        if (strlen($questionbody) > 500){
            $questionbody_error = "You question body must be less than 500 characters";
        }
    }


    if (empty($_POST["questionskills"])){
        $questionskills_error ="you havent entered any skills.";
    }else{
        $skills  = ($_POST["questionskills"]);
        $myArray =explode(',',$skills);
        if (sizeof($myArray) < 2){
            $questionskills_error ="You need at least 2 skills.";
        }else{
            $questionarray = print_r($myArray);
        }

    }





}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}