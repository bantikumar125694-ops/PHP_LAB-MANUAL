<?php

// Apply (Creating the cookie)
//setcookie("User","Krishna",time() + 300);

// Analyze(Edit the cookie) 
//setcookie("User","Ramanuj",time() + 300);

// Delete the cookie
//setcookie("User","Krishna",time() -300);

// Evaluate the cookie

function enc_cookie($data)
{
    $data = $data."2327%@4$";
    setcookie("User",$data,time() + 300);
    echo $_COOKIE['User'];

}

enc_cookie("Krishna");



?>