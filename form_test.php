<?php
// define variables and set to empty values
$firstname_error = $lastname_error =$email_error = $password_error =$questionname_error =$quesionbody_error = $birthday_error = "";
$firstname = $lastname = $email = $password = $birthday = $quesionbody = $questionname = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $name_error = "first name is required";
    } else {
        $name = test_input($_POST["firstname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $name_error = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["lastname"])) {
        $name_error = "Last name is required";
    } else {
        $name = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastname_error  = "Only letters and white space allowed";
        }
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
        $questionname_error = "You have not entered a question";
    } else {
        $questionname = test_input($_POST["questionname"]);
        if (strlen($questionname) < 3){
            $questionname_error = "You question name must be at least  3 characters";
        }

    }

    if (empty($_POST["questionbody"])) {
        $quesionbody_error = "You have not entered a question body";
    } else {
        $quesionbody = test_input($_POST["questionbody"]);
        if (strlen($quesionbody) < 3){
            $quesionbody_error = "You question body must be at least  3 characters";
        }
    }
    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}