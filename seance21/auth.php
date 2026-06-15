<?php
session_start();

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// echo  md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
// die();

// 1) verifier le nom d utilisateur
// SELECT * FROM user where username = 'peter@gmail.com';

// 2) compter ?  === 1

// 3) verifier le mot de passe -  mot de passe BD hash   === mot de passe interface 
// $2y$10$xbBnvqzs1ccypV.VdSOWgOgOgsLr2KA25M3Crus7SmllQ7SGEmbg.    ===  password_hash(123456);

// 4)  Creer une session() -> On parle ..... Methods - cookie session post get

/*
passer la donnée

GET() = URL

POST() = FORM -> FORM -> FORM -> FROM 

COOKIES() = 

SESSION()



*/


require_once('db/connex.php');

// print_r($_POST);
// Array ( [username] => peter@gmail.com [password] => 123456 )

foreach($_POST as $key => $value){
    $$key = mysqli_real_escape_string($connex, $value);
}

// 1) verifier le nom d utilisateur
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($connex, $sql);

// 2) compter ?  === 1
$count = mysqli_num_rows($result);
// echo $count;

if($count === 1){
        // $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $user = mysqli_fetch_assoc($result);
    //    print_r($user);
    //    die();
// 3) verifier le mot de passe -   mot de passe interface ===  mot de passe BD hash  
    // echo $password.' = '.$user['password'];
    if(password_verify($password, $user['password'])){
        // echo 'success';
// 4)  Creer une session() 
      
        session_regenerate_id();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);

        header('location:client-create.php');
    }else{
        header('location:login.php?msg=2');
    }

}else{
    header('location:login.php?msg=1');
}


?>

<!-- 
GET - URL   - $_GET
POST - FORM Page -> Page POST ->page  $_POST
COOKIES - navigateur   $_COOKIE
SESSION - serveur   $_SESSION

-->