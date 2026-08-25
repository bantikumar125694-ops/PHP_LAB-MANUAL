<?php 

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$username = $_POST['user'];
$password = $_POST['pass'];

if($username =="Admin" && $password == "pass"){
   header("Location: dashboard.php");
   die();
}else{
    echo "Wrong  User";
}



?>