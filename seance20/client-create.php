<?php
require_once('db/connex.php');

$sql = "SELECT * FROM city ORDER BY city;";
$cities = mysqli_query($connex, $sql);
?>

<?php
$title="Add a new client";
include_once('header.php');
?>

        <h1>Client Create</h1>
        <form action="client-store.php" method="post">
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

<?php
include_once('footer.php');
?>

