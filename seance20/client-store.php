<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
// echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] !='POST'){
    header('location:client-index.php');
}

// die();

// print_r($_POST);
// Array ( [name] => Peter [address] => Maisonneuve [phone] => 514545454 [email] => peter@gmail.com [birthday] => 2026-05-06 [city_id] => 1 )

require_once('db/connex.php');
// $name = mysqli_real_escape_string($connex, $_POST['name']);
// $address = mysqli_real_escape_string($connex,$_POST['address']);
// $phone = mysqli_real_escape_string($connex,$_POST['phone']);
// $email = mysqli_real_escape_string($connex,$_POST['email']);
// $birthday = mysqli_real_escape_string($connex,$_POST['birthday']);
// $city_id = mysqli_real_escape_string($connex,$_POST['city_id']);


foreach($_POST as $key => $value){
   // echo $key." = ".$value."<br>";
    $$key = mysqli_real_escape_string($connex, $value);
}
// echo $name;
// die();

$sql = "INSERT INTO client (name, address, phone, email, birthday, city_id) VALUES ('$name', '$address', '$phone', '$email', '$birthday', '$city_id')";

if(mysqli_query($connex, $sql)){
    // echo "success";
    header('location:client-index.php');
}else{
    echo mysqli_error($connex);
}







?>