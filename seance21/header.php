<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
             <?php
            if(isset($_SESSION['fingerPrint'])) {
            ?>
            <li><a href="client-create.php">Client Create</a></li>
             <?php
            }
            ?>
            <li><a href="user-create.php">Register a user</a></li>
        </ul>
         <ul> 
            <?php
            if(isset($_SESSION['fingerPrint'])) {
            ?>
            <li><a href="logout.php">Logout</a></li>
            <?php
            }else{
            ?>
            <li><a href="login.php">Login</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
    <main>