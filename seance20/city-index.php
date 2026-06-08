<?php

require_once('db/connex.php');

echo "<h3>Cities</h3>";

$sql = "SELECT * FROM city ORDER BY city ASC;";

$result = mysqli_query($connex, $sql);
echo "<h3>".$sql."</h3>";
print_r($result);
echo "<br>";
$cities = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($cities);
echo "<br>";
print_r($cities[2]);
echo "<br>";
echo $cities[1]['city'];
echo "<br>";

foreach($cities as $row){
    echo $row['city']."<br>";
}



$sql = "SELECT * FROM city WHERE id = 1;";
echo "<h3>".$sql."</h3>";
$result = mysqli_query($connex, $sql);

print_r($result);
echo "<br>";
$city = mysqli_fetch_array($result, MYSQLI_ASSOC);
print_r($city);
echo "<br>";
// echo $city[0]['city'];
echo $city['city'];

?>