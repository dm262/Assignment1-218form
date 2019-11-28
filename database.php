<?php
$hostname= "sql1.njit.edu";
$user ="dm262";
$password = "yP2HTg7Ga";



//set dsn
//$dsn ="mysql:host=$hostname;dbname=$user";

$dsn = 'mysql:host='. $hostname .';dbname='. $user;



// create PDO
try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
} catch (PDOException $e){
    echo "Connection failed: " .$e->getMessage();
}