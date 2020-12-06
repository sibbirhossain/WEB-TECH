<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    //$exists=false;
    $existSql = "SELECT * FROM users WHERE username = '$username' ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if($numExistRows > 0){
        $showError = "Username Already Exists.";
    }
    else{
        if(($password == $cpassword)){
          $sql = "INSERT INTO users ('username', 'password', 'date') VALUES ('$username', '$password', current_timestamp())";
          $result = mysqli_query($conn, $sql);
          if($result){
            $showAlert = true ;
          }
        }
        else{
          $showError = "Password do not match";
        }
    }
}
    
?>



<!--
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
-->