<?php
require_once "conndb.php";
if(isset($_POST['name']) && isset($_POST['username']) && 
    isset($_POST['password']) && isset($_POST['sex']) &&
    isset($_POST['city']) && isset($_POST['course']) && 
    isset($_POST['district']) && isset($_POST['state'])){

    $name = $_POST ['name'];
    $username = $_POST ['username'];
    $password = password_hash($_POST ['password'], PASSWORD_DEFAULT);
    $sex = $_POST ['sex'];
    $city = $_POST ['city'];
    $course = $_POST ['course'];
    $district = $_POST ['district'];
    $state = $_POST ['state'];


    $sql = "INSERT INTO registration (name, username, password, sex, city, course, district, state) VALUES ('$name', '$username', '$password', '$sex', '$city', '$course', '$district', '$state')";

    if(mysqli_query($conn, $sql)){
        include"login.html";
    }
    else{
        echo "Data Insert Error";
        include"Regitration.html";
    }
}


?>