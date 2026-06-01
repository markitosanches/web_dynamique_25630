<?php

require_once('db/connex.php');

$sql = "SELECT client.id, name, address, phone, email, birthday, city FROM client 
INNER JOIN city ON city_id = city.id
ORDER BY name;"; 
$clients = mysqli_query($connex, $sql);

?>

<?php
$title="List of Clients";
include_once('header.php');
?>

        <h1>Clients</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>City</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($clients as $row){
                ?>
                <tr>
                    <td><?=  $row['name']; ?></td>
                    <td><?=  $row['address']; ?></td>
                    <td><?=  $row['phone']; ?></td>
                    <td><?=  $row['email']; ?></td>
                    <td><?=  $row['birthday']; ?></td>
                    <td><?=  $row['city']; ?></td> 
                    <td><a href="client-show.php?id=<?= $row['id']; ?>" class="btn">Show</a></td> 
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
include_once('footer.php');
?>