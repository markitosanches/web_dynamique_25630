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

// $name = $_POST['name'];
// $address = $_POST['address'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $birthday = $_POST['birthday'];
// $city_id = $_POST['city_id'];


foreach($_POST as $key => $value){
   // echo $key." = ".$value."<br>";
    $$key = $value;
}

// echo $name;
// die();

require_once('db/connex.php');

$sql = "INSERT INTO client (name, address, phone, email, birthday, city_id) VALUES ('$name', '$address', '$phone', '$email', '$birthday', '$city_id')";

if(mysqli_query($connex, $sql)){
    // echo "success";
    header('location:client-index.php');
}else{
    echo mysqli_error($connex);
}







?>