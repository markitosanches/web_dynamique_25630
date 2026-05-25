<?php
require_once('db/connex.php');

$sql = "SELECT * FROM city ORDER BY city;";
$cities = mysqli_query($connex, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Edit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
            <li><a href="client-create.php">Client Create</a></li>
        </ul>
    </nav>
    <main>
        <h1>Client Edit</h1>
        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" >
            <label for="address">Address</label>
            <input type="text" id="address" name="address" >
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" >
            <label for="email">Email</label>
            <input type="email" id="email" name="email" >
            <label for="dob">Birthday</label>
            <input type="date" id="dob" name="birthday" >
            <label for="city">City</label>
            <select name="city_id" id="city">
                <option value=""> Select City</option>
                <?php
                    foreach($cities as $row){
                       // echo "<option value='".$row['id']."'>".$row['city']."</option>";
                ?>
                
                    <option value="<?= $row['id'];?>"><?= $row['city'];?></option>
                    
                <?php
                    }
                ?>
            </select>
            <input type="submit" value="Save">
        </form>
    </main>
    <footer>
        Copyrights 2026
    </footer>
</body>
</html>