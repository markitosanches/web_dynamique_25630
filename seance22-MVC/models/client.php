<?php

function client_select(){
    require(CONNEX_DIR);
    $sql = "SELECT client.id, name, address, phone, email, birthday, city FROM client 
    INNER JOIN city ON city_id = city.id
    ORDER BY name;"; 
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function client_select_id($id){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT client.id, name, address, phone, email, birthday, city FROM client 
    INNER JOIN city ON city_id = city.id WHERE client.id = '$id';"; 
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}

?>