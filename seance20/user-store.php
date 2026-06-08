<?php

//print_r($_SERVER);
if($_SERVER['REQUEST_METHOD'] != "POST"){
    header('location:user-create.php');
}

// print_r($_POST);
// Array ( [name] => peter [username] => peter@gmail.com [password] => 123456 )

require_once('db/connex.php');

foreach($_POST as $key => $value){
    $$key = mysqli_real_escape_string($connex, $value);
}

//echo md5($password);

$password =  password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
// $2y$10$xbBnvqzs1ccypV.VdSOWgOgOgsLr2KA25M3Crus7SmllQ7SGEmbg.
// $2y$10$ujfC2I4KnFeAT48gBEoF.O786VgVgyOn3ZX/xJqECxCBhKMze1QKe


$sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";

if(mysqli_query($connex, $sql)){
    header('location:login.php');
}else{
    echo mysqli_error($connex);
}


?>