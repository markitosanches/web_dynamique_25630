<?php
// print_r($_GET);
if(isset($_GET['id']) && $_GET['id']!=null){


$id = $_GET['id'];

require_once('db/connex.php');
$sql = "SELECT * FROM client WHERE id = '$id'";
$result = mysqli_query($connex, $sql);
$client = mysqli_fetch_array($result, MYSQLI_ASSOC);
// print_r($client);
}else{
    header('location:client-index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Show</title>
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
        <h1>Client Details</h1>
        <p><strong>Name: </strong> <?= $client['name'] ?></p>
        <p><strong>Address: </strong> <?= $client['address'] ?></p>
        <p><strong>Phone: </strong> <?= $client['phone'] ?></p>
        <p><strong>Email: </strong> <?= $client['email'] ?></p>
        <p><strong>Birthday: </strong> <?=  $client['birthday'] ?></p>
        <a href="client-edit.php?id=<?= $client['id'] ?>" class="btn">Edit</a>
    </main>
    <footer>
        Copyrights 2026
    </footer>
</body>
</html>