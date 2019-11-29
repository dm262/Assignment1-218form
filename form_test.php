<?php
include 'database.php';
// define variables and set to empty values
$firstname_error = $lastname_error = $email_error = $password_error = $title_error = $body_error = $skills_error = $birthday_error = "";
$firstname = $lastname = $email = $password = $birthday = $body = $title = $questionarray =$skills = $success = "";

//form is submitted with POST method
if (isset($_POST['submit'])) {
    if (empty($_POST["firstname"])) {
        $firstname_error = "Name is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            $firstname_error = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["lastname"])) {
        $lastname_error = "Last name is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastname_error = "Only letters and white space allowed";
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

    if (empty($_POST["birthday"])) {
        $birthday_error = "birthday is required";
    }

    if (empty($_POST["password"])) {
        $password_error = "password is required";
    } else {
        $password = test_input($_POST["password"]);
        // check if password is well-formed
        if (strlen($_POST["password"]) < 8) {
            $password_error = "Your password must be at least 8 characters";
        }
    }


    if (empty($_POST["title"])) {
        $title_error = "You have not entered a question name";
    } else {
        $title = test_input($_POST["title"]);
        if (strlen($title) < 3){
            $title_error = "Your question name must be at least  3 characters";
        }

    }

    if (empty($_POST["body"])) {
        $body_error = "You have not entered a question body";
    } else {
        $body = test_input($_POST["body"]);
        if (strlen($body) > 500){
            $body_error = "You question body must be less than 500 characters";
        }
    }


    if (empty($_POST["skills"])){
        $skills_error ="you havent entered any skills.";
    }else{
        $skills  = ($_POST["skills"]);
        $myArray =explode(',',$skills);
        if (sizeof($myArray) < 2){
            $skills_error ="You need at least 2 skills.";
        }
//        else{
//            $questionarray = print_r($myArray);
//        }

    }
// REGISTRATION
    if ($firstname_error == '' and $lastname_error == '' and $email_error == '' and $birthday_error == '' and $password_error == '' ){
        $sql = "INSERT INTO accounts (fname, lname, email, birthday, password) VALUES(:fname, :lname, :email, :birthday, :password)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute(['fname' => $_POST["firstname"], 'lname' => $_POST["Lastname"], 'email' => $_POST["email"], 'birthday' => $_POST["birthday"], 'password' => $_POST["password"]]);
        $success = "Your account has been registered ";


    }
// QUESTIONS ENTER
    if ($title_error == '' and $body_error == '' and $skills_error == '' ) {
        $sql = "INSERT INTO questions (title, body, skills) VALUES(:title, :body, :skills)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute(['title' => $_POST["title"], 'body' => $_POST["body"], 'skills' => $_POST["skills"]]);
        $success = "Your question has been received";

    }

//LOGIN
    if ($email_error == '' and $password_error == '' ) {
        $sql = "SELECT * FROM accounts WHERE email= '$email' and password= '$password'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rownumber =$stmt->rowCount();
        if ($rownumber >= 1 ){
            $sql = "SELECT * FROM accounts WHERE email= '$email' and password= '$password'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $posts =$stmt->fetchAll();

            foreach ($posts as $post){
                 $post->fname ;
                 $post->lname;
            }

            $sql2 = "SELECT * FROM questions WHERE owneremail= '$email'";
            $stmt2 = $pdo->prepare($sql);
            $stmt2->execute();
            $posts2 =$stmt2->fetchAll();

            foreach ($posts2 as $posts20){
                $posts20->body;
            }


//            header('Location: display.php');
//            exit;


        }else{
            $success="Username or password is incorrect";


        }

    }




}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}