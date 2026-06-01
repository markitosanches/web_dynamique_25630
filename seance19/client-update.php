<?php
if($_SERVER['REQUEST_METHOD'] != "POST"){
     header('location:client-index.php');
}

// print_r($_POST);
// Array ( [id] => 19 [name] => Annie [address] => Pie Ix [phone] => 5147777777 [email] => annie@gmail.com [birthday] => 2026-05-13 [city_id] => 2 )
// $name = $_POST['name'];

require_once('db/connex.php');

foreach($_POST as $key => $value){
    $$key = mysqli_real_escape_string($connex, $value);
}

$sql = "UPDATE client SET name = '$name', address = '$address', phone = '$phone', email = '$email', birthday = '$birthday', city_id = '$city_id' WHERE id = $id";

if(mysqli_query($connex, $sql)){
    // echo "success";
    header('location:client-show.php?id='.$id);
}else{
    echo mysqli_error($connex);
}
?>