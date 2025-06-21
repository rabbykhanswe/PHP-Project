<?php
include_once "conndb.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT* FROM registration WHERE Username='$username' AND Password='$password'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);


    if($total == 1){
        include "HomePage.php";

    }
    else{
        echo"Password or Username Incorrect";
        include "login.html";
    }
}
?>