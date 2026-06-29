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
    $sql = "SELECT client.id, name, address, phone, email, birthday, city, city_id FROM client 
    INNER JOIN city ON city_id = city.id WHERE client.id = '$id';"; 
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    return $result;
}

function client_insert($request){
    require(CONNEX_DIR);
    foreach($request as $key => $value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO client (name, address, phone, email, birthday, city_id) VALUES ('$name', '$address', '$phone', '$email', '$birthday', '$city_id')";

    if(mysqli_query($connex, $sql)){
        return mysqli_insert_id($connex);
    }else{
        return false;
    };
}

function client_delete($request){
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $request['id']);
    $sql = "DELETE FROM client WHERE id = '$id'";
    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    };
}

function client_update($request){
    require(CONNEX_DIR);
    foreach($request as $key => $value){
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "UPDATE client SET name = '$name', address = '$address', phone = '$phone', email = '$email', birthday = '$birthday', city_id = '$city_id' WHERE id = '$id'";

    if(mysqli_query($connex, $sql)){
        return true;
    }else{
        return false;
    };
}

?>