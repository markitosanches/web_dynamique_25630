<?php

require_once('check-session.php');

// print_r($_GET);
if(isset($_GET['id']) && $_GET['id']!=null){

require_once('db/connex.php');

$id = mysqli_real_escape_string($connex, $_GET['id']);

$sql = "SELECT * FROM client WHERE id = '$id'";
$result = mysqli_query($connex, $sql);

$count = mysqli_num_rows($result );
// echo $count;
// die();
    if($count === 1){
        $client = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //  print_r($client);
        foreach($client as $key=>$value){
            $$key = $value;
        }
    }else{
        header('location:client-index.php');
    }
// print_r($client);
}else{
    header('location:client-index.php');
}

$sql = "SELECT * FROM city ORDER BY city;";
$cities = mysqli_query($connex, $sql);

?>

<?php
$title="Client Edit";
include_once('header.php');
?>

        <h1>Client Edit</h1>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?= $name ?>">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?= $address ?>" >
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?= $phone ?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= $email ?>">
            <label for="dob">Birthday</label>
            <input type="date" id="dob" name="birthday" value="<?= $birthday ?>">
            <label for="city">City</label>
            <select name="city_id" id="city">
                <option value=""> Select City</option>
                <!-- <option value=""> Opt 1</option>
                <option value="" selected> Opt 2</option>
                <option value=""> Opt 3</option> -->
                <?php
                    foreach($cities as $row){
                       // echo "<option value='".$row['id']."'>".$row['city']."</option>";
                ?>
                    <option value="<?= $row['id'];?>" <?php if($row['id'] === $city_id) { echo "selected";} ?>><?= $row['city'];?></option>
                    
                <?php
                    }
                ?>
            </select>
            <input type="submit" value="Save">
        </form>
<?php
include_once('footer.php');
?>